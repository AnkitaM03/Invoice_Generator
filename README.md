# Invoice_Generator

A professional and user-friendly **Invoice Generator** built with **PHP**, **HTML**, **CSS**, and **JavaScript**. This tool enables users to create and download invoices with full customization, including logos, attachments, digital signatures, and PDF support.

 Designed for freelancers, small businesses, and service providers, this tool offers real-time invoice previews, automatic calculations, logo upload, digital signature, and PDF download support.

Whether you want to send invoices to clients, print them for records, or store them digitally, this generator simplifies the entire process with a user-friendly interface.

## 🔑 Key Highlights
Intuitive form with editable fields

Supports multiple invoice items and line-wise totals

Tax, discount, and shipping calculators

Upload and preview company logo

Attach additional documents (like receipts, terms, etc.)

Digital signature input for official approvals

Download ready-to-print PDF instantly

## 📌 Use Cases
Freelancers billing clients

Small businesses generating client invoices

Agencies sending professional payment requests

Accounting teams automating invoice formatting
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
