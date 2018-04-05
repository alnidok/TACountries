<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Мальта</h1>
                    <div class="lead">
                        <b>Столица</b>: Валлетта<br>
                        <b>Официальный язык</b>: мальтийский и английский. Также употребляется итальянский.<br>
                        <b>Валюта</b>: евро<br>
                        <b>Территория</b>: 316 км²<br>
                        <b>Население</b>: 436.9 тыс человек<br>
                        <b>Часовой пояс</b>: UTC +1. Разница с Астаной -5 часов.
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
                <p>Республика Мальта - государство, занимающее группу из шести островов в центральной части Средиземного моря. Заселены наиболее крупные из них (Мальта, Гозо и Комино).</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Климат мягкий, относительно влажный зимой (с ноября по март), сухой и теплый летом (с апреля по октябрь).</p>
                <p>В самый жаркий сезон — с середины июля до середины сентября — средняя температура воздуха в дневное время составляет +35 °С, в январе-феврале — снижается до +10 °С.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="IT'S TIME TO VISIT MALTA" src="https://i.ytimg.com/vi/bXB7bIYIgbM/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/bXB7bIYIgbM?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">IT'S TIME TO VISIT MALTA<br>© Malta 2014</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Мальта древняя. Мегалитические храмы и дайвинг на Мальте" src="https://i.ytimg.com/vi/vUEu9-8C1HQ/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/vUEu9-8C1HQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Мальта древняя. Мегалитические храмы и дайвинг на Мальте<br>© Влюблённые в путешествия 2015</figcaption>
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
                <p>Многие правила поведения для туристов на Мальте схожи с общеевропейскими традициями этикета. Мальтийцы открыты и приветливы, обладают горячим средиземноморским нравом, обсуждать личную жизнь друг друга у мальтийцев не принято.</p>

                <h5>Поведение в общественных местах</h5>
                <ul>
                    <li>Курить в общественных местах на Мальте запрещено. Курить можно в специально отведённых местах, где поставлена вытяжка дыма.</li>
                    <li>На пляжах курортов страны запрещено загорать топлесс.</li>
                    <li>Отказ от приглашения на чай или ужин расстроит мальтийцев.</li>
                    <li>Мальтийцы не любят, когда опаздывают к ужину.</li>
                    <li>Жители Мальты, как правило, рано ложатся спать — уже к 22 часам.</li>
                    <li>Для фото- и видеосъёмки в церквях необходимо получить разрешение, обычно оно бесплатное.</li>
                </ul>

                <h5>Безопасность</h5>
                <p>На Мальте туристы могут отдыхать вполне безопасно. К тому же местные жители традиционно приветливы и доброжелательны, что еще более способствует безмятежному времяпрепровождению. Уровень преступности в этой островной стране всегда был беспрецедентно низким.</p>

                <p>Правда, в последнее время африканские беженцы периодически попадают на страницы местных газет в связи с мелкими кражами и прочими пакостями, и портят тем самым позитивную статистику. Рекомендации по соблюдению простых мер предосторожности помогут туристам избежать большинства неприятностей:</p>
                <ul>
                    <li>не рекомендуется носить при себе крупные суммы денег и прочие ценные вещи или документы. Их лучше всего хранить в отеле, причем не просто в номере, а в сейфе, так как кражи из гостиничных номеров хоть и редко, но тоже случаются;</li>
                    <li>в арендованной или своей машине тоже не стоит оставлять ценные вещи, каждый раз, припарковав авто, их нужно забирать с собой;</li>
                    <li>во время прогулки рюкзак лучше носить перед собой, в случае с сумочкой стоит позаботиться, чтобы она была надета через плечо – фотоаппараты и сумки могут выхватить проезжающие мотоциклисты;</li>
                    <li>несмотря на относительную безопасность, прогуливаться в одиночестве по ночным улицам на окраинах города не рекомендуется.</li>
                </ul>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-wallet"></i>
                        <span class="h6"><b>Уровень цен</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Обед в ресторане среднего класса</div>
                                <span><nobr>10—20&nbsp;&euro;</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Номер в гостинице среднего класса</div>
                                <span><nobr>40—80&nbsp;&euro;</nobr></span>
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
                                    <nobr>230 В</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeG">разъем типа G</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_g.svg" style="width:100px; max-width:100%;">
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit-card"></i>
                        <span class="h6"><b>Банкоматы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p>Банкоматы расположены на острове в большом количестве. Принимаются основные кредитные карточки.</p>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Мальта вкусная. Мальтийская кухня" src="https://i.ytimg.com/vi/zx5Y3QA7CRU/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/zx5Y3QA7CRU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Мальта вкусная. Мальтийская кухня<br>© Влюблённые в путешествия 2015</figcaption>
                </figure>

            </div>

            <div class="col-12 mt-4">
                <h5>Праздничные и нерабочие дни</h5>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <ul>
                            <li>31 марта — День Свободы;</li>
                            <li>7 июня — День мучеников;</li>
                            <li>8 сентября — День победы над турками;</li>
                            <li>21 сентября — День независимости;</li>
                            <li>13 декабря — День республики;</li>
                            <li>25 декабря — Рождество.</li>
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
                <p>Гражданам Казахстана необходима виза для пребывания на Мальте.</p>
                <p>Документы:</p>

                <ol>
                    <li>Паспорт, нового образца срок выдачи паспорта на срок не более 10 лет. Действие паспорта - не менее 3 месяцев с момента окончания поездки. Должно быть не менее 2 чистых страниц для проставления визы с отметкой "ВIЗЫ/ВИЗЫ/VISAS"!</li>
                    <li>Копия разворота паспорта на листе А4 (страница с личной информацией)</li>
                    <li>Копии предшествующих Шенгенских виз, при их наличии за последние 3 года</li>
                    <li>Заполненная анкета он- лайн в заказе, распечатанная и подписанная</li>
                    <li>Фотография, 1 (одна) цветная на белом фоне. Размер: 3 * 4 см.</li>
                    <li>Справка с места работы</li>
                    <li>Финансовая гарантия</li>
                    <li>Сумма денежных средств, необходимых для въезда на территорию Мальты рассчитывается из расчёта 75 евро в день.</li>
                    <li>Адресная справка</li>
                    <li>Авиабилет или бронь авиабилета</li>
                    <li>Медицинская страховка для стран Шенгена.</li>
                    <li>Документы, предоставляющие доказательство наличия семейных уз в Казахстане.</li>
                </ol>

                <p><i class="icon icon-warning"></i> Информация предоставлена в ознакомительных целях и не является руководством к получению визы.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-v-card"></i>
                        <span class="h6"><b>Где оформить</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Виза на Мальту оформляется в Астане и Алматы.
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-fingerprint"></i>
                        <span class="h6"><b>Дактилоскопия</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">При первой подаче заявления на получение визы необходима личная явка в целях сбора биометрических данных (отпечатков десяти пальцев и фотографии).
                        </li>
                    </ul>
                </div>

                <div>
                    <figure class="figure d-block">
                        <div class="video-cover box-shadow">
                            <img alt="МАЛЬТА: Программа по получению гражданств" src="https://i.ytimg.com/vi/x7LqCNOyC1I/maxresdefault.jpg" class="bg-image"/>
                            <div class="video-play-icon">
                                <i class="icon-controller-play"></i>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/x7LqCNOyC1I?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <figcaption class="figure-caption text-right">МАЛЬТА: Программа по получению гражданств<br>© Citizenship \u0026 Residence Programmes Worldwide 2016</figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>В соответствии с Регламентом Европейского парламента и Совета Европейского любое физическое лицо (включая владельцев дипломатических и служебных паспортов), которое въезжает в ЕС или выезжает из ЕС и ввозит/вывозит наличные денежные средства в сумме 10.000 евро или более, обязано декларировать эту сумму.</p>

                <p>Запрещен ввоз оружия.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-suitcase"></i>
                        <span class="h6"><b>Спиртное и сигареты(ввоз):</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            200 сигарет, сигар или соответ&shy;ствующее количество табака;
                        </li>
                        <li class="list-group-item">
                            одну бутылку ликеро-водочных изделий и одну бутылку вина.
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
            <div class="col-12 col-md-8 col-lg-7">
                <p>По обитаемым островам Мальтийского архипелага можно передвигаться следующим образом:</p>
                <ul>
                    <li><b>По Мальте:</b> на автобусе, арендованной машине, такси, пароме (между Валлеттой и Слимой), а также пешком;</li>
                    <li><b>По Гозо:</b> на автобусе, арендованной машине, такси, а также пешком;</li>
                    <li><b>По Комино:</b> только пешком;</li>
                </ul>

                <p>Автобусы. Экспрессы, идущие в аэропорт, обозначены буквой X, рейсы через столицу — номерами от 1 до 99, минующие ее автобусы — от 200 до 300, ночные маршруты — буквой N, транспорт острова Гозо — номерами от 300.</p>

                <p>Автобусное сообщение связывает все населенные пункты Мальты, но только не напрямую, а через центральный автовокзал, находящийся у ворот в «старый город» Валетты.</p>
                <p>Проезд недорогой, например от Siggiewi (на юге острова) до Валетты можно доехать на автобусе за 47 евроцентов.</p>
                <p>Мальту, Гозо и Комино также связывают паромы.</p>

            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Прямых регулярных авиасообщений между Казахстаном и Мальтой нет. Из Алматы в Валетту можно добраться со стыковкой через Франкфурт (Lufthansa), Стамбул (Turkish Airlines), Москву (Аэрофлот). Если рассматривать вылеты из Астаны, также добавляется вариант через Лондон (Air Malta)
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="https://booking.scat.kz/websky/#/search" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
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
                <p>Движение — левостороннее.</p>
                <p>Почти 80 % мальтийских дорог покрыты хорошим асфальтом, расстояния между городами небольшие, трассы бесплатные.</p>
                <p>В Валлетте въезд в исторический центр платный, дороги узкие (или вовсе пешеходные), так что личному транспорту лучше предпочесть общественный.</p>
            </div>

            <div class="col-12 col-md-4">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Дороги Мальты. Часть 1." src="https://i.ytimg.com/vi/T4I48x4HAiY/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/T4I48x4HAiY&t=19s?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Дороги Мальты. Часть 1.<br>© Denis Bolotin DeCrass 2011</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Перед поездкой рекомендуется сделать прививки от дифтерии и столбняка.</p>
                <p>На острове водятся ядовитые скорпионы: европейский, мальтийский и желтый средиземноморский. В туристических местах они встречаются крайне редко, но вот в сельской местности лучше остерегаться камней и скальных расщелин. Если скорпион все же укусит нерадивого туриста, следует сразу обратиться в ближайший медпункт: аллергическая реакция может оказаться тяжелой.</p>
                <p>У берегов плавают ядовитые медузы, но держатся крупными стаями у самой поверхности, так что заметить их легко. При укусе достаточно промыть кожу морской водой, соскоблить яд и обработать пораженный участок кремом или пенкой от солнечных ожогов.</p>

                <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
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
                                <div>Скорая помощь</div>
                                <span>196</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Больница (Гозо)</div>
                                <span>21561600</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Больница (Мальта)</div>
                                <span>25450000</span>
                            </div>
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
            <div class="col-12 col-md-8 col-lg-7">
                <p>Специально для приезжих предлагаются различные тарифы и местные сим-карты, срок действия которых не является слишком длительным, а условия предлагаются максимально оптимальные.</p>
                <p>На островах Мальты и Гозо есть три компании, которые рады предоставить свои услуги, как местным абонентам, так и туристам. Это:</p>
                <ul>
                    <li>Vodafone;</li>
                    <li>GO;</li>
                    <li>Melita</li>
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
                                <div>Служба экстренной помощи</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Спасение в аварийной ситуации (вертолет)</div>
                                <span>21244371</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Спасение в аварийной ситуации (патрульный катер)</div>
                                <span>21238797</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>199</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Компания ООО Gozo Channel</div>
                                <span>21556114</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>191</span>
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
