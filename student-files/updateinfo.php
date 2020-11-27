<?php 

    $conn  = mysqli_connect('localhost','root','','loginsystem');
    $i=$_GET['id'];
    $f=$_GET['first'];
     // gets the ID - testing
     echo "$i";
    echo "$f";
    

    // $sql = "UPDATE TABLE users SET idFirst where idUsers='$usid'";

    // $result=mysqli_query($conn,$sql);
    // if($result==1){
    //     echo 'User records deleted successfully!'; 
    //     echo "<p><img src='../images/tick.svg' width='5%;'></p>";
    //     echo "<p><a href='admin_removeaccount.php'>Take me back!</a></p>";
        
    // }
    // else{
    //     echo 'Query failed. Try again!';
    //     echo "<p><img src='../images/error.svg' width='5%;'></p>";
    //     echo "<p><a href='admin_removeaccount.php'>Take me back!</a></p>";
    // }
    
?>
