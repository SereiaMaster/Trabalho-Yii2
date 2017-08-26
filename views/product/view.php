<?php
/* @var $this yii\web\View */
?>
<h1>DETALHE DO PRODUTO</h1>

<div class="col-md-4 produto">
    <h2><?php echo $produto->model; ?></h2>
    <img src="<?php echo $produto->image?>" alt="Imagem do produto <?php $produto->model; ?>" class="img-responsive">
    <p><?php echo $produto->quantity; ?></p>
    <p>R$ <?php echo number_format($produto->price, 2,',','.')  ?></p>
    <p><?php echo date('d/m/Y', strtotime($produto->data_avaliable)) ?></p>
</div>
