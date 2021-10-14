<?php
$prenom = null;
if (!empty($_COOKIE[prenom])) {
    $prenom = $_COOKIE[prenom];
}
if (!empty($_POST[prenom])) {
    setcookie('utilisateur', $_POST[prenom]);
    $prenom = $_POST[prenom];

}
?>

<?php if($prenom): ?>
    <h1>Bonjour <?= htmlentities($prenom) ?> !</h1>
    <a href="/"><button name="deco">Déconnexion</button></a>
<?php else: ?>
    <form action="" method="POST">
    <input type="text" name="prenom" placeholder="Entrez votre prénom:">
    <button type="submit">Valider</button>
</form>
<?php endif; ?>
