<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Болгария</h1>
                <div class="lead">
                    <b>Столица</b>: София<br>
                    <b>Официальный язык</b>: болгарский<br>
                    <b>Валюта</b>: BGN — болгарский лев<br>
                    <b>Территория</b>: 110 994 км²<br>
                    <b>Население</b>: 7.1 млн человек <br>
                    <b>Часовой пояс</b>: UTC +2, летом UTC +3. Разница с Астаной -4 часа
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Discover Bulgaria in 4K - Beautiful landscapes" src="https://i.ytimg.com/vi/JwjA9VpI7X0/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/JwjA9VpI7X0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Martin Lust, 2017</figcaption>
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
                <p>Республика Болгария расположена в Юго-Восточной Европе на Балканском полуострове. Государство омывается Чёрным морем на востоке, соседствует с Турцией, Грецией, Сербией, Македонией и Румынией.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Около 80% населения - православные христиане.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ПРАВОСЛАВИЕ В БОЛГАРИИ" src="https://i.ytimg.com/vi/2dKvOBfShK4/hqdefault.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/2dKvOBfShK4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ПРАВОСЛАВИЕ В БОЛГАРИИ<br>© Studio Neophyte 2015</figcaption>
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
        <p>Основную часть населения составляют болгары (около 80%). Турков меньше 10%, и около 5% цыган.</p>
        <p>Соотношение мужчин и женщин - примерно 1/1.</p>
        <p>Средняя продолжительность жизни в Болгарии составляет 74.5 лет, что ставит страну вместе с Латвией (74.5) и Литвой (74.7) на самые последние позиции по этому показателю среди населения Европейского союза.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Культура и традиции</h2>

                <p><i class="icon-link"></i> Министерство Культуры Болгарии - <a href="http://mc.government.bg/" target="_blank" rel="nofollow">mc.government.bg</a></p>
                <p>Болгария — это историческое место, культурное развитие которого с древних времен происходило под влиянием разных народностей: славян, греков, византийцев, римлян, фракийцев, цыган.</p>
                <p>Болгары с особым уважением и трепетом относятся к истории своей страны, традициям и легендам, передавая их из поколения в поколение.</p>
                <p>На первом месте у местного населения всегда была религия, послужившая толчком для развития архитектуры — ценителям культурных памятников обязательно следует посетить Ивановские скальные церкви, Рильский монастырь, Бояновскую церковь.</p>
                <p>Значимой частью культуры Болгарии является народная музыка, её отличают особенная энергичность и задорность исполнения, как правило в составе группы, под аккомпанемент волынки, гадулки, гайды или гусле.</p>

                <h5>Кухня</h5>
                <p>Особого внимания заслуживает также необычайно вкусная и разнообразная болгарская традиционная кухня, сохранившая свою аутентичность и самобытность.</p>
                <p>Характерные черты местной кухни — обилие зелени и трав, разнообразие специй и пряностей.</p>
                <p>Болгарские блюда немыслимы без мяса и множества разнообразных овощей, которые солят и маринуют, сушат, вялят, запекают, варят и фаршируют. Болгары любят и молочные продукты — кислое молоко, простокваша, айран, кефир, йогурты и конечно разнообразные сыры, почитаемые гурманами во всем мире.</p>
                <p>Туристам непременно следует отведать и знаменитые национальные супы — чорба и таратор.</p>
                <p>Сладкоежки обязательно придут в восторг от «мелбы» — это местное мороженое со взбитыми сливками, фруктами, орешками и сиропом. </p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официальные праздники:</h6>
                        <ul>
                            <li>1 января – Новый год</li>
                            <li>3 марта – День освобождения Болгарии от Османского ига</li>
                            <li>март (апрель) – Пасха</li>
                            <li>1 мая – Праздник труда</li>
                            <li>6 мая – День храбрости и болгарской армии</li>
                            <li>24 мая – День болгарской культуры и славянской письменности</li>
                            <li>6 сентября – День объединения Болгарии</li>
                            <li>22 сентября – День независимости Болгарии</li>
                            <li>1 ноября – День народных будителей</li>
                            <li>24 декабря – Сочельник</li>
                            <li>25 - 26 декабря – Рождество Христово</li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">народные праздники:</h6>
                        <ul>
                            <li>14 февраля – Трифонов день</li>
                            <li>1 марта – Баба Марта</li>
                            <li>8 марта – Международный женский день</li>
                            <li>21 мая – День равноапостольных Константина и Елены</li>
                            <li>1 июня – День защиты детей</li>
                            <li>2 июня – День памяти павших за свободу Болгарии</li>
                            <li>15 сентября – День знаний</li>
                            <li>18 августа – Праздник Святого Ивана Рильского</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Климат</h2>
                <p>Болгарские климатические условия достаточно разнообразны благодаря гористой местности, служащей естественным ограждением для воздушных масс, в результате чего создается резкая температурная разница на близлежащих территориях.</p>
                <p>На побережье Чёрного моря и на юге Болгарии климат приближен к средиземноморскому, на остальной части страны — континентальный.</p>
                <p>Летом больше сказывается влияние средиземноморского климата — средние температуры самого теплого месяца июля составляют +28°C на юге и от +18°C до +24°C на севере. Зимой же средняя температура от -2°C до +2°C (в январе).</p>
                <p>Среднегодовое количество осадков от 730 мм на равнинной местности до 1000 мм в горах. В курортной зоне большая часть осадков приходится на зимнее время, летом же, особенно в августе, осадки минимальны.</p>
                <p>Температура Чёрного моря в пляжный сезон комфортная (до +25°C).</p>
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
                <p>Болгария не является частью Шенгенской Зоны. Для граждан Казахстана въезд на территорию Болгарии визовый. Сроки оформления визы составляют 3 - 10 дней.</p>
                <p>Перечень документов для открытия визы:</p>
                <ul>
                    <li>Загранпаспорт</li>
                    <li>Фото 3,5х4,5 (2 шт.)</li>
                    <li>Туристический ваучер или приглашение</li>
                    <li>Финансовая гарантия (с расчетом 50 €/день)</li>
                    <li>Медицинская страховка (копия)</li>
                    <li>Авиабилеты (копия)</li>
                    <li>Справка с места работы (отмечается должность, заработная плата, стаж работы)</li>
                    <li>Анкетные данные  (указывается ФИО, место и даты рождения родителей, супруга и детей)</li>
                    <li>Нотариальные доверенности на детей, не достигших совершеннолетнего возраста</li>
                    <li>Доверенность на подачу документов в посольство</li>
                    <li>Домашний адрес и телефон</li>
                </ul>
                <p><i class="icon icon-warning"></i> Представленные данные являются ознакомительными, за более точной информацией нужно обращаться в визовый центр.</p>
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

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card">
                                <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+бц+аружан&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                                <div class="card-body">
                                    <h5>Визовый центр в Астане</h5>
                                    <p>Астана, Жансугурова 8/1 (БЦ Аружан), 5 этаж, офис 507</p>
                                    <p><i class="icon-phone"></i> +7 727 3505120</p>
                                    <p><i class="icon-link"></i> <a href="http://www.bulgariavisa-kazakhstan.com/contactus.html" target="_blank">www.bulgariavisa-kazakhstan.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <iframe src="https://www.google.com/maps/embed/v1/search?q=алматы,+тимирязева+28+в,+(бц+гранд+алатау)&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                                <div class="card-body">
                                    <h5>Визовый центр в Алматы</h5>
                                    <p>Алматы, Тимирязева 28 В, (БЦ Гранд Алатау), 5 этаж, офис 502</p>
                                    <p><i class="icon-phone"></i> +7 727 3505120</p>
                                    <p><i class="icon-link"></i> <a href="http://www.bulgariavisa-kazakhstan.com/contactus.html" target="_blank" rel="nofollow">www.bulgariavisa-kazakhstan.com</a></p>
                                </div>
                            </div>
                        </div>
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
        <p>Нет ограничений по ввозу/вывозу валюты. Гражданам стран, не входящих в ЕС, необходимо декларировать суммы свыше 10 тыс. евро.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Лица из стран, не входящих в ЕС, достигшие 17-летнего возраста, имеют право на беспошлинный ввоз сигарет (200 штук) или сигарилл (100 штук) или сигар (50 штук). Допускается также ввоз одного литра крепких алкогольных напитков или до двух литров вина.</p>
        <p>Граждане государств-членов ЕС, достигшие 17-летнего возраста, могут провезти без пошлины 10 литров крепкого алкоголя или 20 литров вина, или 110 литров пива. Разрешается также ввоз сигарет (800 штук) или сигарилл (400 штук), или сигар (200 штук).</p>

        <h5>Оружие и наркотики</h5>
        <p>Категорически запрещен ввоз и вывоз любых наркотических средств и оружия.</p>

        <h5>Животные и растения</h5>
        <p>Животные, растения и продукты растительного происхождения подлежат осмотру представителями карантинной службы.</p>
        <p>Домашние питомцы должны быть вакцинированы против бешенства. Справка о соответствующей прививке оформляется не позднее чем за 30 дней до даты въезда на территорию Болгарии, но не ранее чем за 12 месяцев. Также не раньше 5 дней до отъезда должна быть оформлена справка международного образца.</p>

        <h5>Прочее</h5>
        <p>Имеются ограничения на ввоз чая и кофе — до 100 г и 500 г соответственно.</p>

        <h4 class="mt-4 mb-2">Запрещен ввоз/вывоз</h4>
        <ul>
            <li>сильнодействующие психотропные вещества</li>
            <li>охраняемые виды растений и животных</li>
            <li>предметы, имеющие историческую или культурную ценность</li>
            <li>молочные, мясосодержащие продукты, шоколадные конфеты. Запрет снят с продуктов детского питания и препаратов для людей, имеющих хронические заболевания — в данном случае продукты питания (до 2 кг) необходимо тщательно упаковать</li>
        </ul>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В городах Болгарии туристы могут перемещаться на автобусах, троллейбусах и трамваях. В Софии имеется метрополитен, представленный одной линией. Однако общественный транспорт зачастую переполнен и находится не в самом лучшем техническом состоянии, кроме маршруток в Софии, где автопарк полностью обновлен.</p>
                <p>Довольно доступны по цене услуги такси. Обычно к авто прикреплен прейскурант цен, включающий также тарифы на провоз багажа, время простоя, но некоторые водители предлагают договориться о стоимости проезда, в таких случаях туристы могут сторговаться.</p>
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
                                <div>Единый проездной</div>
                                <span>0,28-0,4 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Двойной билет</div>
                                <span>0,6 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 0,5 EUR за 1 км</span>
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
                <p>Дороги Болгарии соответствуют европейскому уровню, движение правостороннее. Правила дорожного движения мало чем отличаются от казахстанских.</p>
                <p>Часть дорог платная, для передвижения по таким дорогам необходимо приобретать виньетку (наклейка на лобовое стекло) — это своего рода автомобильный налог.</p>
                <p>Парковки в городах в рабочее время преимущественно платные (1-2 BGN/час).</p>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Bulgaria Road Trip 2016. Дороги Болгарии, София, Несебр и Варна" src="https://i.ytimg.com/vi/3iI7OxLIpKI/hqdefault.jpg"
                             class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/3iI7OxLIpKI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                    mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Дороги Болгарии - София, Несебр и Варна
                        <br>© Michael Kush 2016</figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <!--<h6 class="title-decorative">Казахстанское водительское удостоверение</h6>-->
                            <p>Граждане Казахстана, достигшие 21-летнего возраста, при наличии международного водительского удостоверения, имеют право на управление автомобилем.</p>
                        </div>
                    </div>
                </div>

                <div id="block-fuel"></div>
            </div>
        </div>

        <h3>Аренда авто</h3>
        <p>Аренда автомобиля в Болгарии не представляет сложности.</p>
        <p>Можно забронировать автомобиль заранее в специальных интернет-сервисах или непосредственно на месте. Для подписания договора аренды требуются водительские права и загранпаспорт. Ориентировочная стоимость проката — 25-60 BGN в сутки, она включает НДС, страховку, и транспортный налог.</p>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Для граждан Болгарии медицина бесплатная. Жители страны в обязательном порядке платят медицинские отчисления сами, либо за них это делает работодатель.</p>
        <p>Для туристов медицинские услуги оплачиваются за счет страховки. Или же можно воспользоваться услугами частных клиник и покрывать расходы самостоятельно.</p>
        <p>Необходимо знать, что некоторые виды лекарственных препаратов отпускаются в аптеках только при наличии рецепта (рецепт может быть выписан в другой стране).</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь</h2>
                <p>Мобильная связь в Болгарии предоставляется следующими операторами:</p>
                <ul>
                    <li>M-Tel - <a href="http://www.mtel.bg/bg" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Telenor BG - <a href="http://www.telenor.bg/bg" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Vivacom - <a href="http://www.vivacom.bg/bg" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>

                <p>Выгоднее приобретать местную сим-карту, чем совершать звонки в роуминге.</p>
                <p>Сим-карты продаются повсеместно - в аэропортах, в торговых комплексах, салонах сотовой связи.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Интернет в Болгарии" src="https://i.ytimg.com/vi/N7lYaI-Pyqk/maxresdefault.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/N7lYaI-Pyqk?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                    mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Интернет в Болгарии<br>© Дмитрий Иванов 2016</figcaption>
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
                                <div>Скорая помощь</div>
                                <span>150</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная команда</div>
                                <span>160</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>166</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дорожная полиция</div>
                                <span>165</span>
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

                <?= $this->render('_electricity', $country) ?>
            </div>
        </div>
    </div>
