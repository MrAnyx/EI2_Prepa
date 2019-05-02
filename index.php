<?php
require __DIR__ . '/header.php';
?>


<form action="connexion.inc.php" method="post">
    <input type="text" name="name" placeholder="Entrez votre Nom : " required>
    <input type="password" name="password" placeholder="Entrez votre Mot de passe : " required>
    <input type="submit" name="submit" value="Submit">
</form>


<?php if(isset($_GET['error']) && $_GET['error'] == "dismatch"){ ?>
    <strong>Cet utilisateur n'existe pas</strong>
<?php } ?>


<?php
require __DIR__ . '/footer.php';
?>
