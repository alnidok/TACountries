<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Сейшелы</h1>
                <div class="lead">
                    <b>Столица</b>: Виктория<br>
                    <b>Официальный язык</b>: французский, сейшельский и английский<br>
                    <b>Валюта</b>: SCR - сейшельская рупия (100 центов)<br>
                    <b>Территория</b>: 455 км²<br>
                    <b>Население</b>: 90 тыс. человек<br>
                    <b>Часовой пояс</b>: от GMT +4. Разница с Астаной -2 часа.
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Seychelles, Heaven on earth" src="https://i.vimeocdn.com/video/486699420_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/104223190?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© neen0brown, 2014</figcaption>
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
                <p>Сейшелы - это 115 островов в Индийском океане, в 1600 км от Африканского континента. Они расположены на уровне экватора, севернее острова Мадагаскар. Вся группа делится на скалистые и коралловые острова. Коралловые возвышаются над уровнем моря всего на несколько метров, подходят для снорклинга и дайвинга, но не очень приспособлены для жизни. Из всех культурных растений, на них растет только кокосовая пальма. Скалистые располагаются выше, практически все обитаемы, подходят для ведения сельского хозяйства.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>О Сейшелах часто говорят как о рае на земле. Во всем мире эти острова называют Wedding destination. Здесь нет бурной жизни, нет цивилизации, пробок и гипермаркетов, зато есть единение с природой, километры белого песка, коралловые рифы и их обитатели. Сюда едут за тишиной и высочайшим сервисом, который предоставляют местные отели.</p>
                <p>Прилетев в Викторию, столицу страны, не стоит сразу уезжать на курорт. Городу можно посвятить 1-2 дня, познакомиться с колониальной архитектурой, зайти на местный рынок и в церковь. Только в столице страны реально почувствовать жизнь местного населения. После знакомства со столицей туристы разъезжаются по своим виллам. Здесь одни из самых дорогих апартаментов для отдыха во всем мире и одни из качественных. Практически все отели обладают статусом 5*.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Настоящие СЕЙШЕЛЫ" src="https://i.ytimg.com/vi/1Yqb7ziijGg/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/1Yqb7ziijGg?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Настоящие СЕЙШЕЛЫ<br>© Andrei Gontsarov 2016</figcaption>
                </figure>

            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Сейшелы" src="https://i.ytimg.com/vi/hAB6uFaFObE/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/hAB6uFaFObE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Сейшелы<br>© Catelin777 2016</figcaption>
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
        <p>Население Сейшел в основном проживает на гранитных или внутренних островах, где расположена столица и главные курорты. Состав многонационален, основная масса - франко-африканцы; есть европейцы, африканцы, индийцы, китайцы и арабы, переселившиеся сюда в колониальный период.</p>
        <p>Основная масса страны - католики, их 82.3%, англикан 6.4%, другие группы христиан 3.1%. Кроме христиан на островах живет 1.1% мусульман, буддистов и последователей индуизма еще 1.5%, к атеистам себя относят 2.2% населения. Официальный английский здесь распространен среди 4.9% населения, основным языком общения в стране является креольский диалект французского языка, кроме него среди национальных групп распространены китайский, арабский и другие языки, их в общей сложности не более 3.3%.</p>
        <p>Несмотря на то, что Сейшелы - рай на земле, живут здесь не долго. Средняя продолжительность жизни составляет 75 лет, при этом женщины живут значительно дольше мужчин - до 78 лет, а мужчины только 68 лет. Уровень грамотности очень высокий, и мужчины и женщины умеют читать, писать и закончили хотя бы одно учебное заведение.</p>
        <div class="row mb-3">
            <div class="col-md-8">
                <div id="chart-population"></div>
            </div>
            <div class="col-md-4">
                <div id="chart-population-ages"></div>
            </div>
        </div>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Сейшельских островов появилась при смешении креольских, французских и африканских традиций. Это яркие праздники, ритмичная музыка барабанов, народный танец моутиа, колоритные национальные костюмы, а также местные ремесла. Сейшельцы создают уютную плетеную мебель, корзины и шляпы, деревянные лодки и уникальные украшения из раковин, которые пользуются неизменным спросом у туристов.</p>
                <p>Местные праздники в основном католические с национальным оттенком. Главные даты в году - Пасха и Рождество, это семейные дни с угощениями и походом в церковь. Национальные даты отмечаются карнавалами, шествиями, танцами под барабаны и местными песнями. Попасть на такой праздник интересно будет каждому туристу.</p>
                <p>Кухня Сейшел креольская, с ярко выраженным французским влиянием. Ее основа - рыба, морепродукты, местные овощи, фрукты, рис, кокосовое молоко и специи. Здесь любят карри не меньше, чем в Индии. Самые вкусные блюда, которые стоит попробовать: суп из ракушек, рыбное карри с рисом, морепродукты, обжаренные на огне, местные сладости на основе кокосов и бананов.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 и 2 января - Новый год</li>
                            <li>март-апрель Страстная пятница</li>
                            <li>март-апрель Пасха</li>
                            <li>1 мая — День солидарности трудящихся</li>
                            <li>5 июня — День Освобождения</li>
                            <li>июнь — Праздник Тела и Крови Христовых </li>
                            <li>29 июня - День Независимости</li>
                            <li>15 августа — Успение Пресвятой Богородицы</li>
                            <li>1 ноября — День всех святых</li>
                            <li>8 декабря — Непорочное зачатие Девы Марии</li>
                            <li>25 декабря — Рождество</li>
                        </ul>
                    </div>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Сейшелы, остров Маэ, городской рынок в городе Виктория" src="https://i.ytimg.com/vi/ajmEFBvVJuI/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/ajmEFBvVJuI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Сейшелы, остров Маэ, городской рынок в городе Виктория<br>© Виталий Южанин 2012</figcaption>
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
                <p>Сейшелы расположены в экваториальном климате. Они предлагают райский отдых в течение всего года. Температура здесь не имеет сезонных колебаний, держится всегда в пределах +26 - +30. Сезон дождей с ноября по март особо отдыхать не мешает, так как дождь идет не более 2 часов в день. В сухой сезон приходят муссоны, становится менее влажно и на 2 градуса прохладнее, чем зимой. Температура воды в океане мало чем отличается от воздушной, круглый год около +28 градусов.</p>
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
                <p>Граждане Казахстана имеют право на <strong>безвизовый въезд</strong> на территорию Сейшельских островов. По прибытию ставится штамп на 30 дней</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Для получения штампа необходимо предъявить действительный еще минимум полгода паспорт и обратный билет.</p>
                    </div>
                </div>
                <p>На границе могут спросить бронь отеля, распечатку из банка с подтверждением денежных средств на счету и свидетельство о рождении детей, путешествующих с одним родителем. Оформление медицинской страховки не является обязательным.</p>

                <h5>Въезд в страну</h5>
                <p>Международный аэропорт на Сейшельских островах расположен недалеко от столицы. Сюда прилетают разные мировые авиакомпании, но прямых рейсов из Астаны нет. Самые удобные стыковки предлагают Катарские авиалинии и Эмираты, прилететь в Викторию можно еще через Сербию или Турцию. Минимальное время в пути с пересадкой - 15 часов.</p>
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
                                <div>Виктория - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Виктория - Алматы</div>
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
        <p>Сейшелы не ограничивают ввоз и вывоз иностранной валюты, местную же можно вывезти в пределах 2000 SCR, пункты обмена есть в аэропорту и в любом крупном городе.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Ограничение на ввоз алкоголя установлено в 2 л для крепких напитков и 2 л вина на человека, можно взять с собой 200 сигарет или 250 г табака. Туалетной воды или духов не более 200 мл.</p>

        <h5>Личные вещи</h5>
        <p>Личные вещи разрешены на сумму до 5000 SCR. Некоторые вещи, пригодные для продажи, фиксируются на таможне. За них необходимо внести депозит, который возвращают на обратном пути. Так местные власти борются с незаконной торговлей. Депозит придется заплатить за фото и видеотехнику, спортивное снаряжение, костюмы и оборудование для дайвинга и т.п. Оружие, наркотики, медикаменты их содержащие, растения и еда к провозу запрещены. На животных оформляется специальный ветеринарный международный документ. При въезде им необходим карантин на 14-180 дней, поэтому в отпуск брать с собой питомцев не стоит.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Сейшелы - это архипелаг из 115 островов, из которых только 33 обитаемы. Основных видов транспорта тут 2: самолет и корабль. Между островами летает местная авиакомпания Эйр Сейшелы, которая довезет с Маэ до Праслина за 645 рупий и 20 мин. Также есть вертолетная компания Зил Эйр, она не только перевозит туристов, но и предлагает воздушные экскурсии. Добраться с их помощью с Маэ на Ла Диг можно 2800 рупий, а посмотреть на Сейшелы с высоты птичьего полета обойдется от 7500 до 38000 рупий. Корабли ходят между всеми островами, билет удобнее всего покупать прямо у капитана перед отплытием. Средняя цена проезда 80 рупий.</p>

                <h5>Городской транспорт</h5>
                <p>Городской транспорт распространен только на Виктории и Праслине, здесь ходят комфортные автобусы с 6 утра и до 8 вечера, на Праслине до 6 вечера. Интервал движения зависит от маршрута, и бывает от 15 мин и до часа. Стоимость проезда 5 рупий за весь день. Доехать из аэропорта до столицы можно на минибусе за 3 рупии. </p>

                <h5>Такси</h5>
                <p>Такси на Маэ и Праслине ходят по всему острову, отличаются новыми комфортными машинами и вежливыми водителями. Посадка стоит 15 рупий, тарификация начинается со 2-го км по 5-6 рупий. Багаж оплачивается отдельно по 5 рупий за 1 чемодан.</p>

                <h5>Велосипед</h5>
                <p>Большинство островов предлагают исключительно экологичный транспорт: на них нет дорог, а перемещаться можно на велосипедах, лошадях и воловьих упряжках.</p>

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
                                <span>5 SCR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Паром</div>
                                <span>80 SCR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>15 SCR за посадку и 5 SCR за км</span>
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
                <p>Из-за особенностей географии путешествовать на автомобиле здесь особо негде. Дороги проложены только на Маэ и Праслине. Движение на них досталось от британцев, поэтому оно левостороннее. Дороги узкие, не редки на холмах серпантины. Правила дорожного движения более или менее соблюдаются, но сильно передвижение по острову это не упрощает. Здесь имеет смысл садиться за руль тем, кто не боится узких дорог с пропастью по краю, которая ничем не огорожена. В основном дороги полуторополосные, со встречными машинами придется разъезжаться, скорость движения максимум 50 км/ч. Трасса единственная, ведет в аэропорт, на ней можно разогнаться до 80 км/ч. Из-за маленького размера, по островам комфортнее путешествовать на велосипедах, пункты проката есть в каждом отеле и на каждой улице города.</p>

                <h5>Аренда авто</h5>
                <p>Компании по аренде авто представлены в основном на главном острове Маэ. Для заключения договора вам потребуются национальные права, общий стаж вождения 3 года и возраст не менее 22 лет. За машину придется оставить залог или наличными или на банковской карте.</p>
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
                                <span>21 SCR за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Сейшельские зарисовки #7. На автомобиле по о. Маэ. Робинзон Крузо на Пиратском пляже." src="https://i.ytimg.com/vi/qApC3Iv53fA/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/qApC3Iv53fA?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Сейшельские зарисовки #7. На автомобиле по о. Маэ. Робинзон Крузо на Пиратском пляже.<br>© Рулим по миру 2017</figcaption>
                </figure>

            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение на Сейшельских островах</h2>
        <p>Медицина на Сейшелах развита слабо, клиники есть на Маэ и Праслине, свой врач почти в каждом отеле, но уровень квалификации и оборудования очень низкий. Для того, чтобы получить помощь, необходимо предъявить страховку или заплатить немалые деньги. Поэтому, несмотря на отсутствие требований по страховке для въезда, оформить ее все-таки стоит. Но даже с ней рассчитывать на профессиональную помощь не приходится. Необходимо максимально обезопасить себя самостоятельно, соблюдать меры безопасности в воде, беречь кожу от солнечных ожогов, голыми ногами не ходить в районе коралловых рифов, пользоваться репеллентами, чтобы избежать лихорадки.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь представлена 2 основными операторами:</p>
                <ul>
                    <li>AirTel - <a href="http://www.africa.airtel.com/wps/wcm/connect/africarevamp/Seychelles/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Cable&Wireless - <a href="https://www.cwseychelles.com" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Для связи на островах можно купить сим-карты в офисе оператора в столице. В отелях они предлагаются с существенной наценкой. При активации стоит сразу выбрать подходящий тариф и подключить пакет мобильного интернета. Пакет международной связи обойдется в 30-100 рупий, отдельно за минуту придется платить от 6 до 10 рупий.</p>

                <h5>Интернет</h5>
                <p>С точками доступа Wi-Fi на Сейшелах все сложно, их нет почти негде, даже большинство отелей острова не предоставляет такую услугу. Пока Wi-Fi встречается только на территории острова Маэ в некоторых отелях Виктории и в пригородах. Для связи с миром лучше пользоваться мобильным интернетом.</p>

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
                                <span>133</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Служба спасения</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>151</span>
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
                                    <nobr>220 В</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeG">разъем типа G</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_g.svg" style="width:100px; max-width:100%;">
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