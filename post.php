<?php
require __DIR__ . '/header.php';
use App\CommentaireRepository;
$listePost = CommentaireRepository::findAll();
?>

<?php foreach($listePost as $post){ ?>
    <div style="background-color: #AAA; margin-bottom: 10px;">
        <?php echo $post->getId(); ?>
        <?php echo $post->getTitle(); ?>
        <?php echo $post->getContenu(); ?>
        <?php echo $post->getUserId(); ?>
        <?php echo $post->getDatePost(); ?>
    </div>
<?php } ?>


<?php
require __DIR__ . '/footer.php';
?>
