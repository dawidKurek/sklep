

<?php

require_once"../connect.php";

$query="DELETE FROM posters WHERE id_poster=".$_GET['id_poster']." ";
mysqli_query($dbc, $query);
header("Location: ../my-posters.php");