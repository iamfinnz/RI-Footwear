<a><img src="<?= base_url('assets/'); ?>dist/img/logo/logo.png" class="logo" alt="" height="150px"></a>
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>R&I</b>Footwear</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Daftar sebagai pengguna baru</p>

      <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
        <div class="form-group">
          <input type="text" class="form-control form-control-user" value="<?= set_value('nama'); ?>" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
          <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <input type="email" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Masukkan Email">
          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-user"  id="password1" name="password1" placeholder="Masukkan Password">
          <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="" value="">
              <label for="agreeTerms">
               Saya menyetujui kebijakan privasi
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
          </div>
        </div>
      </form>
      <hr>
      <div class="text-center"></div>
        <a href="<?= base_url(); ?>auth" class="text-center">Sudah punya akun R&I Footwear? Login</a>
      </div>
    </div>
  </div>
</div>
