<?php
require __DIR__ . '/header.php';
?>



<form action="post.inc.php" method="post">
    <input type="text" name="title" placeholder="title : ">
    <textarea type="text" name="contenu" placeholder="Entrez votre contenu : " style = "min-width: 500px;"></textarea>
    <input type="submit" name="submit" value="submit">
</form>



<?php
require __DIR__ . '/footer.php';
?>
