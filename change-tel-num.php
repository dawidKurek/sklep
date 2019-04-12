<?php include_once"header.php"; ?>
<body>
    <header>
        <?php include_once"nav.php"; ?>
    </header>
    <main>
        <form class="change-container" method="post" action="PHP/change-tel-num-script.php"> 

            <input pattern="[0-9]{3}[0-9]{3}[0-9]{3}" type="tel" name="tel_num" placeholder="123456789" value="<?=@$_GET['number']?>">

            <div class="error"><?=@$_GET['error']?></div>
            <button type="submit" name="tel-num-button">Ustaw</button>
        </form>
    </main>
</body>
</html>