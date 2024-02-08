
function handleLogin(params) {
    
    const username = $("#username").val();
    const password = $("#password").val();

    $.ajax({
    type:"POST",
    url:"login/loginAction",
    dataType: "json",
    data: {
        username:username,
        password:password
    },
    success: function(data){
        if(data.success){
          var userDesc = data
          var userResult =  userDesc.result;

            localStorage.setItem('userData', userResult);
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: "Succesfully Login your account",
                showConfirmButton: true
                //timer: 1500
                })
                .then(function(){
                    window.location.href = 'welcome'
                });
        }else{
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: "Incorrect user id or password",
                showConfirmButton: true
                //timer: 1500
                })
        }
        
    },
    error:function(jqXHR, textStatus, errorThrown){

              Swal.fire({
              position: 'top-center',
              icon: 'error',
              title: "Internal Server Error",
              showConfirmButton: true
              //timer: 1500
              })
        }
    });
}

$('.login-page').on('keydown', 'input', function (e) {
  var key = e.which;
  if(key == 13) {
    handleLogin();
    return false;
  }
});

function handleLogout(params) {
  $.ajax({
    type:"GET",
    url:"login/logOutAction",
    success: function(data){
      Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: "Succesfully Log out to your account",
        showConfirmButton: true
        //timer: 1500
        })
        .then(function(){
            window.location.href = '/'
        });

    }
  })
}


$(document).ready(function () {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
       isClosed = false;
  
      trigger.click(function () {
        hamburger_cross();      
      });
  
      function hamburger_cross() {
  
        if (isClosed == true) {          
          overlay.hide();
          trigger.removeClass('is-open');
          trigger.addClass('is-closed');
          isClosed = false;
        } else {   
          overlay.show();
          trigger.removeClass('is-closed');
          trigger.addClass('is-open');
          isClosed = true;
        }
    }
    
    $('[data-toggle="offcanvas"]').click(function () {
          $('#wrapper').toggleClass('toggled');
    });  
  });

  // handle submit button modal
  // function handleSubmit(params) {
  //   console.log("saksakskahskla sakjbsakjbs")
  // }




  
  // ************************************** Working with merge column EXCEL UPLOADED ************************************************************** //
   // Method to upload a valid excel file
   function handleSubmit() {
    var files = document.getElementById('file_upload').files;
    if(files.length==0){
      alert("Please choose any file...");
      return;
    }
    var filename = files[0].name;
    var extension = filename.substring(filename.lastIndexOf(".")).toUpperCase();
    if (extension == '.XLS' || extension == '.XLSX') {
        excelFileToJSON(files[0]);
    }else{
        alert("Please select a valid excel file.");
    }
  }


  function groupByKey(array, key) {
    return array.reduce((hash, obj) => {
        if(obj[key] === undefined) return hash; 
        return Object.assign(hash, { [obj[key]]:( hash[obj[key]] || [] ).concat(obj)})
      }, {})
 }


