<?php
include_once 'config/system_cfg.php';
include_once 'showusrpwd-function.php';
 
if (isset($_POST['username'])) {
    $username = $_POST['username'];
	$mysqli = new mysqli(db_host, db_user, db_psw, db_base);
	
	echo getUsrPwd($username, $mysqli);
} else {
    // The correct POST variables were not sent to this page. 
	//print_r($_POST);
    echo 'null';
}