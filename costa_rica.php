<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Коста-Рика</h1>
                    <div class="lead">
                        <b>Столица</b>: Сан-Хосе<br>
                        <b>Официальный язык</b>: испанский<br>
                        <b>Валюта</b>: CRC - коста-риканский колон<br>
                        <b>Территория</b>: 51 100 км²<br>
                        <b>Население</b>: 4.857 млн человек <br>
                        <b>Часовой пояс</b>: UTC -6. Разница с Астаной -12 часов
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
                <p>С юго-запада Коста-Рики расположены воды Тихого океана, с северо-востока – Карибского моря. Имеет общую границу с Никарагуа на севере, а на юге ее соседом является Панама. Климат здесь субэкваториальный. В январе температура устанавливается в районе +23 С, а в июле на 2 градуса выше.
                </p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Essential COSTA RICA" src="https://i.vimeocdn.com/video/597890021_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/185940028?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Essential COSTA RICA<br>© Timelapse Media 2016</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Коста‑Рика. Непутевые заметки. Выпуск от 24.04.2016" src="https://i.ytimg.com/vi/fvJwvaOMvuc/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/fvJwvaOMvuc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Коста‑Рика. Непутевые заметки. Выпуск от 24.04.2016<br>© Первый канал 2016</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#other">Прочее</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <p>Традиции этой удивительной страны давно претерпели изменения, все больше походя на европейские, тем не менее все еще сохранились уникальные обычаи, которые отличают ее от какой-либо другой. Семьи в Коста-Рике очень крепки, многие традиции сохранились и до наших дней: крестины, свадьба, первое причастие. </p>
        <p>Существует ряд праздников, связанных с религией: Пасхальная неделя, Рождественская неделя и празднование Девы Ангелов. В государстве ведущие позиции занимает католическая вера, но и тут присутствует своя особенность: в стране практикуется «теплый» католицизм, предполагающий смесь вечеринок и религиозного праздника в эти дни.</p>

        <h5>Праздники</h5>

        <div class="card bg-secondary">
            <div class="card-body">
                <ul>
                    <li>1 января — Новый год;</li>
                    <li>11 апреля — День Хуана Сантамарии (национальный герой); </li>
                    <li>1 мая — День труда;</li>
                    <li>25 июля — День присоединения провинции Гуанакасте;</li>
                    <li>2 августа — День Марии де лос Анхелес (покровительница страны — главный религиозный праздник);</li>
                    <li>15 сентября — День независимости;</li>
                    <li>15 августа — День Матери;</li>
                    <li>25 декабря — Рождество.</li>
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
                <p>Для граждан Казахстана присутствует возможность <strong>безвизового</strong> пребывания.  Срок нахождения в государстве для них - 30 дней.</p>
                <p>Прямых авиалиний из Казахстана до Коста-Рики нет. Для того, чтобы долететь до Сан-Хосе необходимо как минимум 2 пересадки через крупные аэропорты. Если перелет происходит через Панаму, Бразилию, Колумбию, Эквадор, Боливию, Перу, Венесуэлу, Гайану или некоторые Африканские страны, то есть необходимость в прививке против желтой лихорадки. Самым выгодным считается перелет через Москву, а далее через города США.</p>

            </div>
            <div class="col-12 col-md-4">
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
                <a href="http://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p>Въехать на территорию государства можно через пункты пропуска на границе, аэропорты и морские порты.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Передвижение на всех видах транспорта в государстве доступно повсеместно, бонусом к этому является и низкая цена на такие услуги:</p>
                <ul>
                    <li>на такси — 4$ (с учетом посадки и дальности поездки на 4 километра);</li>
                    <li>передвижение на автобусе обойдется в 0.8$</li>
                </ul>
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
                                <span>0,8$</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>4$/4км</span>
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
            <div class="col-12 col-md-8 col-lg-7">
                <p>Правила дорожного движения тут почти не имеют места быть, контроля как такового здесь не присутствует. Имеет место частое нарушение ПДД, при этом никакого наказания не следует.</p>
                <p>Необходимость в пропуске машин на дороге присутствует только на кольцевой развязке.</p>
                <p>При происшествиях на дороге звонить по этим номерам:</p>
                <ul>
                    <li>полиция — 800;</li>
                    <li>страховая компания — 800-800-8000.</li>
                </ul>
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
                                <div>Бензин</div>
                                <span>0.92-1.2 $/литр</span>
                            </div>
                        </li>

                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ПОКУПКА АВТОМОБИЛЯ В КОСТА-РИКЕ 🚘 КОСТА-РИКА" src="https://i.ytimg.com/vi/uRVQAB4U3i8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/uRVQAB4U3i8?autoplay=1&rel=0&showinfo=0&start=28" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ПОКУПКА АВТОМОБИЛЯ В КОСТА-РИКЕ 🚘 КОСТА-РИКА<br>© TRAVEL MY LIFE 🐘 (Жизнь в путешествии) 2017</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Перед въездом требуется сделать прививку от желтой лихорадки. В страну могут не пустить, если не будет документа о том, что не менее чем 10 дней назад была совершена прививка. Организованный туризм не несет в себе никакого вреда для здоровья, риск заболеваний очень мал. Типичных болезней не выявлено.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Телефонная связь</h5>

                <p>В республике имеются различные операторы мобильной связи. Самый распространенный и самый старый – ICE, его и следует использовать при путешествиях по стране. SIM-карты можно купить по прилету в аэропорт.</p>

                <p>По всему городу расположены таксофоны.</p>

                <ul>
                    <li>Международный телефонный код страны - 506.</li>
                    <li>Исходящий международный код - 00. </li>
                </ul>

                <h5>Интернет</h5>
                <p>Интернет вы сможете найти в отелях, интернет-кафе по довольно приемлемым ценам (1-1.5$ в час).</p>
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
                                <div>Страховая компания</div>
                                <span>800-800-8000</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>800</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Телефон спасения</div>
                                <span>911</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная по телефонам юридических лиц</div>
                                <span>113</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!--<figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Орел и решка. 5 сезон - Коста-Рика" src="https://i.ytimg.com/vi/Rn1WM9SWPnE/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Rn1WM9SWPnE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Орел и решка. 5 сезон - Коста-Рика<br>© Телеканал Интер (Inter TV channel) 2013</figcaption>
                </figure>-->
            </div>
        </div>

    </div>
</section>
<section id="other" class="bg-white">
    <div class="container">
        <h2>Прочее</h2>

        <h5>Банкоматы</h5>
        <p>Здесь функционирует сеть банкоматов, которые принимают карты Visa и MasterCard</p>

        <h5>Уровень цен</h5>
        <p>Находясь в ресторане со средними ценами прием пищи обойдется вам примерно в 15$.</p>
        <p>Отдых в номере гостиницы с средними ценами достанет из вашего кошелька около 100 долларов за сутки.</p>
    </div>
</section>

<section id="sight">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>