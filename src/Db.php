<?php

namespace smdb;

class Db
{
    public $conn;

    public function __construct()
    {
        if (!file_exists(ROOT.'config/database.php')) {
            exit('数据库配置文件不存在!');
        }
        $database = include ROOT.'config/database.php';
        $config = new \Doctrine\DBAL\Configuration();
        $conn = \Doctrine\DBAL\DriverManager::getConnection($database, $config);
        $this->conn = $conn->createQueryBuilder();
    }
}
