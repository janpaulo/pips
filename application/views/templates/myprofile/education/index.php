<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Education</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddEduc()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Name of School</th>
                            <th scope="col">Basic Education/Degree/Course</th>
                            <th scope="col">From - To</th>
                            <th scope="col">Highest Level/Units Earned </th>
                            <th scope="col">Year Graduate </th>
                            <th scope="col">Scholarship/Academic Honors Received</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($educList) as $value) { ?>
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
                <span> <br><span style="color: red;"> <b> Reminders: FOR THE LEVELS</b></span>
                    <br>-Elementary<br>
                    -Secondary<br>
                    -Vocational/Trade Course<br>
                    -College<br>
                    -Graduate Studies
                </span>
            </div>
        </div>
    </section>
</div>