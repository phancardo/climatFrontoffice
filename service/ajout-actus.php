<?php
include ('../inc/Fonction.php');

foreach($_POST as $p){
    if(empty($p)){
        header('Location:nouveau-actus.php');
        exit;
    }
}

$titre = $_POST['titre'];
$categorie = $_POST['categorie'];
$resume = $_POST['resume'];
$contenu = $_POST['contenu'];

saveActus($titre,$categorie,$resume,$contenu);

header('Location:liste-actus.php');

?>