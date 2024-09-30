<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\User;
use yii\web\NotFoundHttpException;

class UserController extends Controller
{
    /**
     * Behaviors for access control
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['view', 'update'],
                'rules' => [
                    [
                        'actions' => ['view', 'update'],
                        'allow' => true,
                        'roles' => ['@'], // Only logged-in users can access
                    ],
                ],
            ],
        ];
    }

    /**
     * Displays the logged-in user's profile.
     * @return string
     */
    public function actionView()
    {
        $model = User::findOne(Yii::$app->user->id);
        if ($model === null) {
            throw new NotFoundHttpException('The requested user does not exist.');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Allows the user to update their profile details.
     * @return string|\yii\web\Response
     */
    public function actionUpdate()
    {
        $model = User::findOne(Yii::$app->user->id);
        if ($model === null) {
            throw new NotFoundHttpException('The requested user does not exist.');
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
}
