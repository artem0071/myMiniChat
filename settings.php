<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 21.09.16
 * Time: 12:32
 */

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'chat');
define('SALT', '1234');

//подключение к БД
$CONN = new mysqli(HOST, USER, PASS, DB);
if ($CONN->connect_errno) exit("Нет подключения к БД");
$CONN->set_charset("utf8");