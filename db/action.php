<?php
require_once('./config.php');

$name     = legal_input($_POST['name']);
$email = legal_input($_POST['email']);
if(!empty($name) && !empty($email)){
    //  Sql Query to insert user data into database table

    Insert_data($name,$email);
}else{
    echo "All fields are required";
}

// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
// // function to insert user data into database table
function insert_data($name,$email){

    global  $bdd;

    $sql = "INSERT INTO subcribers (name, email)
                VALUES(:name, :email)";

    $requette = $bdd->prepare($sql);
    $requette->bindValue(":name", $name);
    $requette->bindValue(":email", $email);
    $requette->execute();
// on recupere d'id de l'utilisateur
    $ID = $bdd->lastInsertId();
    if($ID)
    {
        echo "Thanks for subscribing to our new letter.";
    }
    else{
        echo  "Error: " . $sql . "<br>";
    }
}