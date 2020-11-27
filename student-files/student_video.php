<?php
  session_start(); 
?>
<html>
<head>
<title>SMC CS |Student Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../css/dashboard.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="brand-name">
          <a href="" class="logo"><img id="i2" src="../images/logo.jpg" width="150px" height="50px" ></a>
        </div>
        <div class="navbar">
          <ul>
	          <li>  <?php if (isset($_SESSION['userId'])) {echo $_SESSION['userUsername'];} ?> </li>
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
          <?php
          //search bar
          if (isset($_SESSION['userId'])) 
          {
            $owner_id = $_SESSION['userId'];
            $owner_name = $_SESSION['userUsername'];
            $owner_type = $_SESSION['userUsertype'];
            
          } 
          
          include('includes/db.php');
          $sql="select * from video where owner_id='$owner_id' and owner_name='$owner_name'";
          $res=mysqli_query($con,$sql);

          echo "<div>My Uploads</div>";
         echo "<div class='gallery'>";
          while($row=mysqli_fetch_assoc($res))
          {
            $id=$row['id'];
            $name=$row['name'];
            $owner_name=$row['owner_name'];
            
            
            echo "
            <div class='card'>
              <center><img src='images/video.svg' alt='Avatar' style='width:30%;'></center>
                <center>
                  <div class='card-container'>
                    <h4><b>".$owner_name."</b></h4>                 
                    <a href='student_watch.php?id=$id'>".$name. "</a>
                  </div>
               </center>
            </div>";
          }
            
          ?>
        </div>

        <a href="dashboard_videos.php"> <div class="back-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></i></div></a>
  </div>
  <?php include('../footer.php');  ?>
</body>
</html>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
