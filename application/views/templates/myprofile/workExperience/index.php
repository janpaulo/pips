<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Work Experience</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddWorkExp()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th>Position Title</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>Start Dates</th>
                            <th>End Dates</th>
                            <th>Monthly Salary</th>
                            <th>Salary Job Grade</th>
                            <th>Appointment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($workExpList) as $value) { ?>
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