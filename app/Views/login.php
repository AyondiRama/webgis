<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="icon" href="<?php echo base_url(); ?>favicon.ico" type="image/gif">
  
    <title>LOGIN RAD DEFANCE</title>
</head>
<body>
    
    <style>

 .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}
.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}
.cardbody-color{
  background-color: #ebf2fa;
}
a{
  text-decoration: none;
}
    </style>



<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">RAD DEFANCE</h2>
        <div class="text-center mb-5 text-dark">RAD TEAM</div>
        <div class="card my-5">

          <form method="post" class= card-body cardbody-color p-lg-5 action="<?php echo site_url('login'); ?>">
         
            <div class="text-center">
            <img src="<?php echo base_url('gambar/rad.jpg'); ?>"class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>     

            <?php if ($validation) {
              echo '<p style="color:red;">' . $validation->listErrors() . '</p>';
            } ?>

             <?php if (isset($error)) {
               echo '<p style="color:red;">' . $error . '</p>';
              } ?>
            <div class="mb-3">
              <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" value="Login" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="#" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>