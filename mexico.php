<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Мексика</h1>
                    <div class="lead">
                        <b>Столица</b>: Мехико<br>
                        <b>Официальный язык</b>: испанский<br>
                        <b>Валюта</b>: MXN - мексиканское песо (100 сентаво)<br>
                        <b>Территория</b>: 1 972 550 км²<br>
                        <b>Население</b>: 121 млн человек<br>
                        <b>Часовой пояс</b>: от GMT-5 до GMT-8. Разница с Астаной 11-14 часов. Есть переход на зимнее и летнее время
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Самые популярные курорты мира: Канкун Мексика: Туристическая гордость Мексики" src="https://i.ytimg.com/vi/C2__Y_qLxqk/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/C2__Y_qLxqk?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Странник КН, 2016</figcaption>
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
                <p>Мексика расположена в Северной Америке и граничит с США на севере и с Белизом и Гватемалой на юге. Страна омывается водами двух океанов, на востоке можно отдохнуть на знаменитых пляжах Карибского моря, относящегося к бассейну Атлантического океана. На западе Мексика выходит к Тихому океану, а на севере страны в сушу врезается узкий и длинный Калифорнийский залив.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Мексика - государство с богатой историей, сохранившее древнее наследие индейцев, смешав его с испанской и карибской культурой. Удивительный замес из культур, вкусов солнца и пляжей привлекает в Мексику огромное количество туристов. Здесь нас ждут знаменитые пирамиды Майа, пляжи Канкуна, подводные пещеры для любителей дайвинга, тропические леса и лучшие дискотеки Акапулько.</p>
                <p>Мексиканская столица - крупнейший город страны и мира, он расположен в центре страны в Кордильерах и окружен действующими вулканами. Рядом с ним можно увидеть руины древнего ацтекского Теночтитлана, а в самом Мехико погулять по центру, построенному испанцами в колониальном стиле. Кроме столицы стоит посмотреть Гвадалахару, самый зеленый город страны, называемый также городом роз. Мерида - сердце Юкотана, откуда отправляются все экскурсии к пирамидам майя, Канкун - знаменитый курорт Карибского моря и Акапулько на Тихом океане с его пляжами и дискотеками.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Традиционная мексиканская кухня (ЮНЕСКО)" src="https://i.ytimg.com/vi/IDz3GEhdD7E/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/IDz3GEhdD7E?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Традиционная мексиканская кухня (ЮНЕСКО)<br>© IndiansWorld.org 2014</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Взрывая историю. Пирамиды майа (1 сезон 2 серия)" src="https://i.ytimg.com/vi/cFDQIoI7sLI/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/cFDQIoI7sLI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Взрывая историю. Пирамиды майа (1 сезон 2 серия)<br>© Взрывая историю 2017</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#auto">Автомобиль</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#prices">Цены</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h3>Население</h3>
        <p>Население Мексики разделено на мужчин и женщин практически в равных пропорциях, мужчин немного больше. По этнической составляющей мексиканцев можно разделить на индейцев, европейцев и африканцев. В процентном соотношении белых в стране всего 6%, метисов 63%, индейцев 30%, остальные - это африканцы, мулаты и азиаты.</p>
        <p>По конфессиональной принадлежности население делится на католиков 80%, протестантов - 7%, атеистов - 13%, в некоторых регионах наравне с католицизмом сохраняются индейские верования.</p>
        <p>Продолжительность жизни в Мексике 75 лет, для женщин этот показатель чуть выше и составляет 78 лет, для мужчин 73 года.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Мексики представляет собой уникальное сочетание индейских и испанских традиций, а на Карибском побережье ясно прослеживаются культурные черты этого региона. Здесь остались уникальные памятники истории, такие как древние города ацтеков и майя, чьи загадки до сих пор будоражат умы ученых и путешественников со всего мира. Испанские традиции видны в застройке крупных городов, трации барокко и классицизма можно увидеть в Мехико, в Гвадалахаре или Мериде. На Юкотане можно познакомится и с традициями карибских народов, в том числе с их особенной кухней.</p>
                <p>Праздники в Мексике - это отличный повод для приезда в страну. Яркие фестивали, маскарады, шествия и конечно же праздник мертвых 1 ноября, когда не только поминают ушедших, но и празднуют торжество жизни над смертью. Мексиканский день мертвых сочетает в себе индейские и католические традиции, он отмечается в день всех Святых, но отличается от всего мира яркостью и праздничностью действа. В этот день в городах горят свечи, жители наряжаются в специальные маски, устраивают угощения и танцы.</p>
                <p>Кухня Мексики - это настоящее национальное достояние, которое известно и популярно во всем мире. Основными ингедиентами являются тортилья (кукурузная лепешка), бобы, мясо и перец чили. Практически все блюда острые и пряные, мясо чаще всего жарится на огне, а в виде гарнира подают овощное рагу. На побережьях двух океанов преобладают рыба и морепродукты. Еще одной особенностью кухни можно считать томатную сальсу - острый соус, который есть во всех блюдах, кроме десертов. Национальным напитком считается текила, которой здесь более 300 видов, правда местные предпочитают пить ее без соли и лайма, а вместе с острым томатным соком.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>5 февраля - День Конституции</li>
                            <li>19 февраля - Мексиканский день армии</li>
                            <li>24 февраля - День флага</li>
                            <li>21 марта – День рождения Бенито Хуареса</li>
                            <li>21 апреля – Героическая оборона Веракруса</li>
                            <li>1 мая – Праздник труда</li>
                            <li>5 мая — Национальный праздник Мексики в честь победы мексиканских войск в битве при Пуэбле 5 мая 1862 г</li>
                            <li>8 мая — День рождения Мигеля Идальго</li>
                            <li>1 июня — День морского флота и морского гражданского транспорта</li>
                            <li>16 сентября — День независимости</li>
                            <li>27 сентября — Кульминация мексиканской войны за независимость</li>
                            <li>30 сентября — День рождения Морелос</li>
                            <li>12 октября — День Колумба</li>
                            <li>20 ноября — День революции</li>
                            <li>23 ноября — Мексиканский день военно-морского флота</li>
                            <li>25 декабря — Рождество</li>
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
                <p>Мексика расположена в тропическом климате, основные перепады температур здесь не сезонные, а высотные.</p>
                <p>На вершинах Кордильер температура может опускаться до +10 градусов и ниже, а в долинах лето жаркое до +35, зима более комфортная около +20-+25 градусов.</p>
                <p>Со стороны Карибского моря осенью часто приходят сильные ураганы, на Тихом океане сезон ветров начинается с декабря по март, с мая по ноябрь длится сезон дождей, когда значительно повышается влажность воздуха и уровень осадков. В сезон ураганов не рекомендуется посещать пляжи Юкотана.</p>
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
                <p>Гражданам Казахстана для посещения Мексики необходимо оформить <strong>мексиканскую визу</strong>. Для тех, у кого есть действующая виза США, Канады, Великобритании или Японии - разрешен безвизовый въезд сроком на 180 дней.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно!</strong> Посольства Мексики в Казахстане нет, для оформления визы граждане Казахстана могут обратиться в посольства Мексики в Москве или в Анкаре.</p>
                    </div>
                </div>
                <p>Для получения визы потребуются фотографии, анкета, билеты на самолет туда и обратно, бронь апартаментов, достаточное количество денежных средств. Полный список документов можно найти на сайте посольства. Обратите внимание, что электронная виза гражданам Казахстана не проставляется.</p>

                <h5>Авиасообщение</h5>
                <p>Перелет в Мексику сложен и неудобен. Потребуется как минимум 2 стыковки, причем если одна из них будет на территории США, то придется оформлять американскую транзитную визу. Удобные стыковки есть в Мадриде и Гаване, а до них можно долететь с пересадкой в Москве, Стамбуле или Франкфурте. В общей сложности в дороге придется провести около суток.</p>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Мексиканская виза</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=119034,+большой+левшинский+пер.,+4,+москва&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Мексики</h5>
                        <p>119034, Большой Левшинский пер., 4, Москва</p>
                        <p><i class="icon-phone"></i> +7 (495) 969-28-79</p>
                        <p><i class="icon-link"></i> <a href="https://embamex.sre.gob.mx/rusia/index.php/ru/" target="_blank" rel="nofollow">embamex.sre.gob.mx</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы с двумя пересадками</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Мехико - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="https://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>
        <p>При влете на территорию Мексики всем необходимо заполнить миграционную карточку и таможенную декларацию. Обычно эти карточки выдают еще на борту самолета, поэтому вписать данные можно не торопясь, за собственным столиком.</p>

        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностраннной валюты не ограничен, декларируется любая сумма. Мексиканские песо на сумму, эквивалентную 10000 долларов, вывозить нельзя.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Для лиц, достигших 18 лет, разрешен провоз 400 сигарет, 200 г табака или 25 сигар. Крепкий алкоголь до 3 литров и вино до 6 литров. Вывоз сигарет и алкоголя не ограничен.</p>

        <h5>Личные вещи</h5>
        <p>Ввоз на территорию Мексики личных вещей возможен на сумму, эквивалентную 300 долларов, в период отпусков таможня поднимает планку до 500 долларов, но нужно доказать их некоммерческое назначение. Фототехника разрешена в количестве 1 фотоаппарат и 1 камера на человека. Лекарства можно провозить только в закрытых упаковках и с рецептом от врача или с медицинской картой, где указана необходимость приема этих медикаментов.</p>

        <h5>Tax Free</h5>
        <p>Система Tax Free работает во многих крупных магазинах. При покупке на сумму свыше 1200 песо на кассе надо получить специальный чек Tax Back, который вместе с товаром, иммиграционной картой и паспортом надо будет предъявить в аэропорту перед вылетом. Так вы сможете сэкономить 15% от покупок. Половину суммы в офисе Tax Back выдают на руки, другую половину переводят на банковскую карту.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Путешествовать по стране из-за ее масштабов удобнее всего самолетом. Из столицы можно долететь до пляжей Канкуна всего за 2570 песо и 2 часа, в Акапулько можно оказаться за 1 час и 2300 песо, а в Монтеррее за 1.5 часа и 2450 песо. Наземный транспорт представлен автобусами и поездами. В Мексике туристам безопаснее и комфортнее передвигаться на автобусах, т.к. поезда ездят старые, неудобные и часто подвергаются нападениям. А туристические линии на Юкотане или на северо-западе страны достаточно дороги, билеты там от 3000 песо.</p>

                <h5>Городской транспорт</h5>
                <p>Во всех городах страны общественный транспорт представлен автобусами, которые курсируют с 5.00 до 23.00 по расписанию. Цены варьируются от города к городу и начинаются с 3 песо. Билеты продают в киосках или у водителя. В столице кроме автобусов есть троллейбусы, которые стоят от 4 до 6 песо и маршрутные такси, их стоимость зависит от маршрута, чаще всего около 4-7 песо.</p>

                <h5>Метро</h5>
                <p>Метро в Мехико состоит из 12 линий и большого количества станций пересадок. Разобраться в нем несложно. Купить билет можно в кассах на любой станции. Одна поездка будет стоить 5 песо. Кроме самого метро добраться до разных районов Мехико можно на метробусе. Это более скоростной вид транспорта, его стоимость 6 песо за поездку, но предварительно нужно будет приобрести пополняемую карточку за 10 песо.</p>

                <h5>Такси</h5>
                <p>Такси в Мексике доступны и безопасны, стоимость проезда составляет 5 песо за 1 км плюс 10 песо за посадку. Только при посадке надо следить за тем, чтобы водитель включил счетчик. При дальних поездках лучше заранее оговорить фиксированную сумму.</p>

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
                                <span>от 3 песо</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>5 песо</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метробус</div>
                                <span>6 песо</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Маршрутное такси</div>
                                <span>4-7 песо</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>5 песо/км<br>+ 10 песо посадка</span>
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
            <div class="col-md-8 col-lg-7">
                <h5>Дорожное движение</h5>
                <p>В Мексике правосторонее движение и действуют общемировые правила. Следует быть готовым, здесь все знаки написаны на испанском языке. Магистрали очень качественые и удобные, разрешенная скорость 110 км/ч, но они платные. Есть альтернативные бесплатные дороги, которые проходят через населенные пункты. На них установлено слишком много лежачих полицейских, так что скорость падает до 20 км/ч. Часто этим пользуются местные жители, чтобы предложить водителю сувениры, напитки и другую продукцию. Также их можно встретить в любой пробке, которые в городах не редкость.</p>

                <h5>Аренда авто</h5>
                <p>Аренда автомобиля в Мексике возможна, если вам исполнился 21 год. Для подписания договора потребуется паспорт, международное водительское удостоверение и банковская карта с 1000 доллров на счету. Для аренды авто стаж вождения не должен быть менее года.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span>18 песо</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>14 песо</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Дороги Мексики /roads in Mexico /" src="https://i.ytimg.com/vi/W15ZePPBKm4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/W15ZePPBKm4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Дороги Мексики /roads in Mexico /<br>© Mexirus 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Мексике</h2>
        <p>Медицина в Мексике находится на среднем уровне, она ежегодно развивается, ориентируясь на США. В крупных городах представлены государственные госпитали и частные больницы, все они неплохо оснащены и имеют квалифицированный медицинскй персонал. В отличие от соседней Америки туристы не приезжают сюда лечиться, но при экстренных случаях они могут расчитывать на быструю и качественную помошь. При обращении в больницу туристу необходимо иметь страховой медицинский полис, чтобы не оплачивать лечение самостоятельно.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь представлена 3 основными операторами:</p>
                <ul>
                    <li>Telcel - <a href=" http://www.telcel.com/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>IUsacell - <a href="http://www.iusacell.com.mx" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Movistar - <a href="http://www.movistar.com.mx/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Купить любую предоплатную сим-карту можно за 40-50 песо. Для пополнения используют специальные карты, которые продаются на кассах супермаркетов. Номиналы карт бывают от 100 до 500 песо. Звонок зарубеж обойдется в 18 песо за минуту.</p>

                <h5>Интернет</h5>
                <p>Подключиться к бесплатному Wi-Fi можно в крупных городах и на курортах во всех кафе и ресторанах, в лобби отелей, а иногда даже на улицах городов. Есть точки доступа в некоторх парках отдыха и около достопримечательностей. Если вы купили сим-карту Telcel, то можете подключиться к городскому Wi-Fi, введя свой логин и пароль.</p>
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
                                <div>Единый экстренный телефонный номер</div>
                                <span>911</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>06</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>06</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная</div>
                                <span>06</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <?= $this->render('_electricity', $country) ?>
            </div>
        </div>
    </div>
</section>

<section id="prices" class="bg-white">
    <div class="container">
        <h2>Цены</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Остановиться в бюджетном хостеле в Мексике обойдется в 300 песо за ночь. Небольшая, но уютная гостиница будет стоить около 1000 песо за номер, а отдых в 5* отеле в курортной зоне может легко достигать 4000-5000 песо за ночь.</p>
                <p>Средний чек за обед из трех блюд в кафе — 200-250 песо, за перекус в фастфуде — 100-150 песо, за ужин в ресторане — от 400-500 песо на человека.</p>
            </div>
            <div class="col-lg-5">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Цены на продукты в Мексике . Что есть в Супермаркетах в Мексике. Мексика #3" src="https://i.ytimg.com/vi/LpSBIO1omCg/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/LpSBIO1omCg?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Цены на продукты в Мексике . Что есть в Супермаркетах в Мексике. Мексика<br>© Max Trawor 2017</figcaption>
                </figure>
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