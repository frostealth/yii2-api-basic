<?php

namespace app\common\controllers;

use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;

/**
 * Class Controller
 *
 * @package app\common\controllers
 */
class Controller extends \yii\rest\Controller
{
    /** @inheritdoc */
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
                [
                    'class' => HttpBearerAuth::className(),
                    'only' => $this->authOnly(),
                    'except' => $this->authExcept(),
                ],
                [
                    'class' => QueryParamAuth::className(),
                    'only' => $this->authOnly(),
                    'except' => $this->authExcept(),
                ],
            ],
        ];

        return $behaviors;
    }

    /**
     * @inheritdoc
     */
    protected function verbs()
    {
        return [
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
        ];
    }

    /**
     * @return array
     */
    protected function authOnly()
    {
        return [];
    }

    /**
     * @return array
     */
    protected function authExcept()
    {
        return [];
    }
}
