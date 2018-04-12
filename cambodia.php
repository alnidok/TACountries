<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Королевство Камбоджа</h1>
                <div class="lead">
                    <b>Столица</b>: Пномпень<br>
                    <b>Официальный язык</b>: кхмерский<br>
                    <b>Валюта</b>: KHR — камбоджийский риель<br>
                    <b>Территория</b>: 181 тыс км²<br>
                    <b>Население</b>: 15.8 млн человек<br>
                    <b>Часовой пояс</b>: UTC +7. Разница с Астаной +1 час
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Cambodia" src="https://i.vimeocdn.com/video/590703295_1280x720.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/181964930?autoplay=1" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Sara Pretelli Supertramp, 2016</figcaption>
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
                <p>Камбоджа — королевство в Юго-Восточной Азии, расположенное на юге полуострова Индокитай.</p>
                <p>Имеет границы с Вьетнамом, Лаосом и Таиландом. Омывается водами Сиамского залива на юго-западе и юге.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Столица Камбоджи — древний город Пномпень, с населением 1,5 млн человек. Город пережил непростую историю: периоды процветания и развития много раз сменялись периодами стагнации и упадка во времена военных действий. В настоящее время ведется строительство домов, торговых центров, гостиничных комплексов.</p>
                <p>В центре столицы располагается действующая Королевская резиденция, окруженная красивейшим парком. На территории дворца находятся вилла Наполеона II, Серебряная пагода и статуя Будды. После посещения резиденции туристы могут побывать в Национальном музее, который находится неподалеку, а после прогуляться по живописной набережной реки Тонлесап.</p>
                <p>Еще одна из главных достопримечательностей города — самая высокая Пагода Ват Пном, расположенная на холме. Вокруг него раскинулся большой тенистый парк, в котором обитает множество обезьянок.</p>
                <p>Днем на улицах города довольно малолюдно из-за жары, а вот к вечеру жизнь бьет ключом — местные жители выходят в парки и на набережную гулять, играть в подвижные игры, совершать пробежки.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Столица Камбоджи Пномпень памятник Независимости 8 мая 2017" src="https://i.ytimg.com/vi/9B1ZRX-6F7U/maxresdefault.jpg"
                        class="bg-image" />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/9B1ZRX-6F7U?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                            mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Столица Камбоджи Пномпень памятник Независимости 8 мая 2017
                    <br>© CamboFriends.com 2017</figcaption>
            </figure>

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Тайны древних цивилизаций: Камбоджа - Ангкор Ват. Документальный фильм" src="https://i.ytimg.com/vi/0gXEhjVsL5c/maxresdefault.jpg"
                        class="bg-image" />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/0gXEhjVsL5c?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                            mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Тайны древних цивилизаций: Камбоджа - Ангкор Ват. Документальный фильм
                    <br>© Наука и Образование 2017</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>
        <p>Основную часть жителей Камбоджи (около 90%) составляют кхмеры, оставшиеся 10% приходятся на китайцев, вьетнамцев и тямов.</p>
        <p>Подавляющее большинство камбоджийцев исповедуют буддизм (более 93%), и малая часть жителей — мусульмане, христиане и индуисты.</p>
        <p>Камбоджи — аграрная страна, доля городского населения составляет всего 24%.</p>
        <p>Средняя продолжительность жизни — 62 года: 60 лет у мужчин и 65 у женщин.</p>

        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p>
                    <i class="icon-link"></i> Министерство Культуры Камбоджи -
                    <a href="http://www.mcfa.gov.kh/" target="_blank" rel="nofollow">mcfa.gov.kh</a>
                </p>
                <p>На искусство и культуру Камбоджи большое влияние оказывает религия, особенно ярко это проявляется в архитектуре и скульптуре, местных ремеслах (ткачество, производство украшений, резьба по дереву, золочение и пр.).</p>
                <p>В деревнях с давних времен популярны театры, примечательно, что все актеры во время представления надевают маски. Также есть театры теней и кукольные театры.</p>
                <p>Народные танцы под аккомпанемент барабанов и гонгов медленные и грациозные, они отражают характер самих камбоджийцев — местные жители неторопливые, степенные, часто беспечные, религиозные и искренне любящие своего короля.</p>
                <p>Камбоджийцы одеваются довольно скромно, чаще всего это свободные брюки и широкие платья. В деревнях распространена национальная одежда — саронг. Он представляет собой широкий и длинный отрез хлопковой или шелковой ткани, который оборачивается вокруг тела.</p>
                <p>Говоря о местной кухне, заметим, что практически ни один турист не остается к ней равнодушным. Самое популярное и вкусное блюдо в Камбоджи — это рис со свининой, маринованной в кокосовом молоке с чесноком.</p>
                <p>Также обязательно стоит попробовать рыбу амок в банановом листе, рисовую лапшу «ном бан чок», красный карри или салат из говядины с лаймом, мятой и базиликом.</p>
                <p>Туристам из уважения к местным культурным особенностям необходимо соблюдать некоторые правила:</p>
                <ul>
                    <li>на улицах, а особенно при посещении храмов и других святых мест, следует надевать консервативную одежду. Для мужчин это брюки и рубашки с длинным рукавом, а для женщин юбки, блузки или закрытые платья</li>
                    <li>в культовых помещениях принято разуваться и снимать головные уборы</li>
                    <li>не разрешается фотографировать местных жителей без их согласия</li>
                    <li>любые прикосновения к местным жителям расцениваются ими как оскорбительные</li>
                    <li>камбоджийцы отдают и принимают предметы исключительно правой рукой</li>
                    <li>полагается оставлять чаевые, если понравилось обслуживание в кафе, ресторане, отеле и т.д.</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>7 января — День победы над режимом геноцида</li>
                            <li>8 марта — Международный женский день</li>
                            <li>14–16 апреля — Кхмерский Новый год</li>
                            <li>1 мая — Праздник труда</li>
                            <li>13–15 мая — День рождения короля</li>
                            <li>18 июня — День рождения королевы-матери</li>
                            <li>24 сентября — День конституции</li>
                            <li>7–9 октября — День поминовения усопших</li>
                            <li>29 октября — Годовщина коронации короля</li>
                            <li>31 октября — День рождения короля-отца</li>
                            <li>9 ноября — День независимости</li>
                            <li>10 декабря — Международный день прав человека</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="УЛИЧНАЯ  ЕДА  В КАМБОДЖЕ | ПРИГОТОВЛЕНИЕ  МИДИЙ НА ГРИЛЕ С ДОБАВЛЕНИЕМ ЧИЛИ" src="https://i.ytimg.com/vi/5ZTLIonsfgo/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/5ZTLIonsfgo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">УЛИЧНАЯ ЕДА В КАМБОДЖЕ | ПРИГОТОВЛЕНИЕ МИДИЙ НА ГРИЛЕ С ДОБАВЛЕНИЕМ ЧИЛИ
                        <br>© ЗАЛИП ТВ 2017</figcaption>
                </figure>

            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Климат</h2>
                <p>Климат Камбоджи муссонный, тропический. Выделяется два основных сезона: сухой (ноябрь - май) и дождливый (июнь - октябрь). Летом средняя температура составляет от +25°С до +32°С, причем самый жаркий месяц — апрель (до +42°С). Зимние температуры колеблются от +23°С до +26°С, температурный минимум наблюдается в декабре.</p>
                <p>Годовое количество осадков составляет от 800 до 2000 мм. Воздух круглый год очень влажный (около 90-93%).</p>
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
                <p>Гражданам Республики Казахстан для въезда на территорию Королевства Камбоджи требуется виза, срок действия которой 30 дней.</p>
                <p>Визу можно получить двумя способами:</p>
                <ol>
                    <li>Оформить электронную <a href="https://www.evisa.gov.kh/" target="_blank" rel="nofollow">на сайте МИД Королевства Камбоджи</a>;</li>
                    <li>Получить по прилету в аэропорту.</li>
                </ol>
                <p>В первом случае на паспортном контроле вы предъявляете необходимые документы (указаны ниже) и в течение 5-20 минут получаете визу на 30 дней.</p>
                <p>В случае электронной визы нужно отсканировать те же документы и заполнить анкету на английском языке. Оплата также производится в режиме онлайн. Через какое-то время вы получаете на email подтверждение, которое нужно распечатать и предъявить по прилету на паспортном контроле.</p>

                <p>Перечень необходимых документов*:</p>
                <ul>
                    <li>загранпаспорт (срок действия должен быть не менее полугода)</li>
                    <li>цветное фото 3,5*4,5</li>
                    <li>авиабилеты (порт въезда)</li>
                    <li>подтверждение брони гостиницы</li>
                    <li>анкетные данные</li>
                </ul>
                <p>*Информация носит осведомительный характер.</p>

            </div>
            <div class="col-md-4">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Требуется виза</div>
                                <span>на 30 дней</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <p>В Республике Казахстан нет посольства Камбоджи.</p>
                        <p>Прямое транспортное сообщение между Казахстаном и Камбоджей отсутствует. Наилучшим вариантом перелета является направление
                            Алматы - Пномпень с пересадкой в аэропорту Бангкока.</p>

                    </div>
                </div>

                <a href="https://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>

            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p>
            <i class="icon icon-link"></i> Сайт таможенной службы Камбоджи -
            <a href="http://www.customs.gov.kh/"
                target="_blank" rel="nofollow">customs.gov.kh</a>
        </p>

        <h5>Спиртное и сигареты</h5>
        <p>Допускается беспошлинный ввоз сигарет количеством до 200 шт. (или 20 сигар) и 2 л крепкого алкоголя.</p>

        <h5>Драгоценности и ювелирные украшения</h5>
        <p>Провоз ювелирных украшений для личного пользования не ограничивается.</p>
        <p>Необработанные драгоценные камни или слитки драгоценных металлов подлежат лицензированию соответствующими ведомствами Камбоджи.</p>

        <h5>Культурные и исторические ценности</h5>
        <p>Экспорт из страны предметов, обладающих исторической или культурной ценностью возможен только при наличии разрешения Министерства Культуры Камбоджи.</p>

        <h5>Запрещены к ввозу/вывозу:</h5>
        <ul>
            <li>наркотические средства</li>
            <li>оружие и боеприпасы</li>
            <li>праворульные автомобили</li>
            <li>подержанные авто- и мотоциклетные шины</li>
            <li>растения, птицы, рыбы, дикие животные</li>
            <li>материалы, противоречащие нормам морали</li>
        </ul>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система Камбоджи</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Общественный транспорт в королевстве слабо развит.</p>
                <p>Автобусные маршруты функционируют исключительно в столице и некоторых крупных городах.</p>
                <p>Основной способ передвижения — это такси (в подавляющем большинстве только для туристов, потому как местные жители не могут себе его позволить), мототакси, моторикши (так называемые тук-туки) и велорикши.</p>
                <p>С водителями необходимо заранее договариваться о цене, обязательно нужно торговаться — средняя стоимость поездки обходится порядка 8000 - 12000 KHR.</p>
                <p>Можно также арендовать такси или рикшу вместе с водителем на весь день, это будет стоить около 80 000 KHR.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6">
                            <b>Стоимость проезда</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус м/г</div>
                                <span>25 000 KHR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такcи</div>
                                <span>от 8 000 KHR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Моторикша</div>
                                <span>от 4 000 KHR</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Vervoer voor de reiziger in Cambodja: bus, taxi, boot of scooter" src="https://i.ytimg.com/vi/lsetepUJ8i4/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/lsetepUJ8i4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Vervoer voor de reiziger in Cambodja: bus, taxi, boot of scooter
                        <br>© Мир путешествий 2017</figcaption>
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
                <p>Особенности дорожного движения Камбоджи:</p>
                <ul>
                    <li>движение правостороннее</li>
                    <li>максимальная разрешенная скорость в черте города составляет 30 км/час для мототранспорта и 40 км/час для автомобилей</li>
                    <li>дорожное движение очень беспорядочное — для водителей характерны массовые нарушения и игнорирование ПДД, в связи с чем туристам настоятельно не рекомендуется самостоятельное управление автомобилем в Камбодже</li>
                    <li>в стране отсутствуют крупные компании по прокату авто. Туристами практикуется найм водителя вместе с автомобилем</li>
                </ul>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Для управления автомобилем на территории Королевства Камбоджи гражданину Республики Казахстан необходимо иметь международное водительское удостоверение.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6">
                            <b>Стоимость топлива</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-95</div>
                                <span>5 960 KHR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>6 460 KHR за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Камбоджа // Прокат машины и Парк в горах // Снято на Sony X3000" src="https://i.ytimg.com/vi/Z3aDkuoM8F0/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Z3aDkuoM8F0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Камбоджа // Прокат машины и Парк в горах //
                        <br>© Moto42</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Санитарно-эпидемиологическая обстановка в стране нестабильная.</p>
        <p>Туристам, намеревающимся посетить Камбоджу, рекомендуется:</p>
        <ul>
            <li>пройти вакцинацию против дифтерии, туберкулеза, тифа, гепатита А и В, холеры, желтой лихорадки, бешенства</li>
            <li>пользоваться репеллентами от комаров и прочих насекомых</li>
            <li>учитывать климатические особенности, особенно лицам с хроническими заболеваниями</li>
            <li>пить только бутилированную воду</li>
            <li>тщательно обрабатывать овощи и фрукты перед употреблением</li>
        </ul>
        <p>Медицинские услуги для иностранных туристов являются платными, а их качество довольно низкое. Рекомендуется оформить полис медицинского страхования.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь</h2>

                <p>В Камбодже мобильная связь отлично развита и является довольно недорогой.</p>
                <p>Ключевыми операторами связи являются:</p>
                <ul>
                    <li>Metfone -
                        <a href="https://metfone.com.kh/en" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                    <li>Smart -
                        <a href="https://www.smart.com.kh/" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                </ul>
                <p>Сим-карту можно приобрести (при наличии паспорта) в аэропорту, торговых комплексах или салонах сотовой связи.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6">
                            <b>Полезные телефоны</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>117</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная охрана</div>
                                <span>118</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>119</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-light-bulb"></i>
                        <span class="h6">
                            <b>Электросеть</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <nobr>230 В</nobr>,
                                    <nobr>50 Гц</nobr>. Используются разъемы
                                    <a href="/journal/electric-sockets.html#typeA">типа A</a>,
                                    <a href="/journal/electric-sockets.html#typeC">типа C</a>,
                                    <a href="/journal/electric-sockets.html#typeG">типа G</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_a.svg" style="width:100px; max-width:100%;">
                                    <img src="/img/electric/type_c.svg" style="width:100px; max-width:100%;">
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

<section id="sight" class="bg-white">
    <div class="container">
    <!--Блок экскурсий-->
    <?= $this->render('_excursions', $country) ?>
    </div>
</section>
