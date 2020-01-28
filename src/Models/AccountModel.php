<?php


namespace Ifmo\Web\Models;

use Ifmo\Web\Core\DBConnection;

class AccountModel
{
    private $db;
    public function __construct()
    {
        $this->db = DBConnection::getInstance();
    }

    public function addUser(array $user_data){
        // проверка уникальности логина
        // password_hash();
        // добавление в таблицу user

        // добавление контактной информации
        //  в таблицу user_info
        $login = $user_data['login'];
        if ($this->isUser($login)) return;
        $pwd = $user_data['password'];
        $pwd = password_hash($pwd,
            PASSWORD_DEFAULT);
        $user_sql = "INSERT INTO user (login, pwd)
VALUES (:login, :pwd)";

        $user_info_sql = "INSERT INTO user_info
(address, phone, user_iduser) VALUES (:address, :phone, :user_id)";
        try{
            // начало транзакции
            $this->db->getConnection()
                ->beginTransaction();
            $user_params = [
                'login' => $login,
                'pwd'=>$pwd
            ];
            $info_params = [
                'address'=>$user_data['address'],
                'phone'=>$user_data['phone'],
                'user_id'=> $this->db->getConnection()
                    ->lastInsertId()
            ];
            $this->db->executeSql($user_sql, $user_params);
            $this->db->executeSql($user_info_sql,
                $info_params);

            // подтверждение транзакции
            $this->db->getConnection()->commit();
        } catch (Exception $e) { // Обработка ошибки
//           // откат транзакции
            $this->db->getConnection()->rollBack();

        }
    }

    private function isUser(string $login){
        $sql = 'SELECT * FROM user WHERE login = :login';
        $user = $this->db->execute($sql,
            ['login'=>$login], false);
        return (bool)$user;
    }
}