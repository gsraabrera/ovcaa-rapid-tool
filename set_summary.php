<?php
include("include/dbcommon.php");

// Global arrays to cache table and field existence
$data = [];
$employeeName = 'test';
$employeeID = '';
$college = '';
$department = '';
$weightedAverage = 0;
$cfics = [];

if (!isset($_SESSION['UserID'])) {
    // User is not logged in; redirect to the login page
    header("Location: login.php"); // Adjust to your login page URL
    exit();
}


$facultyId = filter_input(INPUT_GET, 'faculty_id', FILTER_VALIDATE_INT);
if ($facultyId === false) {
    die("Invalid faculty ID.");
}
$termId = filter_input(INPUT_GET, 'term_id', FILTER_VALIDATE_INT);
if ($termId === false) {
    die("Invalid term ID");
}

$college = filter_input(INPUT_GET, 'college', FILTER_SANITIZE_STRING);
if (!$college || trim($college) === '') {
    die("College is required.");
}

$department = filter_input(INPUT_GET, 'department', FILTER_SANITIZE_STRING);
if (!$department || trim($department) === '') {
    die("Department is required.");
}

$idsString = filter_input(INPUT_GET, 'ids', FILTER_SANITIZE_STRING);
$idsArray = explode(',', $idsString);
$validIds = array_filter($idsArray, fn($id) => filter_var($id, FILTER_VALIDATE_INT) !== false);
if (empty($validIds)) {
    die("No valid courses selected.");
}
$validIds = array_map('intval', $validIds);


function getClassSummary($facultyId,$termId,$validIds) {
    global $data;
    global $employeeName;
    global $weightedAverage;
    global $cfics;
    $idList = implode(',', $validIds);
    $query = "SELECT CONCAT(last_name, ', ', first_name,' ', middle_name) faculty_name,
        sterm.term_id,
        ay,
        class_id,
        course_code,
        SECTION,
        scr.cfic_id,
        faculties.faculty_id,
        cfic.type,
        parent_class_id,
        parent_fac,
        ss.total_students,
       	AVG(CASE 
                    WHEN sq.type='Cognitive' THEN mean
                    ELSE NULL
                END)::DECIMAL(10,2) AS cognitive,
        AVG(CASE 
                    WHEN sq.type='Affective' THEN mean
                    ELSE NULL
                END)::DECIMAL(10,2) AS affective,
        AVG(CASE 
                    WHEN sq.type='Fairness' THEN mean
                    ELSE NULL
                END)::DECIMAL(10,2) AS fairness,
        AVG(mean)::DECIMAL(10,2) as ratings
           FROM set_cfic_results scr
join set_questions sq on sq.id = scr.set_question_id 
       INNER JOIN class_faculty_in_charge AS cfic ON scr.cfic_id = cfic.id
        INNER JOIN faculties ON cfic.faculty_id = faculties.faculty_id
        INNER JOIN users ON faculties.user_id = users.id
        INNER JOIN classes ON cfic.class_id = classes.id
        INNER JOIN courses ON classes.course_id = courses.course_id
        INNER JOIN student_terms AS sterm ON scr.term_id = sterm.term_id
        left join (
        	select ss.cfic_id, count(distinct ss.student_id ) total_students from student_sets ss group by ss.cfic_id 
        ) ss on ss.cfic_id = scr.cfic_id
        LEFT JOIN (
		  		SELECT classes.id, faculty_id parent_fac  FROM classes 
				INNER JOIN class_faculty_in_charge AS cfic ON cfic.class_id = classes.id
				WHERE 
				cfic.status='ACTIVE'
		  ) parent ON  parent.id = classes.parent_class_id AND parent_fac=cfic.faculty_id
where answer_type = 'likert' and faculties.faculty_id=$facultyId AND scr.term_id=$termId 
        AND scr.cfic_id IN ($idList) AND cfic.is_display_set = true
group by CONCAT(last_name, ', ', first_name,' ', middle_name),
        sterm.term_id,
        ay,
        class_id,
        course_code,
        SECTION,
        scr.cfic_id,
        faculties.faculty_id,
        cfic.type,
        parent_class_id,
        parent_fac,
        ss.total_students";
    $stmt = DB::Query($query);
    $sumRatings = 0;
    $rowCount = 0;
    while ($row = $stmt->fetchAssoc()) {
        $data[] = [
            $row['term_id'],
            $row['ay'],
            $row['course_code'],
            $row['section'],
            $row['total_students'],
            $row['cognitive'],
            $row['affective'],
            $row['fairness'],
            $row['ratings'],
        ];
        // Add the rating to the total sum
        $sumRatings += $row['ratings'];
        $rowCount++;
        $employeeName = $row['faculty_name'];
        $cfics[] = [
            'cfic_id' => $row['cfic_id'],
            'total_students' => $row['total_students'],
            'section' => $row['section'],
            'course_code' => $row['course_code'],
            'ratings' => $row['ratings'],
        ];
    }
    $weightedAverage = $rowCount > 0 ? number_format(round($sumRatings / $rowCount, 2),2) : 0;
}

