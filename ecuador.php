<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Эквадор</h1>
                    <div class="lead">
                        <b>Столица</b>: Кито<br>
                        <b>Официальный язык</b>: испанский, Кичуа и Шуар<br>
                        <b>Валюта</b>: USD - американский доллар<br>
                        <b>Территория</b>: 283 560 км²<br>
                        <b>Население</b>: 16 млн. человек<br>
                        <b>Часовой пояс</b>: GMT-5. Разница с Астаной -11 часов
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Ecuadorable" src="https://i.vimeocdn.com/video/674808646_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/249091728?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Video Bros., 2017</figcaption>
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
                <p>Эквадор - южноамериканская страна, расположенная на северо-западе континента и омываемая водами Тихого океана. По территории Эквадора проходит экватор, который здесь можно перейти пешком. Кроме континентальной части к Эквадору относятся Галапагосские острова, на 97% состоящие из национального парка. На востоке страна граничит с Колумбией, на юге с Перу.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Эквадор привлекает туристов вечным летом, национальными парками, высокими пиками Анд и удивительными Галапагосами, животный мир которых натолкнул Дарвина на его эволюцию видов. Сейчас здесь живут ученые, работающие в дарвиновском центре, ведется изучение многочисленных <span title="вид или семейство организмов, представители которых обитают в относительно ограниченном ареале">эндемиков</span> этой заповедной территории.</p>
                <p>В Эквадоре интересна не только природа. Многие его города с традиционной колониальной архитектурой привлекают туристов своими достопримечательностями. Кито был построен на склоне вулкана Пичинча на высоте 2850 м, он считается второй в мире самой высокой столицей. Здесь круглый год комфортная погода, уютный колониальный центр и современные кварталы севера. Кроме Кито стоит посетить Куэнку и Гуйякиль, искупаться в водах тихого океана и посмотреть морских львов, живущих на Галапагосах.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="В поисках приключений - Эквадор (часть 1)" src="https://i.ytimg.com/vi/31Z6rfx5u1Y/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/31Z6rfx5u1Y?autoplay=1&rel=0&showinfo=0&start=10" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">В поисках приключений - Эквадор (часть 1)<br>© Takehiko Takahashi 2013</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Galapagos Галапагосские острова Докментальный фильм про острова В мире интересного и невероятного Ga" src="https://i.ytimg.com/vi/aYf298nh08s/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/aYf298nh08s?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Galapagos Галапагосские острова Докментальный фильм про острова В мире интересного и невероятного Ga<br>© Nikol Disckaver 2017</figcaption>
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
            <!--<li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>-->
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h3>Население</h3>
        <p>Эквадорцы - это потомки местных индейцев и смешанных браков с испанцами. Основная масса местных жителей - метисы, их 65%, индейцев - 25%, потомков европейцев - 7%, выходцев из Африки - 3%.</p>
        <p>Государственная религия - католицизм, к ней относят себя 95% эквадорцев, кроме католиков здесь живут около 3% протестантов и около 1% индейцев, придерживающихся своих верований.</p>
        <p>Продолжительность жизни в Эквадоре составляет 76 лет, мужчины живут до 74 лет, а женщины до 77 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Эквадора хранит на себе отпечаток империи Инков, а также ранних колониальных времен. Практически вся архитектура в центральных частях городов относится к периоду испанской застройки XVIII и XIX веков. Музыка эквадорцев полностью переняла индейские мотивы, так же как и народные промыслы. Самый популярный сувенир, который стоит привезти из Эквадора - это шляпа панама, она мало похожа на привычные панамки из детства, и к соседнему государству также отношения не имеет.  </p>
                <p>Праздники в Эквадоре - это отличное время, чтобы познакомится с народной музыкой, традиционными песнями, яркими костюмами и местной кухней. Самым  запоминающимся событием, конечно же, является карнавал. Шествия проходят в каждом городе, в некоторых принято обливать друг друга водой, в некоторых предпочитают любоваться на скульптуры, созданные из фруктов и цветов. Не менее интересно попасть в страну на святой неделе, предшествующей Пасхе. Для местных жителей это один из главных праздников года, даже важнее Рождества.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>6 января — день королей-магов</li>
                            <li>27 февраля — День национального единения</li>
                            <li>февраль-март — Карнавал воды </li>
                            <li>апрель - Семана Санта, четверг, пятница и суббота перед Пасхой</li>
                            <li>1 мая - День труда. </li>
                            <li>24 мая — День начала независимости. Годовщина битвы при Пичинча</li>
                            <li>июнь — Праздник тела Христова</li>
                            <li>10 августа— День независимости</li>
                            <li>9 октября— День независимости Гуаякиля</li>
                            <li>12 октября - День открытия Америки (День Колумба)</li>
                            <li>1 ноября — День Всех Святых</li>
                            <li>2 ноября — День поминовения усопших</li>
                            <li>3 ноября — День независимости Куэнки</li>
                            <li>6 декабря — Образование Кито</li>
                            <li>25 декабря — Рождество</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mt-3">Кухня</h5>
        <div class="row">
            <div class="col-lg-7">
                <p>Кухня Эквадора сохранила основные индейские традиции. Ее основу составляют густые супы-пюре из картошки, бобов, кукурузы и других овощей, севиче из рыбы или морепродуктов и жареная морская свинка куй, которую можно найти только в горных провинциях. Мясо менее популярно, чем рыба. Встречаются блюда из говядины, баранины, свинины, из курицы. На гарнир чаще всего подают рис, но также в ходу картошка, батат, юкка и маниока. Из фруктов местным символом по праву считаются бананы, доставляемые во все страны мира. Наиболее популярным напитком, который пьют даже больше, чем кофе, является мате.</p>
            </div>
            <div class="col-lg-5">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="кухня эквадора" src="https://i.ytimg.com/vi/2ZEhAzuC0wo/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/2ZEhAzuC0wo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Кухня Эквадора<br>© Вкуснятинка 2016</figcaption>
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
                <p>Климат экваториального Эквадора меняется только при изменении высоты. В Кито или Куэнке, которые расположены в горах, в среднем всегда от +15 до +20 градусов. На побережье жарко, сезон дождей продолжается с декабря по апрель и считается наиболее комфортным для посещения. С апреля по декабрь сухой и жаркий сезон, температура воды в океане +27 градусов.</p>
                <p>Климат джунглей Амазонки всегда жаркий и влажный, здесь самые тяжелые условия для проживания во всем Эквадоре.</p>
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
                <p>В 2016 году было подписано соглашение, которое позволило посещать гражданам Казахстана Эквадор <strong>без визы</strong> с туристическими целями на 90 дней.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно!</strong> Срок действия паспорта должен быть не менее 6 месяцев с момента вылета из страны.</p>
                    </div>
                </div>
                <p>Еще в самолете все туристы получают миграционные карты и таможенные декларации, которые нужно заполнить. С этими документами, паспортом и обратными билетами нужно пройти паспортный и таможенный контроль в аэропорту.</p>

                <h5>Авиасообщение</h5>
                <p>До Эквадора путь не близкий, прямых рейсов из Казахстана нет, удобнее всего лететь со стыковкой во Франкфурте-на-Майне или в Мадриде, есть еще рейсы из Лондона и Амстердама. Перелет лучше брать ночной, при этом запланировать день отдыха после прилета для перестройки организма на другой часовой пояс.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i>Без визы</div>
                                <span>90 дней</span>
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
                                <div>Кито - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Кито - Алматы</div>
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
        <p>Средством расчета в Эквадоре является доллар США, ввозить и вывозить его можно в любых количествах, все наличные фиксируются в декларации. При выезде количество денег не должно превышать указанную в документах цифру.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Сигареты разрешены к провозу в количестве 300 шт, вместо них можно взять 200 г табака или 50 сигар. Из алкоголя разрешен 1 л напитков любой крепости.</p>

        <h5>Личные вещи</h5>
        <p>Личные вещи можно взять с собой в необходимом для поездки количестве, духи или туалетная вода не более 1 флакона, золотых украшений не более 500 г. Полностью запрещен ввоз и вывоз культурных ценностей, древних реликвий, антиквариата, черных кораллов, животных и растений, а также чучел. Проблемы могут возникнуть и при провозе мясных продуктов, свежих овощей и фруктов.</p>

        <h5>Tax Free</h5>
        <p>Возврат Tax Free в Эквадоре позволит вам сэкономить 12%. Чтобы получить необходимые документы при покупке товара на сумму больше 50 долларов, выбирайте магазины с соответствующей наклейкой, их много в Кито и Куэнке. Наличные получают перед вылетом, после прохода таможни в аэропорту Гуйякиля и Кито. Закладывайте достаточное количество времени до самолета для оформления всех бумаг.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Путешествовать по Эквадору можно на самолетах или автобусах. Практически вся страна покрыта шоссе, соединяющими основные города и провинции. Во всех крупных городах есть аэропорты для местной легкомоторной авиации, а в Кито, Куэнке и Гуйякиле имеются 3 полноценных аэропорта, принимающие международные рейсы. Легкие самолеты летают также на Галапагосы. Выбирая путешествие на автобусе, лучше брать билеты премиум-класса. Этот вариант более безопасный и комфортный.</p>

                <h5>Городской транспорт</h5>
                <p>Общественный транспорт Кито - это автобусы, троллейбусы и метробусы, несколько линий соединяют собой весь город и пригороды. Стоят все одинаково, оплата кондуктору или в кассах метробуса. На автобусе можно доехать до аэропорта или до линии экватора. Ждать на остановках долго не придется, в среднем интервал в движении не превышает 15 мин, точного расписания нет. Система метробусов соединяет в себе метро и автобус. Крупные сдвоенные салоны, кассы, турникеты и точные маршруты со схемой, в которой очень просто разобраться. Для горной столицы - это отличная замена подземному транспорту.</p>

                <h5>Фуникулер</h5>
                <p>В Кито есть отличная возможность посмотреть на город с высоты птичьего полета. Для этого надо забраться на ближайшую гору на местном фуникулере. Он называется Teleférico, поднимается около 10 мин, проходя за это время 2.5 км. Всего 8 кабинок, каждая вмещают по 6 человек.</p>

                <h5>Такси</h5>
                <p>Такси в Эквадоре - это желтые машины, которые снуют по городам в большом количестве. Пользоваться ими удобно и недорого, лучше всего ездить по счетчику, но таксисты не против договорится и на конкретную сумму. Садиться в негосударственное такси туристам не рекомендуется, слишком опасно.</p>
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
                                <div>1 поездка</div>
                                <span>0.25 доллара</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной на 1 месяц</div>
                                <span>12 долларов</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>0.5 за 1 час пути и 0.3 USD за посадку</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Эквадор.Галапагосы.Санта Круз.Путь на Балтру.Автобус или такси-это надо знать.Декабрь2017" src="https://i.ytimg.com/vi/niFZm5FAyn8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/niFZm5FAyn8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Эквадор. Галапагосы. Санта Круз. Путь на Балтру. Автобус или такси - это надо знать. Декабрь 2017<br>© Евгений Мишин 2018</figcaption>
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
                <h5>Дорожное движение</h5>
                <p>Путешествие на машине по Эквадору может как доставить удовольствие, так и отравить весь отдых, в зависимости от везения и обладания навыком экстремального вождения. Горные районы, водители не соблюдают правил и ограничений скорости, дороги местного значения находятся в плачевном состоянии, а хорошие трассы платные. Далеко не каждому туристу необходимо столь небезопасное развлечение. Но при желании машину можно арендовать в Кито, Куэнке, Гуйякиле и в их аэропортах.</p>

                <h5>Аренда авто</h5>
                <p>Для путешествия по стране придется получить международные права, быть старше 21 года и иметь медицинскую страховку. Если планируется поездка в отдаленные районы вдалеке от основных трасс, то берите джип, на маленьких машинках там ездить опасно.</p>
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
                                <span>0.5 доллара</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Кито - столица Эквадора 2016" src="https://i.ytimg.com/vi/a6EV2MSTk0w/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/a6EV2MSTk0w?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Кито - столица Эквадора 2016<br>© Andriy Bondar 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Эквадоре</h2>
        <p>Перед путешествием в Эквадор необходимо оформить туристическую страховку, которая покрывает не только экстренную помощь, но и консультационное посещение врачей. Особенно это важно тем, у кого есть хронические болезни сердца или легких. Проблемы со здоровьем могут возникнуть из-за большой высоты, Кито находится выше уровня моря почти на 3000 м, как и Куэнка. Здесь разреженный воздух, которым тяжело дышать, от этого может начаться головокружения или горная болезнь. Еще одно небезопасное место - это Амазонские джунгли. Если вы планируете посетить эти уникальные места, то стоит перед вылетом сделать прививку от желтой лихорадки.</p>

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
                    <li>Movistar - <a href="https://www.movistar.com.ec" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Claro - <a href="https://www.claro.com.ec/personas/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>CNT - <a href="https://www.cnt.gob.ec" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Мобильная связь в Эквадоре имеет хорошее покрытие, несмотря на горы. Основные операторы продают сим-карты в офисах или в различных магазинах. Подключаться лучше в первых, иначе придется звонить по телефону, на испанском выбирать тариф и сообщать свои паспортные данные. По умолчанию установлен самый дорогой тариф из существующих и его обязательно нужно сразу поменять. Мобильный интернет подключается пакетами, без этого он может съесть весь бюджет на счету за полчаса. Стоимость сим-карт от 5 до 7 долларов, 3 из них будут доступны на счету.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Эквадоре популярен в крупных городах. Практически во всех гостиницах и кафе есть подключение. В общественных местах точек доступа пока нет, аэропорт также еще остается без удобной связи. В некоторых отелях Wi-Fi платный, это можно узнать на стадии бронирования.</p>
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
                                <div>Единый телефон экстренных служб</div>
                                <span>911</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>101</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>131</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>102</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <?= $this->render('_electricity', $country) ?>
            </div>
        </div>
    </div>
</section>

<!--<section id="sight" class="bg-white">
    <div class="container">
        <?/*= $this->render('_excursions', $country) */?>
    </div>
</section>-->