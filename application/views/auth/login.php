<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="http://localhost/latihansppwebprogram/login/fonts/icomoon/style.css">

  <link rel="stylesheet" href="http://localhost/latihansppwebprogram/login/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="http://localhost/latihansppwebprogram/login/css/bootstrap.min.css">



</head>

<body>
  <br>
  <br>
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="http://localhost/latihansppwebprogram/login/images/v.jpg" alt="Image" width="700px">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <?= $this->session->flashdata('pesan'); ?>
                <center>
                  <h3>LOGIN ADMIN <br><strong>SMA N TEGAL</strong></h3>
                </center>
                <center><img class="img-profile rounded-circle" src="https://i.pinimg.com/originals/c1/94/32/c194329bae6d1f4fbe3890136d9fdb5f.png" width="90px" height="90px"></center>
              </div>
              <form action="<?= base_url('auth'); ?>" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" id="username">
                  <small class="muted text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                  <small class="muted text-danger"><?= form_error('password'); ?></small>

                </div>

                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>