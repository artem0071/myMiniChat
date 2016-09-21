<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 21.09.16
 * Time: 12:30
 */
include_once '../settings.php';

global $CONN;

$sql = "SELECT MAX(`Session_ID`) FROM `sessions`";
$result = $CONN->query($sql);

$row = $result->fetch_row();

$id = $row[0] + 1;

echo $id;