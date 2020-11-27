
<?php

    if(isset($_POST['login-submit']))
    {
        //connect to database
        require 'dbh.inc.php';
        

        $uid = $_POST['uid'];
        $password =$_POST['pwd'];
        $usertype = $_POST['usertype'];

        // if(strlen($uid)> 9 && strlen(uid)< 9 )
        // {
        //     header("Location: ../loginfile.php?error=uidnotvalid");
        //     exit(); 
        // }

        // // $format = "pcsa";
        // if (!preg_match("/\bpcsa\b/i", $uid, $match)) {
        //     header("Location: ../loginfile.php?error=uidnotvalid");
        //     exit(); 
        //  }
         

        if(empty($uid)||empty($password)||empty($usertype))
        {
            header("Location: ../loginfile.php?error=emptyfields");
            exit();
        }
        else{
            //checking if the credentials match with db records
            $sql = "SELECT * FROM users WHERE uidUsers=?";
            $stmt = mysqli_stmt_init($conn);
            //run sql statement
            if(!mysqli_stmt_prepare($stmt,$sql))
            {
                //checking errors 
                header("Location: ../loginfile.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"s", $uid);
                mysqli_stmt_execute($stmt);
                //grabbing results in $result
                $result = mysqli_stmt_get_result($stmt); 

                //checking no of rows or is it empty?
                if($row= mysqli_fetch_assoc($result))
                {
                    //how many rows?
                    $pwdCheck = password_verify($password, $row['pwdUsers']);
                    if($pwdCheck ==false)
                    {
                        header("Location: ../loginfile.php?error=wrongpwd");
                        // &uid=".$uid."&utype=".$usertype);
                        exit();
                    }
                    else if($pwdCheck == true)
                    {   
                        if($usertype==$row['idUsertype']){
                            // echo "pass"; 
                            session_start();
                            $_SESSION['userId'] =$row['idUsers'];
                            $_SESSION['userUsername'] =$row['uidUsers'];
                            $_SESSION['userUsertype'] =$row['idUsertype']; 


                            header("Location: ../loginfile.php?login=success");
                            if($_SESSION['userUsertype']=="student")
                            {
                                header("Location: ../student-files/dash_board.php?login=success");
                            }else if($_SESSION['userUsertype']=="staff"){
                                header("Location: ../staff-files/staff_dashboard.php?login=success");
                            }
                            else if($_SESSION['userUsertype'] == "admin")
                            {
                                header("Location: ../admin-files/admin_dashboard.php?login=success");
                            }

                            

                            exit();
                        }
                        else{
                            header("Location: ../loginfile.php?error=wrongusertype");
                            exit();
                        }
                        
                    }
                    else{
                        header("Location: ../loginfile.php?error=wrongpwd");
                        exit();
                    }
                }
                else{
                    //no user matching the credentials?
                    header("Location: ../loginfile.php?error=nouser");
                    exit();
                    
                
                }
            }
        }
     }
      else{
          header("Location: ../loginfile.php");
          exit();
      }
?>