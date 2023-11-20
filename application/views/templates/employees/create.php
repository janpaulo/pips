<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css" />


    <style>
    .bs-stepper .step-trigger {
        padding: 20px 0 !important;
    }
    </style>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <div class="content-wrapper">
        <section class="content p-3">

            <div class="flex-grow-1 flex-shrink-0">
                <div class="mb-5 p-4 bg-white shadow-sm">
                    <div id="stepper1" class="bs-stepper">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#test-l-1">
                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger1"
                                    aria-controls="test-l-1">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Personal Information</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-2">
                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger2"
                                    aria-controls="test-l-2">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Family Background</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-3">
                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger3"
                                    aria-controls="test-l-3">
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">Educational Background</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-4">
                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger4"
                                    aria-controls="test-l-4">
                                    <span class="bs-stepper-circle">4</span>
                                    <span class="bs-stepper-label">Eligibility</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-5">
                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger5"
                                    aria-controls="test-l-5">
                                    <span class="bs-stepper-circle">5</span>
                                    <span class="bs-stepper-label">Work Experience</span>
                                </button>
                            </div>
                            <div class="bs-stepper-line"></div>
                            <div class="step" data-target="#test-l-6">
                                <button type="button" class="step-trigger" role="tab" id="stepper1trigger6"
                                    aria-controls="test-l-6">
                                    <span class="bs-stepper-circle">6</span>
                                    <span class="bs-stepper-label">Training / Seminar</span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <form onSubmit="return false">
                                <!-- Personal Information -->
                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper1trigger1">
                                    <div class="form-group">
                                        <div class="row g-3">
                                            <div class="col-md-3">
                                                <label for="Lastname" class="form-label" require>Lastname*</label>
                                                <input type="text" class="form-control" id="Lastname" name="lastname"
                                                    require>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="Firstname" class="form-label">Firstname* </label>
                                                <input type="text" class="form-control" id="Firstname" name="firstname"
                                                    require>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="Middlename" class="form-label">Middlename</label>
                                                <input type="text" class="form-control" name="middlename"
                                                    id="Middlename">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="Extension" class="form-label">Extension (JR, SR)</label>
                                                <input type="text" class="form-control" name="extanme" id="Extension">
                                            </div>
                                        </div>


                                        <div class="row mb-3">

                                            <div class="col-md-3">
                                                <label for="birthdate" class="form-label">Birth Date*</label>
                                                <input type="date" class="form-control" id="birthdate" name="birthdate">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="birthplace" class="form-label">Place of Birth*</label>
                                                <input type="text" class="form-control" id="birthplace"
                                                    name="place-birth">
                                            </div>
                                            <div class="col-md-3">
                                                <legend class="col-form-label col-sm-2 pt-0">Gender*</legend>
                                                <div class="col-md-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="cbcivil" class="form-label">Civil Status*</label>
                                                <select id="cbcivil" class="form-select" name="civil-status">
                                                    <option selected>Choose...</option>
                                                    <option>Single</option>
                                                    <option>Widowed</option>
                                                    <option>Married</option>
                                                    <option>Separated</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3">
                                                <label for="Height" class="form-label">Height(m)</label>
                                                <input type="text" class="form-control" id="Height" name="height">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="Weight" class="form-label">Weight(kg)</label>
                                                <input type="text" class="form-control" id="Weight" name="weight">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="Blood" class="form-label">Blood Type</label>
                                                <input type="text" class="form-control" id="Blood" name="blood">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="GSIS" class="form-label">GSIS ID NO.</label>
                                                <input type="text" class="form-control" id="GSIS" name="gsis">
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-3">
                                                <label for="pagibig" class="form-label">PAG-IBIG ID NO.</label>
                                                <input type="text" class="form-control" id="pagibig" name="pagibig">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="PHILHEALTH" class="form-label">PHILHEALTH NO.</label>
                                                <input type="text" class="form-control" id="PHILHEALTH"
                                                    name="philhealth">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="SSS" class="form-label">SSS NO.</label>
                                                <input type="text" class="form-control" id="SSS" name="sss">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="TIN" class="form-label">TIN NO.</label>
                                                <input type="text" class="form-control" id="TIN" name="tin">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-3">
                                                <label for="pagibig" class="form-label">Agency Employee No.</label>
                                                <input type="text" class="form-control" id="ageEmpNo" name="ageEmpNo">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtcitizenship" class="form-label">Citizenship*</label>
                                                <select id="txtcitizenship" class="form-select" name="citizenship">
                                                    <option selected>Choose...</option>
                                                    <option>Filipino</option>
                                                    <option>Dual Citizenship</option>
                                                </select>
                                            </div>
                                        </div>

                                        <h4>RESIDENTIAL ADDRESS </h4>
                                        <hr>
                                        <div class="row g-3">
                                            <div class="col-md-2">
                                                <label for="inputAddress" class="form-label">House/Block/Lot No.</label>
                                                <input type="text" class="form-control" id="inputAddress"
                                                    placeholder="Apartment, studio, or floor" name="address">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="inputAddress" class="form-label">Street</label>
                                                <input type="text" class="form-control" id="inputAddress"
                                                    placeholder="1234 Main St" name="address">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputAddress2"
                                                    class="form-label">Subdivision/Village</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="" name="address2">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputProvince" class="form-label">Barangay</label>
                                                <select id="inputProvince" class="form-select" name="province">
                                                    <option selected>Choose...</option>
                                                    <option>cembo</option>
                                                </select>
                                            </div>

                                        </div>


                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label for="inputProvince" class="form-label">City/Municipality</label>
                                                <select id="inputProvince" class="form-select" name="province">
                                                    <option selected>Choose...</option>
                                                    <option>Makati</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputProvince" class="form-label">Province*</label>
                                                <select id="inputProvince" class="form-select" name="province">
                                                    <option selected>Choose...</option>
                                                    <option>National Capital Region</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="PHILHEALTH" class="form-label">zip code</label>
                                                <input type="text" class="form-control" id="zipcode" name="zipcode">
                                            </div>

                                        </div>


                                        <h4>PERMANENT ADDRESS </h4>
                                        <hr>
                                        <div class="row g-3">
                                            <div class="col-md-2">
                                                <label for="inputAddress" class="form-label">House/Block/Lot No.</label>
                                                <input type="text" class="form-control" id="inputAddress"
                                                    placeholder="Apartment, studio, or floor" name="address">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="inputAddress" class="form-label">Street</label>
                                                <input type="text" class="form-control" id="inputAddress"
                                                    placeholder="1234 Main St" name="address">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputAddress2"
                                                    class="form-label">Subdivision/Village</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="" name="address2">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputProvince" class="form-label">Barangay</label>
                                                <select id="inputProvince" class="form-select" name="province">
                                                    <option selected>Choose...</option>
                                                    <option>cembo</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label for="inputProvince" class="form-label">City/Municipality</label>
                                                <select id="inputProvince" class="form-select" name="province">
                                                    <option selected>Choose...</option>
                                                    <option>Makati</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputProvince" class="form-label">Province*</label>
                                                <select id="inputProvince" class="form-select" name="province">
                                                    <option selected>Choose...</option>
                                                    <option>National Capital Region</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="PHILHEALTH" class="form-label">zip code</label>
                                                <input type="text" class="form-control" id="zipcode" name="zipcode">
                                            </div>

                                        </div>


                                        <div class="row g-3">

                                            <div class="col-md-4">
                                                <label for="telno" class="form-label">Telephone No.</label>
                                                <input type="text" class="form-control" id="telno" name="telno">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="telno" class="form-label">Mobile No.</label>
                                                <input type="text" class="form-control" id="telno" name="telno">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="emailadd" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="emailadd" name="emailadd">
                                            </div>

                                        </div>



                                    </div>
                                    <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                </div>
                                <!-- Family -->
                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper1trigger2">
                                    <div class="form-group">
                                        <div class="row g-3" style="margin-bottom: 20px;">
                                            <div class="col-md-3">
                                                <label for="txtSpouseS" class="form-label">Spouse's Surname</label>
                                                <input type="text" class="form-control" id="txtSpouseS">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtSpouseF" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="txtSpouseF">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtSpouseM" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control" id="txtSpouseM">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtSpouseE" class="form-label">Name Extension
                                                    (Jr,Sr)</label>
                                                <input type="text" class="form-control" id="txtSpouseE">
                                            </div>


                                            <div class="col-md-3">
                                                <label for="txtSpouseS" class="form-label">Occupation</label>
                                                <input type="text" class="form-control" id="occupation"
                                                    name="occupation">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtSpouseF" class="form-label">Employer/Business
                                                    Name</label>
                                                <input type="text" class="form-control" id="empyer-name"
                                                    name="empyer-name">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtSpouseM" class="form-label">Business Address</label>
                                                <input type="text" class="form-control" id="bussAdd" name="bussAdd">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtSpouseE" class="form-label">Telephone No.</label>
                                                <input type="text" class="form-control" id="tel" name="tel">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="txtfathersS" class="form-label">Father's Surname</label>
                                                <input type="text" class="form-control" id="txtfathersS">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtFathersF" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="txtFathersF">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtFathersM" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control" id="txtFathersM">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtFathersE" class="form-label">Name Extension
                                                    (Jr,Sr)</label>
                                                <input type="text" class="form-control" id="txtFathersE">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="txtMothersMN" class="form-label">Mothers's Maiden
                                                    Name</label>
                                                <input type="text" class="form-control" id="txtMothersMN">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtMotherS" class="form-label">Surname</label>
                                                <input type="text" class="form-control" id="txtMotherS">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtMotherF" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="txtMotherF">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtMotherM" class="form-label">Middle Name</label>
                                                <input type="text" class="form-control" id="txtMotherM">
                                            </div>


                                            <div class="col-md-6">
                                                <label for="txtSpouseF" class="form-label"><b>Name of CHILDREN(Write
                                                        full name
                                                        and list all)</b></label>
                                                <input type="text" class="form-control" id="children" name="children">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="chilBirth" class="form-label">Date of birth</label>
                                                <input type="date" class="form-control" id="chilBirth" name="chilBirth">
                                            </div>


                                            <div class="row g-3" style=" text-align-last: left;">
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-primary">Add Siblings</button>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                </div>
                                <!-- education -->
                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper1trigger2">
                                    <div class="form-group">
                                        <h5>Elementary Level</h5>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="txtElemName" class="form-label">Name of School </label>
                                                <input type="text" class="form-control" id="txtElemName">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="txtdegree" class="form-label">Basic
                                                    Education/Degree/Course</label>
                                                <input type="text" class="form-control" id="txtdegree">
                                            </div>
                                        </div>

                                        <div class="row mt-2 align-items-end">
                                            <div class="col-md-4">
                                                <label for="elemperiod" class="form-label">Period of Attendance</label>
                                                <div class="col-md-12" style="">
                                                    <div class="row">
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodfrom" class="form-label ">From</label>
                                                            <input type="text" class="form-control" id="elemperiodfrom">
                                                        </div>
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodto" class="form-label">To</label>
                                                            <input type="text" class="form-control" id="elemperiodto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemunits" class="form-label">Highest level/ Units
                                                    earned</label>
                                                <input type="text" class="form-control" id="elemunits" placeholder="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="ElemYear" class="form-label">Year Graduated</label>
                                                <input type="text" class="form-control" id="ElemYear"
                                                    placeholder="Year Graduated">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemHonor" class="form-label">Scholarship/Academic Honor
                                                    Received</label>
                                                <input type="text" class="form-control" id="elemHonor"
                                                    placeholder="Honor Receieved">
                                            </div>
                                        </div>

                                        <div class="row g-3" style="border-top: 1px dashed black; margin-top: 50px;">
                                            <h5>Secondary Level</h5>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="txtElemName" class="form-label">Name of School </label>
                                                <input type="text" class="form-control" id="txtElemName">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="txtdegree" class="form-label">Basic
                                                    Education/Degree/Course</label>
                                                <input type="text" class="form-control" id="txtdegree">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-end">
                                            <div class="col-md-4">
                                                <label for="elemperiod" class="form-label">Period of Attendance</label>
                                                <div class="col-md-12" style="">
                                                    <div class="row mt-2">
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodfrom" class="form-label ">From</label>
                                                            <input type="text" class="form-control" id="elemperiodfrom">
                                                        </div>
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodto" class="form-label">To</label>
                                                            <input type="text" class="form-control" id="elemperiodto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemunits" class="form-label">Highest level/ Units
                                                    earned</label>
                                                <input type="text" class="form-control" id="elemunits" placeholder="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="ElemYear" class="form-label">Year Graduated</label>
                                                <input type="text" class="form-control" id="ElemYear"
                                                    placeholder="Year Graduated">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemHonor" class="form-label">Scholarship/Academic Honor
                                                    Received</label>
                                                <input type="text" class="form-control" id="elemHonor"
                                                    placeholder="Honor Receieved">
                                            </div>
                                        </div>

                                        <div class="row g-3" style="border-top: 1px dashed black; margin-top: 50px;">
                                            <h5>Tertiary/College Level</h5>
                                        </div>
                                        <div class="row g-3 align-items-end">
                                            <div class="col-md-6">
                                                <label for="txtElemName" class="form-label">Name of School </label>
                                                <input type="text" class="form-control" id="txtElemName">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="txtdegree" class="form-label">Basic
                                                    Education/Degree/Course</label>
                                                <input type="text" class="form-control" id="txtdegree">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-end">
                                            <div class="col-md-4">
                                                <label for="elemperiod" class="form-label">Period of Attendance</label>
                                                <div class="col-md-12" style="">
                                                    <div class="row">
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodfrom" class="form-label ">From</label>
                                                            <input type="text" class="form-control" id="elemperiodfrom">
                                                        </div>
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodto" class="form-label">To</label>
                                                            <input type="text" class="form-control" id="elemperiodto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemunits" class="form-label">Highest level/ Units
                                                    earned</label>
                                                <input type="text" class="form-control" id="elemunits" placeholder="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="ElemYear" class="form-label">Year Graduated</label>
                                                <input type="text" class="form-control" id="ElemYear"
                                                    placeholder="Year Graduated">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemHonor" class="form-label">Scholarship/Academic Honor
                                                    Received</label>
                                                <input type="text" class="form-control" id="elemHonor"
                                                    placeholder="Honor Receieved">
                                            </div>
                                        </div>

                                        <div class="row g-3" style="border-top: 1px dashed black; margin-top: 50px;">
                                            <h5>Vocational</h5>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="txtElemName" class="form-label">Name of School </label>
                                                <input type="text" class="form-control" id="txtElemName">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="txtdegree" class="form-label">Basic
                                                    Education/Degree/Course</label>
                                                <input type="text" class="form-control" id="txtdegree">
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-2 align-items-end">
                                            <div class="col-md-4">
                                                <label for="elemperiod" class="form-label">Period of Attendance</label>
                                                <div class="col-md-12" style="">
                                                    <div class="row">
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodfrom" class="form-label ">From</label>
                                                            <input type="text" class="form-control" id="elemperiodfrom">
                                                        </div>
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodto" class="form-label">To</label>
                                                            <input type="text" class="form-control" id="elemperiodto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemunits" class="form-label">Highest level/ Units
                                                    earned</label>
                                                <input type="text" class="form-control" id="elemunits" placeholder="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="ElemYear" class="form-label">Year Graduated</label>
                                                <input type="text" class="form-control" id="ElemYear"
                                                    placeholder="Year Graduated">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemHonor" class="form-label">Scholarship/Academic Honor
                                                    Received</label>
                                                <input type="text" class="form-control" id="elemHonor"
                                                    placeholder="Honor Receieved">
                                            </div>
                                        </div>

                                        <div class="row g-3" style="border-top: 1px dashed black; margin-top: 50px;">
                                            <h5>Graduate Studies</h5>
                                        </div>
                                        <div class="row g-3 ">
                                            <div class="col-md-6">
                                                <label for="txtElemName" class="form-label">Name of School </label>
                                                <input type="text" class="form-control" id="txtElemName">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="txtdegree" class="form-label">Basic
                                                    Education/Degree/Course</label>
                                                <input type="text" class="form-control" id="txtdegree">
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-3 align-items-end">
                                            <div class="col-md-4">
                                                <label for="elemperiod" class="form-label">Period of Attendance</label>
                                                <div class="col-md-12" style="">
                                                    <div class="row">
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodfrom" class="form-label ">From</label>
                                                            <input type="text" class="form-control" id="elemperiodfrom">
                                                        </div>
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodto" class="form-label">To</label>
                                                            <input type="text" class="form-control" id="elemperiodto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemunits" class="form-label">Highest level/ Units
                                                    earned</label>
                                                <input type="text" class="form-control" id="elemunits" placeholder="">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="ElemYear" class="form-label">Year Graduated</label>
                                                <input type="text" class="form-control" id="ElemYear"
                                                    placeholder="Year Graduated">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="elemHonor" class="form-label">Scholarship/Academic Honor
                                                    Received</label>
                                                <input type="text" class="form-control" id="elemHonor"
                                                    placeholder="Honor Receieved">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                </div>
                                <!-- civil -->
                                <div id="test-l-4" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper1trigger2">
                                    <div class="form-group">
                                        <div class="row g-3" style="color: red; font-style: italic;">
                                            <h6>Notes: Career Service/ RA 1080 (Board/BAR) Under Special Laws/ CES/ CEE/
                                                Barangay Eligibility/ Driver's License</h6>
                                        </div>
                                        <div class="row g-3 align-items-end">
                                            <div class="col-md-4">
                                                <label for="Lastname" class="form-label">Eligibility Title</label>
                                                <input type="text" class="form-control" id="Lastname">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Firstname" class="form-label">Rating</label>
                                                <input type="text" class="form-control" id="Firstname">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Middlename" class="form-label">Date of Examination/
                                                    Conferment</label>
                                                <input type="text" class="form-control" id="Middlename">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-end">
                                            <div class="col-md-6">
                                                <label for="Extension" class="form-label">Place of Examination/
                                                    Conferment</label>
                                                <input type="text" class="form-control" id="Extension">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="elemperiod" class="form-label">LICENSE (if applicable)</label>
                                                <div class="col-md-12" style="">
                                                    <div class="row mt-2">
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodfrom" class="form-label ">Number</label>
                                                            <input type="text" class="form-control" id="Number">
                                                        </div>
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodto" class="form-label">Date of Validity</label>
                                                            <input type="date" class="form-control" id="elemperiodto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3" style=" text-align-last: left; margin-top: 10px;">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary">Add Eligibility</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                </div>
                                <!-- work -->
                                <div id="test-l-5" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper1trigger2">
                                    <div class="form-group">

                                        <div class="row g-3" style="color: red; font-style: italic;">
                                            <h6>Notes:(Include private employment. Start from your recent work)
                                                Description of
                                                duties should be indicated in the attached Work Experience sheet.</h6>
                                        </div>
                                        <div class="row g-3">
                                            <table class="table table-responsive table-bordered" id="tblwork">
                                                <thead>
                                                    <th>Position Title</th>
                                                    <th>Company Name</th>
                                                    <th>Address</th>
                                                    <th>Inclusive Dates</th>
                                                    <th>Monthly Salary</th>
                                                    <th>Salary Job Grade</th>
                                                    <th>Appointment Status</th>
                                                    <th>Government Service (Y/N)</th>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row g-3" style=" text-align-last: left; margin-top: 10px;">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary">Add Work
                                                    Experience</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                </div>
                                <!-- trainings -->
                                <div id="test-l-6" role="tabpanel" class="bs-stepper-pane "
                                    aria-labelledby="stepper1trigger6">
                                    <div class="form-group">

                                        <div class="row g-3" style="color: red; font-style: italic;">
                                            <h6> LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED
                                            </h6>
                                        </div>
                                        <div class="row g-3 align-items-end">
                                            <div class="col-md-12">
                                                <label for="Lastname" class="form-label">Title Learning and Development
                                                    Intervention/Training Programs (Write in full)</label>
                                                <input type="text" class="form-control" id="training-title">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="elemperiod" class="form-label">INCLUSIVE DATES OF ATTENDANCE (mm/dd/yyyy)</label>
                                                <div class="col-md-12" style="">
                                                    <div class="row">
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodfrom" class="form-label ">From</label>
                                                            <input type="text" class="form-control" id="elemperiodfrom">
                                                        </div>
                                                        <div class="col-md-6" style="">

                                                            <label for="elemperiodto" class="form-label">To</label>
                                                            <input type="text" class="form-control" id="elemperiodto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="numberhours" class="form-label">Number of Hours</label>
                                                <input type="text" class="form-control" id="numberhours">
                                            </div>
                                        </div>

                                        <div class="row g-3 align-items-end">
                                            <div class="col-md-6">
                                                <label for="Extension" class="form-label">Type of LD
                                                    ( Managerial/ Supervisory/
                                                    Technical/etc) </label>
                                                <input type="text" class="form-control" id="typeID">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Extension" class="form-label">CONDUCTED/ SPONSORED BY (Write
                                                    in
                                                    full)</label>
                                                <input type="text" class="form-control" id="Extension">
                                            </div>
                                        </div>
                                        <div class="row g-3" style=" text-align-last: left; margin-top: 10px;">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary">Add Trainings</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mt-5" onclick="stepper1.previous()">Previous</button>
                                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




                <!-- <div class="mb-5 p-4 bg-white shadow-sm">
        <h5>Form validation</h5>
        <div id="stepperForm" class="bs-stepper">
          <div class="bs-stepper-header" role="tablist">
            <div class="step" data-target="#test-form-1">
              <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger1" aria-controls="test-form-1">
                <span class="bs-stepper-circle">1</span>
                <span class="bs-stepper-label">Email</span>
              </button>
            </div>
            <div class="bs-stepper-line"></div>
            <div class="step" data-target="#test-form-2">
              <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger2" aria-controls="test-form-2">
                <span class="bs-stepper-circle">2</span>
                <span class="bs-stepper-label">Password</span>
              </button>
            </div>
            <div class="bs-stepper-line"></div>
            <div class="step" data-target="#test-form-3">
              <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger3" aria-controls="test-form-3">
                <span class="bs-stepper-circle">3</span>
                <span class="bs-stepper-label">Validate</span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content">
            <form class="needs-validation" onSubmit="return false" novalidate>
              <div id="test-form-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger1">
                <div class="form-group">
                  <label for="inputMailForm">Email address <span class="text-danger font-weight-bold">*</span></label>
                  <input id="inputMailForm" type="email" class="form-control" placeholder="Enter email" required>
                  <div class="invalid-feedback">Please fill the email field</div>
                </div>
                <button class="btn btn-primary btn-next-form">Next</button>
              </div>
              <div id="test-form-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger2">
                <div class="form-group">
                  <label for="inputPasswordForm">Password <span class="text-danger font-weight-bold">*</span></label>
                  <input id="inputPasswordForm" type="password" class="form-control" placeholder="Password" required>
                  <div class="invalid-feedback">Please fill the password field</div>
                </div>
                <button class="btn btn-primary btn-next-form">Next</button>
              </div>
              <div id="test-form-3" role="tabpanel" class="bs-stepper-pane fade text-center" aria-labelledby="stepperFormTrigger3">
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div> -->




            </div>

        </section>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script>
    /* globals Stepper:false */

    (function() {
        'use strict'

        window.stepper1 = new Stepper(document.querySelector('#stepper1'))
        window.stepper2 = new Stepper(document.querySelector('#stepper2'), {
            linear: false
        })
        window.stepper3 = new Stepper(document.querySelector('#stepper3'), {
            linear: false,
            animation: true
        })
        window.stepper4 = new Stepper(document.querySelector('#stepper4'))

        var stepperFormEl = document.querySelector('#stepperForm')
        window.stepperForm = new Stepper(stepperFormEl, {
            animation: true
        })

        var btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'))
        var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'))
        var inputMailForm = document.getElementById('inputMailForm')
        var inputPasswordForm = document.getElementById('inputPasswordForm')
        var form = stepperFormEl.querySelector('.bs-stepper-content form')

        btnNextList.forEach(function(btn) {
            btn.addEventListener('click', function() {
                window.stepperForm.next()
            })
        })

        stepperFormEl.addEventListener('show.bs-stepper', function(event) {
            form.classList.remove('was-validated')
            var nextStep = event.detail.indexStep
            var currentStep = nextStep

            if (currentStep > 0) {
                currentStep--
            }

            var stepperPan = stepperPanList[currentStep]

            if ((stepperPan.getAttribute('id') === 'test-form-1' && !inputMailForm.value.length) ||
                (stepperPan.getAttribute('id') === 'test-form-2' && !inputPasswordForm.value.length)) {
                event.preventDefault()
                form.classList.add('was-validated')
            }
        })
    })();
    </script>
</body>

</html>