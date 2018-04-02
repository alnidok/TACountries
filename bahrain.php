<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Бахрейн</h1>
                    <div class="lead">
                        <b>Столица</b>: Манама<br>
                        <b>Официальный язык</b>: арабский<br>
                        <b>Валюта</b>: BHD - бахрейнский динар (1000 филс).<br>
                        <b>Территория</b>: 750 км²<br>
                        <b>Население</b>: 1.4 млн человек<br>
                        <b>Часовой пояс</b>: UTC +3. Разница с Астаной -3 часа
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
            <div class="col-lg-8 offset-lg-2">
                <p>Бахрейн - это островное государство, расположенное на одноименном архипелаге в Персидском заливе. Климат островов близок к тропическому, с теплой зимой (в январе термометр показывает в среднем +17 С) и крайне влажным знойным летом (летом термометр может показывать +37 С). Но при этом за год на территорию королевства выпадает ~ 90 мм осадков.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <!--<figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Sundown in Bahrain" src="https://i.vimeocdn.com/video/475273328_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/95373684?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Sundown in Bahrain<br>© Brandon Li 2014</figcaption>
                </figure>

                <hr>-->

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Bahrain Timelapse - National Day Version" src="https://i.vimeocdn.com/video/386238942_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/55798862?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Bahrain Timelapse - National Day Version<br>© Sonny Saguil 2012</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="География Сейчас! Бахрейн" src="https://i.ytimg.com/vi/lsHHhtt5fA8/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/lsHHhtt5fA8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">География Сейчас! Бахрейн<br>© Трудности перевода 2017</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#money">Деньги</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <p>Большая часть населения Бахрейна живет на северо-востоке страны, в двух городах - Манама и Мухаррак. Всего на территории государства насчитывают более 11 национальностей: бахрейнцы, персы, арабы, пакистанцы, малаяли, курды, тамилы, тагалы, гуджаратцы, телугу, британцы и другие. Около 55% населения составляют бахнейнцы, 13% персы и 10% арабы.</p>
        <p>Мужчин больше, чем женщин. На 6 мужчин приходится примерно 10 женщин. Основная часть населения - в возрасте от 15 до 64 лет.</p>

        <?= $this->render('_population') ?>

        <p>Бахрейн - это достаточно либеральная страна в плане образа жизни. Но все же иностранцам, выбравшим жизнь в Королевстве Бахрейн или пребывающим здесь временно, стоит почитать ислам, его устои и традиции.</p>

        <p>Например, во время Рамадана (х.), общего мусульманского поста, на протяжении месяца в общественных зонах действуют ограничения на дневной приемы пищи.</p>
        <p>Кроме этого, из-за перевеса количества шиитского населения, есть некоторые ограничения во время основных шиитских празднеств, в особенности 9—10 Мухаррам (х.) — Ашура (Память о мученической смерти имама Хусейна).</p>
        <p>Не стоит забывать о том, что распитие алкогольных напитков на улицах наказывается по закону.</p>

        <h5>Праздничные и нерабочие дни</h5>
        <p>Выходными днями считаются пятница и суббота.</p>

        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Нерабочие дни:</h6>
                <ul>
                    <li>1 января — Новый год;</li>
                    <li>1 мая — День труда;</li>
                    <li>16 декабря — День независимости, день восхода на престол покойного Эмира Исы бен Сальмана Аль-Халифы;</li>
                    <li>17 декабря — начало правления Короля Хамада бен Исы Аль-Халифы;</li>
                </ul>
            </div>
        </div>

        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Переходящие праздники по исламскому календарю Хиджре (х.). </h6>
                <ul>
                    <li>Мухаррам (х.) — Новый год по Хиджре; </li>
                    <li>Мухаррам (х.) — Ашура (Память о мученической смерти имама Хусейна);</li>
                    <li>Шавваль(х.) — Ид-аль-фитр (Ураза Байрам), окончание месяца Рамадан;</li>
                    <li>Зуль-Хиджжа (х.) — День Арафа (паломники, совершающие Хадж, пребывают в местности Арафа);</li>
                    <li>Зуль-Хиджжа (х.) — праздник жертвоприношения Ид-аль-Адха (Курбан-байрам).</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Безопасность</h5>
                <p>Бахрейн - развитая и безопасная страна, ограничений для туристов по перемещению нет, явных угроз также нет. Количество преступлений в стране невелико.</p>

                <h5>Визовый режим</h5>
                <p>Для посещения Королевства Бахрейн казахстанцам нужна виза. Оформить ее можно электронно, для этого понадобятся:</p>
                <ul>
                    <li>Фотография для паспорта. Размеры 3,5 х 4,5 см. Фон белый. Должна быть сделана не более 6 месяцев назад</li>
                    <li>Цветной скан загранпаспорта. Дата выдачи не должна превышать 10-ти лет, а срок действия заканчиваться ранее чем через 3 месяца после истечения срока действия запрашиваемой визы.</li>
                    <li>Подтверждение бронирования отеля. Именно от самого отеля, а не от посредников.</li>
                    <li>Бронь билетов в оба конца.</li>
                    <li>Приглашение, если имеется.</li>
                </ul>
                <p>У девушек до 30 лет без сопровождения отца, брата или мужа при оформлении электронной визы могут возникнуть трудности, поэтому рекомендуется обращаться в посольство.</p>
                <p class="small"><i class="icon icon-warning"></i> Данная информация является ознакомительной и не является руководством к получению визы.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Электронная виза</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Прямых рейсов из Казахстана не существует. В аэропорт Бахрейна можно долететь с пересадкой в Стамбуле, Дубай и Франкфурте</p>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://avia.account.travel" class="btn btn-block btn-outline-success overflow-hidden">Подобрать рейс с пересадкой</a>
                    </div>
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
                                    <nobr>230 Вт</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeG">разъем типа G</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_g.svg" style="width:100px; max-width:100%;">
                                </span>
                            </div>
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

        <p><i class="icon icon-link"></i> Таможенная служба Бахрейна - <a href="http://www.bahraincustoms.gov.bh/" target="_blank">bahraincustoms.gov.bh</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Если вам 18 и более лет - можно без пошлины провозить:</p>

        <p>алкогольные напитки</p>
        <ul>
            <li>крепкий алкоголь - 1 литр</li>
            <li>ящик пива в банках</li>
            <li>слабоалкогольные напитки - 1 литр</li>
        </ul>
        <p>табачные изделия</p>
        <ul>
            <li>сигары - 50 штук</li>
            <li>сигареты - 400 штук</li>
            <li>табак - 250 грамм в открытой упаковке</li>
        </ul>
        <h5>Ювелирные украшения и драгоценности</h5>
        <p>Драгоценности и ювелирные украшения вы должны задекларировать перед въездом в королевство Бахрейн. И помните, что транспортировка жемчуга ограничена.</p>

        <p>Для импорта или экспорта художественных и культурно-исторических ценностей и оружия необходимо сначала получить специальное разрешение от правительства Бахрейна.</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Для перевоза оружия и боеприпасов должно быть получено предварительное разрешение властей Бахрейна.</p>

        <h5>Художественные и культурно-исторические ценности</h5>
        <p>На ввоз и вывоз должно быть получено предварительное разрешение бахрейнских властей.</p>

        <h5>Автомобили</h5>
        <p>При ввозе автомобиля нужно заплатить пошлину размером в 5%. Однако, если автомобиль зарегистрирован в стране-участнице Совета сотрудничества арабских государств Персидского залива (ССАГПЗ), она вам не грозит.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>К сожалению, общественный транспорт в королевстве развит слабо. Вы можете перемещаться между городами на автобусах и автомобилях, взятых в аренду машинах и на такси. Автобусы имеют низкие тарифы, однако туристам не рекомендуется ими пользоваться из-за сложности расписания и маршрутов.</p>
                <p>Такси вы можете узнать по классическим шашечкам на крыше. Следует договориться о цене заранее, так как счетчиков обычно нет, они не работают или их просто не включают.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Транспорт</div>
                                <span>~ 1.5$</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>~ 1$</span>
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
            <div class="col-12 col-md-8 col-lg-7">
                <p>Правила дорожного движения в Бахрейне стандартные, похожи на казахстанские.</p>
                <p>В городе автотранспорт может двигаться с максимальной скорость в 50 км/ч.</p>
                <p>На трассах разрешено разгоняться до 80-100 км/ч, максимальная скорость зависит от трассы, а на подъезде к населенным пунктам ограничена 50 км/ч.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span>0.53 $ / литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Bahrain Timelapse 8th Nov 2011 GO PRO HERO2 HD cam" src="https://i.vimeocdn.com/video/214767036_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/31812140?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Bahrain Timelapse 8th Nov 2011 GO PRO HERO2 HD cam<br>© Bobansky 2011</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
        <p>В Бахрейне нет каких-либо опасных для здоровья человека заболеваний</p>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>В королевстве есть 3 своих поставщика мобильной связи, каждый из них охватывает весь остров.</p>
                <ul>
                    <li>Batelco - <a target="_blank" href="http://batelco.com/">перейти на сайт</a></li>
                    <li>Zain - <a target="_blank" href="https://www.bh.zain.com/en">перейти на сайт</a></li>
                    <li>Viva - <a target="_blank" href="https://www.viva.com.bh/">перейти на сайт</a></li>
                </ul>

                <h5>Интернет</h5>
                <p>Обычно Wi-Fi можно найти во всех отелях среднего класса и выше, скорость приемлемая, зачастую соединение есть только на первом этаже отеля.</p>
                <p>Также распространены интернет-кафе, ориентированные на рабочих из Индии и Пакистана.</p>

                <h5>Телефонная связь</h5>
                <p>По всему королевству расположены телефоны-автоматы. С их помощью можно звонить даже в другие страны.</p>
                <p>Синие аппраты работают по монетам. Красные - по телефонным карточкам номиналами в 25, 50, 100, 200 и 500 динаров. Автоматы серебристого цвета принимают и карточки, и монеты</p>
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
                                <div>Дорожно-транспортная полиция</div>
                                <span>199</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый центр приема экстренных звонков</div>
                                <span>999</span>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Льготы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>С понедельника по четверг с 19.00 до 7.00 и весь день в пятницу</div>
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
        <p>Официальной валютой является бахрейнский динар (BHD)</p>

        <h5>Банкоматы</h5>
        <p>В стране можно спокойно использовать большинство международных карт.</p>

        <h5>Уровень Цен</h5>
        <p>Обед средней цены в ресторане обойдется вам в 10 бахр. динаров.</p>
        <p>Стоимость ночи в четырёх звездной гостинице обойдется в 70 бахр. динаров.</p>
    </div>
</section>
<section id="sight">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>