<?php
  session_start(); 
?>

<html>
<head>
<title>SMC CS| Student Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../css/dash_categories.css">

<!-- icons courtesy -->
<!-- Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="m1">
<header>
<div class="container">
 <div class="row">
  <div class="brand-name">
      <a href="" class="logo"><img id="i2" src="../images/logo.jpg" width="150px" height="50px" ></a>
  </div>
  <div class="navbar">
     <ul>
	    <li> <?php if (isset($_SESSION['userId'])) {echo $_SESSION['userUsername'];} ?> </li>
    <li>  <?php if (isset($_SESSION['userId'])) {echo $_SESSION['userUsertype'];} ?></li>
    <div class="dropdown">
              <button class="dropbtn"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
              <div class="dropdown-content">
                 <form action="../includes/logout.inc.php" method="post" style="padding-left:25%;">
                  <button type="submit" name="logout-submit"  class="button" >Logout</button>
                </form>          
              </div>
          </div>
	 </ul>
  </div>
 </div> 
</div>
</header>

<div class="main-container">
      <div class="side-navbar">
        <ul>
          
        <li><a href="dash_board.php">Resources</a></li>
        <li><a href="dash_updateinfo.php">Student Account</a></li>
          
         
        </ul>
      </div>
      
    <div class="workspace">

        <div class="tb-contents">
        <?php
          $con=mysqli_connect('localhost','root','','loginsystem');
          if (isset($_SESSION['userId'])) {
              $u_id= $_SESSION['userId'];
              $u_name= $_SESSION['userUsername'];
              $u_type= $_SESSION['userUsertype']; 
            

          $show="select * from users where idUsers='$u_id' and uidUsers='$u_name' and idUsertype='$u_type' ";
          $result=mysqli_query($con,$show);
          
          while($rows=mysqli_fetch_array($result))
          {
              $user_id=$rows['idUsers'];
              $user_name=$rows['uidUsers'];
              $user_type=$rows['idUsertype'];
              $user_first=$rows['idFirst'];
              $user_last=$rows['idLast'];
              $user_email=$rows['emailUsers'];
        
        ?>
        <h2 class="userinfo-title">STUDENT PROFILE</h2>
            <table id="userinfo">
                <tr>
                    <th>First Name</th>
                    <td><?php echo "$user_first"; ?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?php echo "$user_last"; ?></td>
                    
                </tr>
                <tr>
                    <th>Email ID</th>
                    <td><?php echo "$user_email"; ?></td>
                    
                </tr>
                 <?php 
                    }
                }
                 ?>
            
            </table>
        </div>


      <a href="dash_board.php"> <div class="back-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></i></div></a>
    </div>
 
      
    
</div>
<?php include('../footer.php');  ?>
</body>
</html>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>