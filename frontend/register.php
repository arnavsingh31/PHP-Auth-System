<?php 
	include('header.php');
?>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-6 m-auto">
      <div class="card card-body">
        <h1 class="text-center mb-3">
          <i class="fas fa-user-plus"></i> Register
        </h1>
        
        <!-- <form action="register.php" method="POST"> -->
          <div class="form-group" id="error">
            <label for="name">Name</label>
            <input
              type="name"
              id="name"
              name="username"
              class="form-control"
              placeholder="Enter Name"
              value=""
            />
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="form-control"
              placeholder="Enter Email"
              value=""
            />
          </div>
          
          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              class="form-control"
              placeholder="Create Password"
              value=""
            />
          </div>
          
          <div class="form-group">
            <label for="conf_password">Confirm Password</label>
            <input
              type="password"
              id="conf_password"
              name="conf_password"
              class="form-control"
              placeholder="Confirm Password"
              value=""
            />
          </div>
          
          <button type="submit" name = "register" id="registerbtn" class="btn btn-primary btn-block">
            Register
          </button>
        <!-- </form> -->
        <p class="lead mt-4">Have An Account? <a href="login.php">Login</a></p>
      </div>
    </div>
  </div>
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/register.js"></script>  
  </body>
</html>
