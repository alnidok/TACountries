<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Великобритания</h1>
                <div class="lead">
                    <b>Столица</b>: Лондон<br>
                    <b>Официальный язык</b>: английский<br>
                    <b>Валюта</b>: GBP - фунт стерлингов<br>
                    <b>Территория</b>: 242 495 км²<br>
                    <b>Население</b>: 65.6 млн человек<br>
                    <b>Часовой пояс</b>: UTC +0. Разница между Великобританией и Астаной -6 часов. Осуществляется переход на летнее/зимнее время.
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="This is Great Britain TVC" src="https://i.vimeocdn.com/video/431927875_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/48573956?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Tim White, 2012</figcaption>
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
                <p>Великобритания (полная форма — Соединённое Королевство Великобритании и Северной Ирландии) — государство, расположенное на британских островах в Атлантическом океане к северо-западу от Континентальной Европы.</p>
                <p>Страна омывается Гебридским, Кельтским, Ирландским и Северным морями. На юго-востоке отделяется от северного французского побережья проливом Ла-Манш.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Около половины всей территории Великобритании занимает Англия (130 395 км²), на долю Шотландии приходится чуть меньше трети площади (78 772 км²), Уэльс располагается на территории, составляющей менее одной десятой части (20 779 км²) и 13843 км² принадлежит Северной Ирландии.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Лондон/London/Красивые города, красивая музыка" src="https://i.ytimg.com/vi/Z3kX4J_0XmE/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Z3kX4J_0XmE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Лондон/London/Красивые города, красивая музыка<br>© Веселый ветер 2017</figcaption>
            </figure>
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Королевские дворцы  Букингемский дворец   Buckingham Palace" src="https://i.ytimg.com/vi/4wDJIfXhWTM/maxresdefault.jpg" class="bg-image" />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/4wDJIfXhWTM?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Королевские дворцы Букингемский дворец Buckingham Palace<br>© Школа Этикета Юлианы Шевченко 2017</figcaption>
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
        <p>Население Великобритании исторически происходит от разных этногрупп — римлян, кельтов, англосаксов, норманнов и викингов. Около 70% жителей исповедуют христианство, 3% ислам, 1% буддизм, 15% населения являются атеистами.</p>
        <p>Мужчин и женщин примерно поровну. Средняя продолжительность жизни в Великобритании - 81 год. У женщин она составляет 83 года, у мужчин – 79 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p><i class="icon-link"></i> Министерство Культуры, Информации и Спорта Великобритании -  <a href="http://www.gov.uk/government/organisations/department-for-digital-culture-media-sport" target="_blank" rel="nofollow">gov.uk</a></p>
                <p>На формирование богатой и разнообразной британской культуры повлияли следующие факторы: островное расположение, военно-политический строй, формирование страны из 4-х отдельных государств со своими сложившимися устоями и традициями.</p>
                <p>Британская культура имеет огромное международное значение, будь то музыка, кинематограф, мода, литература, изобразительное искусство или спорт. Именно поэтому, а также благодаря уникальным традициям британцев, Великобритания привлекает огромное количество туристов со всего мира. Театралы стремятся сюда как на родину Шекспира, ценители истории восхищаются архитектурой и огромным количеством древних замков, любители природы едут в страну ради Озерного края и Йоркширской долины — красивейших национальных парков.</p>
                <p>В Британию также едут со всего света чтобы своими глазами увидеть самое загадочное каменное сооружение планеты — Стоунхендж.</p>
                <p>Другие знаменитые туристические объекты: Британский музей в Лондоне, часы Биг-Бен, Трафальгарская площадь, Тауэрский мост, Букингемский дворец, университеты Оксфорд и Кембридж и многое-многое другое.</p>
                <p>Ко всему прочему, в Великобритании отлично развит языковой туризм.</p>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие дни Великобритании</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>Пасха</li>
                            <li>Понедельник после Пасхи</li>
                            <li>Первый понедельник мая </li>
                            <li>Последний понедельник мая</li>
                            <li>Последний понедельник августа</li>
                            <li>25-26 декабря – Рождество</li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">В Северной Ирландии есть два дополнительных дня</h6>
                        <ul>
                            <li>17 марта – День Святого Патрика</li>
                            <li>12 июля – Годовщина битвы при Бойне </li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">В Шотландии - свой порядок выходных</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>Пятница перед Пасхой</li>
                            <li>Первый понедельник мая</li>
                            <li>Последний понедельник мая </li>
                            <li>Последний понедельник августа</li>
                            <li>30 ноября – День Святого Андрея</li>
                            <li>25-26 декабря – Рождество</li>
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
                <p>Климат Великобритании умеренно океанический, мягкий и влажный. На характер погоды оказывает влияние теплое океаническое течение Гольфстрим. На северо-востоке страны холоднее, а юго-восток, Лондон и Уэстленд — наиболее теплые области. Средняя температура января составляет от +3°C до +7°C, июля — от +11°C до +17°C.</p>
                <p>Среднегодовое количество осадков около 600-800 мм, основная их часть приходится на период с сентября по январь в виде дождей и туманов, снегопады редки.</p>
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
                <p>Гражданам Республики Казахстан для посещения Великобритании требуется национальная виза, оформить которую можно при обращении в посольство.</p>
                <p>Первым делом необходимо определиться с типом визы в зависимости от целей поездки.</p>
                <p>Типы виз:</p>
                <ul>
                    <li>рабочая</li>
                    <li>студенческая</li>
                    <li>туристическая</li>
                    <li>гостевая</li>
                    <li>деловая</li>
                    <li>транзитная</li>
                </ul>
                <P>Все документы, предоставляемые в визовый отдел, включая заполненные анкеты, выписки из банка, справки с места работы должны быть переведены на английский язык.</P>
                <P>Сроки получения визы индивидуальны, определяются консульством в каждом отдельном случае (в среднем от недели до месяца), поэтому документы необходимо подавать заблаговременно и подходить к их оформлению со всей ответственностью.</P>
            </div>
            <div class="col-md-4">
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
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+ул.+космонавтов,+62&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Великобритании</h5>
                        <p>Астана, Ул. Космонавтов, 62</p>
                        <p><i class="icon-phone"></i> +7 (7172) 55-62-00</p>
                        <p><i class="icon-link"></i> <a href="https://www.gov.uk/world/organisations/british-embassy-astana.ru" target="_blank" rel="nofollow">www.gov.uk</a>
                        </p>
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
                                <div>Астана - Лондон</div>
                                <span>3 раза/нед</span>
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

        <p><i class="icon icon-link"></i> Сайт таможенной службы Великобритании - <a href="http://www.gov.uk/government/organisations/hm-revenue-customs" target="_blank" rel="nofollow">gov.uk/government/organisations/hm-revenue-customs</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>В Великобританию из стран, не являющихся членами ЕС, можно провезти беспошлинно 200 сигарет или 250 г табака, 1 л крепкого алкоголя или 4 л вина, или 16 л пива.</p>

        <h5>Ювелирные украшения и драгоценности</h5>
        <p>Украшения и ювелирные изделия на сумму свыше 4 тыс. евро подлежат декларированию.</p>

        <h5>Продукты питания</h5>
        <p>Запрещен ввоз мяса и мясных продуктов, молока и молочных продуктов, рыбы, меда и яиц.</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Запрещен ввоз огнестрельного оружия, военной амуниции, взрывчатых веществ.</p>

        <h5>Животные</h5>
        <p>Провоз животных строго ограничен. Домашние питомцы должны иметь вет. сертификат или пройти карантин.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система Лондона</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Режим работы общественного транспорта в Лондоне в будние дни с 04:00 до 01:00, в воскресенье — с 07:00 до 00:00. Ночные автобусные рейсы обозначаются буквой N (например, N-15), все они проходят через Трафальгарскую площадь.</p>
                <p>Проездные билеты можно приобрести в автоматах метрополитена, на остановках, у водителей автобуса.</p>
                <p>Самый простой для туристов способ передвижения в Лондоне – это метро, насчитывающее 12 линий, которые часто разветвляются на отдельные ветки в разные городские районы. На главных линиях поезда ездят с довольно коротким интервалом (до 5 минут), на окраинах интервал может составлять до получаса.</p>
                <p>Такси в Лондоне делится на 2 вида. Всем известные старинные кэбы комфортабельные, но недешевые - они работают по счетчику, при этом водителю принято оставлять на чай 10% от стоимости проезда. Такие автомобили можно просто остановить на улицах Лондона. Более экономный вариант такси - автомобили компании «Minicab», заказываются только по телефону, тарифы фиксированы, оговариваются заранее.</p>
                <p>С недавнего времени в Лондоне восстановлена трамвайная система, представленная тремя маршрутами преимущественно в южной части города. Билеты на трамвай приобретаются в автоматах на остановках.</p>
                <p>Также довольно распространенным видом транспорта с собственной системой тарифов является речной транспорт — речные суда курсируют по Темзе и насчитывают в общей сложности около двадцати маршрутов.</p>
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
                                <div>Метро</div>
                                <span>от 2 GBP</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус и троллейбус</div>
                                <span>от 1,50 GBP</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>Речной транспорт</div>
                                    <span>от 12,50 GBP</span>
                                </div>
                            </li>    
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 5,80 GBP за милю</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Метро Лондона | Транспорт Лондона | Красный автобус | DLR" src="https://i.ytimg.com/vi/Cdqxr1HnudY/maxresdefault.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Cdqxr1HnudY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Метро Лондона | Транспорт Лондона | Красный автобус | DLR<br>© Nat Berz 2017</figcaption>
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
                <p>Главная отличительная особенность дорожного движения в Великобритании — левостороннее движение, поэтому даже опытному водителю, привыкшему к правостороннему движению, требуется время для адаптации. В связи с чем новичкам рекомендуется воздержаться от путешествий по стране за рулем.</p>
                <p>Особенности дорожного движения:</p>
                <ul>
                    <li>обгон на дорогах совершается только справа</li>
                    <li>на перекрестках с круговым движением преимущество имеет авто, находящееся справа</li>
                    <li>поворот налево при красном сигнале светофора запрещен</li>
                    <li>обязательно использование ремней безопасности водителем и всеми пассажирами</li>
                    <li>дети до 13 лет (ростом до 150 см) передвигаются только в автокреслах согласно возрастной и весовой категориям</li>
                    <li>парковка запрещена при наличии двойной сплошной разметки вдоль дороги</li>
                    <li>в городах ограничение скорости составляет 60 миль в час, на автострадах — 70 миль в час</li>
                    <li>водителю во время движения запрещено курить и совершать телефонные звонки без системы «хендс фри»</li>
                    <li>категорически запрещено управлять авто в состоянии алкогольного опьянения (карается наказанием до 14 лет ограничения свободы в случае ДТП)</li>
                    <li>парковки оснащены специальными автоматами для оплаты</li>
                </ul>

                <h5 class="mt-3">Аренда авто</h5>
                <p>Автомобиль можно взять в аренду на специальных сервисах в сети Интернет или в центрах проката, расположенных в аэропорту, на вокзалах, недалеко от отелей. Для оформления договора необходимы международные права и кредитная карта. Стоимость проката зависит от класса авто и сроков аренды (ориентировочно от 20-22 фунтов в день). </p>
                <p>В стоимость проката обычно включены: часть страховки, НДС, сборы аэропорта. Суперстраховка, навигатор, багажник на крышу, детское автокресло оплачивается отдельно.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Управлять автомобилем в Великобритании возможно при достижении водителем 21 года и при наличии водительского удостоверения международного образца.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-95</div>
                                <span>1,20 GBP за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>1,25 GBP за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1,22 GBP за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Газ</div>
                                <span>0,60 GBP за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Почему в Англии левостороннее движение?" src="https://i.ytimg.com/vi/FVsD_qvnXno/maxresdefault.jpg" class="bg-image">
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/FVsD_qvnXno?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Почему в Англии левостороннее движение?<br>© Автошоу VIN-КОД 2016</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Санитарно-эпидемиологическое состояние Великобритании оценивается как удовлетворительное. Качество и безопасность воды и продуктов питания контролируется государственными органами.</p>
        <p>Туристам не требуется какая-либо специфическая вакцинация перед посещением страны.</p>
        <p>Людям с заболеваниями сердечно-сосудистой системы необходимо учитывать климатические условия посещаемого государства.  Лицам, страдающим бронхиальной астмой с частыми приступами рекомендуется воздержаться от посещения Великобритании ввиду длительного периода цветения растений.</p>
        <p>Медицинская страховка для оформления визы не входит в обязательный перечень документов, однако настоятельно рекомендуется ее получение для минимизации всех возможных рисков, связанных с травмой или болезнью во время пребывания в стране. </p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь</h2>
                <p>Мобильная связь в Великобритании представляется четырьмя основными операторами:</p>
                <ul>
                    <li>EE (T-mobile & Orange) - <a href="https://ee.co.uk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Vodafone - <a href="https://www.vodafone.co.uk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>O2 - <a href="https://www.o2.co.uk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Three - <a href="http://www.three.co.uk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Оплата за услуги мобильной связи подразделяется на 2 вида: предоплата и контракт. Контрактный тариф с голосовым безлимитом на год обходится в среднем 25 фунтов в месяц.</p>
                <p>Тарифы по предоплате (pay as you go)  более гибкие — счёт пополняется по мере необходимости. Для приобретения таких сим-карт в Великобритании документов не требуется.</p>
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
                                <div>Единый экстренный номер (бесплатно)</div>
                                <span>999,&nbsp;112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Национальная справочная (платно)</div>
                                <span><nobr>118-500</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Международная справочная (платно)</div>
                                <span><nobr>118-505</nobr>,<br><nobr>118-060</nobr></span>
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
                                    <nobr>230 В</nobr>, <nobr>50 Гц</nobr>. Используются разъемы <a href="/journal/electric-sockets.html#typeG">типа G</a>
                                </div>
                                <span class="text-right">
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