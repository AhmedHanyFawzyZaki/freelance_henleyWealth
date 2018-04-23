<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HomeController extends FrontController {

    public function actionIndex() {
        $articles = BlogPost::model()->findAll(array('condition' => 'active=1', 'limit' => 2, 'order' => 'id desc'));
        $model = Page::model()->findByPk(1);
        Yii::app()->clientScript->registerMetaTag($model->meta_tags, 'keywords');
        Yii::app()->clientScript->registerMetaTag($model->meta_description, 'description');
        $this->render('index', array('articles' => $articles));
    }

    public function actionPage() {
        if (isset($_REQUEST['slug'])) {
            $model = Page::model()->findByAttributes(array('url' => $_REQUEST['slug']));
            if ($model) {
                Yii::app()->clientScript->registerMetaTag($model->meta_tags, 'keywords');
                Yii::app()->clientScript->registerMetaTag($model->meta_description, 'description');
                $this->render($_REQUEST['slug'], array('model' => $model));
            } else {
                echo '<img src="' . Yii::app()->request->getBaseUrl(true) . '/img/cons.gif" style="width:100%">';
            }
        } else {
            echo '<img src="' . Yii::app()->request->getBaseUrl(true) . '/img/cons.gif" style="width:100%">';
        }
    }

    public function actionBlog() {
        $blogs = BlogPost::model()->findAll(array('condition' => 'active=1', 'order' => 'id desc'));
        $this->render('blog', array('blogs' => $blogs));
    }

    public function actionArticle() {
        if (isset($_REQUEST['slug'])) {
            $model = BlogPost::model()->findByAttributes(array('slug' => $_REQUEST['slug']));
            if ($model) {
                $this->render('article', array('model' => $model));
            } else {
                echo '<img src="' . Yii::app()->request->getBaseUrl(true) . '/img/cons.gif" style="width:100%">';
            }
        } else {
            echo '<img src="' . Yii::app()->request->getBaseUrl(true) . '/img/cons.gif" style="width:100%">';
        }
    }

}
