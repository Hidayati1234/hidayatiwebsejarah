<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login User</title>
  </head>
  <body bgcolor="grey">
    <div class="row" style="margin-top: 90px">
      <div class="col-md-4 offset-md-4">
        <div class="card card-primary">
          <div class="card-header">
         <center>SILAHKAN LOGIN</center>
            
          </div>
          <div class="card-body">
            <form method="post" action="<?php echo base_url('user/login_aksi');?>"  >
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" autocomplete="off"><small><span class="text-danger"><?=form_error('username'); ?></span></small>
                 <label>Password</label>
                <input type="password" name="password" class="form-control" autocomplete="off"><small><span class="text-danger"><?=form_error('password'); ?></span></small>
                
                
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
              
            </form>
            
          </div>
          
        </div>
        
      </div>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>