<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Help - Invoice Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9f9f9;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    .help-container {
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      margin-top: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }
    h2 {
      font-size: 1.25rem;
      margin-top: 30px;
      border-top: 1px solid #ddd;
      padding-top: 20px;
    }
    h3 {
      font-size: 1.1rem;
      margin-top: 20px;
      color: #000;
    }
    ul {
      padding-left: 1.2rem;
    }
    li {
      margin-bottom: 0.5rem;
    }
    .section-title {
      margin-top: 40px;
      font-weight: bold;
    }
    .footer {
      background-color: #fff;
      border-top: 1px solid #eaeaea;
      padding: 30px 0;
      margin-top: 50px;
    }
    .footer a {
      text-decoration: none;
      color: #000;
      display: block;
      margin-bottom: 6px;
    }
    .btn-learn-more {
      background-color: #00a86b;
      color: #fff;
      border: none;
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
      <a href="help.php" class="text-decoration-none text-dark">Help</a>
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
    <div class="help-container">
      <h4>Help</h4>
      <p>Invoice Generator provides an invoice template that lets you make professional invoices in one-click. Generated invoices can be sent and paid online.</p>

      <h2>Why use Invoice Generator?</h2>
      <ul>
        <li><strong>Instant Invoices</strong><br>Fastest way to make an invoice using our template. Download or send without account creation.</li>
        <li><strong>Invoice from any device</strong><br>Use desktop, tablet, or smartphone.</li>
        <li><strong>Trusted by millions</strong><br>100% FREE invoices generated on Invoice Generator.</li>
      </ul>

      <p>We want to make invoicing as simple as possible. This page is to give you the best experience.</p>

      <h2>How do I use Invoice Generator?</h2>
      <h3>Making Invoices</h3>
      <p>Fill out the invoice template with details. Once done, you can download or send your invoice.</p>

      <h3>Sending Invoices</h3>
      <p>Invoices can be sent with an account. Your invoices are stored securely in the cloud and can be paid online.</p>
      <button class="btn btn-learn-more btn-sm">Learn More</button>

      <h3>Payments</h3>
      <p>Accept bank or credit card payments. Add instructions for custom methods.</p>

      <h3>Downloading Invoices</h3>
      <p>Click <strong>Download Invoice</strong> to save a PDF. Use <strong>Edit</strong> to revise later. Check your downloads folder.</p>

      <h3>Saving Invoices</h3>
      <p>Invoices auto-save to your device’s local storage. View history on <a href="#">History</a> page. Use <strong>Export</strong> to download all data.</p>

      <h3>Customizing the Invoice Template</h3>
      <p>Every template remembers your edits. It saves:</p>
      <ul>
        <li>From Address</li>
        <li>Logo</li>
        <li>Currency</li>
        <li>Terms</li>
        <li>Notes</li>
        <li>Field Titles</li>
      </ul>

      <h3>System Requirements</h3>
      <ul>
        <li>Google Chrome, Firefox, Safari, Edge (latest 2 versions)</li>
        <li>Javascript enabled</li>
        <li>Local storage enabled</li>
        <li>TLS v1.2 or above</li>
      </ul>

      <h2>Where does Invoice Generator store invoices?</h2>
      <h3>Send Invoice feature</h3>
      <p>Send or retrieve invoices anytime. Requires <a href="#">signing in to Invoice Generator</a>.</p>

      <h3>Download Invoice feature</h3>
      <p>Your browser’s storage remembers invoices. We don’t save it on our servers unless you create an account.</p>

      <h2>What’s new?</h2>
      <p>Read the <a href="#">Release Notes</a> for the latest features.</p>

      <h2>Invoice Generator API</h2>
      <p>A clean API for generating invoices without UI. Save time and integrate easily.</p>
      <button class="btn btn-outline-success btn-sm">API Documentation</button>
    </div>

   
  </div>
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
          <li><a href="guid.php">Invoicing Guide</a></li>
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
