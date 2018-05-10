<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Республика Маврикий</h1>
                <div class="lead">
                    <b>Столица</b>: Порт-Луи
                    <br>
                    <b>Официальный язык</b>: не определен. Преобладает маврикийский креольский
                    <br>
                    <b>Валюта</b>: MUR — маврикийская рупия
                    <br>
                    <b>Территория</b>: 2045 км²
                    <br>
                    <b>Население</b>: 1,3 млн человек 
                    <br>
                    <b>Часовой пояс</b>: UTC+4. Разница с Астаной -2 часа
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Mauritius from the Sky" src="https://i.vimeocdn.com/video/524173645_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/131638303?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Isabelle Fabre & Cyril Tintori, 2015</figcaption>
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
                <p>Республика Маврикий — восточно-африканское государство, состоящее из островов Маврикий, Родригес, Каркадос-Карахос, Агелега и других мелких островков. Находится на юго-западе Индийского океана.</p>
    
                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Столицей, а&nbsp;также основным портом Республики Маврикий является город Порт-Луи (157&nbsp;тыс. человек), расположенный
                    в&nbsp;живописном месте на&nbsp;побережье Индийского океана в&nbsp;окружении потрясающего вида бухты и&nbsp;величавых
                    гор.</p>
                <p>Туристы могут здесь расслабиться на&nbsp;пляже, устроить шоппинг по&nbsp;городским рынкам&nbsp;и, конечно&nbsp;же, осмотреть
                    достопримечательности.</p>
                <p>Обязательно стоит посетить центр столицы&nbsp;&mdash; площадь Оружия в&nbsp;окружении зданий в&nbsp;колониальном стиле, затем
                    прогуляться по&nbsp;китайскому и&nbsp;мусульманскому кварталам, посетить знаменитую мечеть Джума, Маврикийский музей,
                    необычный музеи марок с&nbsp;самыми редкими марками в&nbsp;мире.</p>
                <p>Недалеко от&nbsp;города в&nbsp;деревне Памплемус располагается старейший Ботанический сад, славящийся удивительными гигантскими
                    кувшинками и&nbsp;большим разнообразием пальм. В&nbsp;парке запросто можно встретить огромную черепаху или яванского
                    оленя.</p>
            </div>
        </div>

        <hr>

        <div class="row">           
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Port Louis is the capital of Mauritius, harbor,botanic garden, waterfront, tourism industry" src="https://i.ytimg.com/vi/yTfDAYGzvUo/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/yTfDAYGzvUo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Port Louis is the capital of Mauritius, harbor,botanic garden, waterfront, tourism industry<br>© Cities of the World 2015</figcaption>
            </figure>

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Запах странствий - остров Маврикий и Родригес" src="https://i.ytimg.com/vi/KVwk1BOmr8k/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/KVwk1BOmr8k?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Запах странствий - остров Маврикий и Родригес<br>© Sergey ST 2014</figcaption>
            </figure>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="#population">Население</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#culture">Культура</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#climate">Климат</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#visa">Въезд в страну</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#custom">Таможня</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#transport">Транспорт</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#auto">Авто</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#health">Здравоохранение</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#communication">Связь</a>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" href="#sight">Что посмотреть</a>
            </li>-->
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>
        <p>Основные этнические группы Маврикия — это индо-маврикийцы (68%) и метисы афро-франко-малагасийского происхождения (27%), также здесь проживают французы и китайцы.</p>
        <p>Почти половина населения (48%) исповедуют индуизм, четверть католицизм, 16% ислам и 8% христианство, также есть приверженцы конфуцианства и буддизма.</p>
        <p>Средняя ожидаемая продолжительность жизни довольно высокая — 74 года. Для женщин этот показатель составляет 78 лет, а для мужчин — 71 год.</p>

        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p>
                    <i class="icon-link"></i> Министерство Культуры Маврикия -
                    <a href="http://culture.govmu.org/English/Pages/default.aspx"
                        target="_blank" rel="nofollow">culture.govmu.org</a>
                </p>
                <p>Маврикийская культура формировалась столетиями под влиянием религий, традиций и обычаев, языковых особенностей иностранцев, прибывших в этот чудесный край со всего света.</p>
                <p>Культурное наследие страны наиболее ярко проявляется в литературе, живописи и музыке. Здесь часто проходят выставки художников современности и разнообразные музыкальные и танцевальные фестивали.</p>
                <p>Национальным танцем является сега, он отличается ритмичностью и динамичностью. Исполняют его девушки в ярких длинных и пышных юбках.</p>
                <p>Кухня Маврикия богата и очень разнообразна благодаря смешению кулинарных традиций разных народов.</p>
                <p>Основу большинства блюд составляет рис, а вот многообразие приправ, соусов и наполнителей к нему удивляет. Самые популярные из них — сабайон (яичный крем с вином), шатини (толченый чеснок с имбирем и другими пряностями), ругай (соус из авокадо) и виндайе (соус из растительного масла, горчицы, уксуса, лука и перца).</p>
                <p>К рису подаются различные овощи, морепродукты или мясо. Из рыбы чаще всего употребляют такие сорта, как дорада, тунец, морской язык, марлин и барабулька. Их жарят, тушат, варят, солят, маринуют и даже употребляют в сыром виде, сбрызгивая цитрусовым соком. </p>
                <p>Туристы могут отведать вкуснейшие блюда из креветок, морских ежей, крабов, осьминогов и лангустов.</p>
                <p>При посещении страны иностранным туристам необходимо учитывать следующие особенности:</p>
                <ul>
                    <li>курение в общественных местах запрещено на законодательном уровне;</li>
                    <li>не допускается нудизм на местных пляжах;</li>
                    <li>посещение культурных и религиозных памятников предполагает соблюдение некоторых моральных норм (скромную неброскую одежду, сдержанное поведение и т.д.);</li>
                    <li>в стране категорически запрещена подводная охота;</li>
                    <li>необходимо очень бережно относиться к объектам местной флоры и фауны.</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1-2 января — Новый год</li>
                            <li>1 февраля — День отмены рабства</li>
                            <li>12 марта — День независимости</li>
                            <li>1 мая — День труда</li>
                            <li>1 ноября — День Всех Святых</li>
                            <li>2 ноября — День прибытия первых рабочих из Индии</li>
                            <li>25 декабря — католическое Рождество</li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Религиозные праздники с плавающими датами</h6>
                        <ul>
                            <li>Тайпусам-Кавади</li>
                            <li>Китайский Новый год</li>
                            <li>Маха-Шиваратри</li>
                            <li>Угади</li>
                            <li>Ид аль-Фитр</li>
                            <li>Ганеша-Шатхурти</li>
                            <li>Дивали</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Sega Ravanne 01 2015 Mauritius at Mon Choisy" src="https://i.ytimg.com/vi/FfKN33CUik8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/FfKN33CUik8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Sega Ravanne 01 2015 Mauritius at Mon Choisy<br>© Studio 37 - London 2015</figcaption>
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
                <p>Климат Маврикия морской, тропический, характеризующийся круглогодичной высокой влажностью и большим количеством осадков в период с декабря по март.</p>
                <p>Зимний период приходится на май-октябрь, средние температуры составляют от +18 °С до +24 °С. Лето (ноябрь - апрель) влажное и жаркое, средние температурные показатели достигают до +33 ... +35 °С.</p>
                <p>Вода теплая круглый год, температура не опускается ниже +23 °С.</p>
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
                <p>Граждане Республики Казахстан, посещающие Маврикий с туристической целью, получают визу бесплатно непосредственно в аэропорту по прилете в страну. Срок действия данной визы составляет 60 дней.</p>
                <p>При себе необходимо иметь следующие документы:</p>
                <ul>
                    <li>загранпаспорт;</li>
                    <li>подтверждение брони гостиницы;</li>
                    <li>медицинская страховка;</li>
                    <li>денежные средства из расчета 100 USD в день на человека;</li>
                    <li>обратные билеты.</li>
                </ul>
                <p>Также могут запросить удостоверение о вакцинации против желтой лихорадки, если турист ранее посещал страны, где велико распространение данного заболевания.</p>
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
               
            </div>
            <div class="col-md-4">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i> Требуется виза
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p>В Республике Казахстан нет посольства Маврикия.</p>
                        <p>Прямые регулярные рейсы по направлению Казахстан - Маврикий отсутствуют. Наиболее оптимальным вариантом является перелеты с пересадкой в Стамбуле или Дубае, осуществляемые авиакомпаниями Turkish Airlines, Emirates и Fly Dubai.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p>
            <i class="icon icon-link"></i> Сайт таможенной службы Камбоджи -
            <a href="https://mauritius.visahq.com/customs/"
                target="_blank" rel="nofollow">mauritius.visahq.com</a>
        </p>

        <h5>Спиртное и сигареты</h5>
        <p>Лицам, достигшим 18-летнего возраста, разрешается беспошлинный ввоз табачных изделий в количестве 200 сигарет или 250 г табака, одного литра крепкого алкоголя и двух литров вина или пива.</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Разрешено ввозить одно спортивное ружье и боеприпасы (до 50 штук) при наличии соответствующего разрешения от полиции.</p>

        <h5>Валюта</h5>
        <p>Сумма ввозимой и вывозимой валюты не ограничена (свыше 17,2 тыс. USD подлежит декларированию).</p>

        <h5>Запрещен ввоз:</h5>
        <ul>
            <li>наркотических средств;</li>
            <li>материалов порнографического характера;</li>
            <li>золотых монет и слитков;</li>
            <li>почвы;</li>
            <li>беспозвоночных животных и микроорганизмов;</li>
            <li>снаряжения для подводной охоты;</li>
            <li>водных мотоциклов.</li>
        </ul>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система Маврикия</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Главный вид общественного транспорта в стране — автобусы. Необходимо учитывать, что большая часть из них развозят пассажиров только до 18:00, в крупных городах до 20:00.</p>
                <p>Стоимость проезда зависит от маршрута и возраста пассажира — детям, как правило, билет обходится в половину стоимости.</p>
                <p>Среди туристов популярно такси, его можно остановить на улицах или осуществить заказ по телефону. Стоимость проезда фиксированная, зависит от планируемого маршрута, времени суток (после 20:00 тарифы повышаются почти вдвое) и наличия багажа.</p>
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
                                <span>25 MUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 20-30 MUR за км</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Mauritius Today - Part 1" src="https://i.ytimg.com/vi/clWpTbDihuU/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/clWpTbDihuU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Mauritius Today - Part 1<br>© Anil Kumar Bachoo 2014</figcaption>
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
                <p>Особенности дорожного движения в стране:</p>
                <ul>
                    <li>левостороннее дорожное движение;</li>
                    <li>качество дорог неплохое, но часто отсутствуют обочины;</li>
                    <li>дороги отличаются малым количеством знаков;</li>
                    <li>допустимая скорость в городах составляет 40-60 км/час, а вне городов — 80-110 км/час;</li>
                    <li>многие АЗС не работают в вечернее и ночное время;</li>
                    <li>места для стоянки обозначены соответствующей разметкой;</li>
                    <li>дорожный налог отсутствует;</li>
                    <li>в случае ДТП необходимо оказать первую помощь пострадавшим и вызвать полицию, после этого уведомить по телефону прокатную контору.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Казахстана могут управлять автомобилем на территории Маврикия при наличии прав международного образца.</p>
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
                                <span>48 MUR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>36 MUR за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <h5 class="mt-3">Аренда авто</h5>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Учитывая непривычное левостороннее движение и&nbsp;малое количество дорожных знаков, иностранным туристам настоятельно не&nbsp;рекомендуется
                    самостоятельно управлять автомобилем.</p>
                <p>В&nbsp;некоторых местных фирмах по&nbsp;прокату транспорта практикуется аренда автомобиля вместе с&nbsp;водителем. Средняя
                    стоимость аренды авто составляет 2&nbsp;000&nbsp;MUR в&nbsp;день.</p>
                <p>Перед оформлением договора аренды необходимо внимательно осмотреть транспортное средство на&nbsp;предмет повреждений и&nbsp;проверить
                    работу всех систем.</p>
            </div>
            <div class="col-md-4">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Секреты аренды авто на Маврикии + обзор популярных моделей" src="https://i.ytimg.com/vi/FzlA0HB3t80/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/FzlA0HB3t80?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Секреты аренды авто на Маврикии + обзор популярных моделей<br>© Otkroy Mavrikiy 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>В настоящее время эпидемиологическая обстановка стабильная.</p>
        <p>Специфическая вакцинация не требуется.</p>
        <p>Во избежание проблем со здоровьем туристам рекомендуется:</p>
        <ul>
            <li>учитывать жаркие климатические условия, особенно людям с хроническими заболеваниями: пить достаточное количество воды, носить головные уборы, пользоваться солнцезащитным кремом, избегать длительного пребывания на солнце</li>
            <li>пить только бутилированную воду</li>
            <li>тщательно обрабатывать овощи и фрукты перед их употреблением</li>
            <li>использовать репелленты от комаров и прочих насекомых</li>
        </ul>
        <p>Медицинские услуги для иностранцев платные, а при наличии страховки все расходы берет на себя страховая компания.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь</h2>

                <p>На Маврикии мобильная связь предоставляется следующими операторами:</p>
                <ul>
                    <li>My.T (бывший Orange) - <a href="https://www.myt.mu" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Chili (MTML) - <a href="http://www.chili.mu/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Emtel - <a href="https://www.emtel.com/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Приобрести сим-карту можно в салонах сотовой связи при предъявлении паспорта.</p>

                <h5>Интернет</h5>
                <p>Эти же операторы предоставляют мобильный интернет, с тарифами можно ознакомиться на сайтах.</p>
                <p>Что касается Wi-Fi - он имеется в большинстве отелей, в аэропорту и на улицах. Можете посмотреть точки доступа на карте - <a href="https://www.google.com/maps/d/viewer?dg=feature&t=m&oe=UTF8&msa=0&ie=UTF8&mid=1lKNUTG5676vYO2cD8ZkcXuJqE5k&ll=-20.22187688630453%2C57.52250700000002&z=10" target="_blank" rel="nofollow">перейти</a>.</p>
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
                                <div>Единый экстренный номер</div>
                                <span>999</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>114</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная охрана</div>
                                <span>115</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная по телефонным номерам</div>
                                <span>150</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная по погоде</div>
                                <span>171</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <?= $this->render('_electricity', $country) ?>
            </div>
        </div>

    </div>
</section>

<!--<section id="sight" class="bg-white">
    <div class="container">
        <?/*= $this->render('_excursions', $country) */?>
    </div>
</section>-->