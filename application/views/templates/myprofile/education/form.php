<div class="modal fade" id="modaleduc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Education</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Date of Exam</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">City/Province of Exam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <label for="staticEmail" class="col-sm-6 col-form-label">License No</label>
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                        <div class="col-sm-5">
                            <label for="staticEmail" class="col-sm-6 col-form-label">Rating</label>
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">License Validity Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-control" name="typeid" required>
                                <?php foreach(json_decode($educLevel) as $value) { ?>
                                <option value="<?php echo $value->levelID; ?>"><?php echo $value->levelName; ?>
                                </option>
                                <?php } ?>

                            </select>
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

