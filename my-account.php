<?php require_once"header.php"; ?>

<body>
<header>
    <?php require_once"nav.php"; ?>
</header>

<body>
    <main>
        <div class="container my-account-container">
            <?php
            require_once"connect.php";

            $query="SELECT * FROM users WHERE id=".$_SESSION['user_id']." ";
            $result=mysqli_query($dbc, $query);
            $row=mysqli_fetch_assoc($result);
            ?>
            <div class="acc-detail-box">
                <h3>LOGIN</h3> 
                <p class="acc-detail"><?=$row['username']?></p>
            </div>
            <div class="acc-detail-box">
                <h3>E-MAIL <a class="change-acc-detail" href="change-email.php">Zmień</a></h3>
                <p class="acc-detail"><?=$row['email']?></p>
            </div>
            <div class="acc-detail-box">
                <h3>NR. TELEFONU 
                <?php                   
                    $query="SELECT * FROM tel_num WHERE id=".$_SESSION['user_id']." ";
                    $result=mysqli_query($dbc, $query);
                    $row=mysqli_fetch_assoc($result);

                    if(mysqli_num_rows($result)==0){
                        //numer nie zostal ustalony\
                        echo'<a class="change-acc-detail" href="change-tel-num.php">Dodaj</a>';
                    }else{
                        echo'<a class="change-acc-detail" href="change-tel-num.php?number='.$row['number'].' ">Zmień</a>';
                    }
                ?>
                </h3>
                <p class="acc-detail"><?=@$row['number']?></p>
            </div>
            <div class="acc-detail-box">
                <h3>ADRES DO WYSYŁKI
                    <?php                   
                    $query="SELECT * FROM addresses WHERE id=".$_SESSION['user_id']." ";
                    $result=mysqli_query($dbc, $query);

                    if(mysqli_num_rows($result)==0){
                        //adres nie zostal ustalony\
                        echo'<a class="change-acc-detail" href="add-address.php">Dodaj</a>';
                    }else{
                        //adres zostal ustalony
                        echo'<a class="change-acc-detail" href="change-address.php">Zmień</a>';

                        $row=mysqli_fetch_assoc($result);
                        $f_name=$row['f_name'];
                        $l_name=$row['l_name'];
                        $street=$row['street'];
                        $house_num=$row['house_num'];
                        $city=$row['city'];
                        $postal_code=$row['postal-code'];
                        $country=$row['country'];
                    }
                    ?>
                    
                </h3>
                <p class="acc-detail"><?=@$f_name.' '.@$l_name?></p>
                <p class="acc-detail"><?=@$street.' '.@$house_num?></p>
                <p class="acc-detail"><?=@$city?></p>
                <p class="acc-detail"><?=@$postal_code?></p>
                <p class="acc-detail"><?=@$country?></p>
            </div>
        </div>
    </main>
</body>
</html>