</section>

<section id="prices" class="bg-white">
    <div class="container">
        <h2>Цены</h2>
        <p>По питанию самый выгодный вариант — самостоятельно готовить пищу, а продукты покупать в магазине, супермаркете или на рынке.</p>
        <p>Вот список примерных цен на начало 2018 года:</p>
        <ul>
            <li>вода (1,5 л) — 0,39 BGN</li>
            <li>бутылка вина — от 6,5 BGN</li>
            <li>хлеб (700 гр) — 0,96 BGN</li>
            <li>сахар (1 кг) — 1,29 BGN</li>
            <li>яйца (10 шт) — 1,99 BGN</li>
            <li>молоко (1 л) — 2,05 BGN</li>
            <li>макароны (400 гр) — 1,19 BGN</li>
            <li>растительное масло (500 мл) — 2,29 BGN</li>
            <li>сливочное масло (200 гр) — 2,32 BGN</li>
            <li>сыр (1 кг) — 7,73 BGN</li>
            <li>куриные окорочка (1 кг) — 2,99 BGN</li>
            <li>свинина (1 кг) — 8,65 BGN</li>
            <li>форель (1 кг) — 9,75 BGN</li>
        </ul>

        <p>Фрукты и овощи лучше брать на рынке - там и выбора больше, и цены ниже, и товары свежее. К тому же можно попробовать что-то на вкус перед покупкой. Выбирайте местные продукты, цены на них вдвое меньше импортных:</p>
        <ul>
            <li>персики — от 0,8 BGN</li>
            <li>яблоки — от 0,7 BGN</li>
            <li>сливы — от 1 BGN</li>
            <li>инжир — от 2 BGN</li>
            <li>виноград — от 1 BGN</li>
            <li>арбуз — от 0,5 BGN</li>
            <li>дыня — от 0,5 BGN</li>
        </ul>
    </div>
</section>

<section id="sight">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>