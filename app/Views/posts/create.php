
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
            <h1 class="m-0">Create Post</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="container-fluid mt-2">
        <div class="card p-2">
                    <div class="card-header text-center">
                        <strong>Form Tambah Post</strong>
                    </div>
                    <div class="card-body">
                        <form action="/admin/posts/store" method="POST">
                        <div class="row">
                            <div class="col-md-4 p3">
                                <div class="form-group">
                                    <label for="judul">Judul Posts</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ;?>" id="judul" name="judul"> 
                                    <?php if ($validation -> hasError('judul')) : ?>
                                    <div class="invalid-feedback">
                                      <?= $validation->getError('judul'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('slug')) ? 'is-invalid' : '' ;?>" id="slug" name="slug"> 
                                    <?php if ($validation -> hasError('slug')) : ?>
                                    <div class="invalid-feedback">
                                      <?= $validation->getError('slug'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori Posts</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('author')) ? 'is-invalid' : '' ;?>" id="kategori" name="kategori">
                                    <?php if ($validation -> hasError('kategori')) : ?>
                                    <div class="invalid-feedback">
                                      <?= $validation->getError('kategori'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="author">Author Posts</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('author')) ? 'is-invalid' : '' ;?>" id="author" name="author">
                                    <?php if ($validation -> hasError('author')) : ?>
                                    <div class="invalid-feedback">
                                      <?= $validation->getError('author'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="desc">Deskripsi Postingan </label>
                                <br>
                                <textarea name="desc" class="form-control <?= ($validation->hasError('author')) ? 'is-invalid' : '' ;?>" id="desc" cols="15" rows="30"></textarea> 
                                <?php if ($validation -> hasError('desc')) : ?>
                                    <div class="invalid-feedback">
                                      <?= $validation->getError('desc'); ?>
                                    </div>
                                    <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>
                                Submit
                            </button>
                        </form>
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

<?= $this-> section('myscript');?>
<script>
    $('#desc').summernote()
</script>
<?= $this->endSection();?>