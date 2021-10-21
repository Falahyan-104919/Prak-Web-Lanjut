
<?=  $this->extend('template');  ?>
<?=  $this->section('content');  ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Blog-Apps</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Praktikum Web Lanjut 2020</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/admin/posts" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                My Post
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="container-fluid mt-2">
        <div class="container-fluid">
          <a href="/admin/posts/create" class="btn btn-primary">
          <i class="fas fa-plus"></i> Tambah Data</a>
        </div>
          <div class="card mt-3">
            <div class="card-header">
              Daftar Postingan
            </div>
            <div class="card-body">
            <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Author</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($post as $i => $post) : ?>
                      <tr>
                        <th scope="row"><?= $i + 1; ?></th>
                        <td><?= $post['judul']; ?></td>
                        <td><?= $post['slug']; ?></td>
                        <td><?= $post['author']; ?></td>
                        <td><?= $post['kategori']; ?></td>
                        <td>
                          <a href="/admin/posts/edit/<?=$post['slug'];?>" class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i>Edit</a>
                          <a href="/admin/posts/delete/<?=$post['slug'];?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Trash</a>
                        </td>
                      </tr>
                      <?php endforeach ; ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- /.content-header -->

    
    <!-- bakal diubah -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; Praktikum Web Lanjut</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?= $this-> endSection();?>
