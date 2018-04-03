<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Венгрия</h1>
                    <div class="lead">
                        <b>Столица</b>: Будапешт<br>
                        <b>Официальный язык</b>: венгерский<br>
                        <b>Валюта</b>: HUF - венгерский форинт<br>
                        <b>Территория</b>: 93 030 км²<br>
                        <b>Население</b>: 9.8 млн человек<br>
                        <b>Часовой пояс</b>: UTC +1. Разница с Астаной -4 часа. Осуществляется переход на летнее/зимнее время
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
                <p>Венгрия располагается в Центральной Европе, граничит с Украиной, Словакией, Румынией, Хорватией, Сербией, Словенией и Австрией.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Выходов к морю не имеет. Рельеф страны преимущественно равнинный — основная часть территории располагается на Среднедунайской низменности, окруженной горами, что обуславливает умеренно континентальный климат. Лето Венгрии жаркое, средняя температура июля +25 °С, зима мягкая и короткая, средняя температура января -10 °С.</p>
                <p>Речная система Венгрии относится к бассейну Дуная. На западе государства есть крупное озеро Балатон с термальными и минеральными источниками, привлекающими туристов со всего мира.</p>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Hatvan Timelapse (Hungary)" src="https://i.ytimg.com/vi/m60PyLP0G_Q/maxresdefault.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/m60PyLP0G_Q?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Hatvan Timelapse (Hungary)
                        <br>© CarKiller47 2014</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Путешествие в Венгрию-Будапешт 2014" src="https://i.ytimg.com/vi/TYq356zXOKc/hqdefault.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/TYq356zXOKc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Путешествие в Венгрию-Будапешт 2014
                        <br>© SAMARA VIDEO 2014</figcaption>
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

        <p>Венгрия - одно из самых древних государств в Европе, более 90% населения составляют венгры, остальные жители относятся к цыганской, немецкой, еврейской, румынской и сербской этническим группам.</p>
        <p>Большинство венгров католики.</p>

        <p><i class="icon-link"></i> Министерство людских ресурсов в Венгрии -  <a href="http://www.kormany.hu/en/ministry-of-human-resources/" target="_blank">kormany.hu/en/ministry-of-human-resources</a></p>

        <?= $this->render('_population') ?>

        <p>Венгрию смело можно отнести к миру танцев и, как народной, так и классической музыки. На любом фестивале (а их здесь проводится множество) можно насладиться национальными танцами — чардаш, вербункош. Они исполняются под зажигательную самородную музыку с нотками восточных и цыганских мотивов.</p>
        <p>Говоря о фестивалях и народных гуляниях, можно отметить, что они проводятся в стране по многим поводам, самые известные из них: музыкальные фестивали в Будапеште зимой, Праздничные недели в Шопроне, Дни народного искусства, Международные рыцарские ристалища, винные фестивали в г. Ясберень, Неделя вина в Балатонфюреде.</p>
        <p>Венгрия славится самобытной, очень сытной кухней. Самые популярные блюда —  суп-гуляш из говядины, цыпленок с галушками, голубцы из кислой капусты, паштет из гусиной печени, венгерский штрудель.</p>


        <div class="card bg-secondary">
            <div class="card-body">
                <h5 class="title-decorative">Праздничные и нерабочие дни:</h5>
                <ul>
                    <li>1 января — Новый год</li>
                    <li>15 марта — День начала революции 1848—1849 гг.</li>
                    <li>Пасха</li>
                    <li>Понедельник после Троицы</li>
                    <li>1 мая — День Труда</li>
                    <li>20 августа — День святого Иштвана</li>
                    <li>23 октября — День начала революции 1956 г.</li>
                    <li>1 ноября — День Всех Святых </li>
                    <li>25-26 декабря — Рождество</li>
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
                <p>Для визита в Венгрию гражданам Республики Казахстан требуется виза с соблюдением всех правил Шенген зоны. Настоятельно рекомендуется обращаться за ее оформлением в консульство в Казахстане или через надежное турагентство заблаговременно (за 1,5 - 2 месяца).</p>
                <p>Для оформления визы необходимо собрать следующий пакет документов*:</p>
                <ul>
                    <li>действующий загранпаспорт</li>
                    <li>цветное фото</li>
                    <li>заявление на оформление визы</li>
                    <li>мед. страховка на всё время пребывания на территории стран Шенгенского соглашения (на сумму от 30 тыс. евро)</li>
                    <li>справка о доходах или выписка из банка по счету</li>
                    <li>подтверждение брони и оплаты гостиницы, билетов, тур. путевки</li>
                </ul>
                <p>*Информация носит ознакомительный характер.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+ул.+космонавтов+62+&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4"
                        allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Венгрии</h5>
                        <p>Астана, ул. Космонавтов 62 </p>
                        <p>
                            <i class="icon-phone"></i> +7 (7172) 55-03-23</p>
                        <p>
                            <i class="icon-link"></i>
                            <a href="https://asztana.mfa.gov.hu/rus" target="_blank">asztana.mfa.gov.hu</a>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Венгрии - <a href="https://hungary.visahq.com/customs/" target="_blank">hungary.visahq.com/customs</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Граждане Казахстана, достигшие 17-летнего возраста, имеют право на ввоз сигарет и алкоголя в следующем количестве: 200 сигарет или 100 маленьких сигар, или 50 больших сигар, или 250 г табака, а также 1 л крепкого алкоголя или 4 л вина, или 16 л пива.</p>

        <h5>Ювелирные украшения и драгоценности</h5>
        <p>Допускаются к ввозу/вывозу без уплаты налога ювелирные изделия стоимостью не выше 430 евро (за каждое украшение).</p>

        <h5>Художественные и культурно-исторические ценности</h5>
        <p>Предметы, представляющие художественную или историческую ценность, подлежат декларации.</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Охотничье или спортивное оружие может быть ввезено при условии наличия разрешения.</p>
        <p>Провоз оружия для самообороны (газового или травматического) возможен только после получения гражданами соответствующего разрешения в полномочных государственных органах Венгрии.</p>

        <h5>Валюта</h5>
        <P>Ввозимая (или вывозимая) сумма денежных средств в размере 10 тыс. евро и выше подлежит обязательной декларации.</P>

        <h5>Животные</h5>
        <p>Животные перевозятся при предъявлении паспорта или сертификата международного образца на питомца. Ветеринарное свидетельство должно содержать отметки о здоровье животного и наличия вакцины против бешенства.</p>

        <h5>Растения</h5>
        <p>Запрещен провоз почвы и посадочного материала.</p>
        <p>Растения и продукты растительного происхождения допускаются к провозу при наличии разрешения сан. служб Венгрии.</p>

        <h5>Продукты питания</h5>
        <p>Запрещен ввоз сырого мяса и мясных продуктов, молока и молочных продуктов.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Система общественного транспорта в стране отлично развита. Во всех городах функционируют автобусные и троллейбусные маршруты. Существуют специальные ночные автобусные рейсы (обозначены буквой Е), экспрессы (останавливаются по требованию. Номера обозначаются красным цветом).</p>
                <p>В Будапеште есть метро, представленное тремя линиями.</p>
                <p>Практически во всех городах действует система единого билета — по нему можно пользоваться почти всеми видами общественного транспорта. Проездные и билеты продаются на станциях метро, в уличных автоматах, киосках.</p>

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
                                <div>Билет на 1 поездку</div>
                                <span>350 HUF</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной на 7 дней</div>
                                <span>4950 HUF</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной на 5 человек <br>(на 24 часа)</div>
                                <span>3300&nbsp;HUF</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>Такси</div>
                                    <span>от 140-280 HUF за 1 км</span>
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
                    <p>Иностранные граждане могут управлять транспортным средством на территории Венгрии при наличии водительского удостоверения международного образца.</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Перемещение на автомобиле в Венгрии не составляет проблем — правила дорожного движения стандартные, дорожная разметка четкая, используются общеустановленные знаки.</p>

                <h5>Общие правила:</h5>
                <ul>
                    <li>максимальный уровень алкоголя в крови — 0,00 %</li>
                    <li>проезд по автостраде платный</li>
                    <li>обязательно использование ремня безопасности для водителя и всех пассажиров</li>
                    <li>вне населенных пунктах в любое время суток обязательно использование фар</li>
                    <li>запрещены шипованные шины</li>
                    <li>во время движения разговаривать по телефону водителю разрешено только в режиме громкой связи или при помощи специальной гарнитуры</li>
                    <li>на многих перекрестках запрещен левый поворот</li>
                    <li>допускается проезд по проезжей части велосипедистов</li>
                </ul>

                <h5>Парковки</h5>
                <p>В Венгрии множество круглосуточных охраняемых парковок. В гостиницах и торговых комплексах парковочные места часто расположены под землей.</p>
                <p>В центральных частях городов и в туристических зонах парковочные места чаще всего платные — они обозначаются специальными знаками и оснащены автоматами для оплаты.</p>
                <p>Оставлять авто на тротуаре разрешается только если присутствует специальный знак с указанием способа размещения транспорта.</p>

                <h5>Дорожный налог</h5>
                <p>За передвижение по автобану в Венгрии взимается плата — оплатить налог можно в специальных пунктах на въезде, на заправочной станции, в банкоматах, с мобильного телефона.</p>
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
                                <span>359,44 HUF/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>375,07 HUF/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>334,44 HUF/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6">
                            <b>Стоимость проезда по автобанам</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>4 дня (ноябрь-апрель)</div>
                                <span>1170 HUF</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>4 дня (ноябрь-апрель)</div>
                                <span>1530 HUF</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Неделя</div>
                                <span>2550 HUF</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Месяц</div>
                                <span>4200 HUF</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Год</div>
                                <span>37200 HUF</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Авто-путешествие по Европе. Венгрия. Часть 1 из 4." src="https://i.ytimg.com/vi/LN0ez4mRtF4/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/LN0ez4mRtF4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Авто-путешествие по Европе. Венгрия. Часть 1 из 4.
                        <br>© Stealth Camper 2016</figcaption>
                </figure>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Страхование авто</h3>
                <p>Страхование автомобиля является обязательным для автовладельцев — иностранным гражданам ее можно оформить непосредственно на границе.</p>
                <p>Для арендуемого туристом автомобиля такая страховка уже будет входить в обязательный пакет документов.</p>

                <a href="http://osago.account.travel" class="btn btn-outline-success">Оформить электронный полис ОСАГО</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Аренда авто</h3>
                <p>Аренда автомобиля в Венгрии не составляет труда — достаточно большое количество международных компаний и мелких фирм предоставляют услуги проката авто.</p>
                <p>Необходимый перечень документов и условий для оформления договора аренды:</p>
                <ul>
                    <li>паспорт </li>
                    <li>водительские права</li>
                    <li>возраст не менее 21 года</li>
                    <li>водительский стаж от 1 года</li>
                </ul>
                <p>В пакет документов на арендуемую машину входит также полис автострахования.</p>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Конституция венгерского государства обеспечивает своих граждан полным медицинским обслуживанием. Расходы на него покрываются Фондом мед. страхования, в который работодатели и работники производят отчисления (11% и 3% соответственно). У всех работающих граждан есть медицинская страховка.</p>
                <p>Консультация врача без страховки (в том числе для туристов, не оформивших страховку) платная (от 16 евро за консультацию). За отдельную плату производятся все виды анализов и обследований.</p>
                <p>При наличии медицинского страхового полиса, затраты на необходимое лечение, медикаменты и транспортировку покрываются страховой компанией.</p>

                <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-light-bulb"></i>
                        <span class="h6">
                            <b>Электросеть</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Напряжение</div>
                                <span>220 В</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Частота</div>
                                <span>50 Гц</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><a href="/journal/electric-sockets.html#typeC">разъем типа C</a></div>
                                <span><img src="/img/electric/type_c.svg" style="width:100px; max-width:100%;"></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><a href="/journal/electric-sockets.html#typeF">разъем типа F</a></div>
                                <span><img src="/img/electric/type_f.svg" style="width:100px; max-width:100%;"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Мобильная связь и мобильный интернет в стране представлена тремя крупными операторами: «Telenor», «Vodafone» и «Magyar Telekom».</p>
                <p>Сим-карту при наличии паспорта можно приобрести в специализированных салонах связи.</p>
                <p>Доступ к сети Интернет также можно получить в платных или бесплатных wi-fi зонах — чаще всего они расположены в холлах гостиниц и кафе.</p>

                <ul>
                    <li>Telenor -
                        <a href="https://www.telenor.hu/en" target="_blank">перейти на сайт</a>
                    </li>
                    <li>Vodafone -
                        <a href="https://www.vodafone.hu/" target="_blank">перейти на сайт</a>
                    </li>
                    <li>Magyar Telekom -
                        <a href="https://www.telekom.hu" target="_blank">перейти на сайт</a>
                    </li>
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
                                <div>Экстренная служба</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>104</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>105</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Аварийная дорожная служба</div>
                                <span>188</span>
                            </div>
                        </li>
                    </ul>
                </div>

            <figure class="figure d-block">
                <div class="video-cover box-shadow">
                    <img alt="Мобильные операторы Венгрии (Мой опыт)" src="https://i.ytimg.com/vi/5Cw5A64MbXQ/maxresdefault.jpg" class="bg-image"
                    />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/5Cw5A64MbXQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                            mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Мобильные операторы Венгрии (Мой опыт)
                    <br>© Hungarized Life 2017</figcaption>
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
