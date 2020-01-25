<?php
namespace Ifmo\Web\Controllers;

use Ifmo\Web\Core\Controller;
use Ifmo\Web\Core\DBConnection;
use Ifmo\Web\Core\Request;
use Ifmo\Web\Models\BooksModel;

class ArticleController extends Controller
{
    private $books_model;
    private $db_connection;
    public function __construct()
    {
        $this->db_connection =
            DBConnection::getInstance();
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

    public function addAction(Request $request){
        $data = $request->post();
        $sql = "INSERT INTO article (title, article_text, user_iduser)
 VALUES ( :title, :text, :user_iduser)";
        $params = [
            "title" => $data['title'],
            "text" => $data['text'],
            "user_iduser" => 1
        ];
        $this->db_connection->executeSql($sql, $params);
        header('Location:/account');
    }
}


