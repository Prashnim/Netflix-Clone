<?php

require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

$account=new Account($con);

    if(isset($_POST["submitButton"])){
       
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);

        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
        

        $success=  $account->login($username, $password);
        
        if($success) {
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }

    }
   function getInputValue($name){
        if(isset($_POST[$name]))
            echo $_POST[$name];
    }

?>   

<!DOCTYPE HTML>

<html>
<head>
    <title>Welcome to Sparkle</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">  
    <style>
    body{
        background-image: url('stars.jpg');
        background-size:100% 100%;
        background-repeat: no-repeat;
    
    }
</style>   
</head>

<!--<iframe rows='10% 10%' cols='10% 10%' id='hello'>

</iframe>-->



<body>
<iframe src="assets/images/sparkleLogo123.png" width="100%" height="77" style="border:1px solid white; background-color:white;">

</iframe>

<div class="signInContainer">
    <div class="column">

        <div class="header">
        <img src="assets/images/sparkleLogo.png" alt="SPARKLE" title="Logo">
            <h3>Sign In</h3>
            <span>to continue to Sparkle</span>
            

        </div>
        <form method="POST">

             <?php echo $account->getError(Constants::$loginFailed); ?>           
           <input type="text" name="username" value="<?php getInputValue("username"); ?>" placeholder="Username" required>
           
           <input type="password" name="password" placeholder="Password" required>
          
           <input type="submit" name="submitButton" Value="Submit">
           <a href="register.php" class="signInMessage">New to Sparkle? Sign up here!</a>
           <a href="class.html" class="pay">To know about Payment Options Click here</a>
           
           
        </form>

        <style>
            .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 30%;
            height:7%;
            background-color: blue;
            color: white;
            text-align: center;
            }
            </style>

            <div class="footer">
            <p style="color:white;">Contact:sparkle@gmail.com</p>
            </div>
       


    </div>
</div>    
</body>

</html>