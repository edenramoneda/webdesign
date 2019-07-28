<?php include('sidebar.php') ?>

<div class="content-wrapper" style="padding:60px;">


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-primary" style="left:235px">
            <div class="box-header with-border">
              <h3 class="box-title">Request Overtime</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" id="overtime-req-form">
                <div class="form-group">
                  <label>Overtime Hour:</label>
                  <select class="form-control" id="type_leaves">
                    <option>1 Hour</option>
                    <option>2 Hours</option>
                    <option>3 Hours</option>
                    <option>4 Hours</option>
                  </select>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Reason:</label>
                  <textarea class="form-control" rows="3" id="overtime_reason"></textarea>
                </div>
                <div id="form-ot-err">

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
  $("#overtime-req-form").submit(function(e) {
        e.preventDefault();
        var ot_hours = $("#overtime_hours").val();
        var ot_reason = $("#overtime_reason").val();

        if (ot_hours == "" || ot_reason == "") {
            $("#form-ot-err").empty();
            $("#form-ot-err").append('' +
              '<div class="alert alert-danger alert-dismissable">' + 
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                'All fields are required' +
              '</div>');
        } else {
            $("#overtime-req-form").trigger("reset");
            $("#form-ot-err").empty();
            $("#form-ot-err").append('' +
              '<div class="alert alert-info alert-dismissable">' + 
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                'Request Submitted' +
              '</div>');
        }
    });
</script>