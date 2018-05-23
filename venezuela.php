<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Венесуэла</h1>
                    <div class="lead">
                        <b>Столица</b>: Каракас<br>
                        <b>Официальный язык</b>: испанский<br>
                        <b>Валюта</b>: VEF - Боливар фуэрте (100 сентимо)<br>
                        <b>Территория</b>: 916 445 км²<br>
                        <b>Население</b>: 30.8 млн человек<br>
                        <b>Часовой пояс</b>: GMT-4:30. Разница во времени с Астаной -10ч30м.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Венесуэла: Страна Чудес" src="https://i.ytimg.com/vi/jAa2Up8pqcE/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/jAa2Up8pqcE&t=8s?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Странник КН, 2017</figcaption>
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
                <p>Венесуэла - южноамериканская страна, расположенная на северо-востоке континента. Омывается Карибским морем на севере и Атлантическим океаном на востоке, на западе граничит с Колумбией, на юге с Бразилией, а на востоке с Гайаной. Страна богата как природными ресурсами (здесь расположено одно из крупнейших нефтяных месторождений американского континента), так и интересными достопримечательностями. Анды, Карибы, джунгли Амазонки, самый высокий водопад Анхель и знаменитый Затерянный мир ждут туристов со всего мира.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Венесуэла готова предложить путешественникам первые испанские поселения в Южной Америке, многокилометровые пляжи Карибского побережья, возможности для дайвинга и снорклинга на коралловых рифах, удивительные Анды, великолепный Анхель, река Ориноко и плато Рорайама, на которое поселил динозавров и птеродактилей Артур Конан Дойл. В местных национальных парках можно увидеть оцелота, тапира и армадилла или броненосца, а также муравьедов и анаконд.</p>
                <p>Столица Венесуэлы Каракас считается самым опасным городом на планете, все достопримечательности его сконцентрированы в старом районе Эль Сентро, и расположены вокруг главной площади Симона Боливара. После осмотра колониальных дворцов можно подняться на ближайшую гору в кабинке канатной дороги, чтобы полюбоваться на город с высоты, а заодно прогуляться по национальному парку Авила.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Мир Приключений - Фильм: \"Затерянный Мир\". Венесуэла. Movie: \"The Lost World\". Venezuela." src="https://i.ytimg.com/vi/yTu1haWcFD8/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/yTu1haWcFD8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Мир Приключений - Фильм: "Затерянный Мир". Венесуэла. Movie: "The Lost World". Venezuela.<br>© Мир Приключений 2015</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Михаил Кожухов. Венесуэла." src="https://i.ytimg.com/vi/N7PLuLPf5dE/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/N7PLuLPf5dE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Михаил Кожухов. Венесуэла.<br>© Красивая планета 2016</figcaption>
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
        <p>Население Венесуэлы многонационально, большинство здесь живущих - метисы, их 70%, они произошли от смешения европейских переселенцев и местных индейцев. Прямых потомков испанцев, французов, португальцев и итальянцев около 21%, а индейцев осталось всего 2%. На Карибском побережье живет много потомков африканских рабов, привезенных сюда европейцами, сейчас африканцев до 10%.</p>
        <p>Венесуэла - католическая страна, к этой вере себя относят до 90% населения, в 2000-х появилась новая католическая церковь Венесуэлы, поддерживаемая правительством, но не признанная Ватиканом, к ней позже подключились некоторые протестанты, сейчас у нее прихожан до 410 тыс. человек, других протестантов около 8%, среди них большинство пятидесятников, но встречаются и другие течения.</p>
        <p>Продолжительность жизни в Венесуэле одна из самых низких в Латинской Америке, в среднем по стране она составляет 74 года. Женщины живут до 78 лет, а мужчины до 70 лет.</p>
        <?= $this->render('_population') ?>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Венесуэлы появилась при смешении индейских и испанских традиций, постепенно преобразившись в единую для метисов систему традиций, верований, праздников. Наибольшее влияние на нее оказал образ жизни льянеро - жителя равнин, представляющего собой основную часть населения. Чем-то они напоминают аргентинских гаучо. Льянеро создали свои танцы, музыку, торжества и костюмы, которые со временем стали национальными.</p>
                <p>Праздники в Венесуэле в основном религиозные, но из-за борьбы церкви и правительства на государственном уровне они не поддерживаются. Несмотря на это, народ продолжает пышно отмечать Пасху, Рождество, Богоявление, Троицу и другие праздники. Как и у соседей в Венесуэле есть период карнавалов, когда жители надевают костюмы и маски и выходят на улицу разгонять злых духов. Над созданием масок для праздников работает целая индустрия, но многие из-за бедности научились делать их своими руками.</p>
                <p>Кухня Венесуэлы делится на горную и прибрежную, на Карибском море популярна рыба, морепродукты и свежие фрукты, в горных районах предпочитают кукурузу, рис, бобы, картошку и другие овощи, варят супы, тушат мясо и делают невероятные сладости. Сладкоежкам понравится местный пирог с фруктами или десерт "дульсе де лече".</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>1 мая - День труда. </li>
                            <li>24 июня — Битва при Карабобо</li>
                            <li>5 июля — День независимости</li>
                            <li>24 июля— День рождения Симона Боливара </li>
                            <li>12 октября— День Нации</li>
                            <li>25  декабря— Рождество</li>
                        </ul>
                    </div>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Пестрый мир   Венесуэла   еда  18 11 13" src="https://i.ytimg.com/vi/oBJM-Wc4RvI/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/oBJM-Wc4RvI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Пестрый мир. Венесуэла - еда (18.11.13)<br>© RifeyTV 2013</figcaption>
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
                <p>Венесуэла расположена в субэкваториальном климате, поэтому весь год здесь держится средняя температура около +25 градусов на Карибском побережье, до +28 в Маракайбо. В горах значительно прохладнее, средняя +15 градусов, зимой может опускаться до +5, а летом прогреваться до +25.</p>
                <p>Для того, чтобы насладиться главными достопримечательностями страны, лучше посещать ее с ноября по май. Летом сухой сезон и Анхель не так прекрасен, к тому же подойти к нему по суше будет невозможно, придется лететь на вертолете.</p>
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
                <p>Для въезда в Венесуэлу гражданам Казахстана необходима <strong>национальная виза</strong>, которая выдается только на время поездки сроком до 90 дней.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Посольства Венесуэлы в Казахстане нет, все страны Средней Азии подают документы на визу в консульском отделе посольства Венесуэлы в Иране. Москва документы не принимает.</p>
                    </div>
                </div>
                <p>Список документов для получения визы необходимо уточнять на сайте посольства, в котором будут приниматься документы. Обязательно потребуется паспорт сроком действия не менее 6 месяцев, анкета, фото, медицинская страховка. Сертификат о прививке от желтой лихорадки носит рекомендательный характер и необходим тем, кто планирует экскурсию в джунгли на юге страны.</p>

                <h5>Въезд в страну</h5>
                <p>Перелет в Каракас сложный и долгий, прямых рейсов нет, минимум придется сделать 1 пересадку в Париже или Франкфурте-на-Майне. В Венесуэлу летают Эйр Франс, Люфтганза, КЛМ и Иберия, время в пути около 12 часов из Европы, плюс перелет из Астаны или Алматы и пересадка, всего надо рассчитывать на почти сутки дороги.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i>Виза Венесуэлы</div>

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
                                <div>Каракас - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Каракас - Алматы</div>
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

        <h5>Валюта</h5>
        <p>Венесуэла не ограничивает количество ввозимой и вывозимой иностранной валюты, но суммы более 10000 долларов должны быть задекларированы.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Все люди старше 18 лет могут провезти до 200 сигарет или 25 сигар, алкоголя не больше 2 л не зависимо от его крепости, также разрешено взять с собой до 4 флаконов духов или туалетной воды.</p>

        <h5>Личные вещи</h5>
        <p>Личные вещи в заводской упаковке не должны превышать по стоимости 1000 долларов, всю электронику необходимо задекларировать. Полностью запрещен ввоз и вывоз мяса, молока и продуктов из них, растений, диких животных, природных ценностей, исторических и культурных ценностей без соответствующих документов, наркотиков, сильнодействующих лекарств на их основе и всех видов оружия.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Города Венесуэлы связаны между собой автобусными маршрутами. Это самый развитый и самый удобный вид транспорта в стране. В основных районах ходят новые машины с установленным кондиционером, удобным салоном, розетками для техники. В отдаленных от столицы и побережья регионах все значительно хуже, машины старые, ходят редко, а расписание существует только на бумаге. Есть в Венесуэле и поезда, но пользоваться ими слишком опасно для туристов, большое количество ограблений происходит именно в них. Также не стоит брать билеты на ночные и вечерние автобусные рейсы. Чтобы посмотреть отдаленные достопримечательности, лучше воспользоваться услугами местных туристических агентств. Стоит быть внимательным в сезон дождей, когда часть дорог размывает и их закрывают. В этот период меняются маршруты или отменяются некоторые рейсы.</p>

                <h5>Городской транспорт</h5>
                <p>Практически во всех городах развито автобусное сообщение. В столице ходят также маршрутки и метро, которое на удивление чистое и прохладное. Можно прокатиться на фуникулере, который здесь называется Телеферико и связывает город с ближайшей горой, где расположен национальный парк.</p>

                <h5>Такси</h5>
                <p>Такси в Каракасе - это распространенный вид транспорта, но туристов тут любят обсчитывать в 2, а то и в 3 раза. Перед тем как сесть в машину, нужно заранее договориться о стоимости, а среднюю цену проезда по вашему маршруту уточнить у незаинтересованного местного жителя, можно например спросить на стойке отеля или у прохожих. Вечерами лучше воздержаться от поездок, а днем вызывать только официальное такси с опознавательными знаками на машинах.</p>

                <h5>Паром</h5>
                <p>Главное туристическое место страны - остров Маргарита расположен в Карибском море и связан с материком паромами. В зависимости от корабля, его скорости и вместительности плыть до места отдыха можно от 3 до 5 часов. Все паромы отходят от города Пуэрто Крус.</p>
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
                                <span>1 VEF</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>1 VEF</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>1 поездка в среднем 20 VEF</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Венесуэла, дорога до Каракаса, центр и Валенсия, 2013 год" src="https://i.ytimg.com/vi/ndY6KDnVWH4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/ndY6KDnVWH4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Венесуэла, дорога до Каракаса, центр и Валенсия, 2013 год<br>© дашибанов.рф - Взгляд на мир 2017</figcaption>
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
                <h5>Особенности дорожного движения в Венесуэле</h5>
                <p>Вождение автомобиля в Венесуэле вряд ли доставит удовольствие, оно слишком опасно и непредсказуемо. Местные водители к правилам относятся пренебрежительно, местная полиция с удовольствием берет взятки, а дороги в основном очень сомнительного качества. В сезон дождей не рекомендуется путешествовать по грунтовым дорогам, которых в стране очень много, в горах возможны сходы селей и камнепады. Плюс такого путешествия только один - цена на бензин здесь самая низкая в мире.</p>

                <h5>Аренда авто</h5>
                <p>В Венесуэле аренда авто возможна, но не дешева, предложений немного, и они обычно значительно дороже, чем в среднем по миру. Арендовать средний автомобиль можно за 650 VEF в день. Сумма залога около 1000 долларов наличными или на банковской карте. Для заключения договора потребуются права старше 3 лет, возраст от 21 года и международное водительское удостоверение, книжка, дополнительно выдающаяся к национальным правам.</p>
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
                                <span>0.01 USD за литр <br> самый дешевый в мире</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="МАШИНЫ В ВЕНЕСУЭЛЕ (cars in Venezuela)" src="https://i.ytimg.com/vi/wgI82b27xyw/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/wgI82b27xyw?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">МАШИНЫ В ВЕНЕСУЭЛЕ (cars in Venezuela)<br>© DimaViper 2015</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Венесуэле</h2>
        <p>В Венесуэле лучше не болеть, так как медицина находится на очень низком уровне, рассчитывать на профессиональную помощь здесь не приходится. Страховку путешественника нужно иметь при себе, при экстренных ситуациях она будет необходима. По возможности обращаться за помощью лучше в столичные клиники, только здесь можно получить хотя бы минимальное лечение. Для посещения амазонских джунглей на юге страны предварительно требуется сделать прививку от желтой лихорадки.</p>

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
                    <li>Movistar - <a href="http://www.movistar.com.ve/particulares/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Movinet - <a href="http://www.movilnet.com.ve/sitio/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Digitel - <a href="http://www.digitel.com.ve/Personas/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Мобильная связь в Венесуэле развита отлично, 3 оператора покрывают сетью всю страну, у каждого из них есть предложения для туристов, называющиеся "препаго". Подключаются в офисе сети по загранпаспорту, пополнить счет можно в магазинах, на заправках в киосках и других торговых точках. Очень удобно купить сразу пакет, включающий в себя минуты разговора, сообщения и мегабайты интернета. Практически у всех операторов работает 3G, а Digitel предлагает своим клиентам 4G, а скоро обещает LTE.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Венесуэле есть во многих отелях в крупных городах и на курортах Карибского моря. Иногда он предлагается за отдельную плату, этот вопрос можно уточнить при бронировании. Также в ресторанах или кафе, интернет есть практически везде, но в некоторых заведениях могут попросить оплатить подключение отдельно. Кроме Wi-Fi точек в городе можно выйти в сеть в интернет-кафе, распространенных повсеместно. За час доступа придется отдать 1-2 доллара, обычно в таких местах можно дополнительно воспользоваться услугами ксерокса и принтера, а также выпить чашечку кофе.</p>

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
                                <div>Полиция</div>
                                <span>169</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>171</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>161</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <?= $this->render('_electricity', $country) ?>
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