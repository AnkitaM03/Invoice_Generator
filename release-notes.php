<?php
// release-notes.php
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Release Notes - Invoice Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body { font-family: system-ui, sans-serif; padding: 2rem; background: #fff; color: #000; }
    h1 { margin-bottom: 1rem; }
    h2 { font-size: 1.25rem; margin-top: 2rem; border-bottom: 1px solid #ddd; padding-bottom: .3rem; }
    ul { padding-left: 1.2rem; }
    li { margin-bottom: .6rem; }
    section { margin-top: 2rem; }
    footer { margin-top: 3rem; padding-top: 1rem; border-top: 1px solid #ddd; font-size: 0.9rem; color: #666; }
    a { text-decoration: none; color: #0d6efd; }

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
<br><br>
<div class="container">
  <h1>Release Notes</h1>
  <p>Read about the latest changes and improvements to help you send invoices faster.</p>

  <section>
    <h2>June 5, 2024</h2>
    <p>It's now possible to change the next invoice number when signed in.</p>
  </section>

  <section>
    <h2>May 27, 2024</h2>
    <p>Several new languages have been added to Invoice‑Generator.com bringing the total number of supported languages to 16.</p>
  </section>

  <section>
    <h2>March 8, 2024</h2>
    <p>The Invoice History page has a new design that shows more information about invoices. A quote template and credit note template has been added.</p>
  </section>

  <section>
    <h2>September 13, 2021</h2>
    <p>You can add any payment link to your invoices when using the Send Invoice option.</p>
  </section>

  <section>
    <h2>April 3, 2024</h2>
    <p>Added a purchase order template.</p>
  </section>

  <section>
    <h2>Other Updates</h2>
    <ul>
      <li>Support for more currencies and localization.</li>
      <li>Support for electronic invoicing (UBL).</li>
      <li>Improved PDF formatting and rendering.</li>
      <li>Dark mode added to web interface.</li>
      <li>New API fields for terms, attachments, signature, etc.</li>
    </ul>
  </section>
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
