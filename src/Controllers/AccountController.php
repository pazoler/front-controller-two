<?php


namespace Ifmo\Web\Controllers;

use Ifmo\Web\Core\Controller;

class AccountController extends Controller
{
    public function regAction() {
        $content = 'account/registration.php';
        $data = [
            'page_title'=>'Зарегистрироваться'
        ];
        return $this->generateResponse($content, $data);
    }


}