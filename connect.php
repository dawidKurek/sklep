<?php

$host='localhost';
$user='root';
$pwd='';
$name='sklep';

$dbc=mysqli_connect($host,$user,$pwd,$name)
    or die("Błąd połączenia z bazą danych");
