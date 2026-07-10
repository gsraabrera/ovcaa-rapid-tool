<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

//	onscreen events
		$this->events["Dashboard_snippet"] = true;



		}

//	handlers

//	onscreen events
	function event_Dashboard_snippet(&$params)
	{
	session_start();

if (isset($_POST['term'])) {
    $_SESSION['term_id'] = $_POST['term'];
}else{
		$rs = DB::Query("SELECT se.term_id,concat(term,' ', ay) term
        FROM student_enlistments se 
				join student_terms st on st.term_id = se.term_id and term_type = 'Semestral'
        GROUP BY se.term_id, term, ay
        ORDER BY se.term_id DESC
        LIMIT 1");
		$data=$rs->fetchAssoc();
		if($data)
		{
			$_SESSION['term_id'] = $data["term_id"];
			$_SESSION['term'] = $data["term"];
		}
}
echo '<form method="POST">';
echo '<div style="display:flex; justify-content:space-between; align-items:center; width:100%;">';
echo "<div><span style='font-weight:bold; font-size: 30px;'>Term: " . ($_SESSION['term_id'] ?? 'not set') . "</span></div>";





$getTermsWithBilling = DB::Query("select se.term_id,   concat(term,' ', ay) term from student_enlistments se 
join student_terms st on st.term_id = se.term_id and term_type = 'Semestral'
group by se.term_id, term, ay order by se.term_id desc");



echo '<div><select name="term" onchange="this.form.submit()" class="form-control">
  <option value="">-- Select term--</option>';
while( $data=$getTermsWithBilling->fetchAssoc() ) {
    $selected = ($_SESSION['term_id'] ?? '') == $data["term_id"] ? "selected" : "";
    echo '<option value="'.$data["term_id"].'" '.$selected.'>'.$data["term"].'</option>';
}

echo '</select></div>';
echo '</div></form>';
	;
}




}
?>
