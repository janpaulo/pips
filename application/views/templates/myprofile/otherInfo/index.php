<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Other Info</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddInfo()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Info Type Name</th>
                            <th scope="col">Details</th>
                            <th scope="col">Skill Name</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $index = 0;  foreach(json_decode($otherinfoList) as $value) { ?>
                        <tr>
                            <td><?php print_r($index+1);?></td>
                            <td><?php print_r($value->infoDesc);?></td>
                            <td><?php print_r($value->infoDetails);?></td>
                            <td><?php print_r($value->skillName);?></td>
                            <td>
                                <button class="btn btn-primary"
                                    onclick="editOther('<?php echo urlencode(json_encode($value)); ?>')">Edit</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>