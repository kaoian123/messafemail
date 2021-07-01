<?php

namespace Src\Repository;

use Infra\Database;
use PDO;

class AccountRepositories
{
    var $db;

    function __construct()
    {
        $database = new Database();
        $this->db = $database->getPDO();
    }

    function create($account, $password)
    {
        $statement = $this->db->prepare("INSERT INTO useraccount (account, password) value (:account, :password)");
        $statement->bindParam(":account", $account);
        $statement->bindParam(":password", $password);

        $execute = $statement->execute();
        if (!$execute) {
            var_dump($statement->errorInfo());
        }
        return true;
    }

    function loginCheck($account, $password)
    {
        $statement = $this->db->prepare("SELECT account, password FROM useraccount WHERE account = :account and password = :password");
        $statement->bindParam(":account", $account);
        $statement->bindParam(":password", $password);

        if (!$statement->execute()) {
            var_dump($statement->errorInfo());
        }
        return $statement->fetch();
    }

    function createCheck($account){
        $statement = $this->db->prepare("SELECT account FROM useraccount WHERE account = :account");
        $statement->bindParam(":account", $account);

        if (!$statement->execute()) {
            var_dump($statement->errorInfo());
        }
        return $statement->fetch();
    }

    function get_password($account) {
        $statement = $this->db->prepare("SELECT password FROM useraccount WHERE account = :account");
        $statement->bindParam(":account", $account);

        if (!$statement->execute()) {
            var_dump($statement->errorInfo());
        }
        return $statement->fetch();
    }
}
