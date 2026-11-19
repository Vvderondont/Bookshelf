<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bookshelf - Home</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('scripts/app.js') }}" defer></script>
    </head>
 
    <body>
        <header>
            <h1>Bookshelf</h1>
            <nav>
                <a href="{{ route('books.index') }}">Home</a>
                <a href="{{ route('books.create') }}">Add a book</a>
            </nav>
        </header>
        <main>
            <h2 id="collection-title">My Laravel Bookshelf</h2> 
            <p id="collection-message">Welcome to my book collection</p> 
            <button id="add-book" type="button">Add book</button>           
            <ul id="book-list">
            <li class="book-card" data-title="The Hobbit">
                 <h3>The Hobbit</h3>
                <a href="read.html">Book information</a>
                <a href="update.html">Update book</a>
                <button class="select-book" type="button">Select</button>
                <button class="remove-book" type="button">Remove</button>
            </li>
        
            <li class="book-card"  data-title="Frankenstein" >
                <h3>Frankenstein</h3>
                <a href="read.html">Book information</a>
                <a href="update.html">Update book</a>
                <button class="select-book" type="button">Select</button>
                <button class="remove-book" type="button">Remove</button>
            </li>
            </ul>
            <p id="selected-book">No book selected</p>

        </main>
        <footer>
            <p>2026 Bookshelf</p>
        </footer>
    </body>
</html>