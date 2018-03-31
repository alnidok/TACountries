<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Грузия</h1>
                    <div class="lead">
                        <b>Столица</b>: Тбилиси<br>
                        <b>Официальный язык</b>: грузинский<br>
                        <b>Валюта</b>: лари (1 лари = 100 тетри)<br>
                        <b>Территория</b>: 69700 км²<br>
                        <b>Население</b>: 3.7 млн человек<br>
                        <b>Часовой пояс</b>: UTC+4. Разница во времени между Тбилиси и Астаной +2 час
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
                <p>Климат континентальный, на западной части - субтропический</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Путешествие по Грузии - земле поэзии и вина!" src="https://i.ytimg.com/vi/IzCUNIenITE/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/IzCUNIenITE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Путешествие по Грузии - земле поэзии и вина!<br>© MouzenidisTravel 2016</figcaption>
                </figure>


                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Кавказ (Грузия)" src="https://i.vimeocdn.com/video/638333556_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/220350015?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Кавказ (Грузия)<br>© FamilyFrames 2017</figcaption>
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
                <p>Все регионы Грузии открыты для посещения туристов.</p>
                <p>В целом, криминогенная ситуация в Грузии является стабильной. В последние годы фиксируется определенный рост уровня карманных краж и грабежей.</p>
                <p>Внутриполитическая ситуация в Грузии является стабильной.</p>
                <p>Семейное законодательство соответствует общепринятым нормам, и регулируются в судебном порядке.</p>
                <p>Иностранным гражданам разрешено приобретать земельные участки, недвижимость. Инвестиции в грузинскую экономику могут стать основанием для получения постоянного вида на жительство в Грузии.</p>
                <p>При задержании правоохранительными органами нужно обращаться в Консульский отдел Посольства.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-address"></i>
                        <span class="h6"><b>Законы и обычаи</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Согласно Закону «Об оккупированных территориях» от 23 октября 2008 года въезд в Абхазию и Южную Осетию не с территории Грузии предусматривает уголовное наказание сроком до 5 лет лишения свободы или админис&shy;тративный штраф до 5 тыс. лари.</li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <h5 class="mt-4">Праздничные и нерабочие дни</h5>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <ul>
                            <li>C 1 по 3 января — Новый год;</li>
                            <li>С 7 по 9 января — Рождество;</li>
                            <li>19 января — Крещение;</li>
                            <li>3 марта — День матери;</li>
                            <li>8 марта — Международный женский день;</li>
                            <li>9 апреля — День памяти погибших;</li>
                            <li>Пасха;</li>
                            <li>26 мая — День независимости;</li>
                            <li>28 августа — Успение Богородицы;</li>
                            <li>14 октября — Грузинский православный праздник Светицховлоба;</li>
                            <li>23 ноября — День Святого Георгия.</li>
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
            <div class="col">
                <p>Для въезда граждан Республики Казахстан в Грузию визы не требуются. </p>
                <p>Разрешенный срок пребывания в стране - до 360 суток, по истечении которых гражданин Республики Казахстан обязан ее покинуть либо получить в Агентстве гражданского реестра Грузии временный или постоянный вид на жительство.</p>
                <p>Въезд в Грузию гражданина Республики Казахстан осуществляется по действительному загранпаспорту при любой дате срока окончания его действия.</p>
            </div>     
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <div class="row justify-content-between">
            <div class="col">
                <p>При ввозе в Грузию обязательному таможенному декларированию подлежат:</p>
                <ul>
                    <li>товары, предназначенные для коммерческой деятельности;</li>
                    <li>предметы искусства и антиквариата;</li>
                    <li>растения и животные;</li>
                    <li>радиоэлектронные устройства высоких частот или средства связи;</li>
                    <li>радиоактивные средства.</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>      

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p class="mb-12">Автомобильные и железнодорожные вокзалы находятся в городах, аэропорты расположены в пределах 5-10 км от центра городов.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Отдых в Грузии Поезд Батуми Тбилиси Дорога Georgian Railways" src="https://i.ytimg.com/vi/g8pAnnSmr8A/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/g8pAnnSmr8A?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Отдых в Грузии Поезд Батуми Тбилиси Дорога Georgian Railways<br>© Sunny Petersburg 2016</figcaption>
                </figure>

            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Авиакомпания «Air Astana» осуществляет два раза в неделю по маршруту Астана-Тбилиси-Астана и пять раз в неделю Алматы-Тбилиси-Алматы. Кроме того, авиакомпания «Scat» осуществляются авиарейсы два раза в неделю по маршруту Актау-Тбилиси-Актау. В сезон летних отпусков количество рейсов может быть увеличено.
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="auto">
    <div class="container">
        <h2>Автомобиль</h2>

        <div class="card mb-4">
            <div class="bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Казахстанское водительское удостоверение</h6>
                    <p>Казахстанские водительские удостоверения можно использовать на территории Грузии сроком до 1 года.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Дорожная инфраструктура развита достаточно хорошо. Основные виды топлива бензин, солярка, газ. Дорожный налог отсутствует. В городах имеется проблема с паркингом автотранспорта.</p>
                <p>Приобретение страхового полиса является добровольным.</p>
                <p>Надзор за порядком на транспорте осуществляет патрульная полиция, которая выполняет также необходимые следственные действия при ДТП. В этом случае нужно позвонить в экстренную службы по номеру 112, дождаться их приезда и подчиниться законным требованиям представителей патрульной полиции. В случае нарушения прав следует обратиться в Консульский отдел Посольства.</p>

            </div>

            <div class="col-12 col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Аренда авто</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Цена аренды зависит от класса автотранспортного средства и начинается от 30 долларов США.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Опасности для здоровья и типичные болезни отсутствуют. В стране действует система медицинского страхования.</p>
                <p>Для иностранных граждан медицинское обслуживание в Грузии платное. Это касается и скорой медицинской помощи и скорой ветеринарной помощи.</p>
                <p>Прививки проводятся по календарю Минздрава Грузии.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-info"></i>
                        <span class="h6"><b>Медицинское обслуживание</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Иностранцам в Грузии рекомендуется приобретать медицинскую страховку.</li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col">
                <p>Единый номер пожарной службы, полиции, скорой медицинской помощи — 112.</p>
                <p>Справочная таможенной службы — 077.</p>
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
