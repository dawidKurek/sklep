<?php require_once"header.php";?>
<body>
<header>
<?php require_once"nav.php";  ?>

</header>
<main>
    <div class="container">
    <?php
        include_once"connect.php";

        $query="SELECT * FROM posters WHERE id=".$_SESSION['user_id']." ";
        $result=mysqli_query($dbc, $query);

        if(mysqli_num_rows($result)==0){
            //uzytkownik nie ma jeszcze ogłoszen
            echo'<div class="no-posters">Brak ogłoszeń</div>';
        }else{
            //uzytkownik ma swoje ogloszenia
            while($row=mysqli_fetch_assoc($result)){
                echo'
                    <a href="my-poster.php?id_poster='.$row['id_poster'].'&site-title=Ogłoszenie: '.$row['title'].' " class="my_poster">
                        <div class="small-pic">
                            <img src="img/'.$row['pic1'].' ">
                        </div>
                        <div class="wraper">
                            <h2 class="my_title">'.$row['title'].'</h2>
                            <p class="my_price">'.$row['price'].' zł</p>
                        </div>
                    </a> 
                ';
            }
        }
    ?>
        

    </div>
</main>
</body>