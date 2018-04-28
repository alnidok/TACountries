<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Аргентина</h1>
                    <div class="lead">
                        <b>Столица</b>: Буэнос-Айрес<br>
                        <b>Официальный язык</b>: испанский<br>
                        <b>Валюта</b>: ARS - Аргентинское песо (100 сентаво)<br>
                        <b>Территория</b>: 2 780 400 км²<br>
                        <b>Население</b>: 43.5 млн. человек<br>
                        <b>Часовой пояс</b>: GMT-3. Разница с Астаной -9 часов
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Buenos Aires  Time lapse" src="https://i.ytimg.com/vi/qKAjBlEtP5Y/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/qKAjBlEtP5Y?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© blakline, 2014</figcaption>
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
                <p>Аргентина - одна из самых больших по площади стран на планете. Ее земли протянулись от тропика козерога на севере до Огненной земли на юге. Здесь находится самый южный город Земли - Ушуайя, откуда отходят круизы в Антарктиду. С востока Аргентину омывает Атлантический океан, на северо-востоке она граничит с Бразилией и Уругваем, на севера с Парагваем и Боливией, а на западе с Чили. Восточная часть страны - это равнины, на севере расположено Бразильское плоскогорье, а весь запад занят высокими пиками Анд. </p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Главные достопримечательности Аргентины - это ее природа. Величественные ледники на юге, воспетая Жюль Верном Патагония, обширные пляжи Атлантического океана, горнолыжные курорты Анд и грохочущие на севере водопады Игуасу. Чтобы изучить всю страну, потребуется ни один месяц. Столица страны, куда прилетают изначально все туристы, расположена на севере, недалеко от границы с Уругваем, в дельте реки Ла Плата, которая впадает в Атлантический океан.</p>
                <p>Буэнос-Айрес, что в переводе означает чистый воздух, по праву зовется Латиноамериканским Парижем. Его центральные районы в конце XIX века были застроены особняками наподобие французской столицы. Рядом с ними в последние годы выросли современные небоскребы, торговые центры и фешенебельные районы. В плотной застройке нашлось место паркам, скверам, большим площадям, прогулочным набережным, интересным достопримечательностям и розовому дворцу, принадлежащему президенту Аргентины.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Буэнос Айрес - «Париж Южной Америки». Аргентина." src="https://i.ytimg.com/vi/aiLQqdgpQ-E/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/aiLQqdgpQ-E?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Буэнос Айрес - «Париж Южной Америки». Аргентина.<br>© Leonid Timo 2013</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Мир Приключений - Фильм: \"Путешествие на Край Света\" Патагония. \"Fin del mundo\" Patagonia." src="https://i.ytimg.com/vi/Uf_A8ni_3n8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Uf_A8ni_3n8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Мир Приключений - Фильм: "Путешествие на Край Света" Патагония<br>© Мир Приключений 2015</figcaption>
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
        <p>Население Аргентины говорит о себе: "Мы произошли от кораблей". Сюда приплывали мигранты из Европы на протяжении всего XIX и XX вв., привезли с собой рабов из Африки и смешались с местным индейским населением. В результате Аргентина считается самым европеизированным государством Южной Америки, метисы живут в основном в западных регионах на границе с Боливией и Чили. В Столичном регионе и других северных и восточных провинциях преобладают потомки европейских мигрантов. 98% жителей говорят о своей национальности - аргентинец. По статистике здесь живут 48% потомков итальянских переселенцев, 40% испанских, 12% немцев, 10% французов, хорватов, евреев, поляков, литовцев. Кроме европейцев в Аргентину мигрировали китайцы, арабы, индусы, но в меньших количествах. Их здесь не больше 2%. Сегодня миграция из Европы практически остановилась, теперь в страну прибывают жители менее благополучных стран Меркосура.</p>
        <p>Аргентина - католическая страна, всего здесь живет 72% католиков, до 9% протестантов, 4% православных, иудеев 2%, мусульман 1%.</p>
        <p>Продолжительность жизни в Аргентине в среднем составляет 76.7 лет, при этом мужчины живут здесь до 73 года, а женщины до 79 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Аргентины известна всему миру благодаря страстному танго, произведениям Борхеса, музыке Пьяццолы и многим другим ее проявлениям. Лучше всего знакомиться с ней в столице, здесь в театрах идут интересные постановки, проходят фестивали танго, в кино можно увидеть работы местных режиссеров. А чтобы выбрать книги аргентинских авторов, стоит зайти в самый известный книжный магазин мира, который расположился в бывшем здании оперного театра.</p>

                <h5>Праздники</h5>
                <p>Аргентинцы любят праздники, шествия и карнавалы, их совершенно не смущает отсутствие древних традиций. Они отмечают все важные христианские даты и события собственной истории, также общий для всего континента день открытия Америки. Для туристов интереснее всего побывать здесь в феврале, это время традиционных карнавалов. Они не столь знамениты, как в Рио, но не менее зрелищны.</p>

                <h5>Кухня</h5>
                <p>Кухня Аргентины - это жаренное на огне мясо Асадо. Его можно найти в любом кафе, ресторане или уличном фастфуде, а также отменные стейки и другие блюда из говядины. Кроме мяса местные жители любят перекусить эмпанадас с различными начинками. Это пирожки с курицей, сыром или мясом, считаются отличным перекусом. Утро стоит начать с хорошего кофе и пары медиалунусов, которые европейцы упорно продолжают называть круассанами. Из напитков Аргентина по праву гордится своим вином. Виноградные провинции протянулись на западе страны у подножия Анд, там выращивается множество сортов и производится одно из лучших вин в мире.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>март-апрель — Святая Пятница</li>
                            <li>март-апрель — понедельник после Пасхи</li>
                            <li>4 апреля — День Мальвинских островов </li>
                            <li>1 мая - День труда. </li>
                            <li>25 мая — годовщина Майской революции</li>
                            <li>9 июля — День Независимости</li>
                            <li>17 августа— годовщина смерти генерала Хосе де Сан-Мартина </li>
                            <li>12 октября - День Америк (День Колумба)</li>
                            <li>8 декабря — Праздник Непорочного зачатия девы Марии</li>
                            <li>25  декабря— Рождество</li>
                        </ul>
                    </div>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Аргентина. Аргентинское мясо АСАДО - ресторан La Estancia" src="https://i.ytimg.com/vi/R3QvpnViv3I/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/R3QvpnViv3I?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Аргентинское мясо АСАДО - ресторан "La Estancia"<br>© Leonid Timo 2014</figcaption>
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
                <p>Аргентина расположена в южном полушарии, здесь лето начинается в декабре, а зима в июне. Традиционный сезон отпусков - февраль, в этом месяце все отели курортов переполнены отдыхающими. В ноябре разгар весны и цветение жакаранды, когда весь Буэнос-Айрес покрыт невероятными фиолетовыми облаками цветов.</p>
                <p>Климатические зоны в стране представлены практически все, кроме экваториальных, начиная с северных тропиков (где всегда тепло, но летом жарко и влажно, а зимой комфортно и сухо) и заканчивая Огненной землей (где живут пингвины, а градусник не показывается цифры выше +10). Кроме вытянутости по длине на смену климата также влияет высота: чем выше поднимаются Анды, тем стремительнее падает температура. На вершинах лежат вечные снега, поэтому горнолыжный сезон здесь не прекращается никогда.</p>
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
                <p>По договору между странами, вступившему в силу в 2014 году, гражданам Казахстана разрешен въезд в Аргентину <strong>без визы</strong>, если целью поездки является туризм. Максимальный срок пребывания при этом не должен превышать 30 дней.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно!</strong> Паспорт должен быть действителен не менее 6 месяцев с предполагаемой даты выезда из страны.</p>
                    </div>
                </div>
                <p>При въезде в Аргентину могут потребовать обратный билет и бронь отеля, а также задать уточняющие вопросы по цели вашего визита. Таможенную декларацию и миграционную карту вам предложат заполнить еще в самолете, бланки также есть в аэропорту Буэнос-Айреса.</p>

                <h5>Авиасообщение</h5>
                <p>Прямых рейсов в Аргентину из Казахстана нет, но есть несколько вариантов перелета с одной стыковкой. Удобно лететь в Буэнос-Айрес через Париж или Франкфурт-на-Майне. В воздухе придется провести не меньше 18 часов, вместе с пересадкой дорога займет около суток. Большинство перелетов над Атлантикой ночные, это позволит проспать большую часть пути.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i>Без визы</div>
                                <span>30 дней</span>
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
                                <div>Буэнос-Айрес - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Буэнос-Айрес - Алматы</div>
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
        <p>Аргентина не препятствует ввозу и вывозу валюты со своей территории, вывоз местных песо также не ограничивается. Суммы в любой валюте, эквивалентные 10000 долларов, необходимо декларировать.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Максимум вы можете взять с собой 400 сигарет или 250 г табака или 50 сигар, алкоголя до 2 л, независимо от его крепости.</p>

        <h5>Личные вещи</h5>
        <p>Личные вещи (как новые, так и бывшие в употреблении) можно ввести беспошлинно на сумму до 300 долларов. Количество продуктов не должно превышать 5 кг, а мясо, молоко, свежие овощи, фрукты и другие растения - запрещены. Провоз украшений из золота и драгоценных камней ограничен личной необходимостью. Вся техника, включая мобильный телефон, должна быть задекларирована. При вывозе сувениров из кожи и шерсти или меха придется предъявить на таможне чек из магазина, а для предметов культурной ценности получить специальное разрешение у госорганов.</p>

        <h5>Tax Free</h5>
        <p>Tax Free работает исправно, количество магазинов с наклейкой Global Blue Tax Free Shopping достаточно высоко. При покупке заполните квитанции и получите штамп магазина. После получения отметки таможни на документах в аэропорту вы получите наличные в офисе возврата. Однако стоит учесть, что процесс длительный, поэтому приехать в аэропорт надо с существенным запасом времени.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Аргентина - страна с невероятными просторами, путешествовать по ней удобнее всего на самолетах. Аэропорт есть в каждом крупном городе. Иногда бывают задержки рейсов, но в основном полеты проходят без сбоев. Чем раньше будут куплены билеты, тем поездка обойдется дешевле. Сеть железных дорог проложена практически по всем районам, но есть труднодоступные места в Андах, где поезда не ходят. Путешествие по железной дороге быстрое и удобное, а в Патагонии можно покататься на туристическом поезде, своей роскошью напоминающим восточный экспресс. Автобусное сообщение наиболее экономично, при этом все машины оснащены кондиционерами, комфортными креслами, телевизорами и розетками для зарядки гаджетов. Автобусы идут из столицы во все провинции страны, а также в соседние страны - Чили, Боливию, Парагвай, Уругвай и Бразилию.</p>

                <h5>Городской транспорт</h5>
                <p>Автобусы - это самый дешевый и самый удобный вид транспорта аргентинской столицы. Всего за 3.5 песо можно попасть в любой район города. Маршруты проложены от центра к окраинам, часто добавляют новые маршруты. Перерыв в движении составляет всего 5-15 мин. Иногда чтобы разобраться, как доехать из одной точки в другую, потребуется помощь местных жителей, так как понятной карты маршрутов не существует.</p>

                <h5>Метро</h5>
                <p>В Буэнос-Айресе можно перемещаться на метро, всего под городом проложено 6 линий, они различаются по буквам от А до Н. Правда, комфортным его не назовешь: поезда ходят еще 30-х годов выпуска, часто приходится ждать их по 20-30 мин, а заходить в переполненный поезд довольно проблематично. Стоимость одной поездки - 5 песо. Тем, кто ездит регулярно, выгоднее взять проездной в виде пополняемой карты, в этом случае поездка обойдется дешевле.</p>

                <h5>Такси</h5>
                <p>Такси в Буэнос-Айресе встречаются на каждом шагу, черно-желтые автомобили можно остановить на улице или вызвать через специальную службу. Счетчики везде есть и работают, правда это не спасает большинство туристов от развода на крупную сумму, так как таксисты любят покружить по городу, если поймут, что везут не местного. Чтобы не попасть на незапланированную обзорную экскурсию, покажите таксисту маршрут на карте, сядьте на заднее правое сидение и внимательно следите за дорогой.</p>
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
                                <span>3.5 ARS</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>5 ARS</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>15 ARS за 1 км и 25 ARS за посадку</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Аргентина. Пригородные поезда. Самый дешевый транспорт. Аргентинские Железные дороги." src="https://i.ytimg.com/vi/cgKBsmml-zQ/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/cgKBsmml-zQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Аргентина. Пригородные поезда. Самый дешевый транспорт. Аргентинские Железные дороги.<br>© Adventure TV 2017</figcaption>
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
                <p>Привычное правостороннее движение и качественные дороги делают путешествие на автомобиле наиболее комфортным. Практически вся страна связана трассами, скорость на которых ограничена 130 км/ч, двухполосные дороги за городом ограничивают скорость до 80 км/ч, а в городах нельзя разгоняться более 60 км/ч. В отдаленных сельских районах, где распространена грунтовка, дорога сложная. Ее часто размывает в период дождей, и проехать по ней можно только на джипе. Еще одним сложным маршрутом для передвижения считаются горы. Самый длинный серпантин из 29 поворотов под 180 градусов находится в Андах между аргентинской Мендозой и чилийским Сантьяго.</p>

                <h5>Аренда авто</h5>
                <p>Прокат машин в Аргентине распространен, фирмы предлагают машины разного класса и стоимости. Иногда цена будет зависеть также от вашего маршрута: чем больше км вы проедите, тем больше придется заплатить. Для путешествия за рулем необходимо иметь международные права и быть в возрасте от 21 до 70 лет.</p>
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
                                <span>20 ARS за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Самая извилистая горная дорога – серпантин" src="https://i.ytimg.com/vi/82gObg5AgQw/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/82gObg5AgQw?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Самая извилистая горная дорога – серпантин<br>© MaxWow 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Аргентине</h2>
        <p>Медицинское обслуживание в Аргентине на хорошем уровне, в каждом городе есть больницы и поликлиники, обслуживающие местных жителей бесплатно. Частные госпитали тоже не редкость, врачи в них работают те же, что и в государственных и также качественно. Уровень обслуживания во всех клиниках одинаково высокий, но местные жители выбирают частную медицину из-за скорости. Если необходимо попасть к какому-то врачу без записи за месяц-два, то проще заплатить за обследование. Вся экстренная медицина бесплатна даже для приезжих, поэтому если что-то случится во время путешествия - без помощи тут никто не останется. Для обычной врачебной помощи в поездку лучше оформить медицинскую страховку.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь представлена 4 основными операторами:</p>
                <ul>
                    <li>Movistar - <a href="http://www.movistar.com.ar" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Claro - <a href="https://www.claro.com.ar/personas/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Personal- <a href="http://www.personal.com.ar" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Nextel - <a href="http://www.nextel.com.ar" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Мобильная связь в Аргентине работает отлично и покрывает всю страну. Для того, чтобы не разориться на роуминге, выгоднее всего купить местную сим-карту по прилету. Точки продаж есть в аэропорту и в любом городе. Для оформления предоплатного тарифа нужен только паспорт. Деньги за сим-карту переходят на счет, и ими можно воспользоваться сразу после активации. Выгоднее всего подключить на время поездки специальный пакет мобильного интернета. Практически везде есть сеть 3G или 4G. Пополнить счет можно в любом магазине на кассе, на заправке или в офисе оператора.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Аргентине распространен во всех кафе, ресторанах и отелях, практически везде он бесплатный. В Буэнос-Айресе можно найти интернет на главных площадях и в парках города. Чтобы подключиться к городской сети, потребуется местный мобильный номер, на него придет смс для подключения.</p>
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
                                <span>107</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>100</span>
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