<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Россия</h1>
                <div class="lead">
                        <b>Столица</b>: Москва<br>
                        <b>Официальный язык</b>: русский<br>
                        <b>Валюта</b>: RUB - российский рубль (1 рубль = 100 копеек)<br>
                        <b>Территория</b>: 17 125 191 км²<br>
                        <b>Население</b>: 144.3 млн человек<br>
                        <b>Часовой пояс</b>: от UTC+2 на западе (г. Калининград) до UTC+12 на востоке
                        (Камчатский край). Часовой пояс Москвы &mdash; GMT+3, разница с Астаной составляет &minus;3 часа.
                    </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Россия с квадрокоптеров | Russia from height | Music video" src="https://i.ytimg.com/vi/9RfuxVZdtjY/maxresdefault.jpg"
                             class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/9RfuxVZdtjY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                    mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">&copy; Страна Снега, 2017</figcaption>
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
                <p>Россия &mdash; многоликая страна с богатейшей и удивительной историей, что делает
                    ее привлекательной для множества туристов из других стран. Официальная столица России
                    Москва и культурная столица Санкт-Петербург, несомненно, являются самыми главными туристическими
                    зонами для иностранцев. Москва славится множеством культурных и исторических мест: Московский
                    Кремль, храм Христа Спасителя, Третьяковская галерея, Большой театр &mdash; этот список
                    можно продолжать бесконечно.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Санкт-Петербург же покорит сердце каждого своей красотой, уникальной архитектурой, обилием рек
                    и мостов, концентрацией культурных мест, среди которых особенно хочется отметить Дворцовую
                    площадь, Эрмитаж, Петергоф.</p>
                <p>После посещения этих городов туристам обязательно захочется продолжать исследовать каждый уголок
                    России.</p>
                <p>А посмотреть здесь есть на что: это полные исторических памятников города Казань, Ростов,
                    Великий Новгород и многие другие, самое глубокое озеро в мире Байкал, загадочные Ленские
                    столбы в Якутии, живописный Плёс в Ивановской области, вдохновляющий Западный Саян
                    в Краснодарском крае, прекрасный Алтай, плато Укок с марсианским пейзажем в Алтайском
                    крае, многоликое Ладожское озеро в Карелии и Ленинградской области, вулканы и захватывающие
                    дух виды на Камчатке, безмятежное Белое море в Архангельской области и многое-многое
                    другое.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Moscow Russia Aerial 5K" src="https://i.vimeocdn.com/video/664339245_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/240910267?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Moscow Russia Aerial 5K<br>© Timelab.pro 2017</figcaption>
            </figure>
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="СССР - Империя наоборот - Россия" src="https://i.ytimg.com/vi/w0eeb7ZDsqo/maxresdefault.jpg" class="bg-image" />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/w0eeb7ZDsqo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">СССР &mdash; Империя наоборот &mdash; Россия
                    <br>&copy; История и современность 2018</figcaption>
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
        <p>Население России распределено неравномерно: около 70% проживают в европейской части России, при этом плотность населения европейской России составляет 27 чел/км², а азиатской — 3 чел/км².</p>
        <p>В России проживают представители более 200 национальностей. Около 81% от общей численности населения составляют русские. Выделяются еще шесть этнических групп численностью более 1 млн — татары (3,9%), украинцы (1,4%), башкиры (1,1%), чуваши (1%), чеченцы (1%) и армяне (0,9%).</p>
        <p>Мужчин и женщин примерно поровну - на 30 женщин приходится 26 мужчин. Средняя продолжительность жизни в России - 72,5 года. У мужчин она составляет 67,5 лет, а у женщин - 77,4 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>


