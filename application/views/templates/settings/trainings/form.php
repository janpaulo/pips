<div class="modal fade" id="trainType" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><span id="actionName"></span> Titles</h5>
                <button type="button" class="btn-close" onclick="handleCloseModal('trainType')"
                    data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    <input type="text" hidden class="form-control" id="trainingTypeID" name="trainingTypeID">
                    <div class="mb-3">
                        <label for="trainingTypeName" class="form-label">Training Name</label>
                        <input type="text" class="form-control" id="trainingTypeName" name="trainingTypeName">
                    </div>
                    <div class="mb-3">
                        <label for="trainingTypeDesc" class="form-label">Training Description</label>
                        <input type="text" class="form-control" id="trainingTypeDesc" name="trainingTypeDesc" rows="3">
                    </div>
                    <div class="row">

                        <div class="mb-3 col-md-6">
                            <label for="trainingTypeCode" class="form-label">Title code</label>
                            <input type="number" class="form-control" id="trainingTypeCode" name="trainingTypeCode" rows="3">
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
            <button type="button" class="btn btn-secondary" onclick="handleCloseModal('trainType')"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveBtn"
                    onclick="handleGlobalSave('<?php echo base_url();?>trainings')"><?php echo "Submit"; ?></button>
                <button type="button" class="btn btn-primary" id="editBtn"
                    onclick="handleGlobalUpdate('<?php echo base_url();?>trainings')"><?php echo "Update"; ?></button>
            </div>
        </div>
    </div>
</div>