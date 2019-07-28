<?php include('sidebar.php'); ?>

  <div class="content-wrapper" style="padding-top:60px; ">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Employment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Company</th>
                    <th>Job Position</th>
                    <th>Date Hired</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                        <td>Ariel Lecias Jr.</td>
                        <td>Microsoft</td>
                        <td>Full Stack Developer</td>
                        <td>09-12-2018</td>
                        <td>Regular</td>
                    </tr>
                    <tr>
                        
                        <td>Cedric Coloma</td>
                        <td>IBM</td>
                        <td>Java Programmer</td>
                        <td>09-12-2018</td>
                        <td>Regular</td>
                    </tr>
                    <tr>
                        <td>Jacklyn Jose Bobis</td>
                        <td>Accenture</td>
                        <td>Associate Software Engineer</td>
                        <td>06-11-2019</td>
                        <td>Probationary</td>
                    </tr>
                    <tr>
                        <td>Ma. Eden M. Ramoneda</td>
                        <td>Microsoft</td>
                        <td>Web Developer</td>
                        <td>07-12-2018</td>
                        <td>Probationary</td>
                    </tr>
                    <tr>
                        <td>Rio Ann Nastor</td>
                        <td>IBM</td>
                        <td>Accountant</td>
                        <td>06-05-2019</td>
                        <td>Probationary</td> 
                    </tr>
                    <tr>
                        <td>Ana Rose Atcha</td>
                        <td>Accenture</td>
                        <td>Accountant</td>
                        <td>06-05-2019</td>
                        <td>Probationary</td>
                    </tr>
                    <tr>
                        <td>Ton Ton Villanueva</td>
                        <td>Accenture</td>
                        <td>Graphics Designer</td>
                        <td>09-10-2018</td>
                        <td>Regular</td>
                    </tr>
                    <tr>
                        <td>Renie Namocot</td>
                        <td>Accenture</td>
                        <td>c# Developer</td>
                        <td>07-14-2017</td>
                        <td>Regular</td>
                    </tr>
                    <tr>
                        <td>John David Lozano</td>
                        <td>IBM</td>
                        <td>Web Developer</td>
                        <td>08-01-2016</td>
                        <td>Regular</td>
                    </tr>
                    
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <script>
  $(function () {
    $('#example1').DataTable()
    $('#employee_profiles').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>