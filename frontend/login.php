<?php 
	include('header.php');
  
  session_destroy();// this is to destroy seesion when a user logs out.
 ?>

<div class="container" id="success-msg"> 
  <div class="row mt-5">
    <div class="col-md-6 m-auto">
      <div class="card card-body">
        <h1 class="text-center mb-3"><i class="fas fa-sign-in-alt"></i>  Login</h1>
        
        <!-- <form action="/login.php" method="POST"> -->
          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="form-control"
              placeholder="Enter Email"
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              class="form-control"
              placeholder="Enter Password"
            />
          </div>
          <button type="submit" name="login" id="loginbtn" class="btn btn-primary btn-block">Login</button>
        <!-- </form> -->
        <p class="lead mt-4">
          No Account? <a href="register.php">Register</a>
        </p>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/login.js"></script>  
  </body>
</html> 