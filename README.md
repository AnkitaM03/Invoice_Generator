# Invoice_Generator

A professional and user-friendly **Invoice Generator** built with **PHP**, **HTML**, **CSS**, and **JavaScript**. This tool enables users to create and download invoices with full customization, including logos, attachments, digital signatures, and PDF support.

---

## 🚀 Features

- 🔧 Dynamic invoice input fields
- 🖼️ Upload company logo
- ➕ Add multiple line items with live total calculations
- 📈 Supports tax, discount, shipping, and subtotal/final total
- 📎 Add attachments
- ✍️ Add a digital signature
- 📄 Real-time invoice preview
- ⬇️ Download invoice as PDF (via html2pdf.js or Dompdf)
- 📱 Fully responsive layout

---

## 📂 Project Structure

```bash
invoice-generator/
├── index.php             # Main invoice form UI
├── generate_pdf.php      # PDF generation logic (Dompdf)
├── assets/
│   ├── css/              # Custom stylesheets
│   ├── js/               # Scripts for calculation and PDF generation
│   └── images/           # Logo and icons
├── uploads/              # Stores attachments and signatures
├── README.md             # Project documentation
└──            
