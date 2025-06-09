<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In - Invoice Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8fafc;
    }
    .form-container {
      max-width: 400px;
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
    .btn-google {
      background-color: #fff;
      border: 1px solid #dee2e6;
    }
    .btn-google img {
      height: 18px;
      margin-right: 8px;
    }
  </style> 
</head>
<body>
  <div class="form-container">
    <div class="logo">
    <img src="https://invoice-generator.com/favicon.ico" alt="Logo" style="height: 30px; margin-right: 10px;">
        <h5 class="mb-0 fw-bold">Invoice-Generator<span class="text-muted"></span></h5>
    </div>
    <h3 class="text-center">Sign In</h3>
    <p class="text-center text-muted">Welcome back!</p>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <div class="d-flex justify-content-between">
          <label for="password" class="form-label">Password</label>
          <a href="#" class="text-decoration-none small">Forgot password?</a>
        </div>
        <input type="password" class="form-control" id="password" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Keep me logged in</label>
      </div>
      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-success">Sign In</button>
      </div>
      <div class="d-grid mb-3">
        <button type="button" class="btn btn-google">
        
          <img src="https://img.icons8.com/color/16/000000/google-logo.png" alt="Google"> Sign in with Google
        </button>
      </div>
    </form>
    <p class="text-center small">Don't have an account yet? <a href="signup.php">Sign Up</a></p>
  </div>
</body>
</html>
