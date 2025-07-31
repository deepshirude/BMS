# Bank Management System

This project is a web-based **Bank Management System** designed to manage various banking operations for different user roles including regular users, cashiers, and managers. It provides functionalities for account management, transaction processing, feedback submission, and notice viewing.

---

## 📘 Overview

The **Bank Management System** is a comprehensive web application that facilitates essential banking operations. It is structured to support different levels of access and functionality based on user roles:

- **Users**:  
  - View account details  
  - View transaction statements  
  - Transfer funds  
  - Submit feedback  
  - View notices  

- **Cashiers**:  
  - Process deposits and withdrawals for user accounts

- **Managers**:  
  - Manage user accounts (add, view, delete)  
  - Oversee customer feedback  
  - Manage notices

---

## 🛠️ Tech Stack

**Backend**: PHP  
**Database**: MySQL  
**Frontend**:
- HTML  
- CSS (Bootstrap for responsive design and custom styling)  
- JavaScript (jQuery for DOM manipulation and Bootstrap's JavaScript components)  
- Font Awesome (for icons)

---

## 📁 Pages/Modules

The system is organized into several modules, each accessible based on the user's login type:

### 👤 User Module:
- `login.php`: Handles user, cashier, and manager login  
- `index.php`: User dashboard  
- `accounts.php`: Displays user account information  
- `statements.php`: Shows detailed account transaction statements  
- `transfer.php`: Enables funds transfer between accounts  
- `feedback.php`: Allows users to submit feedback to the bank  
- `notice.php`: Displays important notices to users  
- `sideButton.php`: Navigation and quick links within the user interface  

### 💰 Cashier Module:
- `cindex.php`: Cashier dashboard for deposits and withdrawals  
- `csideButton.php`: Navigation and quick links within the cashier interface  

### 🧑‍💼 Manager Module:
- `mindex.php`: Manager dashboard overview  
- `maccounts.php`: Manage existing user accounts (view/delete)  
- `maddnew.php`: Add new user accounts  
- `mfeedback.php`: Manage user feedback  
- `mnotice.php`: Manage bank notices  
- `msideButton.php`: Navigation and quick links within the manager interface  

### 🔧 Core/Utility Files:
- `assets/autoloader.php`: Loads necessary CSS and JavaScript files  
- `assets/db.php`: Manages database connection  
- `assets/function.php`: Contains core PHP functions for:
  - `setBalance`  
  - `setOtherBalance`  
  - `makeTransactionCashier`  

---

## ⚙️ Setup Instructions

Follow these steps to set up and run the project on your local machine:

### Step 1: Install XAMPP
Download and install [XAMPP](https://www.apachefriends.org/) to provide the required Apache, MySQL, and PHP environment.

### Step 2: Choose a Text Editor
Use any code editor like **Notepad++** or **Sublime Text 3** to view or edit project files.

### Step 3: Database Setup
1. Open **phpMyAdmin** via `http://localhost/phpmyadmin`.
2. Create a new database named `mybank`.
3. Import the `mybank.sql` file (located in the root directory of the project) into the newly created `mybank` database.

### Step 4: Project Deployment
1. Locate the downloaded project folder (e.g., `deepshirude/bms/BMS-c93cf46968837ee5605d74a1d24c0cfe5b3aa7e0`).
2. Copy the `bank` folder to your XAMPP's `htdocs` directory:
   - On Windows: `C:\xampp\htdocs\bank`

### Step 5: Access the Application
1. Start **Apache** and **MySQL** from the XAMPP Control Panel.
2. Open your browser and go to:  
   `http://localhost/bank`  
3. You should now see the login page of the Bank Management System.

---

## 🔐 Initial Credentials

### Cashier
- **Email**: `cashier@cashier.com`  
- **Password**: `cashier`

### Manager
- **Email**: `manager@manager.com`  
- **Password**: `manager`

> **Note**: User accounts are typically created by a manager using the **"Add New Account"** functionality.

---