<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>

        <div class="row justify-content-between">
            <div class="col-md-6">
                <p>Россия &mdash; многонациональная страна, здесь проживают представители более 200 этногрупп, можно
                    выделить 100 языков и диалектов. Самыми распространенными языками являются русский (является родным
                    для 92% населения РФ), татарский, башкирский, казахский, чувашский, украинский, чеченский языки.</p>
                <p>Россияне исповедуют православие (до 75% опрошенных), католицизм, буддизм, иудаизм, лютеранство, протестантизм
                    и другие религиозные течения, а также атеизм. Все эти факторы обуславливают богатое и многообразное
                    культурное наследие страны. Российская литература, философия, музыка, архитектура, театр, балет, кинематограф
                    составляют огромную и важную часть мировой культуры.</p>

                <p>
                    <i class="icon-link"></i> Министерство Культуры РФ &mdash;
                    <a href="http://www.mkrf.ru/" target="_blank" rel="nofollow">www.mkrf.ru</a>
                </p>
                <p>
                    <i class="icon-link"></i> Министерство Туризма РФ -
                    <a href="http://www.russiatourism.ru/" target="_blank" rel="nofollow">www.russiatourism.ru</a>
                </p>
                <p>Россия также отличается множеством традиций и обычаев, которые также имеют и отличительные особенности
                    у каждого народа, в каждом уголке страны.</p>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздники и нерабочие даты</h6>
                        <ul>
                            <li>1-6 и 8 января &mdash; Новогодние каникулы</li>
                            <li>7 января &mdash; Рождество Христово</li>
                            <li>23 февраля &mdash; День защитника Отечества</li>
                            <li>8 марта &mdash; Международный женский день</li>
                            <li>1 мая &mdash; Праздник весны и труда</li>
                            <li>9 мая &mdash; День Победы</li>
                            <li>12 июня &mdash; День России</li>
                            <li>4 ноября &mdash; День народного единства</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <h2>Климат</h2>
        <div class="row">
            <div class="col-lg-6">
                <p>Положение России в северной части Евразии обусловило ее размещение в арктическом, субарктическом, умеренном и частично в субтропическом климатических поясах. Преобладающая часть территории расположена в умеренном поясе. Разнообразие климата также зависит от особенностей рельефа и близости или удалённости океана.</p>
                <p>Средние температуры января, по разным регионам, колеблются от +6 до −50 °C, июля от 1 до 25 °C; осадков от 150 до 2000 мм в год. Вечная мерзлота (районы севера европейской части, Сибири и Дальнего Востока) занимает 65 % территории России.</p>
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
                <p>Для граждан Казахстана въезд в Российскую Федерацию безвизовый, не требуется также наличие
                    загранпаспорта, необходимо лишь иметь удостоверение личности.</p>
                <p>На пересечении границы Россия-Казахстан
                    гражданам РК следует оформить миграционную карту &mdash; в ней отмечается дата въезда.
                    Этот документ подтверждает право на пребывание в РФ сроком до 90 дней.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Безвизовый режим</div>
                                <span>до 90 дней</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-news mr-1"></i> Регистрация</div>
                                <span>обязательна</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6">
                            <b>Прямые авиарейсы</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Астана &mdash; Санкт-Петербург</div>
                                <span>10 раз/нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Астана &mdash; Москва</div>
                                <span>12 раз/нед</span>
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
        <p>
            <i class="icon icon-link"></i> Сайт таможенной службы РФ &mdash;
            <a href="http://customs.ru/" target="_blank" rel="nofollow">customs.ru</a>
        </p>
        <p>В случае вывоза из РК иностранной валюты в размере свыше 3000 USD, необходимо оформление
            декларации.</p>
        <p>Детальную информацию о правилах ввоза и вывоза товаров физлицами можно найти на сайтах ФТС
            России, Комиссии таможенного союза и КТК МФ РК:</p>
        <ul>
            <li>
                <i class="icon icon-link"></i>
                <a href="http://www.customs.ru" target="_blank" rel="nofollow">www.customs.ru</a>
            </li>
            <li>
                <i class="icon icon-link"></i>
                <a href="http://www.eurasiancommission.org" target="_blank" rel="nofollow">www.eurasiancommission.org</a>
            </li>
        </ul>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Граница России и Казахстана преимущественно сухопутная &mdash; это самая протяженная межгосударственная
                    граница в мире (9144,7 км).
                </p>
                <p>Пересечь границу с РФ можно свободно как наземным, так и воздушным транспортом: на личном
                    автомобиле, автобусе, посредством ж/д и морского сообщения, регулярными авиарейсами.</p>
                <p>Среди крупных авиаперевозчиков можно отметить Air Astana, Аэрофлот, S7.</p>
                <p>На территории России в зависимости от местонахождения туристического объекта выделяют
                    различные приоритетные виды транспорта.</p>
                <p>В крупных городах России удобно перемещаться городским транспортом &mdash; автобусы, трамваи,
                    троллейбусы. Билеты приобретаются на остановочных пунктах или непосредственно у кондуктора
                    автотранспорта. Выгодно приобретать проездные билеты, если планируется большое количество поездок.</p>
                <p>В таких мегаполисах как Москва, Санкт-Петербург, Нижний Новгород, Самара, Екатеринбург, Новосибирск
                    и Казань имеется метро.</p>
                <p>Довольно часто туристы прибегают к услугам такси, его можно поймать на улице, заказать
                    по телефону или при помощи мобильных приложений.
                </p>



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
                                <div>Метро</div>
                                <span>30-36 рублей</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>16-48 рублей</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 9 рублей/км</span>
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
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Автомобиль</h2>

                <p>В России, как и в Республике Казахстан, правостороннее движение. Контроль за следованием
                    правилам дорожного движения осуществляется ГИБДД. Необходимо знать, что в населенных
                    пунктах существует лимит скорости &mdash; 60 км/ч, если иное не предусмотрено
                    дорожными знаками.
                </p>

                <h5>Налог</h5>
                <p>Иностранные физлица освобождены от уплаты таможенных пошлин и налогов на автомобили,
                    зарегистрированные в иностранном государстве на срок своего временного пребывания,
                    но не более чем на 1 год.</p>

                <h5>Парковки</h5>
                <p>В некоторых центральных районах мегаполисов в целях борьбы с хаотичным скоплением
                    транспортных средств введены платные парковки (оплата почасовая, от 40 руб/час). Как
                    правило, на данных парковках можно бесплатно оставлять автомобиль в праздники, выходные
                    дни и в ночное время.</p>

                <h5>ДТП</h5>
                <p>В случае ДТП необходимо безотлагательно остановить транспортное средство, включить аварийку,
                    обозначить знак аварийной остановки (на расстоянии 15 м от авто в населенных
                    пунктах и 30 м за пределами населенного пункта) и дожидаться прибытия сотрудника
                    автоинспекции.
                </p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">Турист из РК, временно пребывающий на территории РФ, может быть допущен к управлению автотранспортом при наличии казахстанского или международного водительского удостоверения.</div>
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
                                <div>АИ-92</div>
                                <span>38,08 руб/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-95</div>
                                <span>41,02 руб/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>46,15 руб/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>40,71 руб/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ФЕДЕРАЛЬНЫЕ ДОРОГИ – ЛУЧШИЕ ТРАССЫ СТРАНЫ" src="https://i.ytimg.com/vi/P2depdsQQ_k/maxresdefault.jpg" class="bg-image"
                        />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/P2depdsQQ_k?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ФЕДЕРАЛЬНЫЕ ДОРОГИ &mdash; ЛУЧШИЕ ТРАССЫ СТРАНЫ
                        <br>&copy; Росавтодор 2015</figcaption>
                </figure>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Страхование авто</h3>
                <p>Согласно действующему закону, лицо, управляющее автомобилем на территории РФ, обязано иметь
                    полис обязательного страхования ОСАГО. Исключение составляют водители, имеющие &laquo;Зеленую
                    карту&raquo; &mdash; международная страховка, получаемая туристом в своей стране.</p>
                <p>В случае окончания действия этой карты во время нахождения иностранца в России, необходимо
                    оформление ОСАГО в местной страховой компании. При отсутствии международной страховки иностранный
                    водитель должен оформить полис ОСАГО. Если водитель не получал &laquo;Зелёную карту&raquo;,
                    он должен оформить полис ОСАГО по прибытии на территорию РФ.
                </p>

                <a href="https://osago.account.travel" class="btn btn-outline-success">Оформить электронный полис ОСАГО</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Аренда авто</h3>
                <p>Часть туристов предпочитает самостоятельное передвижение на взятом в аренду автомобиле.
                    Центры проката предлагают самые разные авто во всех крупных городах России. Выбрать автомобиль
                    по душе можно заранее с помощью специализированных ресурсов в сети интернет или
                    прямо на месте.</p>
                <p>Как правило, выгоднее брать автомобиль на длительный срок проката при долгосрочном пребывании
                    в стране.</p>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Санитарно-эпидемиологическая обстановки в России сравнительно благополучная, наблюдается стабильная
            ситуация в распространении эпидемических очагов, особо опасные инфекции не отмечены. В связи
            с этим нет необходимости в проведении дополнительной вакцинации для иностранных граждан.</p>
        <p>Следует учитывать сезонные и климатические особенности людям с хроническими заболеваниями.</p>
        <p>Также в России, как и в РК, в весенне-летний сезон имеется риск инфицирования клещевым
            энцефалитом в некоторых лесопарковых зонах и сельской местности, поэтому необходимы средства
            защиты от насекомых. В стране действует система скорой неотложной медпомощи (тел. 03 или
            112)</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">


                <h5>Мобильная связь</h5>
                <p>Сотовая связь в России представлена тремя основными операторами:</p>
                <ul>
                    <li>МТС - <a href="http://www.mts.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Мегафон - <a href="https://megafon.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Билайн - <a href="https://beeline.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                
                <p>Менее распространенные операторы:</p>
                <ul>
                    <li>Теле2 - <a href="https://tele2.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Ростелеком - <a href="https://rt.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>

                <p>Уровень охвата мобильной сети в настоящее время практически повсеместный.</p>

                <h5>Интернет</h5>
                <p>Россия занимает передовые места по количеству интернет-пользователей. Более 80% совершеннолетних
                    россиян пользуются сетью Интернет, из них более 60% регулярно.</p>
                <p>Ключевые интернет-провайдеры:</p>
                <ul>
                    <li>Ростелеком - <a href="https://rt.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>МТС - <a href="http://www.mts.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Билайн - <a href="https://beeline.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Мегафон - <a href="https://megafon.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Йота - <a href="https://www.yota.ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
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
                                <div>Пожарная служба</div>
                                <span>01, 101</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>02, 102</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>03, 103</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый экстренный номер</div>
                                <span>112, 113</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Бесплатный wi-fi в метро-как подключиться?" src="https://i.ytimg.com/vi/-qu6w1Q5zEY/maxresdefault.jpg" class="bg-image"
                        />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/-qu6w1Q5zEY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Бесплатный wi-fi в метро-как подключиться?
                        <br>&copy; непутевый TRIP 2017</figcaption>
                </figure>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-light-bulb"></i>
                        <span class="h6"><b>Электросеть</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <nobr>220, 230 В</nobr>, <nobr>50 Гц</nobr>. Используются разъемы <a href="/journal/electric-sockets.html#typeC">типа С и F</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_c.svg" style="width:100px; max-width:100%;">
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
