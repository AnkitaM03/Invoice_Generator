<?php
// new.php
?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Service" class="theme-dark-mode" ng-app="app">
<head>
  <title>Free Purchase Order Generator</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="canonical" href="https://invoice-generator.com/purchase-order-template" />
  <meta name="description" content="Make attractive, professional Purchase Orders in a single click with the purchase order generator trusted by millions of people." />
  <link rel="stylesheet" href="https://cdn.invoice-generator.com/theme_light.6704c9b8.css" id="theme-link">
  <link rel="preload" href="https://cdn.invoice-generator.com/theme_dark.3fb87f70.css" as="style" id="theme-dark">
  <link rel="stylesheet" href="https://cdn.invoice-generator.com/197.68dfdfc2.css">
  <link rel="stylesheet" href="https://cdn.invoice-generator.com/app.bc26e048.css">
  <link href="https://cdn.invoice-generator.com/fontawesome-6.5.2/css/fontawesome.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.invoice-generator.com/fontawesome-6.5.2/css/solid.min.css" rel="stylesheet" />
  <script src="https://cdn.invoice-generator.com/runtime.af71c689.js" defer></script>
  <script src="https://cdn.invoice-generator.com/197.b8d88555.js" defer></script>
  <script src="https://cdn.invoice-generator.com/app.f4e2c9d7.js" defer></script>
  <style>
    #logo-preview {
      max-height: 80px;
      margin-top: 10px;
      display: none;
    }
    #logo-box {
      width: 100px;
      height: 100px;
      border: 2px dashed #ccc;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
    .items-table-header {
      font-weight: bold;
    }
    .item-row input,
    .item-row textarea {
      background-color: #f9f9f9;
    }
    .item-row {
      border-bottom: 1px solid #ccc;
      margin-bottom: 8px;
      padding-bottom: 8px;
    }
    .btn-add-item {
      margin-top: 10px;
      margin-bottom: 20px;
      font-size: 14px;
      padding: 6px 12px;
    }
    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, .25);
    }
    .input-label {
      font-weight: bold;
    }
    .invoice-editor .input-group-addon span {
      font-weight: bold;
     
    }


    #invoice {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      max-width: 900px;
      margin: auto;
    }

    .form-control-sm {
      border-radius: 6px;
      border: 1px solid #ccc;
      padding: 6px 10px;
    }

    .addon-input {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .addon-input input[type="text"] {
      background-color: #f1f1f1;
      border-right: none;
      width: 30px;
    }

    .addon-input .input-group-addon {
      flex: 1;
    }

    .invoice-section-title {
      font-size: 18px;
      font-weight: bold;
      margin-top: 20px;
      color: #333;
      border-bottom: 1px solid #ddd;
      padding-bottom: 5px;
    }

    textarea,
    input[type="text"],
    input[type="date"],
    input[type="number"],
    select {
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    
  }


  .logo-text {
    font-size: 32px;
    font-weight: 700;
    letter-spacing: 1px;
    color: #fff;
  }

  .logo-text .highlight {
    color: #ffe082;
  }

  .nav-link {
    color: #000000;
    font-weight: 500;
    text-decoration: none;
    padding: 8px 12px;
    transition: background 0.3s, color 0.3s;
    border-radius: 6px;
  }

  .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.15);
    color: #fff;
  }

  .call-to-action h2 {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .call-to-action p.lead {
    font-size: 18px;
    color: #e3eaf2;
    margin-bottom: 25px;
  }

  .rating h5 {
    color: #ffe082;
    font-weight: 500;
  }
  style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Inter', sans-serif;
    background-color: #f8f9fb;
  }


  .container {
    max-width: 1200px;
    margin: auto;
  }

 

  .logo {
    font-size: 32px;
    font-weight: 700;
    letter-spacing: 1px;
    color: #fff;
  }

  .logo span {
    color: #ffe082;
  }

  .nav-links {
    display: flex;
    gap: 25px;
  }

  .nav-links a {
    text-decoration: none;
    color: #ffffffcc;
    font-weight: 500;
    transition: color 0.3s;
  }

  .nav-links a:hover {
    color: #ffffff;
  }


 
  .cta-btn {
    display: inline-block;
    background-color: #ffe082;
    color: #1a1a1a;
    font-weight: 600;
    text-decoration: none;
    padding: 12px 28px;
    border-radius: 8px;
    transition: background 0.3s;
  }

  .cta-btn:hover {
    background-color: #ffca28;
  }

  .user-rating {
    font-size: 15px;
    margin-top: 20px;
    color: #ffecb3;
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
     

      .item-row .form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
}
    
  </style>
  <script>
    window.nextNumber = null;
    window.documentTemplateType = 'purchase_order';
    window.cloudMode = false;
    window.documentLanguage = 'en';
  </script>
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

