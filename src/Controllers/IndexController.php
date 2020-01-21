<?php
namespace Ifmo\Web\Controllers;

use Ifmo\Web\Core\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $template = 'template.php';
        $content = 'main.php';
        $data = [
            'page_title'=>'Главная'
        ];
        echo $this->render_page($content,
            $template, $data);
    }
}