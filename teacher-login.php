<?php include'lib.php' ?>
<head>
  <style>
    body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}
.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}
  </style>
</head>
<body>
<form method="POST" action="teacher-login-check.php">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Teacher Sign In</h5>
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address*</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password*</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" name="class" class="form-control" id="floatingInput" placeholder="Enter class">
                <label for="floatingInput">Class*</label>
              </div>
              <div>
                <p>Not Teacher? Login as <a href="login.php">Admin</a> | <a href="std-login.php">Student</a></p>
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
