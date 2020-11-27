<?php
  session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMC CS| Learning Platform</title>
    <link rel="stylesheet" href="css/signup-style.css" />
    <!--    font links-->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;1,200&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap"
      rel="stylesheet"
    />

    <!-- icon links -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <style>
    .errormsgs{
      color: #BB0728;
      font-family:'Montserrat', sans-serif;
       text-align:center; 
       font-size:15px; 
       font-weight: 500; 
       padding-left: 50px;
       font-weight: bold;
    }
    .error-control.error #errormsgs{
      visibility:visible;
    }
    .error-control.success #p-error-msg{
      visibility: visible;
      color: green;
    }

  </style>
  
  <body>
    <div class="container">
      <div class="nav-wrapper">
        <div class="left-side">
          <div class="brand">
            <a href="index.html">SMC CS</a>
          </div>
        </div>
        <div class="right-side">
          <div class="nav-link-wrapper">
            <a href="loginfile.php">Login</a>
          </div>
        </div>
      </div>
    </div>

    <div class="main-container">
          <div class="server-wrapper">
              <img src="images/book.svg" alt="server graphic" class="server">
              <h1 class="server-head">Digital Learning for the Modern era</h1>
              <p class="subhead">Join our community of learners today</p>
          </div>
          <div class="form-wrapper">
                <div class="login-wrapper">
                 <p>Sign Up</p> 
                      <div class="error-control">
                         <div class="errormsgs" id="errormsgs"></div>
                     </div>

                </div>
            <div class="content-wrapper"> 
                  
                <form
                    class="form-signup"
                    action="includes/signup.inc.php"
                    method="POST">
                     <div class="floating-stuff">
                        <input type="text" name="ufirst"  required autocomplete="off" />
                        <!-- <input type="text" name="ufirst" placeholder="First Name" /> -->
                        <label id="u-label" class="label-name">
                            <span class="content-name">First Name</span>
                        </label>
                        <i id="u-check" class="fa fa-check" aria-hidden="true"></i>
                        <i id="u-warn" class="fa fa-exclamation" aria-hidden="true"></i>
                        <small id="u-error-msg">error message</small> 
                    </div>

                    <div class="floating-stuff">
                        <input type="text" name="ulast"  required autocomplete="off" />
                        <label id="u-label" class="label-name">
                            <span class="content-name">Last Name</span>
                        </label>
                        <i id="u-check" class="fa fa-check" aria-hidden="true"></i>
                        <i id="u-warn" class="fa fa-exclamation" aria-hidden="true"></i>
                        <small id="u-error-msg">error message</small> 
                    </div>


                    
                    <div class="floating-stuff" style="margin-bottom:2px">
                        <input type="text" name="mail"  required autocomplete="off" />
                        <label id="u-label" class="label-name">
                            <span class="content-name">Email</span>
                        </label>
                        <i id="u-check" class="fa fa-check" aria-hidden="true"></i>
                        <i id="u-warn" class="fa fa-exclamation" aria-hidden="true"></i>
                        <small id="u-error-msg">error message</small> 
                    </div>

                        <div class="floating-stuff" style="border:none; padding-bottom:2px;"></div>
                        
                        
                         <div class="floating-stuff">
                            <input id="username" type="text" name="uid" required autocomplete="off" />
                            <label id="u-label" class="label-name">
                                <span class="content-name">User Name</span>
                            </label>
                            <i id="u-check" class="fa fa-check" aria-hidden="true"></i>
                            <i id="u-warn" class="fa fa-exclamation" aria-hidden="true"></i>
                            <small id="u-error-msg">error message</small> 
                        </div>


                        <!-- <input type="text" name="mail" placeholder="E-mail" /> -->
                        <!-- <select name="usertype" id="usertype" required>
                            <option value="" selected disabled hidden>User Type</option>
                            <option value="staff">Staff</option>
                            <option value="student">Student</option>
                        </select> -->
                    
                        
                        <div class="floating-stuff">
                            <input id="password" type="password" name="pwd" required autocomplete="off" />
                            <label id="u-label" class="label-name">
                                <span class="content-name">Password</span>
                            </label>
                            <i id="u-check" class="fa fa-check" aria-hidden="true"></i>
                            <i id="u-warn" class="fa fa-exclamation" aria-hidden="true"></i>
                            <small id="u-error-msg">error message</small> 
                        </div>

                        <div class="floating-stuff" style="margin-bottom:5px;">
                            <input type="password" name="pwd-repeat" required autocomplete="off" />
                            <label id="u-label" class="label-name">
                                <span class="content-name">Repeat Password</span>
                            </label>
                            <i id="u-check" class="fa fa-check" aria-hidden="true"></i>
                            <i id="u-warn" class="fa fa-exclamation" aria-hidden="true"></i>
                            <small id="u-error-msg">error message</small> 
                        </div>

                        <div class="form-control">
                            <select name="usertype" id="usertype" required>
                                <option value="" selected disabled hidden>User Type</option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                                <option value="student">Student</option>
                            </select>
                      </div>
                        <!-- <input type="password" name="pwd" placeholder="Password" /> -->
                        <!-- <input
                            type="password"
                            name="pwd-repeat"
                            placeholder="Repeat password"
                        />  -->
                        <input type="submit" name="signup-submit"></input>
                        <!-- <a href="dash_board.php" class="header-signup">Dashboard</a> -->
                </form> 
            </div>  
        </div>
    </div>

    <?php  
            if(isset($_GET['error']))
            {
              if($_GET['error'] == "passwordcheck")
              {
                echo '<script>
                const password = document.getElementById("password");
                setmyPasswordError(password,"Passwords do not match");
                function setmyPasswordError(input, a) 
                {
                  const passControl = input.parentElement;
                  const emsg = passControl.querySelector("small");
                  emsg.innerText = a;
                  passControl.className = "floating-stuff error";
                }
                </script>';
              } 
              else if($_GET['error'] == "invalidpwdlength")
              {
                echo '<script>
                const password = document.getElementById("password");
                setanError(password,"Must have atleast 8 characters");
                function setanError(input, aaa) 
                {
                  const pControl = input.parentElement;
                  const e_msg = pControl.querySelector("small");
                  e_msg.innerText = aaa;
                  pControl.className = "floating-stuff error";
                }
                </script>';
              } 
              else if($_GET['error'] == "usertaken")
              {
                // echo '<div class="errormsgs">Please enter valid credentials</div>';
                echo '<script>
                const instruction = document.getElementById("errormsgs");
                setMessage(instruction,"Username taken");
                function setMessage(input,err)
                {
                  const msgControl = input.parentElement;
                  instruction.innerText = err;
                  msgControl.className = "error-control error";
                }
                </script>';
                
              } else if($_GET['error'] == "invalidmail")
              {
                echo '<script>
                const i = document.getElementById("errormsgs");
                setaMessage(i,"Invalid Email ID");
                function setaMessage(input,b)
                {
                  const mControl = input.parentElement;
                  i.innerText = b;
                  mControl.className = "error-control error";
                }
                </script>';
              } 
              else if($_GET['error'] == "invalidUidlength")
              {
                echo '<script>
                const username = document.getElementById("username");
                settheErrorFor(username,"Must have 11 characters");
                function settheErrorFor(input, c) {
                    const usernameControl = input.parentElement;
                    const g = usernameControl.querySelector("small");
                    g.innerText = c;
                    usernameControl.className = "floating-stuff error";}
                  </script>';
              }
              else if($_GET['error'] == "invalidUid")
            {
              echo '<script> const ab = document.getElementById("errormsgs");
              setaMessage(ab,"Invalid Usernamee");
              function setaMessage(input,e)
              { const msControl = input.parentElement;
                ab.innerText = e;
                msControl.className = "error-control error";}
              </script>';
            } 
            else if($_GET['error'] == "sqlerror")
            {
              echo '<script> const report = document.getElementById("errormsgs");
              setsomeMessage(report,"Connection error, Try again");
              function setsomeMessage(input,er)
              { const Control = input.parentElement;
                report.innerText = er;
                Control.className = "error-control error";}
              </script>';
            } 
          }
              if(isset($_GET['signup']))
              {
                if ($_GET['signup'] == "success")   {
                  echo '<script>
                const re = document.getElementById("errormsgs");
                settingMessage(re,"Registration successful");
                function settingMessage(input,erro)
                {
                  const reControl = input.parentElement;
                  re.innerText = erro;
                  reControl.className = "error-control success";
                }
                </script>';
                }
              } 
            
          ?>
    <div class="footer">
      <div class="footer-wrapper">
        <p>Contact Us</p>
      </div>
    </div>
    <!-- <script src="js/validate.js"></script> -->
  </body>
</html>
