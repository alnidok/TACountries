<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Тайланд</h1>
                    <div class="lead">
                        <b>Столица</b>: Бангкок<br>
                        <b>Официальный язык</b>: тайский<br>
                        <b>Валюта</b>: THB - бат (100 сатангов)<br>
                        <b>Территория</b>: 514 000  км²<br>
                        <b>Население</b>: 70.5 млн человек<br>
                        <b>Часовой пояс</b>: GMT+7. Разница с Астаной +1 час
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Timelapse - Incredible Thailand | Невероятный Таиланд" src="https://i.ytimg.com/vi/OzltGlC5nCk/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/OzltGlC5nCk?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Valentin Ayupov, 2014</figcaption>
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
                <p>Тайланд - королевство в Юго-Восточной Азии, омывается водами Индийского и Тихого океана. С западной стороны Тайланд предлагает своим гостям пляжи Андаманского моря, а восточной стороны вас ждут пляжи Южно-Китайского моря, относящегося к Тихому океану. Тайланд граничит с Мьянмой, Лаосом, Камбоджой и Малайзией. Территория сильно вытянута с севера на юг и по форме напоминает голову слона.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Тайланд интересен не только пляжами, но и богатой многовековой культурой, традициями буддизма и многочисленными архитектурными памятниками. В Бангкоке можно познакомится с новыми азиатскими мегаполисами с многоуровневыми развязками, монорельсом, идущим на втором или третьем уровне от земли, с торговыми центрами, магазинами и развлекательными парками на любой вкус.</p>
                <p>Для отдыха на море лучше всего отправляться на острова, которых в Тайланде насчитываются сотни. Все райские рекламные картинки снимаются именно на них. Кроме собственно пляжного отдыха можно побывать на различных представлениях, местных праздниках, шоу с животными или покататься на слонах - главном животном страны.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="БАНГКОК. Тайланд. Что посмотреть и посетить за 2 дня. Bangkok. Thailand" src="https://i.ytimg.com/vi/gObEj5Buui4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/gObEj5Buui4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">БАНГКОК. Тайланд. Что посмотреть и посетить за 2 дня. Bangkok. Thailand<br>© Йога для всех 2014</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="11 ОСТРОВОВ, 3 ЖЕМЧУЖИНЫ АНДАМАНА, 3 ОСТРОВА, (3 в 1) Джеймс Бонд / Краби / Пхи-Пхи, 2 дня" src="https://i.ytimg.com/vi/TbeBM8t4HMY/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/TbeBM8t4HMY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">11 ОСТРОВОВ, 3 ЖЕМЧУЖИНЫ АНДАМАНА, 3 ОСТРОВА, (3 в 1) Джеймс Бонд / Краби / Пхи-Пхи, 2 дня<br>© Экскурсии на Пхукете - Phuket Cheap Tour 2016</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#prices">Цены</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h3>Население</h3>
        <p>Население Тайланда представлено в основном тайцами, их 75%. Китайцев 10%, но они довольно заметны, так как не ассимилируются, а живут своими группами по всей стране. На юге страны часто можно встретить малайцев, а на севере у границы с Камбоджей - кхмеров, на границе с Мьянмой живут карены, мяо и моны.</p>
        <p>95% населения страны исповедуют буддизм, только народности из Мьянмы исповедуют христианство, их здесь 0,7%, а малайцы на юге - ислам 4,6%.</p>
        <p>Средняя продолжительность жизни в стране - 74.6 года.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Тайланда очень богата и неразрывно связана с буддизмом, являющимся государственной религией этой страны. Здесь находятся древнейшие пагоды, королевский город в центре Бангкока, различные статуи Будды, отличающиеся размером и материалом изготовления. Самый известный - изумрудный, находится в храме королевского дворца.</p>
                <p>Праздники в Тайланде часто становятся одной из причин посетить страну. В самые жаркие месяцы года тайцы празднуют сонгкран - местный новый год, когда обливают водой все и всех, не важно знакомы вы друг с другом или нет. В эти дни стоит воздержаться от поездок на мотоцикле, так как струя воды может неожиданно сбить с ног. Все передвигаются пешком, многие с водяными пистолетами. 12 ноября празднуют  Лои Кратонг - день небесных фонариков, которые со свечками внутри и с загаданными желаниями отправляются путешествовать по небу. В различные периоды тайцы проводят множество тематических фестивалей, так можно попасть на праздник слонов, обезьян, ананасов, орхидей и других растений и животных, важных для тайцев.</p>
                <p>Кухней Тайланда увлечен весь мир, огромное количество рыбы и даров моря, кокосовое молоко и мякоть, много специй и продуктов, свойственных только этой кухне, таких как лемонграсс и другие травы. Из этих ингредиентов рождается уникальная тайская кухня, которую сложно понять, но невозможно не полюбить. Попробовать стоит Том Кха - суп с креветками и кокосовым молоком, блюда из рисовой лапши, рис с курицей, жареные маленькие осьминожки. Стоит учесть, если вы попросите у официанта сделать вам блюдо без специй, то оно все равно будет острым, но не настолько, как если вы забудете упомянуть эту фразу.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год.</li>
                            <li>февраль - Макха Буча, буддийский праздник, отмечают по лунному календарю.</li>
                            <li>17 марта - День Муай Тай - день воина</li>
                            <li>6 апреля - День Чакри - в честь первого короля Тайланда Рамы  I</li>
                            <li>13-15 апреля – Сонгкран - Тайский новый год</li>
                            <li>май – Весак (Висакха Буча) - буддийский праздник</li>
                            <li>май – Королевская церемония первой пашни </li>
                            <li>1 мая — День труда.</li>
                            <li>5 мая — День коронации</li>
                            <li>июль — Асалаха Буча, буддисткий праздник</li>
                            <li>1 июля — Праздник середины года</li>
                            <li>12 августа — День матери</li>
                            <li>сентябрь — День Сарттхай</li>
                            <li>октябрь— Оок Пханса</li>
                            <li>23 октября — Чулалонгкорн - день смерти короля Рамы V </li>
                            <li>ноябрь — Церемония Катхин </li>
                            <li>ноябрь — Лойкратхонг - праздник духа воды</li>
                            <li>5 декабря — День отца </li>
                            <li>10 декабря — День принятия Конституции</li>
                            <li>31 декабря — Канун Нового года</li>
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
                <p>Климат Тайланда субэкваториальный и тропический, который разделяется на муссонный и саванный.</p>
                <p>Основных сезонов два: сухой и сезон дождей. В сухой сезон температура может подниматься до +42, при этом повышенная влажность в воздухе остается. Самым жарким месяцем является апрель. Постоянные дожди идут с июля по октябрь, а наиболее комфортным периодом считается зима с ноября по февраль с температурой от +26 до +32 градусов.</p>
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
                <p>Гражданам Казахстана для посещения Тайланда  <strong>тайская виза </strong> оформляется по прибытию на 14 дней. Для этого необходимо предъявить туристический ваучер или бронь отеля, обратные билеты и достаточное количество денежных средств для пребывания в Тайланде: 20000 на человека или 40000 на семью. Визовый сбор составляет 1000 бат.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Для получения визы в аэропорту необходимо подготовить все документы заранее, деньги снять в банкомате в батах или предъявить  наличные в долларах. Отсутствие любого из документов является серьезным основанием для невыдачи визы.</p>
                    </div>
                </div>
                <p>Для получения визы на более длительный период необходимо обратиться в консульство Тайланда в Астане и предоставить документы строго на английском языке. Полный их перечень указан на сайте. Визу можно получить однократную (на 30 или 60 дней) или многократную (на полгода).</p>

                <h5>Авиасообщение</h5>
                <p>Перелет в Тайланд занимает около 7 часов. Прямые рейсы осуществляет компания Air Astana по понедельникам, вторникам, четвергам и субботам из Астаны и ежедневно из Алматы. Прилет в Бангкок, откуда уже можно добраться автобусом или внутренним рейсом до любого курорта.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Виза по прибитию</div>
                                <span>на 14 дней</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card">
                                <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+кабанбай+батыра+проспект,+6/1&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                                <div class="card-body">
                                    <h5>Посольство Тайланда</h5>
                                    <p>Астана, пр Кабанбай батыра, 6/1</p>
                                    <p><i class="icon-phone"></i> +7 (7172) 92-64-40</p>
                                    <p><i class="icon-link"></i> <a href="http://www.thaiembassy.org/astana/" target="_blank" rel="nofollow">www.thaiembassy.org</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <iframe src="https://www.google.com/maps/embed/v1/search?q=ул.+горная+135,+алматы,+казахстан&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                                <div class="card-body">
                                    <h5>Консульство Тайланда</h5>
                                    <p>Алматы, ул. Горная, 135</p>
                                    <p><i class="icon-phone"></i> +7 727 250 9005</p>
                                    <p><i class="icon-link"></i> <a href="http://www.thaiconsulate.kz" target="_blank" rel="nofollow">www.thaiconsulate.kz</a></p>
                                </div>
                            </div>
                        </div>
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
                                <div>Бангкок - Астана</div>
                                <span>4 раза в неделю</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бангкок - Алматы</div>
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
        <p>Ввоз и вывоз иностранной валюты разрешен на сумму не более 10000 долларов без декларации, все свыше необходимо задекларировать. Вывоз национальной валюты ограничен суммой 50000 бат, а для больших сумм требуется оформить специальное разрешение.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Алкоголь разрешен только 1 л на 1 человека, за превышение берут серьезные штрафы. Сигареты можно провезти 200 шт, табака 250 г. Электронные сигареты в Тайланде запрещены, за провоз наркотических средств полагается смертная казнь.</p>

        <h5>Личные вещи</h5>
        <p>Законодательно ввоз личных вещей ограничен 20000 бат, на практике в высокий сезон таможенники не пересчитывают их стоимость. Вопросы могут возникнуть при перевозке большого количества однотипных товаров, что будет похоже на коммерческую деятельность. Вывозить из страны запрещено платиновые украшения, необработанные драгоценные камни, золотые слитки, изображения Будды, слоновую кость и любые изделия из кожи и кости охраняемых животных, а также марки и антиквариат без разрешения Департамента изящных искусств.</p>

        <h5>Tax Free</h5>
        <p>Система Tax Free в Тайланде называется VAT Refund, она позволяет вернуть 7% при вылете из страны. Для этого надо купить товар в магазине на 2000 бат и оформить специальный чек. Перед посадкой зайдите в офис компании VAT Refund в аэропорту и проставьте штампы на чеки. Возврат будет произведен на банковскую карту.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Путешествовать по стране из-за ее масштабов удобнее всего самолетом. Между любыми крупными курортами летают рейсы местных лоукостеров, что позволят добраться до нужного места за адекватные деньги, не потратив при этом сутки на дорогу. Например, средняя цена из Бангкока на Пхукет - 600 бат, а по скидке можно поймать билет и за 400 бат. Кроме самолетов в стране хорошо развит железнодорожный транспорт. Он популярен для путешествия на север страны. Цена зависит от класса, а разница будет существенной не только в стоимости, но и в комфорте. Так, поездка в Чангмай в 4 классе стоит 120 бат и представляет собой общий переполненный вагон без кондиционера. Первый класс - это 600 бат удобный кондиционируемый вагон, мягкие сидения, розетки для техники и другие удобства. Чаще всего тайцы путешествуют автобусами. Билеты на них стоит покупать только на автовокзалах, с рук это дорого и небезопасно. На автобусах можно доехать в любой город страны. Все машины оборудованы кондиционерами, шторками на окнах, удобными креслами. А при дальних рейсах в стоимость билета включают горячий обед.</p>

                <h5>Городской транспорт</h5>
                <p>В городах можно перемещаться на автобусах, моторикшах и такси. В Бангкоке есть метро, состоящее из 3 линий. Разобраться в системе общественного транспорта в Тайланде очень сложно, более или менее реально им воспользоваться только в Бангкоке. В остальных городах и курортах туристы просто ловят тук-тук, который ходит по самым популярным маршрутам.</p>

                <h5>Такси</h5>
                <p>Разные виды такси - самый популярный вид транспорта у туристов. Тук-тук отвезет по своему маршруту за 10-20 бат, мотоциклетное такси возит от 50 бат в соседний район, а обычное стоит в среднем 100-150 бат за поездку по Паттайе, на Пхукете стоимость проезда выше.</p>

                <h5>Паромы</h5>
                <p>Чтобы перемещаться между многочисленными островами, можно взять небольшую лодку или воспользоваться паромом. Поездка с Пхукета на Пхи Пхи будет стоить 35 бат. Также паромы ходят на Краби, Самуи, Панган и другие острова королевства.</p>
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
                                <span>от 15 бат</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Паром</div>
                                <span>от 35 бат</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Маршрутное такси</div>
                                <span>10-20 бат</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>100-150 бат</span>
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
                <h5>Дорожное движение</h5>
                <p>Аренда авто в Тайланде развлечение не для слабонервных, здесь непривычное левостороннее движение, которое вместе с игнорированием элементарных правил местными жителями может сделать перемещение на автомобиле по стране похожим на экстремальный вид спорта. Тайцы постоянно превышают скорость, перекрестки проезжают по наитию и все время куда-то спешат. На островах много серпантинов и узких дорог, а в Бангкоке - пробки и непривычные развязки. Основная масса участников дорожного движения выбирает скутеры и мотоциклы.</p>

                <h5>Аренда авто</h5>
                <p>Аренда автомобиля в Тайланде возможна только по международным правам - книжечке, выдаваемой дополнительно к национальным правам и действующей 3 года. Возраст должен быть не меньше 21 года, а денег на счету для блокировки залога не меньше 1000 евро.</p>
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
                                <span>35 бат</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>29.7 бат</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Таиланд. Опасные дороги Ко Чанга. Лонг Бич. Кормление огромного Слона" src="https://i.ytimg.com/vi/ef8Ycs4Au3E/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/ef8Ycs4Au3E?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Таиланд. Опасные дороги Ко Чанга. Лонг Бич. Кормление огромного Слона<br>© Везде Сами 2015</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Тайланде</h2>
        <p>Медицина в Тайланде находится на высоком уровне. Во всех городах и курортах страны расположены современные центры с отличным оборудованием и профессиональными медиками. Тайланд - это туристическая страна, поэтому большинство врачей отлично говорит по-английски. Но лечение здесь не дешевое. Для того чтобы не попасть на серьезные расходы в экстренных случаях, необходимо оформить медицинскую страховку. Если планируется активный отдых, дайвинг, поездки на скутере, то это обязательно должно быть включено в страховой пакет.</p>

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
                    <li>DTAC - <a href=" http://www.dtac.co.th/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>TRUE Move- <a href="http://truemoveh.truecorp.co.th/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>1-2Call - <a href="http://www.ais.co.th/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Покупка сим-карты в Тайланде не составляет проблем. Они продаются в любом распространенном магазине 7-Eleven или Family Mart, для подключения потребуется паспорт. Тарифы у всех операторов примерно одинаковые. Сама сим-карта обойдется от 50 до 1700 бат, а звонки будут стоить от 1 до 5 бат внутри страны. При подключении туристического тарифа за 300-600 бат можно получить пакет мобильного интернета и звонки зарубеж за 4 бата за минуту.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Тайланде доступен повсеместно: не только в кафе и отелях, но также на улицах городов и на всех крупных курортах. Первые 5 часов в месяц предоставляются бесплатно, потом можно купить специальные карты пополнения в любом магазине и продолжать пользоваться точками доступа по всей стране. Для этого необходимо зарегистрироваться на сайте <a href="http://www.ais.co.th/" target="_blank" rel="nofollow">оператора AIS</a>.</p>
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
                                <div>Туристическая полиция</div>
                                <span>1155</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>123</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>191</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная</div>
                                <span>199</span>
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
                                    <nobr>220 В</nobr>, <nobr>50 Гц</nobr>. Используются разъемы <a href="/journal/electric-sockets.html#typeF">типа F</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_f.svg" style="width:100px; max-width:100%;">
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="prices" class="bg-white">
    <div class="container">
        <h2>Цены</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Поесть в Тайланде можно совсем недорого. Обед в уличной закусочной Бангкока — от 70 бат. Это дешевле, чем в сетевом фастфуде, где придется заплатить минимум 150-160 бат. Ужин в хорошем столичном ресторане обойдется в 700 бат и выше. На курортах Паттайи и Пхукета цены практически аналогичные: 120-160 бат за обед в недорогом кафе и от 700-800 бат за ужин в ресторане. В Таиланде все любят чаевые: в небольшом кафе можно оставить официанту 20-50 бат, в ресторане лучше не мелочиться, оставив от 100 бат и выше в зависимости от суммы чека. В Тайланде не считают зазорным просить чаевые, поэтому если они увидят, что остались без чаевых, то к вам обязательно обратятся, чтобы напомнить.</p>
            </div>
            <div class="col-lg-5">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ЕДА В ТАЙЛАНДЕ. Цены на продукты / 2018" src="https://i.ytimg.com/vi/nNZyVYQQZsA/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/nNZyVYQQZsA?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ЕДА В ТАЙЛАНДЕ. Цены на продукты / 2018<br>© DREAM AND TRAVEL 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="sight">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>