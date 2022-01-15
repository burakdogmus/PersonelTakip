<?php
require_once 'users/init.php';
$q = htmlspecialchars($_GET['q']);
$colName = htmlspecialchars($_GET['col']);
$rid = intval($_GET['rid']);


$db_qr = DB::getInstance();
//$db_qr->query("UPDATE user_shift SET ".$colName."=".$q." WHERE id=".$rid);
$db_qr->update("user_shift",$rid,[$colName=>$q]);

?>

