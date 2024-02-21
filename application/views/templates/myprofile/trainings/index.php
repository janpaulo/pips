<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Trainings</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddTrain()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Type</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Conducted By</th>
                            <th scope="col">Certificate is Given? </th>
                            <th scope="col">Certificate is Valid? </th>
                            <th scope="col">Training is External? </th>
                            <th scope="col">Training is Internal? </th>
                            <th scope="col">Requirement is submited? </th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($trainingList) as $new) { ?>
                        <tr>
                            <td><?php print_r($new);?></td>
                            <td><?php print_r($new);?></td>
                            <td><?php print_r($new);?></td>
                            <td><?php print_r($new);?></td>
                            <td><?php print_r($new);?></td>
                            <td><?php print_r($new);?></td>
                            <td><?php print_r($new);?></td>
                            <td><?php print_r($new);?></td>
                            <td><?php print_r($new);?></td>
                            <td><?php print_r($new);?></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>