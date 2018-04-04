<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Эстония</h1>
                <div class="lead">
                    <b>Столица</b>: Таллин<br>
                    <b>Официальный язык</b>: эстонский<br>
                    <b>Валюта</b>: EUR - евро<br>
                    <b>Территория</b>: 45 227 км²<br>
                    <b>Население</b>: 1.3 млн человек<br>
                    <b>Часовой пояс</b>: GMT +2. Разница во времени с Астаной 4 часов
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Таллин, Эстония. Самый европейский из советских городов... Цены, жилье, экскурсия в старый город" src="https://i.ytimg.com/vi/KPt4HugN4GY/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/KPt4HugN4GY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <!--<figcaption class="figure-caption text-right">Таллин, Эстония. Самый европейский из советских городов... Цены, жилье, экскурсия в старый город<br>© Взял и Поехал! 2018</figcaption>-->
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
                <p>Эстония - близкая, но неизведанная страна. Кроме очаровательного Таллина, она предлагает отдых на морских курортах, например, Пярну или остров Сааремаа с его знаменитыми мельницами. Кроме Балтийских пляжей, в Эстонии удивительная северная природа с озерами ледникового происхождения, густыми лесами и целебными минеральными источниками.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Путешествие по стране начинается с ее столицы, старый Таллин с его узкими улочками и каменными башнями привлекает к себе огромное количество путешественников. На небольшой территории расположено множество музеев, городская ратуша, крепостные стены и сувенирные магазины, где можно купить на память все от открытки до янтарных украшений.</p>
                <p>Эстония как-будто создана для отдыха, практически все города страны - это курорты, какие-то морские, какие-то лесные или озерные. Большинство курортов предлагает не только отдых, но и интересные экскурсии и лечение.</p>

            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Tallinn, EV100 — Time-Lapse 4K" src="https://i.ytimg.com/vi/VTy1hhZ5uWo/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/VTy1hhZ5uWo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Tallinn, EV100 — Time-Lapse 4K<br>© Dmitry Tkachenko 2018</figcaption>
            </figure>

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="10 удивительных фактов об Эстонии" src="https://i.ytimg.com/vi/UKTiAAdarIc/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/UKTiAAdarIc?autoplay=1&rel=0&showinfo=0&start=3&end=231" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">10 удивительных фактов об Эстонии<br>© MOGOL TV 2015</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#security">Безопасность</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#prices">Цены</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>
        <p>70% населения — эстонцы, 25% — русские, 5% населения — латыши, литовцы, финны, украинцы, поляки, белорусы, немцы.</p>
        <p>Соотношение мужчин и женщин - примерно 1/1.</p>
        <p>В Эстонии достаточно высокая продолжительность жизни. У женщин она составляет 82 года, у мужчин – 78 лет.</p>
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
            <div class="col-lg-6">
                <p>Эстонцы по праву гордятся своей культурой и традициями, которые несмотря на иностранное владычество смогли сохранить и передать детям. Главные архитектурные памятники свидетельствуют об истории страны. Изучить их можно в Таллине, Тарту, Пярну и других средневековых городах. На острове Сааремаа можно познакомиться как жила сельская Эстония, здесь в деревнях работают настоящие мельницы, а жизнь течет так, как будто на дворе все еще XVIII век.</p>
                <p>Праздники в Эстонии любят все от мала до велика. На Рождество ходят в гости или собираются за большим семейным столом, в Новый год отправляются на ночные прогулки с шампанским и фейрверками. 2 февраля эстонцы отмечаются очень красивый праздник - день свечей, это день романтики и красного вина. Весной главным праздником считается Пасха, в этот день все дети отправляются на поиски шоколадных яиц, спрятанных в разных местах. Середина лета ознаменуется днем Ивана Купалы, здесь это настолько важный праздник, что признан официальным выходным днем. </p>
                <p>Кухня Эстонии - это сытная и разнообразная пища. Из мяса наиболее популярна свинина, из рыбы - лосось, кроме них блюда состоят из круп, злаков или картофеля. В стране очень популярны молочные продукты и сыры собственного производства. Из десертов обязательно стоит попробовать местный шоколад с орехами, он ничуть не уступает по качеству швейцарскому, и местную выпечку с корицей, которую традиционно подают к завтраку.</p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие дни</h6>
                        <ul>
                            <li>1 января - Новый год.</li>
                            <li>24 февраля — День независимости</li>
                            <li>Великая пятница перед Пасхой</li>
                            <li>1-30 апреля - Пасха. </li>
                            <li>Первый и второй день после Пасхи</li>
                            <li>1 мая - День труда. </li>
                            <li>День Святой Троицы </li>
                            <li>23 июня — день победы в войне за независимость Эстонии</li>
                            <li>24 июня — день летнего солнцестояния</li>
                            <li>20 августа — День восстановления независимости </li>
                            <li>24 декабря — Сочельник</li>
                            <li>25 декабря — Рождество</li>
                            <li>26 декабря — День подарков</li>
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
            <div class="col-lg-5">
                <h2>Климат</h2>
                <p>Климат в Эстонии умеренный, определяется Балтийским морем. Здесь очень высокая влажность, сильные ветра, но нет морозов и сильной жары. Обычные температуры зимой около -5-8 градусов, а летом около +20. Большое количество осадков не дает расслаблено гулять в футболках даже летом, в любой момент может пойти дождь с ветром.</p>
            </div>
            <div class="col-lg-6 offset-lg-1">
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
                <p>Эстония входит в европейские страны, подписавшие шенгенское соглашение, поэтому для того чтобы попасть в страну необходимо оформить <strong>Шенгенскую визу </strong> категории С. Для частых путешественников можно подать документы на мультивизу длительностью полгода или год.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Для въезда в Эстонию на машине необходимо предоставить на нее все документы, включающие международную страховку и написанный дорожный план путешествия. Проезд границы будет в районе Нарвы.</p>
                    </div>
                </div>
                <p>Документы для получения визы можно посмотреть на сайте посольства. Там же представлен образец анкеты, которую необходимо заполнить. Предоставьте вместе ней фотографии, медицинскую страховку, авиа или железнодорожные билеты, бронь гостиницы и подтверждение наличия денежных средств. В некоторых случаях потребуется спонсорское письмо или справка с работы.</p>

                <h4>Въезд в страну</h4>
                <p>Прямого сообщения между Казахстаном и Эстонией нет, но можно подобрать авиабилеты в Таллин с пересадкой в Москве, Минске, Киеве, Варшаве. Также из Москвы можно доехать до Таллина поездом или автобусом, что будет несколько дешевле, но дольше. Аэропорт Таллина расположен всего в 4 км от центра города, и добраться от него можно за 10 мин. Главный вокзал Таллина расположен в непосредственной близости от входа в старый город. Кроме этого попасть в Эстонию можно морем. Главный порт страны расположен в столице. Здесь останавливаются паромы идущие по Балтийскому морю, и заходящие в порты Литвы, Латвии, Финляндии и Швеции.</p>

            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Шенгенская виза</div>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=кабанбай+батыра+28+010000+астана+казахстан&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Эстонии</h5>
                        <p>Астана, пр. Кабанбай батыра, 28</p>
                        <p><i class="icon-phone"></i> +7 7172 240 310</p>
                        <p><i class="icon-link"></i> <a href="http://www.astana.vm.ee/rus/posolstvo" target="_blank">www.astana.vm.ee</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы с одной пересадкой</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Таллин - Астана</div>
                                <span>Каждый день</span>
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

