<?php

use app\components\widgets\Breadcrumbs;
use yii\helpers\Url;

echo $article->jsonLD();

$this->title = "{$article->name}. {$article->country->name} ".date('Y');
$description = $article->getDescription();
$image = $article->getImage();
$videos = $article->getHolidaysVideos()->all();

$this->registerLinkTag(['rel' => 'canonical', 'href' => Url::canonical()]);
$this->registerMetaTag(['name' => 'description', 'content' => $description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
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
//$this->registerMetaTag(['name' => 'twitter:creator', 'content' => Yii::$app->params['social']['twitter']]);

$this->registerMetaTag(['property' => 'article:publisher', 'content' => 'https://facebook.com/'.Yii::$app->params['social']['facebook']]);
$this->registerMetaTag(['property' => 'article:published_time', 'content' => date('c', $article->created_at)]);
$this->registerMetaTag(['property' => 'article:modified_time', 'content' => date('c', $article->updated_at)]);
$this->registerMetaTag(['property' => 'article:tag', 'content' => 'праздники']);
?>

<?= Breadcrumbs::widget([
    'wrapOptions' => [
        'class' => 'bg-gradient text-white'
    ],
    'links' => [
        ['label' => 'Страны', 'url' => ['/guide']],
        ['label' => $article->country->name, 'url' => ['/guide/'.$article->country->slug]],
        ['label' => 'Праздники', 'url' => ['/guide/'.$article->country->slug.'/holidays']],
    ],
]) ?>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-9">
                <span class="lead"><?=$article->date()?></span>
                <h1 class="display-4"><?= $article->name ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-9">
                <?php if ($article->image): ?>
                    <figure class="w-50 mb-5 center">
                        <img src="<?=$article->image?>" alt="" class="img-fluid" data-action="zoom">
                        <figcaption></figcaption>
                    </figure>
                <?php endif ?>

                <?= $article->text ?>
            </div>
        </div>
    </div>
</section>

<?php if($videos): ?>
<section>
    <div class="container">
        <h2>Видеоматериалы об этом празднике</h2>
        <div class="row justify-content-center">
            <?php foreach($videos as $video): ?>
                <?php $data = unserialize($video->data) ?>
                <div class="col-lg-6">
                    <figure class="figure d-block">
                        <div class="video-cover box-shadow">
                            <?php if($data['image']): ?><img alt="<?=$data['title']?>" src="<?=$data['image']?>" class="bg-image"/><?php endif ?>
                            <div class="video-play-icon">
                                <i class="icon-controller-play"></i>
                            </div>
                            <div class="embed-responsive embed-responsive-<?=$data['resolution']?>">
                                <iframe class="embed-responsive-item" data-src="<?=$data['src']?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <figcaption class="figure-caption text-right"><?=$data['title']?><br>© <?=$data['author']?> <?=$data['date']?></figcaption>
                    </figure>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>