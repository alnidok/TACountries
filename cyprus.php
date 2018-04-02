<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Республика Кипр</h1>
                    <div class="lead">
                        <b>Столица</b>: Никосия<br>
                        <b>Официальный язык</b>: греческий, турецкий<br>
                        <b>Валюта</b>: EUR - евро<br>
                        <b>Территория</b>: 9 251 км²<br>
                        <b>Население</b>: 1.17 млн человек<br>
                        <b>Часовой пояс</b>: UTC +2. Разница с Астаной -4 часа
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
                <p>Республика Кипр занимает южную часть острова Кипр, расположенного на востоке Средиземного моря. Остров известен своими пляжами с чистейшей водой, белоснежными песками и шумными ночными вечеринками, которые проходят чуть ли не круглосуточно.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Тайны Аббатства Беллапаис. Истории Северного Кипра" src="https://i.ytimg.com/vi/MnPXwyImeTE/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/MnPXwyImeTE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Тайны Аббатства Беллапаис. Истории Северного Кипра<br>© Наш Северный Кипр 2018</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#money">Деньги</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h2>Культура и традиции</h2>

                <p>Находясь на Кипре, вы обязательно столкнетесь с историческими памятниками. Здесь сохранились греческие храмы, римские мозаики и фрески.</p>
                <p>Кипр - это не только море и пляжи, это еще и место, где можно познакомится с винодельческим ремеслом и испробовать местного вина (винодельни Василикон и Ayia Mavri).</p>

                <h5>Праздничные и нерабочие дни</h5>

                <p>На Кипре очень любят праздники и часто их отмечают. Помимо общегосударственных и религиозных, в каждом городе (и даже деревне) проводятся собственные праздники, карнавалы и фестивали.</p>
                <p>Выходными являются суббота и воскресенье. Первый день недели - воскресенье.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Нерабочие дни:</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>6 января — Крещение</li>
                            <li>25 марта — Национальный день Греции</li>
                            <li>1 апреля — Национальный праздник Кипра</li>
                            <li>Светлый понедельник (понедельник после Пасхи)</li>
                            <li>1 мая — Международный день труда</li>
                            <li>Катаклизмос (фестиваль в честь Великого потопа), понедельник после Троицы</li>
                            <li>15 августа — Успение</li>
                            <li>1 октября — День независимости Кипра</li>
                            <li>28 октября — Национальный праздник Греции</li>
                            <li>24 декабря — Канун Рождества</li>
                            <li>25 декабря — Рождество</li>
                            <li>26 декабря — Святки</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-thermometer"></i>
                        <span class="h6"><b>Климат</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Климат субтропический средиземноморский. Характерно жаркое лето и относительно мягкая дождливая зима.
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>летом</div>
                                <span>+25 ... +35°С</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>зимой</div>
                                <span>+10 ... +15°С</span>
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
                                    <nobr>240 Вт</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeG">разъем типа G</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_g.svg" style="width:100px; max-width:100%;">
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <figure class="figure d-block">
                                <div class="video-cover box-shadow">
                                    <img alt="Лайфхак. Как подключиться в розетку на Кипре , Англии (Великобритании) или Гонконге без переходника." src="https://i.ytimg.com/vi/Sue7r6oRFgY/hqdefault.jpg" class="bg-image"/>
                                    <div class="video-play-icon">
                                        <i class="icon-controller-play"></i>
                                    </div>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Sue7r6oRFgY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                                <figcaption class="figure-caption text-right">Английские розетки. Лайфхак<br>© Alexandr Idjon 2016</figcaption>
                            </figure>
                        </li>
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
            <div class="col-12 col-md-8 col-lg-7">
                <p>Кипр является высокоразвитой страной и членом Европейского Союза. Ее законодательство соответствует ЕС. Особых норм поведения не отмечается.</p>

                <h5>Безопасность</h5>
                <p>В криминогенном отношении ситуация в стране спокойная. Террористические угрозы маловероятны.</p>
                <p>Не рекомендуется посещение территорий, оккупированных турецкими войсками (2 зоны на севере острова), и английских военных баз (базы в Декелии, Ларнаке, Никосии, Эпископи, Лимассоле). Это охраняемые объекты. Въезды на их территорию оснащены специальными знаками.</p>

                <h5>Визовый режим</h5>
                <p>Для посещения страны требуется виза. Документы, необходимые для оформления туристской визы на Кипр:</p>
                <ul>
                    <li>Паспорт, действительный не менее 6 месяцев со дня подачи заявления</li>
                    <li>Цветные фото 3.5×4.5см (2 шт)</li>
                    <li>Справка с работы с указанием оклада в евро или эквивалент</li>
                    <li>Пенсионерам - пенсионное удостоверение</li>
                    <li>Студентам – студенческий билет (вместо справки)</li>
                    <li>Детям - свидетельство о рождении</li>
                    <li>Страховой полис на все время пребывания (настоятельно рекомендуется для вашей безопасности и экономии денег)</li>
                    <li>Брони авиабилетов туда и обратно</li>
                </ul>
                <p>Срок оформления от 7 до 12 рабочих дней. Стоимость: 10500 тг + 120 € консульский сбор.</p>
                <p class="small"><i class="icon icon-warning"></i> Данная информация является ознакомительной и не является руководством к получению визы.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i>Требуется виза</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=проспект+Мангилик+Ел.+55/2,+Астана,+Казахстан&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Консульство Кипра</h5>
                        <p>
                            Астана, пр. Мангилик Ел 55/2, офис 73<br>
                            <small class="text-muted">Отель «Хилтон Астана»</small>
                        </p>

                        <p><i class="icon-phone"></i> +7 (7172) 25-39-52</p>
                        <p><i class="icon-link"></i> <a href="http://cyprusconsulate.kz/ru/">cyprusconsulate.kz</a></p>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Прямых рейсов из Казахстана не существует, нужна минимум одна пересадка.</p>
                            <!--<p>Перелеты Алматы-Ларнака, Астана-Ларнака с 1 пересадкой через: Москву (Аэрофлот), Киев (МАУ), Астана-Ларнака с 1 пересадкой через Минск (Belavia).</p>-->
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://avia.account.travel" class="btn btn-block btn-outline-success overflow-hidden">Подобрать рейс с пересадкой</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>
        <p>При въезде и выезде из страны граждане проходят через зеленый или красный таможенный коридор.</p>

        <h5>Ввоз алкогольной и табачной продукции</h5>
        <p>Ввоз спиртных напитков и табачных изделий разрешается только для личного пользования в количестве:</p>
        <ul>
            <li>1 литр крепких напитков</li>
            <li>2 литра вина</li>
            <li>16 литров пива</li>
            <li>200 сигарет</li>
            <li>100 сигарилл</li>
            <li>50 сигар</li>
            <li>250 г курительного табака</li>
        </ul>

        <h5>Ювелирные украшения и драгоценности</h5>
        <p>Необходимо заполнить декларацию при перевозе ювелирных изделий из драгметаллов или с вкраплениями драгоценных камней. Золото общей стоимостью больше 10 000 евро подлежит обязательному декларированию. При несоблюдении этого правила на нарушителя накладывают штраф в размере 50 000 евро с конфискацией перевозимых ценностей.</p>


        <h5>Дополнительные запреты</h5>
        <p>Также сотрудники таможенной службы не пропустят:</p>
        <ul>
            <li>Наркотики</li>
            <li>Оружие, в том числе выкидные ножи и кинжалы</li>
            <li>Пиратскую продукцию</li>
            <li>Мед, молочную продукцию</li>
            <li>Цветы и растения</li>
        </ul>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Самым распространенным видом транспорта является такси. Его можно вызвать либо по телефону, либо обратившись к управляющему отеля. Стоимость такси взимается по фиксированной оплате в размере 5 евро за вызов и плюс 0,38 за каждый километр пройденного пути.</p>
                <p>Между городами курсируют микроавтобусы, билеты на которые можно приобрести на вокзалах. Стоимость зависит от расстояния, но не превышает 15 евро. Обычные автобусы ходят ежедневно между городами и их районами. Стоимость не превышает 10 евро.</p>

                <h5>Дорожное движение</h5>
                <p>На острове левосторонне движение. Руль у автомобилей расположен справа.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <!--<i class="float-right icon-credit"></i>-->
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Междугородный автобус</div>
                                <span>10 €</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Маршрутное такси</div>
                                <span>15 €</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>5 € + 0,38 € / км</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Общественный транспорт на Кипре. Лимассол. Все об автобусах: расписание, цены, правила" src="https://i.ytimg.com/vi/WhGm7IMq0BQ/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/WhGm7IMq0BQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Общественный транспорт на Кипре. Лимассол<br>© Milya's Blog 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" >
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Перед поездкой на Кипр каких-либо вакцинаций делать не нужно.</p>
        <p>В непредвиденных ситуациях, связанных с угрозой здоровью, вам бесплатно окажут медицинскую помощь в государственных лечебных заведениях Кипра.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication" class="bg-white">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">

                <h5>Мобильная связь</h5>
                <p>В отрасли сотовой связи присутствуют два крупных оператора — CYTA и MTN.</p>
                <p>Для приобретения сим-карты не нужно никаких документов. Стоимость:</p>
                <ul>
                    <li>CYTA – 25 евро</li>
                    <li>MTN – 12,5 евро</li>
                </ul>

                <h5>Интернет</h5>
                <p>За интернетом на Кипре далеко ходить не нужно. Очень много интернет кафе, можно найти Wi-Fi в ресторанах и в отелях, но в отелях он не всегда бесплатен.</p>
                <p>Если вам нужен мобильный интернет, то можете выбрать тарифный план у одного из операторов:</p>
                <ul>
                    <li>Cyta Vodafone – <a href="https://cyta.com.cy/personal/en">перейти на сайт</a></li>
                    <li>MTN – <a href="http://www.mtn.com.cy/ru/prepaid/top-up-information/">перейти на сайт</a></li>
                    <li>PrimeTel – <a href="https://my.primetel.com.cy/Mobile/MobileItems.aspx?lang=en">перейти на сайт</a></li>
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
                                <div>Аэропорт Ларнаки</div>
                                <span>24-643-000</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Аэропорт Пафоса</div>
                                <span>26-422-833</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная служба</div>
                                <span>118-92</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Служба спасения<br><small class="text-muted">полиция, пожарная, скорая помощь</small></div>
                                <span>199 или 112</span>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>

    </div>
</section>

<section id="money">
    <div class="container">
        <h2>Деньги</h2>

        <p>Официальной валютой Республики Кипр является евро (EUR)</p>

        <h5>Банкоматы</h5>
        <p>Кипр имеет довольно обширную сеть банкоматов, которые обслуживают такие карты как: Visa, American Express, Master Card.</p>

        <h5>Уровень цен</h5>
        <p>Цены на уровень ниже средних европейских расценок. Так, сытный обед из трех блюд в хорошем ресторане обойдется в 40 евро.</p>
        <p>Стоимость табачной и алкогольной продукции немного завышена: пачка сигарет стоит 4,5 евро, а бутылка местного вина 3 евро.</p>
        <p>Если вы собираетесь прибывать на острове долгий срок, то продукты дешевле покупать в супермаркетах. К примеру, килограмм говядины стоит 8,9 евро, а килограмм сыра 7,71 евро.</p>

    </div>
</section>


<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>