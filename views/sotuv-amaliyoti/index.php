<?php
/* @var $this yii\web\View */

use yii\bootstrap\Modal;
use yii\helpers\Html;
//require __DIR__ . '/../layouts/main.php'; ;
Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'toggleButton' => ['label' => 'click me'],
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => false],
]);

echo 'Say hello...';

Modal::end();
?>
<?php
Modal::begin([
    'header' => '<h2>Show Modal</h2>',
    'toggleButton' => ['label' => 'click me'],
    'id' => 'modal-opened',
    'size' => 'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => false,'style'=>'z-index:1000000'],
]);

echo 'Modal Opened';

Modal::end();
?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-phone icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>Modals
                    <div class="page-title-subheading">Wide selection of modal dialogs styles and animations available.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                        Buttons
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span>
                                                            Inbox
                                                        </span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span>
                                                            Book
                                                        </span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span>
                                                            Picture
                                                        </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                    <i class="nav-link-icon lnr-file-empty"></i>
                                    <span>
                                                            File Disabled
                                                        </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>    </div>
    </div>            <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="card-title">Basic Examples</div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Basic Modal
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Long Content
                    </button>
                    <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                    <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#"  data-toggle="modal" data-target="#myModal">show</a>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
<!--                        <img src="--><?//=Yii::$app->homeUrl.'web/image/'.$item->image?><!--" class="img-responsive" alt="">-->
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>bla</h3>

                    <div class="price_single">
<!--                        <span class="reducedfrom ">--><?//=$item->price.' сум'?><!--</span>-->

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Краткое описание:</h4>
<!--                    <p class="quick_desc">--><?//=$item->short?><!--</p>-->
                    <div class="add-to">
<!--                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="--><?//=$item->alias?><!--" data-name="--><?//=$item->titile?><!--" data-summary="summary --><?//=$item->alias?><!--" data-price="--><?//=$item->price ?><!--" data-quantity="1" data-image="--><?//=Yii::$app->homeUrl.'web/image/'.$item->image?><!--">Добавить в корзину</button>-->
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" style="z-index: 200" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
