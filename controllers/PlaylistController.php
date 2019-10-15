<?php

namespace app\controllers;

class PlaylistController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionJoriyPlaylist()
    {
        return $this->render('joriy-playlist');
    }

}
