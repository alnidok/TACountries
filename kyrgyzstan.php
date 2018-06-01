<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Киргизия</h1>
                <div class="lead">
                    <b>Столица</b>: Бишкек
                    <br>
                    <b>Официальный язык</b>: киргизский, русский
                    <br>
                    <b>Валюта</b>: KGS — киргизский сом
                    <br>
                    <b>Территория</b>: 199 951 км²
                    <br>
                    <b>Население</b>: 6,1 млн человек
                    <br>
                    <b>Часовой пояс</b>: UTC+6. Разница с Астаной отсутствует
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Solo in Kyrgyzstan" src="https://i.vimeocdn.com/video/662271909_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/205038522?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Dave Katz, 2017</figcaption>
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
                <p>Киргизия располагается в Центральной Азии. Граничит с Казахстаном, Китаем, Таджикистаном и Узбекистаном. Выход к морю отсутствует.</p>
    
                <!--Карта-->
                <?= $this->render('_map', $country) ?>
            
                <p>Туристический поток в Киргизию год от года набирает всё большие обороты, что не удивительно, ведь Киргизия — это величественные горные хребты Памира и Тянь-Шаня, бескрайние степи, реликтовые леса, живописное озеро Иссык-Куль, бальнеологические и горнолыжные курорты, кристально чистый воздух, старинные храмы, а еще это удивительной красоты ковры, вкусный кумыс и ароматный плов.</p>
                <p>Главным туристическим направлением является столица Киргизии — древний и колоритный Бишкек. Местные жители называют его «Зеленым городом» — считается, что на одного жителя здесь приходится гораздо больше деревьев, чем в каком-либо другом городе Центральной Азии. К главным достопримечательностям Бишкека относятся: Музей скульптур под открытым небом, статуя Свободы «Эркиндик», действующий Воскресенский собор, Государственный флагшток, здание Парламента, красивейший Ботанический сад и площадь Ала-Тоо («Снежные горы») — излюбленное место для проведения парадов и праздников.</p>
                <p>Подробнее о культуре и истории страны туристы могут узнать в Историческом музее и Музее изобразительных искусств. Любителям шопинга обязательно стоит посетить местные базары, где представлены изделия народных промыслов (например, войлочные ковры, «калпаки») и свежайшие фермерские продукты: овощи и фрукты, кумыс, конскую колбасу, мягкий сыр и многое другое.</p>
                <p>Вторым по величине городом Киргизии является древнейший город Центральной Азии — Ош, знаменитый памятниками исламской архитектуры в ферганском стиле. К тому же, Ош — это своеобразные «ворота в горы»: сотни туристов именно отсюда совершают восхождение на Тянь-Шань и Памир.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Интересные факты о Бишкеке" src="https://i.ytimg.com/vi/bl-NdNIpOzc/hqdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/bl-NdNIpOzc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Интересные факты о Бишкеке<br>© Путешествуй со Sputnik</figcaption>
            </figure>
        
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Впечатление о Киргизии" src="https://i.ytimg.com/vi/Dc0LxiA0Rwc/hqdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Dc0LxiA0Rwc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Впечатление о Киргизии<br>© Петр Моренков</figcaption>
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

        <p>Основные этнические группы в стране — киргизская (73%) и узбекская (14%). К национальным меньшинствам относятся турки, казахи, азербайджанцы, таджики и другие.</p>
        <p>Большинство верующих жителей исповедуют мусульманство, небольшая часть населения относится к православной, католической и протестантской религиозным конфессиям.</p>
        <p>Уровень урбанизации в стране довольно низкий — около 60% населения проживают в селах.</p>
        <p>Средняя продолжительность жизни составляет 70 лет: 66 лет у мужчин и 74 года у женщин.</p>
        
        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p><i class="icon icon-link"></i>Министерство Культуры Киргизии - <a href="http://www.gov.kg/?page_id=81638&lang=ru" target="_blank" rel="nofollow">gov.kg</a></p> 
                <p>Жители Киргизии свято соблюдают свои национальные традиции, сопровождающие их на протяжении всей жизни. Это касается многих аспектов: рождение детей, сватовство, праздники, народные гуляния и развлечения, сбор урожая, народные верования, национальная одежда и кухня.</p>
                <p>Основу всех киргизских традиций составляют ценность семьи, почитание старших, гостеприимство, неукоснительное следование правилам, бережное отношение к своей истории и религиозность.</p>
                <p>По сей день киргизы, особенно в сельской местности, предпочитают носить национальную одежду: для женщин это длинное цветное платье с вышивкой, шаровары и своеобразный головной убор по типу тюрбана и платка, а мужчины надевают свободные штаны и рубаху, халат, войлочный колпак и кожаные сапоги.</p>
                <p>У многих киргизов в селах внутреннее убранство дома выглядит почти так же, как и сотни лет назад: пол застилается коврами и паласами, по периметру комнаты разложены стеганые одеяла, а по центру — скатерть для приема пищи. Стены также украшены коврами, а вещи хранятся в кованых сундуках.</p>
                <p>Основными направлениями искусства в стране были и остаются изготовление ковров, которые по большей части не ткут, а валяют, а также вышивание золотом и изготовление традиционных сумок.</p>
                <p>Одним из главных национальных праздников в стране является Нооруз, что в переводе означает «Новый день», он отмечается в Киргизии 21 марта — в день весеннего равноденствия. К Ноорузу готовятся задолго: убирают в доме, шьют или покупают новую одежду, раздают долги и мирятся со всеми, с кем были в ссоре. В ночь перед праздником все имеющиеся в доме емкости наполняются айраном, молоком, ключевой водой и зерном для привлечения изобилия и плодородия в грядущем сезоне. Утро начинается с народных гуляний с традиционными песнями и плясками, конными скачками и различными состязаниями. Неотъемлемым праздничным атрибутом является чон кеже («большой суп») — обрядовое блюдо из многих составляющих, которое разделялось между всеми соседями, родственниками и близкими.</p>
                <p>Другими традиционными блюдами Киргизии являются:</p>
                <ul>
                    <li>бешбармак — кушанье из баранины, вареных лепешек и мясного бульона;</li>
                    <li>чучбара — приготовленные на пару пельмени;</li>
                    <li>пало — киргизский плов;</li>
                    <li>чучук — вареная колбаса из конины.</li>
                </ul>
                <p>В кухню Киргизии пришли многие блюда из соседних стран, например, суп-шурпа, плов, шашлык, манты, самса, но обрели местные нюансы, и, поэтому, воспринимаются как исконно киргизские. Излюбленные напитки — кумыс, айран и их производные. Любая трапеза в Киргизии венчается чаепитием с национальной выпечкой, орехами и сухофруктами.</p>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>7 января — Рождество</li>
                            <li>23 февраля — День защитника Отечества</li>
                            <li>8 марта — Международный женский день</li>
                            <li>21 марта — Нооруз</li>
                            <li>7 апреля — День революции</li>
                            <li>1 мая — День труда</li>
                            <li>5 мая — День Конституции Киргизии</li>
                            <li>9 мая — День Победы</li>
                            <li>31 августа — День независимости</li>
                            <li>7 ноября — День Великой Октябрьской революции</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="В Бишкеке отметили праздник Нооруз" src="https://i.ytimg.com/vi/vPnY-cdCmhI/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/vPnY-cdCmhI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">В Бишкеке отметили праздник Нооруз<br>© Дастан Кадыркулов</figcaption>
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

                <p>На территории Киргизии господствует резко континентальный климат, характеризующийся жарким летом (от +24°C до +35°C) и холодной зимой (от −4°C до −20°C).</p>
                <p>Среднегодовое количество осадков небольшое — от 200 мм до 400 мм. Солнечных дней в году около 250.</p>
                <p>Лучшее время для посещения страны — с марта по ноябрь.</p>
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
                <p>Въезд в Киргизию для граждан Казахстана является безвизовым на срок до 90 дней. Пропускным документом служит загранпаспорт или национальный паспорт, удостоверяющий личность гражданина. При этом, пребывание на территории государства сроком до 30 дней не требует обязательной регистрации в органах паспортно-визового контроля МВД КР, свыше 30 дней — регистрация необходима.</p>
                <p>В случае поездки с детьми при себе необходимо иметь следующие документы*:</p>
                <ul>
                    <li>паспорт/загранпаспорт ребенка (или паспорт/загранпаспорт родителя, в который вписан ребенок);</li>
                    <li>свидетельство о рождении ребенка;</li>
                    <li>нотариально заверенная доверенность от родителя (родителей) на вывоз ребенка, если ребенок путешествует в сопровождении третьих лиц или одного из родителей.</li>
                </ul>
                <p>*Информация является ознакомительной, за полной информацией необходимо обращаться в консульство.</p>
            </div>
            <div class="col-md-4">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i>Виза не требуется
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,++ул.+кунаева,+1&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Киргизии</h5>
                        <p>Астана,  ул. Кунаева, 1</p>
                        <p><i class="icon-phone"></i> +7 (7172)  24-20-24</p>
                        <p><i class="icon-link"></i> <a href="http://kyrgyzembs.kz/" target="_blank" rel="nofollow">kyrgyzembs.kz</a></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6">
                            <b>Прямые авиарейсы</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Астана-Бишкек</div>
                                <span>5 раз/нед</span>
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
        <p><i class="icon icon-link"></i> Сайт таможенной службы Киргизии - <a href="http://www.customs.kg/" target="_blank" rel="nofollow">customs.kg</a></p>        
       
        <h5>Спиртное и сигареты</h5>
        <p>Гражданам Казахстана, достигшим 18-летнего возраста, разрешается беспошлинно ввозить до 200 сигарет и до трех литров спиртных напитков.</p>
            
        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен (сумма свыше 10 тыс. USD подлежит обязательной декларации).</p>

        <h5>Животные</h5>
        <p>Все домашние животные должны быть привиты и иметь международный медицинский сертификат.</p>

        <h5>Запрещены к ввозу/вывозу:</h5>
        <ul>
            <li>наркотические средства;</li>
            <li>огнестрельное оружие, боеприпасы, взрывчатые вещества (без соответствующего разрешения);</li>
            <li>радиоактивные и ядовитые вещества;</li>
            <li>поддельные денежные банкноты;</li>
            <li>предметы, имеющую историческую и/или культурную ценность (без соответствующего разрешения);</li>
            <li>материалы, противоречащие морально-этическим нормам и разжигающие политические, религиозные и/или иные конфликты;</li>
            <li>животные и растения редких видов.</li>
        </ul>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">

                <h5>Воздушный транспорт</h5>
                <p>В стране существуют несколько аэропортов, обслуживающих внутренние («Авиакомпания Кыргызстан») и международные рейсы. Самые крупные из них расположены в Бишкеке, Оше и Баткене. Информацию о рейсах и стоимости перелета можно получить на официальном сайте — <a href="http://www.airport.kg/" target="_blank" rel="nofollow">airport.kg</a>.</p>
                
                <h5>Железные дороги</h5>
                <p>Общая протяжённость железных дорог в стране составляет около 450 км. По ним можно перемещаться между Бишкеком, Балыкчи, Кара-Балтой и Токмоком. Официальный сайт национального ж/д перевозчика Киргизии — <a href="http://www.kjd.kg/" target="_blank" rel="nofollow">kjd.kg</a>.</p>

                <h5>Междугородние автобусы</h5>
                <p>Самым популярным средством передвижения по территории Киргизии являются автобусы и маршрутки, которые, как правило, дислоцируются около городских вокзалов и рынков. Автобусы следуют по расписанию, а маршрутки по мере заполняемости пассажирами.</p>

                <h5>Городской транспорт</h5>
                <p>Внутригородские перевозки во всех крупных населенных пунктах осуществляются автобусами, троллейбусами и маршрутками. Проезд оплачивается, как правило, на выходе у кондуктора или водителя, тарифы в городах различаются (в среднем от 8-10 KGS за одну поездку).</p>
                <p>Также туристы могут воспользоваться услугами такси, оплата в котором производится по счетчику согласно принятым тарифам. Необходимо учитывать, что раннее бронирование, простой и провоз крупногабаритного багажа оплачиваются дополнительно, а в ночное время действуют двойные тарифы. Для примера, поездка на такси по Бишкеку будет стоить от 70 KGS днем и около 150 KGS ночью. Стоимость проезда лучше оговорить с водителем заранее.</p>
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
                                <span>от 8 KGS</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 70 KGS</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Автопарк Бишкека обновят наклоняющимися троллейбусами - Россия 24"src="https://i.ytimg.com/vi/xHwDgFCdx70/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/xHwDgFCdx70?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Автопарк Бишкека обновят наклоняющимися троллейбусами - Россия 24<br>© Россия 24</figcaption>
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
                <p>Протяженность автодорог с твердым покрытием в стране — около 8 тыс. км. Правила дорожного движения в Киргизии практически полностью совпадают с правилами дорожного движения Республики Казахстан: запрещено пересечение двойной сплошной разметки, управление автомобилем в нетрезвом состоянии, необходимо пользоваться ремнями безопасности как водителю, так и всем пассажирам, дети перевозятся в автокреслах.</p>
                <p>Однако, как и в любой стране, в Киргизии существует ряд особенностей, связанных с дорожным движением:</p>
                <ul>
                    <li>максимально допустимая скорость в черте города составляет 60 км/час, вне населенного пункта — 90 км/час, а на автомагистрали — 110 км/час;</li>
                    <li>в центре столицы и крупных городов некоторые парковки являются платными в рабочее время (50-100 KGS в час);</li>
                    <li>проезд по дорогам бесплатный, за исключением автомагистрали Бишкек — Ош (250 KGS);</li>
                    <li>обязательное автострахование отсутствует, но в настоящее время планируется его введение.</li>
                </ul>

                <h5>Аренда авто</h5>
                <p>Арендовать автомобиль можно в прокатных фирмах Бишкека или другого крупного города.</p>
                <p>Для заключения договора аренды потребуются паспорт, водительские права и кредитная карта.</p>
                <p>Необходимо внимательно ознакомиться со всеми пунктами договора, а также осмотреть арендуемое транспортное средство на предмет царапин или иных повреждений и зафиксировать их документально.</p>
                <p>Минимальная стоимость проката автомобиля составляет 2,5 тыс. KGS в сутки. За дополнительную плату можно приобрести автокресло, багажник и навигатор.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Республики Казахстан могут управлять транспортным средством на территории Киргизии при наличии национального водительского удостоверения.</p>
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
                                <span>45,50 KGS за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>43,80 KGS за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="В Бишкеке отремонтировали половину дорог - МИР24"src="https://i.ytimg.com/vi/c5eQ98Yixbk/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/c5eQ98Yixbk?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">В Бишкеке отремонтировали половину дорог - МИР24<br>© Мир 24</figcaption>
                </figure>                
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
       
        <p>Санитарно-эпидемиологическая ситуация в Киргизии оценивается как удовлетворительная. Типичные болезни: вирусный гепатит А, туберкулез, сальмонеллез, бруцеллез и кишечные инфекции. Рекомендована вакцинация против гепатита А.</p>
        <p>Основные рекомендации для туристов:</p>
        <ul>
            <li>учитывать климатические условия, особенно лицам с сердечно-сосудистыми и иными хроническими заболеваниями;</li>
            <li>тщательно соблюдать личную гигиену;</li>
            <li>пить только бутилированную воду;</li>
            <li>обрабатывать овощи и фрукты перед употреблением.</li>
        </ul>
        <p>Услуги в области здравоохранения в стране предоставляются частными и государственными мед. учреждениями. Иностранным туристам рекомендуется оформление медицинского страхового полиса.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь и интернет</h2>
                <p>Приезжая в страну на отдых, имеет смысл приобрести местную сим-карту одного из операторов:</p>
                <ul>
                    <li>O! - <a href="https://www.o.kg/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Megakom - <a href="https://www.megacom.kg/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Вeeline - <a href="https://www.beeline.kg/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Подключить местную связь можно в специализированных офисах продаж при предъявлении паспорта. Звонок в Казахстан обойдется от 1,9 KGS за минуту, в пределах страны дешевле.</p>
                <p>Что касается интернета, то в столице и крупных городах существуют платные и бесплатные wi-fi точки (в отелях, ресторанах и кафе). Также работают интернет-кафе.</p>
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
                              <div>Пожарная служба</div>
                              <span>101</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                              <div>Полиция</div>
                              <span>102</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                              <div>Скорая помощь</div>
                              <span>103</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Аварийная газовая служба</div>
                                <span>104</span>
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