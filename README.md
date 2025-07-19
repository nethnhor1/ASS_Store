# 🛍️ ASS-Store

ASS-Store is a simple web-based store management system built using **PHP**, **MySQL**, **CSS**, and **JavaScript**. This project allows users to manage products, sales, and store operations via a clean and interactive interface.

---

## 🚀 Features

- 📦 Product management (Add/Edit/Delete)
- 📊 Dashboard with statistics
- 💰 Sales tracking
- 🧾 Invoice or transaction record system
- 🔒 Basic login/authentication system (optional)
- 🎨 Styled with CSS, enhanced with JavaScript

---

## 🧰 Technologies Used

- **PHP** – Server-side logic
- **MySQL** – Database storage
- **HTML/CSS** – Page structure and styling
- **JavaScript** – Dynamic interactivity
- **phpMyAdmin** – Optional DB management

---

## 📂 Folder Structure

ASS-Store/
│
├── index.php                  # Main landing/home page
├── login.php                  # Login form (if used)
├── dashboard.php              # Dashboard after login
├── .htaccess                  # Apache config (optional)
│
├── assets/                    # Static assets (CSS, JS, images)
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   └── images/
│       └── logo.png
│
├── includes/                  # Shared reusable PHP scripts
│   ├── db.php                 # Database connection
│   ├── header.php             # Top navbar or header
│   └── footer.php             # Footer HTML
│
├── pages/                     # Subpages like product management
│   ├── add_product.php
│   ├── edit_product.php
│   ├── delete_product.php
│   └── view_products.php
│
├── sql/                       # SQL import/export files
│   └── ass_store.sql          # MySQL structure and data
│
├── config.yaml                # Optional YAML config file
├── README.md                  # Project overview
├── LICENSE                    # (Optional) License
└── .gitignore                 # Files Git should ignore
