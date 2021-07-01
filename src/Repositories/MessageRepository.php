<?php

namespace App\Repositories;

use Infra\Database;

class MessageRepository
{
    var $db;
    
    function __construct()
    {   
        $database = new Database();
        $this->db = $database->getPDO();
    }

    function createCheck($account)
    {
        $statement = $this->db->prepare("SELECT account FROM useraccount WHERE account = :account");
        $statement->bindParam(":account", $account);

        if (!$statement->execute()) {
            var_dump($statement->errorInfo());
        }
        return $statement->fetch();
    }

    function create($receiver, $Title, $content, $name){
        $statement = $this->db->prepare("INSERT INTO allmessages (receiver, title, content, name) value (:receiver, :title, :content, :name)");
        $statement->bindParam(":receiver", $receiver);
        $statement->bindParam(":title", $Title);
        $statement->bindParam(":content", $content);
        $statement->bindParam(":name", $name);

        $execute = $statement->execute();
        if(!$execute){
            var_dump($statement->errorInfo());
        }
        return true;

    }

    function getTitle($account) {
        $statement = $this->db->prepare("SELECT ID, Title, name  FROM allmessages WHERE receiver = :account");
        $statement->bindParam(":account", $account);

        if (!$statement->execute()) {
            var_dump($statement->errorInfo());
        }
        return $statement->fetchAll();
    }

    // function getMessage()
    // {
    //     $query = $this->db->query("SELECT ID, Title, name, content FROM `allmessages`");
    //     return $query->fetchAll();
    // }

    // function delete($id){
    //     $statement = $this->db->prepare("DELETE FROM allmessages WHERE `ID` = :id");
    //     $statement->bindParam(":id", $id);

    //     $execute = $statement->execute();
    //     if(!$execute){
    //         var_dump($statement->errorInfo());
    //     }
    //     return true;

    // }

    function getMessage($id){
        $statement = $this->db->prepare("SELECT Title, content, name FROM allmessages WHERE `ID` = :id");
        $statement->bindParam(":id", $id);

        $execute = $statement->execute();
        if (!$execute) {
            var_dump($statement->errorInfo());
        }
        return $statement->fetch();

    }

    // function updata($id, $Title, $name, $content){
    //     $statement = $this->db->prepare("UPDATE allmessages SET title = :title, name = :name, content = :content WHERE id = :id");
    //     $statement->bindParam(":id", $id);
    //     $statement->bindParam(":title", $Title);
    //     $statement->bindParam(":name", $name);
    //     $statement->bindParam(":content", $content);

    //     $execute = $statement->execute();
        
    //     if (!$execute) {
    //         var_dump($statement->errorInfo());
    //     }
    //     return true;

    // }
}