function mergeObjectsById(objects) {
  const merged = {};
  objects.forEach(obj => {
    const id = obj.emp_id;
    const date = obj.date;
    const key = id + '-' + date; // Combine id and date as a unique key
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
 

// //  by ID
// function mergeObjectsById(objects) {
//   const merged = {};
//   objects.forEach(obj => {
//     const id = obj.emp_id;
    
//     if (!merged[id]) {
//       merged[id] = obj;
//     } else {
//       // Merge the properties of the existing object with the same id
//       Object.assign(merged[id], obj);
//     }
//   });
//   return Object.values(merged);
// }   


  //Method to read excel file and convert it into JSON 
  function excelFileToJSON(file){

      // const objects = [
      //   {
      //       "emp_id": 20359202,
      //       "time_in": "8/1/2022, 5:37:48 AM",
      //       "trminal": 1,
      //       "tme_id": 0,
      //       "date": "8/1/2022",
      //       "exact_time": "5:37:48 AM",
      //       "checkIn": "5:37:48 AM"
      //   },
      //   {
      //       "emp_id": 10008297,
      //       "time_in": "3/13/2023, 8:53:31 AM",
      //       "trminal": 1,
      //       "tme_id": 0,
      //       "date": "3/13/2023",
      //       "exact_time": "8:53:31 AM",
      //       "checkIn": "8:53:31 AM"
      //   },
      //   {
      //       "emp_id": 10008297,
      //       "time_in": "3/15/2023, 8:57:19 AM",
      //       "trminal": 1,
      //       "tme_id": 0,
      //       "date": "3/15/2023",
      //       "exact_time": "8:57:19 AM",
      //       "checkIn": "8:57:19 AM"
      //   },
      //   {
      //       "emp_id": 10008397,
      //       "time_in": "3/8/2023, 12:13:08 PM",
      //       "trminal": 1,
      //       "tme_id": 2,
      //       "date": "3/8/2023",
      //       "exact_time": "12:13:08 PM",
      //       "breakOut": "12:13:08 PM"
      //   },
      //   {
      //       "emp_id": 10008397,
      //       "time_in": "3/8/2023, 12:13:13 PM",
      //       "trminal": 1,
      //       "tme_id": 3,
      //       "date": "3/8/2023",
      //       "exact_time": "12:13:13 PM",
      //       "breakIn": "12:13:13 PM"
      //   },
      //   {
      //       "emp_id": 10008397,
      //       "time_in": "3/8/2023, 4:00:17 PM",
      //       "trminal": 1,
      //       "tme_id": 1,
      //       "date": "3/8/2023",
      //       "exact_time": "4:00:17 PM",
      //       "checkOut": "4:00:17 PM"
      //   },
      //   {
      //       "emp_id": 10008397,
      //       "time_in": "3/8/2023, 4:00:17 PM",
      //       "trminal": 1,
      //       "tme_id": 1,
      //       "date": "3/8/2023",
      //       "exact_time": "4:00:17 PM",
      //       "checkIn": "7:00:17 PM"
      //   },
      //   {
      //       "emp_id": 10008397,
      //       "time_in": "3/10/2023, 1:14:24 PM",
      //       "trminal": 1,
      //       "tme_id": 1,
      //       "date": "3/10/2023",
      //       "exact_time": "1:14:24 PM",
      //       "checkOut": "1:14:24 PM"
      //   },
      //   {
      //       "emp_id": 10008397,
      //       "time_in": "3/13/2023, 6:47:20 AM",
      //       "trminal": 1,
      //       "tme_id": 0,
      //       "date": "3/13/2023",
      //       "exact_time": "6:47:20 AM",
      //       "checkIn": "6:47:20 AM"
      //   },
      //   {
      //       "emp_id": 10008397,
      //       "time_in": "3/14/2023, 12:03:29 PM",
      //       "trminal": 1,
      //       "tme_id": 2,
      //       "date": "3/14/2023",
      //       "exact_time": "12:03:29 PM",
      //       "breakOut": "12:03:29 PM"
      //   }
      // ];
    
      try {
        var result;
        var newResult = [];
        var reader = new FileReader();
        reader.readAsBinaryString(file);
        reader.onload = function(e) {

            var data = e.target.result;
            var workbook = XLSX.read(data, {
                type : 'binary'
                // type : 'binary', cellDates: true, dateNF: 'mm/dd/yyyy;@', raw: true
            });
            workbook.SheetNames.forEach(function(sheetName) {
            var roa = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
            result = roa;
          });
            //displaying the json result
            // var resultEle=document.getElementById("json-result");
            // resultEle.value=JSON.stringify(result, null, 4);
            // resultEle.style.display='block';


          var filteredNames = $(result).filter(function( idx ) {
              return result[idx].trminal === 1;
          }); 

          
          // console.log(filteredNames);
          // $.each(result, function(key, value) {

          //     var date = new Date((value.date - (25567 + 2))*86400*1000);
          //     let dateTime = new Date(Math.round((value.time_in - 25569) * 864e5));
          //     dateTime.setMinutes(dateTime.getMinutes() + dateTime.getTimezoneOffset());
          //     value.date = date;
          //     value.time_in = dateTime.toLocaleString();
          //     value.exact_time = dateTime.toLocaleTimeString();


          //     if(value.trminal == 0) {
          //       value["checkIn"] =dateTime.toLocaleTimeString();
          //     }else if(value.trminal == 1){
          //       value["checkOut"] =dateTime.toLocaleTimeString();
          //     }else if(value.trminal == 2){
          //       value["breakOut"] =dateTime.toLocaleTimeString();
          //     }else if(value.trminal == 3){
          //       value["breakIn"] =dateTime.toLocaleTimeString();
          //     }
          //     newResult.push(value)

          //     // var date = new Date(value.date);
          //     // myDate = new Date(1000*myObj.date_created);

          //     // console.log(date.toString());
          //     // console.log(dateTime.toLocaleString());
          //     // console.log(dateTime.toLocaleTimeString());
          //     // console.log(date.toUTCString());
          // });


          var limited = result.filter((val,i)=>i<10)

          var bar = new Promise((resolve, reject) => {
            result.forEach((value, index, array) => {
              const newobject = {};

                var date = new Date((value.date - (25567 + 2))*86400*1000);
                let dateTime = new Date(Math.round((value.time_in - 25569) * 864e5));
                dateTime.setMinutes(dateTime.getMinutes() + dateTime.getTimezoneOffset());
                value.date = date.toLocaleDateString('en-US');
                value.time_in = dateTime.toLocaleString();
                value.exact_time = dateTime.toLocaleTimeString();


                if(value.tme_id == 0) {
                  value["checkIn"] = dateTime.toLocaleTimeString();
                }else if(value.tme_id == 1){
                  value["checkOut"] =dateTime.toLocaleTimeString();
                }else if(value.tme_id == 2){
                  value["breakOut"] =dateTime.toLocaleTimeString();
                }else if(value.tme_id == 3){
                  value["breakIn"] =dateTime.toLocaleTimeString();
                }
                // newobject['terminal'] = value.trminal;
                // newobject['time_in'] = value.time_in;
                // newobject['tme_id'] = value.tme_id;
                // newobject['emp_id'] = value.emp_id;
                // newobject['exact_time'] = value.exact_time;


                // if (index === array.length -1) resolve();
                newResult.push(value)
            });
          });

          var secondRun = newResult.sort(function(a, b) {
            return (a.emp_id - b.emp_id);
        });
          // console.log(secondRun)
          // const mergedObjects = mergeObjectsById(newResult);
          console.log(mergeObjectsById(secondRun));
          console.log("sahdkalhdkahdka djadjkah");

        //   bar.then(() => {

        //     // console.log(newResult);
        //     console.log('All done!');
        // });
        
          

          // console.log(console.log(groupByKey(filteredNames, 'emp_id')));
          // console.log(groupByKey(result, 'emp_id'))
            }

        }catch(e){
            console.error(e);
        }
  }

  

  // ************************************** end EXCEL UPLOADED ************************************************************** //

/** Get Value **/
function getValue(id) {
	return document.getElementById(id).value;
}

