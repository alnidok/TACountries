<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Колумбия</h1>
                    <div class="lead">
                        <b>Столица</b>: Богота<br>
                        <b>Официальный язык</b>: испанский<br>
                        <b>Валюта</b>: COP - колумбийский песо<br>
                        <b>Территория</b>: 1 141 748 км²<br>
                        <b>Население</b>: 48.4 млн человек<br>
                        <b>Часовой пояс</b>: GMT-5. Разница с Астаной -11 часов
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Колумбия" src="https://i.ytimg.com/vi/Y8T-KviGoA0/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Y8T-KviGoA0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Очень интересно, 2013</figcaption>
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
                <p>Колумбия расположена на северо-западе Южной Америки, на востоке граничит с Бразилией и Венесуэлой, на западе с Эквадором, на юге с Перу, а на севере с Панамой. Омывается водами Карибского моря и Тихого океана. Страна разделяется на приморские низменности, Анды и Амазонскую сельву (влажные экваториальные леса). Здесь водятся 54 871 видов животных и растений, давая стране второе место в мире по биологическому разнообразию.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Огромное количество людей вспоминают Колумбию только с одной стороны, как главного производителя коки и наркотических веществ из нее. Но страна для туристов предстает другой стороной. Здесь расположены одни из самых богатых животными национальных парков, опасная и притягивающая Амазонка, высокогорная красавица Богота и яркая запоминающаяся Картахена.</p>
                <p>Наследие индейцев, высокогорные тропы, амазонские джунгли и современные города переплелись в этой стране, создав удивительный колорит. Но это далеко не единственное, что привлекает сюда туристов. 2 океана с чистейшими белоснежными пляжами и голубыми теплыми волнами способны покорить даже самых искушенных путешественников. Между одним и другим океаном всего несколько часов езды, поэтому при желании искупаться в каждом из них можно в течение одного дня.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Богота - столица Колумбии. Колумбия #9" src="https://i.ytimg.com/vi/FLp_BzDOA9A/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/FLp_BzDOA9A?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Богота - столица Колумбии. Колумбия #9<br>© Max Trawor 2017</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Картахена. Колумбия #2" src="https://i.ytimg.com/vi/IOTOmdNdIi0/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/IOTOmdNdIi0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Картахена. Колумбия #2<br>© Max Trawor 2017</figcaption>
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
        <p>Население Колумбии сегодня - это потомки индейцев, испанских конкистадоров, африканских рабов и азиатов, расселяющихся по миру в последние годы. По национальному составу колумбийское население делится на метисов 49%, европейцев 39%, африканцев 10.6%, индейцев 2.4%.</p>
        <p>Основная масса жителей Колумбии причисляют себя к католической вере, их 80%. Еще около 10% являются прихожанами евангелистских протестантских церквей, православных немного, всего 12000 человек. Новые иммигранты привезли ислам, даосизм, буддизм, но их пока не больше 1%. Еще несколько процентов придерживаются старинных индейских верований.</p>
        <p>Продолжительность жизни в Колумбии средняя по континенту и составляет 75 лет с большим разбросом для мужчин и женщин - по статистике мужчины Колумбии живут до 71 года, а женщины до 78 лет.</p>
        <?= $this->render('_population') ?>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Колумбии - это удивительный, но очень гармоничный микс из индейских традиций, особенностей климата, расслабленности африканцев и испанского влияния. Все это вместе подарило миру талантливых живописцев, музыкантов и литераторов, а самым известным колумбийцем во всем мире является Габриэль Гарсия Маркес, который создал стиль мистического реализма и подарил всему миру образ своей родины в виде Макондо. Сейчас многие туристы приезжают в Колумбию специально для того, чтобы пройтись по местам, связанным с мастером.</p>
                <p>Колумбийские праздники - это отдельный весомый повод посетить страну. В них сплелись вместе все традиции и культуры, поэтому здесь самые яркие карнавалы, захватывающие бои быков и театральные шествия по разным церковным датам. В феврале в период карнавалов стоит посетить Барранкилью, чтобы увидеть увлекательные зрелища, феерические костюмы и потанцевать вместе со всеми под зажигательные звуки сальсы.</p>
                <p>Кухня Колумбии имеет общие черты, но сильно отличается друг от друга в зависимости от региона. Путешествуя по Амазонке, вы сможете попробовать жаренную пиранью, на тихоокеанском побережье жареные бананы специального овощного сорта и пирожками с мелкой креветкой, Карибы - это рай для любителей морепродуктов, а Анды хранят древние индейские рецепты, угощают кукурузой, картошкой, помидорами, вкуснейшими густыми супами и чаем из листьев коки, которые в натуральном виде не дают наркотического эффекта, зато отлично помогают справиться с горной болезнью.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>6 января — Крещение</li>
                            <li>19 марта — День святого Иосифа</li>
                            <li>март-апрель — Великий четверг</li>
                            <li>март-апрель — Страстная Пятница</li>
                            <li>март-апрель — Пасха</li>
                            <li>1 мая - День труда</li>
                            <li>13 мая — День Св. Марии</li>
                            <li>май-июнь — Вознесение</li>
                            <li>июнь— Праздник тела Господня </li>
                            <li>29 июня— День Святых Петра и Павла</li>
                            <li>20 июля—  День Независимости </li>
                            <li>15 августа - Успение Богородицы</li>
                            <li>20 сентября - День дружбы</li>
                            <li>7 августа - Годовщина битвы при Бойака</li>
                            <li>8 декабря — Праздник Непорочного зачатия девы Марии</li>
                            <li>25 декабря — Рождество</li>
                        </ul>
                    </div>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Самый Вкусный Колумбийский Суп АХИАКО / Ajiaco Sopa Colombiana" src="https://i.ytimg.com/vi/qnWZdoBYYT8/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/qnWZdoBYYT8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Самый Вкусный Колумбийский Суп АХИАКО / Ajiaco Sopa Colombiana<br>© kariname88 2015</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <h2>Климат</h2>
        <div class="row">
            <div class="col-lg-6">
                <p>В Колумбии климат многообразен, здесь и экваториальная влажность, и высокогорная прохлада, и тропическая жара. Страну можно разделить на 4 зоны: Тихий океан, Карибское море, Анды и Амазонка.</p>
                <p>В сельве всегда тепло и влажно, круглый год погода не меняется, температура держится от +20 до +26 градусов, а влажность около 100%.</p>
                <p>На побережьях океанов жарче и суше, есть 2 сезона дождливый и сухой. Дожди идут с мая по октябрь, а зимой приходят ветра. Высокий сезон на местных пляжах длится круглый год, но в зимний период он несколько комфортнее.</p>
                <p>В Карибском море вода прогревается от +22 до +27 градусов. В Тихом океане вода прохладнее из-за проходящего рядом холодного течения. Обычно она держится в пределах +17-+22 градуса.</p>
                <p>Выделяется среди горных регионов пояс Анд с температурой среднегодовой +15 см, чуть прохладнее зимой до +9, чуть теплее и дождливее летом до +20. В горах всегда прохладно, с ноября по февраль возможны заморозки, в августе приходят ураганные ветра.</p>
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
                <p>Для въезда в Колумбию гражданам Казахстана на срок до 90 дней <strong>виза не нужна</strong>, въезд осуществляется по загранпаспорту.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно!</strong> Срок действия документа должен быть не меньше 6 месяцев с даты окончания поездки.</p>
                    </div>
                </div>
                <p>Для прохода пограничного контроля потребуется обратный билет или билет в третью страну по датам, не превышающим установленный максимум проживания. Туристическая страховка и сертификат о прививке от желтой лихорадки являеются рекомендованными документами.</p>

                <h5>Въезд в страну</h5>
                <p>Прямых рейсов в Колумбию из Казахстана нет, удобнее всего лететь со стыковкой в крупных европейских хабах. Пересадку можно сделать в Париже, Франкфурте-на-Майне, Мадриде и Амстердаме.</p>
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
                                <div>Богота - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Богота - Алматы</div>
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
        <p>Ввоз и вывоз наличных денег в Колумбию не ограничен, но как и во многих странах сумма, эквивалентная 10000 долларов, должна быть задекларирована.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Ввоз сигарет и алкоголя в Колумбию разрешена с 18 лет, с собой можно взять 250 сигарет или 50 г табака или 50 сигар. Разрешен ввоз алкоголя объемом до 2 л, не зависимо от крепости напитка.</p>

        <h5>Личные вещи</h5>
        <p>Личные вещи декларированию не подлежат, но должны быть взяты в пределах личной необходимости. Духи или туалетная вода не более 1 флакона, украшений не больше 500 г. Полностью запрещены продукты, растения и животные как на ввоз, так и на вывоз. Также нельзя провозить любые чучела, засушенные растения и листья коки. Любые наркотики, оружие и боеприпасы также под запретом. На вывоз исторических или обладающих художественной ценностью предметов нужно соответствующее разрешение от министерства культуры Колумбии.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В Колумбии больше всего распространен воздушный транспорт. Для путешествия в горы, на Амазонку или Карибы лучше всего воспользоваться самолетом. Основные аэропорты находятся в Барранкилье, Медельине, Кали и Боготе, в менее крупных городах есть небольшие аэродромы для малой авиации. Перелеты по стране осуществляют 6 местных авиакомпаний, билеты недорогие, лететь не долго. Кроме самолетов до разных точек страны можно добраться автобусами или поездами. Автобусное сообщение более развито, есть возможность выбрать класс обслуживания: самые дешевые брать не стоит, т.к. это не безопасно, лучше выбрать 1 класс с кондиционером, новыми машинами и удобным салоном.</p>

                <h5>Городской транспорт</h5>
                <p>Автобусы - самый распространенный транспорт, который есть в любом городе. Кроме обычных автобусов в Боготе ходит метробус - это скоростной вариант, с меньшим количеством остановок и большим комфортом. Чтобы избавить его от пробок, для него на дорогах столицы сделали выделенную полосу, после чего многие жители начали им пользоваться. Проезд в любом городском транспорте стоит 2000 песо в одну сторону. Если путешествовать или жить в Колумбии, то стоит взять проездной на месяц за 80000 песо.</p>

                <h5>Такси</h5>
                <p>Такси в Колумбии есть официальные и частные. Так как ситуация с безопасностью в стране не решена до сих пор, мы рекомендуем всегда выбирать только официальные машины со счетчиком и наклейкой с тарифами на лобовом стекле. В Боготе и других городах такси очень много, найти его на улице не составит труда, а если испанский не помеха - можно вызвать по телефону. За посадку придется отдать 4400 песо, и после еще по 4500 за км.</p>
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
                                <div>Автобус 1 поездка</div>
                                <span>2000 песо</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной</div>
                                <span>80000 песо</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span> 4500 песо/км <br>+ 4400 песо за посадку</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Выделенные полосы для транспорта в Колумбии" src="https://i.ytimg.com/vi/j6Me4pzeFGg/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/j6Me4pzeFGg?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Выделенные полосы для транспорта в Колумбии<br>© Helicoid 2011</figcaption>
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
                <h5>Особенности дорожного движения в Колумбии</h5>
                <p>В Колумбии много автомобильных дорог, между главными городами проложены автомагистрали, по которым можно ехать с комфортом. В городах бывают пробки, правила соблюдают слабо, на дорогах поведение водителей часто непредсказуемо. Однако, если есть достаточный опыт, то брать машину на прокат безопасно, а путешествовать на ней будет интересно.</p>

                <h5>Аренда авто</h5>
                <p>В Колумбии множество фирм по прокату автомобилей. Их можно найти в аэропорту, в центре столицы, в Картахене и других городах. Машины в среднем стоят около 40 долларов в пересчете, а оставить залога придется 1000 долларов. Основные международные компании предлагают дополнительные услуги, такие как возврат машины в другой офис, возврат в аэропорту в нерабочее время и другие. Для аренды потребуются международные права и возраст старше 21 года.</p>
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
                                <span>2200 песо за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ПУТЕШЕСТВИЕ НА МАШИНЕ ПО КОЛУМБИИ. КОФЕЙНЫЙ ПАРК //TRAVEL BY CAR IN COLOMBIA. THE COFFEE PARK" src="https://i.ytimg.com/vi/A8CMX2z_YxU/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/A8CMX2z_YxU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ПУТЕШЕСТВИЕ НА МАШИНЕ ПО КОЛУМБИИ.<br>© Евгения Чуйкина 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Колумбии</h2>
        <p>Медицина в Колумбии доступна только в Боготе, Картахене, Кали, Медельине и в некоторых других крупных городах. В небольших населенных пунктах представлены небольшие поликлиники, где нет нормального оборудования и квалифицированного персонала. Путешествовать по Колумбии без страхового полиса опасно, в любых случаях болезни или травмы лучше обращаться за помощью в ближайший крупный город. Если планируете посещать джунгли Амазонки, то необходимо сделать прививку от желтой лихорадки. Сертификат о ней обязательно сохраните, он потребуется при путешествии и в соседние страны. В Колумбии стоит соблюдать меры элементарной безопасности: не пить воду из-под крана, защищаться от ультрафиолета, особенно в горных районах, пить достаточное количество воды, следить за давлением на высоте.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <ul>
                    <li>Movistar - <a href="http://www.movistar.co/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Claro - <a href=" https://www.claro.com.co/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Uff - <a href="https://uffmovil.com/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Tiga - <a href="https://www.tigo.com.co/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Мобильная связь в Колумбии представлена большим количеством операторов, основную долю рынка занимают 4 ведущих игрока. Их офисы проще всего встретить в городах, у них есть тарифы предоплатные, подключаемые по загранпаспорту. Тарифы разные, есть дополнительные пакеты минут и смс, которые позволяют существенно сэкономить. Для пользования мобильным интернетом нужно подключить соответствующую услугу, часто для этого достаточно отправить смс оператору. Интернет не безлимитный, предлагается определенное количество Мб/день, неделю или месяц.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Колумбии распространен в туристических районах и в крупных городах. Вы не останетесь без привычной связи в отелях, кафе и ресторанах Боготы, Картахены или курортов Карибского побережья. При необходимости можно найти и интернет-кафе, которые еще остались в стране. Стоимость подключения будет от 1500 до 2300 песо.</p>
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
                                <span>123</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>125</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>119</span>
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