<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Финляндия</h1>
                    <div class="lead">
                        <b>Столица</b>: Хельсинки<br>
                        <b>Официальный язык</b>: финский, шведский<br>
                        <b>Валюта</b>: EUR - евро<br>
                        <b>Территория</b>: 390 905 км²<br>
                        <b>Население</b>: 5.5 млн человек<br>
                        <b>Часовой пояс</b>: UTC+2. Разница с Астаной летом – 3 часа, зимой – 4 часа
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
                <p>Финляндия - это северная страна, находящаяся на севере Европы, на востоке от России и на севере от Швеции с Норвегией. Финляндия известна своими бескрайними лесами, которые занимают около 70% ее площади, высокой долей акватории, а так же финскими саунами.</p>
                <p>Жители Финляндии - это скромный народ, характеризующийся своей толерантностью и хорошими манерами. Вам всегда смогут помочь, если вы заблудились или попали в непредвиденную ситуацию.</p>
                <p>Страна характеризуется крайне низким уровнем преступности и занимает одно из лидирующий мест среди стран Европы в плане достатка на душу населения.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="FINLAND | Timelapse" src="https://i.vimeocdn.com/video/544956819_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/146534283?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">FINLAND | Timelapse<br>© Riku Karjalainen 2015</figcaption>
                </figure>

                <!--<hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Финляндия, сауна" src="https://i.ytimg.com/vi/SVaH2d0o0fU/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/SVaH2d0o0fU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Финляндия, сауна<br>© Noel Sharp 2017</figcaption>
                </figure>-->

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Хельсинки. Финляндия. Портовые города. Вокруг Света" src="https://img.youtube.com/vi/6M6b7e7gQww/sddefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/6M6b7e7gQww?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Хельсинки. Финляндия. Портовые города. Вокруг Света<br>© Вокруг Света 2014</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#money">Деньги</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <p>Культура Финляндии в корне отличается от европейских стран, она имеет скандинавский окрас и где-то ближе к восточным странам.</p>
        <p>Так, почти каждый финн имеет у себя в доме сауну, а порой даже не одну. Существуют мобильные сауны, представляющие собой прицеп с отопительной системой. Жители ведут спортивный образ жизни, предпочитая горнолыжные базы для занятия лыжными видами спорта. Также очень популярна спортивная ходьба с утяжеленными лыжными палками.</p>

        <h5>Праздники и памятные даты</h5>

        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Нерабочие дни:</h6>
                <ul>
                    <li>1 января — Новый год</li>
                    <li>6 января — Крещение</li>
                    <li>1 мая — День труда</li>
                    <li>второе воскресенье мая – День матери</li>
                    <li>середина мая — Троица</li>
                    <li>Праздник середины лета — Иванов день (конец июня)</li>
                    <li>первая суббота ноября — День Всех Святых</li>
                    <li>второе воскресенье ноября – День отца</li>
                    <li>6 декабря — День независимости</li>
                    <li>24 декабря — Сочельник</li>
                    <li>25, 26 декабря — Рождество</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Финляндия входит в состав стран, подписавших Шенгенский договор, таким образом для посещения гражданам Казахстана необходима шенгенская виза, которую можно оформить в консульстве.</p>
                <p>Вот список документов необходимы для подачи на визу:</p>
                <ul>
                    <li>Паспорт, сроком действия не менее 6 месяцев после получения визы (необходимы две пустые страницы для вклеивания визы).</li>
                    <li>Две цветные фотографии 3x4.</li>
                    <li>Копии шенгенских виз, выданных за последние 3 года.</li>
                    <li>Бронь гостиницы, описание маршрута. </li>
                    <li>Медицинский страховой полис международного образца.</li>
                    <li>Бронь на самолет в оба направления.</li>
                    <li>Выписка с банковского счета о наличии средств.</li>
                    <li>Выписка с банковского счета о движении средств </li>
                </ul>
                <p>Данная информация является ознакомительной и не является руководством к получению визы.</p>
            </div>
            <div class="col-12 col-md-4">
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
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Хельсинки - Астана</div>
                                <span>6 раза/нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Хельсинки - Алматы</div>
                                <span>10 раза/нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Хельсинки - Атырау</div>
                                <span>5 раза/нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Хельсинки - Актау</div>
                                <span>11 раз/нед</span>
                            </div>
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

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon-link"></i> Таможенная служба Финляндии - <a href="http://tulli.fi/ru/fiziceskim-licam">tulli.fi</a></p>

        <h5>Ввоз алкогольной и табачной продукции</h5>
        <p>Без уплаты таможенных сборов и пошлин можно ввозить для личного пользования:</p>
        <ul>
            <li>10 литров крепких спиртных напитков</li>
            <li>110 литров пива</li>
            <li>90 литров вина</li>
            <li>20 литров напитков средней крепости</li>
        </ul>
        <p>Табак не более:</p>
        <ul>
            <li>200 сигарет</li>
            <li>50 сигар</li>
            <li>100 сигарилл </li>
            <li>250г папиросного или трубочного табака</li>
            <li>1000мл курительной жидкости, если вы предпочитаете вейп</li>
        </ul>

        <h5>Ввоз медикаментов</h5>
        <p>Запрещено ввосить лекарства, предназначенные другому лицу, если они выдаются по рецепту и классифицируются как сильнодействующий препарат.</p>
        <p>Запрещено ввозить лекарства, которые классифицируются как наркотические средства.</p>
        <p>Лекарственный продукт, приобретенный за пределами Финляндии, должен иметь разрешение на продажу в стране, где он был куплен. Т.е. медикаменты должны быть легальными на территории Казахстана.</p>

        <h5>Дополнительные ограничения</h5>
        <p>Помимо перечисленного в салон самолета запрещается брать товары, цена которых в совокупности превышает 300 евро.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Несмотря на суровый северный климат, Финляндия занимает одно из первых мест в мире по качеству дорог, общая протяженность которых - 80 тысяч километров.</p>
                <p>Дороги делятся на три категории:</p>
                <ul>
                    <li>основные - в первую очередь чистятся именно они;</li>
                    <li>второстепенные - им уделяют меньшее внимание, но тем не менее эти дороги так же имеют хорошее качество;</li>
                    <li>проселочные - чистятся в последнюю очередь, могут среди зимы оказаться под слоем снега.</li>
                </ul>
                <p>Порой на дорогах можно встретить термометры, показывающие температуру воздуха и асфальта. Финны, увидев что температура дорожного покрытия ниже нуля, а воздуха выше, снижают скорость в связи с возможностью образования наледи на дорогах.</p>

                <h5>Стоимость проезда</h5>
                <p>Поездка на автобусе обойдется в 27-30 евро в зависимости от региона и расстояния.</p>
                <p>Билеты на поезд можно приобрести в билетных кассах.</p>
                <p>Билеты бывают двух видов: разовые и на несколько дней неограниченных поездок. Разовый билет будет стоить от 20 до 27 евро, а абонемент на 3 дня обойдется в 120 евро.</p>

                <p>Проезд на городском транспорте в городе Хельсинки стоит 2,7 евро при покупке в специализированном автомате. Можно также приобрести абонемент на двое суток стоимостью 12 евро.</p>
                <p>Штраф за безбилетный проезд составляет 80 евро.</p>
                <p>Проезд на одном из самых маленьких метро протяженность всего 14 километров стоит 2,6 евро.</p>
                <p>Такси будет стоить 17-27 евро.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>2,7 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Рейсовый автобус</div>
                                <span>27-30 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>2,6 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>17-27 EUR</span>
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
                    <h6 class="title-decorative">КАЗАХСТАНСКОЕ ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ</h6>
                    <p>Граждане Казахстана имеют право управлять автотранспортом на территории Финляндии по казахстанскому водительскому удостоверению. ПДД схожи с казахстанскими.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p><i>В стране правостороннее движение.</i></p>

                <p>Для пересечения границы на личном автомобиле автовладелец должен предоставить следующие документы:</p>
                <ul>
                    <li>Права страны проживания. </li>
                    <li>Загранпаспорта с действующей визой всех участников путешествия.</li>
                    <li>Медицинская страховка.</li>
                    <li>Green card – международный страховой полис автогражданской ответственности.</li>
                </ul>

                <h5>ДТП</h5>
                <p>В случае ДТП нужно вызвать дорожную полицию, представителя арендной фирмы (в случае аренды авто) и консула Казахстана.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин 95</div>
                                <span>1.44 EUR/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин 98</div>
                                <span>1.51 EUR/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель 95</div>
                                <span>1.31 EUR/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Road trip - Finland, road 8300" src="https://i.ytimg.com/vi/mGvuSl-HRaY/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/mGvuSl-HRaY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Road trip - Finland, road 8300<br>© C2S07 2014</figcaption>
                </figure>

            </div>
        </div>

        <div class="mt-5">
            <h3>Аренда автомобиля</h3>
            <p>Арендовать автомобиль на день в городе Хельсинки стоит от 120 до 900 евро (в зависимости от возраста водителя и класса автомобиля).</p>
            <p>Страховка входит в стоимость аренды.</p>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Финляндия - это страна с высоким уровнем достатка и высоким уровнем медицины. </p>
        <P>Финские медики могут похвастаться самым низким уровнем инфекционных заболеваний в Европе.</P>
        <p>В случае непредвиденной ситуации вам окажут помощь по медицинской страховке, полученной при выдаче шенгенской визы. Эта страховка компенсирует часть стоимости, затраченной на лечение.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">

                <h5>Мобильная связь</h5>
                <p>При использовании казахстанской сим-карты стоимость входящего звонка будет стоить 50 тенге, исходящего в Казахстан примерно 750 тенге.</p>
                <p>При такой дорогой связи лучшим выбором для общения внутри Финляндии будет местный оператор, а для общения с Казахстаном используйте интернет.</p>


                <h5>Интернет</h5>
                <p>В Финляндии на законодательном уровне закреплено право на интернет, поэтому даже в самых отдаленных местах вы не останетесь без связи.</p>
                <p>Местные операторы поддерживают сети 3G и 4G.</p>
                <p>Пакет на месяц будет стоить 30 евро в месяц.</p>
                <p>Вот список местных операторов, можете подробнее ознакомится с тарифными планами на их сайтах.</p>
                <ul>
                    <li>Sonera - <a href="https://www.sonera.fi" target="_blank">перейти на сайт</a></li>
                    <li>Elisa - <a href="https://elisa.fi" target="_blank">перейти на сайт</a></li>
                    <li>DNA - <a href="https://www.dna.fi" target="_blank">перейти на сайт</a></li>
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

<section id="money" class="bg-white">
    <div class="container">
        <h2>Деньги</h2>

        <p>Официальной валютой Финляндии является евро (EUR)</p>

        <h5>Банкоматы</h5>
        <p>Принимаются все основные карты: Visa, American Express, Master Card.</p>
        <p>В большинстве крупных магазинов можно расплачиваться кредитными картами.</p>

        <h5>Уровень цен</h5>
        <p>Пообедать в среднестатистическом кафе, обойдется в 30 - 40 евро на двоих. А сытный ужин в ресторане на двоих с алкоголем будет стоить 75 - 87 евро. </p>
        <p>Уровень цен на одежду чуть меньше средних европейских.</p>
    </div>
</section>

<section id="sight">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>