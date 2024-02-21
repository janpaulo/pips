<div class="modal fade" id="modaltrain" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Trainings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Employee No.</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Title Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Conducted By</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-control" name="typeid" required>
                                <?php foreach(json_decode($trainingTypes) as $new) { ?>
                                <option value="<?php echo $new->trainingTypeID; ?>"><?php echo $new->trainingTypeName; ?>
                                </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>



                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <label for=""> Start Period</label>
                            <input type="date" class="form-control" name="date" id="dateToday">
                        </div>
                        <div class="col-sm-5">

                            <label for=""> End Period</label>
                            <input class="form-control" type="date" id="appt" name="appt" required=true>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">

                        </label>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="isCertGiven">
                                <label class="form-check-label" for="isCertGiven">
                                    Certificate is Given?
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="isCertValid">
                                <label class="form-check-label" for="isCertValid">
                                    Certificate is Valid?
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="isSubmited">
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
                                <input class="form-check-input" type="checkbox" value="" id="isInternal">
                                <label class="form-check-label" for="isInternal">
                                    Training is Internal?
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="isExternal">
                                <label class="form-check-label" for="isExternal">
                                    Training is External?
                                </label>
                            </div>
                        </div>
                    </div>



                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleSave()"><?php echo "Submit"; ?></button>
            </div>
        </div>
    </div>
</div>