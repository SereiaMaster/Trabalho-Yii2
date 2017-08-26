<?php
/* @var $this yii\web\View */
?>
<h1>LISTA DE PRODUTOS</h1>

<?php foreach ($produtos as $key => $produto): ?>
    <div class="col-md-3 produto">
        <h2><?php echo $produto->model; ?></h2>
        <img src="<?php
            if($produto->image == ''){
                echo 'image/palm_logo.jpg';
            }else{
                echo $produto->image;
            }
                ?>" alt="" class="img-responsive">
        <p><?php echo $produto->quantity; ?></p>
        <p>R$ <?php echo number_format($produto->price, 2,',','.')  ?></p>
        <a class="btn btn-info" href="index.php?r=product/view&id=<?php echo $produto->id ?>">Ver mais</a>
    </div>
<?php endforeach; ?>
