<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Мaрокко</h1>
                    <div class="lead">
                        <b>Столица</b>: Рабат<br>
                        <b>Официальный язык</b>: арабский, тамазигхтский<br>
                        <b>Валюта</b>: MAD - Марокканский дирхам (100 центов)<br>
                        <b>Территория</b>: 446 550 км²<br>
                        <b>Население</b>: 34.9 млн человек<br>
                        <b>Часовой пояс</b>: от GMT +0. Есть переход на зимнее и летнее время. Разница с Астаной -5 или -6 часов.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Travel to Morocco in 4K" src="https://i.ytimg.com/vi/ZE81dWxNnMQ/maxresdefault.jpg"
                             class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                    data-src="https://www.youtube.com/embed/ZE81dWxNnMQ?autoplay=1&rel=0&showinfo=0"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Travel With Friends, 2017</figcaption>
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
                <p>Королевство Марокко расположено на северо-западе африканского континента. Омывается водами
                    Средиземного моря и Атлантического океана, именно на его территории находится выход к известному
                    Гибралтарскому проливу. На севере страна граничит с Алжиром, на Юге и Юго-западе с Мавританией,
                    Юго-восточные границы лежат в сердце Сахары и пока еще точно не определены. На сегодня имеет спорную
                    территорию Западной Сахары, которая хочет отделиться и образовать самостоятельное государство.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Марокко для туриста - это лучшие пляжи Африки на Средиземном море, сильные волны Эссуэйры, которые
                    любимы серферами всего мира, синие города и традиционная посуда. Здесь можно найти то, чем заняться
                    кроме пляжного отдыха. Чтобы посмотреть все интересные места королевства, потребуется не меньше
                    месяца. Самыми популярными городами страны считаются Эссуэйра, Марракеш, Рабат, Касабланка и многие
                    другие. Стоит выбирать отдых в месте с золотистыми пляжами и комфортными отелями, а в остальные
                    места ездить на экскурсии на арендованной машине или с туристическими группами.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Что делать в Марокко? Часть 1"
                             src="https://i.ytimg.com/vi/xPB4BG57MLs/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                    data-src="https://www.youtube.com/embed/xPB4BG57MLs?autoplay=1&rel=0&showinfo=0"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Что делать в Марокко? Часть 1<br>© OneTwoTrip! 2017
                    </figcaption>
                </figure>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Марокко. Часть 2" src="https://i.ytimg.com/vi/-LtY4sA9uEg/hqdefault.jpg"
                             class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                    data-src="https://www.youtube.com/embed/-LtY4sA9uEg?autoplay=1&rel=0&showinfo=0"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Марокко. Часть 2<br>© OneTwoTrip! 2017</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h3>Население</h3>
        <p>Марокко населяют 2 основные народности - арабов здесь 60% и берберов 40%, по численности страна находится на
            4-м месте в мире среди арабоязычных государств. Также в стране живут европейцы, в большинстве французы,
            испанцы и португальцы и 3000 евреев.</p>
        <p>Марокко принадлежит к исламским странам, в основном здесь живут сунниты, европейцы - в большинстве католики и
            есть представители иудаизма.</p>
        <p>Продолжительность жизни в Марокко довольно низкая, в среднем женщины здесь живут до 74 лет, а мужчины до 69
            лет. Общая образованность также очень слаба. Грамотны здесь 60% мужчин и всего 40% женщин.</p>

        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-12 col-lg-7">
                <p>Марокко - древняя и интересная страна, которая может похвастаться найденными на своей территории
                    древними людьми, жившими здесь несколько сот тысяч лет назад. Сейчас культурные традиции Марокко в
                    основном принадлежат берберам. Есть несколько мусульманских святынь, к которым ежегодно приезжают
                    миллионы паломников. Марокко - страна ярких красок, вкусов и запахов. Восточный базар можно с
                    легкостью отнести к одной из важных местных традиций. Это место не столько торговли, сколько
                    общения. Сюда местные жители приходят узнать новости, купить лучших овощей и фруктов. Кроме них на
                    базаре продаются ковры, кинжалы и даже верблюды (10000 дирхам за взрослую особь). Еще одной местной
                    культурной особенностью является любовь поторговаться, которая пришла с восточного базара. Для
                    талантливых покупателей скидка, полученная во время торга, может доходить до 70%.</p>
                <p>Основные праздники в Марокко относятся к мусульманскому календарю. Это плавающие даты, подчиняющиеся
                    полнолуниям и новолуниям. В дни праздников марокканцы собираются с семьями, приезжают к родителям,
                    накрывают большие столы и угощают всех не один день. Наиболее почитаемые даты - это мусульманский
                    новый год, Ураза-Байрам и Курбан-Байрам. В дни государственных праздников многие выходят на улицы
                    посмотреть парад или салют, но большинство старается использовать выходной день, чтобы уехать на
                    природу, организовать пикник и искупаться в Средиземном море.</p>
                <p>Марокканская кухня известна в мире благодаря кус-кусу и тажину, двум самым популярным блюдам. Кус-кус
                    готовится из дробленной пшеницы, поливается соусом, к нему добавляется мясо, чаще всего это баранина
                    или курица. Тажин получил свое название от посуды, в которой он готовится. Это запеченное мясо, чаще
                    всего в тажин идет цыпленок или ягненок, поросенка здесь не встретишь по религиозным соображениям.
                    Все блюда активно приправляются травами и специями. Из напитков здесь самые любимые - это черный
                    кофе с кардамоном и чай с мятой и сахаром.</p>
            </div>
            <div class="col-12 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год.</li>
                            <li>январь - мусульманский новый год</li>
                            <li>11 января - День независимости</li>
                            <li>1 мая - день труда</li>
                            <li>23 мая - День провозглашения независимости</li>
                            <li>30 июля - праздник Трона</li>
                            <li>20 августа - День революции</li>
                            <li>21 августа - праздник молодёжи</li>
                            <li>6 ноября — памятный день Зелёного марша</li>
                            <li>18 ноября — День независимости — годовщина возвращения из изгнания короля Мохаммеда V</li>
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
                <p>Климат в Марокко имеет яркое территориальное деление. На Средиземном море он мягкий, субтропический.
                    Двигаясь в глубь страны, он становится сухим и резко континентальным. А на западном побережье он
                    подвержен сильному океаническому влиянию. </p>
                <p>Прибрежные территории прогреваются в среднем до +28 градусов летом, а зимой до +10 ... +12,
                    суточные перепады имеют не больше 10 градусов. Южная пустыня живет
                    практически без осадков, на солнце температура легко поднимается до +50 градусов, а ночью падает до
                    +15. Несмотря на общий засушливый климат, территории в горах Атлас иногда подвержены наводнениям, а
                    дожди здесь идут значительно чаще, чем в других регионах страны.</p>
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
                <p>Граждане Казахстана должны оформить для въезда в страну <strong>визу Марокко</strong>. Ее максимально
                    возможный срок составляет 3 месяца.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Для получения визы необходимо обратиться в посольство в Москве, так
                            как в Казахстане нет марокканского консульства.</p>
                    </div>
                </div>
                <p>Для получения визы нужно предъявить загранпаспорт, туристический ваучер или бронь апартаментов,
                    авиабилеты туда и обратно, справку с места работы и подтверждение из банка о достаточном количестве
                    денег на счету. Перед подачей на визу необходимо оформить медицинскую страховку путешественника.</p>

                <h5>Въезд в страну</h5>
                <p>Прямого перелета из Астаны или Алматы в Марокко нет, можно лететь с одной или двумя пересадками через
                    Европу или Турцию. В основном туристы выбирают аэропорт Марракеша или Касабланки, первый более
                    популярный. Сюда летают рейсы из Парижа, Франкфурта и Вены, до которых можно добраться прямыми
                    рейсами из Астаны и Алматы.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Виза Марокко</div>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы с одной пересадкой</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Марракеш - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Марракеш - Алматы</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Касабланка - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Касабланка - Алматы</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=пречистенский+пер.,+8,+москва,+россия&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Марокко</h5>
                        <p>Пречистенский пер., 8, Москва, Россия</p>
                        <p><i class="icon-phone"></i> +7 495 691-17-62</p>
                        <p><i class="icon-link"></i> <a href="http://www.ambmaroc.ru/indexru.htm" target="_blank" rel="nofollow">www.ambmaroc.ru</a></p>
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
        <p>С валютой в Марокко все очень сложно, ввоз евро и долларов не ограничен, но они должны быть сразу обменены на
            дирхамы, так как пользоваться иностранной валютой в стране запрещено. Вывоз национальной валюты из страны
            также запрещен, поэтому сохраняйте чеки о первоначальной операции обмена, чтобы поменять в аэропорту дирхамы
            обратно на евро.
        </p>

        <h5>Спиртное и сигареты</h5>
        <p>В Марокко можно ввозить алкогольную продукцию не более 1 л крепкого напитка и не более 1 бутылки вина.
            Сигарет с собой можно брать не более 200 штук или 250 г табака или 50 сигар.</p>

        <h5>Личные вещи</h5>
        <p>Личные вещи разрешены в любом количестве. Фототехника и снаряжение для охоты должны декларироваться
            обязательно. При вывозе старинных вещей, представляющих культурную ценность, необходимо оформить специальное
            разрешение.</p>

        <h5>Tax Free</h5>
        <p>Система Tax Free в Марокко работает очень слабо. Магазинов, оформляющих документы, практически нет. Но если
            получится такие найти и оформить там покупку на сумму больше 2000 дирхам, то полученные вместе с чеком
            документы необходимо предъявить при выезде из страны и получить штамп на таможне. После этого, вернувшись
            домой, в офисах Global Blue можно получить обратно 20% от покупки.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Для перемещения по стране лучше всего использовать автобусы. Это самый удобный и быстрый вид
                    транспорта. В Марокко все автобусы оборудованы кондиционерами, мягкими откидывающимися сидениями и
                    другими удобствами. Ходят они регулярно, но билеты надо брать заранее, потому что их быстро раскупают.
                    Проезд недорогой: из Рабата в Фес можно добраться за 75 дирхам, а из Касабланки в Агадир за 250
                    дирхам.</p>
                <p>Кроме автобусов между городами курсируют маршрутки. Стоят они по 20-50 дирхам между
                    ближайшими городами.</p>
                <p>В северной части можно прокатиться на поезде, который был запущен в Марокко во
                    времена французского владения. Компания ONCF предлагает безопасные и комфортные перемещения между
                    главными городами страны по железной дороге. Билет в Микнес из Рабата стоит 70 дирхам, в Эль-Джадиду
                    75 дирхам.</p>

                <h5>Городской транспорт</h5>
                <p>По городам Марокко курсируют местные автобусы. В отличие от междугородных, это не самый лучший способ
                    передвижения. Ходят они редко, часто переполнены людьми, а понять когда придет следующий, и даже где
                    он остановится, бывает довольно проблематично. Поэтому для удачного перемещения на них придется
                    воспользоваться помощью местных жителей. Стоимость проезда 5-10 дирхам.</p>

                <h5>Такси</h5>
                <p>Такси в Марокко очень оригинальные: маленькие, вмещают максимум 3 человека, яркие, с флажками и
                    багажником на крыше. Ориентировочная цена 10 дирхам за км, но счетчиков нет, поэтому необходимо
                    заранее решать вопрос с ценой, прежде чем начинать поездку. Не забывайте торговаться, здесь это
                    практически необходимо. В среднем добраться от центра Касабланки до аэропорта можно за 300 дирхам, а
                    прокатиться по городу за 10-50 дирхам, к которым стоит добавить чаевые.
                </p>
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
                                <span>5-10 дирхам</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>10-50 за короткую поездку</span>
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
                <h5>Особенности дорожного движения</h5>
                <p>
                    Аренда авто в Марокко - популярная услуга для туристов. Она необходима, если планируется путешествие
                    по стране, а не только по самым крупным городам. Основные трассы здесь хорошие, сельские дороги
                    терпимые. Стоит быть аккуратным в южных регионах и в горах Атлас. Местные жители соблюдают правила
                    дорожного движения только по собственному желанию, которое посещает их обычно при виде полицейского
                    на обочине. Поэтому в городах надо быть аккуратным при перестроениях, проездах перекрестков и других
                    сложных отрезков пути, так как пропускать здесь не принято, а вот превышать скорость даже очень. Все
                    знаки дублированы на французский и арабский, поэтому можно не опасаться, что будет что-то непонятно,
                    срочно учить вязь не придется.
                </p>

                <h5>Аренда авто</h5>
                <p>Для аренды авто потребуются стандартные права, карта для залога и возраст старше 21 года. Машину
                    стоит брать только у известных крупных компаний, доверять местным мелким фирмам не стоит. Средняя
                    цена аренды 450 дирхам за день для эконом-класса.
                </p>
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
                                <div>Бензин</div>
                                <span>1.17 доллара за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Дороги Марокко" src="https://i.ytimg.com/vi/CeYAQnPeFBs/maxresdefault.jpg"
                             class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                    data-src="https://www.youtube.com/embed/CeYAQnPeFBs?autoplay=1&rel=0&showinfo=0"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Дороги Марокко<br>© lifepeterburg 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Марокко</h2>
        <p>Медицина в Марокко достаточно хороша, правда это можно сказать только о Касабланке, Рабате, Марракеше и еще
            нескольких крупных городах. В сельской зоне все значительно сложнее. В стране есть клиники полностью
            государственные, есть где обслуживают по страховке и есть полностью платные частные больницы, лаборатории и
            врачебные кабинеты. Последние считаются самыми квалифицированными учреждениями с высоким уровнем
            оборудования и обслуживания. Для того, чтобы получить помощь в экстренных случаях, в больнице необходимо
            предъявить туристическую страховку. В местных больницах любого статуса туристов бесплатно не
            обслуживают.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь представлена 3 основными операторами:</p>
                <ul>
                    <li>Maroc Telecom - <a href="https://www.iam.ma" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Orange - <a href="https://www.orange.ma" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Inwi - <a href="https://www.inwi.ma" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Сим-карту местных операторов можно купить за 20-50 дирхам в аэропорту, в зоне прилета или в фирменном
                    салоне. Для подключения потребуется паспорт, а пополнить счет всегда можно с помощью специальных
                    карт, которые продаются повсеместно. Если нужен хороший мобильный интернет, то стоит выбрать
                    подходящий тариф у Orange. В среднем звонок домой обойдется в 0.17 дирхам.</p>

                <h5>Интернет</h5>
                <p>В Марокко сложно найти точки подключения Wi-Fi, здесь они пока не популярны. Обычно они есть в
                    крупных отелях, особенно если он принадлежит мировой сети. Наиболее удобно пользоваться мобильным
                    интернетом, а гостиницу выбирать с Wi-Fi в номере, тогда вы всегда будете на связи.</p>
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
                                <span>19</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная</div>
                                <span>15</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>15</span>
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
                                    <nobr>220 или 110 В</nobr>,
                                    <nobr>50 Гц</nobr>. Используются разъемы <a href="/journal/electric-sockets.html#typeC">типа C</a> и <a href="/journal/electric-sockets.html#typeE">типа E</a>
                                </div>
                                <span class="text-right">
                                     <img src="/img/electric/type_c.svg" style="width:100px; max-width:100%;">
                                     <img src="/img/electric/type_e.svg" style="width:100px; max-width:100%;">
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