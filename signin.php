<?php include_once"header.php" ?>
<body class="body-sign">
    <main class="main-sign">
        <form action="PHP/signin-script.php" method="post" class="logging-box">
            <input type="text" name="user-name" placeholder="Login" value="<?=@$_GET['user-name']?>">
            <input type="password" name="user-pwd" placeholder="Hasło">
            <div class="error"><?=@$_GET['error']?></div>
            <button type="submit" name="signin-button" class="signin-button">Zaloguj</button>
        </form>
    </main>
</body>
</html>