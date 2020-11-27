<?php
  session_start(); 
?>


<html>
<head>
<title>SMC CS| Staff Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../css/dash_categories.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

video::-webkit-media-controls-fullscreen-button {
   margin-right: -48px;
   z-index: 10;
   position: relative;
   background: #dddddd;
   /* background-image: url(https://image.flaticon.com/icons/svg/151/151926.svg); */
   background-size: 35%;
   background-position: 50% 50%;
   background-repeat: no-repeat;
}
</style>
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
	    <li>  <?php if (isset($_SESSION['userId'])) {echo $_SESSION['userUsername'];} ?></li>
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
        <li><a href="staff_dashboard.php">My Account</a></li>
          <li><a href="staff_upload.php">Upload files</a></li>
          <li><a href="video.php">My uploads</a></li>
          
        
        </ul>
      </div>
      <div class="workspace">
        
              <?php
               include('../includes/db.php');
               if(isset($_GET['id'])){
	                  $id=$_GET['id'];
	
	           $sql="select * from video where id='$id'";
             $res=mysqli_query($con,$sql);        
             $row=mysqli_fetch_assoc($res);
             
             $name=$row['name']; 
             $owner_name=$row['owner_name'];
             $user_type=$row['owner_type'];              
             $file_type=$row['file_type']; 
             $subject_name=$row['subject_name']; 
             $keyone=$row['keyword_one'];
             $keytwo=$row['keyword_two'];
	           
              ?>
      
        <video width="615" height="315" controls style="margin:25px 0 0 25px">
        <source src="../videos/<?php echo $name; ?>"type="video/mp4">

        </video>
        <?php

            echo "
            <div class='file-details'>
              <div class='colone'>
                <p><b>File name:</b> &nbsp;&nbsp;$name&nbsp;&nbsp;</p>
                <p><b>Posted by:</b>&nbsp;&nbsp;$owner_name</p>
                <p><b>User type:</b>&nbsp;&nbsp;$user_type</p>
              </div>
              <div class='coltwo'>
                <p><b>File type:</b> &nbsp;&nbsp;$file_type&nbsp;&nbsp;</p>
                <p><b>Subject name:</b>&nbsp;&nbsp;$subject_name</p>
                <p><b>Keywords:</b>&nbsp;&nbsp;$keyone,&nbsp;$keytwo</p>
              </div>
            </div>

            ";
          }
        ?>
        <a href="staff_dashboard.php"> <div class="back-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></i></div></a>
    </div>
</div>

</body>
</html>



