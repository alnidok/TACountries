<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Киргизия</h1>
                    <div class="lead">
                        <b>Столица</b>:  Бишкек<br>
                        <b>Официальный язык</b>: киргизский. Русский язык имеет статус официального<br>
                        <b>Валюта</b>: киргизский сом (KGS)<br>
                        <b>Территория</b>: 199 951 км²<br>
                        <b>Население</b>: 6 млн человек<br>
                        <b>Часовой пояс</b>: UTC +6. Разницы во времени с Астаной нет.
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
                <p> Расположение: от Ферганской долины на западе до центральной части Тянь-Шаня с востока, от Казахстана с севера до северной части Памира с юга.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Климат резко континентальный. Средняя температура летом (июль) — до +27 °С, зимой (январь) –8 °С. Годовая норма осадков составляет 200—400 мм.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Welcome to Kyrgyzstan! Добро пожаловать в Кыргызстан!" src="https://i.ytimg.com/vi/KmsFvAiiH9g/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/KmsFvAiiH9g?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Welcome to Kyrgyzstan! Добро пожаловать в Кыргызстан!<br>© Рустам Бакиев 2017</figcaption>
                </figure>


                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="КЫРГЫЗСТАН |  ИНТЕРЕСНЫЕ ФАКТЫ О СТРАНЕ!" src="https://i.ytimg.com/vi/Xtx5NNO5OG0/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Xtx5NNO5OG0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">КЫРГЫЗСТАН |  ИНТЕРЕСНЫЕ ФАКТЫ О СТРАНЕ!<br>© BumTV 2017</figcaption>
                </figure>

            </div>
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
                <p>Принято уважительно относиться к пожилым людям и женщинам. Уступать место в общественном транспорте старшим, пассажирам с детьми и женщинам .</p>
                <p>При встрече с незнакомыми людьми за городом, на проселочных дорогах, в горах принято приветствовать друг друга. Распространено восточное гостеприимство.</p>
                <p>Для приезжих могут предлагаться специальные цены. Можно торговаться.</p>

                <h5>Безопасность</h5>
                <p>Во избежание возможных проблем необходимо выполнять следующие рекомендации:</p>

                <ul>
                    <li>Соблюдайте сроки и правила въезда, а также процедуры регистрации и оформления трудовых отношений. Если у Вас есть вопросы по законодательству Киргизии, задавайте их представителям государственных органов в письменной форме.</li>
                    <li>Если на улице к Вам обратился сотрудник милиции для проверки документов, он должен по Вашей просьбе предъявить служебное удостоверение. Вам необходимо предъявить паспорт/удостоверение.</li>
                    <li>При появлении подозрений о превышении полномочий со стороны сотрудника внутренних дел, постарайтесь уточнить его имя, звание, место работы и затем сообщить об этом в казахстанское посольство или орган внутренних дел КР.</li>
                    <li>Если Вас незаконно оштрафовали, задержали или арестовали, изъяли или испортили Ваши документы, Вы имеете право требовать встречи с сотрудником казахстанского посльства на территории КР.</li>
                    <li>Следует всегда иметь при себе паспорт/удостоверение (или его копию) с вложенным талоном временной регистрации или проездным билетом, подтверждающим дату прибытия в КР.</li>
                    <li>Будьте внимательны при посещении общественных мест и при пересечении дорог.</li>
                    <li>Следует принять меры по обеспечению сохранности документов и денежных средств.</li>
                </ul>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit-card"></i>
                        <span class="h6"><b>Банкоматы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Банкоматы имеются в основном только в крупных магазинах. Прием платежей по кредитным картам возможен в большинстве магазинов.
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-wallet"></i>
                        <span class="h6"><b>Уровень цен</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Двухместный номер<br /> в отеле 3-4 звезды</div>
                                <span>5000&nbsp;KGS</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>1 литра 95 бензина</div>
                                <span>41&nbsp;KGS</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси (средняя стоимость поездки по городу)</div>
                                <span>120&nbsp;KGS</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Ресторан для туристов (средний счет)</div>
                                <span>825&nbsp;KGS</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <?= $this->render('_electricity', $country) ?>
            </div>

            <div class="col-12 mt-4">
                <h5>Праздничные и нерабочие дни</h5>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <ul>
                            <li>1 января — Новогодний праздник;</li>
                            <li>7 января — Рождество Христово;</li>
                            <li>23 февраля — День защитника Отечества;</li>
                            <li>8 марта — Международный женский день;</li>
                            <li>21 марта — Народный праздник Нооруз;</li>
                            <li>7 апреля — День народной Апрельской революции;</li>
                            <li>1 мая — День международной солидарности трудящихся;</li>
                            <li>5 мая — День Конституции КР;</li>
                            <li>9 мая — День Победы;</li>
                            <li>31 августа — День независимости;</li>
                            <li>7 ноября — День Великой Октябрьской социалистической революции.</li>
                        </ul>
                        <p>Даты мусульманских праздников Орозо айт и Курман айт определяются по лунному календарю.</p>
                    </div>
                </div>
            </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col">
                <p>Для граждан Казахстана виза не требуется.</p>
                <p>Въезд в страну разрешен по удостоверению личности, без паспорта. При этом, чтобы это правило работало, гражданин Казахстана должен въезжать с территории Казахстана, а не третьей страны. </p>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Запрещен провоз наркотиков и сильнодействующих медицинских препаратов без рецепта врача, оружия, боеприпасов, взрывчатых веществ, а также материалов, способных подорвать государственный строй страны.</p>
                <p>При ввозе в Киргизию животных, овощей и фруктов необходим санитарный сертификат.</p>
                <p>Товары для личного пользования, таможенная стоимость которых не превышает сумму, эквивалентную 10 000 евро (перемещаемые воздушным транспортом), 1500 евро (перемещаемые иными видами транспорта) и общий вес которых не превышает 50 килограммов, не подлежат декларированию.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-suitcase"></i>
                        <span class="h6"><b>Спиртное и сигареты:</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            3 литра алкогольных напитков (совершеннолетним лицам).
                        </li>
                        <li class="list-group-item">
                            200 сигарет, 50 сигар (сигарилл) или 250 граммов табака, либо указанные изделия в ассортименте общим весом не более 25 граммов.
                        </li>
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
                <p>Транспортное сообщение между Казахстаном и Киргизией хорошо развито.</p>
                <p>Общественный транспорт представлен автобусами, троллейбусами, маршрутными такси.</p>
                <p>Есть авиа, железнодорожное, автомобильное сообщение.</p>

                <!--figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Bishkek, Kyrgyzstan Airport Manas" src="https://i.ytimg.com/vi/eYW-uoBlE2M/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/eYW-uoBlE2M?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Bishkek, Kyrgyzstan Airport Manas<br>© Maximus_KG 2014</figcaption>
                </figure-->


                <p class="mt-4"><a href="https://booking.scat.kz/websky/#/search" class="btn btn-outline-success">Подобрать рейс</a></p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-wallet"></i>
                        <span class="h6"><b>Стоимость проезда:</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>8 сом</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Троллейбус</div>
                                <span>8 сом</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Маршрутное такси</div>
                                <span>10 сом</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Частное такси (по городу)</div>
                                <span>80—200 сом</span>
                            </div>
                        </li>
                    </ul>
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
                <p>Правила дорожного движения КР практически полностью совпадают с правилами дорожного движения Казахстана.</p>
            </div>

        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <div class="row justify-content-between">
            <div class="col">
                <p>Санитарно-эпидемиологическая ситуация по инфекционным и паразитарным болезням стабильна. Типичные болезни: кишечные инфекции, вирусный гепатит А, бруцеллез, сальмонеллез, эхинококкоз, туберкулез.</p>
                <p>Перед поездкой в КР рекомендуется привиться от вирусного гепатита А.</p>
                <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
            </div>
        </div>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>В Киргизии услуги мобильной связи предоставляют три популярных оператора: BEELINE, MEGACOM и «O», все они предоставляют GSM стандарт мобильного соединения вкупе с GPRS.</p>
                <p>Самым выгодным в плане ценовой политики местное население считает оператора «О» (при определенных условиях связь внутри сети здесь бесплатна). Цена на услуги «О»: от 0,69 сом за мобильную связь, и от 1,39 сом за 1 Мб Интернета.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Посольство Казахстана</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="icon-home"></i> г.Бишкек, 720044, ул.Мира 95 А,
                        </li>
                        <li class="list-group-item">
                            <i class="icon-mobile"></i> Телефон: 8-10-996-312-69-21-04
                        </li>
                        <li class="list-group-item">
                            <i class="icon-phone"></i> Факс: 8-10-996-312-69-20-94
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12">
                <h5>Телефоны</h5>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <p>Дежурный МВД КР: 66-24-50, 102. </p>
                        <p>Дежурный ГАИ КР: 63-09-00, 63-09-01.</p>
                        <p>Телефоны доверия Пограничной службы КР: 54-90-39, 54-80-40.</p>
                        <p>Скорая медицинская помощь: 103.</p>
                        <p>Городское справочное бюро: 109.</p>
                    </div>
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
