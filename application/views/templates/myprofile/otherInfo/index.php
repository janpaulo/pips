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
                            <th scope="col">Info Type</th>
                            <th scope="col">Details</th>
                            <th scope="col">Skill</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($otherinfoList) as $value) { ?>
                        <tr>
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