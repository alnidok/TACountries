<?php

use app\components\widgets\Breadcrumbs;
use yii\helpers\Html;

// SEO
require(Yii::getAlias('@app'.'/views/guide/holidays/article_seo.php'));

$videos = $article->getHolidaysVideos()->all();
$photos = $article->getHolidaysPhotos()->all();

if ($photos) {
    \app\assets\UniteGalleryAsset::register($this);
    $this->registerJsFile('@web/js/holidays-gallery.js', ['depends' => 'app\assets\UniteGalleryAsset']);
}
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
                <h1 class="display-4"><?=$article->name?></h1>
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
                        <img src="<?=$article->image?>" alt="<?=$article->name?>" class="img-fluid" data-action="zoom">
                        <figcaption></figcaption>
                    </figure>
                <?php endif ?>

                <?= $article->text ?>
            </div>
        </div>
    </div>

    <?php if($photos): ?>
        <div id="gallery" style="display: none;" class="mt-5">
            <?php foreach($photos as $photo): ?>
                <img alt="<?=Html::encode($photo->caption)?>" src="<?=$photo->url?>"
                     data-image="<?=$photo->url?>"
                     data-description="<?=Html::encode($photo->caption)?>">
            <?php endforeach ?>
        </div>
    <?php endif ?>
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