<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title . ' | ' . $global_title ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url('assets') ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets') ?>/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?= $this->session->flashdata('msg') ?>
            <?= form_open('register') ?>
              <h1>Register Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" required />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Kontak" name="kontak" required />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" required />
              </div>
              <div>
                <select required class="form-control" name="id_role">
                  <option value="">Pilih Jenis Akun</option>
                  <option value="1">Pemilik Ruko</option>
                  <option value="3">Pengguna Biasa</option>
                </select>
              </div><br/>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password lagi" name="rpassword" required />
              </div>
              <div style="margin-left: 0px !important;">
                <input type="submit" name="register-submit" value="Daftar" class="btn btn-lg btn-success btn-block">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Sudah mendaftar?
                  <a href="<?= base_url('login') ?>" class="to_register"> Login </a>
                </p>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
