// ---------------------------------------------- PERSONAL INFO FUNCTION START ----------------------------------------------------

// for Create function
function handleAddFam(params) {
	$("#modalfamily").modal("show");
	$("#addFamilyBtn").show();
	$("#editFamilyBtn").hide();
}

function handleSubmit(params) {
	// $('#btnUpdateProfile').prop('disabled', true);
}

function handleUpdate(params) {
	$("#btnSubmitProfile").prop("disabled", false);
	$("#btnUpdateProfile").prop("disabled", true);

	$("#myForm").find("input, select").prop("disabled", false);
}

$(document).ready(function () {
	$("#myForm").find("input, select").prop("disabled", true);

	$("#myForm").on("change", "input, select", function (event) {
		var changedValue = $(this).val();
		var changedName = $(this).attr("name");
		// Log the name and value of the changed element
		console.log("Element " + changedName + " changed to: " + changedValue);
		// You can add any other actions you want to perform here
	});
});

function handleSubmitApp(baseUrl) {
	var url = baseUrl + "/update";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			data[x.name] = x.value;
		});
	console.log(data);

	// const isValidate =false;

	// var countRequired = 0;
	// var countindex = 0;
	// $(':input[required]:visible').each(function(index) {
	// 	if ($(this).val() == '') {
	// 		countRequired++

	// 	  $('span.form_error').text('A required field was not filled out');
	// 	}
	// 	countindex == index;
	//   });
	//   console.log(countRequired == countindex)

	var allFieldsValid = true;
	$("form")
		.find("[required]")
		.each(function () {
			// Check if it's a select element
			if ($(this).is("select")) {
				// Check if the selected option's value is empty
				if (!$(this).val().trim()) {
					allFieldsValid = false;
					return false; // Exit the loop early if a field is found empty
				}
			} else {
				// For other input types
				if (!$(this).val().trim()) {
					allFieldsValid = false;
					return false; // Exit the loop early if a field is found empty
				}
			}
		});

	// If all required fields are filled out, submit the form
	if (allFieldsValid) {
		console.log("daodaodjaojdo");
		//   this.submit();
	} else {
		// If not, display error messages or perform any other action
		console.log("Not all required fields are filled out.");
	}

	// $.ajax({ //Process the form using $.ajax()
	// 	type      : 'POST', //Method type
	// 	url       : url, //Your form processing file URL
	// 	data      : JSON.stringify(data), //Forms name
	// 	dataType  : 'json',
	// 	success   : function(data) {
	// 	if (!data.success) { //If fails
	// 		if (data.errors.name) { //Returned if any error from process.php
	// 			$('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
	// 		}
	// 	}
	// 	else {
	// 			$('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message
	// 		}
	// 	}
	// });
}

// ---------------------------------------------- PERSONAL INFO FUNCTION END ----------------------------------------------------

// ----------------------------------------------   FAMILY FUNCTION START  ----------------------------------------------------
function manipulateString(inputString) {
	return inputString.replace(/\+/g, " ");
}

$("#motherMaidenanme").hide();

// Listen for change on the select element
$("#relationType").change(function () {
	// Check if the selected value is "mother"
	if ($(this).val() === "1") {
		// If selected value is "mother", hide the conditional input
		$("#motherMaidenanme").hide();
		$(".employerdiv").show();
		$(".workAddressdiv").show();
		$("#lName").show();
	} else if ($(this).val() === "3") {
		$("#motherMaidenanme").hide();
		$(".employerdiv").hide();
		$(".workAddressdiv").hide();
		$("#lName").show();
		$("#employer").val(null).trigger("change");
		$("#workAddress").val(null).trigger("change");
		// $('#motherMaidenanme').hide();
	} else {
		// If selected value is not "mother", show the conditional input
		$("#motherMaidenanme").show();
		$("#lName").hide();
		$(".employerdiv").show();
		$(".workAddressdiv").show();
	}
});

function handleFamilySave(baseUrl) {
	var url = baseUrl + "/create";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;

			if (x.name.toLowerCase().includes("bday")) {
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
					return false; // Exit the loop early if a field is found empty
				}
			} else {
				// For other input types
				if (!$(this).val().trim()) {
					allFieldsValid = false;
					return false; // Exit the loop early if a field is found empty
				}
			}
		});

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

