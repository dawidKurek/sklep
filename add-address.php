<?php include_once"header.php"; ?>
<body>
    <header>
        <?php include_once"nav.php"; ?>
    </header>
    <main>
        <form class="change-container" method="post" action="PHP/add-address-script.php">            
            <div class="f_l_name">
                <input type="text" name="f_name" placeholder="Imię" value="">
                <input type="text" name="l_name" placeholder="Nazwisko" value="">
            </div>
            <div >
                <input class="street" name="street" type="text" placeholder="ulica" value="">
                <input class="number" name="number" type="text" placeholder="numer" value="">
            </div>
                <input type="text" name="city" placeholder="miejscowość" value="">
                <input type="text" name="postal_code" placeholder="kod pocztowy" value="">
                <input type="text" name="country" placeholder="kraj" value="">
                
                <div class="error"><?=@$_GET['error']?></div>
                <button type="submit" name="add-address-button">Dodaj</button>
        </form>
    </main>
</body>
</html>