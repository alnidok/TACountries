## Цель страниц
Стать тем местом, где турист сможет найти ответы на большинство возникающих у него вопросов.
Используем конкретизированную информацию, сводные таблицы, полезные и качественные видеоролики.

## Процесс
1) Подготовил таблицу, где вам нужно написать свои контакты, отметить выбранную страну и менять статус https://docs.google.com/spreadsheets/d/1yYRvS6CnkWXabGOM0SzaFZLExE_hFXblffIdnSlf5zE/edit?usp=sharing
2) Результат мне нужен либо в виде html, либо в виде php-файла, содержащего основную часть страницы.
3) Если не умеете работать с git - пишите мне (контакты указал в google-таблице), подскажу как выйти из ситуации
4) Не ограничиваю в креативе, всячески приветствуется рерайт текста (сейчас уникальность стремится к нулю) и его доработка; если вы беретесь за это (и по окончанию получаем легкочитаемый текст с уникальностью > 85%), то доплачиваю по каждой стране по 500р, итого получается 1000р;
5) Творите и действуйте!

## Результат
В каждой секции может быть разделение на левую и правую колонку. В этом случае __цель правой части__ - показать сводные данные, на которые стоит обратить особое внимание. Зачастую для разных стран это примерно те же данные на том же месте, но желательно дополнять их таким образом, чтобы __высота левой и правой части были примерно равны__.
Хорошим примером такого оформления является страница об Израиле https://account.travel/guide/israel

Стараемся приводить __данные в шапке__ к общему виду (это касается валюты, территории и населения). Посмотрите [на этот коммит](https://github.com/alnidok/TACountries/commit/70c397225b0593e755c21d59961b4b76e680b4a4), станет понятен общий вид.

Цены в сводных таблицах желательно указывать в местной валюте, ведь изначально все цены идут именно в ней. Конвертацию будет автоматизирована и зависеть от текущего курса валют.

При необходимости указать блок посольства/консульства - оформляем его с помощью генератора https://account.travel/generate/place  

Итак, результатом работы может быть либо html-файл с полной структурой документа, либо php-файл c частью контента (это предпочтительнее).
По окончании коммитим изменения и делаем push-реквест.

### html
Создаем файл `название_страны_латиницей.html`, например `russia.html`, копипастим содержимое из example.html и работаем только с выделенной частью http://joxi.ru/52a5ZleF46Yyv2
Остальное можно оставлять как есть, оно генерируется автоматически.

### php
Откройте `azerbaijan.php`.
Понятно, что здесь содержится лишь нужная часть страницы. Обратите внимание, как вставляются блоки карты и экскурсий.
Поэтому, нужно скопировать нужную область из html файла и заменить эти блоки вставками.
В итоге получим файл `russia.php`

## Видео
Генератор находится по адресу https://account.travel/generate/video
Вставляем url страницы (vimeo, youtube) - получаем код блока.

На страницах-примерах есть несколько видеороликов. Обычно это:
- короткое видео, промо-ролик, timelapse, в котором бегло показываются красоты страны/городов/местности/люди. Качество >= 1080p
- историческое видео - длинное, рассказывается о стране, истории, культуре и т.д. На русском языке. Качество >= 720p
- тематические видео - по конкретным темам, например про общественный транспорт в стране, про состояние медицины и т.п.

В целом чем больше, тем лучше. Вообще для каждой секции желательно видео, но главное - качество материала, поэтому за количеством гнаться не надо. Важно, чтобы это была не реклама и не навязывание чего-то, а объективный разбор темы.
Если сомневаетесь какое видео выбрать - вставляйте в код обе ссылки, потом лишнее уберем.

## Блок посольства/консульства
Генератор находится по адресу https://account.travel/generate/place
Заполняем все поля и жмем "Сгенерировать код". Справа появится готовый блок, а внизу код для вставки.
![Генератор мест](http://dl4.joxi.net/drive/2018/04/02/0014/0289/966945/45/26b2e593c3.png)

## Графики населения
![Графики населения](http://dl3.joxi.net/drive/2018/04/02/0014/0289/966945/45/d85b17f3cd.png)
В php-файлах это делается вставкой 
```php
<?= $this->render('_population') ?>
```
Такой кусок преобразуется в следующий html:
```html
<div class="row mb-3">
    <div class="col-md-8">
        <div id="chart-population"></div>
    </div>
    <div class="col-md-4">
        <div id="chart-population-ages"></div>
    </div>
</div>
```
Пример можно посмотреть на странице [Бахрейна](https://account.travel/guide/bahrain)


## Блок электросеть
![Блок электросеть](http://dl4.joxi.net/drive/2018/04/02/0014/0289/966945/45/cd7b62a30c.png)

Указываем напряжение и чатоту электросети, а также ипользуемые типы разъема. Путь к изображению также содержит тип разьема.
![Типы розеток](http://dl3.joxi.net/drive/2018/04/02/0014/0289/966945/45/e35154d382.png)
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
Пример можно посмотреть на странице [Кипра](http://account.travel/guide/cyprus)