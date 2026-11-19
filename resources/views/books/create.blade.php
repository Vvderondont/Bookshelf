<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">        <script src="create.js" defer></script>
    </head>
 
    <body>
        <header>
            <h1>Bookshelf</h1>
            <nav>
                <a href="index.html">Home</a>
                <a href="create.html">Add a book</a>
            </nav>
        </header>
        <main>
            <h2>Add a new book</h2>
 
            <form action="/books" method="POST">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <input id="title" name="title" type="text" required>
                </div>

                 <div>
                    <label for="author">Author</label>
                    <input id="author" name="author" type="text" required>
                    @error('title')
                    <p>{{$message}}</p>
                    @enderror
                </div>

                 <div>
                    <label for="year">Year</label>
                    <input id="year" name="year" type="number" required>
                </div>

                 <div>
                    <label for="genre">Genre</label> 
                
                <select id="genre" name="genre" required>
                    <option value="fantasy">Fantasy</option> 
                    <option value="horror">Horror</option> 
                    <option value="sciencie-fiction">Sciencie-iction</option>
                </select>
                 </div>
                <button type="submit">Add book</button>
            </form>
        </main>
        <footer>
            <p>2026 Bookshelf</p>
        </footer>
    </body>
</html>