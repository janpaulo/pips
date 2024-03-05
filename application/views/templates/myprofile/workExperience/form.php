<div class="modal fade" id="modalwork" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><span id="actionName"> </span> Work Experience</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    

                    <input class="form-control" hidden name="empID" id="empID" value="<?php echo $empID;?>">
                    <input type="text" name="workID" hidden>
                    <input type="text" name="officeCode" hidden>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Employer No</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="phicEmployeerNo" id="phicEmployeerNo"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 row align-items-end">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Item Code</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="itemCode" id="itemCode"
                                >
                        </div>
                        <div class="col-sm-5 form-check">
                            <input class="form-check-input" type="checkbox" value="" name="isGovernmentService"
                                id="isGovernmentService">
                            <label class="form-check-label" for="isGovernmentService">
                                Goverment Service ?
                            </label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="officeName" id="officeName">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Work Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="workAddress" id="workAddress" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Position Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="positionTitle" id="positionTitle" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Appointment Status</label>
                        <div class="col-sm-10">
                            <select id="apptStatus" class="form-control" name="apptStatus" disabled>
                                <option selected disabled value="">Please Select Type...</option>
                                <option value="0">Regular</option>
                                <option value="1">Casual</option>
                                <option value="2">Job Order/Contractual</option>
                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <label for=""> Start Period</label>
                            <input type="date" class="form-control" name="startDateEmployment" id="startDateEmployment" required>
                        </div>
                        <div class="col-sm-5">

                            <label for=""> End Period</label>
                            <input class="form-control" type="date" id="endDateEmployment" name="endDateEmployment"
                                required=true>
                        </div>


                    </div>

                    <div class="mb-3 row align-items-end">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-2">
                            <label for="staticEmail" class="col-sm-6 col-form-label">Salary Grade</label>
                            <input type="text" class="form-control" name="salaryGrade" id="salaryGrade">
                        </div>
                        <div class="col-sm-2">
                            <label for="staticEmail" class="col-sm-6 col-form-label">Job Grade</label>
                            <input type="text" class="form-control" name="jobGrade" id="jobGrade">
                        </div>
                        <div class="col-sm-2">
                            <label for="staticEmail" class="col-sm-6 col-form-label">Monthly Salary</label>
                            <input type="text" class="form-control" name="monthlySalary" id="monthlySalary">
                        </div>

                        <div class="col-sm-2">
                            <label for=""> Annual Rate</label>
                            <input type="text" class="form-control" name="annualRate" id="annualRate">
                        </div>
                        <div class="col-sm-2">

                            <label for=""> Daily Rate</label>
                            <input class="form-control" type="text" id="dailyRate" name="dailyRate" >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="remarks" id="remarks" required>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveWorkBtn"
                    onclick="handleWorkSave('<?php echo base_url();?>work_experiences')"><?php echo "Submit"; ?></button>
                <button type="button" class="btn btn-primary" id="editWorkBtn"
                    onclick="handleVWorkUpdate('<?php echo base_url();?>work_experiences')"><?php echo "Save"; ?></button>
            </div>
        </div>
    </div>
</div>