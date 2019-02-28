<?php

if(isset($_POST['add-new-poster-button'])){
    require_once"../connect.php";

    $price=mysqli_real_escape_string($dbc, $_POST['price']);
    $title=mysqli_real_escape_string($dbc, $_POST['title']);
    $description=mysqli_real_escape_string($dbc, $_POST['description']);  
    // Liczba plików
    $countFiles = count($_FILES['product-photo']['name']);

    if(empty($price) || empty($title) || empty($description)){
        header("Location: ../add-poster.php?error=Uzupełnij pola");
    }else{
        if(!is_numeric($price)){
            //$price nie jest liczbą
            header("Location: ../add-poster.php?error=Pole ceny musi zawierać liczbę");
        }else{
            //ilość znaków w $title
            if(strlen($title)>100){
                header("Location: ../add-poster.php?error=Pole tytułu nie może mieć więcej niż 100 znaków");
            }else{
                if(strlen($description)>10000){
                    header("Location: ../add-poster.php?error=Pole opisu nie może mieć więcej niż 10000 znaków");
                }else{
                    if($countFiles>5){
                        header("Location: ../add-poster.php?error=Zdjęć nie może być więcej niż 5");
                    }else{
                        
                        for($i=0;$i<$countFiles;$i++){

                            $fileName = $_FILES['product-photo']['name'][$i];
                            $fileTmpName = $_FILES['product-photo']['tmp_name'][$i];
                            $fileType = $_FILES['product-photo']['type'][$i];
                            $fileSize = $_FILES['product-photo']['size'][$i];

                            if($fileType!='image/jpeg' && $fileType!='image/jpg' && $fileType!='image/png' && $fileType!='image/gif'){
            
                                header("Location: ../add-poster.php?error=Zdjęcia mogą mieć rozszerzenia: jpg, jpeg, png, gif");
                            }else{
                                if($fileSize>5120){
                                    header("Location: ../add-poster.php?error=Zdjęcie może mieć do 5MB");
                                }else{
                                    //Wszystko jest dobrze wypełnione
                                    echo'Wszystko jest OK!';
                                }
                            }
                        }
                    }
                }
            }
        }
    }
 
    

        
       
        /* echo $fileName.'<br>';
        echo $fileType.'<br>';
        echo $fileSize.'<br>';
        echo $fileTmpName.'<br><br>'; */
        // Upload file
        //move_uploaded_file($_FILES['product-photo']['tmp_name'][$i],'upload/'.$filename);     
    
    //print_r($_FILES['product-photo']['name'][0]);
}