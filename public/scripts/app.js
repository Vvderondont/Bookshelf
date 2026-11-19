const books = [
    {
        title:"The Hobbit",
        author:"Tolkien",
        year:1937,
        genre:"Fantasy"
    },
    {
        title:"Frankenstein",
        author:"Mary Shelley",
        year:1818,
        genre:"Horror"
    }
]

books.forEach(book => {
    console.log(`${book.title}: ${book.author}, ${book.year} - ${book.genre}`);
});


const collectionTitle = document.getElementById("collection-title");
//collectionTitle.textContent = "My Book Collection";

const collectionMessage = document.getElementById("collection-message");
//collectionMessage.textContent = `Number of books: ${books.length}`;

const firstBook = document.querySelector(".book-card");
firstBook.classList.add("featured");

const selectButtons = document.querySelectorAll(".select-book");
const selectedBookOutput = document.getElementById("selected-book");

console.log(selectButtons.length);

selectButtons.forEach(button => {
    button.addEventListener("click", () => {
        const bookCard = button.parentElement;
        const bookTitle = bookCard.dataset.title;

        selectedBookOutput.textContent = `Selected book: ${bookTitle}`;
    });
});

const bookList = document.getElementById("book-list");
const addBookButton = document.getElementById("add-book");

function updateCount() {
    const bookCards = document.querySelectorAll(".book-card");
    collectionMessage.textContent = `Number of books: ${bookCards.length}`;
}

bookList.addEventListener("click", event => {
    if (event.target.classList.contains("remove-book")) {
        const bookCard = event.target.parentElement;
        bookCard.remove();
        updateCount();
    }
});

addBookButton.addEventListener("click", function () {
    const title = prompt("Book title:");
    const author = prompt("Author:");
    const year = prompt("Year:");
    const genre = prompt("Genre:");

    const newBook = document.createElement("li");
    newBook.classList.add("book-card");
    newBook.dataset.title = title;

    newBook.innerHTML = `
        <h3>${title}</h3>
        <p>${author}, ${year} - ${genre}</p>

        <button class="select-book" type="button">Select</button>
        <button class="remove-book" type="button">Remove</button>
    `;

    bookList.appendChild(newBook);
    updateCount();
});