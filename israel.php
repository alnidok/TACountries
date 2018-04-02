<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Израиль</h1>
                    <div class="lead">
                        <b>Столица</b>: Иерусалим<br>
                        <b>Официальный язык</b>: иврит, арабский<br>
                        <b>Валюта</b>: NIS - новый израильский шекель<br>
                        <b>Территория</b>: 20 700 км²<br>
                        <b>Население</b>: 8.5 млн человек<br>
                        <b>Часовой пояс</b>: GMT+3. Разница с Астаной -3 часа
                    </div>
                </div>
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
                <blockquote class="blockquote">
                  <p class="text-justify">Страну мою на карте обнаружив, на внешние размеры не смотри: по пло&shy;щади ничтожная снаружи, она зато огромна изнутри.</p>
                  <footer class="blockquote-footer text-right">И. Губерман</footer>
                </blockquote>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Климат cубтропический, средиземноморскогo типа, относительно влажный на севере, полупустынный и пустынный на юге.</p>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Израиль. Интересные факты об Израиле" src="https://i.ytimg.com/vi/rwr0OqizH_o/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/rwr0OqizH_o?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Израиль. Интересные факты об Израиле<br>© CoolTimes 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#culture">Культура и традиции</a></li>
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

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Гражданам Республики Казахстан рекомендуется:</h5>
                <ul>
                    <li>в субботу и в период местных религиозных праздников не проезжать на автомобилях через религиозные кварталы (особенно в Иерусалиме);</li>
                    <li>в субботу воздерживаться от курения и разговоров по мобильному телефону при нахождении в религиозных кварталах;</li>
                    <li>во время посещения церквей и религиозных святынь иудаизма и ислама надевать одежду, закрывающую ноги, руки до кистей, женщинам надевать платки на голову, избегать провоцирующих нарядов, с уважением относиться к чувствам верующих;</li>
                    <li>выполнять требования израильских правоохранительных органов и представителей служб безопасности как в аэропорту, так и в общественных местах;</li>
                    <li>иметь при себе документы, удостоверяющие личность.</li>
                </ul>

                <h5>Посещение различных районов страны</h5>
                <p>Посещение Западного берега реки Иордан осуществляется исключительно в составе организованных туристических групп и возможно только при наличии заграничного паспорта.</p>
                <p>Иногда въезд на палестинские территории запрещается израильскими властями.</p>
                <p>Въезд на территорию сектора Газа возможен только при получении специального разрешения Министерства обороны Израиля и местных спецслужб.</p>

                <h5>Виды наказаний</h5>
                <p>Присвоение найденного имущества считается кражей. Найденное в общественном месте имущество необходимо сдать в администрацию данного заведения.</p>
                <p>Ношение или хранение холодного оружия, длина лезвия которого превышает 10 см, чревато тюремным заключением на срок до 5 лет.</p>
                <p>Домогательства на сексуальной почве влекут за собой наказание в виде лишения свободы на длительные сроки.</p>
                <p>Жестокое обращение с детьми может включать в себя и родительские подзатыльники, и наказывается тюремным заключением на срок до 6 лет.</p>

                <h5>Задержание правоохранительными органами</h5>
                <p>Необходимо связаться с консульским отделом Посольства РК по телефону (+972) 3 516-34-11.</p>

                <h5>Приобретение собственности иностранцами</h5>
                <p>Иностранные граждане не имеют права приобретать в собственность земельные участки на территории Израиля.</p>
                <p>При приобретении иного недвижимого имущества в Израиле на территориях, которые в соответствии с международным правом считаются оккупированными (Западный берег реки Иордан, Голаны, Восточный Иерусалим), потенциальным покупателям необходимо учитывать, что возможное достижение мирного соглашения между Израилем и Палестиной, а также между Израилем и Сирией может иметь последствия необратимого характера для владельцев собственности.</p>

            </div>

            <div class="col-12 col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="float-right icon-light-bulb"></i>
                        <span class="h6"><b>Электричество</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Номинальное напряжение израильской электросети — 230 В, 50 Гц.</p>
                        </li>
                    </ul>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="float-right icon-shield"></i>
                        <span class="h6"><b>Безопасность</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Рекомендуем проявлять повышенную бдительность при нахождении в Старом городе Иерусалима и воздерживаться от посещения мероприятий, связанных с массовыми скоплениями людей. Также следует воздерживаться от посещения городов, находящихся в непосредственной близости от сектора Газа (Сдерот, Нетивот, Офаким, и д.р.)</p>
                            <p>Не рекомендуется оставлять ценные вещи в гостинице или в арендованной квартире, в салоне автомобиля. В ночное время следует избегать неосвещенных и безлюдных мест, не стоит завязывать случайные знакомства.</p>
                            <p>В общественных местах надлежит следить за своими вещами, не рекомендуется брать с собой ценности на пляж.</p>
                        </li>
                    </ul>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="float-right icon-users"></i>
                        <span class="h6"><b>Семейное законодательство</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Все вопросы личного статуса граждан (евреев) решаются судами раввинов, действующими на основе талмудического права. Гражданского брака в Израиле не существует.</p>
                        </li>
                    </ul>
                </div>
        </div>

        <div class="col">
            <h5 class="mt-4">Праздники и памятные даты</h5>

            <div class="card bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Нерабочие дни:</h6>
                    <ul>
                        <li>Выходной день — суббота</li>
                        <li>Пятница — сокращенный рабочий день</li>
                    </ul>
                </div>
            </div>
            <div class="card bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Праздники:</h6>
                    <ul>
                        <li>Национальный праздник Израиля – День Независимости празднуется по еврейскому календарю и приходится на апрель-май по григорианскому календарю, является единственным нерелигиозным праздником. Остальные праздники имеют связь с историко-религиозными событиями, согласно священным писаниям Торы (Ветхого Завета) и др.</li>
                        <li>Нерабочими считаются дни религиозных праздников:
                            <ul>
                                <li>Песах</li>
                                <li>Шавуот</li>
                                <li>Рош ха-Шана</li>
                                <li>Суккот</li>
                                <li>пост Йом-Кипур</li>
                            </ul>
                        Указанные дни не имеют фиксированных дат по григорианскому календарю, так как еврейский календарь является лунно-солнечным и ежегодно смещается относительно григорианского.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <p>Для въезда в Государство Израиль гражданам Республики Казахстан необходима виза. Установленный Посольством Израиля в РК срок выдачи визы - 14 дней с момента подачи всех документов.</p>
        <p>С требованиями можно ознакомиться на <i class="icon icon-link"></i> <a href="http://embassies.gov.il/astana/ConsularServices/Pages/General-Information.aspx" target="_blank" rel="nofollow">сайте Посольства Израиля в Астане</a></p>
        <p>Срок действия паспорта должен быть не менее 6 месяцев после получения визы, с пустыми страницами для вклеивания визы и иметь срок действия не более 10 лет.</p>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">

                <h5>Спиртное и сигареты</h5>
                <p>Спиртное и сигареты. Не подлежат декларированию: крепкие алкогольные напитки — до 1 л, вино — до 2 л на каждого въезжающего старше 17 лет; табачные изделия — до 250 сигарет или 250 г иных табачных изделий на каждого въезжающего старше 17 лет.</p>

                <h5>Косметические средства</h5>
                <p>Не подлежит декларированию косметика на алкогольной основе — до 0,25 л на каждого въезжающего.</p>

                <h5>Прочее</h5>
                <p>Не подлежат декларированию одежда, обувь, гигиенические средства, предназначенные для личного пользования, и иные товары для личного использования или для подарка. При этом их стоимость не должна превышать 200 долл. США на каждого въезжающего старше 2 лет.</p>

                <h5><i class="oi oi-warning"></i> Запрещен ввоз/вывоз следующего</h5>
                <ul class="mb-12">
                    <li>поддельные документы</li>
                    <li>деньги, монеты</li>
                    <li>аппараты и разное оборудование для организации игорного бизнеса и азартных игр</li>
                    <li>наркотики</li>
                    <li>порнографические материалы</li>
                    <li>беспроводные телефонные аппараты, работающие в диапазоне 900 Мгц</li>
                </ul>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Видеоблог: Аэропорт Бен Гурион: экскурсия и факты" src="https://i.ytimg.com/vi/eC2-FHA4GV4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/eC2-FHA4GV4&t=12s?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Видеоблог: Аэропорт Бен Гурион: экскурсия и факты</figcaption>
                </figure>
            </div>

            <div class="col-12 col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="float-right icon-info"></i>
                        <span class="h6"><b>Санитарный контроль</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Продукты питания ввозить в Израиль не рекомендуется. В случае ввоза обязательно наличие фабричной или иной герметичной упаковки.</p>
                            <p>Для ввоза/вывоза свежего мяса необходимо специальное разрешение.</p>
                        </li>
                    </ul>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="float-right  icon-info"></i>
                        <span class="h6"><b>Фитосанитарный контроль</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Ввоз/вывоз растений и растительных продуктов, в том числе с некоммерческими целями, возможен только после получения специального разрешения Службы охраны растений при Министерстве сельского хозяйства Израиля.</p>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right  icon-info"></i>
                        <span class="h6"><b>Ветеринарный контроль</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Ввоз домашних животных разрешён при наличии следующих документов:</p>
                            <ul>
                                <li>ветеринарной справки международного образца;</li>
                                <li>документа, подтверждающего факт «электронного чипирования» питомца;</li>
                                <li>паспорта о вакцинации установленного образца.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <p>Транспорт в Израиле не работает в Шаббат (с вечера пятницы до вечера субботы).</p>
        <p>Исключение составляют внутренние рейсы в Эйлате и Хайфе, а также такси, которые работают всегда.</p>
        <p>Автобусные линии связывают практически все населённые пункты. Автобусы на данный момент являются основным видом общественного транспорта.</p>
        <p>Общая протяжённость железных дорог составляет 853 км.</p>
        <p>Протяжённость автомобильных дорог — 17 686 км (все с твёрдым покрытием), из них 146 км — скоростные автострады.</p>
    </div>