<!-- Main Form -->
<form action="generate_pdf.php" method="post" enctype="multipart/form-data" onsubmit="prepareItemsJSON()">
  <div class="container mt-5">
    <div id="static" class="invoice-holder clearfix">
      <div class="invoice-controls desktop">
        <div class="affix-el" id="invoice-controls-affix">
          <!-- <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              <span class="fas fa-arrow-to-bottom"></span> Download Purchase Order
            </button>
          </div> -->
        </div>
      </div>
      <div class="papers">
        <div class="invoice-editor">

          <!-- Invoice Title Section -->
          <div class="row">
            <div class="col-md-4 offset-md-8">
              <div class="title">
              <input type="text" class="form-control form-control-sm input-label" name="invoice_title" value="PURCHASE ORDER" />

                  <div class="input-group input-group-sm">
                    <span class="input-group-text pe-2 ps-2">#</span>
                    <input class="form-control form-control-sm border-start-0 ps-2" type="text" name="invoice_number" />

                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Billing Info -->
          <div class="row mt-3">
            <div class="col-md-7">
              <div class="mb-3">
                
                <label id="logo-box" for="logo-upload"><i class="fas fa-upload"></i></label>
                <input type="file" name="logo" id="logo-upload" onchange="previewLogo(event)" />
                <img id="logo-preview" />
                <label class="form-label d-block">Add Your Logo</label>
              </div>


              <!-- LOGO PREVIEW (ADD THIS INSIDE YOUR INVOICE PREVIEW CONTAINER) -->
          <div id="logo-container" style="text-align: left; margin-bottom: 10px;">
            <img id="logo-preview" src="" alt="Logo" style="max-height: 80px;" />
          </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="contact">
                    <div class="theme-label mb-1">
                      <input type="text" class="input-label form-control form-control-sm" name="from_title" value="Bill From" />
                    </div>
                    <div class="value">
                    <textarea class="form-control form-control-sm" placeholder="Who is this from?" name="bill_from"></textarea>

                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="contact pt-3">
                    <div class="theme-label mb-1">
                      <input type="text" class="input-label form-control form-control-sm" name="to_title" value="Bill To" />
                    </div>
                    <div class="value">
                    <textarea class="form-control form-control-sm" placeholder="Who is this to?" name="bill_to"></textarea>

                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="contact pt-3">
                    <div class="theme-label mb-1">
                      <input type="text" class="input-label form-control form-control-sm" name="ship_to_title" value="Ship To" />
                    </div>
                    <div class="value">
                      <textarea class="form-control form-control-sm" placeholder="(optional)" name="ship_to"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Date and Terms -->
            <div class="col-md-5">
            <!-- Purchase Order Date -->
<div class="mb-2">
  <label for="po-date" class="form-label fw-semibold">Date</label>
  <input type="date" id="po-date" name="po_date" class="form-control d-inline-block w-auto">
</div>

<!-- Due Date -->
<div class="mb-2">
  <label for="due-date" class="form-label fw-semibold">Due Date</label>
  <input type="date" id="due-date" name="due_date" class="form-control d-inline-block w-auto">
