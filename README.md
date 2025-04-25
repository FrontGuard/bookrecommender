# 📚 Book Recommender

Простий веб-проєкт на PHP + MySQL, який дозволяє користувачам обирати жанр і переглядати рекомендовані книги.

## 🧰 Технології

- PHP (без фреймворків)
- MySQL
- HTML/CSS/JS
- REST API (2 запити)
- Swagger (для API-документації)

## 🚀 Запуск локально

1. Імпортувати базу даних з файлу `insert_books.sql` (наприклад, через phpMyAdmin)
2. Розмістити файли в кореневій директорії XAMPP/OpenServer
3. Відкрити `index.html` у браузері
4. Упевнитися, що запити до `books.php` і `book.php` працюють

## 📦 Структура

- index.html — основна сторінка
- books.php — API: книги за жанром
- book.php — API: детальна інформація про книгу
- fetchBooks.js — логіка виводу
- insert_books.sql — SQL-файл для бази
- LICENSE — ліцензія MIT
- license-check-report.txt — перевірка ліцензій
- privacy_policy.md — політика конфіденційності
- swagger.yaml — опис API

## 👤 Автор

Студент Бабіцький Віктор Юрійович  
Курс: 3 курс, група Вт-22-1
Email: vt221_bvyu@student.ztu.edu.ua

## 📄 Ліцензія

Цей проєкт ліцензовано під [MIT License](./LICENSE)
