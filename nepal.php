<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Федеративная Демократическая Республика Непал</h1>
                <div class="lead">
                    <b>Столица</b>: Катманду 
                    <br>
                    <b>Официальный язык</b>: непали
                    <br>
                    <b>Валюта</b>: NPR — непальская рупия
                    <br>
                    <b>Территория</b>: 140 800 км² 
                    <br>
                    <b>Население</b>: 30,4 млн человек 
                    <br>
                    <b>Часовой пояс</b>: GMT+5:45. Разница с Астаной +15 мин.
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Mustang, Nepal. October 2015 (Королевство Мустанг, Непал. Экспедиция 12.5months, октябрь" src="https://i.vimeocdn.com/video/606774915_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/194734787?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© 12.5months, 2016</figcaption>
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
                <p>Республика Непал — южно-азиатское государство. Граничит на севере с Китаем, а на востоке, юге и западе — с Индией.</p>
                <p>На территории страны можно выделить две основные части: Гималаи и предгорные равнины на юге — тераи.</p>
    
                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Столицей Непала, а также его культурным, историческим, экономическим и политическим центром, является город Катманду.</p>
                <p>Для туристов город чаще всего служит отправной точкой для путешествия в Гималаи и другие части Непала. Однако и здесь гостям страны есть на что посмотреть.</p>
                <p>Главными достопримечательностями столицы являются:</p>
                <ul>
                    <li>Боднатх — древний буддистский храмовый комплекс, центр тибетского буддизма в Непале;</li>
                    <li>Сваямбунатх — буддистское селение и храмовый центр, расположенный на вершине холма в окружении рощи, в которой обитают стаи диких обезьян;</li>
                    <li>Пашупатинатх — индуистский храмовый комплекс, популярное место паломничества для странствующих йогов;</li>
                    <li>Дворец-музей Нараянхити;</li>
                    <li>Рани-Покхари или королевский пруд — искусственно созданный королем  Пратапом водоем в центре города в честь своего погибшего сына, наполнялся водой из святых для индуистов мест (Кедарнатх, Бадринатх, Муктинатх, Госайкунда).</li>
                </ul>
                <p>Непал предоставляет широкие возможности для отдыха, особенно для любителей альпинизма, горного трекинга, парапланеризма, рафтинга, сафари в национальных парках (например, в парке Читван) и просто для ценителей потрясающих живописных пейзажей и всех тех, кто ищет душевную гармонию.</p>
                <p>Туристические горные маршруты разработаны таким образом, что являются доступными как для новичков, так и для профессионалов.</p>
            </div>
        </div>

        <hr>

        <div class="row">           
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Катманду: Круг жизни" src="https://i.vimeocdn.com/video/358786276_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/51991039?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Катманду: Круг жизни<br>© PavlovaLena 2012</figcaption>
            </figure>
                

            <figure class="figure d-block  col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Юрий Белойван: Непал - Тибет. Путешествие в другую реальность" src="https://i.ytimg.com/vi/IPhoVoNl78s/maxresdefault.jpg"
                        class="bg-image" />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/IPhoVoNl78s?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                            mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Юрий Белойван: Непал - Тибет. Путешествие в другую реальность
                    <br>© Molfarius 2014</figcaption>
            </figure>

        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="#population">Население</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#culture">Культура</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#climate">Климат</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#visa">Въезд в страну</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#custom">Таможня</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#transport">Транспорт</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#auto">Авто</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#health">Здравоохранение</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#communication">Связь</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#sight">Что посмотреть</a>
            </li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>
        <p>К наиболее многочисленным этническим группам Непала относятся: непальцы (46%), чхетри (13%), горные бахуны (12%), магары (7%), тхару (6%), таманги (5%) и невари (5%).</p>
        <p>Подавляющее большинство местных жителей исповедуют индуизм (более 80%), остальные буддизм, анимизм, а также ислам и кирант.</p>
        <p>Доля населения, проживающего в городах, низкая — около 17%.</p>
        <p>Средняя ожидаемая продолжительность жизни — 66 лет (67 лет для женщин и 65 лет для мужчин).</p>

        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p>На традиции и обычаи жителей Непала, на их менталитет огромное влияние оказывает религия. Непальцы характеризуются дружелюбным, спокойным, ненавязчивым и скромным нравом. Главными ценностями, как и в большинстве азиатских стран, являются семья, содружество и духовная жизнь.</p>
                <p>Традиционная одежда имеет свои особенности у разных народностей Непала. Женщины чаще всего носят разноцветные сари или длинные свободные юбки с блузками. Непалки любят яркие увесистые украшения, платки и шали. Мужчины, как правило, надевают свободные хлопковые рубахи, зауженные книзу брюки и жилетки.</p>
                <p>Национальная кухня Непала очень простая, но в то же время разнообразная, сочетает в себе индийские, китайские и европейские кулинарные традиции. Главными ее составляющими являются рис, пшеница и бобовые, которые подаются с соусами (самый популярный из них — карри), овощами и изредка с мясом птицы, козы или яка. Непальцы не употребляют говядину, так как корова является для них священным животным.</p>
                <p>К основным блюдам предлагаются различные лепешки из пшеницы (чапати, наан) или чечевицы (пападам).</p>
                <p>Самый популярный напиток в Непале — черный чай, его часто пьют без каких-либо добавок, в некоторых регионах принято добавлять травы или молоко.</p>
                <p>Гостям страны необходимо соблюдать ряд правил из уважения к местной культуре:</p>
                <ul>
                    <li>рекомендуется носить скромную одежду: для мужчин это брюки, а одежда женщин должна прикрывать ноги и руки;</li>
                    <li>необходимо снимать обувь перед входом в храм или дом местного жителя, а также в некоторые рестораны;</li>
                    <li>запрещено фотографировать непальцев без их разрешения;</li>
                    <li>в общественных местах не принято ярко выражать свои чувства;</li>
                    <li>не стоит также прикасаться к местным жителям, особенно к голове, так как эта часть тела считается у них сокровенной;</li>
                    <li>запрещается курить в местах религиозного культа;</li>
                    <li>храмы и другие религиозные сооружения принято обходить по часовой стрелке;</li>
                    <li>следует учитывать, что непальцы берут и отдают предметы, а также принимают пищу только правой («чистой») рукой.</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>11 января — Национальный день единения</li>
                            <li>29 января — День мучеников</li>
                            <li>18-19 февраля — День демократии</li>
                            <li>8 марта — Международный женский день</li>
                            <li>9 ноября — День конституции</li>
                            <li>29 декабря — День рождения короля Бирендры</li>
                        </ul>

                        <h6 class="title-decorative">Праздники с передвижными датами</h6>
                        <ul>
                            <li>январь-февраль — Празднество Васант-Пачами</li>
                            <li>февраль-март — День рождения Шивы (Маха Шиваратри)</li>
                            <li>февраль-март — Праздник наступления весны</li>
                            <li>март-апрель — День рождения Рамы</li>
                            <li>апрель — Новый год</li>
                            <li>апрель-май — День рождения Будды</li>
                            <li>август-сентябрь — День рождения Кришны</li>
                            <li>август-сентябрь — День коров Гаи Джатра</li>
                            <li>август-ноябрь — Фестиваль Бога Дождя</li>
                            <li>сентябрь — Фестиваль Женщин Тидж</li>
                            <li>октябрь — Бада Дасаин </li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="УЛИЧНАЯ ЕДА В НЕПАЛЕ | САМСА ПО НЕПАЛЬСКИ И ПРЯНЫЙ МАСАЛА" src="https://i.ytimg.com/vi/ztrRVo_tY2w/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/ztrRVo_tY2w?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">УЛИЧНАЯ ЕДА В НЕПАЛЕ | САМСА ПО НЕПАЛЬСКИ И ПРЯНЫЙ МАСАЛА<br>© ЗАЛИП ТВ 2017</figcaption>
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
                <p>Климат Непала субтропический муссонный, горный.</p>
                <p>На территориях, расположенных ниже 1000 метров над уровнем моря, можно выделить четыре сезона:</p>
                <ul>
                    <li>зима — с декабря по февраль. Минимальная температура составляет +3°С, а максимальная +19°С;</li>
                    <li>весна — с марта по май. Минимальная температура составляет +10°С, а максимальная +29°С;</li>
                    <li>лето — с июня по август. Минимальная температура составляет +19°С, а максимальная +30°С;</li>
                    <li>осень — с сентября по ноябрь. Минимальная температура составляет +12°С, а максимальная +26°С.</li>
                </ul>
                <p>С мая по сентябрь здесь длится сезон дождей.</p>
                <p>В горах холодно круглый год: летом температура не поднимается выше +10°С, а зимой обычно от -7°С до -30°С.</p>

                
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
                <p>Для граждан республики Казахстан въезд на территорию Непала является визовым, оформляется по упрощенной схеме по прилете в аэропорт страны.</p>
                <p>Желательно заполнить онлайн-анкету на сайте Департамента иммиграции Непала - <a href="http://www.online.nepalimmigration.gov.np/tourist-visa" target="_blank" rel="nofollow">перейти на сайт</a>. После этого на указанный email придет pdf-файл, который нужно будет распечатать и предъявить в аэропорту Непала.</p>
                <p>При себе необходимо иметь загранпаспорт (срок действия которого не должен быть меньше 6 месяцев с момента прибытия в государство), заполненную анкету туриста и две цветных фотографии (3*4 см).</p>
                <p>Размер визового сбора зависит от планируемого времени пребывания в Непале.</p>

                <h5>Авиаперелет</h5>
                <p>Прямые авиарейсы из Казахстана в Непал отсутствуют. Оптимальным вариантом является перелет из Алматы в Катманду с пересадкой в Дели или Дубае (авиакомпании Эйр Астана и FlyDubai).</p>
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
               
            </div>
            <div class="col-md-4">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i> Требуется виза
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p>В Республике Казахстан нет посольства Непала.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Непала - <a href="http://www.customs.gov.np/en/customsoffices.html" target="_blank" rel="nofollow">customs.gov.np</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Граждане Казахстана, достигшие 18-летнего возраста, могут беспошлинно провозить до 200 сигарет (или до 50 сигар) и до 1,15 литров спиртных напитков.</p>

        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен (сумма свыше 5 тыс. USD подлежит обязательной декларации).</p>

        <h5>Ювелирные изделия и драгоценности</h5>
        <p>Разрешается беспошлинный ввоз золотых изделий или золота весом до 50 г, серебряных изделий или серебра весом до 500 г.</p>

        <h5>Художественные и культурно-исторические ценности</h5>
        <p>Запрещен вывоз объектов, представляющих культурную и/или историческую ценность без соответствующего разрешения.</p>


        <h5>Запрещен ввоз/вывоз:</h5>
        <ul>
            <li>наркотических средств;</li>
            <li>огнестрельного оружия и боеприпасов;</li>
            <li>ядовитых веществ;</li>
            <li>материалов, противоречащих нормам морали;</li>
            <li>домашних животных без соответствующего сертификата о прививках.</li>
        </ul>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система Непала</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Авиационный транспорт</h5>
                <p>Внутреннее авиасообщение в стране достаточно развито. Однако необходимо учитывать, что далеко не все аэропорты функционирует в сезон дождей. Стоимость перелета относительно высокая, а из-за погодных условий рейсы зачастую переносят.</p>

                <h5>Общественный транспорт</h5>
                <p>Основным средством передвижения по территории Непала являются автобусы.</p>
                <p>На главных туристических маршрутах курсируют современные комфортабельные автобусы, билеты на которые можно приобрести в турагентствах. В кассах автовокзалов продаются билеты на обычные автобусные маршруты, которыми пользуются местные жители. Они, как правило, технически устаревшие и очень переполненные в часы пик.</p>
                <p>В столице и некоторых других крупных городах помимо автобусов функционируют троллейбусы, такси, вело- и моторикши. О стоимости проезда на такси необходимо договариваться с водителем заранее, в ночное время (с 21:00) проезд дороже на 50%.</p>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6">
                            <b>Стоимость проезда</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>от 4 NPR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Троллейбус</div>
                                <span>4 NPR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>10-25 NPR за км</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Public transport in Kathmandu" src="https://i.ytimg.com/vi/e1MAvFcKgWc/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/e1MAvFcKgWc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Public transport in Kathmandu<br>© Nartin1986 2011</figcaption>
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
                <p>Особенности дорожного движения в Непале:</p>
                <ul>
                    <li>движение левостороннее;</li>
                    <li>состояние дорог в большинстве случаев неудовлетворительное;</li>
                    <li>практически все парковки платные (от 40 NPR в час);</li>
                    <li>дорожные указатели, разделительные знаки, светофоры, пешеходные переходы и информационные табло зачастую отсутствуют;</li>
                    <li>ПДД повсеместно игнорируются местными водителями;</li>
                    <li>высокая аварийность на дорогах.</li>
                </ul>

                <h5>Аренда авто</h5>
                <p>Учитывая особенности непривычного нам левостороннего и крайне беспорядочного движения, а также плохое качество дорог, самостоятельное управление автотранспортным средством является опасным. В связи с чем рекомендуется аренда автомобиля вместе с профессиональным водителем.</p>
                <p>Стоимость проката колеблется от 3900 до 15000 NPR в сутки в зависимости от класса автомобиля и длительности аренды.</p>
                <p>Также можно арендовать велосипед за 40-150 NPR или мотоцикл за 100-400 NPR.</p>                    
                    
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Республики Казахстан могут управлять транспортным средством на территории Непала при наличии водительского удостоверения международного образца.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6">
                            <b>Стоимость топлива</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span>106 NPR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>87 NPR за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Катманду, Непал" src="https://i.ytimg.com/vi/xc8t_6gvOx0/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/xc8t_6gvOx0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Катманду, Непал<br>© Alexandr Kupnyi 2014</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>В Непале распространены гепатит А, тиф, бактериальная диарея, а в некоторых районах страны малярия и японский энцефалит.</p>
        <p>Планирующим посещение Непала рекомендуется проверить свою прививочную карту на предмет вакцинации против гепатитов, полиомиелита, столбняка и тифа.</p>
        <p>Основные предписания для туристов:</p>
        <ul>
            <li>учитывать жаркие климатические условия, особенно лицам с сердечно-сосудистыми и иными хроническими заболеваниями;</li>
            <li>тщательно соблюдать личную гигиену, обрабатывать руки дезинфицирующим раствором;</li>
            <li>пить только бутилированную воду;</li>
            <li>местные фрукты и овощи перед употреблением мыть с антисептическим мылом.</li>
        </ul>
        <p>Медицинские услуги для иностранных граждан платные, причем стоимость их гораздо выше, чем расценки для местного населения.</p>
        <p>Настоятельно рекомендуется оформление медицинского страхового полиса.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь</h2>

                <p>Мобильная связь Непала предоставляется следующими операторами:</p>
                <ul>
                    <li>NTC - <a href="https://www.ntc.net.np/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Ncell - <a href="https://www.ncell.axiata.com/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>UTL  - <a href="https://www.nepalitelecom.com/2016/12/utl-gets-gsm-frequencies.html" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Тарифные планы всех мобильных операторов делятся на контрактные и по предоплате.</p>
                <p>Для приобретения местной сим-карты необходимо иметь паспорт, его ксерокопию, цветное фото и заполненную анкету.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6">
                            <b>Полезные телефоны</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>100</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная</div>
                                <span><nobr>101</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая мед помощь</div>
                                <span><nobr>102</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дорожная полиция</div>
                                <span><nobr>103</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый экстренный номер</div>
                                <span><nobr>112</nobr></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-light-bulb"></i>
                        <span class="h6">
                            <b>Электросеть</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <nobr>230 В</nobr>,
                                    <nobr>50 Гц</nobr>. Используются разъемы 
                                    <a href="/journal/electric-sockets.html#typeC">типа C</a>,
                                    <a href="/journal/electric-sockets.html#typeD">типа D</a>,
                                    <a href="/journal/electric-sockets.html#typeM">типа M</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_c.svg" style="width:100px; max-width:100%;">
                                    <img src="/img/electric/type_d.svg" style="width:100px; max-width:100%;">
                                    <img src="/img/electric/type_m.png" style="width:100px; max-width:100%;">
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