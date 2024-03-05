<div class="modal fade" id="modalelig" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><span id="actionName"> </span>  Eligibility</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    <input class="form-control" hidden name="empID" id="empID" value="<?php echo $empID;?>">
                        <input type="text" name="elgID" hidden>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Date of Exam</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="elgDateExam" id="elgDateExam" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">City/Province of Exam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="elgCityExam" id="elgCityExam" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <label for="staticEmail" class="col-sm-6 col-form-label">License No</label>
                            <input type="text" class="form-control" name="elgLicenseNo" id="elgLicenseNo" required> 
                        </div>
                        <div class="col-sm-5">
                            <label for="staticEmail" class="col-sm-6 col-form-label">Rating</label>
                            <input type="text" class="form-control" name="elgRating" id="elgRating" required>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">License Validity Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="elgLicenseValDate" id="elgLicenseValDate" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-control" name="elgType" required>
                                 <option selected disabled value="">Please Select Type...</option>
                                <?php foreach(json_decode($eligTypes) as $new) { ?>
                                <option value="<?php echo $new->elgType; ?>"><?php echo $new->elgName; ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  id="saveEligBtn" onclick="handleElgbSave('<?php echo base_url();?>employee_eligibilities')"><?php echo "Submit"; ?></button>
                <button type="button" class="btn btn-primary" id="editEligBtn"
                    onclick="handleEligUpdate('<?php echo base_url();?>employee_eligibilities')"><?php echo "Update"; ?></button>
            </div>
        </div>
    </div>
</div>