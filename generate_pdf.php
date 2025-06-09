<?php
$currency = isset($_POST['currency']) ? htmlspecialchars($_POST['currency']) : 'USD';
$subtotal = 0;

if (!is_dir('uploads')) mkdir('uploads');

// Handle file uploads
$logo_path = '';
if (isset($_FILES['logo']) && $_FILES['logo']['error'] === 0) {
    $logo_path = 'uploads/' . basename($_FILES['logo']['name']);
    move_uploaded_file($_FILES['logo']['tmp_name'], $logo_path);
}

$signature_path = '';
if (isset($_FILES['signature']) && $_FILES['signature']['error'] === 0) {
    $signature_path = 'uploads/' . basename($_FILES['signature']['name']);
    move_uploaded_file($_FILES['signature']['tmp_name'], $signature_path);
}

$attachment_path = '';
$attachment_name = '';
if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === 0) {
    $attachment_name = basename($_FILES['attachment']['name']);
    $attachment_path = 'uploads/' . $attachment_name;
    move_uploaded_file($_FILES['attachment']['tmp_name'], $attachment_path);
}

// Styles
echo <<<STYLE
<style>
body {
    font-family: 'Arial', sans-serif;
    background: #f4f4f4;
    padding: 30px;
}
.invoice-preview {
    background: #ffffff;
    color: #000;
    padding: 40px;
    max-width: 900px;
    margin: auto;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.header-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}
.header-row .logo img {
    max-height: 80px;
}
.header-row .title {
    font-size: 32px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: right;
    flex-grow: 1;
}
.invoice-meta {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 30px;
    font-size: 14px;
}
.meta-block {
    width: 48%;
    line-height: 1.5;
    margin-bottom: 10px;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
}
th {
    background-color: #eaeaea;
    border: 1px solid #ccc;
    padding: 10px;
    font-weight: bold;
    text-align: left;
}
td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}
.summary {
    max-width: 400px;
    margin-left: auto;
    font-size: 14px;
}
.summary p {
    display: flex;
    justify-content: space-between;
    margin: 5px 0;
}
.summary h3 {
    border-top: 2px solid #000;
    padding-top: 10px;
    margin-top: 15px;
    font-size: 16px;
}
.notes, .terms {
    font-size: 13px;
    margin-top: 30px;
}
.notes h4, .terms h4 {
    margin-bottom: 5px;
    font-weight: bold;
}
.signature img {
    max-height: 80px;
    margin-top: 10px;
}

.invoice-preview {
    width: 190mm;         /* A4 width is 210mm, minus margins */
    max-width: 190mm;
    margin: auto;
    overflow: hidden;
  }
  .invoice-preview, .item-table, .summary {
    page-break-inside: avoid;
    break-inside: avoid;
  }
    
</style>
STYLE;

// Start Invoice
echo "<div class='invoice-preview'>";

// Header
echo "<div class='header-row'>";
if ($logo_path) {
    echo "<div class='logo'><img src='$logo_path' alt='Logo'></div>";
} else {
    echo "<div class='logo' style='width:100px;'></div>";
}
echo "<div class='title'>Purchase Order</div>";
echo "</div>";

// Meta
echo "<div class='invoice-meta'>";
echo "<div class='meta-block'><strong>Purchase Order #:</strong><br>" . htmlspecialchars($_POST['invoice_number']) . "</div>";

if (!empty($_POST['po_date'])) {
    echo "<div class='meta-block'><strong>Date:</strong><br>" . htmlspecialchars($_POST['po_date']) . "</div>";
  }
  
  if (!empty($_POST['due_date'])) {
    echo "<div class='meta-block'><strong>Due Date:</strong><br>" . htmlspecialchars($_POST['due_date']) . "</div>";
}

echo "<div class='meta-block'><strong>Bill From:</strong><br>" . nl2br(htmlspecialchars($_POST['bill_from'] ?? '')) . "</div>";

echo "<div class='meta-block'><strong>Bill To:</strong><br>" . nl2br(htmlspecialchars($_POST['bill_to'])) . "</div>";
echo "<div class='meta-block'><strong>Ship To:</strong><br>" . nl2br(htmlspecialchars($_POST['ship_to'] ?? '')) . "</div>";

echo "</div>";

