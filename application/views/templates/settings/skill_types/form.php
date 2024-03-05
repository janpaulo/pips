<div class="modal fade" id="skillType" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><span id="actionName"></span>  Skill Types</h5>
                <button type="button" class="btn-close" onclick="handleCloseModal('skillType')" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    
                    <input type="text" hidden class="form-control" id="skillID" name="skillID">
                    <div class="mb-3">
                        <label for="skillName" class="form-label">Skill Name</label>
                        <input type="text" class="form-control" id="skillName" name="skillName">
                    </div>
                    <div class="mb-3">
                        <label for="skillDesc" class="form-label">Skill Description</label>
                        <input type="text"  class="form-control" id="skillDesc" name="skillDesc"
                            rows="3">
                    </div>
                    <div class="row">

                    <div class="mb-3 col-md-6">
                        <label for="skillCode" class="form-label">Skill code</label>
                        <input type="text"  class="form-control" id="skillCode" name="skillCode"
                            rows="3">
                    </div>
                    <div class="mb-3 col-md-6">
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
                <button type="button" class="btn btn-secondary" onclick="handleCloseModal('skillType')" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveBtn" onclick="handleGlobalSave('<?php echo base_url();?>skilltypes')"><?php echo "Submit"; ?></button>
                <button type="button" class="btn btn-primary" id="editBtn"
                    onclick="handleGlobalUpdate('<?php echo base_url();?>skilltypes')"><?php echo "Update"; ?></button>
            </div>
        </div>
    </div>
</div>