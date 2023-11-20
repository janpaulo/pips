<div class="create_emp_div">

    <div class="row g-3" style="text-align: center; margin: 0px !important; padding: 0px !important;">
        <h3>Create Employee Profile</h3>
    </div>

    <form> 
        <div class="m-4">
            <ul class="nav nav-tabs" id="myTab">
                <li class="nav-item">
                    <a href="#personal" class="nav-link active" data-bs-toggle="tab">Personal Information</a>
                </li>
                <li class="nav-item">
                    <a href="#family" class="nav-link" data-bs-toggle="tab">Family Background</a>
                </li>
                <li class="nav-item">
                    <a href="#education" class="nav-link" data-bs-toggle="tab">Educational Background</a>
                </li>
                <li class="nav-item">
                    <a href="#civilservice" class="nav-link" data-bs-toggle="tab">Civil Eligibility</a>
                </li>
                <li class="nav-item">
                    <a href="#workexp" class="nav-link" data-bs-toggle="tab">Work Experience</a>
                </li>
                <li class="nav-item">
                    <a href="#training" class="nav-link" data-bs-toggle="tab">Training / Seminar</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active mt-2" id="personal" style="font-size: 12px; font-weight: 700;">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="Lastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="Lastname">
                        </div>
                        <div class="col-md-3">
                            <label for="Firstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="Firstname">
                        </div>
                        <div class="col-md-3">
                            <label for="Middlename" class="form-label">Middlename</label>
                            <input type="text" class="form-control" id="Middlename">
                        </div>
                        <div class="col-md-3">
                            <label for="Extension" class="form-label">Extension (JR, SR)</label>
                            <input type="text" class="form-control" id="Extension">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-4">
                           <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-4">
                           <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-4">
                           <label for="inputProvince" class="form-label">Province</label>
                           <select id="inputProvince" class="form-select">
                              <option selected>Choose...</option>
                              <option>National Capital Region</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-3">
                           <label for="inputCity" class="form-label">City</label>
                           <select id="inputCity" class="form-select">
                              <option selected>Choose...</option>
                              <option>Marikina</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                           <label for="inputbrgy" class="form-label">Barangay</label>
                            <select id="inputbrgy" class="form-select">
                              <option selected>Choose...</option>
                              <option>Malanday</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                              <option selected>Choose...</option>
                              <option>Philippines</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <div class="col-md-3">
                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                            <div class="col-md-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                  Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                  Female
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="cbcivil" class="form-label">Civil Status</label>
                            <select id="cbcivil" class="form-select">
                              <option selected>Choose...</option>
                              <option>Single</option>
                              <option>Widowed</option>
                              <option>Married</option>
                              <option>Separated</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="birthplace" class="form-label">Place of Birth</label>
                            <input type="text" class="form-control" id="birthplace">
                        </div>
                        <div class="col-md-3">
                            <label for="birthdate" class="form-label">Birth Date</label>
                            <input type="text" class="form-control" id="birthdate">
                        </div>
                    </fieldset>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="txtcitizenship" class="form-label">Citizenship</label>
                            <select id="txtcitizenship" class="form-select">
                              <option selected>Choose...</option>
                              <option>Filipino</option>
                              <option>Dual Citizenship</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="birthdate" class="form-label">Telephone No</label>
                            <input type="text" class="form-control" id="birthdate">
                        </div>
                        <div class="col-md-3">
                            <label for="birthdate" class="form-label">Birth Date</label>
                            <input type="text" class="form-control" id="birthdate">
                        </div>
                        <div class="col-md-3">
                            <label for="emailadd" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="emailadd">
                        </div>

                    </div>

                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="Height" class="form-label">Height</label>
                            <input type="text" class="form-control" id="Height">
                        </div>
                        <div class="col-md-3">
                            <label for="Weight" class="form-label">Weight</label>
                            <input type="text" class="form-control" id="Weight">
                        </div>
                        <div class="col-md-3">
                            <label for="Blood" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" id="Blood">
                        </div>
                        <div class="col-md-3">
                            <label for="GSIS" class="form-label">GSIS ID NO.</label>
                            <input type="text" class="form-control" id="GSIS">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="pagibig" class="form-label">PAG-IBIG ID NO.</label>
                            <input type="text" class="form-control" id="pagibig">
                        </div>
                        <div class="col-md-3">
                            <label for="PHILHEALTH" class="form-label">PHILHEALTH NO.</label>
                            <input type="text" class="form-control" id="PHILHEALTH">
                        </div>
                        <div class="col-md-3">
                            <label for="SSS" class="form-label">SSS NO.</label>
                            <input type="text" class="form-control" id="SSS">
                        </div>
                        <div class="col-md-3">
                            <label for="TIN" class="form-label">TIN NO.</label>
                            <input type="text" class="form-control" id="TIN">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade mt-2" id="family" style="font-size: 12px; font-weight: 700;">

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
                            <label for="txtSpouseE" class="form-label">Name Extension (Jr,Sr)</label>
                            <input type="text" class="form-control" id="txtSpouseE">
                        </div>
                    </div>

                    <div class="row g-3" style="margin-bottom: 20px;">
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
                            <label for="txtFathersE" class="form-label">Name Extension (Jr,Sr)</label>
                            <input type="text" class="form-control" id="txtFathersE">
                        </div>
                    </div>

                    <div class="row g-3" style="margin-bottom: 20px;">
                       <div class="col-md-3">
                            <label for="txtMothersMN" class="form-label">Mothers's Maiden Name</label>
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
                    </div>
                    <div class="row g-3" style=" text-align-last: left;">
                      <div class="col-12">
                        <button type="button" class="btn btn-primary">Add Siblings</button>
                      </div>
                    </div>
                </div>
                <div class="tab-pane fade mt-2" id="education" style="font-size: 12px; font-weight: 700;">

                    <div class="row " style="background-color: lightgray;">
                        <h3>Elementary Level</h3>
                    </div>
                    <div class="row g-3">
                       <div class="col-md-6">
                            <label for="txtElemName" class="form-label">Name of School </label>
                            <input type="text" class="form-control" id="txtElemName">
                        </div>
                        <div class="col-md-6">
                            <label for="txtdegree" class="form-label">Basic Education/Degree/Course</label>
                            <input type="text" class="form-control" id="txtdegree">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="elemperiod" class="form-label">Period of Attendance</label>
                            <div class="col-md-4" style="display: flex;">
                                <label for="elemperiodfrom" class="form-label col-md-4">From</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodfrom">
                                <label for="elemperiodto" class="form-label col-md-4">To</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodto">
                            </div>
                        </div>
                        <div class="col-md-3">
                           <label for="elemunits" class="form-label">Highest level/ Units earned</label>
                            <input type="text" class="form-control" id="elemunits" placeholder="">
                        </div>
                        <div class="col-md-2">
                           <label for="ElemYear" class="form-label">Year Graduated</label>
                            <input type="text" class="form-control" id="ElemYear" placeholder="Year Graduated">
                        </div>
                        <div class="col-md-3">
                           <label for="elemHonor" class="form-label">Scholarship/Academic Honor Received</label> 
                           <input type="text" class="form-control" id="elemHonor" placeholder="Honor Receieved">
                        </div>
                    </div>

                    <div class="row g-3" style="border-top: 1px dashed black; margin-top: 50px;background-color: lightgray;">
                        <h3>Secondary Level</h3>
                    </div>
                    <div class="row g-3">
                       <div class="col-md-6">
                            <label for="txtElemName" class="form-label">Name of School </label>
                            <input type="text" class="form-control" id="txtElemName">
                        </div>
                        <div class="col-md-6">
                            <label for="txtdegree" class="form-label">Basic Education/Degree/Course</label>
                            <input type="text" class="form-control" id="txtdegree">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="elemperiod" class="form-label">Period of Attendance</label>
                            <div class="col-md-4" style="display: flex;">
                                <label for="elemperiodfrom" class="form-label col-md-4">From</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodfrom">
                                <label for="elemperiodto" class="form-label col-md-4">To</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodto">
                            </div>
                        </div>
                        <div class="col-md-3">
                           <label for="elemunits" class="form-label">Highest level/ Units earned</label>
                            <input type="text" class="form-control" id="elemunits" placeholder="">
                        </div>
                        <div class="col-md-2">
                           <label for="ElemYear" class="form-label">Year Graduated</label>
                            <input type="text" class="form-control" id="ElemYear" placeholder="Year Graduated">
                        </div>
                        <div class="col-md-3">
                           <label for="elemHonor" class="form-label">Scholarship/Academic Honor Received</label> 
                           <input type="text" class="form-control" id="elemHonor" placeholder="Honor Receieved">
                        </div>
                    </div>

                    <div class="row g-3" style="border-top: 1px dashed black; margin-top: 50px;background-color: lightgray;">
                        <h3>Tertiary/College Level</h3>
                    </div>
                    <div class="row g-3">
                       <div class="col-md-6">
                            <label for="txtElemName" class="form-label">Name of School </label>
                            <input type="text" class="form-control" id="txtElemName">
                        </div>
                        <div class="col-md-6">
                            <label for="txtdegree" class="form-label">Basic Education/Degree/Course</label>
                            <input type="text" class="form-control" id="txtdegree">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="elemperiod" class="form-label">Period of Attendance</label>
                            <div class="col-md-4" style="display: flex;">
                                <label for="elemperiodfrom" class="form-label col-md-4">From</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodfrom">
                                <label for="elemperiodto" class="form-label col-md-4">To</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodto">
                            </div>
                        </div>
                        <div class="col-md-3">
                           <label for="elemunits" class="form-label">Highest level/ Units earned</label>
                            <input type="text" class="form-control" id="elemunits" placeholder="">
                        </div>
                        <div class="col-md-2">
                           <label for="ElemYear" class="form-label">Year Graduated</label>
                            <input type="text" class="form-control" id="ElemYear" placeholder="Year Graduated">
                        </div>
                        <div class="col-md-3">
                           <label for="elemHonor" class="form-label">Scholarship/Academic Honor Received</label> 
                           <input type="text" class="form-control" id="elemHonor" placeholder="Honor Receieved">
                        </div>
                    </div>

                    <div class="row g-3" style="border-top: 1px dashed black; margin-top: 50px;background-color: lightgray;">
                        <h3>Vocational</h3>
                    </div>
                    <div class="row g-3">
                       <div class="col-md-6">
                            <label for="txtElemName" class="form-label">Name of School </label>
                            <input type="text" class="form-control" id="txtElemName">
                        </div>
                        <div class="col-md-6">
                            <label for="txtdegree" class="form-label">Basic Education/Degree/Course</label>
                            <input type="text" class="form-control" id="txtdegree">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="elemperiod" class="form-label">Period of Attendance</label>
                            <div class="col-md-4" style="display: flex;">
                                <label for="elemperiodfrom" class="form-label col-md-4">From</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodfrom">
                                <label for="elemperiodto" class="form-label col-md-4">To</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodto">
                            </div>
                        </div>
                        <div class="col-md-3">
                           <label for="elemunits" class="form-label">Highest level/ Units earned</label>
                            <input type="text" class="form-control" id="elemunits" placeholder="">
                        </div>
                        <div class="col-md-2">
                           <label for="ElemYear" class="form-label">Year Graduated</label>
                            <input type="text" class="form-control" id="ElemYear" placeholder="Year Graduated">
                        </div>
                        <div class="col-md-3">
                           <label for="elemHonor" class="form-label">Scholarship/Academic Honor Received</label> 
                           <input type="text" class="form-control" id="elemHonor" placeholder="Honor Receieved">
                        </div>
                    </div>

                    <div class="row g-3" style="border-top: 1px dashed black; margin-top: 50px;background-color: lightgray;">
                        <h3>Graduate Studies</h3>
                    </div>
                    <div class="row g-3">
                       <div class="col-md-6">
                            <label for="txtElemName" class="form-label">Name of School </label>
                            <input type="text" class="form-control" id="txtElemName">
                        </div>
                        <div class="col-md-6">
                            <label for="txtdegree" class="form-label">Basic Education/Degree/Course</label>
                            <input type="text" class="form-control" id="txtdegree">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="elemperiod" class="form-label">Period of Attendance</label>
                            <div class="col-md-4" style="display: flex;">
                                <label for="elemperiodfrom" class="form-label col-md-4">From</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodfrom">
                                <label for="elemperiodto" class="form-label col-md-4">To</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodto">
                            </div>
                        </div>
                        <div class="col-md-3">
                           <label for="elemunits" class="form-label">Highest level/ Units earned</label>
                            <input type="text" class="form-control" id="elemunits" placeholder="">
                        </div>
                        <div class="col-md-2">
                           <label for="ElemYear" class="form-label">Year Graduated</label>
                            <input type="text" class="form-control" id="ElemYear" placeholder="Year Graduated">
                        </div>
                        <div class="col-md-3">
                           <label for="elemHonor" class="form-label">Scholarship/Academic Honor Received</label> 
                           <input type="text" class="form-control" id="elemHonor" placeholder="Honor Receieved">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade mt-2" id="civilservice" style="font-size: 12px; font-weight: 700;">
                    <div class="row g-3" style="color: red; font-style: italic;">
                        <h6>Notes: Career Service/ RA 1080 (Board/BAR) Under Special Laws/ CES/ CEE/ Barangay Eligibility/ Driver's License</h6>
                    </div>
                   <div class="row g-3">
                        <div class="col-md-4">
                            <label for="Lastname" class="form-label">Eligibility</label>
                            <input type="text" class="form-control" id="Lastname">
                        </div>
                        <div class="col-md-4">
                            <label for="Firstname" class="form-label">Rating</label>
                            <input type="text" class="form-control" id="Firstname">
                        </div>
                        <div class="col-md-4">
                            <label for="Middlename" class="form-label">Date of Examination/ Conferment</label>
                            <input type="text" class="form-control" id="Middlename">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="Extension" class="form-label">Place of Examination</label>
                            <input type="text" class="form-control" id="Extension">
                        </div>
                        <div class="col-md-6">
                            <label for="elemperiod" class="form-label">Period of Attendance</label>
                            <div class="col-md-4" style="display: flex; text-align: right;">
                                <label for="elemperiodfrom" class="form-label col-md-4">From</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodfrom">
                                <label for="elemperiodto" class="form-label col-md-4">To</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodto">
                            </div>
                        </div>
                    </div>
                     <div class="row g-3" style=" text-align-last: left; margin-top: 10px;">
                      <div class="col-12">
                        <button type="button" class="btn btn-primary">Add Eligibility</button>
                      </div>
                    </div>
                </div>
                <div class="tab-pane fade mt-2" id="workexp" style="font-size: 12px; font-weight: 700;">
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
                        <button type="button" class="btn btn-primary">Add Work Experience</button>
                      </div>
                    </div>
                </div>
                <div class="tab-pane fade mt-2" id="training" style="font-size: 12px; font-weight: 700;">
                   
                   <div class="row g-3">
                        <div class="col-md-4">
                            <label for="Lastname" class="form-label">Eligibility</label>
                            <input type="text" class="form-control" id="Lastname">
                        </div>
                        <div class="col-md-4">
                            <label for="Firstname" class="form-label">Rating</label>
                            <input type="text" class="form-control" id="Firstname">
                        </div>
                        <div class="col-md-4">
                            <label for="Middlename" class="form-label">Date of Examination/ Conferment</label>
                            <input type="text" class="form-control" id="Middlename">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="Extension" class="form-label">Place of Examination</label>
                            <input type="text" class="form-control" id="Extension">
                        </div>
                        <div class="col-md-6">
                            <label for="elemperiod" class="form-label">Period of Attendance</label>
                            <div class="col-md-4" style="display: flex; text-align: right;">
                                <label for="elemperiodfrom" class="form-label col-md-4">From</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodfrom">
                                <label for="elemperiodto" class="form-label col-md-4">To</label>
                                <input type="text" class="form-control col-md-4" id="elemperiodto">
                            </div>
                        </div>
                    </div>
                     <div class="row g-3" style=" text-align-last: left; margin-top: 10px;">
                      <div class="col-12">
                        <button type="button" class="btn btn-primary">Add Eligibility</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3" style=" text-align-last: center;">
          <div class="col-12">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
    </form>
</div>


