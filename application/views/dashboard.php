<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="container-fluid text-center px-5" id="dashboard">
        
        <h2 class="mt-2 mb-4"> Welcome to <span class="font-weight-bold text-primary">Yoga Dimas </span>on the Admin Panel Page!</h2>
        <img src="<?= base_url() ?>assets/dist/img/illustration_control_panel.svg" alt="control panel" width="300">
      </div>

      <!-- Small boxes (Stat box) -->
      <div class="row mt-4">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>ACER</h3>
              <p>&nbsp;</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-laptop"></i>
            </div>
            <a href="<?= base_url('Acer') ?>" class="small-box-footer">View Data <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>ASUS</h3>
              <p>&nbsp;</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-laptop"></i>
            </div>
            <a href="<?= base_url('Asus') ?>" class="small-box-footer">View Data <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>LENOVO</h3>
              <p>&nbsp;</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-laptop"></i>
            </div>
            <a href="<?= base_url('Lenovo') ?>" class="small-box-footer">View Data <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-dark">
            <div class="inner">
              <h3>HP</h3>
              <p>&nbsp;</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-laptop"></i>
            </div>
            <a href="<?= base_url('Hp') ?>" class="small-box-footer">View Data <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>


      </div>
      <!-- /.row -->

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

</body>

</html>