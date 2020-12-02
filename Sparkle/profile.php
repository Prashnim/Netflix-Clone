<?php
require_once("includes/header.php");
require_once("includes/classes/Account.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");

$detailsMessage="";
$passwordMessage="";

if(isset($_POST["saveDetailsButton"])) {
    $account = new Account($con);
    $firstName = FormSanitizer::sanitizeFormString($_POST["firstname"]);
    $lastName = FormSanitizer::sanitizeFormString($_POST["lastname"]);
    $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);

    if($account->updateDetails($firstName, $lastName, $email, $userLoggedIn)) {

        //echo "Success";
        $detailsMessage="<div class='alertSuccess'>
                Details Updated Successfully!
        </div>";

    
    }
    else{
          $errorMessage=$account->getFirstError();
          $detailsMessage="<div class='alertError'>
               $errorMessage
        </div>";
    }
}


if(isset($_POST["savePasswordButton"])) {
    $account = new Account($con);
    $oldpassword = FormSanitizer::sanitizeFormPassword($_POST["oldpassword"]);
    $newpassword = FormSanitizer::sanitizeFormPassword($_POST["newpassword"]);
    $newpassword2 = FormSanitizer::sanitizeFormPassword($_POST["newpassword2"]);
    

    if($account->updatePassword($oldpassword, $newpassword, $newpassword2, $userLoggedIn)) {

        //echo "Success";
        $passwordMessage="<div class='alertSuccess'>
                Password Updated Successfully!
        </div>";

    
    }
    else{
          $errorMessage=$account->getFirstError();
          $passwordMessage="<div class='alertError'>
               $errorMessage
        </div>";
    }
}
?>

<div class="settingsContainer column">
        <div class="formSection">
            <form method="POST">
            <h2>User Details</h2>

            <?php
            $user=new User($con,$userLoggedIn);
            $firstName=isset($_POST["firstname"])?$_POST["firstname"]:$user->getFirstName();
            $lastName=isset($_POST["lastname"])?$_POST["lastname"]:$user->getLastName();
            $email=isset($_POST["email"])?$_POST["email"]:$user->getEmail();
            
            ?>
            <input type="text" name="firstname" placeholder="firstname" value="<?php echo $firstName; ?>">
            <input type="text" name="lastname" placeholder="lastname" value="<?php echo $lastName; ?>">
            <input type="email" name="email" placeholder="email" value="<?php echo $email; ?>">
            <div class="message"><?php echo $detailsMessage; ?></div>
            <input type="submit" name="saveDetailsButton" value="Save" style="background-color:#3ca5ff;">
            </form>
        </div>

        <div class="formSection">
            <form method="POST">
            <h2>Update Passoword</h2>
            <input type="password" name="oldpassword" placeholder="old password">
            <input type="password" name="newpassword" placeholder="new password">
            <input type="password" name="newpassword2" placeholder="confirm password">
            <div class="message"><?php echo $passwordMessage; ?></div>
            <input type="submit" name="savePasswordButton" value="Save" style="background-color:#3ca5ff;">
            </form>
        </div>

        <div class="formSection">
        <h2>Subscription</h2>
        <?php

        if($user->getIsSubscribed()) {
            echo "<h3>You are subscribed!To cancel your subscription go to paypal.</h3>";
        }
        else {
            echo "<a href='billing.php'>Subscribe!</a>";
        }
        ?>


        </div>

</div>