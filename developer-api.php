<?php
// developer-api.php
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Invoice Generator API</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body { font-family: system-ui, sans-serif; padding: 2rem; background: #fff; color: #000; }
    pre { background: #f6f8fa; padding: 1rem; border-radius: 6px; overflow-x: auto; }
    h1 { margin-bottom: 1rem; }
    h2, h3 { margin-top: 2rem; margin-bottom: 1rem; border-bottom: 1px solid #ddd; padding-bottom: .3rem; }
    table { width: 100%; margin-top: 1rem; border-collapse: collapse; }
    th, td { border: 1px solid #ddd; padding: 8px; }
    th { background: #f1f1f1; }
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
  <h1>Invoice Generator API</h1>
<p>We created a simple API at Invoice-Generator.com to generate invoice PDFs on the fly. This service has been used internally by us for some time. We believe this could be helpful in your project as well.

The API has a primary endpoint that returns a PDF given details of an invoice. We don't store any of your invoice data.

In addition to PDF, the API can also generate e-invoices in UBL (Universal Business Language) with the invoice PDF embedded. This is useful as the world shifts to e-invoicing because UBL invoices are tricky to generate.</p>

  <h2>Use Cases</h2>
  <ul>
    <li>Invoicing from your backend</li>
    <li>Batch invoice generation</li>
    <li>Custom branding and templates (e.g. PO)</li>
  </ul>

  <h2>Table of Contents</h2>
  <ol>
    <li>Use Cases</li>
    <li>Getting Started</li>
    <li>Examples</li>
    <li>Supported Languages</li>
    <li>Invoice Options</li>
    <li>API Reference</li>
    <li>Sample Requests</li>
    <li>Error Responses</li>
    <li>Support</li>
  </ol>

  <h2>Getting Started</h2>
  <p>Send a JSON POST to:</p>
  <pre>POST https://invoice-generator.com</pre>
  <p>Include any of these fields (as JSON):</p>

  <h3>Examples</h3>
  <h4>Simple Invoice</h4>
  <pre>{
  "logo": "https://link.to/logo.png",
  "from": "My Business",
  "to": "Client Name",
  "currency": "USD",
  "number": "INV-1001",
  "items": [
    { "name": "Web design", "quantity": 10, "unit_cost": 50 }
  ],
  "notes": "Thank you!"
}</pre>

  <h4>VAT Invoice</h4>
  <pre>{
  "vat": 20,
  "tax": 5,
  "shipping": 10
}</pre>

  <h4>Localization</h4>
  <pre>{
  "language": "de",
  "locale": "de-DE"
}</pre>

  <h4>E‑Invoices</h4>
  <pre>{
  "e_invoice": true,
  "ubl": true
}</pre>

  <h2>API Reference</h2>
  <table>
    <thead>
      <tr><th>Field</th><th>Type</th><th>Description</th></tr>
    </thead>
    <tbody>
      <tr><td>logo</td><td>URL</td><td>Link to logo image</td></tr>
      <tr><td>from</td><td>String</td><td>Your business name</td></tr>
      <tr><td>to</td><td>String</td><td>Client or customer name</td></tr>
      <tr><td>number</td><td>String</td><td>Invoice or PO number</td></tr>
      <tr><td>items</td><td>Array</td><td>List of items with name, quantity, unit_cost</td></tr>
      <tr><td>currency</td><td>String</td><td>ISO code, default USD</td></tr>
      <tr><td>vat/tax/discount/shipping</td><td>Number</td><td>Percent or flat values</td></tr>
      <tr><td>notes</td><td>String</td><td>Invoice notes</td></tr>
      <tr><td>terms</td><td>String</td><td>Payment terms</td></tr>
      <tr><td>language/locale</td><td>String</td><td>Localization settings</td></tr>
      <tr><td>e_invoice/ubl</td><td>Boolean</td><td>Generate electronic invoice</td></tr>
    </tbody>
  </table>

  <h2>Sample Response</h2>
  <pre>{
  "invoice_url": "https://invoice-generator.com/invoice/xyz123.pdf"
}</pre>

  <h2>Error Responses</h2>
  <pre>{
  "error": "Missing required field 'to'"
}</pre>

  <h2>Support</h2>
  <p>Have a feature request or bug report? We would love to hear your thoughts! You can create an issue on GitHub for any issues you encounter or feature requests.

Using invoice-generator.com is subject to the Privacy Policy and Terms of Use.</p>
  <p>Send questions to <a href="mailto:support@invoice‑generator.com">support@invoice‑generator.com</a>.</p>
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
