<div class="modal fade" id="educLevel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><span id="actionName"></span>  Education Level</h5>
                <button type="button" class="btn-close" onclick="handleCloseModal('educLevel')"
                    data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">

                
                <input type="text" hidden class="form-control" id="levelID" name="levelID">
                    <div class="mb-3">
                        <label for="levelName" class="form-label">Education Level Name</label>
                        <input type="text" class="form-control" id="levelName" name="levelName">
                    </div>
                    <div class="mb-3">
                        <label for="levelDesc" class="form-label">Education Level Description</label>
                        <input type="text"  class="form-control" id="levelDesc" name="levelDesc"
                            rows="3">
                    </div>
                    <div class="row">

                    <div class="mb-3 col-md-6">
                        <label for="levelCode" class="form-label">Education code</label>
                        <input type="number"  class="form-control" id="levelCode" name="levelCode"
                            rows="3">
                    </div>
                    <div class="mb-3 col-md-6" >
                        <label for="isActive" class="form-label">Is Active</label>
                        <select class="form-select" id="isActive" name="isActive">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    </div>
                    
                    <input hidden type="text" class="form-control" id="createdBy" name="createdBy">


                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="handleCloseModal('educLevel')"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveBtn"
                    onclick="handleGlobalSave('<?php echo base_url();?>education_level')"><?php echo "Submit"; ?></button>
                <button type="button" class="btn btn-primary" id="editBtn"
                    onclick="handleGlobalUpdate('<?php echo base_url();?>education_level')"><?php echo "Update"; ?></button>
            </div>
        </div>
    </div>
</div>