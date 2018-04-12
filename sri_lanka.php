<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Шри-Ланка</h1>
                <div class="lead">
                    <b>Столица</b>: Шри-Джаяварденепура-Котте<br>
                    <b>Официальный язык</b>: сингальский и тамильский<br>
                    <b>Валюта</b>: LKR - Ланкийская рупия (100 центов)<br>
                    <b>Территория</b>: 65 610 км²<br>
                    <b>Население</b>: 21.6 млн человек<br>
                    <b>Часовой пояс</b>: от GMT +5.5. Разница с Астаной -30 мин.
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="SRI LANKA" src="https://i.vimeocdn.com/video/570043779_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/166034292?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Danny Schaefer, 2016</figcaption>
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
                <p>Шри-Ланка - это остров в Индийском океане, расположенный у берегов Индии. До объявления независимости назывался Цейлон, а столицей был самый крупный город страны Коломбо. Во всем мире он известен лучшим черным чаем, который собирают на местных плантациях. Туристам здесь предлагаются чистейшие пляжи с золотым песком, интересный подводный мир, национальные парки с уникальной флорой и фауной, а также останки древних цивилизаций. </p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Отдых на Шри-Ланке привлекает своей уединенностью и чистотой, сюда едут прикоснуться к истории земли и ее нетронутой природе. Движение жизни можно ощутить в фактической столице страны Коломбо. В 1982 году правительство передало столичные функции Шри-Джаяварденепура-Котте, но это мало что поменяло в жизни главного мегаполиса острова. В Коломбо интересна колониальная архитектура, христианские церкви, мусульманские мечети и буддийские храмы, мирно уживающиеся друг с другом на улицах города, также как особняки и небоскребы. После знакомства со столицей большинство туристов разъезжаются на лучшие пляжи острова, самые популярные из них  Маунт-Лавиния, Калутара, Хиккадува.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Дикая Шри-Ланка. Сезон 1. 1-я серия - Берег гигантов 1080p NatGeoWild" src="https://i.ytimg.com/vi/isT0vIbzp-s/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/isT0vIbzp-s?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Дикая Шри-Ланка. Сезон 1. 1-я серия - Берег гигантов 1080p NatGeoWild<br>© bobbi bob 2017</figcaption>
            </figure>
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="ШРИ-ЛАНКА: Джунгли и руины" src="https://i.ytimg.com/vi/fBHR4kSGzxs/hqdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/fBHR4kSGzxs?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">ШРИ-ЛАНКА: Джунгли и руины<br>© Валерий Шанин 2016</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#auto">Автомобиль</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h3>Население</h3>
        <p>Шри-Ланка многонациональна, здесь собрались народы со всей Южной Азии. Основной группой, составляющей большую часть населения, являются сингальцы - 75%, тамилов насчитывается до 15%, мавры до 7% и европейские переселенцы и другие иммигранты составляют 3%.</p>
        <p>Основная религия страны - буддизм (его исповедуют 75% населения), вторая по популярности религия - индуизм (15%), мусульман в стране проживает 7%, остальные 3% приходятся на христианские религии.</p>
        <p>Около 70% населения живет в деревнях и только 20% в городах, есть также жители плантаций и отдаленных поместий. Средняя продолжительность жизни в Шри-Ланке 75 лет, женщины обычно доживают до 77 лет, а мужчины до 73 лет.</p>
        <div class="row mb-3">
            <div class="col-md-8">
                <div id="chart-population"></div>
            </div>
            <div class="col-md-4">
                <div id="chart-population-ages"></div>
            </div>
        </div>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-12 col-lg-7">
                <p>Ланкийская культура - особенная, она формировалась многие столетия, и на нее оказали влияние буддизм, индуизм и местные верования. Сейчас почти все жители острова, несмотря на вероисповедание, верят в добрых и злых духов, и точно знают, что для защиты стоит устраивать ритуальные танцы, ставить рядом с домом защитные скульптуры, которые легко могут напугать туристов, хотя встречаются и очень милые каменные демоны. А в местной архитектуре городов после завоевания острова португальцами, и уже после того как он перешел под английскую корону, стал распространяться колониальный стиль с красивыми особняками и изящными храмами. </p>
                <p>Основные праздники в Шри-Ланке связаны с важными буддийскими датами. Некоторые относятся к истории страны, а некоторые к древним традициям. Очень ярко и интересно поучаствовать в дне независимости от британцев, когда в Коломбо проходят яркие шествия и парады, вечером в небе расцветают салюты, а местные жители устраивают в парках пикники. Новый год здесь отмечается 14 апреля - это веселый семейный праздник с вкусным столом и подарками для детей.</p>
                <p>Кухня Шри-Ланки - это миллион видов карри, лучший в мире чай и тропические фрукты. Основу кухни составляют рыба и морепродукты, главным гарниром является рис. Мясо есть не принято, говядину продавать и употреблять запрещено: здесь, как и в Индии, корова считается священным животным. Интересная местная особенность - это отсутствие столовых приборов, как привычных европейских, так и азиатских палочек. Вместо этого принято есть руками, а после каждого блюда споласкивать их в специальных чашах с ароматной водой.</p>
            </div>
            <div class="col-12 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздники и официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год.</li>
                            <li>январское полнолуние -  первый визит Будды в Шри Ланку</li>
                            <li>14 января - Тамильский Тай Понгал </li>
                            <li>4 февраля - день независимости</li>
                            <li>февральское полнолуние - первое собрание Буддийской общины</li>
                            <li>24 февраля - Маха Шиваратри </li>
                            <li>полнолуние марта - празник в честь посещения Буддой Сиддтхартхой Гаутамой своего отца, короля Суддодана</li>
                            <li>полнолуние апреля - второй визит Будды в Шри Ланку</li>
                            <li>14 апреля - ланкийский новый год</li>
                            <li>июль - День рождения пророка Мохаммеда</li>
                            <li>1 мая - день труда</li>
                            <li>полнолуние мая - Весак</li>
                            <li>полнолуние июня - приход буддизма в Шри Ланку в 3 в. до н.э.</li>
                            <li>полнолуние июля - приведение в движение колеса Дхармы; изложение сути Срединного Пути</li>
                            <li>18 октября - Дипавали (Фестиваль огней)</li>
                            <li>25 декабря — Рождество </li>
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
                <p>Шри-Ланка расположена в субэкваториальном климате с сильным влиянием муссонов. Летом здесь сезон дождей, за который выпадает вся годовая норма осадков. Начинается он в мае и длится до ноября. С декабря по апрель - комфортный сухой сезон, который считается идеальным для отдыха на острове.</p>
                <p>Средняя годовая температура здесь +26 градусов, сезонные колебания не слишком велики, так как страна расположена недалеко от экватора. Вода у берегов Шри-Ланки всегда +25 ... +27 градусов. Холодно может быть только в горных районах, там где расположены чайные плантации. При подъеме выше 2000 м температура может падать до +10 градусов.</p>
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
                <p>Граждане Казахстана перед прилетом на Шри-Ланку могут оформить <strong>электронную визу</strong>, или поучить ее по прибытию в аэропорт Коломбо. При выборе визы по прибытию придется оплатить сбор 35 долларов.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Виза выдается только если паспорт имеет срок действия более 6 месяцев, также потребуется предъявить туристический ваучер, обратный билет и денежные средства из расчета 20 долларов в день на человека.</p>
                    </div>
                </div>
                <p>Электронная виза оформляется через интернет <a href="http://www.eta.gov.lk/slvisa/visainfo/center.jsp?locale=ru_RU" target="_blank" rel="nofollow">на официальном сайте</a>, после заполнения анкеты пересылается на электронную почту заявителя. Ее можно использовать в течение 6 месяцев с момента оформления.</p>

                <h5>Въезд в страну</h5>
                <p>В высокий сезон из Алматы открылся прямой рейс в аэропорт Коломбо, он летает 2 раза в неделю, в остальное время можно попасть на остров с пересадками в Дохе, Дубае, Стамбуле, Москве. Из Астаны пока прямых рейсов нет, придется лететь как минимум с одной пересадкой. Прямой перелет из Алматы занимает 7 часов.</p>

            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Виза по прилету</div>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Коломбо - Алматы</div>
                                <span>2 рейса в неделю</span>
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

        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен, при ввозе суммы больше 10000 долларов - их необходимо задекларировать. Запрещен вывоз местной валюты свыше 5000, а также индийской и пакистанской, как ввоз, так и вывоз.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Спиртное и сигареты ограничены на провоз. Любой человек старше 18 лет может взять с собой 200 сигарет или 375 г табака, 2 бутылки вина или 2 л крепкого алкоголя. Также разрешены духи или туалетная вода до 250 мл. Ограничение есть и на вывоз чая, нельзя брать с собой более 2 кг листьев.</p>

        <h5>Личные вещи</h5>
        <p>Личные вещи для ввоза не ограничены, но лучше сделать так, чтобы было понятно, что коммерческих целей вы не преследуете. Запрещен ввоз и вывоз мяса и птицы, растений, антиквариата, исторических ценностей, необработанных драгоценных камней и слоновой кости.</p>

        <h5>Tax Free</h5>
        <p>Система Tax Free на острове поможет сэкономить 20% при покупке на сумму свыше 75 долларов. Оформляется стандартно - в магазине получаете специальные чеки, потом предъявляете их в аэропорту вместе с покупками, в окошке Tax Refund получаете деньги.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Основные средства передвижения по острову - это автобусы и поезда. Автобусы подразделяются на 2 класса: обычные и повышенной комфортности. Разница в цене в 2 раза, за эти деньги можно получить мягкие кресла, кондиционер и достаточное количество свободного места. Поезда также бывают нескольких классов. В третьем жесткие скамьи, много народа и минимальные цены; во втором уже значительно комфортнее, пожалуй он идеален по соотношению цена-качество; первый класс подойдет для тех кто хочет роскоши, викторианских салонов и доступа в интернет.</p>

                <h5>Городской транспорт</h5>
                <p>По городам острова ездят старые, неудобные автобусы, чаще всего переполненные людьми. Не самое походящее средство передвижения для туриста. Но если решитесь проехать - помните, что передние места везде зарезервированы для монахов, на них садиться нельзя. Стоимость поездки невысока и зависит от расстояния, в среднем получается около 1-2 рупий за 1 км.</p>

                <h5>Такси</h5>
                <p>Такси есть со счетчиками и без них, вторые дороже и сумму поездки в них надо оговаривать заранее. В первых же цена за посадку будет 30 LKR, потом по 26 LKR за 1 км.</p>

                <h5>Тук-Тук</h5>
                <p>Популярное во всей Азии средство передвижения, представляет собой трехколесный мотоцикл с переоборудованном под пассажиров кузовом, обычно это 2 деревянные скамьи напротив друг друга. Цена поездки на нем будет 15-20 LKR за километр, чаще всего используется для небольших расстояний.</p>

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
                                <div>Автобус</div>
                                <span>1-2 LKR за км</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>30 LKR - посадка и 26 LKR за 1 км</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Тук-тук</div>
                                <span>15-20 LKR за 1 км</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Транспорт на Шри Ланке.  Цены.  Что лучше для туриста. Обзор." src="https://i.ytimg.com/vi/2zZtA36fFSg/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/2zZtA36fFSg?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Транспорт на Шри Ланке.  Цены.  Что лучше для туриста.<br>© ArtyukhCoach 2015</figcaption>
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

                <h5>Особенности дорожного движения</h5>
                <p>На Шри-Ланке, как и в других в прошлом британских колониях, сохранилось левостороннее движение, которое может легко запутать неподготовленного туриста. С соблюдением правил здесь все сложно. Несмотря на высокие штрафы, местные жители передвигаются по дорогам как сами того пожелают. Всем туристам для исследования острова предлагается брать машину в аренду вместе с водителем, чтобы избежать неприятностей на дороге. Обойдется это всего лишь на 40% дороже основной суммы.</p>

                <h5>Аренда авто</h5>
                <p>Если все же вы решили путешествовать самостоятельно, то необходимо приготовить международные права, по национальным машину не дадут. Также надо быть старше 21 года и иметь на банковской карте деньги для залога за авто. Многие туристы предпочитают вместо машины брать на прокат скутер или мотоцикл. Для скутера права не нужны, шлем на дороге одевать обязательно.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива и аренды</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span>130 LKR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Аренда авто</div>
                                <span>3700-6000 LKR за день</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Дороги на Шри-Ланке" src="https://i.ytimg.com/vi/HLVSAgxR-qM/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/HLVSAgxR-qM?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Дороги на Шри-Ланке<br>© longboardsyndicate 2013</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение на Шри-Ланке</h2>
        <p>Медицина на острове находится на очень высоком уровне. Если сравнивать все азиатские страны, то Шри-Ланка уступает только Сингапуру и Японии. Здесь расположено много больниц и частных клиник, все они отлично оборудованы, а врачи - настоящие профессионалы. Еще одним плюсом местного здравоохранения можно назвать невысокие цены. Все граждане страны имеют право на бесплатное лечение, что положительно сказывается на уровне и продолжительности жизни в регионе. Перед путешествием туристу рекомендуется оформить медицинскую страховку, тогда любая помощь в экстренных случаях будет оказана бесплатно.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь представлена 4 основными операторами:</p>
                <ul>
                    <li>Dialog - <a href="https://www.dialog.lk" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Mobitel - <a href="http://www.mobitel.lk/broadband/plans-and-rates-prepaid" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Airtel Lanka - <a href="http://airtel.lk/internet/plans-and-tariff.html" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Estisalat - <a href="http://www.etisalat.lk/internet/prepaid-data-packs/standard-data-plans/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Сим-карты удобнее всего купить сразу по прилету в аэропорту. Точки продаж есть прямо напротив выхода. Стоимость карты колеблется от 1000 до 1350 LKR, и все эти деньги останутся на счету. Звонок домой обойдется в 11 LKR за минуту. Пополнить счет можно специальными карточками по 50-100 LKR. У основного оператора Диалог есть выгодные тарифы с мобильным интернетом и бесплатными звонками зарубеж за 500-1300 LKR.</p>

                <h5>Интернет</h5>
                <p>На всех курортах и в столице точки бесплатного Wi-Fi есть в аэропорту, ресторанах, шоппинг-центрах, кафе и отелях. Если планируете поездку вглубь острова, то лучше подключить мобильный интернет.</p>
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
                                <div>Полиция</div>
                                <span>119</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная</div>
                                <span>110</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>110</span>
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
                                    <nobr>230 В</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeD">разъем типа D</a> и <a href="/journal/electric-sockets.html#typeG">разъем типа G</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_d.svg" style="width:100px; max-width:100%;">
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