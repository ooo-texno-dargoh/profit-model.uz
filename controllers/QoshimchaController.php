<?php

namespace app\controllers;

use app\models\Lang;
use app\models\RegionNames;
use app\models\Regions;
use app\models\search\RegionsSearch;
use Yii;

class QoshimchaController extends \yii\web\Controller
{
    public function actionBanklar()
    {
        return $this->render('banklar');
    }

    public function actionHududlar($type=null)
    {
        if($type=='viloyatlar'){
            $searchModel = new RegionsSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            $dataProvider->pagination=['pageSize'=>20];
            return $this->render('hududlar',[
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);

        }
        return $this->render('hududlar');
    }
    public function actionAddRegions()
    {
        if($data=Yii::$app->request->post()){
            debug($data);
        }
        $model=new Regions();
        $name_def=new RegionNames();
        $name_def->lang_id=Lang::find()->where(['short'=>Yii::$app->language])->one()->id;
        $name1=new RegionNames();
        $name2=new RegionNames();
        $name3=new RegionNames();
        $langs=Lang::find()->where(['<>','status',10])->andWhere(['<>','id',$name_def->lang_id])->all();
        $name1->lang_id=$langs[0]->id;
        $name2->lang_id=$langs[1]->id;
        $name3->lang_id=$langs[2]->id;
        return $this->render('add-regions',[
           'model'=>$model,
            'name_def'=>$name_def,
            'name1'=>$name1,
            'name2'=>$name2,
            'name3'=>$name3,
        ]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionIshchiHodimlar()
    {
        return $this->render('ishchi-hodimlar');
    }

    public function actionLavozimlar()
    {
        return $this->render('lavozimlar');
    }

    public function actionOmborlar()
    {
        return $this->render('omborlar');
    }

}
