<!-- Vertically centered modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload DTR file record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Start Period</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="startPeriod" id="startPeriod">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">End Period</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="endPeriod" id="endPeriod">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Upload File</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="file_upload">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"
                    onclick="handleSubmitDTR()"><?php echo $buttonTitle;?></button>
            </div>
        </div>
    </div>
</div>


<!-- Vertically centered EDIT modal -->
<div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Daily Time Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formValidationID">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Employee No.</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="startPeriod" id="empId" disabled=true>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Time In</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="time_id" id="timeID">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Time status</label>
                        <div class="col-sm-10">
                            <select name="" id="status" class="form-control">
                                <option value="0">Check In</option>
                                <option value="1">Check Out</option>
                                <option value="2">Break In</option>
                                <option value="3">Break Out</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Attachment</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="attachment">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Update By</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="updatedBy" value="Jan Paulo Binaluyo"
                                disabled=true>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleUpdate()"><?php echo "Update";?></button>
            </div>
        </div>
    </div>
</div>


<!-- Vertically centered ADD modal -->
<div class="modal fade" id="modalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Daily Time Record</h5>
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
                        <label for="staticEmail" class="col-sm-2 col-form-label">Time In</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="date" id="dateToday">
                        </div>
                        <div class="col-sm-5">

                            <input class="form-control" type="time" id="appt" name="appt" required=true>
                        </div>


                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <label for=""> Start Period</label>
                            <input type="date" class="form-control" name="date" id="dateToday">
                        </div>
                        <div class="col-sm-5">

                        <label for=""> End Period</label>
                            <input class="form-control" type="date" id="appt" name="appt" required=true>
                        </div>


                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Time status</label>
                        <div class="col-sm-10">
                            <select name="" id="status" class="form-control">
                                <option value="0">Check In</option>
                                <option value="1">Check Out</option>
                                <option value="2">Break In</option>
                                <option value="3">Break Out</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Attachment</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="attachment">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Created By</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="createdBy" value="Jan Paulo Binaluyo"
                                disabled=true>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleSave()"><?php echo "Save";?></button>
            </div>
        </div>
    </div>
</div>