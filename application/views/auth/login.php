<a><img src="<?= base_url('assets/'); ?>dist/img/logo/logo.png" class="logo" alt="" height="150px"></a>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>R&I</b>Footwear</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan login untuk mulai belanja</p>
      <?= $this->session->flashdata('message'); ?>
      <form class="user" method="POST" action="<?= base_url('auth'); ?>">
        <div class="form-group">
          <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Masukkan Email">
          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-user" value="<?= set_value('nama'); ?>" id="password" name="password" placeholder=" Masukkan Password">
          <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>
      <hr>
      <div class="text-center">
        <p class="mb-1">
          <a href="">Lupa Password ?</a>
        </p>
        <p class="mb-0">
          <a href="<?= base_url(); ?>auth/registrasi" class="text-center">Belum terdaftar? Buat akun</a>
        </p>
      </div>
    </div>
  </div>
</div>
