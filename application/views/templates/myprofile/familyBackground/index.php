<div class="content-wrapper">
    <section class="content"> 
    <div class="card text-dark bg-light mb-3t mt-3">
        <div class="card-header d-flex justify-content-between">
            <div class="w-100"><b>Family Background</b> </div>
            <div>

                <button type="button" class="btn btn-primary" onclick="handleAddFam()">
                    Add
                </button>
            </div>
        </div>
        <div class="card-body">

            <table class="table table-hover" id="dtrTable">
                <thead>
                    <tr>
                        <th scope="col">Relationship Type</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Employer/Business Name</th>
                        <th scope="col">Business Address</th>
                        <th scope="col">Telephone/Mobile No</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(json_decode($familyList) as $value) { ?>
                        <tr>
                            <td><?php print_r($value);?></td>
                            <td><?php print_r($value);?></td>
                            <td><?php print_r($value);?></td>
                            <td><?php print_r($value);?></td>
                            <td><?php print_r($value);?></td>
                            <td><?php print_r($value);?></td>
                            <td><?php print_r($value);?></td>
                        </tr>
                    <?php } ?>

                </tbody>

            </table>

        </div>
    </div>
    </section>
</div>