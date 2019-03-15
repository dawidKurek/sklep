<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <title>Sklep</title>
</head>
<body>
    <header>
        <?php require_once"connect.php"; include_once"nav.php"; ?>

        <form class="search-bar" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php /* if(isset($_POST['submit'])){ $searchValue=$_POST['search'];} */ ?>
            <input type="text" name="search"  id="search" value="<?=@$_GET['search']?>" placeholder="czego szukasz?" required>
            <button type="submit" name="submit" class="submit" >Szukaj</button>
        </form>
    </header>
     
    <main>
        <ul>
        <?php

        if(!isset($_GET['submit'])){

            $query="SELECT * FROM posters ORDER BY id_poster DESC";
            $result=mysqli_query($dbc, $query);

                while($row=mysqli_fetch_assoc($result)){                  
                    include"echo-poster.php";
                }
        }else{
            
            $search=mysqli_real_escape_string($dbc, $_GET['search']);
            $search_explode=explode(' ', $search);

            $search_query="SELECT * FROM posters";

            foreach($search_explode as $word){

                $like_query_list[]=" title LIKE '%$word%' ";
            }
            $like_query=implode(' OR ', $like_query_list);
            $search_query.=" WHERE $like_query";

            $result=mysqli_query($dbc, $search_query);

            if(mysqli_num_rows($result)==0){
                $error="Nie znaleziono wyników";
            }else{

                while($row=mysqli_fetch_assoc($result)){
                    include"echo-poster.php";
                }
            }          
        }     
        ?>
            
        </ul>
        <div class="error"><?=@$error?></div>
    </main>
</body>
<script>

    function checkInput(){
        var search=document.getElementById('search').value;
        var searchInput=document.getElementById('search');

        if(search==""){
            searchInput.style.border="1px solid red";
            
        }else{
            location.href="add-poster.php";
        }
    }
</script>
</html>