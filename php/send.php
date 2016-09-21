<?php
/**
 * Created by PhpStorm.
 * User: artemdegtarev
 * Date: 21.09.16
 * Time: 13:14
 */

include_once '../settings.php';

global $CONN;


$session = $_POST['session'];
$text = htmlspecialchars($_POST['text']);
$sender = htmlspecialchars($_POST['sender']);

$sql = "INSERT INTO `chat_text`(`Session_ID`, `Sand_By`, `Chat_Text`) VALUES ('".$session."','".$sender."','".$text."')";
$result = $CONN->query($sql);