function handleFamilyUpdate(baseUrl) {
	var url = baseUrl + "/update";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;

			if (x.name.toLowerCase().includes("bday")) {
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
					return false; // Exit the loop early if a field is found empty
				}
			} else {
				// For other input types
				if (!$(this).val().trim()) {
					allFieldsValid = false;
					return false; // Exit the loop early if a field is found empty
				}
			}
		});

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

	console.log(data);
}

function editFamilyList(encodedJson) {
	$("#addFamilyBtn").hide();
	$("#editFamilyBtn").show();
	var jsonString = decodeURIComponent(encodedJson);
	// var jsonString= jsonStrings.replace(/\+(\d+)/g, '+ $1');

	$("#modalfamily").modal("show");
	var formData = JSON.parse(jsonString);
	formData.bday = dateParse(formData.bday);
	formData.employer =
		formData.employer === null ? "" : manipulateString(formData.employer);
	formData.mName =
		formData.mName === null ? "" : manipulateString(formData.mName);
	formData.lName =
		formData.lName === null ? "" : manipulateString(formData.lName);
	formData.fName =
		formData.fName === null ? "" : manipulateString(formData.fName);
	formData.motherMaidenanme =
		formData.motherMaidenanme === null
			? ""
			: manipulateString(formData.motherMaidenanme);
	formData.suffix =
		formData.suffix === null ? "" : manipulateString(formData.suffix);
	formData.occupation =
		formData.occupation === null ? "" : manipulateString(formData.occupation);

	//     // Output the manipulated string
	// Manipulating the string

	if (formData.relationType === "1") {
		// If selected value is "mother", hide the conditional input
		$("#motherMaidenanme").hide();
		$("#lName").show();
	} else if (formData.relationType === "3") {
		$("#motherMaidenanme").hide();
		$(".employerdiv").hide();
		$(".workAddressdiv").hide();
		$("#lName").show();
		formData.employer = "";
		formData.workAddress = "";
		// $('#motherMaidenanme').hide();
	} else {
		// If selected value is not "mother", show the conditional input
		$("#motherMaidenanme").show();
		$("#lName").hide();
		$(".employerdiv").show();
		$(".workAddressdiv").show();
	}

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
					// Fill in other fields
					field.value = formData[fieldName];
				}
			}
		}
	}
}

$("#modalfamily").on("hidden.bs.modal", function (e) {
	resetFields();
	// $("#modalfamily input[type=text], #modalfamily select, #modalfamily input[type=date]").val("");
	// console.log("Modal hidden");
	// $("#placeholder-div1").html("");
});

// ------------------------------------------------------- FAMILY FUNCTION END -----------------------------------------------

// ------------------------------------------------------  EDUCATION FUNCTION START -------------------------------------------

// for Create function
function handleAddEduc(params) {
	$("#modaleduc").modal("show");
	$("#saveEducBtn").show();
	$("#editEducBtn").hide();
	$("#actionName").html("Add");
}

