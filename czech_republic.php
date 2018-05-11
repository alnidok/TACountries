<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Чехия</h1>
                    <div class="lead">
                        <b>Столица</b>: Прага<br>
                        <b>Официальный язык</b>: чешский<br>
                        <b>Валюта</b>: CZK - чешская крона<br>
                        <b>Территория</b>: 78 866 км²<br>
                        <b>Население</b>: 10.56 млн человек<br>
                        <b>Часовой пояс</b>: UTC+1. Разница с Астаной - 5 часов (зимнее время) и 4 часа (летнее время).
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
                <p>Климат в Чехии достаточно разнообразен, можно назвать его умеренным, мягким. В большей степени он зависит от высоты над уровнем моря: в общем, чем выше вы находитесь, тем выше вероятность встретить дождь и ниже температура воздуха. Начало года в Чехии характеризуется холодной, морозной зимой, после этого идет приятная весна, жаркое лето и достаточно прохладная, зябкая осень.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Чехия находится в центральной Европе и хорошо известна своим искусством, музыкой и литературой. Это страна с богатой историей и красивейшей архитектурой. Граничит с такими странами, как Германия, Польша, Словакия и Австрия. </p>
                <p>Вот некоторые интересные факты о Чехии:</p>
                <ul>
                    <li>Будучи коммунистическим государством в течении 41 года, в 1989 году Чехословакия вернулась к либеральной демократии через мирную революцию, которую впоследствии назвали “бархатной”. Позднее, в 1993, страна разделилась на Чехию и Словакию</li>
                    <li>Чехия это третья страна в мире по количеству атеистов(после Китая и Японии). Несмотря на то, что большинство людей в Чехии не религиозны, они очень толерантны, так что вы можете не переживать, что вас осудят за вашу веру.</li>
                    <li>Чехи пьют очень много пива. Так много, что занимают 1 место в рейтинге стран по употреблению этого пенного напитка. В стране проходит большое количество пивных фестивалей, самый большой из них - Чешский Пивной фестиваль, который проводят в Праге. Там вы можете отведать более 70ти брендов Чешского пива.</li>
                    <li>Более 10 процентов населения Чехии живет в ее столице – Праге, и это неудивительно, ведь этот город не только является политическим и экономическим центром, но и богат красивыми, старинными зданиями и памятниками архитектуры.</li>
                </ul>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                    <img alt="Виды Чехии" src="https://i.ytimg.com/vi/48JUhdPo-RI/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/watch?v=48JUhdPo-RI?&autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    </div>
                    <figcaption class="figure-caption text-right">Виды Чехии<br>© APERTURE 2016</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Чехия. Интересные факты о Чехии." src="https://i.ytimg.com/vi/zgDCShIcnlA/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/watch?v=zgDCShIcnlA?&autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Чехия. Интересные факты о Чехии.<br>© CoolTimes 2017</figcaption>
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

        <p>Чехия имеет очень богатое культурное наследие, которое сумело выжить в течении 20го века, несмотря на безразличие коммунистического режима. На Чешскую культуру повлияли страны-соседи: Германия, Польша, Венгрия и Австрия.</p>

        <p>Наверное, самыми выдающимися памятниками культуры Чехии являются ее здания – архитектура в стиле Барокко, Арт-Нуво и Кубизма. Но так же есть и другие визуальные формы культуры – скульптуры, преимущественно религиозные, керамика, куклы и известное на весь мир Богемское стекло.</p>

        <p>Так же Чехия известна своими писателями, такими как Франц Кафка и Милан Кундера и музыкантами (Антонин Дворжак, Бедржих Сметана).</p>

        <p>Традиции Чехии неразрывно связаны с их народными праздниками, которые основываются на языческом наследии или местоположении страны.</p>
        <h5>Праздники и официально нерабочие даты</h5>
        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Нерабочие дни:</h6>
                <ul>
                    <li>1 января — День восстановления независимого чешского государства</li>
                    <li>8 мая — День Победы</li>
                    <lI>5 июля — День славянских святых Кирилла и Мефодия</lI>
                    <li>6 июля — День казни Яна Гуса</li>
                    <li>28 сентября — День чешской государственности</li>
                    <li>28 октября — День возникновения независимой Чехословацкой республики</li>
                    <li>17 ноября — День борьбы за свободу и демократию</li>
                </ul>
            </div>
        </div>
        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Памятные даты, рабочие дни:</h6>
                <ul>
                    <li>16 января — День памяти Яна Палаха</li>
                    <li>27 января — День памяти жертв холокоста и преступлений против человечества</li>
                    <li>8 марта — Международный женский день</li>
                    <li>12 марта — День вхождения Чешской республики в Североатлантический союз (НАТО)</li>
                    <li>28 марта — День рождения Яна Амоса Коменского</li>
                    <li>7 апреля — День просвещения</li>
                    <li>5 мая — Майское восстание чешского народа</li>
                    <li>15 мая — День семьи</li>
                    <li>10 июня — Уничтожение села Лидице</li>
                    <li>27 июня — День памяти жертв коммунистического режима</li>
                    <li>11 ноября — День ветеранов войны</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Чтобы посетить Чехию и насладиться ее красотами, вам понадобиться <b>Шенгенская виза</b>. Это единая виза для посещения 26 европейских стран, подписавших соглашение.</p>
                <p>Запрашивать визу надо у посольства той страны, в которой вы проведете большее количество дней в своем путешествии. Оформить визу можно в визовых центрах, расположенных в вашем городе.</p>

                <h5>Авиасообщение</h5>
                <p>Прямого авиасообщения между Казахстаном и Чехией нет, возможны перелеты с пересадкой в России или странах Европы.</p>
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Шенгенская виза</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span class="h6"><b>Посольство Чехии в Казахстане</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>г. Астана, просп. Мангилик Ел, 4</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Телефон</div>
                                <span>+7 7172 660 472</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Сайт</div>
                                <span><a href="https://www.mzv.cz/astana/ru/">mzv.cz/astana</a></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Еmail</div>
                                <span><a href="mailto:astana@embassy.mzv.cz">astana@embassy.mzv.cz</a></span>
                            </div>
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

        <p>Таможенные правила Чехии очень похожи на таможенные правила стран Европейского союза.</p>

        <h5>При въезде в Чехию (ввоз):</h5>

        <p>Разрешен ввоз до 10 000 евро без декларирования.</p>

        <h5>Товары, освобождаемые от таможенных пошлин, НДС и акциза (т.е. можно ввезти без оплаты):</h5>
        <ul>
            <li>табачные изделия (пассажиру должно быть 17 лет или старше): 200 сигарет или 100 сигарилл (вес до 3гр.) или 50 штук сигар или 250 гр курительного табака;</li>
            <li>алкогольные напитки (пассажиру должно быть 17 лет или старше): 1 литр крепких алкогольных напитков крепостью более 22% или 2 литра алкогольных напитков и апперитивов, шампанского или игристого и ликёров, крепостью до 22%. Дополнительно можно провезти 4 литра вина (не газированного) или 16 литров пива;</li>
            <li>парфюмерия: 50мл духов или 250мл туалетной воды;</li>
            <li>медикаменты: разрешается провоз медикаментов необходимых на срок пребывания в стране;</li>
        </ul>
        <p>Другие товары: предметы личного пользования, необходимые во время путешествия, беспошлинно на сумму до 430 евро. Для лиц младше 15 лет, норма беспошлинного провоза багажа составляет 200 евро. Под предметами личного пользования понимаются предметы и вещи, которыми пользуется посещающий страну иностранец, потребляет их или пользуется ими для своей профессиональной деятельности.</p>

        <p>Моторное топливо:</p>
        <ul>
            <li>в топливных баках транспортного средства;</li>
            <li>в переносных канистрах, ввозимых на территорию Чехии на моторном транспортном средстве, в количестве, не превышающем 10 литров.</li>
        </ul>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Самый большой аэропорт Чехии находится в Праге и называется Václav Havel Airport. Он находится далеко от центра города, но благодаря хорошо налаженной системе транспорта, добраться туда можно всего за 30 минут на автобусе AE (Aeroport Express). Билеты можно приобрести прямо у водителя.</p>

                <p>В Чехии очень развитая и упорядоченная сеть общественного транспорта. Вы можете использовать автобусы, метро, трамваи, паромы и такси. Автобусы и трамваи ходят четко по расписанию, что делает планирование своего времени действительно удобным.</p>

                <p>Чтобы использовать общественный транспорт, нужно купить <strong>единый билет</strong>, который имеет ограничение только по времени. Купить их можно в специальных автоматах в метро и на остановках. Важно помнить, что данные автоматы принимают только монеты, а так же, что перед началом поездки билет необходимо прокомпостировать и сохранять до выхода.</p>
                <p>В Праге так же можно оплатить проезд, отправив смс на номер 902 06 с текстом DPT и ценой билета.</p>
                <p>Стандартная цена на взрослого 32 CZK (1,20 euro). Если же вы собираетесь ездить весь день, то выгоднее купить билет, который позволяет безлимитно пользоваться транспортом одни сутки, стоит он 110 CZK(4 euro).</p>

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
                                <span>от 32 CZK (1,20 euro)</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>От 32 CZK (1,20 euro)</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>~ 200 CZK</span>
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

        <div class="card mb-4">
            <div class="bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Казахстанское водительское удостоверение</h6>
                    <p>Водительское удостоверение РК на территорий Чехии действительны в течений 180 дней.</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В стране левостороннее движение.</p>
                <p>Запрещено водить транспортное средство в алкогольном опьянении, полиция может попросить вас пройти тест, чтобы доказать, что вы трезвый. Так же нельзя использовать мобильный телефон во время вождения</p>
                <p>Конечно транспорт в городах очень удобный, но если хочется выехать за пределы и посмотреть замки, насладиться природой, то лучший вариант – взять машину в прокат. Выгоднее бронировать машину на специализированных сайтах</p>
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
                                <div>АИ-95</div>
                                <span>1,143 euro литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1,165 euro литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>1.220 euro литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Дороги в Чехии. Какие они дороги и магистрали в Чехии [NovastranaTV]" src="https://i.ytimg.com/vi/EbhQdBJRNac/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/EbhQdBJRNac?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Дороги в Чехии. Какие они дороги и магистрали в Чехии [NovastranaTV]<br>© NovastranaTV 2015</figcaption>
                </figure>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Страхование авто</h3>
                <p>Страхование автомобиля обязательно.</p>
                <p>В Чешской Республике существует два вида автострахования:</p>
                <ul>
                    <li>обязательное (POV – чеш. Povinné ručení, англ. Green card)</li>
                    <li>добровольное аварийное (KASKO – чеш. Havarijní pojištění)</li>
                </ul>
                <a href="https://kasko.account.travel" class="btn btn-outline-success">Оформить электронный полис КАСКО</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Аренда авто</h3>
                <p>В Чехии вы без проблем можете взять в аренду автомобиль прямо в аэропорту. Из документов Вам потребуются права и паспорт</p>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
        <p>Стандарты системы зравоохранения в Чехии очень высоки и были признаны лучшими в Евросоюзе. Иметь медицинскую страховку в Чехии обязательно. Граждане и резиденты автоматически получают страховку от государства, туристы же должны иметь туристическую страховку. Аптеки в Чехии широко распространены и доступны, некоторые работают круглосуточно.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная Связь</h5>
                <p>В стране работает 4 оператора и стоимость их услуг примерно одинаковая:
                <ul>
                    <li>02 - <a href="https://www.o2.cz/osobni/" target="_blank">перейти на сайт</a></li>
                    <li>Vodafone - <a href="https://www.vodafone.cz/en/" target="_blank">перейти на сайт</a></li>
                    <li>T-Mobile - <a href="https://www.t-mobile.cz/osobni" target="_blank">перейти на сайт</a></li>
                    <li>Ufon - <a href="https://www.nordictelecom.cz/" target="_blank">перейти на сайт</a></li>
                </ul>
                <p>Купить сим-карты можно в любом супермаркете или в аэропортах. Если вы собираетесь остаться в Чехии на неделю или больше, скорее всего у вас возникнет необходимость в местной сим-карте. </p>

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
                                <span>150</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>158</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>155</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый экстренный номер</div>
                                <span>112</span>
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