</section>

<section id="auto">
    <div class="container">
        <h2>Автомобиль</h2>

        <div class="card mb-4">
            <div class="bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Казахстанское водительское удостоверение</h6>
                    <p>Иностранное водительское удостоверение международного образца может быть использовано туристами для управления транспортными средствами на территории Израиля в течение одного года с даты прибытия в Израиль.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Автомобильные дороги в Израиле высокого качества, с хорошо читаемыми указателями (на иврите, арабском и английском языках) и дорожными знаками.</p>
                <p>Разрешенная скорость движения в населенных пунктах — 60 км/ч, на междугородных автострадах — 100 км/ч, на шоссе № 6 — 110 км/ч.</p>
                <p>Превышение скорости более чем на 10 % считается серьезным нарушением. С 1 ноября до 31 марта при движении на междугородных трассах необходимо включать ближний свет фар вне зависимости от времени суток.</p>
                <p>Неподчинение указаниям, и тем более проезд блокпоста без остановки, может иметь самые серьезные последствия, вплоть до применения оружия.</p>
                <p>Категорически не рекомендуется отказываться от прохождения теста на алкоголь, если на этом настаивают представители израильской дорожной полиции.</p>

                <h5>Страхование авто</h5>
                <p>В Израиле действует требование обязательного страхования автотранспортных средств и их пассажиров.</p>
                <p>В соответствии с местным законодательством каждый владелец автомобиля в Израиле обязан оформить страховой полис, покрывающий все виды физического ущерба, понесённого в результате ДТП.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="float-right icon-info"></i>
                        <span class="h6"><b>Дорожный налог</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Проезд по всем автотрассам Израиля бесплатный (за исключением Трансизраильского скоростного шоссе № 6).</p>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-info"></i>
                        <span class="h6"><b>Аренда авто</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Возрастные ограничения для аренды автомобиля: минимальный возраст водителя — 21 год, максимальный — 75 лет.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Опасность для путешественников могут представлять сезонные вирусы гриппа.</p>
        <p>Находясь на природе, следует остерегаться укусов ядовитых змей и нападений диких животных.</p>
        <p>Следует остерегаться песчаных и пыльных бурь.</p>

        <h5>Медицинское обслуживание</h5>
        <p>Уровень развития здравоохранения в Израиле весьма высок. Медицинское обслуживание для иностранцев является платным.</p>

        <h5>Срочная медицинская помощь</h5>
        <p>Телефон неотложной медицинской помощи — 101.</p>

        <h5>Медицинское страхование</h5>
        <p>Рекомендуется оформить страховой полис заранее и иметь его при пересечении границы. Тем не менее, можно оформить дополнительную страховку на месте.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Код Израиля — 972</p>

                <h5>Коды городов Израиля:</h5>
                <ul>
                    <li class="mb-1">Иерусалим — 02,</li>
                    <li class="mb-1">Тель-Авив — 03,</li>
                    <li class="mb-1">Хайфа — 04,</li>
                    <li>Эйлат — 08.</li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Полезные телефоны</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>полиция</div>
                                <span>100</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>скорая помощь</div>
                                <span>101</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>пожарная служба</div>
                                <span>102</span>
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
