<div class="content-wrapper">
    <section class="content">
        <div class="card text-dark bg-light mb-3t mt-3">
            <div class="card-header d-flex justify-content-between">
                <div class="w-100"><b>Eligibility</b> </div>
                <div>

                    <button type="button" class="btn btn-primary" onclick="handleAddElig()">
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="dtrTable">
                    <thead>
                        <tr>
                            <th scope="col">Date of Exam</th>
                            <th scope="col">City/Province of Exam</th>
                            <th scope="col">License No</th>
                            <th scope="col">License Validity Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Rating</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(json_decode($eligList) as $new) { ?>
                        <tr>
                            <td><?php print_r($new);?></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </section>
</div>