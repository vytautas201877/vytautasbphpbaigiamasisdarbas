<?php
// Nustatome pagr. $page masyvui
// vertes atitinkamai pagal tai, ką daro mūsų puslapis

$page['title'] = 'MVC karkasas!';
$page['show_footer'] = true;
$page['show_header'] = true;
$page['show_main'] = false;
$page['stylesheet'] = 'cv.css';

// Visus 'content' skiltyje esančius kintamuosius
// nustatome pasirinktinai pagal tai, kaip suformavome
// template į kurį juos spausdinsime.
$page['content']['title'] = 'Sveiki atvykę į mano showcase!';
$text = "Iveskite skaiciu";

//var_dump($_POST);
if (isset($_POST["vardas"])) {
    $vardas = $_POST["vardas"];
     $text = "pakelta kvadratu=" . kvadratas($vardas);
} else {
    $text = "Neivesti duomenys";
}
function kvadratas($vardas) {
    return $vardas ** 2;
}

$page['content']['skaicius'] = $text;

// Index.php esame nurodę išspausdinti 'rendered' indekso
// turinį iš 'content'. Todėl šiam indeksui priskiriame
// sugeneruotą HTML kodą, gaunamą iš render_page funkcijos

// Funkcija render_page, $page masyvą perduoda į template, kurią
// nurodome antrame parametre. 
$page['content']['rendered'] = render_page($page, 'page-showcase');