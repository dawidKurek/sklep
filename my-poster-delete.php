<?php include_once"header.php";?>
<body>
    <div>
        Czy napewno chcesz usunąć ogłoszenie?
        <div class="delete_box">
            <a class="deletting_poster" href="PHP/my-poster-delete-script.php?id_poster=<?=$_GET['id_poster']?>">TAK</a>
            <a class="deletting_poster" href="my-posters.php">NIE</a>
        </div>
        
    </div>
</body>
</html>