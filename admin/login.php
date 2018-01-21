<?php
// Include config file
require_once '../includes/config.php';
 
// Define variables and initialize with empty values
$usernamename = $password = "";
$usernamename_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $usernamename_err = 'Please enter username.';
    } else{
        $usernamename = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($usernamename_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $usernamename;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $usernamename, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $usernamename;      
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'Wrong Password.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $usernamename_err = 'Wrong Username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; background: orange;}
        .wrapper{ width: 350px; padding: 20px; text-align: left; background: white; border-radius: 5px;}
        .submit{
            color: white;
            background: orange;
            border: 0px;
            padding: 10px;
            border-radius: 5px;
        }
        .submit:hover{
            background:#ff5e00;
        }
        table{
            width: 100%;
            height: 100%;
            margin-top: 10%;
        }
        table td{
            text-align:center;
        }
    </style>
</head>
<body>
        <center>
                    <img src="../img/sys/tnf2.png" width="100px" style="margin-top:80px;"><br><BR>
    <div class="wrapper">
        <h1>Login</h1>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($usernamename_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control" value="<?php echo $usernamename; ?>">
                <span class="help-block"><?php echo $usernamename_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="submit" value="Login">
            </div>
            <p>The pages ahead are fully protected and maintained by the Navengers.<a href="../index.php">Go to main site</a>.</p>
        </form>
    </div>
</body>
</html>