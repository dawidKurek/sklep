<?php include_once"header.php"; ?>
<body>
    <header>
        <?php include_once"nav.php"; ?>
    </header>
    <main>
        <form class="change-container" method="post" action="PHP/change-address-script.php">
            <?php
                require_once"connect.php";

                $query="SELECT * FROM addresses WHERE id=".$_SESSION['user_id']." ";
                $result=mysqli_query($dbc, $query);
                $row=mysqli_fetch_assoc($result);
            ?>
            <div class="f_l_name">
                <input type="text" name="f_name" placeholder="Imię" value="<?=$row['f_name']?>">
                <input type="text" name="l_name" placeholder="Nazwisko" value="<?=$row['l_name']?>">
            </div>
            <div >
                <input class="street" name="street" type="text" placeholder="ulica" value="<?=$row['street']?>">
                <input class="number" name="number" type="text" placeholder="numer" value="<?=$row['house_num']?>">
            </div>
                <input type="text" name="city" placeholder="miejscowość" value="<?=$row['city']?>">
                <input type="text" name="postal_code" placeholder="kod pocztowy" value="<?=$row['postal-code']?>">
                <input type="text" name="country" placeholder="kraj" value="<?=$row['country']?>">
                
                <div class="error"><?=@$_GET['error']?></div>
                <button type="submit" name="change-address-button">Zmień</button>
        </form>
    </main>
</body>
</html>