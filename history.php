<?php
// Handle erase request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['erase'])) {
  file_put_contents('history.json', json_encode([]));
  header("Location: history.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>History - Purchase Order Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9f9f9;
    }
    .history-box {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      margin-top: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .history-header {
      border-bottom: 1px solid #ddd;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    .invoice-warning {
      color: #dc3545;
      font-size: 0.9rem;
      margin-top: 15px;
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
    <div class="history-box">
      <div class="history-header d-flex justify-content-between align-items-center">
        <h4>History</h4>
        <div>
          <a href="index.php" class="btn btn-success btn-sm">New Invoice</a>
          <button class="btn btn-outline-secondary btn-sm" disabled>Export</button>
        </div>
      </div>

      <p class="text-muted">We automatically save invoices that you created recently to your device. This is useful when you need to quickly make an edit to an invoice.</p>

      <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
          <thead class="table-light">
            <tr>
              <th>Customer</th>
              <th>Reference</th>
              <th>Date</th>
              <th>Due Date</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $historyFile = 'history.json';
            if (file_exists($historyFile)) {
              $entries = json_decode(file_get_contents($historyFile), true);
              foreach ($entries as $entry) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($entry['customer']) . '</td>';
                echo '<td>' . htmlspecialchars($entry['reference']) . '</td>';
                echo '<td>' . htmlspecialchars($entry['date']) . '</td>';
                echo '<td>' . htmlspecialchars($entry['due_date']) . '</td>';
                echo '<td>₹' . htmlspecialchars($entry['total']) . '</td>';
                $pdfPath = 'invoices/' . $entry['reference'] . '.pdf';
echo '<td><a href="' . $pdfPath . '" target="_blank" class="btn btn-primary btn-sm">View</a></td>';

                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="6" class="text-center text-muted">No purchase orders found.</td></tr>';
            }
          ?>
          </tbody>
        </table>
      </div>

      <form method="post" class="text-end">
        <input type="hidden" name="erase" value="1">
        <button class="btn btn-danger btn-sm mt-2">Erase Everything</button>
      </form>

      <p class="invoice-warning">
        ⚠️ These invoices are stored on your device only. Clearing your browser’s history will erase these invoices. We recommend hanging on to a copy of each invoice you generate.
      </p>
    </div>
  </div>

  <!-- Bootstrap JS CDN -->
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
