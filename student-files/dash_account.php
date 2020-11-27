<?php
  session_start(); 
?>

<html>
<head>
<title>SMC CS| Student Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../css/dash_account.css">

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
       <!-- <img src="../images/down-arrow.svg" alt="down-arrow" style="color:white" class="logout-list-item"> -->
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
        
          <!-- <li><a href="video.php">My uploads</a></li> -->
         
        </ul>
      </div>
      
    <div class="workspace">
      <div class="main-view-pane">
        <div class="dash-search-pane">
          <!-- <div class="title">Dashboard</div> -->
          <div class="search-bar">
            <i class="fa fa-search" aria-hidden="true"></i>
            <div class="form">
              <form action="student_searchbyowner.php" method="post">
                <input type="text" name="searchtext" class="search-input">
                <input type="submit" name="searchbtn" value="search" class="search-submit">
              </form>
            </div>
          </div>
        </div>
          
        <!-- <div class="most-popular-upload-pane">
          <div class="upload-heading">Most Popular Uploads</div>
          <div class="video-gallery">
            <div class="gallery-card">
              <a href="#">
              <center><img src="../images/ux-tut.jpg" alt=""></center> 
              <div class="subject-name">UI-UX Design</div>
              <div class="view-corner">18k</div>
               <div class="gallery-card-container">
               <p class="video-name">Learn MongoDB with an extensive course programme</p> 
                  <div id="Progress">
                    <div id="ProgressBar">80%</div>
                  </div>
              </div>
              
              </a>
            </div>

            <div class="gallery-card">
              <a href="#">
              <center><img src="../images/js-tuts.jpg" alt=""></center> 
              <div class="subject-name">UI-UX Design</div>
              <div class="view-corner">18k</div>
               <div class="gallery-card-container">
               <p class="video-name">Learn MongoDB with an extensive course programme</p> 
                  <div id="Progress2">
                    <div id="ProgressBar2">80%</div>
                  </div>
              </div>
              
              </a>
            </div>

            <div class="gallery-card">
              <a href="#">
              <center><img src="../images/react-ui.jpg" alt=""></center> 
              <div class="subject-name">UI-UX Design</div>
              <div class="view-corner">18k</div>
               <div class="gallery-card-container">
               <p class="video-name">Learn MongoDB with an extensive course programme</p> 
                  <div id="Progress3">
                    <div id="ProgressBar3">80%</div>
                  </div>
              </div>
              
              </a>
            </div>

            <div class="gallery-card">
              <a href="#">
              <center><img src="../images/mongo.jpg" alt=""></center> 
              <div class="subject-name">UI-UX Design</div>
              <div class="view-corner">18k</div>
               <div class="gallery-card-container">
                <p class="video-name">Learn MongoDB with an extensive course programme</p> 
                  <div id="Progress4">
                    <div id="ProgressBar4">80%</div>
                  </div>
              </div>
              </a>
            </div>
          </div>
        </div> -->

        <!-- <div class="recent-upload-pane">
            <div class="upload-heading">Recent Uploads</div>
            <div class="recent-uploads">
              <div class="col-one">
                <div class="recent-upload-img">
                  <img src="../images/ux-tut.jpg" alt="just">
                </div>
                <div class="small-tab">
                  <p class="file-name">file</p>
                  <p class="owner-name">Joan</p>
                  <p class="sub-name">Subject Name</p>
                  <p class="category">Category</p> 
                </div>
              </div>              
            </div>
          </div> -->


      </div>
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

// function loadProgressBars()
// {
//   move();
//   pro2();
//   pro3();
//   pro4();
// }

// //progress bar script
// var i = 0;
// function move() {
//   if (i == 0) {
//     i = 1;
//     var elem = document.getElementById("ProgressBar");
//     var width = 1;
//     var id = setInterval(frame, 10);
//     function frame() {
//       if (width >= 80) {
//         clearInterval(id);
//         i = 0;
//       } else {
//         width++;
//         elem.style.width = width + "%";
//         elem.innerHTML = width  + "%";
//       }
//     }
//   }
// }

// //progress bar script
// function pro2()
// {
// var i = 0;
// move2();
// function move2() {
//   if (i == 0) {
//     i = 1;
//     var elem = document.getElementById("ProgressBar2");
//     var width = 1;
//     var id = setInterval(frame, 10);
//     function frame() {
//       if (width >= 80) {
//         clearInterval(id);
//         i = 0;
//       } else {
//         width++;
//         elem.style.width = width + "%";
//         elem.innerHTML = width  + "%";
//       }
//     }
//   }
// }
// }
// //progress bar script
// function pro3(){
// var i = 0;
// move3();
// function move3() {
//   if (i == 0) {
//     i = 1;
//     var elem = document.getElementById("ProgressBar3");
//     var width = 1;
//     var id = setInterval(frame, 10);
//     function frame() {
//       if (width >= 80) {
//         clearInterval(id);
//         i = 0;
//       } else {
//         width++;
//         elem.style.width = width + "%";
//         elem.innerHTML = width  + "%";
//       }
//     }
//   }
// }
// }

// //progress bar script
// function pro4(){
// var i = 0;
// move4();
// function move4() {
//   if (i == 0) {
//     i = 1;
//     var elem = document.getElementById("ProgressBar4");
//     var width = 1;
//     var id = setInterval(frame, 10);
//     function frame() {
//       if (width >= 80) {
//         clearInterval(id);
//         i = 0;
//       } else {
//         width++;
//         elem.style.width = width + "%";
//         elem.innerHTML = width  + "%";
//       }
//     }
//   }
// }
// }