</div>

                

              <div>
      <label for="payment-terms" class="form-label fw-semibold">Payment Terms</label>
      <input type="text" id="payment-terms" class="form-control d-inline-block w-auto" value="Net 7 Days">
    </div>
                
    <div class="mb-2">
  <label for="currency" class="form-label fw-semibold">Currency</label>
  <select id="currency" name="currency" class="form-select d-inline-block w-auto">
    <option value="USD" selected>USD</option>
    <option value="EUR">EUR</option>
    <option value="INR">INR</option>
    <option value="GBP">GBP</option>
  </select>
</div>

    <div>
<div>
      <label for="balance-due" class="form-label fw-semibold">Balance Due</label>
      <input type="text" id="balance-due" class="form-control d-inline-block w-auto" value="" >
    </div>
            </div>
          </div>

          <!-- Items Section -->
          <div class="items-holder mt-4">
  <div class="items-table-header bg-dark text-light p-2">
    <div class="row">
      <div class="col-5">Item</div>
      <div class="col-2">Quantity</div>
      <div class="col-3">Rate</div>
      <div class="col-2">Amount</div>
    </div>
  </div>

  <div class="items-table p-2" id="items-container">
    <div class="row g-2 item-row align-items-center">
      <div class="col-5">
        <textarea name="item_description[]" class="form-control form-control-sm" rows="1" placeholder="Description of item/service..."></textarea>
      </div>
      <div class="col-2">
        <input type="number" class="form-control form-control-sm item-quantity" name="item_quantity[]" value="1" min="1" oninput="calculateTotal(this)">
      </div>
      <div class="col-3 d-flex align-items-center">
        <span class="me-1">Rs</span>
        <input type="number" class="form-control form-control-sm item-rate" name="item_rate[]" value="0" min="0" oninput="calculateTotal(this)">
      </div>
      <div class="col-1">
        <input type="text" class="form-control form-control-sm amount" value="₹0.00" readonly>
      </div>
      <div class="col-1">
        <button type="button" class="btn btn-sm btn-link text-danger" onclick="removeItem(this)">✕</button>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-outline-success mt-2" onclick="addItem()">+ Line Item</button>
</div>


          <!-- Notes & Totals -->
          <div class="row mt-4">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Notes</label>
                <textarea class="form-control" name="notes"></textarea>
              </div>


              <div class="form-group">
                <label class="form-label">Upload Signature</label><br>
                <input type="file" name="signature" accept="image/*" onchange="previewSignature(event)">
                <div id="signature-preview-box" style="margin-top: 10px;">
                  <img id="signature-preview" style="max-height: 80px; display: none;" />
                </div>
              </div>

                <div class="form-group">
                  <label class="form-label">Upload Attachment</label><br>
                  <input type="file" name="attachment" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                  <p style="font-size: 12px; color: #666;">Accepted: PDF, Image, Word</p>
                </div>



                <div class="mb-3">
                  <label class="form-label">Terms</label>
                  <textarea class="form-control" name="terms"></textarea>
                </div>
              </div>
              
              <div class="col-md-4 ms-auto">
  <div class="d-flex justify-content-between py-1">
    <div>Subtotal</div>
    <div id="subTotal">₹0.00</div>
  </div>

  <div class="d-flex justify-content-between align-items-center py-1">
    <div>Discount</div>
    <div class="input-group input-group-sm" style="width: 130px;">
      <input type="number" class="form-control text-end" name="discount" id="discount" value="0" min="0">
      <span class="input-group-text">%</span>
    </div>
  </div>

  <div class="d-flex justify-content-between align-items-center py-1">
    <div>Tax</div>
    <div class="input-group input-group-sm" style="width: 130px;">
      <input type="number" class="form-control text-end" name="tax" id="tax" value="0" min="0">
      <span class="input-group-text">%</span>
    </div>
  </div>

  <div class="d-flex justify-content-between align-items-center py-1">
    <div>Shipping</div>
    <div class="input-group input-group-sm" style="width: 130px;">
      <span class="input-group-text">₹</span>
      <input type="number" class="form-control text-end" name="shipping" id="shipping" value="0" min="0">
    </div>
  </div>

  <hr class="my-2" />

  <div class="d-flex justify-content-between fw-bold py-1">
    <div>Total</div>
    <div id="totalAmount">₹0.00</div>
  </div>
