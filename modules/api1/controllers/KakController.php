<?php

namespace app\modules\api1\controllers;

use app\modules\api1\models\Kak;
use yii\web\Controller;

/**
 * Default controller for the `api1` module
 */
class KakController extends Controller
{
    public function behaviors()
    {
        return [
            [
                'class' => \yii\filters\ContentNegotiator::class,
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                ],
            ],
            'corsFilter'  => [
                'class' => \yii\filters\Cors::class,
                'cors'  => [
                    'Origin' => ['http://localhost:3000'],
                    'Access-Control-Request-Method' => ['GET'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age'           => 3600,

                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $query = Kak::find();
        return $query->all();
    }
}
