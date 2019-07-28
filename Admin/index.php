<?php include('sidebar.php'); ?>

  <div class="content-wrapper" style="padding-top:60px">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Employee Profiles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Birthday</th>
                    <th>Age</th>
                    <th>Current City</th>
                    <th>Nationality</th>
                    <th>Citizenship</th>
                    <th>Gender</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                        <td>Ariel Lecias Jr.</td>
                        <td>01/27/1997</td>
                        <td>21</td>
                        <td>Caloocan City</td>
                        <td>Filipino</td>
                        <td>Single</td>
                        <td>Male</td>
                        <td>09122287332</td>
                        <td>ariellecias143@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Cedric Don Coloma</td>
                        <td>02/17/1996</td>
                        <td>21</td>
                        <td>Binan, Laguna</td>
                        <td>Filipino</td>
                        <td>Single</td>
                        <td>Male</td>
                        <td>0912243434</td>
                        <td>cedricdon@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Jacklyn Jose Bobis</td>
                        <td>02/15/1998</td>
                        <td>20</td>
                        <td>Binan, Laguna City</td>
                        <td>Filipino</td>
                        <td>Single</td>
                        <td>Female</td>
                        <td>09122287332</td>
                        <td>jackyn@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Ma. Eden M. Ramoneda</td>
                        <td>09/12/1998</td>
                        <td>20</td>
                        <td>Quezon City</td>
                        <td>Filipino</td>
                        <td>Single</td>
                        <td>Female</td>
                        <td>0912982222</td>
                        <td>eden@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Rio Ann Nastor</td>
                        <td>05/12/1998</td>
                        <td>20</td>
                        <td>Quezon City</td>
                        <td>Filipino</td>
                        <td>Single</td>
                        <td>Female</td>
                        <td>09123823733</td>
                        <td>rioann@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Ana Rose Atcha</td>
                        <td>03/02/1998</td>
                        <td>20</td>
                        <td>Quezon City</td>
                        <td>Filipino</td>
                        <td>Single</td>
                        <td>Female</td>
                        <td>091238827</td>
                        <td>anarose@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Ton Ton Villanueva</td>
                        <td>05/22/1996</td>
                        <td>22</td>
                        <td>Quezon City</td>
                        <td>Filipino</td>
                        <td>Single</td>
                        <td>Male</td>
                        <td>0912337333</td>
                        <td>tonton@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Renie Namocot</td>
                        <td>05/22/1994</td>
                        <td>22</td>
                        <td>Manila</td>
                        <td>Filipino</td>
                        <td>Single</td>
                        <td>Male</td>
                        <td>091283333353</td>
                        <td>renie@gmail.com</td>
                    </tr>
                    <tr>
                        <td>John David Lozano</td>
                        <td>05/12/1995</td>
                        <td>24</td>
                        <td>Quezon City</td>
                        <td>Filipino</td>
                        <td>Single</td>
                        <td>Male</td>
                        <td>09123823376</td>
                        <td>JD@gmail.com</td>
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