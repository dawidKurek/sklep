<?php require_once"header.php";?>
<body>
<header>
<?php require_once"nav.php";  ?>

</header>
<main>
    <div class="poster-container">
        <?php
            require_once"connect.php";

            $query="SELECT * FROM posters WHERE id_poster=".$_GET['id_poster']." ";
            $result=mysqli_query($dbc, $query);
            $row=mysqli_fetch_assoc($result);         
        ?>
            <div id="image">
                <img src="img/<?=$row['pic1']?>">
            </div>

            <div class="gallery">
                <?php    
                    $pictures=array($row['pic1'], $row['pic2'], $row['pic3'], $row['pic4'], $row['pic5']);
                    
                    $i=1;
                    foreach($pictures as $pic){
                        if($pic!=''){
                            echo'<div onClick="changeImage('.$i++.')" class="small-pic"><img src="img/'.$pic.'"></div>';
                        }
                    } 
                ?>   
                
            </div>

            <h2 class="price"><?=$row['price']?> zł</h2>
            <p class="title"><?=$row['title']?></p>

            <div class="description">
                <?=$row['desc']?>
            </div>
            <a class="a-button" href="my-poster-edit.php?id_poster=<?=$_GET['id_poster']?>">Edytuj</a>
            <a class="del-button" href="my-poster-delete.php?id_poster=<?=$_GET['id_poster']?>">Usuń</a>
            
        

    </div>
</main>
<script>
    var array = <?php echo json_encode($pictures); ?>;
    var image = document.getElementById('image');

    
    function changeImage(number){
        
        switch (number){
            case 1:
                image.innerHTML='<img src="img/' +array[0]+ '">' ;
            break;
            case 2:
                image.innerHTML='<img src="img/' +array[1]+ '">' ;
            break;
            case 3:
                image.innerHTML='<img src="img/' +array[2]+ '">' ;
            break;
            case 4:
                image.innerHTML='<img src="img/' +array[3]+ '">' ;
            break;
            case 5:
                image.innerHTML='<img src="img/' +array[4]+ '">' ;
            break;
        }
    }
</script>
</body>