<?php 

    if(isset($_POST['signup-submit'])) //checking if they got here from clicking the submit button
    {
        //getting database connected
        require 'dbh.inc.php';

        //getting info from form
        $ufirst = $_POST['ufirst'];
        $ulast = $_POST['ulast'];
        $email = $_POST['mail'];
        $usertype =$_POST['usertype'];
        $username =$_POST['uid'];
        $password = $_POST['pwd'];
        $passwordRepeat = $_POST['pwd-repeat'];
        
        // if (!preg_match("/\bpcsa\b/i", $username, $match)) {
        //     header("Location: ../signup.php?error=invalidUidformat");
        //     exit(); 
        //  }

            //validation
        // if(empty($ufirst)||empty($ulast)||empty($usertype)||empty($username)||empty($email)||empty($password)||empty($passwordRepeat))
        //  {
        //     header("Location: ../signup.php?error=emptyfields");
        //     exit(); // if user makes mistake , the below scripts are stopped here
        // }
        // else
        
         
         if(strlen($username)<11 || strlen(username)> 11 )
        {
            header("Location: ../signup.php?error=invalidUidlength");
            exit(); 
        }else if(strlen($password) < 8  || strlen(password)> 15 )
        {
            header("Location: ../signup.php?error=invalidpwdlength");
            exit(); 
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            header("Location: ../signup.php?error=invalidmail");
            exit();
        }
        // else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))  //this validation checked for specialchars
        // {
        //     header("Location: ../signup.php?error=invalidUid");
        //     exit();
        // }
            // $var=$_POST['t1'];
            // $str='/^([0-9]{2})\/(([a-z]){4})\/([0-9]{3})$/';
        else if(!preg_match('/^([0-9]{2})\/(([a-z]){4})\/([0-9]{3})$/', $username))
        {

            header("Location: ../signup.php?error=invalidUUid");
            exit();
        }
        else if($password!=$passwordRepeat)
        {
            header("Location: ../signup.php?error=passwordcheck");
            exit() ;
        }
        else
        {
            //checking if user records exist in the database
            $sql="SELECT uidUsers FROM users WHERE uidUsers=?";
            $stmt = mysqli_stmt_init($conn);  //prepare statement

            if(!mysqli_stmt_prepare($stmt,$sql))
            {
                //checking if prepare stmts work
                header("Location: ../signup.php?error=sqlerror");
                exit();
            } 
            else
            {
                //checking if users exist
                mysqli_stmt_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt); //run it in the db
                mysqli_stmt_store_result($stmt); //result from db stored in stmt
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0)
                {
                    header("Location: ../signup.php?error=usertaken");
                    exit();

                }
                else
                {

                    $sql="INSERT INTO users (idFirst,idLast,uidUsers,emailUsers,pwdUsers,idUsertype) values(?,?,?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);  //prepared statement
                    if(!mysqli_stmt_prepare($stmt,$sql))
                    {
                     //checking if prepare stmts work
                     header("Location: ../signup.php?error=sqlerror");
                     exit();
                    }
                    else{
                        //hashing password
                        $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
                        
                        if($stmt = mysqli_prepare($conn,$sql))
                            {
                                mysqli_stmt_bind_param($stmt,"ssssss", $ufirst, $ulast, $username, $email, $hashedPwd, $usertype);
                                mysqli_stmt_execute($stmt); 
                                // echo "Records inserted succesfully";
                                header("Location: ../signup.php?signup=success");
                                header("Location: ../loginfile.php?signup=success");
                                exit();  
                            }
                        else{
                            // echo "Could not prepare query: $sql.".mysqli_error($conn);
                            header("Location: ../signup.php?error=sqlerror");
                            exit();
                        }
                         
                    }   
                }
            }
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        header("Location: ../signup.php");
        exit();
    }
