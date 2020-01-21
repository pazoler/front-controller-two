<?php
namespace Ifmo\Web\Controllers;

use Ifmo\Web\Core\Controller;
use Ifmo\Web\Models\BooksModel;

class BooksController extends Controller
{
    private $books_model;
    public function __construct()
    {
        $this->books_model = new BooksModel();
    }
    // /books
    // имя_контроллера/имя_метода
    // -> BooksController :: indexAction
    public function indexAction(){
        $template = 'template.php';
        $content = 'books.php';
        $books = $this->books_model->getAllBooks();
        $data = [
            'page_title'=>'Книги',
            'all_books'=>$books,
        ];

        echo $this->render_page($content,
            $template, $data);
    }
//    $param = 2;
//    $controller = new BooksController();
//    $controller->showAction($param);
    public function showAction($id) {
        $template= 'template.php';
        $content = 'book.php';
        $book = $this->books_model->getById($id);
        $data = [
            'page_title' => $book['title'],
            'book'=>$book
        ];
        echo $this->render_page($content,
            $template, $data);
    }
}

// инициализация пакета - composer init
