<?php

namespace smdb;

class Model extends Illuminate\Database\Capsule\Manager
{
    public function __construct()
    {
        parent::__construct();
        if (!file_exists(ROOT.'config/database.php')) {
            exit('数据库配置文件不存在!');
        }
        $database = include ROOT.'config/database.php';
        $this->addConnection($database);
    }
}
