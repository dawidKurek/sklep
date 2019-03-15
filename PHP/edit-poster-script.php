<?php
include_once"../header.php";

if(isset($_POST['add-new-poster-button'])){
    require_once"../connect.php";

    $price=mysqli_real_escape_string($dbc, $_POST['price']);
    $title=mysqli_real_escape_string($dbc, $_POST['title']);
    $description=mysqli_real_escape_string($dbc, $_POST['description']);  
    $rememberFields="id_poster=".$_GET['id_poster']."&price=$price&title=$title&description=$description";


    if(empty($price) || empty($title) || empty($description)){
        header("Location: ../my-poster-edit.php?error=Uzupełnij pola&$rememberFields");
    }else{

        if(!is_numeric($price)){
            //$price nie jest liczbą
            header("Location: ../my-poster-edit.php?error=Pole ceny musi zawierać liczbę&$rememberFields");
        }else{
            //ilość znaków w $title
            if(strlen($title)>100){
                header("Location: ../my-poster-edit.php?error=Pole tytułu nie może mieć więcej niż 100 znaków&$rememberFields");
            }else{
                if(strlen($description)>10000){
                    header("Location: ../my-poster-edit.php?error=Pole opisu nie może mieć więcej niż 10 000 znaków&$rememberFields");
                }else{                   
                            $query="UPDATE posters SET price = '$price', title = '$title', `desc` = '$description' WHERE id_poster = ".$_GET['id_poster']." ";
                            $result=mysqli_query($dbc, $query);
                            header("Location: ../my-posters.php");
                    
                }
            }
        }
    }
}