</div>


          <div class="text-end mt-4">
            <button class="btn btn-primary">Download PDF</button>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>

<!-- Scripts -->
<script>

  // Primary function to recalculate everything
  function calculateAllTotals() {
    let subtotal = 0;
    document.querySelectorAll('.item-row').forEach(row => {
      const qty = parseFloat(row.querySelector('input[name="item_quantity[]"]').value) || 0;
      const rate = parseFloat(row.querySelector('input[name="item_rate[]"]').value) || 0;
      const amount = qty * rate;
      row.querySelector('.amount').value = '₹' + amount.toFixed(2);
      row.querySelector('input[name="item_quantity[]"]').classList.toggle('border-danger', qty <= 0);
      row.querySelector('input[name="item_rate[]"]').classList.toggle('border-danger', rate <= 0);
      subtotal += amount;
    });

    const discountRate = parseFloat(document.getElementById('discount').value) || 0;
    const taxRate      = parseFloat(document.getElementById('tax').value) || 0;
    const shipping     = parseFloat(document.getElementById('shipping').value) || 0;

    const discount = subtotal * discountRate / 100;
    const tax      = (subtotal - discount) * taxRate / 100;
    const total    = subtotal - discount + tax + shipping;

    document.getElementById('subTotal').textContent     = '₹' + subtotal.toFixed(2);
    document.getElementById('totalAmount').textContent  = '₹' + total.toFixed(2);
  }

  // Trigger calc when rate/qty/tax/discount/shipping inputs change
  document.addEventListener('input', e => {
    const targets = ['item_quantity[]', 'item_rate[]', 'discount', 'tax', 'shipping'];
    if (
      (e.target.name && targets.includes(e.target.name)) ||
      ['discount','tax','shipping'].includes(e.target.id)
    ) {
      calculateAllTotals();
    }
  });

  function addItem() {
    const container = document.getElementById('items-container');
    const template = container.querySelector('.item-row');
    const clone = template.cloneNode(true);
    clone.querySelectorAll('input, textarea').forEach(inp => {
      if (inp.name.includes('quantity')) inp.value = 1;
      else if (inp.name.includes('rate')) inp.value = 0;
      else if (inp.classList.contains('amount')) inp.value = '₹0.00';
      else if (inp.tagName === 'TEXTAREA') inp.value = '';
      inp.classList.remove('border-danger');
    });
    container.appendChild(clone);
    calculateAllTotals();
  }

  function removeItem(btn) {
    const container = document.getElementById('items-container');
    if (container.querySelectorAll('.item-row').length > 1) {
      btn.closest('.item-row').remove();
      calculateAllTotals();
    }
  }

  // Ensure initial calculation on page load
  window.addEventListener('load', calculateAllTotals);

  // Expose buttons to HTML onclick
  window.addItem = addItem;
  window.removeItem = removeItem;



  // Logo preview
  function previewLogo(event) {
    const input = event.target;
    const reader = new FileReader();
    reader.onload = function () {
      const img = document.getElementById('logo-preview');
      img.src = reader.result;
      img.style.display = 'block';
    };
    if (input.files && input.files[0]) {
      reader.readAsDataURL(input.files[0]);
    }
  }

  // Signature preview
  function previewSignature(event) {
    const input = event.target;
    const reader = new FileReader();
    reader.onload = function () {
      const img = document.getElementById('signature-preview');
      img.src = reader.result;
      img.style.display = 'block';
    };
    if (input.files && input.files[0]) {
      reader.readAsDataURL(input.files[0]);
    }
  }

  // Trigger totals on page load
  window.onload = calculateAllTotals;
</script>


<br><br>
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

