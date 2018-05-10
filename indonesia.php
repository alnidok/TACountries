<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Индонезия</h1>
                    <div class="lead">
                        <b>Столица</b>: Джакарта<br>
                        <b>Официальный язык</b>: индонезийский<br>
                        <b>Валюта</b>: IDR - индонезийская рупия (100 центов)<br>
                        <b>Территория</b>: 1 919 440 км²<br>
                        <b>Население</b>: 266.4 млн человек<br>
                        <b>Часовой пояс</b>: от GMT+7 до GMT+9. Разница с Астаной 1-3 часа.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Бали с квадракоптера. Подборка лучших мест" src="https://i.ytimg.com/vi/2IA-ljn94Vc/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/2IA-ljn94Vc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Игорь Полтавцев, 2016</figcaption>
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
                <p>Индонезия - одно из популярных туристических направлений. Это крупнейшее островное государство мира, расположенное в Индийском и частично в Тихом океане. По суше граничит с 3 государствами Восточным Тимором, Папуа-Новой Гвинеей и Малайзией. Его основу составляет Зондский архипелаг, в который входят Малые и Большие Зондские острова. Сегодня Индонезия занимает 4 место по численности населения и 14-е по размеру территории.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Индонезия - страна тысячи островов. Наиболее популярным из них считается Бали. Его белоснежные пляжи, красивые храмы и бурлящие вулканы притягивают миллионы туристов. Жизнь на Бали не затихает круглый год. Многие туристы влюбляются в остров и перебираются сюда жить. Кроме Бали Индонезия может предложить остров Комодо и его драконов, суматранские джунгли, вулканы c синим пламенем и другие чудеса света, которые нельзя найти больше нигде во вселенной.</p>
                <p>Путешествие стоит начать с Джакарты, познакомиться со столичной жизнью мегаполиса, а потом ехать покорять острова, не забвая, что Индонезия гораздо богаче, чем самый популярный остров Бали.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Остров Бали" src="https://i.ytimg.com/vi/8ZHNdSWPyyc/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/8ZHNdSWPyyc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Остров Бали<br>© Shanti Path 2016</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Индонезия. Мандариновые плантации Бали и парк Юрского периода на острове Комодо. 22 серия" src="https://i.ytimg.com/vi/7H3J091-5kg/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/7H3J091-5kg?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Индонезия. Мандариновые плантации Бали и парк Юрского периода на острове Комодо. 22 серия<br>© МИР НАИЗНАНКУ 2014</figcaption>
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
        <p>Население Индонезии многонационально, здесь проживает огромное количество народностей. Большинство индонезийцев - это яванцы, их 42%, следующими идут сунданцы, их 15.4%. Остальные группы не такие многочисленные. Здесь живут малайцы (4,1 %), китайцы (около 4 %), мадурцы (3,3 %), батаки (3 %), бугисы (2,9 %), минангкабау (2,7 %). Есть еще малые народности с островов Калимантан, Новая Гвинея и Суматра. Их количество колеблется от нескольких сот до нескольких тысяч человек.</p>
        <p>Основная часть населения Индонезии - мусульмане, их 86,7%. Кроме них есть буддисты - переселенцы из Китая и  католики, протестанты - экспаты из Европы. Еще одной местной религией является индуизм, он распространен на острове Бали и соседних небольших островах. </p>
        <p>Продолжительность жизни в Индонезии пока находится на низком уровне и составляет всего 71 год. Женщины в среднем живут до 73.7 лет, а мужчины до 68.5 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Несмотря на туристическую популярность и господство ислама, Индонезия смогла сохранить свою уникальную культуру, которой нет больше нигде в мире. Познакомиться с ней можно в местных храмах, в большом количестве сохранившихся на Бали. Все они действуют, а местные жители приносят здесь подношения духам. Чтобы задобрить духов, оберегающих дом, в жилищах устанавливают специальные алтари с цветами и свечами. А рапространенные страшные каменые изваяния отлично защищают от злых духов.</p>
                <p>Праздники в Индонезии не менее удивительны, чем вся ее культура. Новый год здесь встречают полным молчанием, что с трудом дается туристам, поэтому на этот день лучше покинуть Бали и поехать на интересные экскурсии по стране или оставаться в пределах отеля. А вот похороны здесь наоборот веселое событие с танцами и песнями. По местным поверьям это помогает душе легче уйти в новый мир. В июне и июле стоит приехать на Бали ради фестиваля искусств с карнавальными шествиями, театральными представлениями, фейерверками и всеобщим весельем.</p>
                <p>Кухня Индонезии пряная и острая, но гораздо умереннее во всех отношениях, чем в Индии или Тайланде. Главный ингредиент любого блюда - это местный рис. Из него готовят супы, закуски, основные блюда и даже десерты. Мяса здесь едят мало, а свинины практически нет в рационе, зато много рыбы, морепродуктов, зелени, свежих овощей и фруктов.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>сентябрь-февраль - Рамадан (Булуан-Пуаса)</li>
                            <li>март-апрель - праздник Ньепи</li>
                            <li>март-апрель - поминовение пророка Исы</li>
                            <li>апрель-май - вознесение Исы</li>
                            <li>21 апреля - День Картини</li>
                            <li>апрель-май - мусульманский Новый год, Мухаррам</li>
                            <li>апрель-май - Идул-Адха (Ид уль-Адха)</li>
                            <li>май - Весак</li>
                            <li>июль - День рождения пророка Мохаммеда</li>
                            <li>17 августа - День провозглашения независимости</li>
                            <li>1 октября - День защиты</li>
                            <li>5 октября - День вооруженных сил</li>
                            <li>28 октября - День клятвы молодежи</li>
                            <li>декабрь - Исра-Мирадж-Наби-Мохаммед, вознесение пророка Мохаммеда</li>
                            <li>25 декабря — Рождество</li>
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
                <p>Индонезия расположена в экваториальном климате. Здесь за год сезон меняется дважды, с ноября по март идет дожди, а с апреля по октябрь продолжается сухой сезон. Температура весь год остается неизменной около +25 градусов, но на солнце может быть до +35. Прохладно здесь бывает только в горах. Температура воды в океане постоянно комфортная около +26-+27 градусов, что помогает развиваться коралловым рифам. В океане сильны приливы и отливы. Обычно на всех пляжах, кроме диких эта информация указана. на табличках можно найти время прилива и отлива high tide/low tide.  </p>
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
                <p>Граждане Казахстана имеют право на <strong>безвизовый въезд</strong>, в Индонезию на период 30 дней, если целью поездки является туризм.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> При влете в страну необходимо показать паспорт сроком действия не менее 6 месяцев с даты окончания поездки и обратный билет или билет в любую другую страну.</p>
                    </div>
                </div>
                <p>Если вы планируете задержаться в стране, то можно получить долгосрочную визу или выехать в соседнюю страну для обновления статуса туриста или получения визы в местном посольстве.</p>

                <h5>Авиасообщение</h5>
                <p>Перелет в Индонезию в Джакарту или в Денпасар на Бали возможен из Алматы или из Астаны с одной пересадкой. Удобнее всего лететь рейсами Казахстанских или Тайских авиалиний через Бангкок. Также есть стыковки в Сингапуре, Гонконге и Кулуа-Лумпуре.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Безвизовый режим</div>
                                <span>до 30 дней</span>
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
                                <div>Денпасар - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Денпасар - Алматы</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Джакарта - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Джакарта - Алматы</div>
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
        <p>При путешествии в Индонезию можно взять с собой неограниченное количество валюты, удобнее ввозить и менять на месте доллары США. Любое количество наличных денег должно быть задекларировано. Вывозить валюту можно в неограниченном количестве, национальную не более 50000 рупий.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Алкоголь и сигареты для ввоза разрешены лицам старше 18 лет. Один человек может провести 200 сигарет, 100 гр табака или 50 сигар, 2 литра алкогольных напитков любой крепости, духи или туалетную воду только для личного пользования.</p>

        <h5>Личные вещи</h5>
        <p>Личные вещи можно ввозить без ограничений, фото и видеотехнику необходимо декларировать. Запрещены для ввоза и вывоза лекарства, фрукты, редкие животные и птицы, товары, имеющие художественную ценность без специального разрешения.</p>

        <h5>Tax Free</h5>
        <p>Возврат НДС в Индонезии осуществляется по системе VAT Refund. Это позволит сэкономить 10% от покупок на сумму свыше 500000 рупий. Магазинов, участвующих в системе не так много, перед покупками убедитесь в наличии специальной наклейки об участии в программе. При покупке вместе с чеком получите счет-фактуру, а при вылете предъявите документы вместе с товарами в офисе VAT Refund в аэропорту. Обычно возврат осуществляется на банковскую карту, но можно получить деньги и наличными.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Между 18 тысячами островов удобнее всего перемещаться на самолетах и паромах. Внутри островов ходят автобусы, на Яве и Суматре есть железная дорога. Внутренний авиаперевозчик Гаруда соединяет все аэропорты страны. Самый популярный рейс Джакарта - Денпасар. За трехчасовой полет придется отдать 1370000 индонезийских рупий. По Яве можно с комфортом путешествовать на поездах, правда удобства предоставляются только в первом классе. Здесь вас ждут раскладывающиеся сидения, розетки, кондиционер и горячий обед. Цены правда довольно высоки - за дорогу от столицы до Сурабайи придется отдать 440000 рупий. Билеты на поезд удобнее всего брать в кассах вокзала или в туристических агентствах города. Автобусы курсируют по всем островам, некоторые даже включают в маршрут паромную переправу на соседний остров. Стоимость проезда зависит от дальности, комфортности салона, перевозчика и многих других вещей.</p>

                <h5>Городской транспорт</h5>
                <p>Единственный общественный транспорт на островах - это автобусы, машины довольно изношены и переполнены. Оплату берет водитель или кондуктор. Чаще всего цена проезда составляет от 2 до 5 тыс рупий, это зависит от расстояния. К сожалению, нередко в Индонезии с туриста могут взять в 2-3 раза большую сумму, поэтому следите за тем, сколько оплачивают местные жители.</p>

                <h5>Такси</h5>
                <p>Для туристов в Индонезии больше подходят такси, они недорогие и безопасные. Но так же как и везде нужно следить за включением счетчика или договариваться на фиксированную сумму. Лучше передвигаться на официальных такси. Тариф у них за первый км 6000 рупий, за каждый последующий по 3000 рупий.</p>

                <h5>Паром</h5>
                <p>Основное средство передвижения, соединяющее между собой острова. К паромам относятся и небольшие лодки, курсирующие между соседними островами, и крупные корабли, перевозящие машины и автобусы. Всего в Индонезии 300 действующих портов. С Бали до Кетапанга можно доплыть за 7500 рупий и полчаса, а с Суматры попасть на Яву можно за полтора часа и 15000 рупий.</p>

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
                                <span>2-5 тыс рупий</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>6000 рупий за первый км <br>и 3000 за последующие</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Порт с Нуса Пенида до Паданг бай (Бали). Стоимость парома и расписание. 7.01.18г." src="https://i.ytimg.com/vi/z4-yhMxclRY/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/z4-yhMxclRY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Порт с Нуса Пенида до Паданг бай (Бали). Стоимость парома и расписание. 7.01.18г.<br>© СсК.Сами с Карандашами 2018</figcaption>
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
                <p>Индонезия - не лучшее место для самостоятельного передвижения по дорогам страны. Здесь непривычное левостороннее движение, узкие необорудованные дороги, не соблюдающие никаких правил местные водители. Да и соблюдать здесь их очень сложно - дорожных указателей нет, разметки тоже нет, разъезжаются все на перекрестках согласно инстинктам. Есть общепринятое ограничение скорости в 70 км/ч. В крупных городах пробки и отсутствие парковочных мест - явление привычное.</p>

                <h5>Аренда авто</h5>
                <p>Если вы не хотите портить себе отпуск местными дорогами, но хотите посмотреть страну, лучше всего брать машину с водителем. Подобное удовольствие стоит 60-70 долларов в день. Если же решились путешествовать самостоятельно, то необходимо предоставить права, которым не меньше года, быть старше 21 года и иметь соответствующую медицинскую страховку. Среди туристов большей популярностью пользуется аренда не машины, а скутера или мотоцикла.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива и паркинга</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span>8 700 IDR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Парковка</div>
                                <span>1000-2000 IDR за час</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ДОРОГИ НА БАЛИ. Пробки, хаос и узкие улочки? ✤ BaliBlogger" src="https://i.ytimg.com/vi/hK1rN-AIJH8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/hK1rN-AIJH8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ДОРОГИ НА БАЛИ. Пробки, хаос и узкие улочки? ✤ BaliBlogger<br>© BaliBlogger ❤ блог о Бали 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Индонезии</h2>
        <p>Медицина в Индонезии находится на невысоком уровне. В отдаленных районах страны есть риск заразиться местными инфекционными заболеваниями, но на туристические районы эта проблема не распространяется. Для путешествия на Бали, Суматру, Яву и другие крупные острова никаких дополнительных прививок делать не требуется. Чтобы воспользоваться местной медициной, необходимо иметь страховку, без нее любая оказанная помощь стоит больших денег. На Бали есть множество хороших медицинских центров, где вы получите лечение при любой экстренной ситуации. Специально на остров за медициной не приезжают, но есть всемирно известный центр лотосовых естественных родов, который привлекает женщин со всего мира.</p>

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
                    <li>Telkomsel - <a href="http://www.telkomsel.com" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Indosat - <a href="https://indosatooredoo.com/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>XL - <a href="https://teleponindonesia.com/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Сим-карты местных операторов продаются повсеместно, в магазинах, палатках, офисах связи, на заправках. Цена симки начинается от 15 000 - 30 000 IDR. Для подключения дайте продавцу свой паспорт и попросите о помощи. Для пополнения счета достаточно купить скретч-карту и действовать по инструкции. Из отелей звонить не стоит, так как там очень специфическая тарификация. Платить за звонок придется в любом случае, независимо от того, удалось ли вам соединиться с абонентом или нет.</p>

                <h5>Интернет</h5>
                <p>Удобнее всего пользоваться мобильным интернетом. Кроме него есть точки доступа Wi-Fi в кафе, отелях и ресторанах, все они бесплатны. Если нет необходимости быть постоянно онлайн, можно обойтись только этим видом интернета и не подключать местные сим-карты.</p>

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
                                <span>110</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная</div>
                                <span>113</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>118</span>
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