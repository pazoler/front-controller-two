<?php
namespace Ifmo\Web\Controllers;

use Ifmo\Web\Core\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $content = 'main.php';
        $data = [
            'page_title'=>'Главная'
        ];
        return $this->generateResponse($content, $data);
    }
}