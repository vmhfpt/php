<?php
 require_once ('database.php');
 
class User extends Database{
    public function Find($key){
       $sql = $this->connection->prepare("SELECT * FROM `users` WHERE `username` LIKE '%".$key."%' ");
       $sql->execute();
       $items = array();
       $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
       return $items;
    }


    public function Login($username, $password){
        $sql = $this->connection->prepare("SELECT * FROM `users` WHERE `username` = ? AND `password` = ?");
        
        $sql->bind_param("ss",  $username, $password);
       
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function GetOne( $column, $value)
    {
        $sql = $this->connection->prepare("SELECT * FROM `users` WHERE $column = ? LIMIT 1");
        $sql->bind_param("s",  $value);
        $sql->execute(); 
        $data = $sql->get_result()->fetch_object();
        return ($data);
    }


    public function Where($column, $value)
    {
        $sql = $this->connection->prepare("SELECT * FROM `users` WHERE $column = ?");
        
        $sql->bind_param("s",  $value);
       
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    public function GetAll()
    {
        $sql = $this->connection->prepare("SELECT * FROM `users`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    
    
    public function Insert($username, $email, $password)
    {
        $sql = $this->connection->prepare("INSERT INTO `users` ( `username`, `email`, `password`) VALUES ( ?, ?, ?)");
        $sql->bind_param("sss", $username, $email, $password);
        $sql->execute();
    }

    public function Destroy($id)
    {
        $sql = $this->connection->prepare("DELETE  FROM `users` WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }

    public function Update($id, $username, $email, $password)
    {
        $sql = $this->connection->prepare("UPDATE `users` SET `username` = ?, `email` = ?, `password` = ? WHERE `users`.`id` = ?");
        $sql->bind_param("sssi", $username, $email, $password, $id);
        $sql->execute();
    }

}
