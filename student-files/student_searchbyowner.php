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
      <div class="dash-search-pane">
          <!-- <div class="title">Dashboard</div> -->
          <div class="search-bar">
            <i class="fa fa-search" aria-hidden="true"></i>
            <div class="form">
              <form action="student_searchbyowner.php" method="post">
                <input type="text" name="search" class="search-input">
                <input type="submit" name="submit" value="search" class="search-submit">
              </form>
            </div>
          </div>
          

       </div>
<!--         
        <div class="form">
          <form action="student_searchbyowner.php" method="post">
            <input type="text" name="search" class="search"/>
            <input type="submit" name="submit" class="submit" value="Search" />
          </form>
        </div>  
       -->
        <?php
        $con=mysqli_connect('localhost','root','','vuad');
        if(isset($_POST["search"]))
        {
          $set= $_POST["search"];	
          $show="select * from video where search_name = '$set' or owner_name='$set'";
          $result=mysqli_query($con,$show);
        ?>	
          <!-- <table border=1>

            <tr>
            <th>STAFF NAME</th>
            <th>VIDEO NAME</th>
            <th>SUBJECT NAME</th>
            <th>VIDEO LINK</th>
            </tr> -->
            <div class="panel">
              <div class="inner-panel">

        <?php
          while($rows=mysqli_fetch_array($result))
          {
            $id=$rows['id'];
            $name=$rows['name'];
            $owner_name=$rows['owner_name'];
        ?>
          
            <div class="panel-card">
            <?php echo "<a href='student_watch.php?id=$id'>"; ?>
              <center><img src="../images/ux-tut.jpg" alt=""></center>
              <div class="view-corner">18k</div>
              <div class="panel-card-container">
              <p class="video-name"><?php echo $rows['name']; ?></p>
                <p class="owner-name"><?php echo $rows['owner_name']; ?></p>
                <div class="subject-name"><?php echo $rows['subject_name']; ?></div>
                <?php echo"</a>"; ?>
              </div>
            </div>
             

<!-- 
            <tr>
            <td><?php echo $rows['subject_name']; ?></td>
            <td><?php echo $rows['owner_name']; ?></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php  echo "<a href='student_watch.php?id=$id'>".$name."</a>"; ?></td>
            </tr> -->
        <?php 
         }

        }
        else{
          
          echo "<p class='no-results'>No results found</p>";
          
        }
        ?>
        <!-- </table> -->
        
        <!--       //for innerpanel -->
        </div>
        <!--    //for panel -->
        </div>

        

      </div>

      <a href="dashboard_videos.php"> <div class="back-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></i></div></a>
    <!-- </div> -->
  </div>    
  
  <?php include('../footer.php');  ?>
</body>
</html>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>