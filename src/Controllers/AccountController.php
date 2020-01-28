<?php


namespace Ifmo\Web\Controllers;

use Ifmo\Web\Core\Controller;
use Ifmo\Web\Core\Request;
use Ifmo\Web\Models\AccountModel;

class AccountController extends Controller
{
    private $account_model;
    public function __construct()
    {
        $this->account_model = new AccountModel();
    }

    public function regAction() {
        $content = 'account/registration.php';
        $data = [
            'page_title'=>'Зарегистрироваться'
        ];
        return $this->generateResponse($content, $data);
    }

    public function accountAction(){
        $content = 'account/account.php';
        $data = [
            'page_title'=>'Личный кабинет'
        ];
        return $this->generateResponse($content, $data);
    }

    public function addUser(Request $request){
        $result = $this->account_model
            ->addUser($request->post());
        $content = 'account/registration.php';
        $data = [
            'page_title'=>'Зарегистрироваться',
            'result' => $result
        ];
        return $this->generateResponse($content, $data);
    }
    public function login(Request $request) {
        $formData = $request->post();
        $result = $this->account_model->authorisation($formData);
        return $this->ajaxResponse($result);
    }

}