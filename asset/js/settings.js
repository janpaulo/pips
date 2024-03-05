
// ------------------------------------------------------  OTHER INFO FUNCTION START -------------------------------------------

// for Create function
function handleAddGlobal(modalID) {
	console.log(modalID)
	$('#'+modalID).modal("show");
	$("#saveBtn").show();
	$("#editBtn").hide();
	$("#actionName").html("Add");
}

function handleGlobalSave(baseUrl) {
	var url = baseUrl + "/create";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;
			if (
				x.name.toLowerCase().includes("startdateinvolvement") ||
				x.name.toLowerCase().includes("enddateinvolvement")
			) {
				// Format the date (assuming the date is in "YYYY-MM-DD" format)
				var parts = x.value.split("-");
				var formattedDate = parts[1] + "/" + parts[2] + "/" + parts[0]; // MM/DD/YYYY format
				data[x.name] = formattedDate;
			} else {
				// For non-date fields, simply assign the value to the data object
				data[x.name] = x.value;
			}
		});
	var allFieldsValid = true;

	$("form")
		.find("[required]")
		.each(function () {
			// console.log($(this).val() === null)
			// Check if it's a select element
			if ($(this).is("select")) {
				// Check if the selected option's value is empty
				if (!$(this).val() || $(this).val() === null) {
					allFieldsValid = false;
					$(this).addClass("error");
				}
			} else {
				// For other input types
				if (!$(this).val().trim()) {
					allFieldsValid = false;
					$(this).addClass("error");
				}
			}
		});

	if (allFieldsValid) {
		$.ajax({
			//Process the form using $.ajax()
			type: "POST", //Method type
			url: url, //Your form processing file URL
			data: JSON.stringify(data), //Forms name
			dataType: "json",
			success: function (data) {
				if (data.success) {
					//If fails
					Swal.fire({
						position: "top-center",
						icon: "success",
						title: "Succesfully Added the record",
						showConfirmButton: true,
						//timer: 1500
					}).then(function () {
						window.location.reload();
					});
				} else {
					Swal.fire({
						position: "top-center",
						icon: "error",
						title: "Encounter while saving the record",
						showConfirmButton: true,
						//timer: 1500
					});
				}
			},
		});
	}
}

function handleGlobalUpdate(baseUrl) {
	var url = baseUrl + "/update";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;

			if (
				x.name.toLowerCase().includes("startdateinvolvement") ||
				x.name.toLowerCase().includes("enddateinvolvement")
			) {
				// Format the date (assuming the date is in "YYYY-MM-DD" format)
				var parts = x.value.split("-");
				var formattedDate = parts[1] + "/" + parts[2] + "/" + parts[0]; // MM/DD/YYYY format
				data[x.name] = formattedDate;
			} else {
				// For non-date fields, simply assign the value to the data object
				data[x.name] = x.value;
			}
			// console.log(data[x.name])
		});
	var allFieldsValid = true;
	$("form")
		.find("[required]")
		.each(function () {
			// Check if it's a select element
			if ($(this).is("select")) {
				// Check if the selected option's value is empty
				if (!$(this).val().trim()) {
					allFieldsValid = false;
					$(this).addClass("error");
				}
			} else {
				// For other input types
				if (!$(this).val().trim()) {
					allFieldsValid = false;
					$(this).addClass("error");
				}
			}
		});
	if (allFieldsValid) {
		$.ajax({
			//Process the form using $.ajax()
			type: "POST", //Method type
			url: url, //Your form processing file URL
			data: JSON.stringify(data), //Forms name
			dataType: "json",
			success: function (data) {
				if (data.success) {
					//If fails
					Swal.fire({
						position: "top-center",
						icon: "success",
						title: "Succesfully Update the record",
						showConfirmButton: true,
						//timer: 1500
					}).then(function () {
						window.location.reload();
					});
				} else {
					Swal.fire({
						position: "top-center",
						icon: "error",
						title: "Encounter while Update the record",
						showConfirmButton: true,
						//timer: 1500
					});
				}
			},
		});
	}
}

function editGlobal(encodedJson, modalID) {
	$("#saveBtn").hide();
	$("#editBtn").show();
	$("#actionName").html("Update");
	var jsonString = decodeURIComponent(encodedJson);
	// var jsonString= jsonStrings.replace(/\+(\d+)/g, '+ $1');

	$("#"+modalID).modal("show");
	var formData = JSON.parse(jsonString);
	console.log(formData);
	// // Get reference to the form
	const form = document.getElementById("formValidationID");

	// Loop through each field in the formData object
	for (let fieldName in formData) {
		if (formData.hasOwnProperty(fieldName)) {
			// Find the corresponding input/select field in the form
			const field = form.querySelector(`[name="${fieldName}"]`);

			if (field) {
				// Check if it's a date field
				if (field.type === "date") {
					// Fill in the date field with the value from the formData object
					field.valueAsDate = new Date(formData[fieldName]);
				} else {
					if(formData[fieldName] === null || formData[fieldName] === undefined ){
						field.value =  "" 
					}else{
						field.value = manipulateString(formData[fieldName]);
					}
				}
			}
		}
	}
}

function handleCloseModal(modalID) {
	resetFields();
	$('#'+modalID).hide()
}


// ------------------------------------------------------  OTHER INFO FUNCTION END -------------------------------------------


// -------------------------------------------------------  GLOBAL FUNCTION -------------------------------------------------
function dateParse(dateString) {
	// Input date string
	// Extract date components
	var parts = dateString.split(/[\-+:T]/);
	var year = parseInt(parts[0]);
	var month = parseInt(parts[1]);
	var day = parseInt(parts[2]);

	// Ensure leading zeros for month and day
	var formattedMonth = month < 10 ? "0" + month : month;
	var formattedDay = day < 10 ? "0" + day : day;

	// Format the date
	var formattedDate = formattedMonth + "/" + formattedDay + "/" + year;

	return formattedDate;
	// console.log(formattedDate); // Output: 02/20/2024
}

function resetFields() {
	$('input[type="text"]').val(""); // Reset input fields
	$('input[type="date"]').val(""); // Reset input fields
	$('input[type="number"]').val(""); // Reset input fields
	$("select").prop("selectedIndex", 0); // Reset select elements
	removeErrorClass();
}

$("form").on("input", "[required]", function () {
	if ($(this).val().trim()) {
		$(this).removeClass("error");
	} else {
		$(this).addClass("error");
	}
});

function removeErrorClass() {
	$("form").find("[required]").removeClass("error");
}
