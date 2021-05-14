<?php

namespace app\controllers;

use Yii;
use app\models\Item;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItemController implements the CRUD actions for Item model.
 */
class ItemController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Item models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Item::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Item model.
     * @param integer $idItem
     * @param integer $Produto_id
     * @param integer $Item
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idItem, $Produto_id, $Item)
    {
        return $this->render('view', [
            'model' => $this->findModel($idItem, $Produto_id, $Item),
        ]);
    }

    /**
     * Creates a new Item model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Item();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idItem' => $model->idItem, 'Produto_id' => $model->Produto_id, 'Item' => $model->Item]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Item model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idItem
     * @param integer $Produto_id
     * @param integer $Item
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idItem, $Produto_id, $Item)
    {
        $model = $this->findModel($idItem, $Produto_id, $Item);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idItem' => $model->idItem, 'Produto_id' => $model->Produto_id, 'Item' => $model->Item]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Item model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idItem
     * @param integer $Produto_id
     * @param integer $Item
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idItem, $Produto_id, $Item)
    {
        $this->findModel($idItem, $Produto_id, $Item)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Item model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idItem
     * @param integer $Produto_id
     * @param integer $Item
     * @return Item the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idItem, $Produto_id, $Item)
    {
        if (($model = Item::findOne(['idItem' => $idItem, 'Produto_id' => $Produto_id, 'Item' => $Item])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
