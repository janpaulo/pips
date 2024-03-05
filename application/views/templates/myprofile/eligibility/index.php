<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Eligibility</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddElig()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Date of Exam</th>
                            <th scope="col">City/Province of Exam</th>
                            <th scope="col">License No</th>
                            <th scope="col">License Validity Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Rating</th>
                            <th scope="col">For HR Validate</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach(json_decode($eligList) as $value) { ?>
                        <tr>
                            <td><?php print_r(date( 'Y/m/d', strtotime($value->elgDateExam))) ;?></td>
                            <td><?php print_r($value->elgCityExam);?></td>
                            <td><?php print_r($value->elgLicenseNo);?></td>
                            <td><?php print_r(date( 'Y/m/d', strtotime($value->elgLicenseValDate)));?></td>
                            <td><?php print_r($value->elgtName);?></td>
                            <td><?php print_r($value->elgRating);?></td>
                            <td><?php print_r(($value->forUpdate == 0 ? "Aproved" : ( $value->forUpdate === "1" ?  "Pending":( $value->forUpdate === 2 ?  "Cancelled":"")) )) ;?></td>
                            <td><button class="btn btn-primary"
                                    onclick="editElgb('<?php echo urlencode(json_encode($value)); ?>')">Edit</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>