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
        <?php include_once"nav.php"; ?>

        <form class="search-bar" method="post" action="">
            <input type="text" name="search" class="search">
            <button type="submit" name="submit" class="submit">Szukaj</button>
        </form>
    </header>
     
    <main>
        <ul>
            <li class="poster">
                <a href="poster.php?id=5&site-title=Ogłoszenie">
                    <h2 class="price">999 zł</h2>
                    <p class="title">Samsung Galaxy s9+</p>

                    <div class="picture">
                        <img src="img/s9plus-1.png">
                    </div>
                </a>
            </li>
            <li class="poster">
                <a href="poster.php?id=1&site-title=Ogłoszenie">
                    <h2 class="price">3999 zł</h2>
                    <p class="title">iPhone X</p>

                    <div class="picture">
                        <img src="img/x1.png">
                    </div>
                </a>
            </li>
            <li class="poster">
                <a href="poster.php?id=10&site-title=Ogłoszenie">
                    <h2 class="price">2999 zł</h2>
                    <p class="title">Xiaomi Mi8 Pro</p>

                    <div class="picture">
                        <img src="img/8pro1.png">
                    </div>
                </a>
            </li>
        </ul>
    </main>
</body>
</html>