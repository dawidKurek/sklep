<?php
session_start();

if(isset($_POST['signin-button'])){

    require_once"../connect.php";

$user_name=$_POST['user-name'];
$user_pwd=$_POST['user-pwd'];

    if(empty($user_name) || empty($user_pwd)){
        //Puste pola
        header("Location: ../signin.php?error=Uzupełnij pola&user-name=$user_name");
    }else{
        $query="SELECT * FROM users WHERE username='$user_name' AND password=SHA('$user_pwd') ";
        $result=mysqli_query($dbc, $query);

        if(mysqli_num_rows($result) !=1){
            //Błędny login
            header("Location: ../signin.php?error=Błędny login lub hasło&user-name=$user_name");
        }else{
            $_SESSION['user_name']=$user_name;
            header("Location: ../index.php");
        }
    }
}