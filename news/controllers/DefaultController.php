<?php

namespace nhockizi\modules\news\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        echo 1;die;
        return $this->render('index');
    }
    // public function actions() {
    //     return [
    //         'error' => [
    //             'class' => 'yii\web\ErrorAction',
    //         ],
    //         'list' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\ListAction',
    //         ],
    //         'change-status' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\ChangeStatusAction',
    //         ],
    //         'optimizer' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\OptimizerAction',
    //         ],
    //         'scan' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\ScanAction',
    //         ],
    //         'translate' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\TranslateAction',
    //         ],
    //         'save' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\SaveAction',
    //         ],
    //         'dialog' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\DialogAction',
    //         ],
    //         'message' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\MessageAction',
    //         ],
    //         'view' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\ViewAction',
    //         ],
    //         'create' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\CreateAction',
    //         ],
    //         'update' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\UpdateAction',
    //         ],
    //         'delete' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\DeleteAction',
    //         ],
    //         'delete-source' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\DeleteSourceAction',
    //         ],
    //         'import' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\ImportAction',
    //         ],
    //         'export' => [
    //             'class' => 'vendor\nhockizi\modules\news\controllers\actions\ExportAction',
    //         ],
    //     ];
    // }
}
