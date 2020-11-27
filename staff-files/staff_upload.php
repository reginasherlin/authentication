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
          <li><a href="staff_dashboard.php">My Account</a></li>
          <li><a href="staff_upload.php">Upload files</a></li>
          <li><a href="video.php">My uploads</a></li>
          
          <!-- <button class="button">Logout</button> -->
         
        </ul>
      </div>
      
    <div class="workspace">

                 <h4 style="margin-top:15px; margin-left:55px;"><b>Upload Files</b></h4> 
                
              <form method="post" action="staff_upload.php" enctype="multipart/form-data" class ="upload-form"> 
                  <div class="upload-field">
                      <input name="file" type="file" class="choose-file" />
                  </div>
                     <div class="input-elements">
                        <input type="text" name="search_name" placeholder="What do you want to be searched as?" required>
                      </div>
                      <div class="input-elements">
                        <input type="text" name="subject_name" placeholder="Subject name" required>
                      </div>
                      
                      <div class="input-elements">
                          <input type="text" name="keyword_one" placeholder="Keyword_one" required>
                      </div>
                      <div class="input-elements">
                          <input type="text" name="keyword_two" placeholder="Keyword_two" required>
                      </div>
                  
                      <div class="dropdown-element">
                            <select name="filetype" id="filetype" required>
                                <option value="" selected disabled hidden>File type</option>
                                <option value="video">Videos</option>
                                <option value="images">Images</option>
                                <option value="pdf">PDF</option>
                                <option value="ppt">PPT</option>
                                <option value="doc">Docs</option>
                                <option value="xlsx">Excel</option>
                            </select>
                      </div>
                      <input type="submit" name="upload" value="UPLOAD" class="submit" >
                  
                  <!-- <a href="video.php">VIEW VIDEOS</a></td> -->
            
              </form>
              <a href="staff_dashboard.php"> <div class="back-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></i></div></a>
          <!-- <h4><a href="video.php">Go to all uploads</a></h4> -->
          </body>
</html>


<?php
include('../includes/db.php');
if(isset($_POST['upload']))
  {
	$name=$_FILES['file']['name'];
  $tmp=$_FILES['file']['tmp_name'];
  $search_name =$_POST['search_name'];
  $subject_name =$_POST['subject_name'];
  $keyword_one=$_POST['keyword_one'];
  $keyword_two=$_POST['keyword_two'];
  $filetype = $_POST['filetype'];
   // $upload_date =;
  
      if (isset($_SESSION['userId'])) 
      {
        $owner_id = $_SESSION['userId'];
        $owner_name = $_SESSION['userUsername'];
        $owner_type = $_SESSION['userUsertype'];
        
      } 
  
    
        move_uploaded_file($tmp,"../videos/".$name);
        $sql="insert into video (name,owner_id,owner_name,owner_type,search_name,file_type,subject_name,keyword_one,keyword_two) values('$name',$owner_id,'$owner_name','$owner_type','$search_name','$filetype','$subject_name','$keyword_one','$keyword_two')";
        $res=mysqli_query($con,$sql);
        if($res==1)
        {
          echo "video inserted successfully";
          
        }
        else
        {
          echo 'There has been an error, try again';
        }
      
    

    

  }

?>   
    


<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>