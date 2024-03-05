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


                    <input type="text" name="empID" hidden value="<?php echo $empID;?>">
                    <input type="text" name="familyID" hidden>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Relationship Type :</label>
                        <div class="col-sm-9">
                            <select id="relationType" class="form-control" name="relationType" required>
                                <option selected disabled value="">Choose...</option>
                                <?php foreach(json_decode($familyTypes) as $new) { ?>
                                <option value="<?php echo $new->frelRelationshipType; ?>"><?php echo $new->frtName; ?>
                                </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Name :</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div id="conditionalInput" class="col-sm-3">
                                    <input type="text" class="form-control" name="lName" id="lName"
                                        placeholder="Last Name">
                                    <input type="text" class="form-control" name="motherMaidenanme"
                                        id="motherMaidenanme" placeholder="Maiden Name">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="fName" id="fName"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="mName" id="mName"
                                        placeholder="Middle Name">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="suffix" id="extname"
                                        placeholder="Suffix">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row bdaydiv">

                        <div class="col-sm-7">
                            <label for="staticEmail" class="col-form-label">Birthday :</label>
                            <input type="date" class="form-control date" name="bday" id="bday" required>
                        </div>
                        <div class="col-sm-5">
                            <label for="staticEmail" class="col-form-label">Emergency Contact :</label>
                            <select name="emergencyCtc"  class="form-control"  id="emergencyCtc">
                                <option selected disabled value="">Choose...</option>
                                <option value="0">NO</option>
                                <option value="1">YES</option>
                            </select>
                            <!-- <input type="number" class="form-control" name="emergencyCtc" id="emergencyCtc"> -->
                        </div>
                    </div>

                    <div class="mb-3 row occupationdiv">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Occupation :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="occupation" id="occupation">
                        </div>
                    </div>


                    <div class="mb-3 row employerdiv">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Employer/Business Name :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="employer" id="employer">
                        </div>
                    </div>

                    <div class="mb-3 row workAddressdiv">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Business Address :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="workAddress" id="workAddress">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Telephone/Mobile No :</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="contactNo" id="contactNo">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addFamilyBtn"
                    onclick="handleFamilySave('<?php echo base_url();?>family_Background')"><?php echo "Save"; ?></button>
                <button type="button" class="btn btn-primary" id="editFamilyBtn"
                    onclick="handleFamilyUpdate('<?php echo base_url();?>family_Background')"><?php echo "Save"; ?></button>
            </div>
        </div>
    </div>
</div>