<?php include('sidebar.php'); ?>


<div class="content-wrapper" style="padding:60px;">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-primary" style="left:235px">
            <div class="box-header with-border">
              <h3 class="box-title">Request Reimbursement</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" id="reimbursement-form">
                <div class="form-group">
                  <label>Expenses:</label>
                  <input type="text" id="expenses" class="form-control" placeholder="Ex: 3,500">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Attachment: (Proof)</label>
                  <input type="file" id="attachment" class="form-control">
                  <p>Ex. Receipt</p>
                </div>
                <div id="form-reimburse-err">

                </div>
                <div class="form-group">
                  <input type="submit" class="form-control btn btn-primary"></textarea>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>

</div>

<script>
 $("#reimbursement-form").submit(function(e) {
        e.preventDefault();
        var f_expenses = $("#expenses").val();
        var f_attachment = $("#attachment").val();
        if (
            f_expenses == "" ||
            f_attachment == "" 
        ) {
            $("#form-reimburse-err").empty();
            $("#form-reimburse-err").append('' +
              '<div class="alert alert-danger alert-dismissable">' + 
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                'All fields are required' +
              '</div>');
        } else {
            $("#reimbursement-form").trigger("reset");
            $("#form-reimburse-err").empty();
            $("#form-reimburse-err").append('' +
              '<div class="alert alert-info alert-dismissable">' + 
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                'Request Submitted' +
              '</div>');
        }
    });
</script>