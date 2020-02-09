

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
              <h3 class="box-title">Novo Grupo</h3>
            </div>
            <form role="form" action="<?php base_url('groups/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name">Nome do Grupo</label>
                  <input type="text" class="form-control" id="group_name" name="group_name" placeholder="Digite o nome do Grupo" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="permission">Permissões</label>

                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Criar</th>
                        <th>Atualizar</th>
                        <th>Ver</th>
                        <th>Apagar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Usuários</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser"></td>
                      </tr>
                      <tr>
                        <td>Grupos</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewGroup"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteGroup"></td>
                      </tr>
                      <tr>
                        <td>Lojas</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createStore"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateStore"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewStore"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteStore"></td>
                      </tr>
                      <tr>
                        <td>Mesas</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createTable"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateTable"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewTable"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteTable"></td>
                      </tr>
                      <tr>
                        <td>Categorias</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createCategory"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCategory"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewCategory"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteCategory"></td>
                      </tr>
                      <tr>
                        <td>Produtos</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createProduct"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateProduct"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProduct"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteProduct"></td>
                      </tr>
                      <tr>
                        <td>Pedidos</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createOrder"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateOrder"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewOrder"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteOrder"></td>
                      </tr>
                      <tr>
                        <td>Relatórios</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewReport"></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Empresa</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCompany"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Perfil</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProfile"></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Editar Perfil</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="<?php echo base_url('groups/') ?>" class="btn btn-warning">Fechar</a>
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
      $('#groupMainNav').addClass('active');
      $('#createGroupSubMenu').addClass('active');
    });
  </script>

