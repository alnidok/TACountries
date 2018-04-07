# Блок электросеть
![Блок электросеть](http://dl4.joxi.net/drive/2018/04/07/0014/0289/966945/45/c0960e0e06.png)

Указываем напряжение и частоту электросети, а также ипользуемые типы розеток. Информацию проще всего искать на [powersockets.webulla.ru/ru/country](http://powersockets.webulla.ru/ru/country)

### Разметка

```html
<div class="card">
    <div class="card-header">
        <i class="float-right icon-light-bulb"></i>
        <span class="h6"><b>Электросеть</b></span>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <nobr>230 В</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeG">разъем типа G</a>
                </div>
                <span class="text-right">
                    <img src="/img/electric/type_g.svg" style="width:100px; max-width:100%;">
                </span>
            </div>
        </li>
    </ul>
</div>
```
Пример можно посмотреть на странице [Кипра](http://account.travel/guide/cyprus). 

Если используется несколько видов напряжения, частоты или типов розеток - перечисляем их подняд, например:
110 и 220 В, 50 и 60 Гц. Используются разъемы типов C и F. Изображения при этом размещаем друг за другом, на странице они встанут одно под другим.

![Типы розеток](http://dl3.joxi.net/drive/2018/04/02/0014/0289/966945/45/e35154d382.png)

Здесь указаны 12 типов розеток, а всего из 14. Для типов M и N в коде указываем не svg, a png: `/img/electric/type_m.png` и `/img/electric/type_n.png`