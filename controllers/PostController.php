<?php

namespace app\controllers;
use app\models\Post;
use app\models\AddCommentForm;
use yii\helpers\Html;
/**
 * Description of PostController
 *
 * @author Gleb
 */
class PostController extends AppController {
    
    public function actionIndex(){
        $query = Post::find()->select('id, shortnews,date_news,fullnews,name_news') -> orderBy('id DESC');
        $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'defaultPageSize' => 1]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('posts','pages'));
   } 
   
    public function actionView(){
  //    $post = Post::find()->select('shortnews,date_news,fullnews,name_news')->all(); 
        $id = \Yii::$app->request->get('id');
        $post = Post::findOne($id);
        if(empty($post))
            throw new \yii\web\HttpException(404,'Такой страницы не найдено...');
       
        
        return $this->render('view',compact('post'));
   }
}
