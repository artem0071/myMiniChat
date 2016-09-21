<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 21.09.16
 * Time: 9:05
 */

include_once '../settings.php';

global $CONN;


$session = $_POST['session'];

$sql = "SELECT * FROM `chat_text` WHERE `Session_ID` = '".$session."'";
$result = $CONN->query($sql);

$arr = array();

while ($row = $result->fetch_assoc()){
    $arr[] = $row;
}
echo json_encode($arr);
