<?php
require('vendor/autoload.php');

use Sc\Webproject\App;
use Sc\Webproject\Book;

// create an app object based on App class
$app = new App();

$title = "Home Page";
$message = "Hello there";
if( empty($_SESSION["username"])) {
    $user = null;
}
else {
    $user = $_SESSION["username"];
}

// create an instance of the book class
$cls_book = new Book();
$books = $cls_book -> getBooks();
// check if we have book data
//print_r($books);

// create a template loader
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment( $loader );
// load the template into memory
$template = $twig -> load('index.html.twig');
// add some variables for twig to render
echo $template -> render([
    'title' => $title,
    'message' => $message,
    'books' => $books,
    'user' => $user
]);
?>