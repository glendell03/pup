<?php
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$username = $email =  $password = $confirmPassword = "";
$username_err = $email_err =  $password_err = $confirmPassword_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    //validate email 
   if(empty($_POST["email"])){
    $email_err = "Please enter email";
} else {
 $email = trim($_POST["email"]);
 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $email_err = "Invalid email";
 }
}
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirmPassword"]))){
        $confirmPassword_err = "Please confirm password.";     
    } else{
        $confirmPassword = trim($_POST["confirmPassword"]);
        if(empty($password_err) && ($password != $confirmPassword)){
            $confirmPassword_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirmPassword_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body >
    <nav>
        <div class="pup-logo"><img src="../photos/PUPLogo.png" alt="logo"></div> PUP
    </nav>
<div class="form-container">
    
    <div id="error">
        <span><?php echo $username_err; ?></span>
        <span><?php echo $email_err; ?></span>
        <span><?php echo $password_err; ?></span>
        <span><?php echo $confirmPassword_err; ?></span>
    </div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <div <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" >
        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        </div>

        <div <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>" >
        <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
        </div>

        <div <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
        </div> 

        <div <?php echo (!empty($confirmPassword_err)) ? 'has-error' : ''; ?>">
        <input type="password" name="confirmPassword" placeholder="Confirm Password">

        <div >
        <button type="submit" value="submit" class="btn btn-outline-danger">SIGN UP</button>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </div>
    </form>
</div>

<script src="i_classroom.js"></script>
</body>
</html>