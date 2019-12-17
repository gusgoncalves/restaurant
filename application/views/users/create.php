

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gerenciar
        <small>Usuário</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Usuários</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Novo Usuário</h3>
            </div>
            <form role="form" action="<?php base_url('users/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="groups">Gupos</label>
                  <select class="form-control" id="groups" name="groups">
                    <option value="">Escolha o grupo</option>
                    <?php foreach ($group_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['group_name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="groups">Loja</label>
                  <select class="form-control" id="store" name="store">
                    <option value="">Escolha a loja</option>
                    <?php foreach ($store_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="username">Usuário</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Usuário" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Senha" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="cpassword">Confirme a senha</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirme a senha" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="fname">Nome</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Nome" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="lname">Sobrenome</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Sobrenome" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="phone">Telefone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="gender">Sexo</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="male" value="1">
                      Masculino
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="2">
                      Feminino
                    </label>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="<?php echo base_url('users/') ?>" class="btn btn-danger">Voltar</a>
              </div>
            </form>
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
    $("#groups").select2();

    $("#userMainNav").addClass('active');
    $("#createUserSubNav").addClass('active');
    
  });
</script>
