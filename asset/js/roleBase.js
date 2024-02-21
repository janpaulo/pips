var getData = localStorage.getItem('userData');
var getDataParse = JSON.parse(getData);


$(document).ready(function(){


    if(getDataParse.roleID == "1"){
        // adminrole
        $('#adminRole-profile').show()
        $('#EmployeeRole-profile').hide()
        $('#EmployeeRole-dtr').hide()
    
        $('.EmployeeRole').hide()
    
        
        // $('#adminRole-settings').hide()
        // $('#adminRole-hr').hide()
    
        console.log($('#EmployeeRole-profile').val());
    
    }else if (getDataParse.roleID == "2") {
        // employeeRole
        $('#adminRole-profile').hide()
        $('#adminRole-employee').hide()
        $('#adminRole-dtr').hide()
        $('#adminRole-settings').hide()
        $('#adminRole-hr').hide()
        $('#EmployeeRole-profile').show()
        $('#EmployeeRole-dtr').show()
    
        console.log("getDataParse  2222222222222");
    }else if (getDataParse.roleID == "3") {
        // hrRole
    
        console.log("getDataParse  333333333333333");
    }else if (getDataParse.roleID == "4") {
    
        // ComtroRole
        console.log("getDataParse  4444444444444444444");
    
    } else {
        // tresuryRole
        console.log("getDataParse  555555555555555");
    }
    
})

