<?php

//insert_chat.php
session_start();
include('database_connection.php');
require_once('class.chatMessage.php');

/* $data = array(
	':to_user_id'		=>	$_POST['to_user_id'],
	':from_user_id'		=>	$_SESSION['user_id'],
	':chat_message'		=>	$_POST['chat_message'],
	':status'			=>	'1'
); */

$strDSN = "pgsql:dbname=datab;host=localhost;port=5432";
$objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root", array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo '<h1>A</h1>' . $_SESSION['user_id'];

$objChat = new ChatMessage($objPDO);

$objChat->setto_user_id($_POST['to_user_id'])->setfrom_user_id($_SESSION['user_id'])->setchat_message($_POST['chat_message'])->setstatus(1)->save();
/* $query = "
INSERT INTO chat_message 
(to_user_id, from_user_id, chat_message, status) 
VALUES (:to_user_id, :from_user_id, :chat_message, :status)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
	echo fetch_user_chat_history($_SESSION['user_id'], $_POST['to_user_id'], $connect);
}
*/
?>