function handleEducSave(baseUrl) {
	var url = baseUrl + "/create";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;

			if (x.name.toLowerCase().includes("bday")) {
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

	data.forUpdate = 1;
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

function handleFamilyUpdate(baseUrl) {
	var url = baseUrl + "/update";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;

			if (x.name.toLowerCase().includes("bday")) {
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
	
	data.forUpdate = 1;
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

	if(allFieldsValid){
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

function editEductList(encodedJson) {
	$("#saveEducBtn").hide();
	$("#editEducBtn").show();
	$("#actionName").html("Update");
	var jsonString = decodeURIComponent(encodedJson);
	// var jsonString= jsonStrings.replace(/\+(\d+)/g, '+ $1');

	$("#modaleduc").modal("show");
	var formData = JSON.parse(jsonString);
	formData.school =formData.school === null ? "" : manipulateString(formData.school);
	formData.degree = formData.degree === null ? "" : manipulateString(formData.degree);
	formData.remarks = formData.remarks === null ? "" : manipulateString(formData.remarks);

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
					// Fill in other fields
					field.value = formData[fieldName];
				}
			}
		}
	}
}

$("#modaleduc").on("hidden.bs.modal", function (e) {
	resetFields();
	// $("#modalfamily input[type=text], #modalfamily select, #modalfamily input[type=date]").val("");
	// console.log("Modal hidden");
	// $("#placeholder-div1").html("");
});
// ------------------------------------------------------  EDUCATION FUNCTION END -------------------------------------------

// ------------------------------------------------------  ELIGIBITY FUNCTION START -------------------------------------------
function handleAddElig(params) {
	$("#modalelig").modal("show");
	$("#saveEligBtn").show();
	$("#editEligBtn").hide();
	$("#actionName").html("Add");
}

function handleElgbSave(baseUrl) {
	var url = baseUrl + "/create";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;
			if (
				x.name.toLowerCase().includes("elgdateexam") ||
				x.name.toLowerCase().includes("elglicensevaldate")
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

	// additional params key
	data.forUpdate = 1;
	// console.log(data)

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

function handleEligUpdate(baseUrl) {
	var url = baseUrl + "/update";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;

			if (
				x.name.toLowerCase().includes("elgdateexam") ||
				x.name.toLowerCase().includes("elglicensevaldate")
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

	data.forUpdate = 1;
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

function editElgb(encodedJson) {
	$("#saveEligBtn").hide();
	$("#editEligBtn").show();
	$("#actionName").html("Update");
	var jsonString = decodeURIComponent(encodedJson);
	// var jsonString= jsonStrings.replace(/\+(\d+)/g, '+ $1');

	$("#modalelig").modal("show");
	var formData = JSON.parse(jsonString);
	console.log(formData);
	formData.elgDateExam = dateParse(formData.elgDateExam);
	formData.elgLicenseValDate = dateParse(formData.elgLicenseValDate);
	formData.elgCityExam =
		formData.elgCityExam === null ? "" : manipulateString(formData.elgCityExam);

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
					// Fill in other fields
					field.value = formData[fieldName];
				}
			}
		}
	}
}

$("#modalelig").on("hidden.bs.modal", function (e) {
	resetFields();
});

// ------------------------------------------------------  ELIGIBITY FUNCTION END -------------------------------------------

// ------------------------------------------------------  VOLUNTARY FUNCTION START -------------------------------------------

// for Create function
function handleAddVoluntary(params) {
	$("#modalvol").modal("show");
	$("#saveVolBtn").show();
	$("#editVolBtn").hide();
	$("#actionName").html("Add");
}

function handleVolSave(baseUrl) {
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
			// console.log(data[x.name])
		});
	data.forUpdate = "1";
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

function handleVolUpdate(baseUrl) {
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
	data.forUpdate = "1";
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

function editVoluntary(encodedJson) {
	$("#saveVolBtn").hide();
	$("#editVolBtn").show();
	$("#actionName").html("Update");
	var jsonString = decodeURIComponent(encodedJson);
	// var jsonString= jsonStrings.replace(/\+(\d+)/g, '+ $1');

	$("#modalvol").modal("show");
	var formData = JSON.parse(jsonString);
	formData.endDateInvolvement =
		formData.endDateInvolvement === null
			? ""
			: dateParse(formData.endDateInvolvement);
	formData.startDateInvolvement =
		formData.endDateInvolvement === null
			? ""
			: dateParse(formData.startDateInvolvement);
	formData.orgAddress =
		formData.orgAddress === null ? "" : manipulateString(formData.orgAddress);
	formData.orgName =
		formData.orgName === null ? "" : manipulateString(formData.orgName);
	formData.position =
		formData.position === null ? "" : manipulateString(formData.position);

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
					// Fill in other fields
					field.value = formData[fieldName];
				}
			}
		}
	}
}

$("#modalvol").on("hidden.bs.modal", function (e) {
	resetFields();
});

// ------------------------------------------------------  VOLUNTARY FUNCTION END -------------------------------------------

// ------------------------------------------------------  OTHER INFO FUNCTION START -------------------------------------------

// for Create function
function handleAddInfo(params) {
	$("#modalInfo").modal("show");
	$("#saveOtherBtn").show();
	$("#editOtherBtn").hide();
	$("#actionName").html("Add");
}

