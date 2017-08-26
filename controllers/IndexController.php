<?php

namespace app\controllers;

use app\models\Post;

class IndexController extends \yii\web\Controller
{
    public function actionContato()
    {
        return $this->render('contato');
    }

    public function actionIndex()
    {
        $posts = Post::find()->all();


        $titulo = 'Todos os Posts';
        $texto = 'Confira todos os posts';
        return $this->render('index',
            [
                'titulo' => $titulo,
                'texto' => $texto,
                'posts' => $posts,
            ]);
    }

    public function actionSobre()
    {
        return $this->render('sobre');
    }



}
