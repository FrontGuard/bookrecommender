// Викликається при натисканні кнопки або зміні select
function fetchBooks() {
    const genreSelect = document.getElementById("genre");
    const genre = genreSelect.value;

    const resultContainer = document.getElementById("bookList");
    resultContainer.innerHTML = "Завантаження книг...";

    fetch(`books.php?genre=${genre}`)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Помилка при отриманні даних");
            }
            return response.json();
        })
        .then((books) => {
            if (books.length === 0) {
                resultContainer.innerHTML = "<p>Книги не знайдено.</p>";
                return;
            }

            const html = books
                .map(
                    (book) => `
        <div class="book">
          <h3>${book.title}</h3>
          <p><strong>Автор:</strong> ${book.author}</p>
          <p><strong>Рейтинг:</strong> ${book.rating}</p>
          <p><em>${book.description}</em></p>
        </div>
      `
                )
                .join("");

            resultContainer.innerHTML = html;
        })
        .catch((error) => {
            resultContainer.innerHTML = `<p style="color: red;">${error.message}</p>`;
        });
}
