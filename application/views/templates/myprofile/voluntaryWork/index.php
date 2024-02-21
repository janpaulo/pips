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
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($voluntaryList) as $value) { ?>
                        <tr>
                            <td><?php print_r($value);?></td>
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