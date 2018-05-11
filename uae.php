<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">ОАЭ</h1>
                <div class="lead">
                    <b>Столица</b>: Абу-Даби<br>
                    <b>Официальный язык</b>: арабский<br>
                    <b>Религия</b>: ислам<br>
                    <b>Валюта</b>: AED - дирхам (1 дирхам = 100 филсов)<br>
                    <b>Территория</b>: 83 600 км²<br>
                    <b>Население</b>: 9.3 млн человек<br>
                    <b>Часовой пояс</b>: GMT+4. Разница с Астаной -2 часа
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Dubai. United Arab Emirates Timelapse/Hyperlapse" src="https://i.vimeocdn.com/video/536951919_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/113259851?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Kirill Neiezhmakov, 2014</figcaption>
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
                <p>Объединенные Арабские Эмираты — государство на северо-восточной части Аравийского полуострова, омываемое водами Персидского залива. Вдоль побережья сконцентрировано большое количество островков, которые также входят в состав ОАЭ.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Государство располагает колоссальным запасом нефти и природного газа, что определяет преобладающую отрасль добывающей промышленности и привлекает зарубежных инвесторов.</p>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ОАЭ. Интересные факты об Эмиратах" src="https://i.ytimg.com/vi/yzuhDcKrBHI/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/yzuhDcKrBHI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ОАЭ. Интересные факты об Эмиратах<br>© CoolTimes 2017</figcaption>
                </figure>

                <hr>

                <p>Крупнейший город ОАЭ — Дубай с населением свыше 2,2 млн человек, расположенный в южной части Персидского залива. Он является ключевым деловым и туристическим центром Ближнего Востока и Южной Азии. Это один из самых современных и перспективных мегаполисов мира, с безупречным сервисом, идеальными дорогами, превосходно развитой инфраструктурой, а также высокой степенью безопасности. Именно поэтому Дубай является привлекательным местом для множества туристов со всех стран мира.</p>
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
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>

        <p>Население Объединённых Арабских Эмиратов - примерно 9,3 млн человек. Из них этнические арабы составляют лишь треть, а коренные жители — 11%. Остальные — выходцы из Пакистана, Индии, Бангладеш, Шри-Ланки, Непала и прочих стран Южной Азии и Филиппин, иммигрировавших в ОАЭ в качестве временных рабочих. 85% проживающих в стране не являются гражданами ОАЭ.</p>
        <p>Соотношение мужчин и женщин - примерно 3/1 (на 27 мужчин приходится 10 женщин).</p>
        <p>Продолжительность жизни высокая. У женщин она составляет 80 лет, у мужчин – 77 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Культура и традиции</h2>
                <p>Уклад жизни и почитаемые национальные традиции местных жителей, сложившиеся веками, всецело обусловлены вероисповеданием и законами Шариата, которые действуют в стране.</p>
                <p>Гостю эмиратов необходимо соблюдать некоторые правила поведения, нужно также знать календарь постов, самым главными из которых является священный месяц Рамадан. В это время верующие воздерживаются от неумеренности в поведении, соблюдая пост  — от восхода и до заката солнца не рекомендуется есть, пить, курить в общественных местах, также отменяются развлекательные мероприятия. В Рамадан мусульмане совершают молитвы 5 раз в день.</p>
                <p>В культуре государства традиционно трепетное и уважительное отношение к женщинам, детям и пожилым людям.</p>
                <p>Мужчины чаще всего носят национальную одежду — длинное белое платье «кандура». Женские же наряды, а это обязательно платье с длинным рукавом и накидка, более разнообразны — они часто расшиваются драгоценными камнями, золотом и серебром. Голову мусульманки прикрывают легким черным платком «шеллой».</p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый Год;</li>
                            <li>«Ид аль-Адха» или праздник жертвоприношения — дата может меняться согласно мусульманскому календарю;</li>
                            <li>Мусульманский Новый Год —  дата может меняться согласно мусульманскому календарю;</li>
                            <li>Поминальный день — дата может меняться согласно мусульманскому календарю;</li>
                            <li>День рождения пророка Мохаммеда — дата может меняться согласно мусульманскому календарю;</li>
                            <li>6 августа — Годовщина начала правления основателя ОАЭ шейха Заида Бен Султана Аль-Нахайяна;</li>
                            <li>Вознесение пророка Мохаммеда — меняется по мусульманскому календарю;</li>
                            <li>2 декабря — Национальный день ОАЭ;</li>
                            <li>«Ид аль-Фитр» или праздник прекращения поста — дата может меняться согласно мусульманскому календарю.</li>
                        </ul>
                    </div>
                </div>
                <p>Выходными в ОАЭ признаны пятница и суббота в государственных учреждениях, в коммерческих — пятница.</p>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2>Климат</h2>
                <p>Субтропический, с жарким влажным летом и теплой зимой. Весной нередки песчаные бури. Средняя температура воздуха с января по март +24 °С, с апреля по июнь от +32 до +37 °С, в июле и августе от +40 до +41 °С, в сентябре и октябре от +35 до +38 °С, в ноябре и декабре от +26 до +30 °С. Ежегодно выпадает около 100 мм осадков. Количество дождливых дней в году как правило не превышает 10.</p>
            </div>
            <div class="col-lg-6 offset-lg-1">
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
                <p>Между Казахстаном и ОАЭ подписано соглашение, в соответствии с которым с 10 марта 2018 года граждане РК имеют право на безвизовые въезды и выезды с территории государства ОАЭ и могут находиться там на срок до 30 дней с даты въезда через пропускной пункт.</p>
                <p>Интерактивная карта аэропорта Дубаи - <a href="http://www.dubaiairports.ae/while-youre-here/map" target="_blank" rel="nofollow">смотреть</a></p>
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
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Абу-Даби - Астана</div>
                                <span>2 раза/нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дубаи  - Астана</div>
                                <span>4 раза/нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дубаи - Алмата</div>
                                <span>7 раза/нед</span>
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

        <p><i class="icon icon-link"></i> Сайт таможенной службы ОАЭ - <a href="http://www.dubaicustoms.gov.ae/" target="_blank" rel="nofollow">dubaicustoms.gov.ae</a></p>

        <h5>Парфюмерия, табак</h5>
        <p>Существуют таможенные правила, в соответствии с которыми в ОАЭ допустим ввоз парфюмерии, сигарет (до 2000 шт) или сигар (до 200 шт) или 2 кг табака - всё это из расчета на одного совершеннолетнего человека.</p>

        <h5>Алкоголь</h5>
        <p>Немусульманин также может провезти до двух литров крепких спиртных напитков и до двух литров вина.</p>

        <h5>Печатная продукция</h5>
        <p>Печатная и видео продукция может быть проверена по вопросу цензуры  и соответствию моральным нормам — запрещены все материалы, содержащие эротику и порнографию, насилие, факты, противоречащие религиозным законам и оскорбляющие чувства верующих, разжигающие политические и национальные конфликты.</p>

        <h5>Оружие, наркотики</h5>
        <p>К ввозу строго запрещены все виды наркотиков, за это местным законодательством предусмотрено суровое наказание вплоть до смертной казни.</p>

        <h5>Прочее</h5>
        <p>Также в ОАЭ запрещен ввоз слоновой кости и изделий из нее, ловчих птиц, беспилотных летательных аппаратов.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Первостепенный вид транспорта — автомобильный, основная часть местного населения перемещается на личных автомобилях и такси.  Также развито автобусное сообщение, насчитывающее 11 маршрутов, связывающих Дубай со всеми частями страны: Шарджей, Аджманом, Умм-эль-Кайвайном, Рас-эль-Хаймой, Фуджайрой и Абу-Даби.</p>
                <p>В стране расположены крупнейшие международные аэропорты и порты.</p>
                <p>В Дубае с сентября 2009 года функционирует линия метро, насчитывающая 26 станций. Туристы предпочитают передвигаться на такси, которое можно остановить прямо на дороге.</p>
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
                                <div>Метро</div>
                                <span>1,80 - 5,80 дирхамов</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>от 2 дирхамов</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>15 дирхамов</span>
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
            <p>Эмираты славятся идеальным качественным покрытием дорог и грамотно организованным дорожным движением.</p>
            <p>Движение в ОАЭ правостороннее, дорожные знаки узнаваемы, с надписями на английском и арабском языках.</p>
            <p>Наиболее интенсивное движение приходится на выходной день — пятницу.</p>
            <p>В ОАЭ используются в основном две марки бензина (95 и 98).</p>
            <p>Стоимость 1 литра соответственно 1,75 дирхамов ОАЭ (0,48 долл. США) и 1,86 дирхамов ОАЭ (0,5 долл. США).</p>
                <h5>Налог</h5>
                <p>В Дубае существуют платные автомагистрали, на которых установлена автоматизированная дорожная система Salik, рамки которой располагаются в четырех зонах на шоссе Шейха Заеда. За однократный проезд под рамкой Salik компании с клиента взыскивается 5 AED.</p>
                <p>За один проезд в одну сторону по платному участку дубайских шоссе взимается сбор в размере 4 дирхама (1,1 долл. США). Каких-либо других сборов для туристов, берущих автомобиль на прокат, нет.</p>

                <h5>Парковки</h5>
                <p>В эмиратах практически повсеместно парковки платные с установленными на них счетчиками, бесплатно припарковаться можно только по праздничным и выходным дням. Стоимость парковки в час составляет 2 дирхама. При неуплате грозит штраф в размере 150 дирхамов.</p>

                <h5>ДТП</h5>
                <p>В случае дорожно-транспортного происшествия нужно вызвать полицию (телефон 999), которая выдаст справку о ДТП. Этот документ необходим для получения страховки и ремонта транспортного средства.  Если при ДТП автомобиль затрудняет движение другого транспорта, то его нужно убрать.</p>
            </div>
            <div class="col-md-4">

                <div class="card mb-4">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <!--<h6 class="title-decorative">Казахстанское водительское удостоверение</h6>-->
                            <p>Граждане Казахстана имеют право управлять автотранспортом на территории ОАЭ при наличии национального водительского и заранее оформленного международного водительского удостоверения, выданного не ранее 1 года назад. Минимальный возраст для получения права управлять автомобилем - 21 год.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-95</div>
                                <span>1,75 дирхамов/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>1,86 дирхамов/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1,84 дирхамов/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Desert in Dubai" src="https://i.vimeocdn.com/video/617582712_1280x512.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/203311480?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Desert in Dubai<br>© Anton Elchaninov 2017</figcaption>
                </figure>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Страхование авто</h3>
                <p>Страховка автомобиля, как правило, входит в стоимость аренды, при этом необходимо уточнять сумму выплаты при наступлении страхового случая — в разных прокатах разные суммы ставки, поэтому необходимо внимательно ознакомиться с условиями взятия авто в прокат. При заключении договора нужно проверить автомобиль на наличие повреждений и недостатков и отобразить это в документах.</p>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Аренда авто</h3>
                <p>ОАЭ — страна с самой лучшей дорожной инфраструктурой в мире. Именно поэтому многие туристы предпочитают самостоятельное передвижение на взятом в аренду автомобиле. Подавляющая часть машин, предлагаемых в центрах проката, в отличном состоянии, некоторые совсем новые с малым пробегом.</p>
                <p>Стоимость аренды зависит от количества дней проката,  выгоднее брать автомобиль на весь срок пребывания в стране.</p>
                <p>Забронировать транспортное средство можно как заранее на специальных сайтах, предоставляющих услуги по прокату авто, так и непосредственно на месте. В обоих случаях необходимо внимательно ознакомиться с условиями аренды.</p>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Эмираты - государство с высоким уровнем жизни, поэтому какие-либо особенные опасности для здоровья отсутствуют.</p>
        <p>Но необходимо учитывать характер жаркого и влажного климата в летний сезон, особенно людям с сердечно-сосудистыми заболеваниями. В весеннее время случаются песчаные бури, что надо принимать во внимание больным бронхиальной астмой и болезнями глаз.<p>
        <p>Медицина ОАЭ стремительно развивается, в мегаполисах клиники оборудованы с использованием последних технологий, привлечены высококлассные иностранные специалисты.</p>
        <p>Для туристов медобслуживание является платным, ценник на услуги клиник довольно высок. Рекомендовано оформление специальной медстраховки на весь период нахождения в ОАЭ.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Телефонная связь</h5>
                <p>В стране вся телефонная связь платная, выгоднее всего совершать телефонные звонки с автоматов, расположенных на многих улицах городов и в крупных торговых центрах. Карты для них можно приобрести на автозаправках или в магазинах.</p>

                <h5>Мобильная связь</h5>
                <p>Мобильную связь на территории эмиратов предоставляют 2 крупных оператора связи  — «Иттисалят» (ETISALAT) и «Ду» (DU).</p>
                <p>Туристы в ОАЭ, чтобы не переплачивать за связь в роуминге, могут приобрести местную сим-карту (обязательно наличие загранпаспорта). Такая карта обойдется в районе 165 дирхамом, стоимость исходящих звонков уже включена.</p>


                <h5>Интернет</h5>
                <p>В большинстве отелей ОАЭ  предоставляется бесплатный доступ в Интернет.  Многочисленные кафе дают выход в интернет посетителям, сделавшим заказ в заведении.</p>
                <p>В общественный местах, в метрополитене Дубая можно выйти в Интернет на платной основе через Wi-Fi. Для этого необходимо  выбрать сеть оператора Du или Etisalat и оплатить подходящий пакет услуг кредитной картой.</p>
                <p>Если же вы хотите иметь высокоскоростное соединение с Интернетом, рекомендуем приобрести USB-модем. Стоимость 4G-модема компании Du составляет 799 AED (плата в месяц — 55 AED), 4G-модем Etisalat стоит 599 AED.</p>
                <ul>
                    <li>Du - <a href="http://www.du.ae/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Etisalat - <a href="http://www.etisalat.ae/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
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
                                <div>Пожарная служба</div>
                                <span>999</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>999</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>998</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Cправочная служба</div>
                                <span>180, 181</span>
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