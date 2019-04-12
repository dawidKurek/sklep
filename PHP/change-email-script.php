<?php
session_start();

if(isset($_POST['change-email-button'])){
    $new_email=$_POST['new-email'];
    $new_email_2=$_POST['new-email-2'];
    $remember_emails="new-email=$new_email&new-email-2=$new_email_2";

    if(empty($new_email) || empty($new_email_2)){
        header("Location: ../change-email.php?error=Uzupełnij pola&$remember_emails");
        exit();
    }else{
        if($new_email != $new_email_2){
            header("Location: ../change-email.php?error=Podane adresy muszą być identyczne&$remember_emails");
            exit();
        }else{
            if(!filter_var($new_email, FILTER_VALIDATE_EMAIL)){
                //Błędny email
                header("Location: ../signup.php?error=Podany email jest niepoprawny&$remember_emails");
                exit();
            }else{
                require_once"../connect.php";

                $query="UPDATE users SET email='$new_email' WHERE id=".$_SESSION['user_id']." ";
                $result=mysqli_query($dbc,$query)
                    or die("jakis blad");

                header("Location: ../my-account.php");
            }
        }
    }
}