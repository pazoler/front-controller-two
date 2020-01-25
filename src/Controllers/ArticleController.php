<?php
namespace Ifmo\Web\Controllers;

use Ifmo\Web\Core\Controller;
use Ifmo\Web\Core\Request;
use Ifmo\Web\Models\BooksModel;

class ArticleController extends Controller
{
    private $books_model;
    public function __construct()
    {
//        $this->books_model = new BooksModel();
    }


    public function indexAction(){
        $content = 'articles/articles.php';
//        $books = $this->books_model->getAllBooks();
        $data = [
            'page_title'=>'Книги',
//            'all_books'=>$books,
        ];

        return $this->generateResponse($content, $data);
    }

    public function showAction(Request $request) {
        $id = $request->params()['id'];
        $content = 'articles/article.php';
//        $book = $this->books_model->getById($id);
        $data = [
//            'page_title' => $book['title'],
//            'book'=>$book
        ];
        return $this->generateResponse($content, $data);
    }
}

// инициализация пакета - composer init
