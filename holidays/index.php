<?php
use app\models\Holidays;
use app\assets\CalendarAsset;
use app\components\widgets\Breadcrumbs;
use yii\helpers\Html;

CalendarAsset::register($this, $holidays);

$country_form = explode(',', $country->nameForm)[1];
$year = date('Y');
$this->title = "Праздники $country_form";

$this->registerMetaTag(['name' => 'description', 'content' => "Праздники $country_form. Календарь праздников с описаниями на $year год"]);
$this->registerJsFile('@web/js/calendar.js', ['depends' => 'app\assets\CalendarAsset']);

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
        ['label' => $country->name, 'url' => ['/guide/'.$country->slug]],
        ['label' => 'Праздники', 'url' => ['/guide/'.$country->slug.'/holidays']],
    ],
]) ?>

<section class="bg-white">
    <div class="container">
        <h1 class="display-4"><?=$this->title?></h1>
        <?=$country->holidaysText?>
    </div>
</section>

<?php if($items): ?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-9">
                <h2>Список праздников на <?=$year?> год</h2>
                <table class="table table-sm table-borderless table-hover">
                    <?php foreach($items as $item): ?>
                    <?php $holiday = Holidays::findOne($item['holiday_id']) ?>
                    <tr>
                        <td class="text-right"><?=$holiday->date()?></td>
                        <td><a href="/guide/<?=$country->slug?>/holidays/<?=$item['slug']?>"><?=$item['name']?></td>
                    </tr>
                    <?=$holiday->jsonLD()?>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?php endif ?>

<?php if($photos): ?>
<section class="bg-white">
    <div id="gallery" style="display: none;">
        <?php foreach($photos as $photo): ?>
            <img alt="<?=Html::encode($photo['caption'])?>" src="<?=$photo['url']?>"
                 data-image="<?=$photo['url']?>"
                 data-description="<?=Html::encode($photo['caption'])?>">
        <?php endforeach ?>
    </div>
</section>
<?php endif ?>

<section class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-9">
                <h2>Календарь праздников</h2>
                <p>Для удобства мы сделали визуальный календарь праздников <?=$country_form?> на этот и следующий год. Чтобы посмотреть события, просто направьте курсор на определенную дату.</p>
            </div>
        </div>
    </div>
</section>
<div class="calendar bg-secondary"></div>

<style>
.calendar .month-container {
    height: 240px;
}
.calendar > .month-container {
    display: none;
}
.calendar .col-xs-2 { float: left; width: 16.66%; position: relative; }
.calendar .col-xs-3 { float: left; width: 25%; position: relative; }
.calendar .col-xs-4 { float: left; width: 33.33%; position: relative; }
.calendar .col-xs-6 { float: left; width: 50%; position: relative; }
.calendar .col-xs-12 { float: left; width: 100%; position: relative; }
.popover .event-name:hover {
    text-decoration: underline !important;
}
</style>