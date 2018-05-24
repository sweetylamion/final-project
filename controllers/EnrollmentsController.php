<?php

namespace app\controllers;
use yii;
use app\models\Enrollments;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;


class EnrollmentsController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],


        ];
    }
    public function actionCreate()
    {
        $model = new Enrollments;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['enrollments/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Enrollments::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('enrollments','id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/enrollments/index']);
    }

    public function actionIndex()
    {
        $pro = Enrollments::find()->orderBy('id')->all();
        
        return $this->render('index',['pro'=>$pro]);

    }

    public function actionUpdate($id)
    {
        $model = Enrollments::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/enrollments/view', 'id'=>$id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Enrollments::findOne($id);

        return $this->render('view',compact('model'));
    }

}