<?php include('sidebar.php') ?>

<div class="content-wrapper" style="padding:60px;">


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="box box-primary" style="left:235px">
            <div class="box-header with-border">
              <h3 class="box-title">Request Leave</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" id="leaveform">
                <div class="form-group">
                  <label>Type of Leave:</label>
                  <select class="form-control" id="type_leaves">
                    <option>Sick Leave</option>
                    <option>Maternity Leave</option>
                    <option>Paternity Leave</option>
                    <option>Vacation Leave</option>
                  </select>
                  <p class="leave-error"></p>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Reason:</label>
                  <textarea class="form-control" rows="3" id="reason"></textarea>
                </div>
                <div class="form-group">
                  <label>Leave Days: </label>
                  <input type="text" class="form-control" id="leave_days" max="">
                </div>
                <div class="form-group">
                  <label>Start Date</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="start_date">
                  </div>
                </div>
                <div class="form-group">
                  <label>End Date: (Generated when you select the start date)</label>
                  <input type="text" class="form-control" id="end_date" disabled></input>
                </div>
                <div id="form-leave-err">

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
  //leave
  $("#type_leaves").on('change',function(){
      var getTypeOfLeave = $("#type_leaves").val();
      if(getTypeOfLeave == "Sick Leave"){
        $("#leave_days").attr("max","15");
        $(".leave-error").empty();
        $(".leave-error").append("Maximum Sick Leave: 15");
      }else if(getTypeOfLeave == "Maternity Leave"){
        $("#leave_days").attr("max","105");
        $(".leave-error").empty();
        $(".leave-error").append("Maximum Maternity Leave: 105");
      }else if(getTypeOfLeave == "Paternity Leave"){
          $("#leave_days").attr("max","7");
          $(".leave-error").empty();
          $(".leave-error").append("Maximum Paternity Leave: 7");
      }else if(getTypeOfLeave == "Vacation Leave"){
          $("#leave_days").attr("max","15");
          $(".leave-error").empty();
          $(".leave-error").append("Maximum Vacation Leave: 15");
      }
    });

      //Date picker
      $('#start_date').datepicker({
      autoclose: true
    });
    
    $("#start_date").on('change', function(){
        var addDays = parseInt($("#leave_days").val());
        console.log(Number.isInteger(addDays));
        var endDate = $("#start_date").val();
        var getDate = new Date(endDate);
        getDate.setDate(getDate.getDate() + addDays);
        var dd = getDate.getDate();
        var mm = getDate.getMonth() + 1;
        var y = getDate.getFullYear();
        var formatDate = mm + '/' + dd + "/" + y; 

       $("#end_date").val(formatDate); 
       $("#leave_days").attr("disabled","true");
   });
    $("#leaveform").submit(function(e) {
        e.preventDefault();
        var type_of_leavex = $("#type_leaves").val();
        var reason_leavex = $("#reason").val();
        var days_of_leavex = $("#leave_days").val();
        var start_datex = $("#start_date").val();
        var end_datex = $("#end_date").val();

        if (
            type_of_leavex == "" ||
            reason_leavex == "" ||
            days_of_leavex == "" ||
            start_datex == "" ||
            end_datex == ""
        ) {
            //   $(".form-feedback-err").html("All fields are required")
            $("#form-leave-err").empty();
            $("#form-leave-err").append('' +
              '<div class="alert alert-danger alert-dismissable">' + 
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                'All fields are required' +
              '</div>');
        } else {
          
            $("#leaveform").trigger("reset");
            $(".leave-error").empty();
            $("#form-leave-err").empty();
            $("#form-leave-err").append('' +
              '<div class="alert alert-info alert-dismissable">' + 
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                'Request Submitted' +
              '</div>');
        }
    });
</script>