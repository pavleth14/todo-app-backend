
---

## ✅ `backend/README.md` – Komande za Laravel

```md
# Backend – Laravel

## 🔧 Kako pokrenuti backend

```bash
# 1. Uđi u backend folder
cd backend

# 2. Instaliraj PHP pakete preko Composer-a ako nemas instaliran composer
composer install

# 3. Kreiraj .env fajl
cp .env.example .env

# 4. Generiši aplikacioni ključ
php artisan key:generate

# 5. (Proveri da je baza kreirana - ručno u XAMPP-u ili SQLite fajl)

# 6. Pokreni migracije (kreira tabele)
php artisan migrate

# 7. Pokreni lokalni server
php artisan serve
