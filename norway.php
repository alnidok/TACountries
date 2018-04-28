<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Норвегия</h1>
                    <div class="lead">
                        <b>Столица</b>: Осло<br>
                        <b>Официальный язык</b>: норвежский<br>
                        <b>Валюта</b>: NOK - норвежская крона (100 эре)<br>
                        <b>Территория</b>: 385 186 км²<br>
                        <b>Население</b>: 5.3 млн. человек<br>
                        <b>Часовой пояс</b>: от GMT +1. Разница с Астаной -5 часов.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="NORWAY - A Time-Lapse Adventure 4K" src="https://i.ytimg.com/vi/Scxs7L0vhZ4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Scxs7L0vhZ4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Morten Rustad, 2014</figcaption>
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
                <p>Королевство Норвегия расположено на западе Скандинавского полуострова. Включает в себя остров Шпицберген, а также земли в районе Антарктиды, остров Буве, Остров Петра I и Землю Королевы Мод. На Северо-Востоке граничит с Россией, на востоке со Швецией. Омывается водами Северного-Ледовитого океана, Норвежского и Северного морей. Отделена от Дании проливом Скагеррак.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>
                <p>Норвегию называют землей фьордов и северного сияния. Она неизменно привлекает к себе туристов, вопреки негостеприимному северному климату. Правда романтика заполярья интересует только самых стойких путешественников, а большая часть туристов выбирает уютные улочки Осло и комфортные круизные лайнеры, с которых открываются шикарные виды на знаменитые фьорды.</p>
                <p>Столица страны - Осло, в нем сочетается современный ритм жизни и красота старого города. В столичной агломерации проживает около 1/5 населения всей страны. Кроме Осло стоит побывать в не менее знаменитом Бергене с его невероятными домиками в средневековом квартале Брюгген, одной из самых красивых набережных в Европе и морским портом, откуда отходят все круизные лайнеры. Из спортивных развлечений Норвегия предлагает горнолыжные склоны в  Хемседал, Хафьель, Квитфьель, Трюсиль, Холменколлен и Гейло, трекинг по горам, и альпинизм.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Норвегия. Интересные Факты о Норвегии!" src="https://i.ytimg.com/vi/xA3jWpq6wW8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/xA3jWpq6wW8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Норвегия. Интересные Факты о Норвегии!<br>© CoolTimes 2016</figcaption>
                </figure>


            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Чудеса природы Норвегии. Страна ледников и фьордов. Путешествие на край света 09.11.2016" src="https://i.ytimg.com/vi/smxYj2Zam2M/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/smxYj2Zam2M?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Чудеса природы Норвегии. Страна ледников и фьордов. Путешествие на край света<br>© Загадки Вселенной 2016</figcaption>
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
        <p>До 1980-х годов прошлого века население Норвегии состояло только из норвежцев, саамов и норвежских финнов. Но с началом привлечения внешней рабочей силы в страну приехали жители Индии, Пакистана, Шри-Ланки, Ближнего Востока, Албании, Филиппин и Вьетнама. Сейчас титульная нация занимает 86% всего населения, 10% мигрантов из разных стран, 2% саамов и 2% квенов, также называемых норвежскими финнами. </p>
        <p>Большинство жителей Норвегии 82.7% придерживаются государственной религии - евангелического лютеранства. Также в стране проживают католики около 1%, православные менее 1%, последователи ислама 1.5%, есть представители буддизма, индуизма и местных верований.</p>
        <p>Продолжительность жизни в Норвегии составляет 82.1 года, норвежские мужчины в среднем доживают до 80.6 лет, а женщины до 84.2 лет.</p>
        <?= $this->render('_population') ?>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Норвегии - это народные легенды про троллей, древние саги о викингах, которые открыли Америку задолго до Христофора Колумба и современная литература, музыка и искусство. Самобытную норвежскую культуру знают и ценят во всем мире. Почти в каждом театре идут постановки пьес Генрика Ибсена, а музыканты исполняют произведения Эдварда Грига, самым же известным живописцем можно смело назвать Эдварда Мунка - яркого представителя экспрессионизма.</p>

                <h5>Праздники</h5>
                <p>Норвежцы любят праздники, в основном в их календаре религиозные торжества, в первую очередь Рождество. В декабре вся Норвегия превращается в сказочную страну, украшенную елками и огнями. По улицам ездят оленьи упряжки и гуляют гномы на радость детям. Рождество - семейный праздник, с традиционным столом и подарками для всей семьи. Новый год не менее важен для норвежцев, он более шумный и яркий: это праздник вечеринок, фейерверков и подарков. В ночь на 1 января к детям приезжает на своей козе гном Юленнисен и оставляет сюрпризы. Интересны весенние и летние праздники. Пасха традиционно встречается с кроликами, желтыми цыплятами и яйцами. Ночь святого Ханса, самая короткая ночь в году, знаменует собой середину года и приход короткого северного лета. Она празднуется на природе с кострами и песнями.</p>

                <h5>Кухня</h5>
                <p>Кухня Норвегии калорийная, простая, основанная на натуральных свежих продуктах и морском улове. Здесь невозможно найти обилие специй и соусов, потому что норвежцы ценят естественный вкус. Главное богатство Норвегии - морская рыба и морепродукты, на столе всегда есть креветки, лосось, форель, сельдь и другие виды промысловых рыб. Из мяса можно заказать свинину в травах или ягнятину. На гарнир чаще всего используется картошка. Из нее же делают котлеты, чипсы и лепешки. Смерреброд - вариант норвежского фастфуда, представляет из себя открытый бутерброд из черного хлеба с сыром, лососем и травами. Согревающие напитки необходимы в северном климате; самым крепким считается "аквавит", похожий на водку. Горячее вино "глёг" и многочисленные сорта пива подают в каждом кафе и ресторане Норвегии.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>февраль -  масленица</li>
                            <li>март-апрель- Великий четверг</li>
                            <li>март-апрель- Страстная пятница</li>
                            <li>март-апрель — Пасха</li>
                            <li>март-апрель — понедельник после Пасхи</li>
                            <li>1 мая — день трудящихся </li>
                            <li>17 мая- день конституции Норвегии</li>
                            <li>май-июнь - Вознесение</li>
                            <li>июнь — день Святой Троицы</li>
                            <li>июнь — день Святого Духа (следующий понедельник после Троицы)</li>
                            <li>24 декабря — Сочельник</li>
                            <li>25 декабря — Рождество</li>
                            <li>26 декабря — день Святого Стефана</li>
                        </ul>
                    </div>

                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Рождественский стол по-норвежски. Национальная кухня Норвегии" src="https://i.ytimg.com/vi/aVr96CQD1ZU/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/aVr96CQD1ZU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Рождественский стол по-норвежски. Национальная кухня Норвегии<br>© Королевство Норвегия 2015</figcaption>
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
                <p>Климат Норвегии не так страшен, как кажется на первый взгляд. В южных регионах он умеренно морской и только продвигаясь на север становится континентальным, а потом субарктическим.</p>
                <p>Средние зимние температуры на юге держатся около 0, а в Арктических регионах опускаются ниже -20 градусов. Летом юг прогревается до +15, а в некоторые дни бывает и до +25. На севере нормальная летняя температура +5. Вместо жары удивительная природа предлагает полуночное солнце, которое не закатывается за горизонт все лето, а зимой на небе расцветает невероятное северное сияние.</p>
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
                <p>Норвегия, несмотря на то, что не входит в Евросоюз, подписала шенгенское соглашение, поэтому для ее посещения гражданам Казахстана потребуется <strong>шенгенская виза</strong>. Для ее оформления необходимо обратиться в посольство Литвы в Астане. Посольство Норвегии в Казахстане прекратило свою работу в 2016 году.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Шенгенскую визу для туристов выдает посольство Литвы, но если планируется деловая, учебная или другая нетуристическая поездка, то визу запрашивать надо у посольства Норвегии в Москве.</p>
                    </div>
                </div>
                <p>Шенгенская виза не сложна в получении, достаточно внимательно подобрать все документы, сделать страховку на все время поездки. Получать визу придется самостоятельно, так как с 2015 года посольство Литвы прекратило выдавать визы посредникам. Скачать анкету и прочитать полный список документов можно на сайте литовского посольства.</p>

                <h5>Въезд в страну</h5>
                <p>Главный аэропорт Норвегии расположен в Осло. Сюда прилетают рейсы со всей Европы, а также из Москвы и Стамбула. Для туристов, планирующих круиз по норвежским фьордам, удобнее лететь в Берген с пересадкой в Осло, а из множества европейских стран напрямую. Из Казахстана прямых перелетов нет.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i>Шенгенская виза</div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=ул.+космонавтов,+астана+020000,+казахстан&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Литвы</h5>
                        <p>ул. Космонавтов, Астана 020000, Казахстан</p>
                        <p><i class="icon-phone"></i> +7 (7172) 925 850</p>
                        <p><i class="icon-link"></i> <a href="https://kz.mfa.lt/kz/ru/konsul-jskaaa-informatsiaa/glabnaaa-konsul-jskaaa-informatsiaa/vizjy" target="_blank" rel="nofollow">kz.mfa.lt</a></p>
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
                                <div>Осло - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Осло - Алматы</div>
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
        <p>Норвегия не ограничивает ввоз и вывоз как собственной, так и иностранной валюты, но все суммы свыше 25 000 NOK и эквиваленты в других валютах должны быть задекларированы.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Чтобы провезти в страну сигареты, нужно быть старше 18 лет и иметь с собой не более 200 сигарет или 250 г табака. При ввозе слабоалкогольных напитков возраст также ограничен 18 годами, а количество 2 литрами. При провозе крепких напитков (выше 22 градусов) нужно быть старше 20 лет и иметь с собой не более 1 л. Алкоголь выше 60 градусов к провозу запрещен.</p>

        <h5>Личные вещи</h5>
        <p>Ввоз вещей не ограничен, если они предназначены для личного пользования. К запрещенным предметам относятся не только наркотики, оружие и взрывчатка, но и продукты: мясомолочные, свежие овощи и фрукты. Общее количество продуктов не должно превышать 10 кг. Стоит обратить внимание, что установлены ограничения на вывоз рыбы в 10 кг.</p>

        <h5>Tax Free</h5>
        <p>В Норвегии система Tax Free пользуется популярностью, она поможет сэкономить 19% при покупке товаров в магазинах, принимающих участие в системе. Сумма покупки должна составлять 315 NOK и выше. Документы на возврат оформляются в магазине при предъявлении паспорта, в некоторых крупных торговых точках можно сразу же получить деньги, но чаще только заполненный чек, который придется предъявить в аэропорту перед вылетом. Деньги возвращаются наличными или на банковскую карту.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Основное средство передвижения в стране - это поезда. Широкая железнодорожная сеть связывает все основные города, как южные, так и северные. Вагоны сидячие, везде есть бесплатный Wi-Fi, розетки рядом с креслом и другие удобства. Кроме поездов по стране можно путешествовать на автобусах. Если вы хотите узнать, насколько может быть комфортной автобусная поездка, стоит прокатиться из Осло в Берген или во Флом, что обойдется в 520 NOK. Поезда несколько дороже: добраться до Бергена по железной дороге можно за 650-915 NOK, в зависимости от уровня билета и времени его покупки.</p>

                <h5>Городской транспорт</h5>
                <p>Во всех городах ездят автобусы и трамваи, в столице кроме них есть еще и метро. Билет единый на все виды транспорта, рассчитан на 1 час действия с того момента как он был прокомпостирован. Для частых поездок предусмотрены различные виды проездных документов, позволяющие существенно сэкономить. Одна поездка в городе обойдется в 3.5 NOK, кататься целый день можно за 90 NOK, а месяц 710 NOK.</p>

                <h5>Такси</h5>
                <p>Такси в Норвегии - развлечение дорогое, машины ходят только в черте города и берут за 1 км 10 NOK плюс за посадку 40 NOK. Расплатиться можно как наличными, так и кредитной картой. Вызвать такси можно с помощью мобильного приложения или по-старинке поймать на улице.</p>

                <h5>Паром</h5>
                <p>Паромы в Норвегии распространены на западном побережье. Зачастую, там это самый быстрый и удобный вид транспорта. Есть как небольшие лодки, так и крупные корабли, перевозящие людей и автомобили. Цены разнятся в зависимости от судна и от маршрута.</p>
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
                                <div>Автобус, Трамвай, Метро</div>
                                <span>33 NOK </span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>40 NOK за посадку + 10 NOK/км</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ТРАНСПОРТ В НОРВЕГИИ (TRANSPORT IN NORWAY)" src="https://i.ytimg.com/vi/dgqV384_7O8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/dgqV384_7O8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ТРАНСПОРТ В НОРВЕГИИ (TRANSPORT IN NORWAY)<br>© Anna Prokopenko 2016</figcaption>
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
                <p>Для путешествия по Норвегии нужно быть опытным водителем. Дороги в стране находятся в идеальном состоянии и правила соблюдаются всегда, но погода и горы вносят свои коррективы. В горных регионах, а таких 75% территории, множество дорог узкие и есть опасные серпантины. А внезапный сильный дождь или туман могут резко уронить видимость почти до нуля. Обязательно включать ближний свет и днем, и вечером, а также следить за скоростным режимом. Штрафы очень чувствительны, за езду без включенных фар придется заплатить 2000 NOK. Стоянки в городах чаще платные, удобнее всего останавливаться на парковках торговых центров и крупных магазинов.</p>

                <h5>Аренда авто</h5>
                <p>Аренда автомобиля популярна у туристов изо всех стран. Компаний много, поэтому можно подобрать подходящую по цене или услугам заранее. Если вы решили, что машина вам нужна уже в Норвегии, то можно обратиться в офисы прокатных компаний, расположенные во всех основных городах. Для заключения договора потребуется залог, паспорт, международные права и возраст выше 18 лет.</p>
            </div>
            <div class="col-md-4">
                <div id="block-fuel"></div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Типичная Норвегия: дождливая погода, бесконечные леса, сельская местность, идеальные дороги" src="https://i.ytimg.com/vi/pBFUjoTRZjU/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/pBFUjoTRZjU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Типичная Норвегия: дождливая погода, бесконечные леса, сельская местность, идеальные дороги<br>© Безумный Макс 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Норвегии</h2>
        <p>Уровень здравоохранения в Норвегии лучший в мире. Государство заботится, чтобы медицина была доступна для каждого гражданина страны. Туристам же необходимо покупать медицинскую страховку перед поездкой, по которой можно получить помощь в поликлиниках или больницах в любом регионе. В основном все госпитали в стране государственные. Есть некоторые частные больницы и аптеки, но их не много. Основная масса лекарств продается по рецепту врача, но есть некоторые препараты, которые можно купить без проблем. Стоимость обслуживания в частных клиниках, а также стоимость лекарств достаточно высока.</p>

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
                    <li>Telenor - <a href=" https://www.telenor.no/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Tele2 - <a href="https://www.tele2.no" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Lebara Mobile - <a href=" https://en.mycall.no" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>В Норвегии все операторы сотовой связи предлагают подключиться по международному паспорту. Кроме документа потребуется ответить на несколько вопросов, назвать адрес проживания или отеля. Сим-карты отличаются по цене 100-700 NOK и по включенном трафику, звонкам и смс. Выбирать удобнее те, где интернет уже подключен. Позвонить домой можно от 1 NOK за минуту разговора. Пополнить счет удобно в супермаркетах, на заправках и в офисах продаж.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Норвегии распространен в отелях, кафе, ресторанах, аэропортах, но в чаще всего он оказывается платным и дорогим. За час подключения придется отдать 45-90 NOK. Намного дешевле подключить мобильный трафик от 10 NOK в день и иметь интернет в любой точке страны.</p>
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
                                <span>112</span>
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
                                <div>Пожарная</div>
                                <span>110</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>113</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Береговая охрана</div>
                                <span>120</span>
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