<link href="../style.css" rel="stylesheet">
<div class="modal fade" id="loginmodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4></span> Login</h4>
      </div>
      <div class="modal-body">
        <p class="text-warning cols">Don't have an account? <a href="signup.php">Register</a></p>
        <form method="post" action="login_submit.php">
          <div class="form-group">
            <input type="email" class="form-control" name="Email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="Password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <p class="pull-left"><a href="#">Forgot Password?</a></p>
      </div>
    </div>
  </div>
</div> 