function handleOtherSave(baseUrl) {
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

function handleOtherUpdate(baseUrl) {
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

function editOther(encodedJson) {
	$("#saveOtherBtn").hide();
	$("#editOtherBtn").show();
	$("#actionName").html("Update");
	var jsonString = decodeURIComponent(encodedJson);
	// var jsonString= jsonStrings.replace(/\+(\d+)/g, '+ $1');

	$("#modalInfo").modal("show");
	var formData = JSON.parse(jsonString);
	formData.infoDetails =
		formData.infoDetails === null ? "" : manipulateString(formData.infoDetails);

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
					// Fill in other fields
					field.value = formData[fieldName];
				}
			}
		}
	}
}

$("#modalInfo").on("hidden.bs.modal", function (e) {
	resetFields();
});

// ------------------------------------------------------  OTHER INFO FUNCTION END -------------------------------------------

// ------------------------------------------------------  TRAINING FUNCTION START -------------------------------------------

// for Create function
function handleAddTrain(params) {
	$("#modaltrain").modal("show");
	$("#saveTrainBtn").show();
	$("#editTrainBtn").hide();
	$("#actionName").html("Add");
}

function handleTrainSave(baseUrl) {
	var url = baseUrl + "/create";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;
			// console.log(x.name.toLowerCase())
			if ($("[name='" + x.name + "']").is(":checkbox")) {
				// For checkboxes, set the value to true if checked, otherwise false
				data[x.name] = "1";
			} else if (
				x.name.toLowerCase().includes("startdate") ||
				x.name.toLowerCase().includes("enddate")
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

	data.forUpdate = 1;
	data.isCertGiven === undefined ? (data.isCertGiven = "0") : "1";
	data.isCertValid === undefined ? (data.isCertValid = "0") : "1";
	data.isExternal === undefined ? (data.isExternal = "0") : "1";
	data.isInternal === undefined ? (data.isInternal = "0") : "1";
	data.isSubmitReq === undefined ? (data.isSubmitReq = "0") : "1";

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

function handleTrainUpdate(baseUrl) {
	var url = baseUrl + "/update";
	var data = {};
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;
			if ($("[name='" + x.name + "']").is(":checkbox")) {
				// For checkboxes, set the value to true if checked, otherwise false
				data[x.name] = "1";
			} else if (
				x.name.toLowerCase().includes("startdate") ||
				x.name.toLowerCase().includes("enddate")
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

	data.forUpdate = 1;
	data.isCertGiven === undefined ? (data.isCertGiven = "0") : "1";
	data.isCertValid === undefined ? (data.isCertValid = "0") : "1";
	data.isExternal === undefined ? (data.isExternal = "0") : "1";
	data.isInternal === undefined ? (data.isInternal = "0") : "1";
	data.isSubmitReq === undefined ? (data.isSubmitReq = "0") : "1";
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

function editTrain(encodedJson) {
	$("#saveTrainBtn").hide();
	$("#editTrainBtn").show();
	$("#actionName").html("Update");
	var jsonString = decodeURIComponent(encodedJson);
	// var jsonString= jsonStrings.replace(/\+(\d+)/g, '+ $1');

	$("#modaltrain").modal("show");
	var formData = JSON.parse(jsonString);
	formData.startDate =
		formData.startDate === null ? "" : dateParse(formData.startDate);
	formData.endDate =
		formData.endDate === null ? "" : dateParse(formData.endDate);
	formData.titleName =
		formData.titleName === null ? "" : manipulateString(formData.titleName);
	formData.conductedBy =
		formData.conductedBy === null ? "" : manipulateString(formData.conductedBy);
	formData.remarks =
		formData.remarks === null ? "" : manipulateString(formData.remarks);

	// console.log(formData);
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
					// Fill in other fields
					field.value = formData[fieldName];
				}
			}
		}
	}
}

$("#modaltrain").on("hidden.bs.modal", function (e) {
	resetFields();
});

// ------------------------------------------------------  TRAINING FUNCTION END -------------------------------------------

// ------------------------------------------------------  WORK EXPERIENCES FUNCTION START -------------------------------------------

