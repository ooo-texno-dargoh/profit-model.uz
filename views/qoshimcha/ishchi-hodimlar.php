<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$roles=\app\models\Roles::find()->where(['<>','status',10])->all();
$users=\app\models\User::find()->where(['<>','status',10])->all();
?>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>Ishchi hodimlar
                </div>
            </div>
            <div class="page-title-actions">
                <a href="<?=Yii::$app->urlManager->createUrl(['qoshimcha/add-user'])?>" class="pull-right btn btn-success"><i class="fa fa-plus-square"></i></a>

            </div>
        </div>
    </div>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link <?= $activeTab==null ? 'active': ''?>" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Barchasi</span>
            </a>
        </li>
       <?php
       foreach ($roles as $role) :?>
           <li class="nav-item">
               <a role="tab" class="nav-link <?= $activeTab=='tab-'.$role->id.'0' ? 'active': ''?>" id="tab-<?=$role->id?>0" data-toggle="tab" href="#tab-content-<?=$role->id?>0">
                   <span><?=$role->name?></span>
               </a>
           </li>
       <?php
       endforeach;
       ?>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <?php foreach ($users as $user) :?>
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>
                                <i style="color: <?=$user->is_active==1 ? 'green':'red'?>"><?=$user->fio?></i>
                                <div class="btn-actions-pane-right">
                                    <div class="nav">
                                        <a data-toggle="tab" href="#tab-view-user-<?=$user->id?>" class="btn-pill btn-wide active btn btn-outline-alternate btn-sm"><i class="fa fa-eye"></i></a>
                                        <a data-toggle="tab" href="#tab-update-user-<?=$user->id?>" class="btn-pill btn-wide mr-1 ml-1  btn btn-outline-alternate btn-sm"><i class="fa fa-user-edit"></i></a>
                                        <?=Html::a(Yii::t('app', '<span class="fa fa-trash"></span>  '), ['delete-user', 'id' => $user->id], [
                                            'class' => 'btn-pill btn-wide  btn btn-outline-danger btn-sm ml-1 ',
                                            'data' => [
                                                'confirm' => Yii::t('app', 'Haqiqatan ham ushbu ma\'lumotni o\'chirmoqchimisiz?'),
                                                'method' => 'post',
                                            ],
                                        ]);?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-view-user-<?=$user->id?>" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="<?=Yii::$app->homeUrl?>upload/pictures/<?=$user->photo?>" alt class="rounded-circle mx-auto d-block" style="height: 130px;width: 130px">
                                                <p style="text-align: center;"><?=$user->rolequ->name?></p>
                                             </div>
                                            <div class="col-lg-8">
                                                <table class="mb-0 table table-borderless">
                                                    <tr>
                                                        <th>Login</th>
                                                        <td><?=$user->username?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Telefon</th>
                                                        <td><?=$user->phone?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Telegram</th>
                                                        <td><?=$user->telegram?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Online</th>
                                                        <td><?=$user->online?> soat</td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
<!--                            <div class="d-block text-right card-footer">-->
<!--                                <a href="javascript:void(0);" class="btn-wide btn btn-success">Save</a>-->
<!--                            </div>-->
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        <?php
        foreach ($roles as $role) :?>
        <div class="tab-pane tabs-animation fade" id="tab-content-<?=$role->id?>0" role="tabpanel">
            <div class="row">
        <?php
        if(!sizeof($role->users))
            echo '<div class="container"><p style="color: red">Birirta '.$role->name .' topilmadi</p></div>';
            foreach ($role->users as $user) :?>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>
                            <i style="color: <?=$user->is_active==1 ? 'green':'red'?>"><?=$user->fio?></i>
                            <div class="btn-actions-pane-right">
                                <div class="nav">
                                    <a data-toggle="tab" href="#tab-view-user-<?=$user->id.'aa'.$role->id?>" class="btn-pill btn-wide active btn btn-outline-alternate btn-sm"><i class="fa fa-eye"></i></a>
                                    <a data-toggle="tab" href="#tab-update-user-<?=$user->id.'aa'.$role->id?>" class="btn-pill btn-wide mr-1 ml-1  btn btn-outline-alternate btn-sm"><i class="fa fa-user-edit"></i></a>
                                    <?=Html::a(Yii::t('app', '<span class="fa fa-trash"></span>  '), ['delete-user', 'id' => $user->id], [
                                        'class' => 'btn-pill btn-wide  btn btn-outline-danger btn-sm ml-1 ',
                                        'data' => [
                                            'confirm' => Yii::t('app', 'Haqiqatan ham ushbu ma\'lumotni o\'chirmoqchimisiz?'),
                                            'method' => 'post',
                                        ],
                                    ]);?>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-view-user-<?=$user->id.'aa'.$role->id?>" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="<?=Yii::$app->homeUrl?>upload/pictures/<?=$user->photo?>" alt class="rounded-circle mx-auto d-block" style="height: 130px;width: 130px">
                                            <p style="text-align: center;"><?=$user->rolequ->name?></p>
                                        </div>
                                        <div class="col-lg-8">
                                            <table class="mb-0 table table-borderless">
                                                <tr>
                                                    <th>Login</th>
                                                    <td><?=$user->username?></td>
                                                </tr>
                                                <tr>
                                                    <th>Telefon</th>
                                                    <td><?=$user->phone?></td>
                                                </tr>
                                                <tr>
                                                    <th>Telegram</th>
                                                    <td><?=$user->telegram?></td>
                                                </tr>
                                                <tr>
                                                    <th>Online</th>
                                                    <td><?=$user->online?> soat</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--                            <div class="d-block text-right card-footer">-->
                        <!--                                <a href="javascript:void(0);" class="btn-wide btn btn-success">Save</a>-->
                        <!--                            </div>-->
                    </div>
                </div>
        <?php
        endforeach;?>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>

