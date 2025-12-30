# 🚀 Leads Management System

A **simple, clean, and modern** Leads Management web application built with **Laravel 12** and **Tailwind CSS**.

The system provides **full CRUD operations**, strong validation, and a **professional responsive UI** suitable for real-world projects and portfolios.

---

## ✨ Features

- 📋 List all leads in a responsive table  
- ➕ Add new leads  
- ✏️ Edit existing leads  
- 🗑️ Delete leads with confirmation  
- ✅ Advanced validation with **English error messages**
- 📌 Input rules:
  - **Name**: English letters and spaces only (no numbers or symbols)
  - **Email**: Valid format, English characters only, **unique**
  - **Phone**: Optional, exactly **11 digits** (numbers only)
  - **Status**: New / Contacted / Closed
- 🎨 Modern UI using **Tailwind CSS**
- ⭐ Font Awesome icons
- 🔔 Success messages after every action
- 🧹 Clean architecture using **Form Request Validation**

---

## 🛠️ Technologies Used

- Laravel 12  
- Tailwind CSS (Vite)  
- MySQL  
- Font Awesome 6 (CDN)

---

## ⚙️ System Requirements

- PHP >= 8.2  
- Composer  
- Node.js & npm  
- MySQL Server  

---

## 📦 Installation Steps

### 1️⃣ Clone the repository
```bash
git clone https://github.com/yourusername/leads-manager.git
cd leads-manager
```

### 2️⃣ Install backend dependencies
```bash
composer install
```

### 3️⃣ Install frontend dependencies
```bash
npm install
npm run build
```

### 4️⃣ Environment setup
```bash
cp .env.example .env
php artisan key:generate
```

Edit your `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=leads_manager
DB_USERNAME=root
DB_PASSWORD=
```

### 5️⃣ Create database
```sql
CREATE DATABASE leads_manager;
```

### 6️⃣ Run migrations
```bash
php artisan migrate
```

### 7️⃣ Start the development server
```bash
composer run dev
```

---

## ✅ Validation Rules

| Field  | Rules |
|------|------|
| Name | Required, max 255, English letters & spaces only |
| Email | Required, valid email, ASCII only, unique |
| Phone | Nullable, exactly 11 digits |
| Status | Required, one of: `new`, `contacted`, `closed` |

---

## 📌 Notes

- Uses **Form Request** classes for clean and maintainable validation.
- UI is fully responsive and mobile-friendly.
- Suitable for **junior to mid-level Laravel portfolios**.

---

## 👨‍💻 Author

**Mostafa ElKholy**  
Backend Laravel Developer  

---

⭐ If you like this project, feel free to star it on GitHub.