<section id="security">
    <div class="container">
        <h2>Безопасность</h2>
        <p>Эстония - страна безопасная для жизни и для путешествий. Здесь нет привычки наживаться на туристах или нападать на прохожих на ночных улицах. По городам и курортам Эстонии можно гулять в любое время дня и ночи без опаски. Конечно, в любых крупных городах случаются мелкие кражи, поэтому не стоит оставлять без внимания свои вещи или класть телефоны и портмоне в задние карманы брюк.</p>

        <h5>Безопасность на дорогах в Эстонии</h5>
        <p>Дороги в Эстонии высокого качества, но так как большая часть из них проложена по лесным массивам на дорогу могут выбегать дикие животные, что может создавать аварийные ситуации особенно в темное время суток. </p>
        <p>Количество аварий на дорогах страны стабильно не высоко. За 2017 год всего произошло 1447 дорожных происшествий, в которых пострадали 1800 человек и 71 человек погиб.</p>
        <p>При попадании в аварию и при любых других проблемах на дороге нужно звонить по номеру 112.</p>

        <h5>Стихийные бедствия и природные опасности в Эстонии</h5>
        <p>Эстония расположена очень удачно, здесь нет гор, нет столкновений литосферных плит или вулканов. Это очень спокойная страна. Иногда в зимний период бывают шторма или в период затяжных дождей возможны наводнения, но они случаются крайне редко.</p>
    </div>
