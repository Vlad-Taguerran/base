<?php


namespace App\Model;


class Admin extends \Core\Model\Model
{
private $id;
private $token;
private $nome;
private $email;
private $senha;



    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }
    public function __get($attr)
    {
       return $this->$attr;
    }

//Rotina de Usuario

    public function save_user()
    {
        $query  =   "INSET INTO tb_users nome,email,senha VAlUES (:nome,:email,:senha";
        $stmt   =   $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->__get('nome'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', MD5($this->__get('senha')));

        $stmt->execute();
    }

    public function Update_user()
    {
        $query  =   "UPDATE tb_users SET   senha = :senha WHERE token = :token";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue('id', $this->__get('id'));
        $stmt->bindValue('senha', $this->__get('senha'));
        $stmt->bindValue(':token',$this->_get('token'));

        $stmt->execute();

    }

    public function delete_user()
    {
        $query = "DELETE FROM tb_users WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

}