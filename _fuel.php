<div class="card">
    <div class="card-header">
        <i class="float-right icon-funnel"></i>
        <span class="h6"><b>Стоимость топлива</b></span>
    </div>
    <ul class="list-group list-group-flush">
        <?php foreach($current as $key => $value): ?>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <div><?=$key?></div>
                <span><?=$value?>/литр</span>
            </div>
        </li>
        <?php endforeach ?>
    </ul>
    <div class="card-footer text-right">
        <span class="figure-caption"><a href="https://autotraveler.ru<?=$link?>" target="_blank">autotraveler.ru</a> - по состоянию на <?=$date?></span>
    </div>
</div>