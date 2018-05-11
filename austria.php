<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Австрия</h1>
                <div class="lead">
                    <b>Столица</b>: Вена
                    <br>
                    <b>Официальный язык</b>: немецкий
                    <br>
                    <b>Валюта</b>: EUR — евро
                    <br>
                    <b>Территория</b>: 83 879 км²  
                    <br>
                    <b>Население</b>: 8,6 млн человек 
                    <br>
                    <b>Часовой пояс</b>: GMT+1. Разница с Астаной -5 часов (–4 в весенне-летний период). Осуществляется переход на летнее/зимнее время.
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="A Taste of Austria" src="https://i.vimeocdn.com/video/510079620_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/121649600?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© FilmSpektakel, 2015</figcaption>
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
                <p>Австрия — государство, расположенное в Центральной Европе. Граничит с Чехией, Словакией, Венгрией, Словенией, Италией, Лихтенштейном, Швейцарией и Германией. Около 70% территории страны занимают горы: Альпы Северного Тироля, Зальцбургские, Карнийские и Циллертальские Альпы.</p>
    
                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Австрия традиционно ассоциируется с лучшими горнолыжными курортами, классической музыкой, кристально-чистыми озерами, многочисленными старинными замками и, конечно же, блистательной Веной.</p>
                <p>Вена является столицей и самым крупным городом Австрии, а также его политическим и культурным центром. Это город музеев, старинных замков, галерей, оперных театров и парков — Вена неоднократно занимала первые места в мире по уровню качества и комфорта проживания (международные исследования Mercer).</p>
                <p>Достопримечательностей здесь так много, что придется изрядно потрудиться, чтобы посетить хотя бы малую их часть.</p>
                <p>Рекомендуем начать знакомство с Веной с ее символа — Собора Св. Стефана. Это грандиозное по архитектуре и масштабам сооружение в готическом стиле, а его 136-метровый шпиль видно практически с любой точки города.</p>
                <p>В австрийской столице также расположен один из самых выдающихся театров в мире — Венская опера, знаменитая своими традиционными ежегодными балами.</p>
                <p>Из дворцов здесь непременно стоит посетить Хофбург — это бывшая императорская резиденция и ныне действующий президентский дворец. Еще одной резиденцией императорской семьи Габсбург является дворцовый ансамбль в стиле барокко — Шенбрунн.</p>
                <p>Неотъемлемым атрибутом Вены и других австрийских городов являются многочисленные ресторанчики и кафе, часть из которых расположена прямо под открытым небом, где туристы в перерывах между осмотрами достопримечательностей могут неспешно попить кофе и отведать блюда замечательной австрийской кухни.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Exploring Vienna City, Austria | Christmas Time" src="https://i.vimeocdn.com/video/678064852_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/251643406?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Exploring Vienna City, Austria | Christmas Time<br>© Alexander Tovstiy 2018</figcaption>
            </figure>
                
                    
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Мастер путешествий -  Австрия: Вена и Дунай." src="https://i.ytimg.com/vi/FT1ZJx7V4Rk/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/FT1ZJx7V4Rk?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Мастер путешествий -  Австрия: Вена и Дунай.<br>© Sergey ST 2013</figcaption>
            </figure>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="#population">Население</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#culture">Культура</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#climate">Климат</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#visa">Въезд в страну</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#custom">Таможня</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#transport">Транспорт</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#auto">Авто</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#health">Здравоохранение</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#communication">Связь</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#sight">Что посмотреть</a>
            </li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>

        <p>Основной этнической группой в стране являются австрийцы (86%), к малым группам относятся словенцы, хорваты, словаки, чехи, венгры и цыгане.</p>
        <p>Большая часть жителей страны исповедуют католицизм (73%), остальные — лютеранство, ислам, православие и иудаизм.</p>
        <p>Ввиду благоприятных экологических условий и развитой системы здравоохранения в стране высокая средняя ожидаемая продолжительность жизни. На сегодняшний день ее показатель составляет 80 лет: 83 года для женщин и 77 лет для мужчин.</p>

        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>

                <p>Культура страны зародилась под влиянием Священной Римской Империи — в то время земли современного австрийского государства были ее частью, позднее влияние оказывали соседние страны — Италия, Германия, Польша, Чехия и Венгрия.</p>
                <p>На сегодняшний день архитектура, литература, классическая и народная музыка, танцы, театр, балет, кинематограф, философия являются весомой частью мирового культурного достояния.</p>
                <p>Австрийская культура отличается многогранностью, в ней гармонично переплетаются традиции и современность. Особенно это заметно в праздничных атрибутах, национальной одежде и кухне страны.</p>
                <p>Например, современная мода Австрийцев заимствует многие элементы традиционной национальной одежды — использование натуральных материалов, преимущественно льна и кожи местного производства, декорирование ручной вышивкой, преобладание природных оттенков и т.д.</p>
                <p>Довольно часто национальные костюмы надевают на различные фестивали, сопровождающимися народными гуляниями. Одними из них являются: Курбисфест — осенний фестиваль тыквы, Перхтенлауф — послерождественские ряженые гуляния, Бергфойер — праздник летнего солнцестояния и многие-многие другие.</p>
                <p>Говоря об австрийской культуре, нельзя не упомянуть традиционную кухню страны, отличительными чертами которой являются простота приготовления и насыщенный вкус блюд. Гостям страны непременно стоит попробовать:</p>
                
                <ul>
                    <li>венский шницель из свежайшей телятины;</li>
                    <li>франфуртер — венские поджареные сосиски;</li>
                    <li>кайзершмаррн — омлет с добавлением молока, муки, изюма и сахарной пудры;</li>
                    <li>бойшель — рагу из говяжьих, овечьих или бараньих потрохов под сливочным соусом с клецками;</li>
                    <li>Ростбиф Жирарди с шампиньонами и салом.</li>
                </ul>
                <p>Обед традиционно венчается чашечкой ароматного кофе с десертом, например, кусочком вкуснейшего шоколадного торта «Захер» или порцией знаменитого яблочного штруделя.</p>

            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января – Новый год</li>
                            <li>6 января – Праздник трех святых королей</li>
                            <li>март-апрель — Пасха</li>
                            <li>1 мая – День труда</li>
                            <li>15 августа – Успение Пресвятой Богородицы</li>
                            <li>26 октября – Национальный день Австрийской Республики</li>
                            <li>1 ноября – День Всех Святых</li>
                            <li>8 декабря – Праздник непорочного зачатия Девы Марии</li>
                            <li>25 декабря – Рождество Христово</li>
                            <li>26 декабря – День святого Штефана</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Австрия, Вена, бутерброд с колбасой по австрийски." src="https://i.ytimg.com/vi/tQDZlaw9q5Q/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/tQDZlaw9q5Q?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Австрия, Вена, бутерброд с колбасой по австрийски.<br>© greenman 2016</figcaption>
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

                <p>Климат Австрии умеренный, переходящий к континентальному в горных частях страны и на востоке. Зима мягкая на равнинных территориях (около 0ºС) и довольно холодная в горах (до -15ºС). Лето теплое и солнечное (от +20ºС до +26ºС).</p>
                <p>В западных регионах страны выпадает около 2000 мм осадков в год, а на востоке значительно меньше — до 800 мм.</p>

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

                <p>Австрия относится к числу стран – участниц шенгенского соглашения. Виза для посещения данных стран гражданами Казахстана требует полного соблюдения правил Шенген зоны. Её можно оформить самостоятельно в консульстве или через турагентства.</p>
                <p>Перечень необходимых документов для получения визы*:</p>
                <ul>
                    <li>анкета - заявление на визу;</li>
                    <li>загранпаспорт, срок действия которого заканчивается не раньше, чем за полгода до окончания срока действия визы;</li>
                    <li>цветное фото 3,5*4,5 см (2 шт.);</li>
                    <li>копия первой страницы загранпаспорта и копия предыдущих шенген виз;</li>
                    <li>справка с места работы с указанием должности, стажа работы, оклада;</li>
                    <li>доказательства платежеспособности (выписка по банковскому счету);</li>
                    <li>медицинский страховой полис;</li>
                    <li>бронь авиабилетов;</li>
                    <li>свидетельства о браке, рождении детей.</li>
                </ul>
                <p> Информация является ознакомительной, за точной информацией необходимо обращаться в консульство.</p>
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
            </div>
            <div class="col-md-4">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i> Шенгенская виза
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+космонавтов,+62&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Австрии</h5>
                        <p>Астана, Космонавтов, 62</p>
                        <p><i class="icon-phone"></i> +7 (7172) 97–78–78</p>
                        <p><i class="icon-link"></i> <a href="https://www.bmeia.gv.at/ru/oeb-astana/" target="_blank" rel="nofollow">www.bmeia.gv.at</a></p>
                    </div>
                </div>
                
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p>Вариантом перелета из Астаны в Вену является рейс с пересадкой в Минске (авиакомпания Белавиа).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Австрии - <a href="https://www.bmeia.gv.at/ru/oeb-moskau/reisen-nach-oesterreich/zoll-steuern/" target="_blank" rel="nofollow">bmeia.gv.at</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Гражданам Казахстана, достигшим 18-летнего возраста, разрешается беспошлинно ввозить до 200 сигарет и до одного литра крепких спиртных напитков (или 2 литра сухого вина).</p>

        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен (сумма свыше 10 тыс. USD подлежит обязательной декларации).</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Ввоз оружия возможен строго при наличии соответствующего разрешения от австрийского консульского загранучреждения.</p>

        <h5>Запрещены к ввозу/вывозу:</h5>
        <ul>
            <li>наркотические средства и наркосодержащие лекарства;</li>
            <li>мясные и молочные продукты (кроме детского питания и питания для людей с хроническими заболеваниями)</li>
            <li>огнестрельное оружие (кроме охотничьего), боеприпасы, взрывчатые вещества, фейерверки;</li>
            <li>редкие и исчезающие виды животных, растений и птиц;</li>
            <li>домашние животные без соответствующего ветеринарного сертификата;</li>
            <li>предметы искусства, обладающие исторической и/или художественной ценностью.</li>           
        </ul>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                
                <h5>Железнодорожный транспорт</h5>
                <p>Общая протяженность железных дорог в стране составляет более 6000 км.</p>
                <p>Отличительная особенность ж/д системы Австрии — эффективно составленное расписание и безупречная точность и четкость движения поездов.</p>
                <p>Билеты приобретаются в ж/д кассах, а также онлайн, стоимость проезда зависит от класса вагона и маршрута.</p>
                <p>В стране действует система скидок для различных категорий населения — так, например, проезд бесплатный для детей до 6-х лет, а детям до 15-ти лет приобретается билет со скидкой 50%, существуют скидки для пенсионеров и для больших групп, перемещающихся вместе.</p>

                <h5>Воздушный транспорт</h5>
                <p>На территории страны расположено 55 аэропортов, из них 6 являются международными: Вена, Грац, Инсбрук, Клагенфурт, Линц и Зальцбург.</p>
                <p>Крупнейшими австрийскими авиакомпаниями, совершающими международные рейсы, являются Austrian Airlines, Lauda Air и Tyrolean Airlines.</p>

                <h5>Автобусное сообщение</h5>
                <p>Автобусные маршруты в Австрии имеют вспомогательную функцию по отношению к железнодорожной системе страны. Дальние рейсы отсутствуют, действуют лишь пригородные, основная их задача — подвоз пассажиров к железнодорожным станциям.</p>
                
                <h5>Городской транспорт</h5>
                <p>Внутригородские перевозки в Вене и других населенных пунктах страны осуществляются метрополитеном, автобусами и троллейбусами. Проездные билеты приобретаются в кассах «Vorverkaufsscheine» или в киосках-автоматах.</p>
                <p>Также туристы могут воспользоваться услугами такси, оплата в котором производится по счетчику согласно принятым тарифам.</p>
                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6">
                            <b>Стоимость проезда</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Поезд</div>
                                <span>от 30 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной на 1 день</div>
                                <span>7,60 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>Проездной на 2 дня</div>
                                    <span>13,30 EUR</span>
                                </div>
                            </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной на 3 дня</div>
                                <span>16,50 EUR</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Проезд в Вене: Венское метро, цены и как купить билет" src="https://i.ytimg.com/vi/kp4SuBpOlq4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/kp4SuBpOlq4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Проезд в Вене: Венское метро, цены и как купить билет<br>© Kati Treitler 2017</figcaption>
                </figure>
                
            </div>
        </div>
    </div>
