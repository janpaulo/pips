<div class="modal fade" id="modalvol" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><span id="actionName"> </span> Voluntary Work</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                        <input class="form-control" hidden name="empID" id="empID" value="<?php echo $empID;?>">
                        <input type="text" name="volID" hidden>
                    <div class="mb-3 row">
                        <!-- <label for="staticEmail" class="col-sm-2 col-form-label">Employee No.</label>
                        <div class="col-sm-3">
                          
                        </div> -->
                        <label for="staticEmail" class="col-sm-4 col-form-label">Organization Employer No</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="orgPhicEmployerNo" id="orgPhicEmployerNo" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Organization Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="orgName" id="orgName" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Position Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="position" id="position" >
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Organization Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="orgAddress" id="orgAddress" required>
                        </div>
                    </div>

                   
                    <div class="mb-3 row">
                        <div class="col-sm-4">
                            <label for=""> Start Period</label>
                            <input type="date" class="form-control" name="startDateInvolvement" id="startDateInvolvement" required>
                        </div>
                        <div class="col-sm-4">

                        <label for=""> End Period</label>
                            <input class="form-control" type="date" id="endDateInvolvement" name="endDateInvolvement" required>
                        </div>
                        
                        <div class="col-sm-4">
                            <label for=""> Number of Hours</label>
                            <input type="number" class="form-control" name="involvementHrs" id="involvementHrs" required> 
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
                <button type="button" class="btn btn-primary"  id="saveVolBtn" onclick="handleVolSave('<?php echo base_url();?>voluntary_work')"><?php echo "Submit"; ?></button>
                <button type="button" class="btn btn-primary" id="editVolBtn"
                    onclick="handleVolUpdate('<?php echo base_url();?>voluntary_work')"><?php echo "Save"; ?></button>
            </div>
        </div>
    </div>
</div>