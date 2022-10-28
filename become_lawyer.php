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
            <h2 class="pb-20">Become a Lawyer</h2>
            <div class="title-bc"> <a href="#">Home</a> > <span>Become a Lawyer </span></div>
        </div>
    </div>
    <!-- End of Page title -->
   
    <!-- <div class="row">
        <div class="col-sm-12 p-5">
            <div class="card">
                
                <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">User Name</label>
                      <input type="text" title="Characters Allowed: A-Z, a-z, and whitespace" pattern="[A-Za-z ]{3,256}" class="form-control" name="username" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                    
                    
                    <div class="row">
                    <select name="" id="" class="">
                        <option value="" selected disabled>lawyer type</option>
                        <option value="">criminal</option>
                        <option value="">criminal</option>
                        <option value="">criminal</option>
                    </select>
                    </div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Case Done</label>
                    <input type="number" name="price" min="1" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Experience</label>
                    <input type="number" name="price" min="5"  id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">About</label>
                    <input type="text" title="Characters Allowed: A-Z, a-z, and whitespace" pattern="[A-Za-z ]{10,000}" class="form-control" name="username" id="exampleInputEmail1" required>

                    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pswd" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="confirm-pswd" id="exampleInputPassword1" required>
  </div>
  
  <button type="submit" class="btn btn-dark" name="signup">Signup</button>
  
</form>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-sm-12 p-5">
            <div class="card">
                
                <div class="card-body">
    
     
     <form action="" method="post">
        <div>
            <label for="username">Name</label>
            <input type="text" class="form-control mb-4" placeholder="Enter Your Name" id="username" name="username">  
        </div>

        <div>
            <label for="select">Lawyer Type</label>
            <div class="row">
        <select class="form-select mb-4" id="select">
        <option selected>Lawyer Type</option>
        <option value="1">Criminal</option>
        <option value="2">Divorce</option>
        <option value="3">Affidavite</option>
        <option value="3">Civil</option>
        </select>
        </div>
        </div>
        <div>
            <label for="about">About</label>
            <textarea name="" id="about" class="form-control mb-4" cols="30" rows="3"></textarea>
        </div>

        <div>
            <label for="case">Case Done</label>
            <input type="number" name="" id="case" class="form-control mb-4">
        </div>

        <div>
            <label for="case">Experiece</label>
            <input type="number" name="" min="5" title="minimum 5 years experience" id="case" class="form-control mb-4">
        </div>
<div>
    <label for="">Profile pic</label>
    <input type="file" class="form-control mb-4">
</div>
<div>
            <label for="email">Address</label>
            <input type="text" name="" placeholder="Enter Your address" id="email" class="form-control mb-4" required>
        </div>
        <div>
            <label for="email">Phone</label>
            <input type="text" name="" placeholder="Enter Your Phone no" id="email" class="form-control mb-4" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="" placeholder="Enter Your Email" id="email" class="form-control mb-4" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" class="form-control mb-4" id="password" name="" placeholder="Enter Your Password" required>
        </div>
        <div>
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" name="" placeholder="Confirm Password" required>
        </div>
         
        <button type="submit" class="btn btn-dark mt-3">Register</button>
     </form>
    </div>
                </div>
            </div>
        </div>
    

    <?php include "shared/footer.php"?>
    <?php include "shared/script.php"?>
</body>
</html>