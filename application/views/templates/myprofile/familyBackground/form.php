<div class="modal fade" id="modalfamily" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                        <label for="staticEmail" class="col-sm-3 col-form-label">Relationship Type :</label>
                        <div class="col-sm-9">
                            <select id="inputState" class="form-control" name="typeid" required>
                                <?php foreach(json_decode($familyTypes) as $new) { ?>
                                    <option value="<?php echo $new->frelRelationshipType; ?>"><?php echo $new->frtName; ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Name :</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="extname" id="extname" placeholder="Suffix">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Employer/Business Name :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Business Address :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="startPeriod" id="empId">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Telephone/Mobile No :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="startPeriod" id="empId">
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