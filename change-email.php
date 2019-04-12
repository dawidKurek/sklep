<?php require_once"header.php"; ?>

<body>
<header>
    <?php require_once"nav.php"; ?>
</header>

<body>
    <main>
        <form class="change-container" method="POST" action="PHP/change-email-script.php">
            <label>Nowy adres email</label>
            <input type="email" name="new-email" value="<?=@$_GET['new-email']?>">
            <label>Powtórz nowy adres email</label>
            <input type="email" name="new-email-2" value="<?=@$_GET['new-email-2']?>">
            <div class="error"><?=@$_GET['error']?></div>
            <button type="submit" name="change-email-button">Zmień</button>
        </form>
    </main>
</body>
</html>