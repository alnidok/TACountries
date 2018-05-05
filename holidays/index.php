<?php
use app\models\Holidays;
use app\assets\CalendarAsset;
use app\components\widgets\Breadcrumbs;
CalendarAsset::register($this, $holidays);

$country_form = explode(',', $country->nameForm)[1];
$year = date('Y');
$this->title = "Национальные праздники $country_form";
$this->registerMetaTag(['name' => 'description', 'content' => "Праздники $country_form. Календарь праздников с описаниями на $year год"]);
?>

<?= Breadcrumbs::widget([
    'wrapOptions' => [
        'class' => 'bg-gradient text-white'
    ],
    'links' => [
        ['label' => 'Страны', 'url' => ['/guide']],
        ['label' => $country->name, 'url' => ['/guide/'.$country->slug]],
        ['label' => 'Национальные праздники', 'url' => ['/guide/'.$country->slug.'/holidays']],
    ],
]) ?>

<section>
    <div class="container">
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-11 col-lg-9">-->
                <h1 class="display-4"><?=$this->title?></h1>

                <!--<a class="btn btn-primary text-light" id="show-calendar"><i class="icon-calendar"></i> Календарь</a>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>

<div class="calendar bg-secondary"></div>

<?php $i = 0 ?>
<?php foreach($items as $item): ?>

<section<?php if($i%2 == 0): ?> class="bg-white"<?php endif ?> data-id="<?=$item['slug']?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-9">

                <span class="lead mb-1"><?=Holidays::dateById($item['holiday_id']);?></span>
                <h2><?=$item['name']?></h2>

                <?php if ($item['image']): ?>
                <figure class="w-50 <?=$i%2 ? 'float-right' : 'float-left'?>">
                    <img src="<?=$item['image']?>" alt="" class="img-fluid" data-action="zoom">
                    <figcaption></figcaption>
                </figure>
                <?php endif ?>

                <article class="text-justify">
                <?=$item['text']?>
                </article>

            </div>
        </div>
    </div>
</section>

<?php $i++ ?>
<?php endforeach ?>