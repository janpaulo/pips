<div class="content-wrapper">
    <section class="content p-3">

        <div class="card text-dark bg-light mb-3">
            <div class="card-header d-flex justify-content-between">
                <div><b>Daily Time Record's</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddDtr()">
                        Add
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Upload
                    </button>
                </div>
            </div>
            <div class="card-body">
                <!-- 
                <hr>
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
                            <th scope="col">Date</th>
                            <th scope="col">Employee ID</th>
                            <th scope="col">Time in</th>
                            <th scope="col">Time in Status</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                  $dtrobject = json_decode($getdtr);
                  $dtrResult = $dtrobject->result;
                ?>

                        <?php foreach($dtrResult as $row): ?>
                        <tr>
                            <td><?=$row->date?></td>
                            <td><?=$row->emp_id?></td>
                            <td><?=$row->time_in?></td>
                            <td><?= ($row->tme_id == '0' ? 'Check in' : ($row->tme_id == '1' ? 'Check out' : ( $row->tme_id == '2' ? 'Break in' : ( $row->tme_id == '3' ? 'Break out' : ''))))?>
                            </td>
                            <td>
                                <button class=" btn btn-primary" type="button"
                                    onclick="handleEditDtr('<?=$row->emp_id?>','<?=$row->time_in?>','<?=$row->tme_id?>')"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Generate your DTR">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>


                    </tbody>

                </table>

            </div>
        </div>


    </section>
</div>