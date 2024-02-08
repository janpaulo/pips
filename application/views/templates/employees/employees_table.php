<div class="content-wrapper">
    <section class="content">

        <div class="card text-dark bg-light mb-3 mt-4">
            <div class="card-header">

                <div class="row">

                    <div class="col-md-6">

                        <div><b>Employees</b> </div>
                    </div>

                    <div class="col-md-6 text-right">
                        <div>
                            <a href="<?php base_url() ;?>employees/create">

                                <button type="button" class="btn btn-primary">
                                    Add
                                </button>
                            </a>
                        </div>
                    </div>

                </div>


            </div>
            <div class="card-body">
                <form action="<?php echo base_url() ;?>employees/" method="post">
                    <div class="row  align-items-end">
                        <div class="col-md-3">
                            <label for="hrisID"> HRIS NO</label>
                            <input type="text" class="form-control" name="hrisID" id="hrisID" value="<?php echo $vHrisID;?>">
                        </div>
                        <div class="col-md-3">
                            <label for="hrisID"> Office</label>
                            <select name="officeID" class="form-control"   id="officeID" >
                                <option value="">ds</option>
                                <option value="">as</option>
                                <option value="">adaf</option>
                                <option value="">fafwr</option>
                                <option value="">dafar</option>


                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="hrisID"> Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $vLname;?>">

                        </div>
                        <div class="col-md-2">
                            <label for="hrisID"> First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $vFname;?>">

                        </div>
                        <div class="col-md-2 align-self-end text-center">
                        <label for="hrisID"> &nbsp; &nbsp;  </label>
                            <!-- <button type="button" class="btn btn-primary" onclick="handleUpdatse()">Search</button> -->
                            <button type="submit"  class="btn btn-primary" >Search</button>

                        </div>
                    </div>
                    </form>
                <hr/>

                <table class="table table-hover" id="empTable">
                    <thead>
                        <tr>
                            <th scope="col">Employee No.</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col" width="5">Middle Name</th>
                            <th scope="col" width="5">Suffix</th>
                            <!-- <th scope="col">Birthday</th>
                    <th scope="col"  width="20">Address</th> -->
                            <th scope="col">Position</th>
                            <th scope="col">Status</th>
                            <th scope="col">Role</th>
                            <th scope="col text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach(json_decode($getemployee->result) as $row): ?>
                        <tr>
                            <td><?=$row->empID?></td>
                            <td><?=$row->fname?></td>
                            <td><?=$row->lname?></td>
                            <td><?=$row->mname?></td>
                            <td><?=$row->suffix?></td>
                            <td><?= ($row->roleID == '3' ? 'Employee':( $row->roleID == '1' ? 'Administrator' :  ($row->roleID == '2' ? 'Accounting' : ($row->roleID == '4' ? 'HR' : '')))); ?>
                            </td>
                            <td><?=$row->positionID?></td>
                            <td><?=$row->isActive?></td>

                            <td>
                                <div class="d-flex justify-content-between">
                                    <div> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </div>
                                    <div>
                                        <a href="<?php base_url() ;?>myprofile/my_profile">
                                            <i class="fa fa-eye" aria-hidden="true"></i>

                                        </a>


                                    </div>
                                    <!-- <div><i class="fa fa-trash-o" aria-hidden="true"></i></div> -->
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>




                </table>

            </div>
        </div>


    </section>
</div>