<div class="content-wrapper">
    <section class="content">
        <div class="form-group  mb-3t mt-3">
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="Lastname" class="form-label" require>Last Name*</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" require>
                </div>
                <div class="col-md-3">
                    <label for="Firstname" class="form-label">First Name* </label>
                    <input type="text" class="form-control" id="firstname" name="firstname" require>
                </div>
                <div class="col-md-3">
                    <label for="Middlename" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" name="middlename" id="Middlename">
                </div>
                <div class="col-md-3">
                    <label for="Extension" class="form-label">Extension (JR, SR)</label>
                    <input type="text" class="form-control" name="extanme" id="extanme">
                </div>
            </div>


            <div class="row mb-3">

                <div class="col-md-3">
                    <label for="birthdate" class="form-label">Birth Date*</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                </div>
                <div class="col-md-3">
                    <label for="birthplace" class="form-label">Place of Birth*</label>
                    <input type="text" class="form-control" id="birthplace" name="place-birth">
                </div>
                <div class="col-md-3">
                    <legend class="col-form-label col-sm-2 pt-0">Gender*</legend>
                    <div class="col-md-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" checked>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="cbcivil" class="form-label">Civil Status*</label>
                    <select id="civilstatus" class="form-select" name="civilstatus">
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
                    <input type="number" class="form-control" id="height" name="height">
                </div>
                <div class="col-md-3">
                    <label for="Weight" class="form-label">Weight(kg)</label>
                    <input type="number" class="form-control" id="weight" name="weight">
                </div>
                <div class="col-md-3">
                    <label for="Blood" class="form-label">Blood Type</label>
                    <input type="text" class="form-control" id="Blood" name="blood">
                </div>
                <div class="col-md-3">
                    <label for="GSIS" class="form-label">GSIS ID NO.</label>
                    <input type="text" class="form-control" id="gsis" name="gsis">
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pagibig" class="form-label">PAG-IBIG ID NO.</label>
                    <input type="number" class="form-control" id="pagibig" name="pagibig">
                </div>
                <div class="col-md-3">
                    <label for="PHILHEALTH" class="form-label">PHILHEALTH NO.</label>
                    <input type="number" class="form-control" id="philhealth" name="philhealth">
                </div>
                <div class="col-md-3">
                    <label for="SSS" class="form-label">SSS NO.</label>
                    <input type="number" class="form-control" id="sss" name="sss">
                </div>
                <div class="col-md-3">
                    <label for="TIN" class="form-label">TIN NO.</label>
                    <input type="number" class="form-control" id="tin" name="tin" maxlength="2">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pagibig" class="form-label">Agency Employee No.</label>
                    <input type="text" class="form-control" id="agencyEmpNo" name="agencyEmpNo">
                </div>
                <div class="col-md-3">
                    <label for="txtcitizenship" class="form-label">Citizenship*</label>
                    <select id="txtcitizenship" class="form-select" name="citizenship">
                        <option selected>Choose...</option>
                        <option>Filipino</option>
                        <option>Dual Citizenship</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="txtcitizenship" class="form-label">Position*</label>
                    <select id="txtcitizenship" class="form-select" name="citizenship">
                        <option selected>Choose...</option>
                        <option>Filipino</option>
                        <option>Dual Citizenship</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="pagibig" class="form-label">Bank Account No.</label>
                    <input type="number" class="form-control" id="agencyEmpNo" name="agencyEmpNo">
                </div>
            </div>
            <hr>
            <h5>PRESENT ADDRESS </h5>
            <hr>
            <div class="row g-3">
                <div class="col-md-2">
                    <label for="inputAddress" class="form-label">House/Block/Lot No.</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor"
                        name="address">
                </div>
                <div class="col-md-2">
                    <label for="inputAddress" class="form-label">Street</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                </div>
                <div class="col-md-4">
                    <label for="inputAddress2" class="form-label">Subdivision/Village</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="" name="address2">
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
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h5>PERMANENT ADDRESS </h5>
                </div>
                <div class="col-md-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <b> Check if same as Present Address</b>
                        </label>
                    </div>
                </div>
            </div>


            <hr>
            <div class="row g-3">
                <div class="col-md-2">
                    <label for="inputAddress" class="form-label">House/Block/Lot No.</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor"
                        name="address">
                </div>
                <div class="col-md-2">
                    <label for="inputAddress" class="form-label">Street</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                </div>
                <div class="col-md-4">
                    <label for="inputAddress2" class="form-label">Subdivision/Village</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="" name="address2">
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
    </section>
</div>