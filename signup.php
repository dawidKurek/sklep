<?php include_once"header.php" ?>
<body class="body-sign">
    <main class="main-sign">
        <form action="PHP/signup-script.php" method="post" class="logging-box">
            <input type="email" name="user-email" placeholder="E-mail" value="<?=@$_GET['user-email']?>">
            <input type="text" name="user-name" placeholder="Login" value="<?=@$_GET['user-name']?>">
            <input type="password" name="user-pwd" placeholder="Hasło">
            <input type="password" name="user-pwd-2" placeholder="Potwierdź hasło">
            <div class="error"><?php echo @$_GET['error']; ?></div>
            <button type="submit" name="signup-button" class="signup-button">Zarejestruj</button>
        </form>
    </main>
</body>
</html>