$(document).ready(function () {
	// Attach event listener to the checkbox
	$("#isGovernmentService").change(function () {
		console.log("sasasas");
		// Check if the checkbox is checked
		if ($(this).is(":checked")) {
			// Enable the select element
			$("#apptStatus").prop("disabled", false);
		} else {
			// Disable the select element
			$("#apptStatus").val("");
			$("#apptStatus").prop("disabled", true);
		}
	});
});
// for Create function
function handleAddWorkExp(params) {
	$("#modalwork").modal("show");
	$("#saveWorkBtn").show();
	$("#editWorkBtn").hide();
	$("#actionName").html("Add");
}

function handleWorkSave(baseUrl) {
	var url = baseUrl + "/create";
	var data = {};
	var isGovernmentServices = false;

	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;
			// console.log(x.name.toLowerCase())
			if ($("[name='" + x.name + "']").is(":checkbox")) {
				// For checkboxes, set the value to true if checked, otherwise false
				data[x.name] = "1";
				isGovernmentServices = x.value;
			} else if (
				x.name.toLowerCase().includes("startdateemployment") ||
				x.name.toLowerCase().includes("enddateemployment")
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

	if (!isGovernmentServices) {
		data.apptStatus = "";
		data.isGovernmentService = "0";
	} else {
		data.apptStatus;
	}

	data.forUpdate = 1;
	// data.isGovernmentService === undefined? data.isGovernmentService = '0' : data.apptStatus;
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

function handleVWorkUpdate(baseUrl) {
	var url = baseUrl + "/update";
	var data = {};
	var isGovernmentServices = false;
	$("form")
		.serializeArray()
		.map(function (x) {
			// data[x.name] = x.value;
			if ($("[name='" + x.name + "']").is(":checkbox")) {
				// For checkboxes, set the value to true if checked, otherwise false
				data[x.name] = "1";
				isGovernmentServices = x.value;
			} else if (
				x.name.toLowerCase().includes("startdateemployment") ||
				x.name.toLowerCase().includes("enddateemployment")
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

	if (isGovernmentServices === false) {
		data.apptStatus = "";
		data.isGovernmentService = "0";
	} else {
		data.isGovernmentService = "1";
	}

	data.forUpdate = 1;
	var allFieldsValid = true;
	// console.log(isGovernmentServices === false)
	// console.log(data)
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

function editExperience(encodedJson) {
	$("#saveWorkBtn").hide();
	$("#editWorkBtn").show();
	$("#actionName").html("Update");
	var jsonString = decodeURIComponent(encodedJson);
	// var jsonString= jsonStrings.replace(/\+(\d+)/g, '+ $1');

	$("#modalwork").modal("show");
	var formData = JSON.parse(jsonString);
	formData.startDateEmployment =
		formData.startDateEmployment === null
			? ""
			: dateParse(formData.startDateEmployment);
	formData.endDateEmployment =
		formData.endDateEmployment === null
			? ""
			: dateParse(formData.endDateEmployment);
	formData.officeName =
		formData.officeName === null ? "" : manipulateString(formData.officeName);
	formData.workAddress =
		formData.workAddress === null ? "" : manipulateString(formData.workAddress);
	formData.positionTitle =
		formData.positionTitle === null
			? ""
			: manipulateString(formData.positionTitle);
	formData.remarks =
		formData.remarks === null ? "" : manipulateString(formData.remarks);

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
				} else if (field.type === "checkbox") {
					if (formData[fieldName] === "1") {
						// console.log(formData[fieldName])
						// console.log(field.checked)
						$("#apptStatus").prop("disabled", false);
						$(field).prop("checked", true);
					} else {
						$("#apptStatus").prop("disabled", true);
						$(field).prop("checked", false);
					}
					// For checkboxes, check or uncheck based on the value in formData
					// field.checked = formData[fieldName];
				} else {
					// Fill in other fields
					field.value = formData[fieldName];
				}
			}
		}
	}
}

$("#modalwork").on("hidden.bs.modal", function (e) {
	resetFields();
});

// ------------------------------------------------------  WORK EXPERIENCES FUNCTION END -------------------------------------------

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
