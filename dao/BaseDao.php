<?php

class BaseDao
{

    protected $db;

    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . '/../env');
        $this->db = new PDO("mysql:dbname={$env['db_name']};host={$env['db_host']};port={$env['db_port']}", $env['db_username'], $env['db_password']);
    }

}
