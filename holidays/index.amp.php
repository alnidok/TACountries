<?php
use app\models\Holidays;
use app\components\widgets\Breadcrumbs;

$this->params['amp-components'] = ['carousel'];

$country_form = explode(',', $country->nameForm)[1];
$year = date('Y');
$this->title = "Праздники $country_form";

$this->registerMetaTag(['name' => 'description', 'content' => "{$country->emoji} Праздники $country_form. Календарь праздников с описаниями на $year год"]);
?>

<?= Breadcrumbs::widget([
    'wrapOptions' => [
        'class' => 'bg-gradient text-white'
    ],
    'links' => [
        ['label' => 'Страны', 'url' => ['/guide']],
        ['label' => $country->name, 'url' => ['/guide/'.$country->slug.'.amp']],
        ['label' => 'Праздники', 'url' => ['/guide/'.$country->slug.'/holidays.amp']],
    ],
]) ?>

<section>
<h1><?=$this->title?></h1>
<?=$country->holidaysText?>
</section>

<?php if($items): ?>
<section class="gray">
<h2>Список праздников на <?=$year?> год</h2>
<table class="table table-sm table-borderless table-hover">
    <?php foreach($items as $item): ?>
    <?php $holiday = Holidays::findOne($item['holiday_id']) ?>
    <tr>
        <td class="text-right"><?=$holiday->date()?></td>
        <td><a href="/guide/<?=$country->slug?>/holidays/<?=$item['slug']?>.amp"><?=$item['name']?></td>
    </tr>
    <?=$holiday->jsonLD()?>
    <?php endforeach ?>
</table>
<?php endif ?>
</section>

<?php if($photos): ?>
<amp-carousel height="300" layout="fixed-height" type="slides">
    <?php foreach($photos as $photo): ?>
        <div class="fixed-height-container">
            <amp-img class="contain" layout="fill" src="<?=$photo['url']?>"></amp-img>
        </div>
    <?php endforeach ?>
</amp-carousel>
<?php endif ?>
