<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Греция</h1>
                <div class="lead">
                    <b>Столица</b>: Афины<br>
                    <b>Официальный язык</b>: греческий<br>
                    <b>Валюта</b>: EUR - евро<br>
                    <b>Территория</b>: 86 600 км².<br>
                    <b>Население</b>: 11 млн. человек<br>
                    <b>Часовой пояс</b>: UTC +2, летом UTC +3. Разница с Астаной -3 часа
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Amazing Greece :: From The Sky" src="https://i.vimeocdn.com/video/495381329_1280x536.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/110943884?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Robert Balasko, Art-Studio.tv, 2014</figcaption>
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
                <p>Если верить легенде, Греция - плод любви Деметры - богини земледелия, и Посейдона - бога моря. Уникальное во всех смыслах государство, которое находится в Южной Европе. Страна расположена на многочисленных островах и Балканском полуострове. С востока ее омывают воды Эгейского и Фракийского морей, с запада – Ионическое, у юга страны подходят воды Средиземного и Критского морей. Климат Греции очень приятен и мягок.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Природные и исторические памятники, а также знаменитая кухня, привлекают в Грецию множество туристов со всего света.</p>

                <!--<hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Timelapse Greece 2014" src="https://i.vimeocdn.com/video/491104854_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/107646756?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Timelapse Greece 2014<br>© Laurin Döpfner 2014</figcaption>
                </figure>-->

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Древняя Греция за 18 минут" src="https://i.ytimg.com/vi/LJdhEpJ03Ug/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/LJdhEpJ03Ug?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Древняя Греция за 18 минут<br>© Arzamas 2016</figcaption>
                </figure>

            </div>
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
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>
        <p>Основную часть населения составляют этнические греки (85%) и албанцы (12%). Проживают также болгары, румыны, украинцы, пакистанцы, русские, грузины, индийцы и другие.</p>
        <p>Мужчин и женщин примерно поровну.</p>
        <p>Средняя продолжительность жизни в Греции - почти 81 год. У женщин она составляет 84 года, у мужчин – 79 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Культура и традиции</h2>
                <p>Греция гордится своей историей, насчитывающей не одно тысячелетие и наполненной мифами и легендами. Культуры и традиции современной Греции перекочевали прямиком из Древней Греции, которая являлась родиной демократии и философии, где развивалась первоначальная наука, театр и зародились Олимпийские игры.</p>
                <p>Культурное прошлое и настоящее, памятные сооружения и здания, традиции и обычаи – все это делает государство одним из самых посещаемых в мире.</p>
                <p>Греция является очень религиозной страной, около 98% граждан исповедуют православие. Даты священных праздников меняются каждый год.</p>
            </div>
            <div class="col-lg-6">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздники и нерабочие дни</h6>
                        <ul>
                            <li>1 января – Новый год</li>
                            <li>6 января – Богоявление</li>
                            <li>27 февраля – Чистый понедельник – Начало Великого поста</li>
                            <li>25 марта – День независимости</li>
                            <li>14 апреля – Страстная Пятница</li>
                            <li>16 апреля – Пасха</li>
                            <li>17 апреля – Светлый понедельник</li>
                            <li>1 мая – День трудящихся</li>
                            <li>4 июня – День Святой Троицы</li>
                            <li>5 июня – День Святого Духа</li>
                            <li>15 августа – Успение Святой Богородицы</li>
                            <li>28 октября – День Охи</li>
                            <li>17 ноября – День Политехнио</li>
                            <li>25 - 26 декабря – Рождество Христово</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <h5>Святой Афон</h5>

            <div class="row">
                <div class="col-lg-6">
                    <p>Святая гора Афон - это крупнейшее в мире средоточие православного монашества, почитаемое как земной Удел Богородицы. Является объектом Всемирного наследия ЮНЕСКО.</p>
                    <p>Всем земным существам женского пола въезд на территорию монашеской горы запрещен!</p>
                    <p>На территории монашеской республики используется византийское время и отсутствует централизованное энергоснабжение. Здесь необходимо соблюдать правила, аналогичные правилам в мужских монастырях.</p>
                    <p>Видеосъемка запрещена на всей территории Афона (видеокамеры даже ввозить на полуостров нельзя), в противном случае аппаратура может быть конфискована до возвращения с полуострова.</p>
                    <p>Фотографировать без разрешения можно только вне храмов.</p>
                </div>
                <div class="col-lg-6">
                    <figure class="figure d-block">
                        <div class="video-cover box-shadow">
                            <img alt="Афон. Обитель Богородицы. Документальный фильм" src="https://i.ytimg.com/vi/CPADXn8ejE8/hqdefault.jpg" class="bg-image"/>
                            <div class="video-play-icon">
                                <i class="icon-controller-play"></i>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/CPADXn8ejE8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <figcaption class="figure-caption text-right">Афон. Обитель Богородицы. Документальный фильм<br>© Россия 24 2016</figcaption>
                    </figure>
                </div>
                <!--https://vimeo.com/169507267-->
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Климат</h2>
                <p>Климат Греции можно разделить на три типа: средиземноморский, альпийский и умеренный, каждый из которых влияет на определённую территорию. Горный хребет Пинд сильно влияет на климат материковой части страны: регионы, расположенные западнее склонов Пинда (Эпир) получают большее количество осадков, чем регионы, расположенные на восточной стороне хребта (Фессалия).</p>
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
            <div class="col-12 col-md-8 col-lg-7">
                <p>Жителям Казахстана для въезда нужна виза. Чтобы ее получить, требуются:</p>
                <ul>
                    <li>справка с работы;</li>
                    <li>ксерокопия паспорта;</li>
                    <li>2 фото размером 35 х 45 мм;</li>
                    <li>загранпаспорт сроком действия не менее трех месяцев после дня возвращения.</li>
                </ul>
                <p>Стоимость всей визы Вам обойдется в 35 евро. Для получения полной информации о порядке выдачи визы следует обратиться в Генконсульство Греции.</p>

                <h5>Авиасообщение</h5>
                <p>Прямые рейсы из Астаны и Алматы в Салоники осуществляются авиакомпанией Ellinair, но лишь раз в 3 недели. Однако имеются удобные рейсы с пересадками, через Москву или Стамбул.</p>

                <h5>Посещение Афона</h5>
                <p>Женщинам въезд в эту монашескую республику запрещен.</p>
                <p>Разрешения на посещение Святого Афона выдаются по согласованию с МИД Греции через консульский отдел Посольства Казахстана в Афинах или через Генконсульство в Салониках. При въезде и выезде с Афона осуществляется таможенный контроль.</p>

            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Требуется виза</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+мкр+караоткель+2,+д+109&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Консульство Греции</h5>
                        <p>Астана, мкр Караоткель 2, д 109</p>
                        <p><i class="icon-phone"></i> +7 (7172) 56-37-84</p>
                        <p><i class="icon-link"></i> <a href="https://www.mfa.gr/missionsabroad/ru/kazakhstan-ru" target="_blank">www.mfa.gr</a></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Астана - Салоники</div>
                                <span>раз в 3 нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Алматы - Салоники</div>
                                <span>раз в 3 нед</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Таможенная служба Греции - <a href="http://www.gsis.gr/gsis/info/gsis_site/index.html" target="_blank">gsis.gr</a></p>

        <p>Пошлинами не облагаются:</p>
        <ul>
            <li>Сигареты количеством до 200 штук</li>
            <li>1.5 литра алкоголя крепче 22°</li>
        </ul>
        <p>Под запретом перевоз оружия и наркотических веществ.</p>

        <h5 class="mt-3">Ветеринарный контроль</h5>
        <p>При ввозе домашних животных требуется предъявить действительный сертификат ветеринарной службы с отметкой обо всех прививках, включая прививку против бешенства.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Транспортная инфраструктура развита очень хорошо. Весь транспорт удобен, оборудован кондиционерами, не перегружен.</p>
                <p>Покупка билета на полтора часа (включает в себя проезд на любом виде транспорта) обойдется в 1,40 евро.</p>
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
                                <div>Любой вид транспорта</div>
                                <span>1.4 € / 1.5 часа </span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>~ 0.68 € / км</span>
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
                <p>Дороги в Афинах и Салониках характерны большим количеством пробок, загруженностью.</p>
                <p>С севера на юг простирается автострада с отличным покрытием, предполагающая уплату за проезд по ней.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Плата за автобам в Греции, Салоники - Афины" src="https://i.ytimg.com/vi/cwF-AKhNDe8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/cwF-AKhNDe8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Плата за автобам в Греции, Салоники - Афины<br>© viorel sirghi 2017</figcaption>
                </figure>

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
                                <div>АИ-95</div>
                                <span>1.52 € / литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>1.70 € / литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1.31 € / литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Путешествие по Криту, Греция" src="https://i.ytimg.com/vi/C3F_OxiVpNc/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/C3F_OxiVpNc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Путешествие по Криту, Греция<br>© От Точки До Точки 2016</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Медицина в Греции на весьма высоком уровне. Во всех отелях и аэропортах дежурят бригады скорой помощи. Рекомендуется оформлять медицинскую страховку, а иначе помощь обойдется слишком дорого.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Телефонная связь</h5>
                <p>В стране функционируют таксофоны, для использования которых необходима карта предоплаты. Приобрести можно по цене 5-20 евро.</p>
                <p>Телефонный код Греции — 30.</p>
                <p>Телефонный код Афин — 210.</p>
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
                                <div>Международная Справочкая</div>
                                <span>169</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>100</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>166</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый экстренный номер</div>
                                <span>112</span>
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

<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>