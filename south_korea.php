<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Южная Корея</h1>
                    <div class="lead">
                        <b>Столица</b>: Сеул<br>
                        <b>Официальный язык</b>: корейский<br>
                        <b>Валюта</b>: вона (KRW)<br>
                        <b>Территория</b>: 99 274 км²<br>
                        <b>Население</b>: 51.3 млн человек<br>
                        <b>Часовой пояс</b>: UTC +9. Разница с Астаной +3 часа.
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
                <p>Республика Корея расположена в южной части Корейского полуострова, вытянутого в длину с севера на юг примерно на 1000 км. Граничит с КНДР и с трех сторон омывается морями – Желтым и Японским.</p>
                <p>Климат муссонный. Лето жаркое и влажное. Температура воздуха летом в Южной Корее в среднем +26 °C. Средняя минимальная температура составляет +18 °C. Средняя максимальная температура держится на отметке +32 °C.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Южная Корея. Интересные Факты о Корее." src="https://i.ytimg.com/vi/WlVHcvOvyxc/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/WlVHcvOvyxc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Южная Корея. Интересные Факты о Корее.<br>© CoolTimes 2017</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Сеул - столица Республики Корея" src="https://i.ytimg.com/vi/5Hycu26VV2o/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/watch?time_continue=2&v=5Hycu26VV2o?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Сеул - столица Республики Корея<br>© Sights Capitals 2016</figcaption>
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
                <p>В современной Корее достаточно сильно распространено влияние конфуцианских традиций. С раннего детства в корейцах воспитывается уважительное отношение к старшим. Большое значение придается почитанию родителей.</p>
                <p>Уровень преступности в целом сравнительно низкий.</p>
                <p>Места массового посещения (аэропорты, вокзалы, торговые рынки и улицы, крупные универмаги) оборудованы системами видеонаблюдения и контроля, что позволяет местной полиции пресекать и оперативно расследовать происшествия.</p>
                <p>В связи с нестабильной международной обстановкой в настоящее время в Республике Корея принимаются меры по усилению борьбы с терроризмом и его возможными появлениями. Ситуация контролируется местными компетентными органами и характеризуется стабильностью.</p>
                <p>Корейские граждане законопослушны и в отношении иностранцев, как правило, противоправных действий не допускают.</p>
                <p>Нахождение на главных улицах Сеула и других крупных городов Республики Корея в целом безопасно, но при условии соблюдения элементарных мер предосторожности, особенно это касается нахождения в темное время суток в вблизи увеселительных заведений (возможны случаи хулиганства, воровства, грабежа, побоев).</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit-card"></i>
                        <span class="h6"><b>Банкоматы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>В большинстве торговых точек и отделениях банков установлены банкоматы. Кредитной карточкой можно расплачиваться почти во всех ресторанах, отелях и универмагах. Однако ее могут не принять в небольших магазинах. Наиболее распространённые кредитные карточки — Visa и Mastercard.</p>
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
                            <p>Стоимость обеда в  среднего класса ресторане стоит 35—50 тыс. вон. Стоимость номера в гостинице среднего класса составляет от 150 до 180 тыс. вон за сутки. Цены во многом зависят от сезона и месторасположения отеля.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 mt-4">
                <h5>Праздничные и нерабочие дни</h5>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>январь или февраль (три дня) — Новый год по лунному календарю</li>
                            <li>1 марта — День движения за независимость</li>
                            <li>апрель-май (по лунному календарю) — День рождения Будды</li>
                            <li>5 мая — День детей</li>
                            <li>6 июня — День памяти</li>
                            <li>15 августа — День возрождения Кореи</li>
                            <li>сентябрь-октябрь (3 дня по лунному календарю) — «Чхусок» (День благодарения)</li>
                            <li>3 октября — День основания Кореи</li>
                            <li>9 октября – День корейской письменности</li>
                            <li>25 декабря — Рождество</li>
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
                <p>"По Соглашению между Правительством Республики Казахстан и Правительством Республики Корея о взаимной отмене визовых требований, с ноября 2014 года граждане РК, при наличии действительного заграничного паспорта, могут посещать Республику Корея без предварительного оформления визы и находиться там не более 30 суток непрерывно".</p>
                <p>Виза не нужна тем, кто едет в Корею с туристической или деловой целью, с целью оздоровления или лечения, с культурно-просветительской целью, а также желающим навестить друзей и родственников.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-v-card"></i>
                        <span class="h6"><b>Виза:</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Граждане Казахстана могут до 30 дней находиться на территории Южной Кореи без визы.
                        </li>
                    </ul>
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
                <p>Бланки деклараций (имеется на русском языке) выдаются для заполнения в салоне воздушного судна до прибытия в аэропорт назначения. Допускается заполнение деклараций непосредственно в зале выдачи багажа перед таможенным досмотром. Каждый пассажир обязан заполнить декларацию и сдать ее сотруднику таможни даже при прохождении через «зеленый корридор». Досмотр пассажиров осуществляется выборочно.</p>
                <p>В Корее действует система «красного» и «зеленого коридоров».</p>
                <p>«Зеленый коридор» предназначен для лиц, перемещающих товары, в отношении которых не подлежат уплате таможенные пошлины и налоги. Если вы сомневаетесь, нужно ли декларировать ввозимые вами товары или нет, рекомендуется выбрать «красный коридор» для избежания возможных недоразумений.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-fingerprint"></i>
                        <span class="h6"><b>Дактилоскопия</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">С 1 января 2012 года все иностранные граждане старше 17 лет, въезжающие на территорию Республики Корея, обязаны проходить процедуру дактилоскопии (снятие отпечатков пальцев) и биометрической идентификации по рисунку лица во всех аэропортах и морских портах страны.
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
                <p>Международный аэропорт Южной Кореи – Seoul Incheon International Airport (г.&nbsp;Сеул), признан одним из крупнейших аэропортов в мире.</p>

                <h5>Автобус</h5>
                <p>Проезд в городском автобусе оплачивается при посадке наличными или транспортной картой.</p>

                <h5>Такси</h5>
                <p>При поездке в обычном такси стоимость первых двух километров пути составляет в среднем 3000 вон. Поездка из центра Сеула до международного аэропорта Инчхон обойдется в сумму около 100 тыс. вон.</p>
                <p>В такси класса люкс (черного цвета с надписью «Deluxe taxi») за первые три километра взимается 4500 вон, поездка в аэропорт — 80 тыс. вон.</p>

                <h5>Метро</h5>
                <p>Базовая стоимость проезда в метро составляет 1250 вон (стоимость проезда зависит от расстояния поездки). Транспортную карту можно приобрести в кассе или автомате, установленных при входе на станцию.</p>

            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>В Сеул из Алматы регулярно осуществляются прямые регулярные перелеты а/к Air Astana (4 раза в неделю) и Asiana Airlines (3 раза в неделю). </p>
                            <p>Из Астаны в Сеул летает Air Astana (2 раза в неделю).</p>
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
            <div class="col-12 col-md-8 col-lg-7">
                <p>Правила дорожного движения унифицированы с международными.</p>
                <p>Движение в Республике Корея правостороннее.</p>
            </div>

            <div class="col-12 col-md-4">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Южная Корея. На улицах Сеула" src="https://i.ytimg.com/vi/VQvy8AaDICI/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/VQvy8AaDICI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Южная Корея. На улицах Сеула<br>© olives TV 2015</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <div class="row justify-content-between">
            <div class="col">
                <p>Санитарно-эпидемиологическая обстановка в Республике Корея находится норме.</p>
                <p>Эпидемиологический контроль со стороны органов здравоохранения на высоком уровне, большое внимание уделяется вопросу вакцинации граждан.</p>
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
                <p>Хорошо развита мобильная связь (стандарт CDMA, 3G, 4G(LTE, LTE-A)), 5G и Интернет. Сотовый телефон можно взять в аренду по прибытии в аэропорт Инчхон. </p>

                <div class="card mb-4">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <h6 class="title-decorative">Посольство Казахстана в Республике Корея</h6>
                            <p>140-809, # Jangmun-ro, Yongsan-gu, Сеул140-885</p>
                            <p>Тел: (82-2) 394-97-16, 379-97-14,<br /> Консульский отдел ПРК 391-89-06, 379-78-76</p>
                            <p>Факс: (82-2) 395-97-66</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Телефоны</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Служба спасения</div>
                                <span>119</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая медицинская помощь</div>
                                <span>1339</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Туристическая справочная</div>
                                <span>1330</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Иммиграционная служба</div>
                                <span>1345</span>
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
