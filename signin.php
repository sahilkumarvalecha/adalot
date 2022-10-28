<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adalot</title>
    <?php include "shared/style.php"?>
</head>
<body>
    <?php include "shared/nav.php"?>
     <!-- Page title -->
     <div class="lawFirm--page-title text-center lawFirm--bg-center" data-bg-img="assets/images/page-title-bg.png">
        <div class="container">
            <h2 class="pb-20">Sign in</h2>
            <div class="title-bc"> <a href="#">Home</a> > <span>Sign in </span></div>
        </div>
    </div>
    <!-- End of Page title -->
    <div class="row">
        <div class="col-sm-12 p-5">
            <div class="card">
                
                <div class="card-body">
                <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pswd" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-dark" name="login">Login</button>
</form>
                </div>
            </div>
        </div>
    </div>

    <?php include "shared/footer.php"?>
    <?php include "shared/script.php"?>
</body>
</html>