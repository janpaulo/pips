<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Voluntary Work</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddVoluntary()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Organization Employer No</th>
                            <th scope="col">Organization name</th>
                            <th scope="col">Organization Address</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Involvement Hours</th>
                            <th scope="col">Postion</th>
                            <th scope="col">For HR Validate</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($voluntaryList) as $value) { ?>
                        <tr>
                            <td><?php print_r($value->orgPhicEmployerNo);?></td>
                            <td><?php print_r($value->orgName);?></td>
                            <td><?php print_r($value->orgAddress);?></td>
                            <td><?php print_r(date( 'm/d/Y', strtotime($value->startDateInvolvement)));?></td>
                            <td><?php print_r(date( 'm/d/Y', strtotime($value->endDateInvolvement)));?></td>
                            <td><?php print_r($value->involvementHrs);?></td>
                            <td><?php print_r($value->position);?></td>
                            <td><?php print_r(($value->forUpdate == 0 ? "Aproved" : ( $value->forUpdate === "1" ?  "Pending":( $value->forUpdate === 2 ?  "Cancelled":"")) )) ;?></td>
                            <td  class="text-center">
                                <button class="btn btn-primary"
                                    onclick="editVoluntary('<?php echo urlencode(json_encode($value)); ?>')">Edit</button>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>