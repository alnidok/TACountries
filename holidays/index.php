<?php
use app\models\Holidays;
use app\assets\CalendarAsset;
use app\components\widgets\Breadcrumbs;
CalendarAsset::register($this, $holidays);

$country_form = explode(',', $country->nameForm)[1];
$year = date('Y');
$this->title = "Праздники $country_form";
$this->registerMetaTag(['name' => 'description', 'content' => "Праздники $country_form. Календарь праздников с описаниями на $year год"]);
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
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-11 col-lg-9">-->
                <h1 class="display-4"><?=$this->title?></h1>
                <?=$country->holidaysText?>
                <!--<a class="btn btn-primary text-light" id="show-calendar"><i class="icon-calendar"></i> Календарь</a>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-9">
                <h2>Список праздников на <?=$year?> год</h2>
                <table class="table table-sm table-borderless table-hover">
                    <!--<tr>
                        <th>Дата</th>
                        <th>Название</th>
                    </tr>-->
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