function getQuestionsAndAnswers($cficId)
{
    $query = "SELECT 
                  sq.question, 
                  sets.answer, 
                  courses.course_code, 
                  classes.section 
              FROM student_sets ss
              JOIN class_faculty_in_charge cfic ON cfic.id = ss.cfic_id
              JOIN SETS sets ON sets.student_set_id = ss.id
              JOIN set_questions sq ON sets.set_question_id = sq.id
              JOIN classes ON classes.id = cfic.class_id
              JOIN courses ON courses.course_id = classes.course_id
              WHERE cfic_id=$cficId AND answer_type='essay' AND cfic.is_display_set = true";
    $stmt = DB::Query($query);
    $questionsAnswers = [];
    while ($row = $stmt->fetchAssoc()) {
        $key = "{$row['course_code']} - Section {$row['section']}";
        $questionsAnswers[$key][$row['question']][] = $row['answer'];
    }
    return $questionsAnswers;
}


getClassSummary($facultyId,$termId, $validIds);
require('fpdf.php');

class PDF extends FPDF
{

    private $employeeName;
    private $employeeID;
    private $college;
    private $department;
    private $weightedAverage;

    // Constructor
    public function __construct($employeeName, $employeeID, $college, $department)
    {
        parent::__construct();
        $this->employeeName = $employeeName;
        $this->employeeID = $employeeID;
        $this->college = $college;
        $this->department = $department;
    }
    // Page header
    function Header()
    {

    }

    function Page1Head(){
                // Add a title
                $this->SetFont('Arial', 'B', 11);
                $this->Cell(0, 5, iconv('UTF-8', 'ISO-8859-1', 'UNIVERSITY OF THE PHILIPPINES LOS BAÑOS'), 0, 1, 'C');
                $this->Cell(0, 5, 'SUMMARY OF TEACHING PERFORMANCE RATINGS OF FACULTY GIVEN BY', 0, 1, 'C');
                $this->Cell(0, 5, 'HIS/HER STUDENTS IN THE COURSES AND SEMESTER INDICATED', 0, 1, 'C');
                $this->Ln(10);
        
                $this->SetFont('Arial', 'B', 10);
                $this->Cell(30, 5, "Employee Name:", 0, 0, 'L');

                $this->SetFont('Arial', '', 10);

                $x = $this->GetX();
                $y = $this->GetY();

                $this->MultiCell(80, 5, $this->employeeName, 0, 'L');

                $this->SetXY($x + 80, $y);

                $this->SetFont('Arial', 'B', 10);
                $this->Cell(18, 5, "College:", 0, 0, 'L');

                $this->SetFont('Arial', '', 10);
                $this->Cell(62, 5, $this->college, 0, 0, 'L');
                $this->Ln(5);
                $this->SetFont('Arial', 'B', 10);
                $this->Cell(30, 5, "Employee ID:", 0, 0, 'L');
                $this->SetFont('Arial', '', 10);
                $this->Cell(80, 5, $this->employeeID, 0, 0, 'L');
                $this->SetFont('Arial', 'B', 10);
                $this->Cell(22, 5, "Department:", 0, 0, 'L');
                $this->SetFont('Arial', '', 10);
                $this->Cell(80, 5, $this->department, 0, 0, 'L');
                $this->Ln(10);
    }

//     SELECT * FROM student_sets ss
// JOIN class_faculty_in_charge cfic ON cfic.id = ss.cfic_id
// JOIN SETS sets ON  sets.student_set_id = ss.id
// JOIN set_questions sq ON set_question_id = sq.id
// WHERE cfic_id=369607 AND answer_type='essay';

// SELECT * from set_questions;

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    // Table creation function
    function Table($header, $data)
    {
        $this->SetFont('Arial', 'B', 9);
        // Column widths
        $widths = [15, 18, 15, 20,35,20,20,20,20,20];
        $header = ['Sem', 'A.Y', 'Courses', 'Section', 'No. of Respodent','Cognitive','Affected','Fairness','Ratings'
    ];
        // Header

        for ($i = 0; $i < count($header); $i++) {
            $this->Cell($widths[$i], 7, $header[$i], 0, 0, 'C');
        }
        $this->Ln();
        $this->SetFont('Arial', '', 9);
        // Data rows
        foreach ($data as $row) {
            $this->Cell($widths[0], 6, $row[0], 0, 0, 'C');
            $this->Cell($widths[1], 6, $row[1], 0, 0, 'C');
            $this->Cell($widths[2], 6, $row[2], 0, 0, 'C');
            $this->Cell($widths[3], 6, $row[3], 0, 0, 'C');
            $this->Cell($widths[4], 6, $row[4], 0, 0, 'C');
            $this->Cell($widths[5], 6, $row[5], 0, 0, 'C');
            $this->Cell($widths[6], 6, $row[6], 0, 0, 'C');
            $this->Cell($widths[7], 6, $row[7], 0, 0, 'C');
            $this->Cell($widths[8], 6, $row[8], 0, 0, 'C');
            $this->Ln();
        }
    }

