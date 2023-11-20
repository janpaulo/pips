<div class="content-wrapper">
    <section class="content p-3">

        <table id="empDetails" style="width:50%; display:none">
            <tr>
                <td>NAME:</td>
                <td></td>
                <td>Employee No.</td>
                <td></td>
            </tr>
            <tr>
                <td>POSITION</td>
                <td></td>
                <td>Office/Dept:</td>
                <td></td>
            </tr>

        </table>

        <table  id="signatory"  style="width:30%; ; display:none">
            <tr>
                <td>
                    I certify on my  honor that the above is true and corect report<br>
                    of the hours of worked performed, record of which was made<br>
                    daily at the time of arrive and departure from office
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;FNAME M LNAME
                    <br>
                    ______________________________________________________
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                    Signature Over Printed Name of Employee
                </td>
            </tr>
            <tr>
                <td><br>
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Verified as to the prescribed office hours.
                </td>
            </tr>
            <tr>
                <td>
                <br>
                    ______________________________________________________
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                     Signature Over Printed Name of Supervisor
                </td>
            </tr>
        </table>




        <table class="table" id="empTime" style="width:50%; display:none">
            <thead>
                <th>Day</th>
                <th>AM In</th>
                <th>AM Out</th>
                <th>PM In</th>
                <th>PM Out</th>
                <th>Remarks</th>
            </thead>

            <tbody id="tableBody">

            </tbody>



        </table>

        <div class="card text-dark bg-light">
            <div class="card-header d-flex justify-content-between">
                <div><b>My Daily Time Record</b> </div>
                <div>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-hover" id="empTable">
                    <thead>
                        <tr>
                            <th>Date upload</th>
                            <th>Start Period</th>
                            <th>End Period</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>07-16-2023</td>
                            <td>07-16-2023</td>
                            <td>07-31-2023</td>
                            <td class="text-center">

                                <button class=" btn btn-primary" type="button" onclick="generateTable();"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Generate your DTR">
                                    <i class="fa fa-print" aria-hidden="true"></i>
                                </button>



                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>


    </section>
</div>



<script>


</script>