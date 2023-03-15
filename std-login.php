<?php include'lib.php' ?>
<head>
  <style>
    body {
  background: lightblue;

}
.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}
  </style>
</head>
<body>
<form method="POST" action="std-login-check.php">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Student Sign In</h5>
              <div class="form-floating mb-3">
                <input type="email" name="std_email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="std_password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div>
                <p>Not student? Login as <a href="login.php">Admin</a> | <a href="teacher-login.php">Teacher</a></p>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                  in</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>

<?php include'footer.php' ?>
