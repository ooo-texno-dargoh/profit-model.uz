<?php

namespace app\controllers;

use app\models\Bank;
use app\models\CitytownNames;
use app\models\Citytowns;
use app\models\Lang;
use app\models\RegionNames;
use app\models\Regions;
use app\models\Roles;
use app\models\search\BankSearch;
use app\models\search\CitytownNamesSearch;
use app\models\search\CitytownsSearch;
use app\models\search\RegionsSearch;
use app\models\search\RolesSearch;
use app\models\search\WherehouseGroupsSearch;
use app\models\User;
use app\models\WherehouseGroups;
use Yii;
use yii\base\Exception;
use yii\base\Model;
use yii\web\UploadedFile;

class QoshimchaController extends \yii\web\Controller
{
    public function actionBanklar()
    {
        $searchModel = new BankSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('banklar',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionAddBank()
    {
        $model=new Bank();
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-bank','id'=>$model->id]);
        return $this->render('add-bank',[
            'model'=>$model,
        ]);
    }
    public function actionViewBank($id){
        return $this->render('view-bank',[
            'model'=>Bank::findOne($id),
        ]);
    }
    public function actionUpdateBank($id)
    {
        $model=Bank::findOne($id);
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-bank','id'=>$model->id]);
        return $this->render('update-bank',[
            'model'=>$model,
        ]);
    }
    public function actionDeleteBank($id)
    {
        $model=Bank::findOne($id);
        $model->status=10;
        $model->save();
        return $this->redirect(['banklar']);
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
        $searchModel = new CitytownsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('citytowns',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionAddRegions()
    {
        $model=new Regions();
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-regions','id'=>$model->id]);
        return $this->render('add-regions',[
           'model'=>$model,
        ]);
    }
    public function actionAddCitytowns($region_id=null)
    {
        $model=new Citytowns();
        if($region_id)
            $model->region_id=$region_id;
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-citytowns','id'=>$model->id]);
        return $this->render('add-citytowns',[
           'model'=>$model,
        ]);
    }
    public function actionUpdateRegions($id)
    {
        $model=Regions::findOne($id);
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-regions','id'=>$model->id]);
        return $this->render('update-regions',[
           'model'=>$model,
        ]);
    }
    public function actionUpdateCitytowns($id)
    {
        $model=Citytowns::findOne($id);
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-citytowns','id'=>$model->id]);
        return $this->render('update-citytowns',[
           'model'=>$model,
        ]);
    }
    public function actionDeleteRegions($id)
    {
        $model=Regions::findOne($id);
        $model->status=10;
        $model->save();
            return $this->redirect(['hududlar','type'=>'viloyatlar']);
    }
    public function actionDeleteCitytowns($id)
    {
        $model=Citytowns::findOne($id);
        $model->status=10;
        $model->save();
            return $this->redirect(['hududlar','type'=>'tumanlar']);
    }

    public function actionViewRegions($id){
        return $this->render('view-regions',[
            'model'=>Regions::findOne($id),
        ]);
    }

    public function actionViewCitytowns($id){
        return $this->render('view-citytowns',[
            'model'=>Citytowns::findOne($id),
        ]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionIshchiHodimlar()
    {
        if($id=Yii::$app->request->post()) {
            $id=$id['id'];
            $model = User::findOne($id);
            $old = $model->photo;
            $oldPass = $model->password;
            if ($model->load(Yii::$app->request->post())) {

                if ($model->password) {
                    try {
                        $model->password = Yii::$app->security->generatePasswordHash($model->password);
                    } catch (Exception $e) {
                    }
                } else {
                    $model->password = $oldPass;
                }
                $date = date('Y-m-d-h-i-s');
                if ($model->photo = UploadedFile::getInstance($model, 'photo')) {
                    $model->photo->saveAs(Yii::$app->basePath . '/web/upload/pictures/' . $date . '.' . $model->photo->extension);
                    $model->photo = $date . '.' . $model->photo->extension;
                } else {
                    $model->photo = $old;
                }
//            debug($model);
//            exit();
                $model->save();

                return $this->render('ishchi-hodimlar',['activeTab'=>'tab-'.$model->rolequ->id.'0']);
            }
        }
        return $this->render('ishchi-hodimlar');
    }
    public function actionAddUser()
    {
        $model=new User();
        $model->client_id=0;
        if($model->load(Yii::$app->request->post()) )
        {
            if ($model->password) {
                try {
                    $model->password = Yii::$app->security->generatePasswordHash($model->password);
                } catch (Exception $e) {
                    $model->password = 123;
                }
            } else {
                $model->password = 123;
            }
            $date = date('Y-m-d-h-i-s');
            if ($model->photo = UploadedFile::getInstance($model, 'photo')) {
                $model->photo->saveAs(Yii::$app->basePath . '/web/upload/pictures/' . $date . '.' . $model->photo->extension);
                $model->photo = $date . '.' . $model->photo->extension;
            } else {
                $model->photo = 'avatar.jpg';
            }
//            debug($model);
//            exit();
            $model->save();
            return $this->redirect(['ishchi-hodimlar','activeTab'=>'tab-'.$model->rolequ->id.'0']);
        }
        return $this->render('add-user',[
            'model'=>$model,
        ]);
    }
    public function actionLavozimlar()
    {
        $searchModel = new RolesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('lavozimlar',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
//        return $this->render('lavozimlar');
    }
    public function actionAddRole()
    {
        $model=new Roles();
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-role','id'=>$model->id]);
        return $this->render('add-role',[
            'model'=>$model,
        ]);
    }
    public function actionUpdateRole($id)
    {
        $model=Roles::findOne($id);
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-role','id'=>$model->id]);
        return $this->render('update-role',[
            'model'=>$model,
        ]);
    }
    public function actionViewRole($id){
        return $this->render('view-role',[
            'model'=>Roles::findOne($id),
        ]);
    }
    public function actionDeleteRole($id)
    {
        $model=Roles::findOne($id);
        $model->status=10;
        $model->save();
        return $this->redirect(['lavozimlar']);
    }

    public function actionOmborlar()
    {
        $searchModel = new WherehouseGroupsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('omborlar',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionAddWherehouseGroup()
    {
        $model=new WherehouseGroups();
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-wherehouse-group','id'=>$model->id]);
        return $this->render('add-wherehouse-group',[
            'model'=>$model,
        ]);
    }
    public function actionViewWherehouseGroup($id){
        return $this->render('view-wherehouse-group',[
            'model'=>WherehouseGroups::findOne($id),
        ]);
    }

    public function actionUpdateWherehouseGroup($id)
    {
        $model=WherehouseGroups::findOne($id);
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view-wherehouse-group','id'=>$model->id]);
        return $this->render('update-wherehouse-group',[
            'model'=>$model,
        ]);
    }
    public function actionDeleteWherehouseGroup($id)
    {
        $model=WherehouseGroups::findOne($id);
        $model->status=10;
        $model->save();
        return $this->redirect(['omborlar']);
    }

    public function actionUpdateUser()
    {
        $model=new User();

        if($model->load(Yii::$app->request->post())){
            $olduser=User::findOne($model->id);
            debug(Yii::$app->request->post('id'));
            debug($olduser);
            exit();
        }

    }
    public function actionDeleteUser($id){
        $model=User::findOne($id);
        $model->status=10;
        $model->save();
        return $this->redirect(['ishchi-hodimlar']);
    }
}
