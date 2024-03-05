<div class="modal fade" id="modaltrain" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><span id="actionName"> </span> Trainings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="formValidationID">
                    
                    <input class="form-control" hidden name="empID" id="empID" value="<?php echo $empID;?>">
                    <input type="text" name="trainingID" hidden>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="titleName" id="titleName" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Conducted By</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="conductedBy" id="conductedBy" required>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select id="trainingTypeID" class="form-control" name="trainingTypeID" required>
                                 <option selected disabled value="">Please Select Type...</option>
                                <?php foreach(json_decode($trainingTypes) as $new) { ?>
                                <option value="<?php echo $new->trainingTypeID; ?>"><?php echo $new->trainingTypeName; ?>
                                </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>



                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-4">
                            <label for=""> Start Period</label>
                            <input type="date" class="form-control" name="startDate" id="startDate" required>
                        </div>
                        <div class="col-sm-4">

                            <label for=""> End Period</label>
                            <input class="form-control" type="date" id="endDate" name="endDate" required=true>
                        </div>
                        <div class="col-sm-2">

                            <label for=""> No. Hours</label>
                            <input class="form-control" type="text" id="noHours" name="noHours" required=true>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">

                        </label>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="isCertGiven" id="isCertGiven">
                                <label class="form-check-label" for="isCertGiven">
                                    Certificate is Given?
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  name="isCertValid" id="isCertValid">
                                <label class="form-check-label" for="isCertValid">
                                    Certificate is Valid?
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="isSubmitReq" id="isSubmitReq">
                                <label class="form-check-label" for="isSubmited">
                                    Requirement is Submited?
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">

                        </label>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="isInternal" id="isInternal">
                                <label class="form-check-label" for="isInternal">
                                    Training is Internal?
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="isExternal" id="isExternal">
                                <label class="form-check-label" for="isExternal">
                                    Training is External?
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="remarks" id="remarks">
                        </div>
                    </div>




                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  id="saveTrainBtn" onclick="handleTrainSave('<?php echo base_url();?>employee_trainings')"><?php echo "Submit"; ?></button>
                <button type="button" class="btn btn-primary" id="editTrainBtn"
                    onclick="handleTrainUpdate('<?php echo base_url();?>employee_trainings')"><?php echo "Update"; ?></button>
            </div>
        </div>
    </div>
</div>