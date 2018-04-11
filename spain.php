<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Испания</h1>
                <div class="lead">
                    <b>Столица</b>: Мадрид<br>
                    <b>Официальный язык</b>: испанский<br>
                    <b>Валюта</b>: EUR - евро<br>
                    <b>Территория</b>: 505 990  км²<br>
                    <b>Население</b>: 46.56 млн человек<br>
                    <b>Часовой пояс</b>: UTC и UTC+1. Разница с Астаной -5 часов
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Viu Barcelona" src="https://i.vimeocdn.com/video/629787582_1280x544.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/213539211?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Albert JutRov, 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
    <svg class="decorative-divider" preserveAspectRatio="none" viewBox="0 0 100 100">
        <polygon fill="#F8F9FB" points="0 100 100 100 100 0"></polygon>
    </svg>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <p>Корни богатого исторического и культурного наследия уходят далеко в древность. Испания - это не только вино, коррида, красивые девушки и превосходная кухня. Это кладезь истории, способной окунуть в века любого, даже самого взыскательного искателя острых ощущений.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

            </div>
        </div>
        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Spain to Leave Spain" src="https://i.vimeocdn.com/video/536014219_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/139913227?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Spain to Leave Spain<br>© Pete R. 2015</figcaption>
            </figure>

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Испания, Барселона, Каталония, Андалусия." src="https://i.ytimg.com/vi/03jJKS148yM/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/03jJKS148yM?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Испания, Барселона, Каталония, Андалусия.<br>© greenman 2016</figcaption>
            </figure>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#population">Население</a></li>
            <li class="nav-item"><a class="nav-link" href="#culture">Культура</a></li>
            <li class="nav-item"><a class="nav-link" href="#climate">Климат</a></li>
            <li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#money">Деньги</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>
        <p>В Испании четыре этнических группы: кастильцы (испанцы), баски, каталонцы и галисийцы. Большинство населения (чуть более 70%) составляют испанцы, 15% - каталонцы, около 8% - галисийцы и чуть менее 2,5% - баски.</p>
        <p>Соотношение мужчин и женщин - примерно 1/1.</p>
        <p>Средняя продолжительность жизни в Испании - почти 83 года. У женщин она составляет 86 лет, у мужчин – 80 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Культура и традиции</h2>

                <p>Когда думают об Испании, на ум сразу приходят коррида, фламенко, горячие нравы местных жителей. И это правда, именно так и живут испанцы.</p>
                <p>А еще это испанская музыка и известная на весь мир живопись с великими художниками - Пабло Пикассо и Сальвадором Дали.</p>
                <p>Жители Испании - это активный, добродушный и открытый народ. Не стесняйтесь разговаривать с испанцами, они расскажут вам о своей жизни и местной культуре.</p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>6 января — Богоявление </li>
                            <li>19 марта — День Св. Иосифа</li>
                            <li>Март-апрель — Страстной (чистый) четверг </li>
                            <li>Март-апрель — Страстная пятница</li>
                            <li>Март-апрель — Пасхальный понедельник </li>
                            <li>1 мая — День труда</li>
                            <li>25 июля — День Св. Иакова </li>
                            <li>15 августа — Успение Богоматери</li>
                            <li>12 октября — Государственный праздник Испании </li>
                            <li>1 ноября — День Всех Святых</li>
                            <li>6 декабря — День Конституции </li>
                            <li>8 декабря — День Непорочного зачатия</li>
                            <li>25 декабря — Рождество Христово</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Климат</h2>
                <p>Испания является одним из самых тёплых государств в Южной Европе. Среднее количество солнечных дней составляет 260—285. Средняя годовая температура на побережье Средиземного моря составляет +20°C.</p>
                <p>Зимой температура опускается ниже нуля обычно только в центральных и северных районах страны.</p>
                <p>Летом температура поднимается до +40°C и выше (от центральной части до южного побережья).</p>
                <p>На северном побережье температура не такая высокая — около +25°C.</p>
            </div>
            <div class="col-lg-6">
                <div id="chart-climate"></div>
            </div>
        </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Для посещения Испании гражданами Казахстана нужна шенгенская виза.</p>
                <p>Вот список документов необходимый для ее получения:</p>
                <ul>
                    <li>Паспорт нового образца</li>
                    <li>2 копии паспорта</li>
                    <li>Одно цветное фото 3x4 см</li>
                    <li>Оригинал справки с места работы</li>
                    <li>Заявление – анкета</li>
                    <li>Копия предыдущих шенген виз</li>
                </ul>
                <p>Данная информация является ознакомительной и не является руководством к получению визы.</p>

                <h5>Авиаперелет</h5>
                <p>Прямых авиарейсов из Казахстана в Испанию нет, но ежедневно доступны рейсы с пересадкой.</p>
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Шенгенская виза</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+ул.+кенесары+47&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Испании</h5>
                        <p>Астана, ул. Кенесары 47, кв. 25</p>
                        <p><i class="icon-phone"></i> +7 (7172) 20-15-35</p>
                        <p><i class="icon-link"></i> <a href="http://www.exteriores.gob.es/Embajadas/ASTANA/ru/Embajada/Pages/HorariosLocalizacionContacto.aspx" target="_blank">www.exteriores.gob.es</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon-link"></i> Таможенная служба Испании - <a href=https://spain.visahq.com/customs/>spain.visahq.com</a></p>

        <h5>Ввоз алкогольной и табачной продукции</h5>
        <p>Без уплаты таможенных сборов и пошлин можно ввозить для личного пользования:</p>
        <ul>
            <li>10 литров крепких спиртных напитков</li>
            <li>110 литров пива</li>
            <li>90 литров вина</li>
            <li>20 литров напитков средней крепости</li>
        </ul>
        <p>Табак не более:</p>
        <ul>
            <li>800 сигарет</li>
            <li>200 сигар</li>
            <li>400 сигарилл (максимум 3г каждая)</li>
            <li>1 кг папиросного или трубочного табака</li>
        </ul>

        <h5>Ввоз медикаментов</h5>
        <p>Запрещено ввозить лекарства, предназначенные другому лицу, если они выдаются по рецепту и классифицируются как сильнодействующий препарат.</p>
        <p>Запрещено ввозить лекарства, которые классифицируются как наркотические средства.</p>

        <h5>Дополнительные ограничения</h5>
        <p>Запрещено ввозить: мясо, любые молочные продукты и их производные, охраняемые культурные ценности, а так же в салон самолета нельзя вносить вещи чья стоимость превышает сумму 430 евро.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Автобусы в Испании являются самым доступным и удобным средством для передвижения между городами и внутри населенных пунктов.</p>
                <p>Транспортная логистика работает как часы, автобусы редко опаздывают и ходят с интервалом в 15 минут. Купить билет можно в кассе, недалеко от остановки. Также можно приобрести абонемент.</p>
                <p>В крупных городах таких как Барселона, Валенсия и Мадрид имеется метро, широкая сеть которого позволит вам беспрепятственно исследовать архитектуру, окрестности и другие достопримечательности Испании.</p>
                <p>Если вы любите спорт и не против провести время на свежем воздухе, отличной альтернативой общественному транспорту будет велосипед. Особенно хорошо он покажет себя во время утренних и вечерних пробок в Барселоне.</p>

                <h5>Стоимость проезда</h5>
                <p>Поездка на рейсовом автобусе обойдется в 27-30 евро в зависимости от региона и расстояния. На обычном же это будет стоить от 0,5 до 1 евро.</p>
                <p>Путешествие на поезде обойдется от 8 до 50 евро.</p>
                <p>Штраф за безбилетный проезд - 90 евро.</p>
                <p>Такси будет стоить 17-27 евро.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>1 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Рейсовый автобус</div>
                                <span>28 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Поезд</div>
                                <span>8 - 50 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>17 - 27 евро</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Метро Барселоны  ВИДЕО-ИНСТРУКЦИЯ!" src="https://i.ytimg.com/vi/6ABcnNWulO8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/6ABcnNWulO8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Метро Барселоны  ВИДЕО-ИНСТРУКЦИЯ!<br>© Испания БЕЗ понтов 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="auto">
    <div class="container">
        <h2>Автомобиль</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В стране правостороннее движение.</p>
                <p>Испанская полиция признает казахстанские водительские права, но пользоваться ими после въезда можно не более 6 месяцев. По окончании полугода иностранец должен сдать экзамен на водительское удостоверение.</p>
                <p>Штраф за управление автотранспортом без него довольно серьезный - 900 евро или тюремное заключение.</p>

                <h5>ДТП</h5>
                <p>В случае ДТП нужно вызвать дорожную полицию, представителя арендной фирмы (в случае аренды авто) и консула Казахстана.</p>
                <p>Если присутствуют жертвы, то следует немедленно вызвать полицию и скорую помощь.</p>

                <h5>Аренда автомобиля</h5>
                <p>
                    Чтобы арендовать Автомобиль в Испании, водителю должно быть не менее 21 года и стаж больше двух лет с момента получения прав.
                    Для аренды достаточно предъявить паспорт, водительское удостоверение и сделать авансовый платеж.
                    Самые популярные компании, предоставляющие аренду: Hertz, PepeCar, Europcar, Budget.
                </p>
                <p>Аренда небольшого Opel на один день будет стоить от 20 до 60 евро. Страховка входит в стоимость аренды.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Формально граждане Казахстана могут пользоваться своим водительским удостоверением после въезда в Испанию в течение шести месяцев. Наличие водительского удостоверения международного образца не требуется, за исключением тех случаев, когда профессиональные водители осуществляют грузовые перевозки по Европе.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-95</div>
                                <span>1.23 евро/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98	</div>
                                <span>1.36 евро/литр</span>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1.14 евро/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>
            На территории Испании развернута сеть поликлиник и больниц, которая охватывают большую часть страны.
            Даже в сельской местности вам смогут оказать первую помощь в случае непредвиденной ситуации.
            В Испании не бывает острых вирусных вспышек и, следовательно, не нужно принимать особых мер предосторожности, но тем не менее, правила гигиены всегда нужно соблюдать т.е. не есть немытые овощи и фрукты.
            Если вам понадобятся лекарства или медикаменты, их можно приобрести в аптеках, которые встречаются довольно часто.
        </p>
        <p>Обязательных прививок при поездке в Испанию делать не нужно, тем не менее следует сделать особую вакцинацию от вируса гриппа А/H1N1.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Хоть сотовая связь в Испании развита, но уровень сигнала в местах отдаленных от крупных городов может быть низким.</p>
                <p>Лучшим выбором для общения внутри Испании будет местный оператор, а для общения с Казахстаном используйте интернет.</p>

                <h5>Интернет</h5>
                <p>Интернет в Испании имеет широкое распространение. В отелях вам предоставят бесплатный Wi-Fi, а в случае необходимости мобильного интернета лучшим выбором будет сим-карта местного оператора.</p>
                <p>Wi-Fi также можно найти в ресторанах, кафе и крупных торговых центрах.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Полезные телефоны</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Национальная полиция</div>
                                <span>091</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единая справочная в Мадриде</div>
                                <span>11-822</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>080</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-light-bulb"></i>
                        <span class="h6"><b>Электросеть</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <nobr>230 В</nobr>, <nobr>50 Гц</nobr>. Используются разъемы <a href="/journal/electric-sockets.html#typeF">типа F</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_f.svg" style="width:100px; max-width:100%;">
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="money" class="bg-white">
    <div class="container">
        <h2>Деньги</h2>

        <p>Официальной валютой Испании является евро (EUR)</p>

        <h5>Банкоматы</h5>
        <p>Принимаются все основные карты: Visa, American Express, Master Card.</p>
        <p>В большинстве магазинов можно расплачиваться кредитными картами.</p>

        <h5>Уровень цен</h5>
        <p>Пообедать в среднем ресторане на двоих без алкоголя будет стоить от 65 до 120 евро, в зависимости от ваших предпочтений.</p>
        <p>Стоимость проживания в отеле 4* варьируется от 115 до 140 евро в день.</p>

    </div>
</section>

<section id="sight">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>