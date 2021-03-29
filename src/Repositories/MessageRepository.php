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

    function getMessage(){
        $query = $this->db->query("SELECT ID, Title, name, content FROM `allmessages`");
        return $query->fetchAll();
    }

    function create($Title,$name,$content){
        $statement = $this->db->prepare("INSERT INTO allmessages (title, name, content) value (:title, :name, :content)");
        $statement->bindParam(":title", $Title);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":content", $content);

        $execute = $statement->execute();
        if(!$execute){
            var_dump($statement->errorInfo());
        }
        return true;

    }

    function delete($id){
        $statement = $this->db->prepare("DELETE FROM allmessages WHERE `ID` = :id");
        $statement->bindParam(":id", $id);

        $execute = $statement->execute();
        if(!$execute){
            var_dump($statement->errorInfo());
        }
        return true;

    }

    function getUpdataMessage($id){
        $statement = $this->db->prepare("SELECT ID,Title,name,content FROM allmessages WHERE `ID` = :id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        return $statement->fetch();

    }

    function updata($id, $Title, $name, $content){
        $statement = $this->db->prepare("UPDATE allmessages SET title = :title, name = :name, content = :content WHERE id = :id");
        $statement->bindParam(":id", $id);
        $statement->bindParam(":title", $Title);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":content", $content);

        $execute = $statement->execute();
        if (!$execute) {
            var_dump($statement->errorInfo());
        }
        return true;

    }
}