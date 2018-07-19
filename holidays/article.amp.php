<?php
use app\components\widgets\Breadcrumbs;

// SEO
require(Yii::getAlias('@app'.'/views/guide/holidays/article_seo.php'));

$this->params['amp-components'] = ['carousel', 'youtube', 'vimeo'];

$videos = $article->getHolidaysVideos()->all();
$photos = $article->getHolidaysPhotos()->all();

$text = preg_replace('#<img.*?src="(.*?)".*?>#', '<div class="fixed-height-container"><amp-img src="$1" class="contain" layout="fill"></amp-img></div>', $article->text);

function getVideoData($url) {
    $is_youtube = strpos($url, 'youtube') !== false;
    $is_vimeo = strpos($url, 'vimeo') !== false;

    if ($is_youtube) {
        // https://www.youtube.com/watch?v=PPuU6OiU2LI
        preg_match('#watch\?v=([-\w+]+)#', $url, $id);
        return [
            'youtube',
            $id[1] ?? null
        ];
    }

    if ($is_vimeo) {
        // https://vimeo.com/63612875
        preg_match('#vimeo.com\/(\d+)#', $url, $id);
        return [
            'vimeo',
            $id[1] ?? null
        ];
    }

    return [
        'video',
        $url
    ];
}
?>

<?= Breadcrumbs::widget([
    'wrapOptions' => [
        'class' => 'bg-gradient text-white'
    ],
    'links' => [
        ['label' => 'Страны', 'url' => ['/guide']],
        ['label' => $article->country->name, 'url' => ['/guide/'.$article->country->slug.'.amp']],
        ['label' => 'Праздники', 'url' => ['/guide/'.$article->country->slug.'/holidays.amp']],
    ],
]) ?>

<section>
<h1><?=$article->name?></h1>

<?php if ($article->image): ?>
    <figure>
        <div class="fixed-height-container"><amp-img class="contain" src="<?=$article->image?>" alt="<?=$article->name?>" layout="fill"></amp-img></div>
        <figcaption>В <?=date('Y')?> отмечается <?=$article->date()?></figcaption>
    </figure>
<?php endif ?>
<?= $text ?>

</section>

<?php if($photos): ?>
<section class="gray">
<h2>Фотографии с этого праздника</h2>
<amp-carousel height="300" layout="fixed-height" type="slides">
    <?php foreach($photos as $photo): ?>
        <div class="fixed-height-container">
            <amp-img class="contain" layout="fill" src="<?=$photo->url?>"></amp-img>
        </div>
    <?php endforeach ?>
</amp-carousel>
</section>
<?php endif ?>

<section>
<?php if($videos): ?>
<h2>Видео об этом празднике</h2>
<amp-carousel height="300" layout="fixed-height" type="slides">
    <?php foreach($videos as $video): ?>
    <?php list($type, $video_id) = getVideoData($video->url) ?>
    <?php if($type === 'youtube'): ?>
        <amp-youtube class="contain" data-videoid="<?=$video_id?>" layout="fill" data-param-rel="0" data-param-showinfo="0"></amp-youtube>
    <?php elseif($type === 'vimeo'): ?>
        <amp-vimeo class="contain" data-videoid="<?=$video_id?>" layout="fill"></amp-vimeo>
    <?php endif ?>
    <?php endforeach ?>
</amp-carousel>
<?php endif ?>
</section>
