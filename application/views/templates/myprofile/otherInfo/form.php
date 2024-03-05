<div class="modal fade" id="modalInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><span id="actionName"> </span> Other Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                        <input class="form-control" hidden name="empID" id="empID" value="<?php echo $empID;?>">
                        <input type="text" name="infoID" hidden>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select id="infoType" class="form-control" name="infoType" required>
                                <option selected disabled value="">Choose...</option>
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
                            <input type="text" class="form-control" name="infoDetails" id="infoDetails" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Type of Skill</label>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-control" name="infoTypeOfSkill" required>
                                <option selected disabled value="">Choose...</option>
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
                <button type="button" class="btn btn-primary"  id="saveOtherBtn" onclick="handleOtherSave('<?php echo base_url();?>other_info')"><?php echo "Submit"; ?></button>
                <button type="button" class="btn btn-primary" id="editOtherBtn"
                    onclick="handleOtherUpdate('<?php echo base_url();?>other_info')"><?php echo "Update"; ?></button>
            </div>
        </div>
    </div>
</div>