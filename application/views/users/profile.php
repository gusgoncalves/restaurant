

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div id="messages"></div>
            <a href="../setting" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Editar Perfil</a>
            <br /> <br />

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Perfil</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-condensed table-hovered">
                <tr>
                  <th>Usuário</th>
                  <td><?php echo $user_data['username']; ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php echo $user_data['email']; ?></td>
                </tr>
                <tr>
                  <th>Nome</th>
                  <td><?php echo $user_data['firstname']; ?></td>
                </tr>
                <tr>
                  <th>Sobrenome</th>
                  <td><?php echo $user_data['lastname']; ?></td>
                </tr>
                <tr>
                  <th>Sexo</th>
                  <td><?php echo ($user_data['gender'] == 1) ? 'Male' : 'Gender'; ?></td>
                </tr>
                <tr>
                  <th>Telefone</th>
                  <td><?php echo $user_data['phone']; ?></td>
                </tr>
                <tr>
                  <th>Grupo</th>
                  <td><span class="label label-info"><?php echo $user_group['group_name']; ?></span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#profileMainNav").addClass('active');
    });
  </script>

