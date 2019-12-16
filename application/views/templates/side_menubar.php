<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li id="dashboardMainMenu">
        <a href="<?php echo base_url('dashboard') ?>">
        <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
        </a>
      </li> 
      <?php if (in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)) : ?>
        <li id="storesMainNav"><a href="<?php echo base_url('stores/') ?>"><i class="fa fa-building" aria-hidden="true"></i> <span> Lojas</span></a></li>
      <?php endif; ?>
           
      <?php if (in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)) : ?>
        <li id="userMainNav"><a href="<?php echo base_url('users') ?>"><i class="fa fa-user-circle" aria-hidden="true"></i><span> Usuários</span></a></li>
      <?php endif; ?>

      <?php if (in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)) : ?>
        <li id="groupMainNav"><a href="<?php echo base_url('groups') ?>"><i class="fa fa-users" aria-hidden="true"></i><span> Grupos</span></a></li>
      <?php endif; ?>

      <?php if (in_array('createTable', $user_permission) || in_array('updateTable', $user_permission) || in_array('viewTable', $user_permission) || in_array('deleteTable', $user_permission)) : ?>
        <li id="tablesMainNav"><a href="<?php echo base_url('tables/') ?>"><i class="fa fa-cutlery" aria-hidden="true"></i> <span> Mesas</span></a></li>
      <?php endif; ?>

      <?php if (in_array('createCategory', $user_permission) || in_array('updateCategory', $user_permission) || in_array('viewCategory', $user_permission) || in_array('deleteCategory', $user_permission)) : ?>
        <li id="categoryMainNav"><a href="<?php echo base_url('category/') ?>"><i class="fa fa-folder" aria-hidden="true"></i> <span> Categorias</span></a></li>
      <?php endif; ?>

      <?php if (in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)) : ?>
        <li id="productMainNav"><a href="<?php echo base_url('products') ?>"><i class="fa fa-product-hunt" aria-hidden="true"></i><span> Produtos</span></a></li>
      <?php endif; ?>

      <?php if (in_array('createOrder', $user_permission) || in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)) : ?>
        <li id="OrderMainNav"><a href="<?php echo base_url('orders') ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span> Pedidos</span></a></li>
      <?php endif; ?>

      <?php if (in_array('viewReport', $user_permission)) : ?>
        <li id="ReportMainNav"><a href="<?php echo base_url('reports') ?>"><i class="fa fa-pie-chart" aria-hidden="true"></i><span> Relatórios</span></a></li>
      <?php endif; ?>

      <?php if (in_array('updateCompany', $user_permission)) : ?>
        <li id="companyMainNav"><a href="<?php echo base_url('company/') ?>"><i class="fa fa-home" aria-hidden="true"></i> <span> Empresa</span></a></li>
      <?php endif; ?>

      <?php if (in_array('viewProfile', $user_permission)) : ?>
        <li id="profileMainNav"><a href="<?php echo base_url('users/profile/') ?>"><i class="fa fa-unlock-alt" aria-hidden="true"></i> <span> Perfil</span></a></li>
      <?php endif; ?>
      <?php if (in_array('updateSetting', $user_permission)) : ?>
        <li id="settingMainNav"><a href="<?php echo base_url('users/setting/') ?>"><i class="fa fa-cogs"></i> <span> Confirgurações</span></a></li>
      <?php endif; ?>

      <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-sign-out"></i> <span> Sair</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>