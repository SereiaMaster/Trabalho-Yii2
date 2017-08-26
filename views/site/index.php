<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?php echo $titulo; ?></h1>

        <p class="lead"><?php echo $ano; ?></p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">

            <?php
                foreach ($texto as $value){
                    echo "<div class=\"col-lg-4\">
                            <h2>$value[0]</h2>
            
                            <p>$value[1]</p>
            
                            <p>$value[2]</p>
                        </div>";
                }
            ?>

        </div>

    </div>
</div>
