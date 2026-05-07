# 🛡️ Laravel Quote Microservice

Developed a Laravel API that returns an insurance quote when you give it an ID.
Built as an internship project to practice how real insurance systems works.

---

## 💡 What It Does

You call one endpoint with an ID number, and the API gives you back the insurance quote saved in the database for that ID.

```
GET /api/quote/{id}
```

## 🗄️ What's Stored in the Database

Each quote has:

| Field | Example |
|---|---|
| Client name | Ion Popescu |
| Car plate | B123XYZ |
| Insurer | AsiguratorX |
| Price | 545.50 RON |

---

## 🧱 Project Structure

```
laravel-api-offers/
├── app/
│   ├── Http/Controllers/QuoteController.php  ← handles the request
│   └── Models/Quote.php                      ← talks to the database
├── database/
│   ├── migrations/                           ← creates the table
│   └── seeders/QuoteSeeder.php               ← adds fake data
├── routes/
│   └── api.php                               ← defines the endpoint
└── .env                                      ← your config
```

---

## ⚙️ Tech Stack

- 🐘 **PHP / Laravel**
- 🗃️ **MySQL**
- 🖥️ **Laravel Herd** (to run it locally)
- 📬 **Postman** (to test it)

---

## 🚀 How to Run It

**1. Clone the project**
```bash
git clone https://github.com/Catinca2005/Laravel-Microservice.git
cd Laravel-Microservice
composer install
```

**2. Set up your config**
```bash
cp .env.example .env
php artisan key:generate
```

Open `.env` and fill in your database details:
```env
DB_DATABASE=laravel_quotes
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

**3. Create the table and add fake data**
```bash
php artisan migrate --seed
```

**4. Development Environment (Laravel Herd)**

This project is configured to run using **Laravel Herd** for a seamless development experience.

- Ensure Laravel Herd is installed and running on your machine.
- Make sure the project folder is located within your Herd **"Sites"** path.
- The API will be automatically served at `http://composer.test` — no need to run `php artisan serve`.

---

## 🧪 Try It Out

Open Postman and send:

```
GET http://composer.test/api/quote/1
```

✅ **If the quote exists:**
```json
{
    "id": 1,
    "client_name": "Ion Popescu",
    "car_plate": "B123XYZ",
    "insurer_name": "AsiguratorX",
    "price": "545.50"
}
```

❌ **If the ID doesn't exist:**
```json
{
    "error": "Quote not found"
}
```

---

## ✨ Features

- 🔍 Look up any quote by ID
- 💾 Data stored in MySQL with proper migrations
- ⚠️ Returns a clean 404 error if the quote isn't found
