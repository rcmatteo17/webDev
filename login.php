<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: homePage.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: homePage.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<?php
	session_start();
 
	if(isset($_POST['login'])){
		//connection
		$conn = new mysqli('localhost', 'root', '', 'dbase');
 
		//set login attempt if not set
		if(!isset($_SESSION['attempt'])){
			$_SESSION['attempt'] = 0;
		}
 
		//check if there are 3 attempts already
		if($_SESSION['attempt'] == 3){
			$_SESSION['error'] = 'Attempt limit reach';
		}
		else{
			//get the user with the email
			$sql = "SELECT * FROM users WHERE username = '".$_POST['username']."'";
			$query = $conn->query($sql);
			if($query->num_rows > 0){
				$row = $query->fetch_assoc();
				//verify password
				if(password_verify($_POST['password'], $row['password'])){
					//action after a successful login
					//for now just message a successful login
					$_SESSION['success'] = 'Login successful';
					//unset our attempt
					unset($_SESSION['attempt']);
				}
				else{
					$_SESSION['error'] = 'Password incorrect';
					//this is where we put our 3 attempt limit
					$_SESSION['attempt'] += 1;
					//set the time to allow login if third attempt is reach
					if($_SESSION['attempt'] == 3){
						$_SESSION['attempt_again'] = time() + (60*60);
						//note 5*60 = 5mins, 60*60 = 1hr, to set to 2hrs change it to 2*60*60
					}
				}
			}
			else{
				$_SESSION['error'] = 'No account with that username';
			}
 
		}
 
	}
	else{
		$_SESSION['error'] = 'Fill up login form first';
	}
 
	header('location: index.php');
 
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>


        


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment 1 Ecommerce Site</title>
        <script src="https://kit.fontawesome.com/d363a17780.js" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <!--This will act as the login page and will automatically be the first page to open on the page-->
    <!--Will need to disable other pages without successful login too-->
    <body>
        <section id="header"> 
            <a href="#"><img src="img/logo.png" class="logo" alt="" width="150" height="auto"></a>
        </section>

        <section id="login-form">
            <?php 
                if(!empty($login_err)){
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }        
            ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <h3>Username</h3>
                    <input style="width:100%" type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group">
                    <h3>Password</h3>
                    <input style="width:100%" type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="normal">Log In</button>
                </div>
                <p>Don't have an account? <a href="signUp.php">Sign up now</a>.</p>
		<p>Forgot Password? <a href="reset-password.php">Click Here!</a></p>
            </form>
        </section>
        
        <footer id="login-footer">
            <div class="copyright">
                <p>2022, Assignment1 - Dynamic Website - Harper Cahill, Rob Clappis, Tian Kingsbury</p>
                <p>Today's date is <b><?php echo date("d/m/Y") ?></b> and it's a <b><?php echo date('l') ?></b> today!</p>
            </div>
        </footer>
    </body>
</html>

        
