<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap"><?=$this->params['country']['name']?></h1>
                    <div class="lead">
                        <b>Столица</b>: Ереван<br>
                        <b>Официальный язык</b>: Армянский<br>
                        <b>Валюта</b>: ADM - армянский драм<br>
                        <b>Территория</b>: 29 740 км²<br>
                        <b>Население</b>: 2.9 млн человек (январь 2017)<br>
                        <b>Часовой пояс</b>: UTC+4. Разница с Астаной -2 часа
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
                <p>Армения находится в южной части Закавказья. На севере граничит с Грузией, на западе – с Турцией, на юге – с Ираном, на юго-западе, востоке и северо-востоке – с Азербайджаном.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Кавказ (Армения)" src="https://i.vimeocdn.com/video/642022045_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/223275622?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Кавказ (Армения)<br>© FamilyFrames 2017</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Армения. Колыбель истории" src="https://i.ytimg.com/vi/aFelAI7Tgig/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/aFelAI7Tgig?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Армения. Колыбель истории<br>© ТРК Сургутинтерновости 2017</figcaption>
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

        <p>Давно замечено, что люди, глубоко чувствующие свое национальное самосознание и культурное единство, с особым почитанием строят свою жизнь в соответствии с обычаями предков. Армения сумела сохранить свое истинное духовное богатство - религию, культуру и национальные многовековые традиции, которые они строго соблюдают, как в радости, так и в горе. На сегодняшний день устойчиво сохраняются такие армянские традиции как прочность брака, почитание старших, крепость и широта родственных связей, обычай родственной и соседской взаимопомощи, гостеприимство.</p>

        <p><i class="icon-link"></i> Министерство Культуры Армении - <a href="http://mincult.am/" target="_blank">mincult.am</a></p>
        <p>Почти 95 % населения исповедует христианство.</p>

        <h5>Праздники и памятные даты</h5>

        <div class="card bg-secondary">
            <div class="card-body">
                <!--<h6 class="title-decorative">Нерабочие дни:</h6>-->
                <ul>
                    <li>31 декабря – 1,2 января - Рождественские праздники и Новый год</li>
                    <li>6 января - Рождество и Богоявление</li>
                    <li>28 января – День Армии</li>
                    <li>8 марта – Женский День</li>
                    <li>24 апреля - День памяти жертв геноцида армян</li>
                    <li>1 мая – День Труда</li>
                    <li>9 мая - День победы и мира</li>
                    <li>28 мая - День Первой Республики.</li>
                    <li>5 июля - День Конституции.</li>
                    <li>21 сентября - День независимости</li>
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
                <p>Согласно Соглашению между Правительством Республики Казахстан и Правительством Республики Армения о взаимных поездках граждан, граждане обеих стран могут въезжать, следовать транзитом, выезжать и пребывать на территории государства другой Стороны без виз сроком до девяноста дней со дня пересечения государственной границы государства въезда.</p>
                <p>Граждане государства одной Стороны, которые въезжают на территорию государства другой Стороны на срок более чем девяносто дней, обязаны иметь визу принимающего государства.</p>
                <p>Граждане государства одной Стороны, постоянно проживающие на территории государства другой Стороны, могут выезжать с территории этого государства и въезжать обратно без виз, если они имеют документы, подтверждающие их постоянное проживание.</p>
                <p>До истечения срока действия паспорта необходимо выехать из страны.</p>

                <p>Авиакомпания «SCAT» выполняет прямые рейсы в Ереван из Астаны и Актау. Другие рейсы из Казахстана в Армению с пересадкой.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Безвизовый режим</div>
                                <span>до 90 дней</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Астана - Ереван</div>
                                <span>2 раза/нед (ср, сб)</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Актау - Ереван</div>
                                <span>1 раз/нед (вс)</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <!--<a href="https://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>-->
                        <a href="https://booking.scat.kz/websky/#/search" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Армении - <a href="http://www.petekamutner.am/DefaultCs.aspx?sid=cs" target="_blank">customs.am</a></p>

        <p>Разрешается ввозить и вывозить из страны любые товары</p>
        <ul>
            <li>кофе и чай - больше 1 кг,</li>
            <li>икра - больше 0,5кг,</li>
            <li>сигары - больше 10 шт.,</li>
            <li>сигареты – больше 400 шт.,</li>
            <li>алкогольные напитки – 2 л.,</li>
            <li>20 пачек табака.</li>
        </ul>


        <p>Нет ограничений на ввоз иностранной валюты.</p>

        <p>Оружие и боеприпасы допускаются только при наличии разрешения соответствующих государственных органов.</p>
        <p>Для ввоза животных требуется сертификат ветеринара.</p>

        <h5>Запрещено</h5>
        <p>Не разрешается вывозить наличными сумму более 5 000 000 драм или эквивалентную сумму в другой валюте.</p>
        <p>Запрещен ввоз/вывоз любого антиквариата, лекарственных препаратов.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">

                <p>Ереванский железнодорожный и автобусный вокзалы находятся в центре города, аэропорт от города – 20 км.</p>

                <p>В Ереване действуют автобус, троллейбус, трамвай, метрополитен, канатная дорога, маршрутные и обычные такси. Но в большинстве городов страны основную массу перевозок осуществляют автобусы.</p>
                <p>Автобусы - основной вид пассажирского транспорта страны в силу сложного горного рельефа и непростых отношений с соседним Азербайджаном, препятствующих осуществлению полноценного железнодорожного сообщения.</p>

                <h5>Стоимость проезда</h5>

                <p>С таксистами предпочтительнее договориться о цене заранее в зависимости от направления и времени. Средняя стоимость около 600 драм (расстояние до 5 км).</p>
                <p>Проехаться на автобусе выйдет в 50-100 драм в зависимости от расстояния. Многие автобусы не имеют четкого расписания и отправляются по мере наполнения салона.</p>
                <p>Проезд в метро обойдется в 100 драм.</p>
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
                                <span>50-100 драм</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>100 драм</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>~ 600 драм</span>
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
                    <p>Граждане Казахстана имеют право управлять автотранспортом на территории Армении по казахстанскому водительскому удостоверению. ПДД схожи с казахстанскими.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В стране правостороннее движение (руль слева).</p>
                <p>При вождении автомобиля быть особенно внимательным к пешеходам.</p>


                <p>В Армении доступен неэтилированный бензин (92, 95 и 98), дизельное топливо и природный газ. АЗС открыты круглосуточно.</p>


                <h5>Налог</h5>
                <p>Проезд по основным дорогам бесплатный. Есть также платные дороги, стоимость пользования которыми для легкового автомобиля составляет 10 000 драм на 15 суток.</p>
                <p>При въезде на территорию Армении автомобиля, зарегистрированного в другой стране, взимается налог на выброс вредных веществ. Для легкового автомобиля он составляет 2 000 драм.</p>

                <h5>Парковки</h5>
                <p>В центре Еревана стояночных мест мало. Действует система платных автостоянок, а также взыскания штрафов за неуплату парковки.</p>
                <p>Первые 15 минут парковки бесплатно. Оплате также не подлежит время с 24:00 до 09:00 утра. На остальное время действуют следующие тарифы:
                <ul>
                    <li>1 час - 100 драм</li>
                    <li>1 день - 500 драм</li>
                    <li>1 неделя - 1 000 драм</li>
                    <li>1 месяц - 2 000 драм</li>
                    <li>1 год - 12 000 драм</li>
                </ul>
                </p>
                <p>В случае неуплаты за парковку штраф составит 5 000 драм. Если транспортное средство находится на парковке без оплаты более 48 часов, то его эвакуируют на штрафстоянку.</p>

                <h5>ДТП</h5>
                <p>В случае ДТП нужно вызвать дорожную полицию, представителя арендной фирмы (в случае аренды авто) и консула Казахстана.</p>

            </div>
            <div class="col-md-4">
                <div id="block-fuel"></div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-1">
                        <img alt="Въезд в Армению с территории Грузии" src="https://i.ytimg.com/vi/eIGyMJbecEA/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/eIGyMJbecEA?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Въезд в Армению из Грузии (autotravelerru, 2017)</figcaption>
                </figure>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Страхование авто</h3>

                <p>С 1 января 2011 года вступило в силу требование об обязательном страховании автомобиля и гражданской ответственности.</p>
                <p>Оформить страховку можно непосредственно при пересечении границы. Стоимость зависит от объема двигателя, возраста и стажа водителя. В среднем около 50 USD.</p>

                <a href="https://osago.account.travel" class="btn btn-outline-success">Оформить электронный полис ОСАГО</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Аренда авто</h3>
                <p>Возможна аренда транспортных средств. Стоимость от 100 до 500 USD и выше в зависимости от марки и класса авто.</p>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>В целом эпидемиологическая обстановка в Армении благоприятна для проживания и туризма.</p>
        <p>В стране само страховое поле не готово сегодня к обязательному медицинскому страхованию. В некоторых случаях медицинское страхование требует больших средств, и не каждый страховщик готов или в состоянии взять на себя этот риск и застраховать.</p>
        <p>Срочная медицинская помощь в Армении бесплатна до того момента, когда пациент может быть перевезен в свою страну без угрозы для его жизни. Рецепт врача требуется при покупке большинства лекарственных средств.</p>

        <!--<a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>-->
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Телефонная связь</h5>
                <p>В городах распространены телефоны-автоматы.</p>

                <h5>Мобильная связь</h5>
                <p>
                    Действуют три основных оператора мобильной связи:
                    <ul>
                        <li>Beeline - <a href="https://beeline.am/ru-ru/" target="_blank">перейти на сайт</a></li>
                        <li>VivaCell MTS - <a href="https://www.mts.am/ru/" target="_blank">перейти на сайт</a></li>
                        <li>Ucom (бывший Orange) - <a href="https://www.ucom.am/ru/" target="_blank">перейти на сайт</a></li>
                    </ul>
                </p>

                <h5>Интернет</h5>
                <p>Указанные выше операторы предоставляют доступ к мобильному интернету. Ознакомиться с тарифами и зонами покрытия можно на официальных сайтах.</p>

                <p>Wi-Fi есть в большинстве отелей, хостелов и гостиниц, а также в некоторых кафе и ресторанах в Ереване и других популярных у туристов городах.</p>
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
                                <span>101</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>102</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>103</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Международная справочная</div>
                                <span>105</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Городская справочная служба</div>
                                <span>107</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Общая служба по стране</div>
                                <span>109</span>
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
                                <div>МЧС</div>
                                <span>911</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!--<figure class="figure d-block">
                    <div class="video-cover box-shadow mb-1">
                        <img alt="Общественный Wi-Fi" src="https://i.ytimg.com/vi/rmo-T6XSBY4/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/rmo-T6XSBY4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Бесплатный общественный Wi-Fi (© CBC.AZ, 2017)</figcaption>
                </figure>-->
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