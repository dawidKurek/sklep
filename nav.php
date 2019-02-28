<div class="log-bar">
<?php
session_start();

if(empty($_SESSION['user_name'])){
    echo'
        <a href="signin.php?site-title=Logowanie" class="signin">Zaloguj</a>
        <a href="signup.php?site-title=Rejestracja" class="signup">Zarejestruj</a>
    ';
}else{
    echo'
        <div class="user-logged">Witaj <span>'.$_SESSION['user_name'].'</span> </div>
        <button class="site-menu-trigger">&#9776</button>
    ';
}
?>            
            
    <ol class="site-menu">
        <li><a href="index.php">Strona główna</a></li>
        <li><a href="">Twoje konto</a></li>
        <li><a href="add-poster.php?site-title=Dodaj ogłoszenie">Dodaj ogłoszenie</a></li>
        <li><a href="PHP/signout-script.php">Wyloguj</a></li>      
    </ol>
    
</div>       