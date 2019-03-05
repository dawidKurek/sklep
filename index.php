<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <title>Sklep</title>
</head>
<body>
    <header>
        <?php require_once"connect.php"; include_once"nav.php"; ?>

        <form class="search-bar" method="post" action="">
            <input type="text" name="search" class="search">
            <button type="submit" name="submit" class="submit">Szukaj</button>
        </form>
    </header>
     
    <main>
        <ul>
        <?php
            $query="SELECT * FROM posters ORDER BY id_poster DESC";
            $result=mysqli_query($dbc, $query);

               while($row=mysqli_fetch_assoc($result)){
                    
                echo'
                    <li class="poster">
                        <a href="poster.php?id_poster='.$row['id_poster'].'&site-title=Ogłoszenie">
                            <h2 class="price">'.$row['price'].' zł</h2>
                            <p class="title">'.$row['title'].'</p>

                            <div class="picture">
                                <img src="img/'.$row['pic1'].'">
                            </div>
                        </a>
                    </li>
                ';
            }
        ?>
            
        </ul>
    </main>
</body>
</html>