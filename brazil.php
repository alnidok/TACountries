
<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Бразилия</h1>
                    <div class="lead">
                        <b>Столица</b>: Бразилиа<br>
                        <b>Официальный язык</b>: португальский<br>
                        <b>Валюта</b>: BRL — бразильский реал (1 BRL = 100 сентаво)<br>
                        <b>Территория</b>: 8 515 770 км²<br>
                        <b>Население</b>: 206 млн человек (2016 г.)<br>
                        <b>Часовой пояс</b>: от UTC−5 до UTC−2. Разница во времени между Астаной и Бразилиа – 9 часов летом и 8 часов зимой<br>
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
                <p>Бразилия - крупное государство (занимает 5-е место в мире по площади территории и 6-е место по численности населения), расположенное в восточной и центральной частях Южной Америки.</p>
                <p>Страна соседствует с Венесуэлой, Гайаной, Суринамом, Французской Гвианой, Боливией, Перу, Парагваем, Аргентиной и Уругваем.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Государство располагается в экваториальной, тропической и субтропической климатических зонах.</p>
                <p>Стоит учитывать, что Бразилия находится в Южном полушарии, поэтому времена года отличаются от северополушарных стран: сентябрь-декабрь соответствуют весеннему сезону, декабрь-март — летнему, март-июнь — осеннему, а конец июля, август и начало сентября являются зимними месяцами.</p>
                <p>Среднемесячная температура зимой составляет до +16 °C, летом до +29 °C.</p>
                <p>Среднегодовое количество осадков довольно значительное — более 1000 мм в год.</p>
                <p>Более 60% населения исповедуют католицизм, около 20% — протестанты.</p>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Бразилия глазами туриста (что можно увидеть, и где побывать)" src="https://i.ytimg.com/vi/QOSytw9lmHI/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/QOSytw9lmHI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Бразилия глазами туриста (что можно увидеть, и где побывать)
                        <br>© Бразилия Good 2016</figcaption>
                </figure>


                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Бразилия. Интересные факты о Бразилии." src="https://i.ytimg.com/vi/xqBBzo0aCKs/maxresdefault.jpg" class="bg-image"
                        />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/xqBBzo0aCKs?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Бразилия. Интересные факты о Бразилии.
                        <br>© CoolTimes 2017</figcaption>
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
                <p>На становление культуры Бразилии существенно повлияли португальцы (религия и язык), а также африканцы, индейцы, переселенцы из Европы и Азии.</p>
                <p>Множество бразильских культурных объектов внесены в списки Всемирного культурного наследия ЮНЕСКО. Туристам непременно захочется посетить самые известные среди них:</p>
                <ul>
                    <li>исторический центр г. Гояс</li>
                    <li>площадь св. Франциска (Сан-Кристован)</li>
                    <li>центр Сан-Луиса</li>
                    <li>храм в г. Конгоньяс</li>
                    <li>исторический центр Ору-Прету</li>
                </ul>
                <p>Рио-де-Жанейро славится множеством интересных мест — советуем посетить Статую Христа-Искупителя, стадион «Маракана»,  Сахарную голову, ботанический сад и лестницу «Селарона». На границе Бразилии с Аргентиной располагается красивейший национальный парк водопадов Игуасу.</p>
                <p>У большинства иностранцев Бразилия ассоциируется с футболом (а для бразильцев футбол действительно является важной частью жизни), особой танцевальной культурой, карнавалами в ритме самбо, а также своеобразным кинематографом (родина всемирно известных «мыльных опер»).</p>
                <p>Нельзя оставить без внимания и национальную кухню, имеющую различия в зависимости от региона Бразилии. Но всё же можно выделить самые типичные блюда:</p>
                <ul>
                    <li>«Фейжоада» — смесь из сушеного мяса, колбасы, свинины и черной фасоли, перца и чеснока. Подается с капустой и апельсинами</li>
                    <li>«Такато» — густой суп с креветками</li>
                    <li>«Мокека» — ароматная тушеная рыба в глиняном горшочке</li>
                    <li>«Сарапетеу» — тушеная свиная печень с помидорами, луком и перцем</li>
                    <li>«Итапоа» — пудинг из крабового мяса</li>
                </ul>
                <p>К основным блюдам подаются круглые булочки из муки тапиоки и сыра.</p>
                <p><i class="icon-link"></i> Министерство Культуры Бразилии -  <a href="http://www.cultura.gov.br/" target="_blank">cultura.gov.br</a></p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="float-right icon-shield"></i>
                        <span class="h6"><b>Безопасность</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>В Бразилии высокий уровень преступности, особенно на севере и северо-востоке государства, несмотря на то, что за безопасность туристов отвечает целая армия полицейских.</p>
                            <p>Пляжи и территории гостиниц оборудованы скрытыми видеокамерами.</p>
                            <p>Основные правила безопасности:</p>
                            <ul>
                                <li>избегать нахождения на улицах в темное время суток</li>
                                <li>избегать места забастовок, митингов, демонстраций</li>
                                <li>оставлять ценные вещи и крупные суммы денег в сейфах отеля</li>
                                <li>при себе всегда иметь копию паспорта</li>
                                <li>пользоваться только лицензированными такси</li>
                                <li>обращаться в отделение полиции и консульства Казахстана в Бразилии при возникновении вопросов</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card bg-secondary mt-4">
            <div class="card-body">
                <h6 class="title-decorative">Праздничные и нерабочие дни:</h6>
                <ul>
                    <li>1 января – Новый год</li>
                    <li>февраль-март – Карнавал</li>
                    <li>апрель - Пасха</li>
                    <li>21 апреля – День национального героя Тирадентиса</li>
                    <li>1 мая – Праздник труда</li>
                    <li>7 сентября – День независимости (от Португалии)</li>
                    <li>2 ноября – День всех святых</li>
                    <li>15 ноября – День провозглашения Республики</li>
                    <li>24-25 декабря – Рождество</li>
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
                <p>В соответствии с соглашением между Правительством Республики Казахстан и Правительством Республики Бразилия от 06.09.2016 г. для граждан Казахстана въезд и пребывание на территории иностранного государства в туристических и деловых целях является безвизовым на период до 30 дней. Существует также возможность продления срока нахождения в стране в качестве туриста еще на 30 дней — этот вопрос решается в Федеральной полиции по запросу до истечения основного срока пребывания.</p>
                <p>Срок действия паспорта должен заканчиваться не менее чем через 6 месяцев после даты окончания действующей визы.</p>
                <p>Перелеты из Казахстана в Бразилию (транзитом через европейские страны) совершают авиакомпании Lufthansa, Air Astana, KLM, Turkish Airlines, Etihad и др.  Ориентировочное время перелета составляет 16 часов (без учета пересадок), расстояние – 13,5 тыс. км.</p>

            </div>
            <div class="col-12 col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="float-right icon-info"></i>
                        <span class="h6">
                            <b>Посольство Бразилии в Астане</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Адрес: 010000, Республика Казахстан, г. Астана, пр. Кабанбай Батыра 6/1 Тел: +7 (7172) 24-46-84 (вн. 109, 110)</p>
                            <p>Телефон дежурного консула: +7&nbsp;(701)&nbsp;539-03-00</p>
                            <p>Эл. почта: <a href="mailto:consular.astana@itamaraty.gov.br">consular.astana@itamaraty.gov.br</a></p>
                            <p>Сайт: <a href="http://astana.itamaraty.gov.br/ru/">http://astana.itamaraty.gov.br/ru/</a></p>
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

        <p><i class="icon icon-link"></i> Сайт таможенной службы Бразилии - <a href="http://idg.receita.fazenda.gov.br/" target="_blank">idg.receita.fazenda.gov.br</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Граждане Казахстана имеют право на беспошлинный ввоз до 400 сигарет или 25 сигар и до 2 л алкогольных напитков.</p>

        <h5>Валюта</h5>
        <p>Сумма ввозимой валюты не ограничена, однако подлежит таможенной декларации при достижении порога в 10 тыс. BRL в расчете на одного человека.</p>

        <h5>Животные</h5>
        <p>Все домашние животные должны иметь вет. сертификат, справку о прививке от бешенства и разрешение на ввоз, выданное бразильским консульским учреждением  за границей.</p>

        <h4 class="mb-2">Предметы, запрещенные к ввозу/вывозу:</h4>
        <ul>
            <li>оружие и боеприпасы</li>
            <li>радиоактивные материалы</li>
            <li>наркотики</li>
            <li>мясо и мясные продукты</li>
            <li>молочные продукты</li>
            <li>яйца</li>
            <li>свежие овощи и фрукты</li>
            <li>растения (при отсутствии фитосанитарного сертификата)</li>
            <li>мед и воск</li>
            <li>птица</li>
            <li>насекомые и улитки</li>
            <li>дикие животные и их шкуры, панцири, перья, ногти</li>
            <li>предметы антиквариата и исторической и/или культурной ценностей</li>
        </ul>


        

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Между основными городами страны туристы могут перемещаться посредством внутренних авиалиний, речным и морским транспортом и также на автобусах.</p>
                <p>Городской общественный транспорт представлен автобусами (во всех городах) и метро (Бразилиа, Рио-де-Жанейро, Сан-Паулу, Сальвадоре, Белу-Оризонти, Порто-Аллегри, Ресифи и Форталезе).</p>
                <p>Также к услугам туристов доступно такси, но водители редко владеют английским языком.</p>


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
                                <div>Метро</div>
                                <span>3 BRL</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>5 BRL</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 7 BRL</span>
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
                    <p>Граждане Казахстана имеют право управлять автомобилем на территории Бразилии при наличии казахстанского водительского удостоверения.</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Дороги в стране довольно хорошего качества, оснащены камерами видеонаблюдения, движение правостороннее, а ПДД близки к Казахстанским.</p>
                <p>Местные жители не отличаются образцовым стилем вождения, зачастую превышая скорость, выезжая на полосы встречного движения и проезжая на красный сигнал светофора.</p>
                <p>Также довольно опасно для туристов ездить в ночное время суток, во избежание прецедентов рекомендуется закрывать окна и блокировать двери.</p>
                <p>Самыми распространенными нарушениями являются превышение скорости и проезд на красный сигнал светофора. Нередко водители выезжают на встречную полосу движения и совершают очень резкие и неожиданные маневры. Ездить по ночным дорогам в Бразилии довольно опасно. В целях безопасности в ночное время следует ездить с закрытыми окнами, заблокировать двери и без необходимости лучше не останавливать машину. Также не следует оставлять в машине абсолютно никаких вещей.</p>

                <h5>Парковки</h5>
                <p>Количество платных парковок преобладает над бесплатными — ориентировочная стоимость от 2 до 10 USD в час в зависимости от приближенности к центру города. Автовладельцам запрещено занимать парковочные места, предназначенные для мотоциклистов и велосипедистов.</p>

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
                                <span>1,27 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>1.35 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1.03 USD</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Что вы знаете о Бразилии. Транспорт" src="https://i.ytimg.com/vi/m8r4jJNi_KI/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/m8r4jJNi_KI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Что вы знаете о Бразилии. Транспорт<br>© TV BRICS 2017</figcaption>
                </figure>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Аренда авто</h3>
                <p>Центры проката автомобилей в Бразилии находятся в крупных городах, около гостиниц и в аэропортах. Для аренды авто иностранным туристам необходимо иметь при себе водительское удостоверение и кредитную карту (или наличные для залога).</p>
                <p>Обязательно оформление страховки, составляющей 10-15 USD в сутки.</p>

                <a href="http://osago.account.travel" class="btn btn-outline-success">Оформить электронный полис ОСАГО</a>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Вследствие теплого и влажного климата Бразилии и распространения насекомых (а именно комаров и клопов) нередки вспышки инфекционных заболеваний - желтая лихорадка, малярия, лихорадка денге, вирус Зика, болезнь чагаса, сыпной тиф.</p>
        <p>Туристам перед поездкой рекомендована вакцинация от лихорадки денге, желтой лихорадки, малярии, а также необходимо убедиться в действующих прививках: от гриппа, гепатита А и В, коклюша, полиомиелита, краснухи, дифтерии, столбняка и др.</p>
        <p>Во избежание диареи, холеры и дизентерии категорически запрещено употреблять небутилированную воду и некачественную пищу.</p>
        <p>При возникновении проблем со здоровьем необходимо обращаться в медицинские клиники. Фармацевты в аптеках также имеют право ставить некоторые диагнозы и назначать лечение, делать прививки.</p>
        <p>Учитывая факт того, что медицинское обслуживание для иностранцев является платным, туристам настоятельно рекомендовано оформление  международной медицинской страховки.</p>
        <p>Телефон экстренной медицинской службы - 192.</p>


        
        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Мобильная связь в Бразилии предоставляется четырьмя операторами: Claro, Vivo, TIM и Oi. Сим-карту можно приобрести в большинстве газетных киосков или непосредственно в офисе оператора при наличии загранпаспорта.</p>
                <p>С недавнего времени все эти компании предоставляют своим клиентам доступ к сети Интернет посредством технологии LTE или 4G.</p>

                <ul>
                    <li>Claro - <a href="https://www.claro.com.br/" target="_blank">перейти на сайт</a></li>
                    <li>Vivo - <a href="http://www.vivo.com.br" target="_blank">перейти на сайт</a></li>
                    <li>TIM - <a href="http://www.tim.com.br/" target="_blank">перейти на сайт</a></li>
                    <li>Oi - <a href="http://www.oi.com.br/" target="_blank">перейти на сайт</a></li>
                </ul>
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
                                <span>190</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>192</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная охрана</div>
                                <span>193</span>
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