    function WeightedAverage($weightedAverage){
        $this->Ln(10);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(170, 5, "Weighted Average: ", 0, 0, 'R');
        $this->SetFont('Arial', '', 9);
        $this->Cell(7, 5, $weightedAverage, 0, 0, 'R');
    }

    function Signatures(){
        $this->Ln(25);
        $this->SetFont('Arial', '', 10);
        $this->Cell(150, 5, "Prepared By: ", 0, 0, 'R');
        $this->SetFont('Arial', 'B', 11);
        $this->Ln(10);
        $this->Cell(175, 5, "GARRY C. MATIENZO", 0, 0, 'R');

        $this->Ln(25);
        $this->SetFont('Arial', '', 10);
        $this->Cell(30, 5, "Certified true and Correct: ", 0, 0, 'L');
        $this->SetFont('Arial', 'B', 11);
        $this->Ln(10);
        $this->Cell(55, 5, "AGHAM C. CUEVAS", 0, 0, 'R');
        $this->Ln(5);
        $this->SetFont('Arial', '', 11);
        $this->Cell(68, 5, "Vice Chancellor of Academic Affairs", 0, 0, 'R');
    }


    function QuestionsAndAnswers($cficId, $questionsAnswers,$respondents,$termId,$subjectHandled,$ratings)
    {
        $this->AddPage();
        $this->SetFont('Arial', 'B', 11);

           // Start of box (Draw the box first)
        $this->Rect(10, $this->GetY(), 190, 50); // X, Y, Width, Height
        // start of box
        $this->Cell(0, 10, "STUDENT EVALUATION OF TEACHING (SET)", 0, 1, 'C');
        $this->SetFont('Arial', '', 10);
        $this->SetX(15); 
        $this->Cell(120, 10, "Employee ID: ", 10, 0, 'L'); // Label for Employee ID
        $this->Cell(30, 10, "Term: $termId", 0, 0, 'L');       // Label for Term
        $this->Ln(5);
        $this->SetX(15); 
        $this->Cell(120, 10, "Employee Name: $this->employeeName", 0, 0, 'L'); 
        $this->Cell(30, 10, "Subject Handled: $subjectHandled", 0, 0, 'L'); // Label for Subject Handled
        $this->Ln(5);
        $this->SetX(15); 
        $this->Cell(120, 10, "College: ", 0, 0, 'L');               // Label for College
        $this->Cell(30, 10, "Number of Respondents: $respondents", 0, 0, 'L'); // Label for Responde
        $this->Ln(5);
        $this->SetX(15); 
        $this->Cell(120, 10, "Departments:", 0, 0, 'L');                       // Empty value for College
        $this->Cell(30, 10, "Overall Rating: $ratings", 0, 0, 'L');     // Label for No of Respondents
        $this->Ln(10);
        $this->SetX(15); 
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(30, 10, "SUMMARY OF COMMENTS", 0, 0, 'L'); // Label for Responde
        $this->Ln(5);
        // end of box
        $row = 1;
        foreach ($questionsAnswers as $courseSection => $qaData) {
            // // Display course and section
            // $this->SetFont('Arial', 'B', 10);
            // $this->Cell(0, 10, $courseSection, 0, 1, 'L');
            $this->Ln(10);

            foreach ($qaData as $question => $answers) {
                // Display question in bold
                $this->SetFont('Arial', 'B', 10);
                $this->MultiCell(0, 6, "$row. $question",1);
                // Display answers below the question
                $this->SetFont('Arial', '', 9);
                foreach ($answers as $answer) {
                    
                    $this->MultiCell(0, 6, "$answer",1);
                }
                $row++;
            }
        }
    }
}

// Data for the table
$header = ['Sem', 'A.Y', 'Courses', 'Section', 'No. of Respodent','Cognitive','Affected','Fairness','Rating'];
// Create PDF
$pdf = new PDF($employeeName, $employeeID, $college, $department);
$pdf->AddPage();
$pdf->Page1Head();
$pdf->SetFont('Arial', '', 12);
$pdf->Table($header, $data);
$pdf->WeightedAverage($weightedAverage);
$pdf->Signatures();
foreach ($cfics as $cficId) {
    $questionsAnswers = getQuestionsAndAnswers($cficId["cfic_id"]); // Get questions and answers for the current CFIC
    $pdf->QuestionsAndAnswers($cficId["cfic_id"], $questionsAnswers,$cficId["total_students"],$termId,$cficId["course_code"].' '.$cficId["section"],$cficId["ratings"]);
}
$pdf->Output();
?>