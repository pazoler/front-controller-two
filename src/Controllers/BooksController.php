<?php
namespace Ifmo\Web\Controllers;

use Ifmo\Web\Core\Controller;
use Ifmo\Web\Core\Request;
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
        $content = 'books.php';
        $books = $this->books_model->getAllBooks();
        $data = [
            'page_title'=>'Книги',
            'all_books'=>$books,
        ];

        return $this->generateResponse($content, $data);
    }
//    $param = 2;
//    $controller = new BooksController();
//    $controller->showAction($param);
    public function showAction(Request $request) {
        $id = $request->params()['id'];
        $content = 'book.php';
        $book = $this->books_model->getById($id);
        $data = [
            'page_title' => $book['title'],
            'book'=>$book
        ];
        return $this->generateResponse($content, $data);
    }
}

// инициализация пакета - composer init
