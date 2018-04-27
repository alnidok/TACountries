<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Фиджи</h1>
                    <div class="lead">
                        <b>Столица</b>: г. Сува (о. Вити-Леву)<br>
                        <b>Официальный язык</b>: английский и фиджийский, используется также хиндустани (диалект хинди)<br>
                        <b>Валюта</b>: фиджийский доллар (FJD)<br>
                        <b>Территория</b>: 18.3 тыс км²<br>
                        <b>Население</b>: 898.8 тыс человек<br>
                        <b>Часовой пояс</b>: UTC +12. Разница с Астаной +6 часов.
                    </div>
                </div>
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
            <div class="col-8 offset-2">
                <p>Республика Фиджи расположена на островах архипелага Фиджи (всего 332 острова, крупнейшими из которых являются Вити-Леву и Вануа-Леву) в юго-западной части Тихого океана к северу от Новой Зеландии, к югу от Тувалу, к западу от Тонга и к востоку от Вануату.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Климат архипелага тропический морской, жаркий и влажный. Юго-восточные пассаты зимой, то есть в период с мая по октябрь-ноябрь, приносят на острова солнечную и сухую погоду. Температура воздуха на центральных и крупных островах колеблется в этот период от +18 до +26 °С. В период с декабря по апрель температура воздуха заметно повышается и достигает +32 °С, однако сопровождается сезоном дождей.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Fiji" src="https://i.vimeocdn.com/video/472201045_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/92466077?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Fiji<br>© Tom Pinsard 2014</figcaption>
            </figure>

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Namotu Island Resort Fiji" src="https://i.vimeocdn.com/video/539005679_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/141875122?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Namotu Island Resort Fiji<br>© Beau Pilgrim 2015</figcaption>
            </figure>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#culture">Культура и традиции</a></li>
            <li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Фиджийцы радушны и без какой-либо неприязни относятся к туристам, посещающим их страну.</p>
                <p>Согласно местным нормам поведения в фиджийских деревнях необходимо снимать головные уборы и обязательно разуваться, заходя в дом. В общественных местах не приветствуется появление женщин в шортах и в одежде, не закрывающей плечи. Повышать голос и показывать свои эмоции на людях здесь не следует. Также не рекомендуется отвечать на попытки местных жителей завязать знакомство. В остальном достаточно придерживаться общепринятых правил приличия.</p>

                <p>Фиджи - одна из наименее дорогих стран южной части Тихого океана. Благодаря тому, что природно-климатические условия позволяют выращивать широкий ассортимент сельхозкультур непосредственно на островах, цены на продукты питания в Фиджи относительно невысоки.</p>

                <h5>Безопасность</h5>
                <p>Острова Фиджи безопасны для посещения, но чтобы не омрачить свой отпуск, выполняйте элементарные правила:</p>
                <ul>
                    <li>Драгоценности, крупные суммы денег и документы желательно хранить в сейфе отеля</li>
                    <li>Остерегаться карманных воришек в местах большого скопления народа</li>
                    <li>Рекомендуется привиться от холеры, гепатита В, тифа и полиомиелита</li>
                    <li>Рекомендуется носить одежду с длинными рукавами, широкополые шляпы, ботинки</li>
                    <li>Употреблять в пищу только бутилированную или кипяченую воду</li>
                </ul>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-light-bulb"></i>
                        <span class="h6"><b>Электросеть</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <nobr>240 В</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeI">разъем типа I</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_i.svg" style="width:100px; max-width:100%;">
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit-card"></i>
                        <span class="h6"><b>Банкоматы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Практически во всех ресторанах, гостиницах, магазинах, агентствах по аренде автомобилей, дайв-клубах и туристических офисах принимают все основные виды кредитных карт. На островах банкоматы просто отсутствуют. </p>
                            <p>На некоторых курортах операции с кредитными картами облагаются комиссионными в размере 5%.</p>
                            <p>В стоимость большинства товаров включён НДС (VAT) в размере 12,5%.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 mt-4">
                <h5>Праздничные и нерабочие дни</h5>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>конец марта - начало апреля - Миляд ан-Наби (день рождения пророка Мохаммеда)</li>
                            <li>апрель - май - Страстная Пятница и Пасха</li>
                            <li>конец мая - День Рату Сукуна (празднуется ежегодно в последний понедельник мая)</li>
                            <li>май - Национальный день молодежи</li>
                            <li>5 июня - День рождения Королевы</li>
                            <li>10-13 октября - День Фиджи (День независимости)</li>
                            <li>октябрь-ноябрь - "фестиваль огней" Девали (Дивали)</li>
                            <li>1 ноября - День Всех Святых.</li>
                            <li>11 ноября - День памяти</li>
                            <li>25-26 декабря - Рождество</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Необходимые документы:</p>
                <ol>
                    <li>заявление, заполненное на английском языке;</li>
                    <li>цветная копия первой страницы загранпаспорта, срок действия которого составляет не менее 6 месяцев с момента окончания поездки;</li>
                    <li>2 фотографии;</li>
                    <li>копии ранее выданных виз США, Канады, Шенгена, если такие имеются;</li>
                    <li>подтверждение наличия достаточных денежных средств;</li>
                    <li>подтверждение принимающей стороны;</li>
                    <li>билеты в оба конца, либо билет в третью страну;</li>
                    <li>копия транзитной визы, если такая требуется.</li>
                </ol>
                <p><i class="icon icon-warning"></i> Информация предоставлена в ознакомительных целях и не является руководством к получению визы.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-v-card"></i>
                        <span class="h6"><b>Виза:</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Гражданам Казахстана необходима заранее оформленная виза на Фиджи. Визу можно оформить заранее в Консуль&shy;ствах Фиджи, находящихся на территории Бельгии (Брюссель), ОАЭ (Абу-Даби) или Австралии (Сидней).
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        Срок оформления виз — от 15 до 20 рабочих дней.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Валюта</h5>
                <p>Ввоз национальной и иностранной валюты не ограничен при условии обязательного декларирования.</p>
                <p>Вывоз наличной иностранной валюты разрешен в пределах суммы, заявленной во въездной таможенной декларации. Вывоз национальной валюты ограничен: 500 фиджийских долларов.</p>
                <p>Не израсходованная национальная валюта может быть обменена при выезде в размере указанной во въездной декларации иностранной валюты. </p>

                <h5>Прочее</h5>
                <p>Запрещен ввоз огнестрельного оружия, боеприпасов, наркотиков, земли, камней и минералов, продуктов питания, мяса и молочных продуктов из Тасмании, а также биологических образцов и тканей человеческого или животного происхождения.</p>
                <p>Изделия из кожи, кости, перьев птиц, раковин, кораллов вывозить запрещено.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-suitcase"></i>
                        <span class="h6"><b>Беспошлинно допустим ввоз:</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">не более 500 сигарет или 500 г табака или сигар;</li>
                        <li class="list-group-item">2 литра крепких алкогольных напитков или 4 литра вина или пива;</li>
                        <li class="list-group-item">до 2 унций (56 мл) духов;</li>
                        <li class="list-group-item">подарков и сувениров общей стоимостью до 400 долл. США.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>      

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>На небольших островах нет ни автодорог, ни самих автомобилей – все в шаговой доступности.</p>
                <p>Дороги есть только на островах Вити – Леву и Вануа – Леву.</p>

                <p class="mb-12">Прямого транспортного сообщения между Казахстаном и Фиджи нет. Для того, чтобы добраться до крупнейшего аэропорта страны – Нанди, придется совершить минимум 2 пересадки, а общее время в пути составит почти сутки.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Nadi International Airport International Departure Hall" src="https://i.ytimg.com/vi/LV_8JbNx0v0/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/LV_8JbNx0v0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Аэропорт Нанди. Nadi International Airport International Departure Hall<br>© FlightTravels 2017</figcaption>
                </figure>

            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Наиболее оптимальными перелетами считаются перелеты через Сеул (а/к Korean Air и Asiana Airlines), Пекин (Hainan Air), а также со всевозможными стыковками в Австралии и Новой Зеландии, так как оттуда совершается наибольшее количество рейсов в/из аэропорты Фиджи.
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="https://booking.scat.kz/websky/#/search" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="auto">
    <div class="container">
        <h2>Автомобиль</h2>

        <div class="row justify-content-between">
            <div class="col">
                <p>Движение здесь левостороннее.</p>
                <p>Для того чтобы взять автомобиль напрокат, необходимо иметь водительское удостоверение международного образца и паспорт.</p>
                <p>Для переезда на другие острова обычно нанимают катер.</p>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>На Фиджи медицинское обслуживание находится на довольно высоком уровне.</p>
                <p>При посещение островов рекомендуется вакцинация от гепатита (А,В), столбняка, брюшного тифа и дифтерии.</p>
                <p>Случаи малярии здесь не отмечены.</p>

                <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-warning"></i>
                        <span class="h6"><b>Прививка от желтой лихорадки</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Обязательно требуется наличие сертификата о прививке от жёлтой лихорадки при прибытии из эндемичных регионов (включая транзит).
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Местным оператором является компания Vodafone Fiji Ltd.</p>
                <p>Роуминг ограничен и предлагается ведущими операторами только через сети других операторов тихоокеанского региона.</p>
                <p>Местные СИМ-карты туристы могут купить в офисах Vodafone, а также на почте и в аэропорту.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Полезные телефоны</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная</div>
                                <span>9170</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>911</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>911</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>

<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>
