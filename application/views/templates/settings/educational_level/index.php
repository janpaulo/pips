<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Education Level </b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddGlobal('educLevel')">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Level ID</th>
                            <th scope="col">Level Name</th>
                            <th scope="col">Level Description</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Is Active</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($educLevel) as $value) { ?>
                        <tr>
                            <td><?php print_r($value->levelID);?></td>
                            <td><?php print_r($value->levelName);?></td>
                            <td><?php print_r($value->levelDesc);?></td>
                            <td><?php print_r(date( 'Y/m/d', strtotime($value->dateCreated)));?></td>
                            <td><?php print_r($value->isActive);?></td>
                            <td>
                                <button class="btn btn-primary"
                                    onclick="editGlobal('<?php echo urlencode(json_encode($value)); ?>','educLevel' )">Edit</button>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>