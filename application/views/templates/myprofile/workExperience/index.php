<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Work Experience</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddWorkExp()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th>Position Title</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>Start Dates</th>
                            <th>End Dates</th>
                            <th>Monthly Salary</th>
                            <th>Salary Job Grade</th>
                            <th>Appointment Status</th>
                            <th scope="col">For HR Validate</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($workExpList) as $value) { ?>
                        <tr>
                            <td><?php print_r($value->positionTitle);?></td>
                            <td><?php print_r($value->officeName);?></td>
                            <td><?php print_r($value->workAddress);?></td>
                            <td><?php print_r(date( 'Y/m/d', strtotime($value->startDateEmployment))) ;?></td>
                            <td><?php print_r(date( 'Y/m/d', strtotime($value->endDateEmployment))) ;?></td>
                            <td><?php print_r($value->monthlySalary);?></td>
                            <td><?php print_r($value->salaryGrade);?></td>
                            <!-- <td><?php print_r($value->apptStatus);?></td> -->
                            <td><?php print_r(($value->apptStatus == 0 ? "Regular" : ( $value->apptStatus === "1" ?  "Casual":( $value->apptStatus === 2 ?  "Job Order/Contractual":" - ")) )) ;?></td>
                            <td><?php print_r(($value->forUpdate == 0 ? "Aproved" : ( $value->forUpdate === "1" ?  "Pending":( $value->forUpdate === 2 ?  "Cancelled":"")) )) ;?></td>
                            <td  class="text-center">
                                <button class="btn btn-primary"
                                    onclick="editExperience('<?php echo urlencode(json_encode($value)); ?>')">Edit</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>