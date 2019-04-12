<?php
session_start();

if(isset($_POST['add-address-button'])){
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $street=$_POST['street'];
    $number=$_POST['number'];
    $city=$_POST['city'];
    $postal_code=$_POST['postal_code'];
    $country=$_POST['country'];

    $remember_fields="f_name=$f_name&l_name=$l_name&street=$street&number=$number&city=$city&postal_code=$postal_code&country=$country";

    if(empty($f_name) || empty($l_name) || empty($street) || empty($number) || empty($city) || empty($postal_code) || empty($country)){
        header("Location: ../change-address.php?error=Uzupełnij pola&$remember_fields");
        exit();
    }else{
        require_once"../connect.php";

        $query="INSERT INTO addresses (id,f_name,l_name,street,house_num,city,`postal-code`,country) VALUES (".$_SESSION['user_id'].", '$f_name','$l_name','$street','$number','$city','$postal_code','$country') ";

        $result=mysqli_query($dbc,$query);

        header("Location: ../my-account.php");
    }
}