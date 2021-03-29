<?php

namespace Infra;

use PDO;
use Infra\Account;

class Database extends Account
{
    function getPDO()
    {
        return new PDO("mysql:dbname=dbmessage;host=localhost", $this->account, $this->password);
    }
}