// Items
echo "<table><thead><tr><th>Item</th><th>Quantity</th><th>Rate</th><th>Amount</th></tr></thead><tbody>";
for ($i = 0; $i < count($_POST['item_description']); $i++) {
    $desc = htmlspecialchars($_POST['item_description'][$i]);
    $rate = floatval($_POST['item_rate'][$i]);
    $qty = floatval($_POST['item_quantity'][$i]);
    $amount = $rate * $qty;
    $subtotal += $amount;
    echo "<tr><td>$desc</td><td>$qty</td><td>$currency " . number_format($rate, 2) . "</td><td>$currency " . number_format($amount, 2) . "</td></tr>";
}
echo "</tbody></table>";

// Summary
$discount_percent = floatval($_POST['discount'] ?? 0);
$discount = $subtotal * $discount_percent / 100;

$tax_percent = floatval($_POST['tax'] ?? 0);
$tax = $subtotal * $tax_percent / 100;

$shipping = floatval($_POST['shipping'] ?? 0);

$total = $subtotal - $discount + $tax + $shipping;

echo "<div class='summary'>";
echo "<p><span><strong>Subtotal:</strong></span><span>$currency" . number_format($subtotal, 2) . "</span></p>";
echo "<p><span><strong>Discount ($discount_percent%):</strong></span><span>-$currency" . number_format($discount, 2) . "</span></p>";
echo "<p><span><strong>Tax ($tax_percent%):</strong></span><span>$currency" . number_format($tax, 2) . "</span></p>";
echo "<p><span><strong>Shipping:</strong></span><span>$currency" . number_format($shipping, 2) . "</span></p>";
echo "<h3><span><strong>Total:</strong></span><span>$currency" . number_format($total, 2) . "</span></h3>";
echo "</div>";

// Optional Sections
if (!empty($_POST['notes'])) {
    echo "<div class='notes'><h4>Notes:</h4><p>" . nl2br(htmlspecialchars($_POST['notes'])) . "</p></div>";
}
if (!empty($_POST['terms'])) {
    echo "<div class='terms'><h4>Terms:</h4><p>" . nl2br(htmlspecialchars($_POST['terms'])) . "</p></div>";
}

// Signature image
if ($signature_path) {
    echo "<div class='signature'><strong>Signature:</strong><br><img src='$signature_path' alt='Signature'></div>";
}

// Attachment link
if ($attachment_path) {
    echo "<div class='attachment' style='margin-top: 20px;'><strong>Attachment:</strong><br><a href='$attachment_path' target='_blank'>$attachment_name</a></div>";
}

echo "</div>";


// Data coming from form
$customer = $_POST['customer_name'] ?? 'Unnamed Customer';
$reference = $_POST['reference'] ?? 'PO-XXXX';
$date = $_POST['date'] ?? date('Y-m-d');
$due_date = $_POST['due_date'] ?? '-';
$total = $_POST['total'] ?? '0.00';

$historyFile = 'history.json';

// Prepare new entry
$newEntry = [
  'customer' => $customer,
  'reference' => $reference,
  'date' => $date,
  'due_date' => $due_date,
  'total' => $total
];

// Load existing data
$history = [];
if (file_exists($historyFile)) {
  $history = json_decode(file_get_contents($historyFile), true);
}

// Append new entry
$history[] = $newEntry;

// Save back to file
file_put_contents($historyFile, json_encode($history, JSON_PRETTY_PRINT));


?>

<!-- Download Button -->
<div style="text-align:center;">
  <button onclick="downloadPDF()" style="margin: 20px; padding: 10px 20px;">Download as PDF</button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
function downloadPDF() {
  const invoice = document.querySelector('.invoice-preview');
  const opt = {
    margin: [0.2, 0.2, 0.2, 0.2], // smaller margin (top, left, bottom, right)
    filename: 'purchase_order_<?php echo htmlspecialchars($_POST["invoice_number"]); ?>.pdf',
    image: { type: 'jpeg', quality: 1 },
    html2canvas: {
      scale: 2, // better resolution and fit
      useCORS: true,
      scrollX: 0,
      scrollY: 0,
      windowWidth: document.body.scrollWidth, // ensure full width capture
    },
    jsPDF: {
      unit: 'mm',
      format: 'a4',
      orientation: 'portrait'
    },
    pagebreak: { mode: ['avoid-all', 'css', 'legacy'] } // helps avoid awkward splits
  };

  html2pdf().set(opt).from(invoice).save();
}

</script>