</section>
<section id="custom" class="bg-white">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <h5>Валюта</h5>
        <p>В Эстонию можно ввозить любое количество валюты, но суммы свыше 10000 евро необходимо декларировать. Вывоз валюты никак не ограничен.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Табачная продукция ввозится в страну в ограниченных количествах: до 200 сигарет или 50 сигар или 100 сигарилл или 250 гр табака. Также ограничен и алкоголь: для провоза в обе стороны разрешен 1 л крепких напитков и 2 литра слабых, меньше 22 градусов, 4 литра вина и 16 литров пива.</p>

        <h5>Чай, кофе, туалетная вода, ювелирные украшения</h5>
        <p>В Эстонию разрешено привозить  100 г чая,  500 г кофе, 50 мл духов или 250 мл туалетной воды. Золото и драгоценности не более чем на 500 г. Антиквариат можно вывозить только в сопровождении соответсвующих документов. Ограничения на провоз личных вещей нет.</p>

        <h5>Tax Free</h5>
        Вернуть НДС 20% с покупок можно на территории аэропорта или вокзала, также есть пункт возврата на границе в Нарве. Для этого необходимо предъявить соответсвующие чеки из магазинов, участвующих в этой системе на сумму свыше 39 евро.
    </div>
</section>

<section id="transport">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Эстония пронизана сетью железных дорог, это самый простой и удобный способ передвижения по стране. Поезда принадлежат компании Elron, составы в последние годы были полностью обновлены, теперь по маршрутам ходят удобные вагоны с мягкими сидениями, бесплатным WI-FI и розетками рядом с креслом.</p>

                <h5>Стоимость проезда</h5>
                <p>Билеты на поезд можно приобрести в кассах вокзала или на сайте железных дорог. Электронные билеты можно не распечатывать, а просто предъявить на дисплее смартфона. На всех станциях и у контролеров есть аппараты считывающие QR-код. Стоимость проезда из Таллина в Тарту 10.5 евро, в Нарву 11.4 евро, в Пярну 6 евро, в Хаапсалу 8 евро.</p>
                <p>Городской транспорт представлен автобусами, троллейбусами и трамваями. Цена 1 поездки на любом виде транспорта стоит 1 евро, при покупке у водителя 2 евро, а самый выгодный вариант - электронная карта от 1 дня и более. Цена проездного на 1 день 3 евро.</p>
                <p>Стоит также отметить, что в Таллинне для жителей города - автобусы, троллейбусы, трамваи и электрички - бесплатные. Подробнее об этом можно узнать <a href="https://www.tallinn.ee/rus/pilet/Informatsija-o-proezdnyh-biletah" target="_blank">на официальном сайте</a>.</p>

                <h5>Такси </h5>
                <p>Такси Таллина считается одним из самых доступных, посадка стоит 2 евро, цена за километр 0.5 евро. Ночью тариф удваивается.</p>

                <h5>Паром </h5>
                <p>На Сааремаа и другие острова Эстонии ходят паромы. Цена за пассажира 3-4 евро, за машину 10 евро. До Саарема дорога на пароме занимает около 30 минут.</p>

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
                                <div>Троллейбус, автобус, трамвай</div>
                                <span>от 1 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>2 евро + 0.5 евро за 1 км</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="auto" class="bg-white">
    <div class="container">
        <h2>Автомобиль</h2>
        <div class="row">
            <div class="col-lg-6">
                <p>Дороги в стране находятся на высоком уровне, движение левосторонее, жители привыкли правила соблюдать.</p>

                <h5>Аренда автомобиля</h5>
                <p>Арендованный автомобиль пригодится для путешествия по стране, с его помощью можно посетить самые отдаленные уголки страны без особых проблем. Для заключения договора вам потребуются права и паспорт. Минимальный возраст должен быть 21 год, а стаж вождения не меньше года. Нарушать правила не стоит, штрафы могут доходить до 1500 евро.</p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Жизнь в Эстонии | Цены на бензин в Европе, Эстонии, Таллине | Мысли вслух 2018" src="https://i.ytimg.com/vi/oBgHWCan1u8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/oBgHWCan1u8?autoplay=1&rel=0&showinfo=0&start=218" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Цены на бензин в Европе, Эстонии, Таллине<br>© Жизнь в Эстонии 2018</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health">
    <div class="container">
        <h2>Здравоохранение в Эстонии</h2>
        <p>Уровень медицинского обслуживания в Эстонии находится на одном из первых мест Европы. Здесь можно получить высококлассную медицинскую помощь по невысоким ценам. В любом городе страны есть больницы и медицинские центры, а на побережье расположена масса лечебных курортов.</p>
        <p>В Эстонию можно приехать специально на лечение на лучшие курорты страны, которые предлагают программы исцеления на минеральных или грязевых источниках. Программы могут стоить от 50 евро за курс и выше.</p>
        <p>На различных курортах можно вылечить нервную систему, проблемы с опорно-двигательным аппаратом, привести в порядок давление и решить другие проблемы.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication" class="bg-white">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Главные сотовые операторы Эстонии:</p>
                <ul>
                    <li>Tele2 - <a href="https://tele2.ee/ru/" target="_blank">перейти на сайт</a></li>
                    <li>EMT - <a href="https://www.telia.ee/ru/" target="_blank">перейти на сайт</a></li>
                    <li>Elisa - <a href="https://www.elisa.ee/ru/" target="_blank">перейти на сайт</a></li>
                </ul>
                <p>Сим-карты для туристов konekaart продаются во всех магазинах, на заправочных станциях и в газетных киосках. Обычные стоят 3 евро, с подключенным интернетом 5-10 евро.</p>
                <h5>Интернет</h5>
                <p>Почти в каждом городе в ресторанах, кафе, на вокзалах и в аэропорту есть доступ к бесплатному WI-FI. Также во всех отелях есть свои точки доступа.</p>
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
                                <div>Единый экстренный телефонный номер</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
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
                                    <nobr>230 В</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeF">разъем типа F</a>
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
<section id="prices">
    <div class="container">
        <h2>Цены</h2>
        <div class="row">
            <div class="col-lg-6">
                <p>Эстонские цены на жилье в Эстонии начинаются с 10 евро за комнату в хостеле. Чтобы остановится в простом отеле необходимо будет отдать минимум 40 евро за двухместный номер. В 5* отеле цены начинаются от 155 евро и выше. Стоимость курса лечения в санатории с проживанием стартует от 150 евро.</p>
                <p>Поесть в недорогом кафе Таллина на одного можно за 7 евро, выпить чашечку капучино за 2.8 евро. Стандартный сет в Макдональдсе обойдется в 5.6 евро, а стандартный ужин из 2 блюд с вином в ресторане старого города обойдется в 40-50 евро. Выпить крафтового пива в местном баре можно от 3 евро кружка и выше. </p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Цены в магазине, Таллинн, Эстония | Что можно купить на 500 рублей в Европе? | Цены в Европе" src="https://i.ytimg.com/vi/LO-eAL9480U/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/LO-eAL9480U?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Цены в магазине, Таллинн, Эстония<br>© Жизнь в Эстонии 2017</figcaption>
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