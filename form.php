<?php
//echo 'Hello World!';


// $imie = addslashes(strip_tags($_POST['imie']));
// $nazwisko = addslashes(strip_tags($_POST['nazwisko']));

//echo '<pre>';
// var_export($_POST);
//echo '</pre>';

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$email = $_POST['email'];
$usluga = $_POST['usluga'];
$wyslij_kopie = $_POST['wyslij_kopie'];

$adds = '';

if (isset($_POST['wyslij_kopie'])) {
     $adds .= "Kopia zostala wyslana na $email";
}

echo <<<dowolny_tekst
<link rel="stylesheet" href="styl.css">
<h1>Dziękujemy za zapisanie do formularza</h1>
<p>Twoje imię: {$imie}</p>
<p>Twoje nazwisko: {$nazwisko}</p>
<p>Twój email: {$email}</p>
<p>Twoja usługa: {$usluga}</p>
<p>{$adds}</p>
<style >
h1 {color: tomato}
</style>
dowolny_tekst;

