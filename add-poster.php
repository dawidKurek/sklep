<?php include_once"header.php"; ?>
<body>
    <header>
        <?php include_once"nav.php"; ?>
    </header>
    <main>
        <form enctype="multipart/form-data" method="post" action="PHP/add-poster-script.php" class="add-new-poster-box">
            <label for="price">Cena
            <input type="number" name="price" id="price" placeholder="PLN" value="<?=@$_GET['price']?>"></label>

            <label for="title">Tytuł</label>
            <input type="text" name="title" id="title" value="<?=@$_GET['title']?>">

            <label class="label-product-photo" for="product-photo">Możesz przesłać maksymalnie 5 zdjęć.</label>
            <input type="file" name="product-photo[]" id="product-photo" multiple>

            <label for="description">Opis</label>
            <textarea name="description" id="description"><?=@$_GET['description']?></textarea>

            <div class="error"><?=@$_GET['error']?></div>
            <button type="submit" name="add-new-poster-button">Zatwierdź ogłoszenie</button>
        </form>
    </main>
</body>
</html>