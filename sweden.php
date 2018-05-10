<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Швеция</h1>
                    <div class="lead">
                        <b>Столица</b>: Стокгольм<br>
                        <b>Официальный язык</b>: шведский<br>
                        <b>Валюта</b>: SEK - шведская крона (100 ере)<br>
                        <b>Территория</b>: 447 435 км²<br>
                        <b>Население</b>: 10 млн. человек<br>
                        <b>Часовой пояс</b>: GMT+1. Разница с Астаной -5 часов. Есть переход на летнее и зимнее время.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="This is Sweden" src="https://i.ytimg.com/vi/vfQU6pI51ww/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/vfQU6pI51ww?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Sweden, 2016</figcaption>
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
                <p>Швеция - страна на севере Европы, расположенная на Скандинавском полуострове между Норвегией и Финляндией. На юго-западе имеет морскую границу с Данией. Чтобы попасть из Мальмё в Копенгаген достаточно просто пересечь мост. Омывается водами Балтийского моря и Ботнического залива, включает в себя большое количество островов, в том числе два больших - Готланд и Эланд. Рельеф страны крайне разнообразный - от низменностей на юге до Скандинавских гор на западе вдоль границы с Норвегией. Самые крупные города - Стокгольм, Гётеборг, Мальмё, Уппсала.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Швеция богата туристическими достопримечательностями, как природными, так и культурными. На север страны в Лапландию желающих поехать практически нет, а вот красоты южных широт со Стокгольмом, расположившемся на 14 островах, милым и уютным Мальмё, из которого рукой подать до датского Копенгагена или строгим Гётеборгом популярны среди туристов со всего света.</p>
                <p>Главной жемчужиной страны по праву считается Стокгольм - столица Шведского королевства, город островов, музеев, уютных улочек, родина Карлсона и Пеппи Длинныйчулок. Город сказок и королевского величия. Здесь обязательно стоит прожить хотя бы неделю, чтобы впитать его атмосферу, зайти во все кофейни и проникнуться светлым и удобным шведским дизайном.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Швеция. Интересные факты о Швеции" src="https://i.ytimg.com/vi/dyrUjN8HelQ/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/dyrUjN8HelQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Швеция. Интересные факты о Швеции<br>© CoolTimes 2017</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Стокгольм.  Швеция" src="https://i.ytimg.com/vi/qH9nyqr__SM/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/qH9nyqr__SM?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Стокгольм.  Швеция<br>© Alyatanya 2015</figcaption>
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
        <p>Население Швеции неоднородно, оно делится на 2 большие группы - местные жители и иммигранты. Причем к местным жителем относятся не только шведы, но и исконные народы Скандинавии - финны и саамы. Иммигрантская группа появилась в стране в последние десятилетия и неуклонно растет. В ней представлены выходцы из развивающихся стран Европы, Азии, Африки и Ближнего Востока.</p>
        <p>Подавляющее большинство жителей Швеции относятся к лютеранской церкви, есть также другие протестанты, католики, православные. Коренные саамы до сих пор придерживаются собственных верований, а иммигрантская группа в основном исповедует ислам. </p>
        <p>Продолжительность жизни в Швеции составляет 83 года и считается одной из самых высоких в Европе. Мужчины здесь в среднем живут 78.8 лет, а женщины доживают до 85 лет.</p>
        <?= $this->render('_population') ?>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Швеции богата и разнообразна. Здесь удивительная, совершенно особая литература (как детская, так и взрослая), кино и картины, а шведская архитектура покорила сердца многих туристов. Знакомиться с культурой лучше всего в столице, здесь сосредоточено большинство музеев, королевский дворец, Вадстенское аббатство, Гамла-стан. Герои Астрид Линдгрен ждут детей в музее Юнибаккен, а в музее Васса можно увидеть настоящий корабль с интересной, но немного печальной историей.</p>

                <h5>Праздники</h5>
                <p>Шведское королевство богато на праздники и развлечения. Кроме официальных выходных, в основном относящихся к религиозным  торжествам, здесь проходят различные тематические фестивали и народные гуляния. Очень широко и ярко отмечают в стране день середины лета, кроме него интересен фестиваль лосося, джазовый фестиваль и фестиваль детских фильмов. Праздником, объединяющим всю нацию, считается 6 июня - национальный день, когда шведы активно примеряют национальные костюмы, вспоминают свою музыку и песни. Кроме этого есть еще парусные регаты, праздник стран Балтии и всеми любимое Рождество, когда города страны превращаются в сказку.</p>

                <h5>Кухня</h5>
                <p>Кухня Швеции - это копченая и соленая рыба, различные паштеты, густые супы. Героем на шведском столе всегда будет лосось, приготовленный всеми возможными способами. Выбор блюд и ингредиентов огромен: от привычной картошки до деликатесного мяса оленя или лося. В Швеции предпочитают использовать как можно меньше специй, подчеркивая естественный вкус блюда. Исключением являются знаменитые рождественские печенья с имбирем, корицей, кардамоном и гвоздикой. Шведские национальные напитки - это согревающий глёг и слабоалкогольный фруктовый пунш, подающийся в графинах.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>6 январь -  Богоявление</li>
                            <li>март-апрель- Страстная пятница</li>
                            <li>март-апрель — Пасха</li>
                            <li>март-апрель — понедельник после Пасхи</li>
                            <li>1 мая — день трудящихся </li>
                            <li>май-июнь - Вознесение</li>
                            <li>июнь — Пятидесятница</li>
                            <li>6 июня — национальный день Швеции</li>
                            <li>22-26 июня — День середины лета</li>
                            <li>1 Ноября — День Всех Святых</li>
                            <li>25 и 26 декабря — Рождество</li>
                        </ul>
                    </div>

                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Поедем, поедим! - Швеция" src="https://i.ytimg.com/vi/VbS4SxWSH7U/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/VbS4SxWSH7U?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Поедем, поедим! - Швеция<br>© НТВ 2016</figcaption>
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
                <p>Климат Швеции заметно меняется с продвижением с севера на юг. В Лапландии значительно холоднее и снег лежит дольше, но сильных морозов не бывает даже там. В южных регионах климат значительно мягче, на него влияет Гольфстрим, приносящий сюда тепло, поэтому несмотря на северное положение, в столице Швеции температура почти никогда не опускается ниже нуля.</p>
                <p>В среднем температуры зимой колеблются от 0 на юге до -22 градусов на севере. Снега много, но в марте он уже сходит, а в апреле начинается настоящая весна. Лето комфортное с температурой +22 градуса, но по-северному короткое - с июня до середины августа. Сложнее всего здесь холодной и дождливой осенью, в период серости и промозглых ветров.</p>
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
                <p>Швеция входит в Евросоюз и в Шенгенскую зону, поэтому для ее посещения гражданам Казахстана потребуется  <strong>шенгенская виза</strong>. Чтобы ее оформить - нужно обратиться в посольство Швеции в Астане.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Шенгенскую визу выдает страна, где вы планируете пробыть максимальное количество дней. Если будете путешествовать по региону, то подавайте документы в шведское посольство, только если на эту страну приходится основное время вашего путешествия.</p>
                    </div>
                </div>
                <p>Для получения визы потребуется стандартный пакет документов, посмотреть его можно на сайте посольства. Основными требованиями являются наличие билетов туда и обратно, туристического ваучера или брони отеля, медицинской страховки и денег на счету.</p>

                <h5>Авиасообщение</h5>
                <p>Главный аэропорт Швеции расположен в 42 км от Стокгольма и принимает рейсы из Москвы, Минска и всей Европы. Прямых перелетов из Астаны нет, но можно лететь с одной стыковкой в России или Европе. Кроме Стокгольма международные аэропорты есть в Мальмё и Гётеборге.</p>
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
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+самал+микрорайон,+12&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Швеции</h5>
                        <p>Астана, Самал микрорайон, 12</p>
                        <p><i class="icon-phone"></i> +7 (7172) 59‒18‒05</p>
                        <p><i class="icon-link"></i> <a href="https://www.swedenabroad.se/en/" target="_blank" rel="nofollow">swedenabroad.com</a></p>
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
                                <div>Стокгольм - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Стокгольм - Алматы</div>
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
        <p>По европейскому таможенному законодательству в Швецию можно ввезти любое количество наличных, но суммы свыше 10000 евро должны быть задекларированы. Швеция не вошла в зону евро и продолжает использовать шведские кроны. Ограничения на вывоз национальной валюты она не установила.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Для провоза алкоголя необходимо быть старше 20 лет. На одного человека можно взять с собой 1 л крепкого алкоголя выше 15 градусов или 2 литра вина, пива или других слабоалкогольных напитков. Сигареты ограничены 200 шт или 250 г табака или 50 сигар. </p>

        <h5>Личные вещи</h5>
        <p>Ввоз личных вещей не должен превышать сумму в 1700 SEK. Отдельно установлены ограничения на провоз туалетной воды в 250 мл или духов в 50 мл, а также можно взять с собой не больше 100 г чая и 500 г кофе. Полностью запрещено ввозить крепкий алкоголь выше 60 градусов, шоколад, мясомолочную продукцию, кроме детского питания или диетических продуктов для больных людей. Также под запретом оказался картофель, привезенный не из европейских стран, и лекарства, содержащие наркотические препараты.</p>

        <h5>Tax Free</h5>
        <p>В Швеции система Tax Free распространена, с ее помощью можно сэкономить 19% от стоимости покупки свыше 200 SEK. Оформляется в большом количестве магазинов, где вам кроме товара должны выдать Global Refund Cheque. Его надо предъявить вместе с упакованным товаром на границе и получить штамп в чек, после чего предъявить его для получения денег в офисе по возврату Tax Free, расположенном в аэропорту или на наземной границе.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Между всеми крупными городами Швеции летают самолеты, что значительно экономит время путешественникам. До Гётеборга или Мальмё из столицы можно добраться за час полета и за 550 крон с помощью Скандинавских авиалиний или Норвегиан Айр. Наземный междугородний транспорт представлен автобусами или железной дорогой. Путешествия по железной дороге удобны в центре и на юге страны. При покупке билетов на <a href="https://www.sj.se/en" target="_blank" rel="nofollow">официальном сайте</a> за 3 месяца до поездки можно сэкономить более 50% от стоимости билета. Автобусы ходят по всей стране, связывая между собой более полутора тысяч городов. В северных регионах они не имеют альтернативы. Посмотреть расписание и купить билет можно на <a href="https://www.swebus.se/SwebusExpresscom/" target="_blank" rel="nofollow">сайте перевозчика SweBus</a>. Добраться на комфортабельном автобусе из Стокгольма до Мальмё будет стоить 500 крон.</p>

                <h5>Городской транспорт</h5>
                <p>Общественный транспорт в шведских городах отлично развит, все районы соединены автобусами, трамваями и электричками, а в Стокгольме еще и метро, которое по праву считается самым красивым в мире. Одна поездка в столице стоит 36 крон, независимо от вида транспорта. </p>

                <h5>Такси</h5>
                <p>Такси в Швеции принадлежат частным компаниям, поэтому вид машин и тарифы разнятся. Ориентироваться можно на цену в 8-10 крон за 1 км и добавить за посадку придется 20-25 крон. Средняя цена поездки по городу 300 крон, а до аэропорта можно доехать за 600-700 крон.</p>

                <h5>Паром</h5>
                <p>Паромы в Швеции - удобное и популярное средство передвижения, а также прибытия в страну туристов. Большое количество паромов курсирует по Балтийскому морю с заходом в порт Стокгольма или Мальмё. Внутри страны также распространен водный транспорт, он поможет попасть на 2 самых крупных острова страны и более 100 мелких. Из Стокгольма путешествие на быстроходном пароме будет стоить 100-150 крон.</p>
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
                                <span>36 SEK</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>
                                    8-10 SEK / км<br>
                                    плюс 20-25 SEK за посадку
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ШВЕЦИЯ: SALTSJÖBANAN - Стокгольмский общественный транспорт... STOCKHOLM SWEDEN" src="https://i.ytimg.com/vi/hMbyxuKMMco/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/hMbyxuKMMco?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Стокгольмский общественный транспорт<br>© ANZOR TV 2012</figcaption>
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
                <p>Путешествовать по Швеции на автомобиле легко и безопасно. За соблюдением правил строго следит дорожная полиция, постоянно устраивая проверки на дорогах городов и на основных трассах. Наиболее строго карается превышение скорости и езда в состоянии опьянения. Чтобы не платить штраф, необходимо всегда пристегиваться, не пользоваться мобильным за рулем и включать фары ближнего света даже днем. Дороги здесь идеальны и в городах и вне их, но надо следить за скоростью: на трассе можно разогнаться до 110 км/ч, на обычных дорогах вне городов до 70 км/ч, в черте города только до 50 км/ч, а во многих местах скорость ограничена 30 км/ч. Стокгольм со своими узкими улочками не прост для вождения, а правильно припарковаться и не получить штраф здесь практически невозможно, поэтому для столицы лучше выбрать другие способы передвижения.</p>

                <h5>Аренда авто</h5>
                <p>Арендовать машину можно в любой компании в аэропорту и во всех крупных городах. Для этого потребуются только международные права, возраст водителя старше 18 лет. Ограничение по опыту есть только для некоторых типов автомобилей, там нужно быть старше 24 лет и водить машину не менее 3 лет. Залог блокируется на банковской карте. Машину можно забронировать через интернет до поездки, тогда она будет ждать вас в аэропорту.</p>
            </div>
            <div class="col-md-4">
                <div id="block-fuel"></div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Швеция. Идеальные дороги, бесконечные леса, чистейший воздух" src="https://i.ytimg.com/vi/J4XgmDEamfo/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/J4XgmDEamfo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Швеция. Идеальные дороги, бесконечные леса, чистейший воздух<br>© Безумный Макс 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Швеции</h2>
        <p>Шведская медицина - предмет гордости страны. Она отличается не только высоким уровнем, но и доступностью всем слоям населения. Правда туристам, чтобы не разориться в медицинском центре, необходимо купить медицинскую страховку еще до путешествия. Обратиться за экстренной медицинской помощью можно в любую клинику, как частную, так и государственную. Некоторые туристы приезжают в Швецию специально за лечением. Здесь удачно борются c такими сложными болезнями, как рак, инсульт, сердечная недостаточность и т.п., даруя многим людям шанс навсегда побороть недуг.</p>

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
                    <li>Telenor - <a href=" http://www.telenor.se" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Telia - <a href="https://www.telia.se/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Vectone Mobile - <a href=" http://www.vectonemobile.se/en" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Местные предоплатные сим-карты распространены повсеместно, их можно купить в любом супермаркете, газетном киоске или на заправке. Паспорта и специальной активации не требуется, пользоваться ими очень просто. Тарифы на звонок в страны СНГ: самый дешевый обойдется в 2.6 крон, а смс в 0.45 крон. Гораздо выгоднее подключить пакеты мобильного интернета и пользоваться им для звонков и других повседневных нужд.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Швеции - привычное явление, подключиться к сети можно во всех отелях, в кафе и ресторанах городов, есть точки доступа и в популярных торговых центрах. При необходимости можно воспользоваться интернет-кафе с часом подключения от 30 крон.</p>
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
                                <div>Дорожная полиция</div>
                                <span>11414</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый телефон экстренных служб</div>
                                <span>112</span>
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