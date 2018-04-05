<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Вьетнам</h1>
                <div class="lead">
                    <b>Столица</b>: Ханой<br>
                    <b>Официальный язык</b>: вьетнамский<br>
                    <b>Валюта</b>: VND - вьетнамский донг<br>
                    <b>Территория</b>: 331 700 км²<br>
                    <b>Население</b>: 92,7 млн человек<br>
                    <b>Часовой пояс</b>: UTC+7. Разница с Астаной +1 час
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Vietnam" src="https://i.vimeocdn.com/video/649307891_1280x544.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/229018000?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© theroutefilms, 2017</figcaption>
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
                <p>Социалистическая Республика Вьетнам (СРВ) - государство на юго-востоке Азии, располагается на полуострове Индокитай. Граничит с Камбоджей, Лаосом и Китаем, омывается водами Южно-китайского моря.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Территория страны гористая - низкие и средневысокие горы занимают около 80% всей площади.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Вьетнам / Таймлапсы / Ночное небо / Закаты / рассветы / Vietnam Above the Roofs" src="https://i.ytimg.com/vi/2EKk-2ztDFQ/hqdefault.jpg" class="bg-image" />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/2EKk-2ztDFQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Вьетнам / Таймлапсы / Ночное небо / Закаты / рассветы / Vietnam Above the Roofs<br>© Travel Hacking! 2017</figcaption>
            </figure>

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Вьетнам - 3 выпуск (1080p HD) | Мир Наизнанку" src="https://i.ytimg.com/vi/Q4JefVxxGII/maxresdefault.jpg" class="bg-image" />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Q4JefVxxGII?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Вьетнам - 3 выпуск (1080p HD) | Мир Наизнанку<br>© МИР НАИЗНАНКУ 2013</figcaption>
            </figure>
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
        <p>Основные этнические группы Вьетнама: вьеты (более 80%), таи (2%), тхай (1,8%), кхмеры (1,5%) и другие.</p>
        <p>Что касается религии, то более 80% населения являются последователями местных анимистических культов (народные верования), буддизм исповедуют около 10%, католицизм — 7%, на оставшуюся долю приходится протестантство, хао-хао и каодай.</p>

        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Среди искусства Вьетнама можно отметить местную живопись, в том числе роспись батиком, религиозную скульптуру, керамику, театр, национальную музыку. Традиционные музыкальные инструменты — бамбуковая флейта, щипковые и смычковые инструменты.</p>

                <p><i class="icon-link"></i> Министерство Культуры, Спорта и Туризма Вьетнама -  <a href="http://www.cinet.gov.vn/" target="_blank">cinet.gov.vn</a></p>
                <p>Интересна национальная вьетнамская одежда — мужчины обычно носят прямые брюки и куртку, а женщины яркое приталенное платье в виде халата с характерным стоячим воротником и широкие штаны. И, конечно же, обязательный атрибут — шляпа нонла, которая стала символом Вьетнама.</p>
                <p>Нельзя оставить без внимания и местную кухню — она отличается большим выбором блюд из морепродуктов, риса и овощей и разнообразием соусов.</p>
                <p>Смелые туристы могут отведать экзотику: стейки из крокодила и страуса, лягушачьи лапки, запеченное сердце кобры.</p>
                <p>К блюдам обычно подается зеленый чай. Также в стране настоящий культ кофе - местные жители обычно пьют его очень крепким, добавляя сгущенку и лёд.</p>
            </div>

            <div class="col-md-4">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни:</h6>
                        <ul>
                            <li>1 января – Новый год</li>
                            <li>январь (февраль) – Новый год (по лунному календарю, плавающая дата)</li>
                            <li>апрель - День поминовения королей Хунг (плавающая дата)</li>
                            <li>30 апреля – День освобождения Южного Вьетнама</li>
                            <li>1 мая – Праздник труда</li>
                            <li>19 мая – День рождения Хо Ши Мина</li>
                            <li>2 сентября – День независимости</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Про Вьетнамские Донги | Деньги Вьетнама | Валюта Вьетнама" src="https://i.ytimg.com/vi/uDDKJTSVI7A/maxresdefault.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/uDDKJTSVI7A?autoplay=1&rel=0&showinfo=0&start=19" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Про Вьетнамские Донги<br>© Про Вьетнам 2015</figcaption>
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
                <p>Климат Вьетнама на севере субтропический, на южных территориях господствует тропический муссонный климат. Во всех зонах можно выделить 2 основных сезона — дождливый и сухой. Сезон дождей​ длится с мая по октябрь на севере и юге страны, а в центральной части — с августа по январь.</p>
                <p>На севере с ноября по апрель прохладно, зимой температура воздуха до +7 °С, в горах еще ниже — до 0 °С. Южные территории характеризуются очень жарким летом (до +35°С) и теплой зимой (от 27 °С до 27 °С).</p>
                <p>На побережье Вьетнама случаются тайфуны, влекущие за собой наводнения. Среднегодовое количество осадков в зависимости от географического расположения региона — от 700 до 3000 мм.</p>
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
                <p>Въезд в страну для туристов из Казахстана визовый.</p>
                <p>Получить визу можно следующими способами:</p>
                <ul>
                    <li>в аэропорту по прилету во Вьетнам — самый простой и дешевый способ, занимает 30-60 минут времени, требуется загранпаспорт, 2  фото 4*6, визовое приглашение, заполненная анкета</li>
                    <li>в электронном виде (eVisa) — оформляется нa oфициaльном caйте миграционной службы Вьетнама или через турфирму, требуется скан загранпаспорта, фото, анкета и билеты, срок выполнения 1-3 дня</li>
                    <li>в консульстве — требуется загранпаспорт, анкета, фото и билеты, срок оформления 3-7 дней</li>
                </ul>
                <p>Стоимость визы варьируется в зависимости от типа визы, места и сроков оформления (65-470 USD).</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Требуется виза</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/s искусства Вьетнама можно отметить местную живопись, в том числе роспись батиком, религиозную скульптуру, керамику, театр, национальную музыку. Традиционные музыкальные инстрearch?q=астана,+ул.+жылыой,+19б&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Вьетнама</h5>
                        <p>Астана, ул. Жылыой, 19Б</p>
                        <p><i class="icon-phone"></i> +7 (7172) 26–61–62</p>
                        <p><i class="icon-link"></i> <a href="http://www.mofa.gov.vn" target="_blank">www.mofa.gov.vn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Вьетнама - <a href="http://customs.gov.vn/default.aspx/" target="_blank">customs.gov.vn/default.aspx</a></p>
        <p>Заполнение таможенной декларации при въезде в страну не требуется.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Лица старше 18 лет имеет право провозить до 400 сигарет (или 0,5 кг табака), а также 2 л вина (или 1,5 л крепких алкогольных напитков).</p>

        <h5>Ювелирные украшения и драгоценности</h5>
        <p>Для провоза золота весом более 1 кг требуется разрешение Госбанка Вьетнама.</p>

        <h5>Валюта</h5>
        <p>Сумма ввоза иностранной валюты не ограничивается, но сумма свыше 7 тыс. USD подлежит декларации.</p>

        <h5>Прочее</h5>
        <p>Разрешается беспошлинный провоз 3 кг кофе, 5 кг чая и других товаров общей стоимостью не более 300 USD.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Площадь государства довольно большая, путешествовать на дальние расстояния можно самолетом, на автобусе, речным транспортом, а также по железной дороге.</p>
                <p>Междугородние автобусы, как правило, комфортабельные, оснащены кондиционерами, удобными креслами и даже телевизорами.</p>
                <p>Путешествуя по железной дороге, выбирайте «мягкие» вагоны — они более современные, комфортабельные и безопасные.</p>
                <p>Из городского общественного транспорта популярны автобусы, такси и мототакси.</p>


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
                                <div>Автобус м/г</div>
                                <span>от 140 000 VND</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>6 000-8 000 VND</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>в среднем 50 000 VND</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Мототакси</div>
                                <span>в среднем 20 000 VND</span>
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
                <p>Движение во Вьетнаме привычное нам — правостороннее. Качество дорог довольно высокое. В общем потоке транспортных средств значительно преобладают скутеры, велосипеды и мопеды, отчасти это связано с высоким налогом на приобретение автомобиля.</p>
                <p>Дорожное движение Вьетнама довольно беспорядочное, повсеместно нарушаются правила дорожного движения, поэтому нужно быть предельно внимательным переходя дорогу, а также если вы решились взять в аренду велосипед или скутер.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Вьетнам Нячанг 2016 май 27.Как переходить дорогу?" src="https://i.ytimg.com/vi/1u0SDQlj2bY/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/1u0SDQlj2bY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Нячанг. Как переходить дорогу?<br>© Ринат из Вьетнама 2016</figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Казахстанские, а также международные водительские удостоверения на территории Вьетнама не действительны.</p>
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
                                <div>АИ-92</div>
                                <span>20 120 VND/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-95</div>
                                <span>20 720 VND/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>14 680 VND/литр</span>
                            </div>
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

        <p>Для въезда в страну не требуется дополнительной вакцинации.</p>
        <p>Тропическая лихорадка и малярия не распространены в крупных городах и на курортах, но есть опасность заражения в сельской местности.</p>
        <p>Настоятельно рекомендуется пить только бутилированную воду, овощи и фрукты перед употреблением необходимо тщательно мыть также бутилированной водой. Используйте солнцезащитный крем даже в пасмурную погоду.</p>
        <p>Мед. страховка для въезда в страну не является обязательной, однако застраховать свое здоровье все же рекомендуется, особенно от инфекционных заболеваний.</p>


        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Сотовую связь в стране предоставляют 3 оператора: Viettel, Mobifone и Vinaphone.</p>
                <p>Приобрести местную сим-карту очень просто, они продаются повсеместно — в аэропорту, в отелях и даже в мелких уличных лавочках. Никаких документов для покупки не требуется. Стоимость симки в среднем 70 000-130 000 донгов, часть из этих денег идет на счет.</p>
                <ul class="mt-4">
                    <li>Viettel — <a href="https://www.vietteltelecom.vn/" target="_blank">перейти на сайт</a></li>
                    <li>Mobifone — <a href="http://www.mobifone.vn" target="_blank">перейти на сайт</a></li>
                    <li>Vinaphone —<a href="http://www.vinaphone.com.vn/" target="_blank">перейти на сайт</a></li>
                </ul>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Мобильная связь во Вьетнаме | Про Вьетнам" src="https://i.ytimg.com/vi/RmVaQPvmz_4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/RmVaQPvmz_4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Мобильная связь во Вьетнаме | Про Вьетнам<br>© Про Вьетнам 2015</figcaption>
                </figure>
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
                                <span>113</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>114</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Телефонный справочник</div>
                                <span>116</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная служба</div>
                                <span>1080</span>
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
                            <div class="d-flex justify-content-between">
                                <div>Напряжение</div>
                                <span>220 В</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Частота</div>
                                <span>50 Гц</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    на юге страны<br>
                                    <a href="/journal/electric-sockets.html#typeA" target="_blank">разъем типа A</a>
                                </div>
                                <span>
                                    <img src="/img/electric/type_a.svg" style="width:100px; max-width:100%;">
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>на севере страны<br>
                                    <a href="/journal/electric-sockets.html#typeC" target="_blank">разъем типа C</a>
                                </div>
                                <span>
                                    <img src="/img/electric/type_c.svg" style="width:100px; max-width:100%;">
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>в отелях высшего класса<br>
                                    <a href="/journal/electric-sockets.html#typeG" target="_blank">разъем типа G</a>
                                </div>
                                <span>
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
