
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Invoicing Guide - Invoice Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f9f9f9; font-family: 'Segoe UI', sans-serif; }
    .hero-img { width: 100%; border-radius: 10px; }
    .hero-box {
      background: #fff;
      border-radius: 10px;
      padding: 0;
      margin: 30px auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      overflow: hidden;
    }
    .hero-title {
      padding: 40px;
      background-color: #2f3b4c;
      color: #a3e6cb;
    }
    .hero-title h1 {
      font-size: 2.2rem;
      font-weight: 600;
      color: #fff;
    }
    .content {
      padding: 30px;
      background: #fff;
    }
    .footer {
      font-size: 0.875rem;
      margin-top: 50px;
      background-color: #fff;
      padding: 30px 0;
    }
    .footer a {
      text-decoration: none;
      color: #333;
      display: block;
    }
    .table-contents {
      font-size: 0.9rem;
      float: right;
      color: #198754;
    }
    @media (max-width: 768px) {
    .header-top {
      flex-direction: column;
      align-items: flex-start;
      gap: 15px;
    }

    .nav-links {
      justify-content: flex-start;
      gap: 15px;
    }

    .header-cta h2 {
      font-size: 24px;
    }

    .header-cta p,
    .user-rating {
      font-size: 14px;
    }
  }
  footer a {
  color: #333;
  text-decoration: none;
}
footer a:hover {
  text-decoration: underline;
}
     

  </style>
</head>
<body>
<!-- Header -->
<header class="main-header bg-white border-bottom">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center py-3">
      <div class="d-flex align-items-center">
        <img src="https://invoice-generator.com/favicon.ico" alt="Logo" style="height: 30px; margin-right: 10px;">
        <h5 class="mb-0 fw-bold">Invoice-Generator<span class="text-muted"></span></h5>
      </div>
      <nav class="d-flex gap-3">
      <a href="index.php" class="text-decoration-none text-dark">Home</a>
      <a href="help.php"  class="text-decoration-none text-dark">Help</a>
        <a href="history.php" class="text-decoration-none text-dark">History</a>
        <a href="guide.php" class="text-decoration-none text-dark">Invoicing Guide</a>
        


      </nav>
      <div>
      <a href="signin.php" class="btn btn-outline-secondary me-2">Sign In</a>
        <a href="signup.php" class="btn btn-success">Sign Up</a>
      </div>
    </div>
  </div>
  

</header>
<div class="container">
  <div class="hero-box">
    <div class="row g-0">
      <div class="col-md-6 d-flex align-items-center justify-content-center p-4">
        <img src="invoicing-guide-illustration.png.webp" class="img-fluid" alt="Guide" style="max-height: 350px;">
      </div>
      <div class="col-md-6 hero-title d-flex align-items-center">
        <div>
          <h1>Invoicing<br><span style="color: #6ee7b7;">Guide</span></h1>
        </div>
      </div>
    </div>
    <div class="content">
  
      <p class="mt-3 text-muted">
        <strong>Introduction to the Essential Invoicing Guide for Freelancers and Small Business Owners</strong><br>
        Welcome to our comprehensive guide, designed to demystify the invoicing and accounting processes for freelancers and small business owners.
        Mastering these crucial skills is essential for ensuring that your business runs smoothly, payments are received on time,
        and your financial health is maintained. Proper invoicing and accounting not only secure your cash flow but also provide clarity
        into your business operations, allowing for informed decision-making and strategic planning.
      </p>
      <p class="text-muted">
        To support you in this critical aspect of your business, we introduce our website’s free invoice generator tool.
        This intuitive tool simplifies the creation of professional-looking invoices, enabling you to customize and send invoices with ease,
        track payments, and manage your finances efficiently. Whether you’re billing for the first time or looking to streamline your existing process,
        our free invoice template is designed to save you time and reduce the administrative burden of managing your finances.
      </p>
      <p class="text-muted">
        Let’s embark on this journey to financial organization and success together, starting with the basics and moving towards mastering
        effective invoicing and foundational accounting principles.
      </p>
     
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<footer class="bg-light border-top pt-4 pb-3 mt-5">
  <div class="container">
    <div class="row text-start">
      <!-- Left Section: Use Invoice Generator -->
      <div class="col-md-4 mb-3">
        <h6 class="text-uppercase fw-bold">Use Invoice Generator</h6>
        <ul class="list-unstyled">
          <li><a href="index.php">Invoice Template</a></li>
          <li><a href="index.php">Credit Note Template</a></li>
          <li><a href="index.php">Quote Template</a></li>
          <li><a href="index.php">Purchase Order Template</a></li>
        </ul>
      </div>

      <!-- Center Section: Resources -->
      <div class="col-md-4 mb-3">
        <h6 class="text-uppercase fw-bold">Resources</h6>
        <ul class="list-unstyled">
          <li><a href="guide.php">Invoicing Guide</a></li>
          <li><a href="help.php">Help</a></li>
          <li><a href="signin.php">Sign In</a></li>
          <li><a href="signup.php">Sign Up</a></li>
          <li><a href="release-notes.php">Release Notes</a></li>
          <li><a href="developer-api.php">Developer API</a></li>
        </ul>
      </div>

      <!-- Right Section: Social + Legal -->
      <div class="col-md-4 mb-3 text-md-end">
        <p class="small text-muted mb-1">&copy; 2025 Invoice-Generator By Ankita</p>
        <div class="mb-2">
          <a href="#" class="me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="me-2"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="me-2"><i class="bi bi-youtube"></i></a>
          <a href="#" class="me-2"><i class="bi bi-linkedin"></i></a>
          <a href="#"><i class="bi bi-github"></i></a>
        </div>
        <a href="#" class="me-3">Terms of Service</a>
        <a href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
</footer>


</body>
</html>
