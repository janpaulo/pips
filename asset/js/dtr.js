$(document).ready(function () {
	$("#dtrTable").DataTable();
	$("#dtrTable_filter").hide();
});

// for update function
function handleEditDtr(empID, time_in, status) {
	var empID = $("#empId").val(empID);
	var empID = $("#timeID").val(time_in);
	var empID = $("#status").val(status);

	$("#modalEdit").modal("show");
}

function handleUpdate(params) {
	$("#modalEdit").modal("hide");
	Swal.fire({
		position: "top-center",
		icon: "success",
		title: "Succesfully updated the record",
		showConfirmButton: true,
		//timer: 1500
	});
}

// for Create function
function handleAddDtr(params) {
	$("#modalAdd").modal("show");

	// Swal.fire({
	//     position: 'top-center',
	//     icon: 'success',
	//     title: "Succesfully updated the record",
	//     showConfirmButton: true
	//     //timer: 1500
	//     })
}

function handleSave(params) {
	$("#modalAdd").modal("hide");
	Swal.fire({
		position: "top-center",
		icon: "success",
		title: "Succesfully saved the record",
		showConfirmButton: true,
		//timer: 1500
	});
}

$("#modalAdd").on("hidden.bs.modal", function () {
	var empID = $("#empId").val();
	var empID = $("#timeID").val();
	var empID = $("#status").val();
	var empID = $("#attachment").val();

	// put your default event here
});

//*********************************************** */ HANDLE DTR SAVE DATA  *******************************************************//
function handleSubmitDTR() {
	var files = document.getElementById("file_upload").files;
	if (files.length == 0) {
		alert("Please choose any file...");
		return;
	}
	var filename = files[0].name;
	var extension = filename.substring(filename.lastIndexOf(".")).toUpperCase();
	if (extension == ".XLS" || extension == ".XLSX") {
		excelFileToJSON(files[0]);
	} else {
		alert("Please select a valid excel file.");
	}
}

function groupByKey(array, key) {
	return array.reduce((hash, obj) => {
		if (obj[key] === undefined) return hash;
		return Object.assign(hash, {
			[obj[key]]: (hash[obj[key]] || []).concat(obj),
		});
	}, {});
}

function mergeObjectsById(objects) {
	const merged = {};
	objects.forEach((obj) => {
		const id = obj.emp_id;
		const date = obj.date;
		const key = id + "-" + date; // Combine id and date as a unique key
		// console.log(obj);
		if (!merged[key]) {
			merged[key] = obj;
		} else {
			// Merge the properties of the existing object with the new object
			Object.assign(merged[key], obj);
		}
	});
	return Object.values(merged);
}

//Method to read excel file and convert it into JSON
function excelFileToJSON(file) {
	try {
		var result;
		var newResult = [];
		var reader = new FileReader();
		reader.readAsBinaryString(file);
		reader.onload = function (e) {
			var data = e.target.result;
			var workbook = XLSX.read(data, {
				type: "binary",
				// type : 'binary', cellDates: true, dateNF: 'mm/dd/yyyy;@', raw: true
			});
			workbook.SheetNames.forEach(function (sheetName) {
				var roa = XLSX.utils.sheet_to_row_object_array(
					workbook.Sheets[sheetName]
				);
				result = roa;
			});
			//displaying the json result
			// var resultEle=document.getElementById("json-result");
			// resultEle.value=JSON.stringify(result, null, 4);
			// resultEle.style.display='block';

			var filteredNames = $(result).filter(function (idx) {
				return result[idx].terminal_id === 1;
			});

			var limited = result.filter((val, i) => i < 10);


			// console.log(result);
			generateDtr(result);
			var bar = new Promise((resolve, reject) => {
				result.forEach((value, index, array) => {
					const newobject = {};

					var date = new Date((value.date - (25567 + 2)) * 86400 * 1000);
					let dateTime = new Date(Math.round((value.time_in - 25569) * 864e5));
					dateTime.setMinutes(
						dateTime.getMinutes() + dateTime.getTimezoneOffset()
					);

					let year = new Intl.DateTimeFormat('en', { year: '2-digit' }).format(date);
					let month = new Intl.DateTimeFormat('en', { month: 'short' }).format(date);
					let day = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date);
					// console.log(`${day}-${month}-${year}`);

					value.date = `${day}-${month}-${year}`;
					// value.date = date.toLocaleDateString("en-US");
					value.time_in = dateTime.toLocaleString();
					value.exact_time = dateTime.toLocaleTimeString();

					if (value.time_id == 0) {
						value["checkIn"] = dateTime.toLocaleTimeString();
					} else if (value.time_id == 1) {
						value["checkOut"] = dateTime.toLocaleTimeString();
					} else if (value.time_id == 2) {
						value["breakOut"] = dateTime.toLocaleTimeString();
					} else if (value.time_id == 3) {
						value["breakIn"] = dateTime.toLocaleTimeString();
					}
					// newobject['terminal'] = value.terminal_id;
					// newobject['time_in'] = value.time_in;
					// newobject['time_id'] = value.time_id;
					// newobject['emp_id'] = value.emp_id;
					// newobject['exact_time'] = value.exact_time;

					// if (index === array.length -1) resolve();
					newResult.push(value);
				});
			});

			var secondRun = newResult.sort(function (a, b) {
				return a.emp_id - b.emp_id;
			});
			// console.log(secondRun)
			// const mergedObjects = mergeObjectsById(newResult);
			// console.log(mergeObjectsById(secondRun));
		};
	} catch (e) {
		console.error(e);
	}
}

