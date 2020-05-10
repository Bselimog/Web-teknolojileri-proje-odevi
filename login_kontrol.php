<?php


$username = $_POST['id'];

$password = $_POST['pass'];

 

if($username and $password){

 

$db_username = "G191210086";

$db_password = "123";

 

if($db_username == $username and $db_password == $password){



header("location:Hakkında.html");

} else { echo "Kullanıcı adı veya parola yanlış.";

header("location:login.html");

}

 

} else {

header("location:login.html");

}
?>