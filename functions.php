<?php

function debug($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";

}

function gl($data){
    $texts = [
        'Bosh sahifa'=>[
            'ru'=>'glavnaya',
            'krl'=>'Bosh sahifa krill',
            'en'=>'Home',
            ],
        'Kirish'=>[
            'ru'=>'login rus',
            'krl'=>'login krill',
            'en'=>'Login en',
            ],


    ];
$result=$texts[$data][Yii::$app->language] ? $texts[$data][Yii::$app->language] : $data;
    return $result;
}