function generateDtr(result) {
	dataItem = {};

	dataItem.refNo = "212";																													
	dataItem.dataFile = result;
	dataItem.dateUploaded = "";
	dataItem.startPeriod = "";
	dataItem.endPeriod = "";
	dataItem.status = "";

	// var settings = {
	// 	"url": "http://localhost:7001/pears/PIPS/SaveBulkDtrRecord",
	// 	"method": "POST",
	// 	"timeout": 0,
	// 	"headers": {
	// 	  "Content-Type": "application/json"
	// 	},
	// 	"data": JSON.stringify({
	// 	  "refNo": "212",
	// 	  "dataFile": [
	// 		{
	// 		  "emp_id": 10008711,
	// 		  "dateUploaded": "",
	// 		  "startPeriod": "",
	// 		  "endPeriod": "",
	// 		  "time_in": "",
	// 		  "terminal_in": 16,
	// 		  "time_log": 5,
	// 		  "date": "",
	// 		  "exact_time": "9:57:12 PM"
	// 		}
	// 	  ],
	// 	  "status": "1",
	// 	  "dateUploaded": "",
	// 	  "startPeriod": "",
	// 	  "endPeriod": ""
	// 	}),
	//   };
	  
	//   $.ajax(settings).done(function (response) {
	// 	console.log(response);
	//   });



	console.log(dataItem)
	console.log(result)
}


$( document ).ready(function() {
    

	var $tr = $("table#empTime");
	console.log($tr)
        $tr.clone(true).insertAfter($tr);
        console.log( "ready!" );

    var $tr = $("table#empDetails");
	console.log($tr)
        $tr.clone(true).insertAfter($tr);
        console.log( "ready!" );
    });


