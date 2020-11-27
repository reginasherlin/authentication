<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMC CS| Learning Platform</title>
    <link rel="stylesheet" href="css/login-style.css" />

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
            <!-- <a href="login.html">Login</a> -->
          </div>
          <div class="nav-link-wrapper">
            <a href="signup.php">Sign Up</a>
          </div>
        </div>
      </div>
    </div>

    <div class="main-container">
          <div class="server-wrapper">
              <img src="images/search.svg" alt="server graphic" class="server">
              <h1 class="server-head">Built for learning anywhere, anytime</h1>
              <p class="subhead">Designed to support teaching and learning</p>
          </div>

      <div class="form-wrapper">
        <div class="login-wrapper">
            <p>Log in</p>
            <!-- <button id="refreshbtn" onclick="refreshFunction()"> <i id="refreshicon" class="fa fa-refresh" aria-hidden="true"></i></button> -->
        </div>
        
        <div class="content-wrapper">
          
            <div class="error-control">
                <div class="errormsgs" id="errormsgs" >
                  </div>
           </div>
          <form id="form" method="post" action="includes/login.inc.php">
          
            <div class="floating-stuff">
              <input
                id="username"
                name="uid"
                type="text"
                required
                autocomplete="off"
              />
              <label id="u-label" class="label-name">
                <span class="content-name">Username</span>
              </label>
              <i id="u-check" class="fa fa-check" aria-hidden="true"></i>
              <i id="u-warn" class="fa fa-exclamation" aria-hidden="true"></i>
              <small id="u-error-msg">error message</small>
            </div>

            <div class="floating-stuff">
              <input
                id="password"
                name="pwd"
                type="password"
                required
                autocomplete="off"
              />
              <label class="label-name">
                <span class="content-name">Password</span>
              </label>
              <i id="p-check" class="fa fa-check" aria-hidden="true"></i>
              <i id="p-warn" class="fa fa-exclamation" aria-hidden="true"></i>
              <small id="p-error-msg">error message</small>
            </div>

            <div class="form-control">
              <select name="usertype" id="usertype" required>
                <option value="" selected disabled hidden>User Type</option>
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
                <option value="student">Student</option>
              </select>

              
            </div>

            <div class="forgot-pass">
              <a href="">Forgot password?</a>
            </div>

            <input type="submit" name="login-submit" value="Login" />

            <div class="signup-link">
              Not a member? <a href="signup.php"> SignUp </a>
            </div>

            </div>
          </form>
        </div>
      </div>
    </div>
              
           <?php  
            if(isset($_GET['error']))
            {
              if($_GET['error'] == "wrongpwd")
              {
                echo '<script>
                const password = document.getElementById("password");
                setPasswordError(password,"Invalid Password");
                function setPasswordError(input, message) 
                {
                  const passwordControl = input.parentElement;
                  const error_msg = passwordControl.querySelector("small");
                  error_msg.innerText = message;
                  passwordControl.className = "floating-stuff error";
                }
                </script>';
              } 
              else if($_GET['error'] == "nouser")
              {
                // echo '<div class="errormsgs">Please enter valid credentials</div>';
                echo '<script>
                const instruction = document.getElementById("errormsgs");
                setMessage(instruction,"User does not exist");
                function setMessage(input,err)
                {
                  const msgControl = input.parentElement;
                  instruction.innerText = err;
                  msgControl.className = "error-control error";
                }
                </script>';
                
              } else if($_GET['error'] == "emptyfields")
              {
                echo '<script>
                const instruction = document.getElementById("errormsgs");
                setMessage(instruction,"All fields are required");
                function setMessage(input,err)
                {
                  const msgControl = input.parentElement;
                  instruction.innerText = err;
                  msgControl.className = "error-control error";
                }
                </script>';
              } 
              else if($_GET['error'] == "uidnotvalid")
              {
                echo '<script>
                const username = document.getElementById("username");
                setErrorFor(username,"Invalid Username");
                function setErrorFor(input, message) {
                    const usernameControl = input.parentElement;
                    const error_msg = usernameControl.querySelector("small");
                    error_msg.innerText = message;
                    usernameControl.className = "floating-stuff error";}
                  </script>';
              }
              else if($_GET['error'] == "wrongusertype")
            {
              echo '<script> const instruct = document.getElementById("errormsgs");
              setaMessage(instruct,"Wrong User type");
              function setaMessage(input,e)
              { const mControl = input.parentElement;
                instruct.innerText = e;
                mControl.className = "error-control error";}
              </script>';
            } 
          }
              if(isset($_GET['login']))
              {
                if ($_GET['login'] == "success")   {
                  echo '<script>
                const instruction = document.getElementById("errormsgs");
                setMessage(instruction,"Login successful");
                function setMessage(input,err)
                {
                  const msgControl = input.parentElement;
                  instruction.innerText = err;
                  msgControl.className = "error-control success";
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
  </body>
</html>