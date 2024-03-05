<div class="modal fade" id="modaleduc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><span id="actionName"></span> Education</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    
                        <input type="text" name="empID" hidden value="<?php echo $empID;?>">
                        <input type="text" name="educID" hidden>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name of School</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="school" id="school" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                            <select id="levelID" class="form-control" name="levelID" required>
                                <option selected disabled value="">Choose...</option>
                                <?php foreach(json_decode($educLevel) as $new) { ?>
                                <option value="<?php echo $new->levelID; ?>"><?php echo $new->levelName; ?>
                                </option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Basic Education/Degree/Course</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="degree" id="degree">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <label for="staticEmail" class="col-sm-6 col-form-label">From</label>
                            <select id="dateAdmission" class="form-control" name="dateAdmission" required>
                                <option selected disabled value="">Choose a Year...</option>
                                <?php
                                $currentYear = date('Y');
                                // Start looping from 1950 to the current year
                                for ($year = 1950; $year <= $currentYear; $year++) {
                                    echo "<option value='$year'>$year</option>";
                                }
                                ?>
                            </select>
                            <!-- <input type="text" class="form-control" name="startPeriod" id="empId"> -->
                        </div>
                        <div class="col-sm-5">
                            <label for="staticEmail" class="col-sm-6 col-form-label">To</label>
                            <select id="dateCompletion" class="form-control" name="dateCompletion" required>
                                <option selected disabled value="">Choose a Year...</option>
                                <?php
                                $currentYear = date('Y');
                                // Start looping from 1950 to the current year
                                for ($year = 1950; $year <= $currentYear; $year++) {
                                    echo "<option value='$year'>$year</option>";
                                }
                                ?>
                            </select>
                            <!-- <input type="text" class="form-control" name="startPeriod" id="empId"> -->
                        </div>
                    </div>
                    <div class="mb-3 row align-items-end">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <label for="staticEmail" class="col-sm-6 col-form-label">Highest Level/Units Earned</label>
                            <input type="number" class="form-control" name="highestLevel" id="highestLevel">
                        </div>
                        <div class="col-sm-5">
                            <label for="staticEmail" class="col-sm-6 col-form-label">Year Graduate <br /></label>
                            <select id="yearGrad" class="form-control" name="yearGrad">
                                <option selected disabled value="">Choose a Year...</option>
                                <?php
                                $currentYear = date('Y');
                                // Start looping from 1950 to the current year
                                for ($year = 1950; $year <= $currentYear; $year++) {
                                    echo "<option value='$year'>$year</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>



                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Scholarship/Academic Honors
                            Received</label>
                        <div class="col-sm-8">
                            <select id="honorID" class="form-control" name="honorID">
                                <option selected disabled value="">Choose...</option>
                                <?php foreach(json_decode($honorsList) as $new) { ?>
                                <option value="<?php echo $new->honorID; ?>"><?php echo $new->honorName; ?>
                                </option>
                                <?php } ?>

                            </select>
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
                <button type="button" class="btn btn-primary"  id="saveEducBtn" onclick="handleEducSave('<?php echo base_url();?>education')"><?php echo "Submit"; ?></button>
                <button type="button" class="btn btn-primary" id="editEducBtn"
                    onclick="handleFamilyUpdate('<?php echo base_url();?>education')"><?php echo "Save"; ?></button>
            </div>
        </div>
    </div>
</div>