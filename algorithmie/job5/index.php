<?php
session_start();
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = array();
}
if (!empty($_POST['prenom'])) {
    array_push($_SESSION['prenoms'], $_POST['prenom']);
}


if ($_GET['action'] == "reset") {
    unset($_SESSION['prenoms']);
    $_SESSION['prenoms'] = array();
}

if (isset($_SESSION['prenoms'])) {
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br />" ;
    }
}

?>
    <form action="/" method="POST">
    <input type="text" name="prenom" placeholder="Entrez votre prénom:">
    <button type="submit">Connexion</button>
    <a href="?action=reset">Reset</a>