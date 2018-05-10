<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Кения</h1>
                    <div class="lead">
                        <b>Столица</b>:  Найроби<br>
                        <b>Официальный язык</b>: суахили и английский<br>
                        <b>Валюта</b>: кенийский шиллинг (KES)<br>
                        <b>Территория</b>: 582 650 км²<br>
                        <b>Население</b>: 48.5 млн человек<br>
                        <b>Часовой пояс</b>: UTC+3. Разница с Астаной -3 часа.
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
            <div class="col-8 offset-2">
                <p>Государство граничит с Эфиопией на севере, Сомали на востоке, Танзанией на юго-западе, Угандой на западе и Южным Суданом на северо-западе.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Климат — субэкваториальный: среднесуточные колебания температуры составляют от +7 до +22 °С в июле и от +14 до +30 °С в январе. В засушливых районах в год выпадает 250 мм осадков. Периодические засухи чередуются с ливневыми дождями и наводнениями.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Волшебная Кения" src="https://i.ytimg.com/vi/EudlGRJmHsk/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/EudlGRJmHsk?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Волшебная Кения<br>© Странник КН 2018</figcaption>
                </figure>


                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Чудеса Африки: Восхитительные розовые фламинго: Национальный парк озеро Накуру Кения" src="https://i.ytimg.com/vi/C9mBFFxOCXU/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/C9mBFFxOCXU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Чудеса Африки: Восхитительные розовые фламинго: Национальный парк озеро Накуру Кения<br>© Странник КН 2015</figcaption>
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
            <div class="col-md-8 col-lg-7">
                <h5>Законы и обычаи</h5>
                <p>Каких-либо запретов, выходящих за рамки общепринятых европейских стандартов, нет.</p>

                <h5>Банкоматы</h5>
                <p>В Кении широко распространены банкоматы и кредитные карты.</p>


                <h5>Безопасность</h5>
                <p>С учетом того что в Кении не совсем стабильная социально-политическая обстановка, в Найроби нередки случаи локальных и массовых волнений. Особую опасность представляют люмпены и студенты, забрасывающие машины камнями. При наличии предварительной информации в СМИ о таких массовых волнениях выезды в город ограничиваются немедленно.</p>
                <p>В Найроби нередки случаи вооруженных грабежей и угонов автомобилей, причем зачастую объектами нападений становятся машины с иностранцами, не знающими местности и опасных городских районов.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-wallet"></i>
                        <span class="h6"><b>Уровень цен</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Обед в ресторане среднего класса</div>
                                <span>2—3&nbsp;тыс&nbsp;KES</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Номер в гостинице среднего класса</div>
                                <span>10—12&nbsp;тыс&nbsp;KES</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <?= $this->render('_electricity', $country) ?>
            </div>

            <div class="mt-4">
                <h5>Праздничные и нерабочие дни</h5>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <ul>
                            <li>1 Января - Новый год</li>
                            <li>30 Марта - Страстная Пятница</li>
                            <li>1 Апреля - Пасхальное воскресенье</li>
                            <li>2 Апреля - Пасхальный понедельник</li>
                            <li>1 Мая - День труда / Первомай</li>
                            <li>13 Мая - День матери</li>
                            <li>1 Июня - День Мадарака</li>
                            <li>16 Июня - Ид аль-Фитр</li>
                            <li>20 Октября - День Героев</li>
                            <li>12 Декабря - День Джамхури</li>
                            <li>25 Декабря - Рождество</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p class="mb-4">Гражданам Казахстана для пребывания на территории Кении необходима виза.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Посол республики Кения в Москве Поль Кургат об условиях получения единой визы" src="https://i.ytimg.com/vi/3wzAe7n6Qro/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/3wzAe7n6Qro&t=29s?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Посол республики Кения в Москве Поль Кургат об условиях получения единой визы<br>© ТурДом.TV 2014</figcaption>
                </figure>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-v-card"></i>
                        <span class="h6"><b>Виза</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Визу на 3 месяца за $50 можно получить при пересечении границы.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Оружие и боеприпасы</h5>
                <p>Ввоз и вывоз оружия (холодного, газового, травматического, огнестрельного охотничьего) и боеприпасов к нему возможен только после получения лицензии и соответствующего разрешения в Бюро лицензирования оружия Полиции Кении.</p>

                <h5>Прочее</h5>
                <p>Разрешен беспошлинный ввоз парфюмерии в пределах личных потребностей.</p>

                <p><i class="icon icon-warning"></i> Запрещены к ввозу и вывозу наркотики, взрывчатые вещества, оружие и патроны, живые дикие животные, живая рыба, капканы для животных, шкуры животных, птицы и птичьи яйца, слоновая кость, рога носорогов, зубы гиппопотамов.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-suitcase"></i>
                        <span class="h6"><b>Спиртное и сигареты(ввоз):</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            1 литр спиртных напитков или вина
                        </li>
                        <li class="list-group-item">
                            200 сигарет или 50 сигар, или 250 г табака
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-suitcase"></i>
                        <span class="h6"><b>Художественные ценности:</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Вывоз художественных и культурно-исторических ценностей без соответствующего разрешения запрещен.
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

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Прямое авиасообщение с Казахстаном отсутствует.</p>
                <p>Казахстанцам доступны варианты с удобными стыковками в Дубаи (FlyDubai), Франкфурте(Lufthansa) и Стамбуле(Turkish Airlines).</p>
                <p><a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a></p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда:</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Общественный транспорт<br /> (не рекомендуется)</div>
                                <span>20—40&nbsp;KES</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>24&nbsp;тыс&nbsp;KES</span>
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
                <p>Движение левостороннее, по английскому образцу. Дорожные знаки, указатели и разметка соответствуют международным стандартам.</p>
                <p>Скорость движения (если нет дополнительных ограничений) в городе для всех транспортных средств — 60 км/ч, на трассе для легковых автомобилей — до 115 км/ч, для пикапов, всех видов автобусов и грузовиков — до 80 км/ч.</p>
                <p>Использование ремня безопасности обязательно.</p>
            </div>

            <div class="col-md-4">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Дикая Африка. Дороги на сафари в Масаи-Мара, Кения" src="https://i.ytimg.com/vi/GTXkjdQQGb4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/GTXkjdQQGb4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Дикая Африка. Дороги на сафари в Масаи-Мара, Кения<br>© Дикая Африка 2015</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Санитарно-эпидемиологическая обстановка в Кении в целом сложная. По-прежнему регистрируется высокая заболеваемость ВИЧ-инфекцией, туберкулезом, малярией.</p>
                <p>В отдельных районах страны фиксируются периодические вспышки холеры с летальными исходами.</p>
                <p>Среди местного населения отмечается высокий процент инфицированных возбудителями брюшного тифа и паратифов. В связи с этим рекомендуется неукоснительно соблюдать правила личной гигиены и не пить водопроводную воду.</p>
                <p>Для питья и приготовления пищи использовать только бутилированную воду.</p>
                <p>Следует также избегать купания в озерах и реках.</p>
                <p>Побережье Индийского океана — малярийный район. Поэтому за неделю до отъезда в Кению необходимо начать химиопрофилактику малярии, так как  это очень опасное заболевание.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-shield"></i>
                        <span class="h6"><b>Прививки:</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                                <b>Необходимы</b>
                                вакцинация против гепатита А, гепатита В, брюшного тифа.
                        </li>
                        <li class="list-group-item">
                                <b>Рекомендуется</b>
                                прививка от желтой лихорадки.
                        </li>
                        <li class="list-group-item">
                                <b>Дети</b>
                                должны иметь все прививки в соответствии с возрастом.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Мобильная связь в стране представлена 4 компаниями, основные из них — Safaricom, Orange, Zain.</p>
                <p>Связь в целом достаточно устойчивая — обеспечена возможность звонков из отдаленных регионов страны. </p>
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
                                <div>Экстренная оперативная служба</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дополнительный экстренный номер</div>
                                <span>999</span>
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
