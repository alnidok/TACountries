        <section class="bg-gradient text-light p-0">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12">
                        <div class="space-lg pb-0">
                            <h1 class="display-4 no-wrap">Россия</h1>
                            <div class="lead">
                                <b>Столица</b>: Москва<br>
                                <b>Официальный язык</b>: русский<br>
                                <b>Валюта</b>: RUB - российский рубль (1 рубль = 100 копеек)<br>
                                <b>Территория</b>: 17 125 191 км²<br>
                                <b>Население</b>: 144.3 млн человек<br>
                                <b>Часовой пояс</b>: от&nbsp;UTC+2&nbsp;на западе (г. Калининград) до&nbsp;UTC+12&nbsp;на востоке
                                (Камчатский край). Часовой пояс Москвы&nbsp;&mdash; GMT+3, разница с&nbsp;Астаной составляет &minus;3&nbsp;часа.
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
                        <p>Россия&nbsp;&mdash; многоликая страна с&nbsp;богатейшей и&nbsp;удивительной историей, что делает
                            ее&nbsp;привлекательной для множества туристов из&nbsp;других стран. Официальная столица России
                            Москва и&nbsp;культурная столица Санкт-Петербург, несомненно, являются самыми главными туристическими
                            зонами для иностранцев. Москва славится множеством культурных и&nbsp;исторических мест: Московский
                            Кремль, храм Христа Спасителя, Третьяковская галерея, Большой театр&nbsp;&mdash; этот список
                            можно продолжать бесконечно.</p>

                        <!--Карта-->

                        <?= $this->render('_map', $country) ?>

                        <p>Санкт-Петербург&nbsp;же покорит сердце каждого своей красотой, уникальной архитектурой, обилием рек
                            и&nbsp;мостов, концентрацией культурных мест, среди которых особенно хочется отметить Дворцовую
                            площадь, Эрмитаж, Петергоф.</p>
                        <p>После посещения этих городов туристам обязательно захочется продолжать исследовать каждый уголок
                            России.</p>
                        <p>А&nbsp;посмотреть здесь есть на&nbsp;что: это полные исторических памятников города Казань, Ростов,
                            Великий Новгород и&nbsp;многие другие, самое глубокое озеро в&nbsp;мире Байкал, загадочные Ленские
                            столбы в&nbsp;Якутии, живописный Плёс в&nbsp;Ивановской области, вдохновляющий Западный Саян
                            в&nbsp;Краснодарском крае, прекрасный Алтай, плато Укок с&nbsp;марсианским пейзажем в&nbsp;Алтайском
                            крае, многоликое Ладожское озеро в&nbsp;Карелии и&nbsp;Ленинградской области, вулканы и&nbsp;захватывающие
                            дух виды на&nbsp;Камчатке, безмятежное Белое море в&nbsp;Архангельской области и&nbsp;многое-многое
                            другое.</p>

                        <figure class="figure d-block">
                            <div class="video-cover box-shadow">
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
                            <figcaption class="figure-caption text-right">Россия с&nbsp;квадрокоптеров&nbsp;| Russia from height&nbsp;| Music video
                                <br>&copy;&nbsp;Страна Снега 2017</figcaption>
                        </figure>

                        <hr>

                        <figure class="figure d-block">
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
                            <figcaption class="figure-caption text-right">СССР&nbsp;&mdash; Империя наоборот&nbsp;&mdash; Россия
                                <br>&copy;&nbsp;История и&nbsp;современность 2018</figcaption>
                        </figure>

                    </div>
                </div>
            </div>
        </section>

        <nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
            <div class="container">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" href="#culture">Культура и&nbsp;традиции</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visa">Въезд в&nbsp;страну</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="#sight">Что посмотреть</a>
                    </li>
                </ul>
            </div>
        </nav>

        <section id="culture">
            <div class="container">
                <h2>Культура и&nbsp;традиции</h2>

                <p>Россия&nbsp;&mdash; многонациональная страна, здесь проживают представители более 200&nbsp;этногрупп, можно
                    выделить 100 языков и&nbsp;диалектов. Самыми распространенными языками являются русский (является родным
                    для&nbsp;92% населения&nbsp;РФ), татарский, башкирский, казахский, чувашский, украинский, чеченский языки.</p>
                <p>Россияне исповедуют православие (до&nbsp;75% опрошенных), католицизм, буддизм, иудаизм, лютеранство, протестантизм
                    и&nbsp;другие религиозные течения, а&nbsp;также атеизм. Все эти факторы обуславливают богатое и&nbsp;многообразное
                    культурное наследие страны. Российская литература, философия, музыка, архитектура, театр, балет, кинематограф
                    составляют огромную и&nbsp;важную часть мировой культуры.</p>

                <p>
                    <i class="icon-link"></i> Министерство Культуры РФ&nbsp;&mdash;
                    <a href="http://www.mkrf.ru/" target="_blank">www.mkrf.ru</a>
                </p>
                <p>
                    <i class="icon-link"></i> Министерство Туризма РФ -
                    <a href="http://www.russiatourism.ru/" target="_blank">www.russiatourism.ru</a>
                </p>
                <p>Россия также отличается множеством традиций и&nbsp;обычаев, которые также имеют и&nbsp;отличительные особенности
                    у&nbsp;каждого народа, в&nbsp;каждом уголке страны.</p>

                <h5>Праздники и&nbsp;нерабочие дни</h5>

                <div class="card bg-secondary">
                    <div class="card-body">

                        <ul>
                            <li>1-6 и&nbsp;8&nbsp;января&nbsp;&mdash; Новогодние каникулы</li>
                            <li>7&nbsp;января&nbsp;&mdash; Рождество Христово</li>
                            <li>23&nbsp;февраля&nbsp;&mdash; День защитника Отечества</li>
                            <li>8&nbsp;марта&nbsp;&mdash; Международный женский день</li>
                            <li>1&nbsp;мая&nbsp;&mdash; Праздник весны и&nbsp;труда</li>
                            <li>9&nbsp;мая&nbsp;&mdash; День Победы</li>
                            <li>12&nbsp;июня&nbsp;&mdash; День России</li>
                            <li>4&nbsp;ноября&nbsp;&mdash; День народного единства</li>

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
                        <p>Для граждан Казахстана въезд в&nbsp;Российскую Федерацию безвизовый, не&nbsp;требуется также наличие
                            загранпаспорта, необходимо лишь иметь удостоверение личности. На&nbsp;пересечении границы Россия-Казахстан
                            гражданам&nbsp;РК следует оформить миграционную карту &mdash; в&nbsp;ней отмечается дата въезда.
                            Этот документ подтверждает право на&nbsp;пребывание в&nbsp;РФ сроком до&nbsp;90&nbsp;дней.</p>

                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <i class="icon-v-card mr-1"></i> Безвизовый режим</div>
                                        <span>до&nbsp;90&nbsp;дней</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <i class="icon-news mr-1"></i> Регистрация</div>
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
                                        <div>Астана&nbsp;&mdash; Санкт-Петербург</div>
                                        <span>10&nbsp;раз/нед</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>Астана&nbsp;&mdash; Москва</div>
                                        <span>12&nbsp;раз/нед</span>
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

                <p>
                    <i class="icon icon-link"></i> Сайт таможенной службы РФ&nbsp;&mdash;
                    <a href="http://customs.ru/" target="_blank">customs.ru</a>
                </p>


                <p>В&nbsp;случае вывоза из&nbsp;РК иностранной валюты в&nbsp;размере свыше 3000&nbsp;USD, необходимо оформление
                    декларации.</p>


                <p>Детальную информацию о&nbsp;правилах ввоза и&nbsp;вывоза товаров физлицами можно найти на&nbsp;сайтах ФТС
                    России, Комиссии таможенного союза и&nbsp;КТК МФ&nbsp;РК:</p>


                <ul>
                    <li>
                        <i class="icon icon-link"></i>
                        <a href="http://www.customs.ru" target="_blank">www.customs.ru</a>
                    </li>
                    <li>
                        <i class="icon icon-link"></i>
                        <a href="http://www.eurasiancommission.org" target="_blank">www.eurasiancommission.org</a>
                    </li>
                </ul>



            </div>
        </section>

        <section id="transport" class="bg-white">
            <div class="container">
                <h2>Транспорт</h2>

                <div class="row justify-content-between">
                    <div class="col-12 col-md-8 col-lg-7">
                        <p>Граница России и&nbsp;Казахстана преимущественно сухопутная&nbsp;&mdash; это самая протяженная межгосударственная
                            граница в&nbsp;мире (9144,7 км).
                        </p>
                        <p>Пересечь границу с&nbsp;РФ можно свободно как наземным, так и&nbsp;воздушным транспортом: на&nbsp;личном
                            автомобиле, автобусе, посредством ж/д и&nbsp;морского сообщения, регулярными авиарейсами.</p>
                        <p>Среди крупных авиаперевозчиков можно отметить Air Astana, Аэрофлот, S7.</p>
                        <p>На&nbsp;территории России в&nbsp;зависимости от&nbsp;местонахождения туристического объекта выделяют
                            различные приоритетные виды транспорта.</p>
                        <p>В&nbsp;крупных городах России удобно перемещаться городским транспортом&nbsp;&mdash; автобусы, трамваи,
                            троллейбусы. Билеты приобретаются на&nbsp;остановочных пунктах или непосредственно у&nbsp;кондуктора
                            автотранспорта. Выгодно приобретать проездные билеты, если планируется большое количество поездок.</p>
                        <p>В&nbsp;таких мегаполисах как Москва, Санкт-Петербург, Нижний Новгород, Самара, Екатеринбург, Новосибирск
                            и&nbsp;Казань имеется метро.</p>
                        <p>Довольно часто туристы прибегают к&nbsp;услугам такси, его можно поймать на&nbsp;улице, заказать
                            по&nbsp;телефону или при помощи мобильных приложений.
                        </p>



                    </div>
                    <div class="col-12 col-md-4">
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
                                        <span>от&nbsp;9&nbsp;рублей/км</span>
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

                <div class="card mb-4">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <h6 class="title-decorative">Казахстанское водительское удостоверение</h6>
                            <p>Турист из&nbsp;РК, временно пребывающий на&nbsp;территории&nbsp;РФ, может быть допущен к&nbsp;управлению
                                автотранспортом при наличии казахстанского или международного водительского удостоверения.</p>
                            <p>В&nbsp;России, как и&nbsp;в&nbsp;Республике Казахстан, правостороннее движение. Контроль за&nbsp;следованием
                                правилам дорожного движения осуществляется ГИБДД. Необходимо знать, что в&nbsp;населенных
                                пунктах существует лимит скорости&nbsp;&mdash; 60&nbsp;км/ч, если иное не&nbsp;предусмотрено
                                дорожными знаками.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-between">
                    <div class="col-12 col-md-8 col-lg-7">


                        <h5>Налог</h5>
                        <p>Иностранные физлица освобождены от&nbsp;уплаты таможенных пошлин и&nbsp;налогов на&nbsp;автомобили,
                            зарегистрированные в&nbsp;иностранном государстве на&nbsp;срок своего временного пребывания,
                            но&nbsp;не&nbsp;более чем на&nbsp;1&nbsp;год.</p>



                        <h5>Парковки</h5>
                        <p>В&nbsp;некоторых центральных районах мегаполисов в&nbsp;целях борьбы с&nbsp;хаотичным скоплением
                            транспортных средств введены платные парковки (оплата почасовая, от&nbsp;40&nbsp;руб/час). Как
                            правило, на&nbsp;данных парковках можно бесплатно оставлять автомобиль в&nbsp;праздники, выходные
                            дни и&nbsp;в&nbsp;ночное время.</p>

                        <h5>ДТП</h5>
                        <p>В&nbsp;случае ДТП необходимо безотлагательно остановить транспортное средство, включить аварийку,
                            обозначить знак аварийной остановки (на&nbsp;расстоянии 15&nbsp;м от&nbsp;авто в&nbsp;населенных
                            пунктах и&nbsp;30&nbsp;м за&nbsp;пределами населенного пункта) и&nbsp;дожидаться прибытия сотрудника
                            автоинспекции.
                        </p>
                    </div>
                    <div class="col-12 col-md-4">
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
                                        <span>38,08&nbsp;руб/литр</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>АИ-95</div>
                                        <span>41,02&nbsp;руб/литр</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>АИ-98</div>
                                        <span>46,15&nbsp;руб/литр</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <div>Дизель</div>
                                        <span>40,71&nbsp;руб/литр</span>
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
                            <figcaption class="figure-caption text-right">ФЕДЕРАЛЬНЫЕ ДОРОГИ&nbsp;&mdash; ЛУЧШИЕ ТРАССЫ СТРАНЫ
                                <br>&copy;&nbsp;Росавтодор 2015</figcaption>
                        </figure>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col">
                        <h3>Страхование авто</h3>
                        <p>Согласно действующему закону, лицо, управляющее автомобилем на&nbsp;территории&nbsp;РФ, обязано иметь
                            полис обязательного страхования ОСАГО. Исключение составляют водители, имеющие &laquo;Зеленую
                            карту&raquo;&nbsp;&mdash; международная страховка, получаемая туристом в&nbsp;своей стране.</p>
                        <p>В&nbsp;случае окончания действия этой карты во&nbsp;время нахождения иностранца в&nbsp;России, необходимо
                            оформление ОСАГО в&nbsp;местной страховой компании. При отсутствии международной страховки иностранный
                            водитель должен оформить полис ОСАГО. Если водитель не&nbsp;получал &laquo;Зелёную карту&raquo;,
                            он&nbsp;должен оформить полис ОСАГО по&nbsp;прибытии на&nbsp;территорию РФ.
                        </p>

                        <a href="http://osago.account.travel" class="btn btn-outline-success">Оформить электронный полис ОСАГО</a>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col">
                        <h3>Аренда авто</h3>
                        <p>Часть туристов предпочитает самостоятельное передвижение на&nbsp;взятом в&nbsp;аренду автомобиле.
                            Центры проката предлагают самые разные авто во&nbsp;всех крупных городах России. Выбрать автомобиль
                            по&nbsp;душе можно заранее с&nbsp;помощью специализированных ресурсов в&nbsp;сети интернет или
                            прямо на&nbsp;месте.</p>
                        <p>Как правило, выгоднее брать автомобиль на&nbsp;длительный срок проката при долгосрочном пребывании
                            в&nbsp;стране.</p>
                    </div>
                </div>

            </div>
        </section>

        <section id="health" class="bg-white">
            <div class="container">
                <h2>Здравоохранение</h2>

                <p>Санитарно-эпидемиологическая обстановки в&nbsp;России сравнительно благополучная, наблюдается стабильная
                    ситуация в&nbsp;распространении эпидемических очагов, особо опасные инфекции не&nbsp;отмечены. В&nbsp;связи
                    с&nbsp;этим нет необходимости в&nbsp;проведении дополнительной вакцинации для иностранных граждан.</p>
                <p>Следует учитывать сезонные и&nbsp;климатические особенности людям с&nbsp;хроническими заболеваниями.</p>
                <p>Также в&nbsp;России, как и&nbsp;в&nbsp;РК, в&nbsp;весенне-летний сезон имеется риск инфицирования клещевым
                    энцефалитом в&nbsp;некоторых лесо-парковых зонах и&nbsp;сельской местности, поэтому необходимы средства
                    защиты от&nbsp;насекомых. В&nbsp;стране действует система скорой неотложной медпомощи (тел.&nbsp;03&nbsp;или
                    112)</p>

                <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
            </div>
        </section>

        <section id="communication">
            <div class="container">
                <h2>Связь и&nbsp;коммуникации</h2>

                <div class="row justify-content-between">
                    <div class="col-12 col-md-8 col-lg-7">


                        <h5>Мобильная связь</h5>
                        <p>Сотовая связь в&nbsp;России представлена тремя основными операторами&nbsp;&mdash; МТС, Мегафон, Билайн.</p>
                        <p>Менее распространенные операторы&nbsp;&mdash; Tele2, Ростелеком, Смартс.</p>
                        <p>Уровень охвата мобильной сети в&nbsp;настоящее время практически повсеместный.</p>

                        <h5>Интернет</h5>
                        <p>Россия занимает передовые места по&nbsp;количеству интернет-пользователей. Более&nbsp;80% совершеннолетних
                            россиян пользуются сетью Интернет, из&nbsp;них более&nbsp;60% регулярно.</p>
                        <p>Ключевые интернет-провайдеры: Ростелеком, МТС, Корбина-Телеком, Йота, Мегафон и&nbsp;др.</p>

                    </div>
                    <div class="col-12 col-md-4">
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
                            <figcaption class="figure-caption text-right">Бесплатный wi-fi в&nbsp;метро-как подключиться?
                                <br>&copy;&nbsp;непутевый TRIP 2017</figcaption>
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
