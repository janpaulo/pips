<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Eligibility Types</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddGlobal('eligType')">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Eligibility ID</th>
                            <th scope="col">Eligibility Name</th>
                            <th scope="col">Eligibility Description</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Is Active</th>
                            <th scope="col">Created By</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($eligTypes) as $value) { ?>
                        <tr>
                            <td><?php print_r($value->elgType);?></td>
                            <td><?php print_r($value->elgName);?></td>
                            <td><?php print_r($value->elgDesc);?></td>
                            <td><?php print_r(date( 'Y/m/d', strtotime($value->dateCreated)));?></td>
                            <td><?php print_r($value->isActive);?></td>
                            <td><?php print_r($value->createdBy);?></td>
                            <td>
                                <button class="btn btn-primary"
                                    onclick="editGlobal('<?php echo urlencode(json_encode($value)); ?>','eligType' )">Edit</button>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>