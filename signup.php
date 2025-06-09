<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up - Invoice Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8fafc;
    }
    .form-container {
      max-width: 500px;
      margin: 80px auto;
      padding: 30px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .logo {
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="logo">
    <img src="https://invoice-generator.com/favicon.ico" alt="Logo" style="height: 30px; margin-right: 10px;">
        <h5 class="mb-0 fw-bold">Invoice-Generator<span class="text-muted"></span></h5>
    </div>
    <h3 class="text-center">Create a free account</h3>
    <p class="text-center text-muted">Gain access to more features with an Invoice-Generator  account.</p>
    <form>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" id="firstName" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lastName" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="signupEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="signupEmail" required>
      </div>
      <div class="mb-3">
        <label for="signupPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="signupPassword" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="terms" required>
        <label class="form-check-label" for="terms">I agree to the Terms of Service</label>
      </div>
      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-success">Sign Up</button>
      </div>
    </form>
    <p class="text-center small">Already have an account? <a href="signin.php">Sign In</a></p>
  </div>
</body>
</html>
