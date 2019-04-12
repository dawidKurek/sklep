<?php
session_start();

if(isset($_POST['tel-num-button'])){
    $tel_num=$_POST['tel_num'];

    if(empty($tel_num)){
        header("Location: ../change-tel-num.php?error=Uzupełnij pole");
        exit();
    }
    else{
        require_once"../connect.php";

        $query="SELECT * FROM tel_num WHERE id=".$_SESSION['user_id']." ";
        $result=mysqli_query($dbc,$query);

        if(mysqli_num_rows($result)==0){
            //dodaj numer
            $query="INSERT INTO tel_num (id, `number`) VALUES (".$_SESSION['user_id'].", '$tel_num')";
            mysqli_query($dbc,$query);
            header("Location: ../my-account.php");
        }elseif(mysqli_num_rows($result)==1){
            //zmien numer
            $query="UPDATE tel_num SET `number`='$tel_num' 
            WHERE id=".$_SESSION['user_id']." ";
            mysqli_query($dbc,$query);
            header("Location: ../my-account.php");
        }
    }
}
