<?php
use yii\helpers\Url;

$country_form = explode(',', $article->country->nameForm)[1];
$this->title = "{$article->name}. Праздники $country_form ".date('Y');
$description = $article->getDescription();
$image = $article->getImage();
$this->registerMetaTag(['name' => 'description', 'content' => "{$article->country->emoji} $description"]);
//$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['property' => 'og:locale', 'content' => 'ru_RU']);
$this->registerMetaTag(['property' => 'og:url', 'content' => Url::canonical()]);
$this->registerMetaTag(['property' => 'og:title', 'content' => $this->title]);
$this->registerMetaTag(['property' => 'og:description', 'content' => $description]);
$this->registerMetaTag(['property' => 'og:image', 'content' => $image]);
$this->registerMetaTag(['property' => 'og:type', 'content' => 'article']);
$this->registerMetaTag(['property' => 'og:site_name', 'content' => Yii::$app->name]);
$this->registerMetaTag(['property' => 'og:updated_time', 'content' => date('c', $article->updated_at)]);

$this->registerMetaTag(['name' => 'twitter:card', 'content' => 'summary_large_image']);
$this->registerMetaTag(['name' => 'twitter:title', 'content' => $this->title]);
$this->registerMetaTag(['name' => 'twitter:description', 'content' => $description]);
$this->registerMetaTag(['name' => 'twitter:image', 'content' => $image]);
$this->registerMetaTag(['name' => 'twitter:site', 'content' => Yii::$app->params['social']['twitter']]);
$this->registerMetaTag(['name' => 'twitter:creator', 'content' => Yii::$app->params['social']['twitter']]);

$this->registerMetaTag(['property' => 'article:publisher', 'content' => 'https://facebook.com/'.Yii::$app->params['social']['facebook']]);
$this->registerMetaTag(['property' => 'article:published_time', 'content' => date('c', $article->created_at)]);
$this->registerMetaTag(['property' => 'article:modified_time', 'content' => date('c', $article->updated_at)]);
$this->registerMetaTag(['property' => 'article:tag', 'content' => 'праздники']);

echo $article->jsonLD();