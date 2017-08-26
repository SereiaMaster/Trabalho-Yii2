<?php
/* @var $this yii\web\View */
?>
<h1><?= $titulo ?></h1>

<p>
    <?= $texto ?>
</p>

<?php
    echo '<ul>';
    foreach ($posts as $post){
        echo '<li>';
        echo '<h2>'.$post->title.'</h2>';
        echo '<p>'.$post->description.'</p>';
        echo '</li>';
    }
    echo '</ul>';
?>

