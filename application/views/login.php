<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
  </head>
  <body>
 
      <div class="container">
        <div class="row justify-content-md-center">
          
       <div class="col-md-4">
        <br><br>
         <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
           <h2 class="form-signin-heading">Please sign in</h2>
           <?php echo $this->session->flashdata('msg');?>
           <label for="username" class="sr-only">Username</label>
           <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
           <label for="password" class="sr-only">Password</label>
           <input type="password" name="password" class="form-control" placeholder="Password" required>
           <div class="checkbox">
             <label>
               <input type="checkbox" value="remember-me"> Remember me
             </label>
           </div>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
         </form>
       </div>
        </div>
      </div> <!-- /container -->
 
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
  </body>
</html>