<div class="content-wrapper">
    <section class="content p-3">
        <div class="card text-dark bg-light mb-3">
            <div class="card-header">
                <div class="row">

                    <div class="col-md-6">

                        <div><b>Daily Time Record's</b> </div>
                    </div>

                    <div class="col-md-6 text-right">

                        <button type="button" class="btn btn-primary" onclick="handleAddDtr()">
                            Add
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Upload
                        </button>
                    </div>

                </div>
            </div>
            <div class="card-body">

                <!-- <hr>
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-md-3">
                            <label for="dateUpload"> Date Upload</label>
                            <input type="date" class="form-control" name="upload" id="upload">
                        </div>
                        <div class="col-md-3">
                            <label for="dateUpload"> Start Period</label>
                            <input type="date" class="form-control" name="start_period" id="start_period">
                        </div>
                        <div class="col-md-3">
                            <label for="dateUpload"> End Period</label>
                            <input type="date" class="form-control" name="end_period" id="end_period">
                        </div>
                        <div class="col-md-2">
                            <label for="inputPassword">Time status</label>
                            <div class="col-sm-10">
                                <select name="" id="status" class="form-control">
                                    <option value="0">Check In</option>
                                    <option value="1">Check Out</option>
                                    <option value="2">Break In</option>
                                    <option value="3">Break Out</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1 p-0">
                            <label for="inputPassword"></label>
                            <div>

                                <button type="button" class="btn btn-info">Search</button>
                            </div>
                        </div>
                    </div>

                </div>

                <hr> -->

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Reference No.</th>
                            <th scope="col">Start Period</th>
                            <th scope="col">End Period</th>
                            <th scope="col">Date Uploaded</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>

                </table>

            </div>
        </div>

    </section>
</div>