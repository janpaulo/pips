$(document).ready(function() {
    // $('#empTable').DataTable();



    $('#empTable').DataTable({
        "paging": true,
        // "lengthChange": true,
        "searching": false,
        // "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        stateSave: true,
        "order":[[0,"asc"]]
    })



	$("#repeatDivBtn").click(function () {

		$newid = $(this).data("increment");
		$repeatDiv = $("#repeatDiv").wrap('<div/>').parent().html();
		$('#repeatDiv').unwrap();
		$($repeatDiv).insertAfter($(".repeatDiv").last());
		$(".repeatDiv").last().attr('id',   "repeatDiv" + '_' + $newid);
		$("#repeatDiv" + '_' + $newid).append('<div class="col-md-1" style="display: flex;align-items: end;"><div class="input-group-append"><button type="button" class="btn btn-danger removeDivBtn" data-id="repeatDiv'+'_'+ $newid+'">Remove</button></div></div>');
		$newid++;
		$(this).data("increment", $newid);

	});


	$(document).on('click', '.removeDivBtn', function () {

		$divId = $(this).data("id");
		$("#"+$divId).remove();
		$inc = $("#repeatDivBtn").data("increment");
		$("#repeatDivBtn").data("increment", $inc-1);

	});














} );

