<?php include_once"header.php"; ?>
<body>
    <header>
        <?php include_once"nav.php"; ?>
    </header>
    <main>
        <?php
            include_once"connect.php";

            $query="SELECT * FROM posters WHERE id_poster=".$_GET['id_poster']." ";
            $result=mysqli_query($dbc,$query);
            $row=mysqli_fetch_assoc($result);
        ?>
        <form method="post" action="PHP/edit-poster-script.php?id_poster=<?=$_GET['id_poster']?>" class="add-new-poster-box">
            <label for="price">Cena
            <input type="number" name="price" id="price" placeholder="PLN" value="<?=$row['price']?>"></label>

            <label for="title">Tytuł</label>
            <input type="text" name="title" id="title" value="<?=$row['title']?>">

            <label for="description">Opis</label>
            <textarea name="description" id="description"><?=$row['desc']?></textarea>

            <div class="error"><?=@$_GET['error']?></div>
            <button type="submit" name="add-new-poster-button">Zatwierdź edycję</button>
        </form>
    </main>
</body>
</html>