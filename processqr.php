<?php

require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])) {    
}
//http://localhost/UserSpice53/processqr.php?data=C2FDACC7B252104582A20C6F3F8161B9E6CC3BE631E9495D1474F9041EF04395
$result = $_GET['data'];
//echo $result;
//echo "<br>";
$db_qr = DB::getInstance();
//$db_storeID = $db_qr->query("SELECT storeID from store_user where userID=".$user->data()->id); 
//dump($storeID->first());
//$storeID=$db_storeID->first()->storeID;
//$storeID=$db_storeID->results()[1]->storeID;

//$db_tmp_qr = $db_qr->query("SELECT codehash from generate_qr where storeid=".$storeID);
$db_qr_storeid = $db_qr->query("SELECT storeid from generate_qr where codehash='".$result."'");
//$tmp_qr=$db_tmp_qr->first()->codehash;
//print_r($tmp_qr);
$storeID = $db_qr_storeid->first()->storeid;
$fields = array(
	'userID'  => $user->data()->id,
	'storeID' => $storeID
);
/*
if($result==$tmp_qr){
	$db_qr->insert('user_loc',$fields);

}*/
if($db_qr_storeid->first()->storeid){
	$db_qr->insert('user_loc',$fields);
}
//print_r($db_sddsd->first()) ;
//header("Location: readqr/index.php");
$db_last_users = $db_qr->query("SELECT lname,time_in FROM users 
INNER JOIN user_loc 
ON users.id = user_loc.userID 
ORDER BY user_loc.time_in DESC LIMIT 1");
$last_users = $db_last_users->results();
foreach($last_users as $desc_user){
	//print_r($desc_user->lname);
	echo "<p align='center'>". $desc_user->lname." kullanici adi ile ".$storeID." nolu magazaya giris saatiniz ".$desc_user->time_in." olarak kayda gecmistir.</p>";
}
	//echo "<p align='center'>". $user." login detected on store ".$storeID."</p>";



?>

