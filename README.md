# Bookshelf

An in-progress book-catalogue web app built as part of my third-semester web development coursework at the University of Southern Denmark (SDU).

## Project overview

Bookshelf is a small application for organizing a personal collection of books. I am using it to practise building a web application with Laravel, including routes, Blade views, request validation, and Eloquent models.

## Current implementation

- A book-collection page with sample book entries.
- Browser-side interactions to add, select, and remove entries from the displayed list. These changes currently last only for the current page session.
- A Blade form for entering a book's title, author, year, and genre.
- Laravel routes and a controller that validates the submitted title.
- A `Book` Eloquent model with fillable book attributes.

## Work in progress

- Saving book records to the database and loading them into the collection.
- Completing create, read, update, and delete (CRUD) flows.
- Expanding validation, user feedback, and project-specific automated tests.

The database migration is currently a scaffold, so book data is not yet persisted.

## Technology stack

- PHP 8.3+
- Laravel 13
- Blade templating
- Eloquent ORM
- SQLite configuration
- JavaScript, HTML, and CSS
- Composer, npm, and Vite
- Pest test setup

## Application flow

The app uses Laravel web routes to serve Blade pages. The add-book form submits to a controller, where the title is validated. Database-backed storage and the full route-to-model flow are still being developed.

## Getting started

### Requirements

- PHP 8.3 or later with the SQLite PDO extension
- Composer
- Node.js and npm

### Install and run

Clone the repository and enter the project folder:

```bash
git clone https://github.com/Vvderondont/Bookshelf.git
cd Bookshelf
```

Install the PHP and JavaScript dependencies, prepare the local environment, and build the assets:

```bash
composer run setup
```

Start the local development services:

```bash
composer run dev
```

The app is served locally by Laravel. Its database file and environment settings are local setup files and are not committed to this repository.

## Tests

Run the Laravel test suite with:

```bash
composer test
```

The repository currently contains the Laravel/Pest starter test setup; Bookshelf-specific test coverage is still to be added.

## Repository structure

```text
app/
  Http/Controllers/BookController.php
  Models/Book.php
database/
  migrations/
resources/views/books/
  create.blade.php
  index.blade.php
public/
  css/style.css
  scripts/app.js
routes/web.php
```

## Project status

This project is actively being developed as a learning project. Features and architecture may change as I build out database persistence and the complete book-management workflow.
