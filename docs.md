# 📘 Документація проєкту Book Recommender

## 🔧 Стек технологій

- PHP 8+
- MySQL 5.7+
- HTML5, CSS3, JavaScript
- REST API (без фреймворків)
- Swagger (опис API)
- CookieConsent (GDPR)

---

## 📁 Файли проєкту

| Назва файлу          | Опис                                           |
|----------------------|------------------------------------------------|
| index.html           | Основна сторінка сайту                         |
| fetchBooks.js        | JS-логіка для отримання й виводу книг         |
| books.php            | API: отримання книг за жанром                 |
| book.php             | API: детальна інформація про одну книгу       |
| insert_books.sql     | SQL-структура та початкові книги              |
| swagger.yaml         | Swagger-документація API                      |
| LICENSE              | Ліцензія MIT                                  |
| privacy_policy.md    | Політика конфіденційності (GDPR)              |
| license-check-report.txt | Ліцензії використовуваних компонентів     |
| documentation.md     | Цей файл — загальна документація              |

---

## 🧠 Опис API

- GET `/books.php?genre=fantasy`  
  Повертає всі книги певного жанру у форматі JSON

- GET `/book.php?id=1`  
  Повертає деталі книги за ID

---

## ⚙️ Як запустити проєкт

1. Імпортувати базу даних з `insert_books.sql`
2. Запустити локальний сервер (наприклад XAMPP/OpenServer)
3. Відкрити index.html у браузері
4. API-запити повинні працювати через PHP

---

## 👤 Автор

Проєкт створено студентом Бабіцький Віктор Юрійович 
GitHub: https://github.com/FrontGuard/bookrecommender 
Рік: 2025
