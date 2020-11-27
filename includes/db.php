<?php
$con = mysqli_connect('localhost','root','','vuad');

if(!$con)
{
    die('Connection failed: '.mysqli_connect_error());
    echo 'not connected';
}
// else{
//     echo 'database connected';
// }
?>