<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Trainings </b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddGlobal('trainType')">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Training ID</th>
                            <th scope="col">Training Name</th>
                            <th scope="col">Training Description</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Is Active</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($trainingTypes) as $value) { ?>
                        <tr>
                            <td><?php print_r($value->trainingTypeCode);?></td>
                            <td><?php print_r($value->trainingTypeName);?></td>
                            <td><?php print_r($value->trainingTypeDesc);?></td>
                            <td><?php print_r(date( 'Y/m/d', strtotime($value->dateCreated)));?></td>
                            <td><?php print_r($value->isActive);?></td>
                            <td>
                                <button class="btn btn-primary"
                                    onclick="editGlobal('<?php echo urlencode(json_encode($value)); ?>','trainType' )">Edit</button>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>