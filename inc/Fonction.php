<?php
include ('database.php');

function listeActus(){
    $sql = "select * from actus";
    $resultat = mysqli_query(dbconnect(), $sql);
    // $data = mysqli_fetch_assoc($resultat);
    // mysqli_free_result($resultat);
    return $resultat;    
}
function getAllListeActus(){
    $sql = "select * from v_actus";
    $resultat = mysqli_query(dbconnect(), $sql);
    // $data = mysqli_fetch_assoc($resultat);
    // mysqli_free_result($resultat);
    return $resultat;
}

function findActusById($id){
    $sql = "select * from actus where id=$id";
    $resultat = mysqli_query(dbconnect(),$sql);
    return $resultat;
}

function findallimage($id){
     $sql = "select * from image where actu=$id";
    $resultat = mysqli_query(dbconnect(),$sql);
    return $resultat;

}

function slugify($text, $divider='-'){
    // replace non letter or digit by divider
    $text = preg_replace('~[^\pL\d]+~u',$divider,$text);

    // transliterate
    $text = iconv('utf-8','us-ascii//TRANSLIT',$text);

    //remove unwanted characters
    $text = preg_replace('~[^-\w]+~','',$text);

    //trim
    $text = trim($text,$divider);

    //remove duplicate divider
    $text = preg_replace('~-+~',$divider,$text);

    //lowercase
    $text = strtolower($text);

    if(empty($text)){
        return 'n-a';
    }
    return $text;
}

?>