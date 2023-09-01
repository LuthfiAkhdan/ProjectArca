<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Project Arca | Login</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?=base_url()?>plugins/fontawesome-free/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="<?=base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?=base_url()?>dist/css/adminlte.min.css">

<style>
    .login-box, .register-box {
        width: 640px;
    }

    @media (max-width: 576px) {
        .login-box, .register-box {
            margin-top: 0.5rem;
            width: 90%;
        }
    }
</style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error!</b>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Login Form</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?= site_url('loginprocess') ?>">
            <?= csrf_field() ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Sign in</button>
                </div>
            </form>
        </div>
    </div>

<!-- jQuery -->
<script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>dist/js/adminlte.min.js"></script>
</body>
</html>
