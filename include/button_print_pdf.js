Runner.buttonEvents["print_pdf"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'print_pdf';
	
	if ( !pageObj.buttonEventBefore['print_pdf'] ) {
		pageObj.buttonEventBefore['print_pdf'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
params["term_id"] = row.getFieldValue("term_id");
params["faculty_id"] = row.getFieldValue("faculty_id");




		}
	}
	
	if ( !pageObj.buttonEventAfter['print_pdf'] ) {
		pageObj.buttonEventAfter['print_pdf'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var term_id = result["term_id"];
var faculty_id = result["faculty_id"];
var data = result["data"];

if (!data || data.length === 0) {
    Swal.fire({
        icon: 'warning',
        title: 'No SET Record Found',
        text: 'No evaluation record found.',
        confirmButtonText: 'OK'
    });
    return;
}

// Helper function para i-recalculate ang average rating ng mga naka-check
function recalculateAverage() {
    let selectedRatings = [];
    document.querySelectorAll(".mychk:checked").forEach(chk => {
        let row = chk.closest("tr");
        let rating = parseFloat(row.dataset.rating);
        if (!isNaN(rating)) selectedRatings.push(rating);
    });

    let avg = selectedRatings.length
        ? (selectedRatings.reduce((a, b) => a + b, 0) / selectedRatings.length).toFixed(2)
        : "—";

    document.getElementById("avg-rating").innerText = avg;
}

var html = `
<style>
    table.swal-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    table.swal-table th, table.swal-table td {
        border: 1px solid #ccc;
        padding: 6px;
    }
    table.swal-table tfoot td {
        font-weight: bold;
        background-color: #f0f0f0;
    }
    .info-row {
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        gap: 10px;
    }
    .info-box {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    .info-box label {
        font-weight: bold;
        white-space: nowrap;
    }
    .info-box input {
        flex: 1;
        padding: 4px;
        min-width: 0;
    }
</style>

<div class="info-row">
    <div class="info-box">
        <label>Faculty Name:</label>
        <span>${data[0].faculty_name}</span>
    </div>
    <div class="info-box">
        <label>Department:</label>
        <input type="text" id="department" value="${data[0].acad_org || ''}" >
    </div>
    <div class="info-box">
        <label>College:</label>
        <input type="text" id="college" value="${data[0].acad_group || ''}" >
    </div>
</div>

<table class="swal-table">
    <thead>
        <tr>
            <th>Display</th><th>Sem</th><th>AY</th><th>Course Code</th><th>Section</th>
            <th>No. of Respondents</th><th>Cognitive</th><th>Affective</th><th>Fairness</th><th>Ratings</th>
        </tr>
    </thead>
    <tbody>
`;

data.forEach(function(item) {
    // PostgreSQL boolean sa PHP ay pwedeng bumalik as true, "t", "1", or 1
    var isChecked = (item.is_display_set === true || item.is_display_set === 't' || item.is_display_set === '1' || item.is_display_set === 1) ? 'checked' : '';
    
    html += `
        <tr data-rating="${item.ratings}">
            <td style="text-align:center;">
                <input type="checkbox" class="mychk" value="${item.cfic_id}" data-course="${item.course_code} (${item.section})" ${isChecked}>
            </td>
            <td>${item.term_id}</td>
            <td>${item.ay}</td>
            <td>${item.course_code}</td>
            <td>${item.section}</td>
            <td>${item.total_students}</td>
            <td>${item.cognitive}</td>
            <td>${item.affective}</td>
            <td>${item.fairness}</td>
            <td>${item.ratings}</td>
        </tr>
    `;
});

html += `
    </tbody>
    <tfoot>
        <tr>
            <td colspan="9" style="text-align:right;">Average Rating (Selected):</td>
            <td id="avg-rating">—</td>
        </tr>
    </tfoot>
</table>
`;

Swal.fire({
    title: 'Manage & Generate SET Report',
    html: html,
    width: 950,
    showCancelButton: true,
    confirmButtonText: 'Generate PDF',
    didOpen: () => {
        // 1. Compute initial average pagbukas ng modal
        recalculateAverage();

        // 2. Listener para sa real-time update na may confirmation
        document.querySelectorAll(".mychk").forEach(chk => {
            chk.addEventListener("change", function() {
                const checkbox = this;
                const newState = checkbox.checked;
                const cficId = checkbox.value;
                const courseLabel = checkbox.dataset.course;
                const actionText = newState ? "INCLUDE" : "EXCLUDE";

                // Confirmation prompt (native confirm para hindi magsara ang main Swal modal)
                const isConfirmed = confirm(`Are you sure you want to ${actionText} ${courseLabel} in the SET display/report?`);

                if (!isConfirmed) {
                    // Ibalik sa dating state kapag kinansela
                    checkbox.checked = !newState;
                    return;
                }

                // Disable habang nagse-save sa server
                checkbox.disabled = true;

                const formData = new FormData();
                formData.append("cfic_id", cficId);
                formData.append("is_display_set", newState ? "true" : "false");

                fetch("update_display_set.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(res => {
                    checkbox.disabled = false;
                    if (res.success) {
                        recalculateAverage();
                    } else {
                        alert("Failed to update database: " + (res.message || "Unknown error"));
                        checkbox.checked = !newState; // Revert on error
                    }
                })
                .catch(err => {
                    checkbox.disabled = false;
                    alert("Network error while updating record.");
                    checkbox.checked = !newState; // Revert on error
                });
            });
        });
    }
}).then((resultSwal) => {
    if (resultSwal.isConfirmed) {
        var selected = [];
        document.querySelectorAll(".mychk:checked").forEach(function(chk) {
            selected.push(chk.value);
        });

        if (selected.length === 0) {
            Swal.fire({
                icon: 'warning',
                title: 'No Courses Selected',
                text: 'Please enable at least one course to generate the report.'
            });
            return;
        }

        var ids = selected.join(",");
        var college = encodeURIComponent(document.getElementById("college").value);
        var department = encodeURIComponent(document.getElementById("department").value);

        window.open("set_summary.php?term_id=" + term_id + "&faculty_id=" + faculty_id + "&ids=" + ids + "&college=" + college + "&department=" + department, "_blank");
    }
});
		}
	}
	
	$('a[id="print_pdf"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "print_pdf" + "_" + Runner.genId();
		
		// create object
		var button_print_pdf = new Runner.form.Button({
			id: this.id ,
			btnName: "print_pdf"
		});
		
		// init
		button_print_pdf.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

