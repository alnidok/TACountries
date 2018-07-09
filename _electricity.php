<?php
$types = explode(',', $types);
$voltage = explode(',', $voltage);
$frequency = explode(',', $frequency);
?>

<div class="card">
    <div class="card-header">
        <i class="float-right icon-light-bulb"></i>
        <span class="h6"><b>Электросеть</b></span>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <nobr><?=implode(' и ', $voltage)?> В</nobr>, <nobr><?=implode(' и ', $frequency)?> Гц</nobr>.
                    Используются разъемы
                    <?php foreach($types as $type): ?>
                    <a href="/journal/electric-sockets.html#type<?=$type?>"><nobr>типа <?=$type?></nobr></a><? if ($type !== end($types)): ?>, <?php endif ?>
                    <?php endforeach ?>
                </div>
                <span class="text-right">
                    <?php foreach($types as $type): ?>
                        <img src="/img/electric/type_<?=strtolower($type)?>.<?php if (in_array($type, ['M', 'N'])): ?>png<?php else: ?>svg<?php endif ?>" style="width:100px; max-width:100%;" alt="Разъем типа <?=$type?>" title="Разъем типа <?=$type?>">
                    <?php endforeach ?>
                </span>
            </div>
        </li>
    </ul>
</div>