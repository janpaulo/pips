<div class="modal fade" id="modalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <select id="inputState" class="form-control" name="brandId" required>
                                <option value="">ddgd</option>
                                <!-- <?php foreach ($brands as $brand) : ?> 
                            <option value="<?= $brand['id']; ?>"><?= $brand['bname']; ?></option>
                          <?php endforeach; ?> -->
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
                            <select id="inputState" class="form-control" name="brandId" required>
                                <option value="">ASSAS</option>
                                <!-- <?php foreach ($brands as $brand) : ?> 
                            <option value="<?= $brand['id']; ?>"><?= $brand['bname']; ?></option>
                          <?php endforeach; ?> -->
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