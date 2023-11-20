





    <!-- end of content body -->
    </div>


</div>

    <script id="rendered-js">
        const $button = document.querySelector('#sidebar-toggle');
        const $wrapper = document.querySelector('#wrapper');

        $button.addEventListener('click', e => {
        e.preventDefault();
        $wrapper.classList.toggle('toggled');
        });
        //# sourceURL=pen.js
    </script>

    
<!-- jQuery -->
<script src="<?php echo base_url();?>asset/js/jquery-3.7.1.min.js"></script>
<!-- JS Action -->
<script src="<?php echo base_url();?>asset/js/action.js?version=<?php echo rand(10,100); ?>"></script>
<script src="<?php echo base_url();?>asset/js/employee.js?version=<?php echo rand(10,100); ?>"></script>
<script src="<?php echo base_url();?>asset/js/mypfrofileAction.js?version=<?php echo rand(10,100); ?>"></script>
<script src="<?php echo base_url();?>asset/js/dtr.js?version=<?php echo rand(10,100); ?>"></script>



<script src="<?php echo base_url();?>asset/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js?version=<?php echo rand(10,100); ?>"></script>
<script src="<?php echo base_url();?>asset/DataTables-1.13.6/media/js/jquery.dataTables.min.js?version=<?php echo rand(10,100); ?>"></script>
<script src="<?php echo base_url();?>asset/DataTables-1.13.6/media/js/dataTables.bootstrap5.min.js?version=<?php echo rand(10,100); ?>"></script>


<script src="<?php echo base_url();?>asset/sweetalert2/package/dist/sweetalert2.min.js?version=<?php echo rand(10,100); ?>"></script>


<script src="<?php echo base_url();?>asset/select2-bootstrap-5-theme-1.3.0/dist/bootstrap-multiselect.js?version=<?php echo rand(10,100); ?>"></script>
<link href="<?php echo base_url();?>asset/select2-bootstrap-5-theme-1.3.0/dist/css_bootstrap-multiselect.css?version=<?php echo rand(10,100); ?>" rel="stylesheet" type="text/css">



<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?php echo base_url();?>asset/js/xlsx_0175_xlsx.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.validate.min.js"></script>

<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>



<script>
        var firstOpen = true;
        var time;
        $('#timePicker').datetimepicker({
            useCurrent: false,
            format: "hh:mm A"
        }).on('dp.show', function() {
            if(firstOpen) {
                time = moment().startOf('day');
                firstOpen = false;
            } else {
                time = "01:00 PM"
            }        
            $(this).data('DateTimePicker').date(time);
        });
    </script>     -->
<!-- stepper -->
<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>

<!-- stepper -->



<link rel="stylesheet" type="text/css" href=" https://printjs-4de6.kxcdn.com/print.min.css"> 

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

</body>
</html>