<?php

namespace app\controllers;
use app\models\Product;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $produtos = Product::find()->all();
        return $this->render('index', ['produtos' => $produtos]);
    }

    public function actionView($id)
    {
        $produto = Product::findOne($id);
        return $this->render('view', ['produto' => $produto]);
    }

}
