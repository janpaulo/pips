<div class="modal fade" id="modalInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Other Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Employee No.</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-control" name="typeid" required>
                                <?php foreach(json_decode($otherInfoTypes) as $value) { ?>
                                <option value="<?php echo $value->infoTypeID; ?>"><?php echo $value->infoTypeDesc; ?>
                                </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Details</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Type of Skill</label>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-control" name="typeid" required>
                                <?php foreach(json_decode($skillTypes) as $value) { ?>
                                <option value="<?php echo $value->skillID; ?>"><?php echo $value->skillName; ?>
                                </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>





                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleSave()"><?php echo "Save"; ?></button>
            </div>
        </div>
    </div>
</div>