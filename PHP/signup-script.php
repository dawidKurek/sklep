<?php

if(isset($_POST['signup-button'])){

    require_once"../connect.php";

$user_email=mysqli_real_escape_string($dbc, $_POST['user-email']);
$user_name=mysqli_real_escape_string($dbc, $_POST['user-name']);
$user_pwd=mysqli_real_escape_string($dbc, $_POST['user-pwd']);
$user_pwd_2=mysqli_real_escape_string($dbc, $_POST['user-pwd-2']);

    if(empty($user_email) || empty($user_name) || empty($user_pwd) || empty($user_pwd_2)){
        //Pola nieuzupełnione
        header("Location: ../signup.php?error=Uzupełnij pola&user-email=$user_email&user-name=$user_name");
    }else{
        //Sprawdzenie email
        if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
            //Błędny email
            header("Location: ../signup.php?error=Podany email jest niepoprawny");
        }else{
            //Sprawdzenie hasła
            if($user_pwd!=$user_pwd_2){
                //Podane hasła się różnią
                header("Location: ../signup.php?error=Hasła muszą być identyczne&user-email=$user_email&user-name=$user_name");
            }else{
                //Sprawdzenie login
                $query="SELECT * FROM users WHERE username='$user_name' ";
                $result=mysqli_query($dbc, $query);

                    if(mysqli_num_rows($result)>0){
                        //Podany uzytkownik juz istnieje
                        header("Location: ../signup.php?error=Podany uzytkownik juz istnieje&user-email=$user_email&user-name=$user_name");
                    }else{
                        $query="INSERT INTO users (username,password,email) VALUES('$user_name', SHA('$user_pwd'), '$user_email')";
                        mysqli_query($dbc, $query);
                        header("Location: ../index.php");
                    }
            }        
        }
    }
    
}