</section>

<section id="auto">
    <div class="container">
        <h2>Автомобиль</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
               
                <p>Общая протяженность автодорог в стране составляет более 200 тысяч км, все они с твердым покрытием и отличаются высоким качеством дорожного полотна.</p>
                <p>Особенности дорожного движения в Австрии:</p>
                <ul>
                    <li>движение является правосторонним;</li>
                    <li>ПДД схожи с правилами других европейских стран;</li>
                    <li>запрещено провозить в канистре более 10 литров топлива;</li>
                    <li>категорически запрещено использование антирадаров;</li>
                    <li>дети до 12 лет перевозятся в автокреслах, соответствующих росту и весу ребенка;</li>
                    <li>максимально допустимая скорость в черте города составляет 50 км/час, вне населенного пункта — 100 км/час, на автобане — 130 км/ч;</li>
                    <li>парковка запрещена при наличии желтой зигзагообразной линии разметки;</li>
                    <li>проезд по автомагистралям является платным, дорожный сбор зависит от весовой категории транспорта и временных показателей (10 дней, 30 дней, год);</li>
                    <li>обязательным видом страхования является страхование за ущерб, нанесенный третьим лицам.</li>
                </ul>

                <h5>Аренда авто</h5>
                <p>В Австрии действует большое количество фирм, предоставляющие услуги проката автомобиля.</p>
                <p>Для заключения договора аренды потребуются паспорт, водительские права международного образца и кредитная карта.</p>
                <p>Необходимо внимательно ознакомиться со всеми пунктами договора, а также осмотреть арендуемое транспортное средство на предмет царапин или иных повреждений и зафиксировать их документально.</p>
                <p>Минимальная стоимость проката автомобиля составляет 45 EUR в сутки. За дополнительную плату можно приобрести автокресло, багажник и навигатор.</p>              
                    
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Республики Казахстан могут управлять транспортным средством на территории Австрии при наличии водительского удостоверения международного образца.</p>
                        </div>
                    </div>
                </div>

                <div id="block-fuel"></div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Парковка в Австрии" src="https://i.ytimg.com/vi/Kllw8dSIJ_4/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Kllw8dSIJ_4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Парковка в Австрии<br>© KOTOLGA 2017</figcaption>
                </figure>               
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
        <p>Австрия характеризуется благополучной санитарно-эпидемиологической обстановкой и высоким уровнем развития системы здравоохранения.</p>
        <p>Медицинское страхование в стране является обязательным, для работающих граждан ее оплачивает работодатель, покрывая, тем самым, большую часть расходов на стационарное лечение и медикаменты.</p>
        <p>Иностранному туристу при посещении Австрии также необходимо оформление медицинского страхового полиса.</p>
        <p>Часть аптек в стране дежурят круглосуточно, служащие аптеки имеют право на консультации по приему того или иного медикамента.</p>
        
        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь и интернет</h2>
                <p>Сеть сотовой связи покрывает почти всю территорию Австрии, исключая лишь некоторые отдаленные высокогорные районы.</p>
                <p>Основными операторами связи являются:</p>
                <ul>
                    <li>А1 - <a href="https://www.a1.net/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>T-Mobile - <a href="https://www.t-mobile.at/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>3 Drei Austria - <a href="https://www.drei.at/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Все операторы предлагают два варианта подключения: по договору (Vertrag) и без договора (Wertkarte). Подробнее о тарифах можно узнать на сайтах компаний.</p>
                <p>Местные сим-карты можно приобрести в офисах операторов связи, киосках и супермаркетах. Стоимость такой карты зависит от оператора и пакета услуг — в среднем они обходятся от 5 до 20 EUR.</p>
                <p>Что касается интернета, то практически во всех гостиницах, ресторанах и кафе есть бесплатные wi-fi точки.</p>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6">
                            <b>Полезные телефоны</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>122</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span><nobr>133</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span><nobr>144</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый экстренный номер</div>
                                <span><nobr>112</nobr></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <?= $this->render('_electricity', $country) ?>
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