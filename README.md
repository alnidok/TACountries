## Цель страницы по стране
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
Хорошим примером такого оформления является страница об Израиле http://account.travel/guide/israel

Стараемся приводить __данные в шапке__ к общему виду (это касается валюты, территории и населения). Посмотрите [на этот коммит](https://github.com/alnidok/TACountries/commit/70c397225b0593e755c21d59961b4b76e680b4a4), станет понятен общий вид.

Цены в сводных таблицах желательно указывать в местной валюте, ведь изначально все цены идут именно в ней. Конвертацию будет автоматизирована и зависеть от текущего курса валют. 

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

## Работа с видео
Для упрощения работы с видео сделал генератор блока http://account.travel/guide/video
Вставляете url страницы (vimeo, youtube) - получаете код блока.

### Подбор видео
На страницах-примерах есть несколько видеороликов. Обычно это:
- короткое видео, промо-ролик, timelapse, в котором бегло показываюются красоты страны/городов/местности/люди. Качество >= 1080p
- историческое видео - длинное, рассказывается о стране, истории, культуре и т.д. На русском языке. Качество >= 720p
- тематические видео - по конкретным темам, например про общественный транспорт в стране, про состояние медицины и т.п.

В целом чем больше, тем лучше. Вообще для каждой секции желательно видео, но главное - качество материала, поэтому за количеством гнаться не надо. Важно, чтобы это была не реклама и не навязывание чего-то, а объективный разбор темы.
Если сомневаетесь какое видео выбрать - вставляйте в код обе ссылки, потом лишнее уберем.