function generateTable() {

	var doc = new jspdf.jsPDF();
	var startingPage = doc.internal.getCurrentPageInfo().pageNumber;
	console.log(doc)
    var y = 0;
    // doc.text(80, 30, "DAILY TIME RECORD");
	doc.setFontSize(12);
	var before = "DAILY TIME RECORD ";
    doc.text(before, 90, 10);
	
	doc.setFontSize(10);
	var befores= "Month: _________________________";
    doc.text(befores, 80, 15);
	
	var empDetails = ''
	var timein = ''


	empDetails += '<tr> <td>NAME:</td>'
	empDetails +=  '<td>FNAME M LNAME</td>'
	empDetails +=  '<td>Employee No.</td> '
	empDetails +=  '<td>1234567</td> '
	empDetails +=  '</tr>'
	empDetails += '<tr> <td>POSITION:</td>'
	empDetails +=  '<td>CP III </td>'
	empDetails +=  '<td>Office/Dept:</td> '
	empDetails +=  '<td> ITMD</td> '
	empDetails +=  '</tr>'


	for (let index = 1; index <= 31; index++) {

		timein += '<tr>'
		timein += '<td>'+index+' </td>'
		timein += '<td>07:00 </td>'
		timein += '<td>12:00 </td>'
		timein += '<td>01:00 </td>'
		timein += '<td>04:00 </td>'
		timein += '<td>     </td>'
		timein += '</tr>'
		
	}

	
	$("#empDetails").html(empDetails)
	$("#tableBody").html(timein)

	doc.autoTable({html: '#empDetails',
	theme: 'plain',
	startY:20,tableWidth: 190,
	margin: {left:10, right: 0, top: 0, bottom: 0},
	didParseCell: function (data) {
		var s = data.cell.styles;
		s.lineColor = [255, 255, 255];
		s.lineWidth = 0.1;
		s.font = "helvetica";
		s.fontSize = 8;
		s.cellPadding = 1;
		s.fillColor = [255, 255, 255];
			s.lineColor = [0, 0, 0];
			s.borders = "t";
	}

})
	
	doc.autoTable({html: '#empTime',
	tableWidth: 90,
		theme: 'plain', 
		tableLineColor: [189, 195, 199],
		startY: 35,
		avoidPageSplit: true,
		margin: {left: 10, right: 300, top: 60, bottom: 40},
		didParseCell: function (data) {
			var s = data.cell.styles;
			s.lineColor = [255, 255, 255];
			s.lineWidth = 0.1;
			s.font = "helvetica";
			s.fontSize = 8;
			s.cellPadding = 1;
			s.fillColor = [255, 255, 255];
				s.lineColor = [0, 0, 0];
				s.borders = "t";
		}
	
	})
	doc.setPage(startingPage);
	doc.autoTable({html: '#empTime',
		tableWidth: 90,
		theme: 'plain', tableLineColor: [189, 195, 199],
		// postion top ang startY
		startY: 35,
		avoidPageSplit: true,
		margins: {left: 110, right: 300, top: 60, bottom: 40},
		didParseCell: function (data) {
			var s = data.cell.styles;
			s.lineColor = [255, 255, 255];
			s.lineWidth = 0.1;
			s.font = "helvetica";
			s.fontSize = 8;
			s.cellPadding = 1;
			console.log(s)
			s.fillColor = [255, 255, 255];
				s.lineColor = [0, 0, 0];
				s.borders = "t";
	
		}
		
	
	})
	doc.autoTable({html: '#signatory',
	tableWidth: 90,
		theme: 'plain', 
		tableLineColor: [189, 195, 199],
		startY: 205,
		avoidPageSplit: true,
		margin: {left: 10, right: 300, top: 60, bottom: 0},
		didParseCell: function (data) {
			var s = data.cell.styles;
			// s.lineColor = [255, 255, 255];
			// s.lineWidth = 0.1;
			s.font = "helvetica";
			s.fontSize = 8;
			s.cellPadding = 1.2;
			// s.fillColor = [255, 255, 255];
			// s.lineColor = [0, 0, 0];
			// s.borders = "t";
		}
	
	})
	doc.setPage(startingPage);
	doc.autoTable({html: '#signatory',
		tableWidth: 90,
		theme: 'plain', tableLineColor: [189, 195, 199],
		// postion top ang startY
		startY: 205,
		avoidPageSplit: true,
		margins: {left: 110, right: 300, top: 60, bottom: 0},
		didParseCell: function (data) {
			var s = data.cell.styles;
			// s.lineColor = [255, 255, 255];
			// s.lineWidth = 0.1;
			s.font = "helvetica";
			s.fontSize = 8;
			s.cellPadding = 1.2;
			// s.fillColor = [255, 255, 255];
			// s.lineColor = [0, 0, 0];
			// s.borders = "t";
	
		}
		
	
	})


	window.open(URL.createObjectURL(doc.output("blob")))

	// doc.output('datauristring');    
    // doc.autoTable({
    //     html: '#tableBody',
    //     startY: 70,
    //     theme: 'grid',
    //     columnStyles: {
    //         0: {
    //             halign: 'right',
    //             tableWidth: 100,
    //             },
    //         1: {
    //             tableWidth: 100,
    //            },
    //         2: {
    //             halign: 'right',
    //             tableWidth: 100,
    //            },
    //         3: {
    //             halign: 'right',
    //             tableWidth: 100,
    //            }
    //     },

    // })
    // doc.save('auto_table_pdf');
}


function calculateTotalHours(checkInTimes, checkOutTimes) {
    let totalHours = 0;

    for (let i = 0; i < checkInTimes.length; i++) {
        const checkIn = new Date(checkInTimes[i]);
        const checkOut = new Date(checkOutTimes[i]);

        // Calculate the time difference in milliseconds
        const timeDifference = checkOut - checkIn;

        // Convert the time difference to hours
        const hoursDifference = timeDifference / (1000 * 60 * 60);

        // Add to the total hours
        totalHours += hoursDifference;
    }

    return totalHours;
}

// Example check-in and check-out times
const checkInTimes = ["2023-12-18T08:00:00", "2023-12-18T10:30:00", "2023-12-18T13:45:00"];
const checkOutTimes = ["2023-12-18T10:15:00", "2023-12-18T12:45:00", "2023-12-18T16:30:00"];

// Calculate total hours
const totalHours = calculateTotalHours(checkInTimes, checkOutTimes);

console.log("Total hours:", totalHours);