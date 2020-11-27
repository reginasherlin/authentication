<?php
  session_start(); 
?>

<html>
<head>
<title>SMC CS |Staff Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../css/dash_categories.css">

<!-- icons courtesy -->
<!-- Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->

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
	          <li> <?php if (isset($_SESSION['userId'])) {echo $_SESSION['userUsername'];} ?> </li>
            <li> <?php if (isset($_SESSION['userId'])) {echo $_SESSION['userUsertype'];} ?></li>
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
      <div class="gallery">
        <div class="card">
          <a href="staff_dashboard-videos.php">
            <center><img src="../images/video.svg" alt="video" style="width:30%" class="videos"></center>
            <center>
              <div class="card-container">
                <h4><b>Videos</b></h4>                 
                <p>Search videos</p> 
              </div>
            </center>
          </a>
        </div>

        <div class="card">
          <a href="staff_dashboard-videos.php">
            <center><img src="../images/pdf-icon.svg" alt="pdf" style="width:30%" class="videos"></center>
            <center>
              <div class="card-container">
                <h4><b>PDFs</b></h4> 
                <p>Search for PDFs</p> 
              </div>
            </center>
          </a>
         </div>

         <div class="card">
            <a href="staff_dashboard-videos.php">
              <center><img src="../images/ppt-icon.svg" alt="Avatar" style="width:30%" class="videos"></center>
              <center>
                  <div class="card-container">
                    <h4><b>PPTs</b></h4> 
                    <p>Search for PPTs</p> 
                  </div>
               </center>
            </a>
         </div>

         <div class="card">
          <a href="staff_dashboard-videos.php">
            <center><img src="../images/image-icon.svg" alt="img-icon" style="width:30%" class="videos"></center>
            <center>
              <div class="card-container">
                <h4><b>Images</b></h4> 
                <p>Search by Images</p> 
              </div>
            </center>
         </a>
         </div>

         <div class="card">
          <a href="staff_dashboard-videos.php">
            <center><img src="../images/gallery.svg" alt="gallery" style="width:30%" class="videos"></center>
            <center>
              <div class="card-container">
                <h4><b>Excel Sheets</b></h4> 
                <p>Search by excel files</p> 
              </div>
            </center>
         </a>
         </div>

         <div class="card">
            <a href="staff_dashboard-videos.php">
              <center><img src="../images/docs-icon.svg" alt="docs" style="width:30%" class="videos"></center>
              <center>
                <div class="card-container">
                  <h4><b>Word Documents</b></h4> 
                  <p>Search for docs</p> 
                </div>
              </center>
            </a>
          </div>
        </div>

        
    </div> 
</div>
<?php include('../footer.php'); ?>

</body>
</html>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>