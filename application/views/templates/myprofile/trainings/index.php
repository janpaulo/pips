<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Trainings</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddTrain()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Type</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Conducted By</th>
                            <th scope="col">Certificate is Given? </th>
                            <th scope="col">Certificate is Valid? </th>
                            <th scope="col">Training is External? </th>
                            <th scope="col">Training is Internal? </th>
                            <th scope="col">Requirement is submited? </th>
                            <th scope="col">For HR Validate</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach(json_decode($trainingList) as $value) { ?>
                        <tr>
                            <td><?php print_r($value->titleName);?></td>
                            <td><?php print_r($value->trainingTypeName);?></td>
                            <!-- <td><?php print_r($value->trainingTypeID);?></td> -->
                            <td><?php print_r(date( 'Y/m/d', strtotime($value->startDate))) ;?></td>
                            <td><?php print_r(date( 'Y/m/d', strtotime($value->endDate))) ;?></td>
                            <td><?php print_r($value->conductedBy);?></td>
                            <td><?php print_r(($value->isCertGiven == 0 ? "NO" : ( $value->isCertGiven === "1" ?  "YES":"") )) ;?></td>
                            <td><?php print_r(($value->isCertValid == 0 ? "NO" : ( $value->isCertValid === "1" ?  "YES":"") )) ;?></td>
                            <td><?php print_r(($value->isExternal == 0 ? "NO" : ( $value->isExternal === "1" ?  "YES":"") )) ;?></td>
                            <td><?php print_r(($value->isInternal == 0 ? "NO" : ( $value->isInternal === "1" ?  "YES":"") )) ;?></td>
                            <td><?php print_r(($value->isSubmitReq == 0 ? "NO" : ( $value->isSubmitReq === "1" ?  "YES":"") )) ;?></td>
                            <td><?php print_r(($value->forUpdate == 0 ? "Aproved" : ( $value->forUpdate === "1" ?  "Pending":( $value->forUpdate === 2 ?  "Cancelled":"")) )) ;?></td>
                            <td><button class="btn btn-primary"
                                    onclick="editTrain('<?php echo urlencode(json_encode($value)); ?>')">Edit</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>