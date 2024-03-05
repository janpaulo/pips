<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Education</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddEduc()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Name of School</th>
                            <th scope="col">Level</th>
                            <th scope="col">Basic Education/Degree/Course</th>
                            <th scope="col">From - To</th>
                            <th scope="col">Highest Level/Units Earned </th>
                            <th scope="col">Year Graduate </th>
                            <th scope="col">Scholarship/Academic Honors Received</th>
                            <th scope="col">For HR Validate</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($educList) as $value) { ?>
                        <tr>
                            <td><?php print_r($value->school);?></td>
                            <td><?php print_r($value->levelName);?></td>
                            <td><?php print_r($value->degree);?></td>
                            <td><?php print_r(date( 'Y', strtotime($value->dateAdmission))." - ".date( 'Y', strtotime($value->dateCompletion)));?></td>
                            <td><?php print_r($value->highestLevel);?></td>
                            <td><?php print_r($value->yearGrad);?></td>
                            <td><?php print_r($value->honorName);?></td> 
                            <td><?php print_r(($value->forUpdate == 0 ? "Aproved" : ( $value->forUpdate === "1" ?  "Pending":( $value->forUpdate === 2 ?  "Cancelled":"")) )) ;?></td>
                            <td>
                                <button class="btn btn-primary"
                                    onclick="editEductList('<?php echo urlencode(json_encode($value)); ?>')">Edit</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
                <span> <br><span style="color: red;"> <b> Reminders: FOR THE LEVELS</b></span>
                    <br>-Elementary<br>
                    -Secondary<br>
                    -Vocational/Trade Course<br>
                    -College<br>
                    -Graduate Studies
                </span>
            </div>
        </div>
    </section>
</div>