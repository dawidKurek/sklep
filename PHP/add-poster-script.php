<?php
include_once"../header.php";

if(isset($_POST['add-new-poster-button'])){
    require_once"../connect.php";

    $price=mysqli_real_escape_string($dbc, $_POST['price']);
    $title=mysqli_real_escape_string($dbc, $_POST['title']);
    $description=mysqli_real_escape_string($dbc, $_POST['description']);  
    // Liczba plików
    $countFiles = count($_FILES['product-photo']['name']);
    $rememberFields="price=$price&title=$title&description=$description";
    $target='../img/';

    $name_of_files=array();
    foreach($_FILES['product-photo']['name'] as $fileName){
        array_push($name_of_files, time().$fileName);
    }


    if(empty($price) || empty($title) || empty($description)){
        header("Location: ../add-poster.php?error=Uzupełnij pola&$rememberFields");
    }else{

        if(!is_numeric($price)){
            //$price nie jest liczbą
            header("Location: ../add-poster.php?error=Pole ceny musi zawierać liczbę&$rememberFields");
        }else{
            //ilość znaków w $title
            if(strlen($title)>100){
                header("Location: ../add-poster.php?error=Pole tytułu nie może mieć więcej niż 100 znaków&$rememberFields");
            }else{
                if(strlen($description)>10000){
                    header("Location: ../add-poster.php?error=Pole opisu nie może mieć więcej niż 10000 znaków&$rememberFields");
                }else{
                    if($countFiles>5){
                        header("Location: ../add-poster.php?error=Zdjęć nie może być więcej niż 5&$rememberFields");
                    }else{
                        
                        for($i=0;$i<$countFiles;$i++){

                            $fileName = $name_of_files[$i];                            
                            $fileSize = $_FILES['product-photo']['size'][$i];

                            $fileExt_before=explode('.', $fileName);
                            $fileExt=strtolower(end($fileExt_before));
                            $approvedExt=array('jpg','jpeg','png','gif');

                            if(!in_array($fileExt, $approvedExt)){
                                //ext jest niedozwolone
                                header("Location: ../add-poster.php?error=Zdjęcia mogą mieć rozszerzenia: jpg, jpeg, png, gif&$rememberFields");    
                                exit();                                
                            }else{
                                //ext jest dozwolone
                                if($fileSize>5242880){
                                    header("Location: ../add-poster.php?error=Zdjęcie może mieć do 5MB&$rememberFields");
                                    exit();
                                }
                       
                            }                              
                        }
                            for($i=0;$i<$countFiles;$i++){
                                $fileTmpName = $_FILES['product-photo']['tmp_name'][$i];
                                move_uploaded_file($fileTmpName, $target.$name_of_files[$i]); 
                            }

                            @$query="INSERT INTO posters (id,price,title,`desc`,pic1,pic2,pic3,pic4,pic5)
                            VALUES (".$_SESSION['user_id'].", '$price', '$title','$description', '$name_of_files[0]', '$name_of_files[1]', '$name_of_files[2]', '$name_of_files[3]', '$name_of_files[4]')";

                            $result=mysqli_query($dbc, $query);

                            echo '<div class="success" style="font-size:2.2rem; color:#32ad3e;">Ogłoszenie dodano.</div> Zostaniesz przekierowany na stronę główną w ciągu 5s.';
                            header("refresh:5; url=../index.php");
                    }
                }
            }
        }
    }
}
