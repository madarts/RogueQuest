<?php

function createExist($value, $campo){
	$exist = false;

	$queEmp = "SELECT * FROM user WHERE $campo = '". $value ."';";
	$resEmp = mysql_query($queEmp) or die(mysql_error());
	$totEmp = mysql_num_rows($resEmp);

	if($totEmp != 0) $exist = true;

	return $exist;
}

function userCreate($user, $pass, $email){
	$queEmp = "INSERT INTO user (user, pass, email) VALUES ('". $user ."', '". $pass ."', '". $email ."');";
	mysql_query($queEmp) or die(mysql_error());
}

function userValidate($user, $pass){
	$exist = false;

	$queEmp = "SELECT * FROM user WHERE user = '". $user ."' AND pass = '". $pass ."';";
	$resEmp = mysql_query($queEmp) or die(mysql_error());
	$totEmp = mysql_num_rows($resEmp);

	if($totEmp != 0) $exist = true;

	return $exist;
}

function register(){
	$user = "";
	if(isset($_POST['txtName'])) $user = $_POST['txtName'];
	$pass = "";
	if(isset($_POST['txtPassword'])) $pass = $_POST['txtPassword'];
	$email = "";
	if(isset($_POST['txtEmail'])) $email = $_POST['txtEmail'];

	if(createExist($user, 'user') OR createExist($email, 'email') OR $user == "" OR $pass == "" OR $email == "")
		echo "<span style='color: red;'>Error 001</span>";
	else
		userCreate($user, $pass, $email);
}

function login(){
	$user = "";
	if(isset($_POST['txtName']))
		$user = $_POST['txtName'];
	$pass = "";
	if(isset($_POST['txtPassword']))
		$pass = $_POST['txtPassword'];

	if(userValidate($user, $pass)){
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;
		
		echo "<script>window.location='./'</script>";
	}
	else
		echo "<span style='color: red;'>Error 002: login incorrecto</span>";
}


function validate($user, $pass){
	$exist = false;

	$queEmp = "SELECT * FROM user WHERE user = '". $user ."' AND pass = '". $pass ."';";
	$resEmp = mysql_query($queEmp) or die(mysql_error());
	$totEmp = mysql_num_rows($resEmp);

	if($totEmp != 0) $exist = true;
	
	return $exist;
}

function unlogin(){
	if(isset($_SESSION['user']))
		unset($_SESSION['user']);
	if(isset($_SESSION['pass']))
		unset($_SESSION['pass']);
	
	echo "<script>window.location='./'</script>";
}

function controlValidacion(){
    $user = "";
	if(isset($_SESSION['user']))
		$user = $_SESSION['user'];
    $pass = "";
	if(isset($_SESSION['pass']))
		$pass = $_SESSION['pass'];
	
    if(!validate($user, $pass) AND $user != "" AND $pass != ""){
        unlogin();
    }
}

if(isset($_GET['opt']))
	switch($_GET['opt']){
		case "register": register(); break;
		case "login": login(); break;
		
		case "unlogin": unlogin(); break;
	}

?>