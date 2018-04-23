<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Королевство Дания</h1>
                <div class="lead">
                    <b>Столица</b>: Копенгаген 
                    <br>
                    <b>Официальный язык</b>: датский
                    <br>
                    <b>Валюта</b>: DKK — датская крона
                    <br>
                    <b>Территория</b>: 43 094 км² 
                    <br>
                    <b>Население</b>: 5,7 млн человек 
                    <br>
                    <b>Часовой пояс</b>: UTC+1. Разница с Астаной –4 часа. Осуществляется переход на летнее/зимнее время
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Denmark" src="https://i.vimeocdn.com/video/589909301_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/181373976?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© zenoyu, 2016</figcaption>
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
                <p>Королевство Дания располагается в Северной Европе и является самой южной из скандинавских стран. Граничит с Норвегией, Швецией и Германией. Омывается водами Балтийского и Северного морей. Территория государства охватывает 409 островов Датского архипелага и большой Ютландский полуостров.</p>
    
                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Столицей, а также самым крупным городом Дании является г. Копенгаген. Он располагается на трех островах: Зеландия, Амагер и Слотсхольмен.</p>
                <p>Копенгаген не раз признавали одним из самых экологически чистых городов среди столиц Европы и одним из самых здоровых городов благодаря активному и здоровому образу жизни горожан. Здесь множество парков и садов, а также повсеместно проложены велодорожки — больше половины жителей ездят на велосипеде по городу круглый год.</p>
                <p>Копенгаген многим известен как город Ганса Христиана Андерсена, именно поэтому главным символом столицы является памятник Русалочке.</p>
                <p>Это очень уютный и компактный город, небоскребы здесь отсутствуют, зато располагается множество старинных построек, парков, скверов и набережных.</p>
                <p>Главными достопримечательностями являются королевские замки Фреденсборг и Бернсторф, Национальный музей Дании, Королевский театр и многое другое.</p>
                <p>В центральной части города располагается райское для шопоголиков место — Строгет. Это одна из самых протяженных пешеходных улиц в Европе со множеством магазинов на любой вкус.</p>
                <p>Весной и летом в Копенгагене проходит масса интересных туристам культурных событий, например, Джазовый фестиваль и широко известный Копенгагенский карнавал.</p>
                <p>Вторым по величине городом Дании является г. Орхус, который находится в живописном месте на Ютландском полуострове. Путешественникам непременно стоит посетить Старый город Ден Гамле Бю, Замок Марселисборг, церковь Богоматери, музей Орхуса и Новую Ратушу.</p>
            </div>
        </div>

        <hr>

        <div class="row">           
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="wandering in COPENHAGEN" src="https://i.vimeocdn.com/video/644912366_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/191000437?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">wandering in COPENHAGEN<br>© Ria Ado 2016</figcaption>
            </figure>
                

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Лучшие путешествия.  Европа. Копенгаген и Дания.ts" src="https://i.ytimg.com/vi/OriX_7rZc40/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/OriX_7rZc40?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Лучшие путешествия.  Европа. Копенгаген и Дания<br>© Сергей Дмитриев 2016</figcaption>
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
        <p>Основная часть населения Дании имеет скандинавское происхождение, а малые группы составляют немцы, фризы, инуиты, фарерцы и иммигранты.</p>
        <p>Согласно официальным статистическим данным, более 80% датчан исповедуют лютеранство.</p>
        <p>Страна отличается высоким уровнем урбанизации — около 87% населения проживают в городах.</p>
        <p>Средняя продолжительность жизни составляет 82 года: 78 лет у мужчин и 86 лет у женщин.</p>

        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p>Менталитет датчан формировался под влиянием исторических, политических и экономических событий. Местных жителей отличают такие черты, как: дружелюбие, гостеприимство, законопослушность, приверженность традициям, любовь к комфорту и уюту. В Дании и других скандинавских странах есть даже такое понятие как «хюгге», обозначающее чувство удобства, уюта, удовлетворенности, безопасности и благополучия.</p>
                <p>В стране любят широко отмечать огромное количество праздников, как светских, так и религиозных (Рождество, Пасха, Троица), и языческих (Ивана Купала, Масленица).</p>
                <p>Одним из наиболее известных массовых гуляний в Дании является фестиваль Викингов, который проходит летом во Фредериксунне (о. Зеландия). Это целое театрализованное шоу, в котором датчане и гости страны могут принять участие, облачившись в традиционные наряды викингов. Зрители с замиранием наблюдают за рыцарскими турнирами и состязаниями лучников. И, конечно же, устраивается грандиозный пир, на котором подаются традиционные датские блюда и напитки.</p>
                <p>Национальная кухня этой прекрасной страны сочетает в себе наилучшие кулинарные традиции скандинавских стран, а также Германии.</p>
                <p>Путешественникам непременно стоит отведать главные датские блюда:</p>
                <ul>
                    <li>смёрребрёд — это ломтик белого или ржаного хлеба с маслом и разнообразной начинкой: лосось, крабы, ветчина, яйцо, сыр, овощи. Часто подается с овощным гарниром и соусом;</li>
                    <li>свинина с красной капустой и специями;</li>
                    <li>соленая курица в ананасах;</li>
                    <li>мясные ребрышки в пиве;</li>
                    <li>паштет из свиной печени с хрустящим луком;</li>
                    <li>ароматный кисель из ягод со взбитыми сливками.</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>март-апрель — Пасха</li>
                            <li>1 мая — День труда</li>
                            <li>5 июня — День конституции</li>
                            <li>24 июня — Летнее солнцестояние</li>
                            <li>10 ноября — День св. Мартина</li>
                            <li>24-26 декабря — Рождество</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ДАНИЯ. Средневековый Фестиваль, 2013 / Denmark. The European Medieval Festival, 2013" src="https://i.ytimg.com/vi/8NFGwK9icfQ/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/8NFGwK9icfQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Дания. Средневековый Фестиваль, 2013 / Denmark. The European Medieval Festival, 2013<br>© Olga Piskun 2013</figcaption>
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
                <p>Климат Дании умеренный морской. Зима здесь мягкая — средняя температура в январе около 0°C, а лето довольно прохладное — средняя температура в августе +15°C.</p>
                <p>Высокая влажность наблюдается круглый год, а количество пасмурных дней преобладает над солнечными. В год выпадает 600-800 мм осадков. Самый дождливый сезон приходится на осень.</p>
   
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
                <p>Дания относится к числу стран – участниц шенгенского соглашения. Виза для посещения данных стран гражданами Казахстана требует полного соблюдения правил Шенген зоны. Её можно оформить самостоятельно в консульстве или через турагентства.</p>
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
                <p>* Информация является ознакомительной, за точной информацией необходимо обращаться в консульство.</p>
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
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=г.алматы,+ул.мусабаева+4&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Консульство</h5>
                        <p>Визу в Данию гражданам Казахстана оформляет Генеральное консульство Венгрии в г. Алматы</p>
                        <p>г. Алматы, ул. Мусабаева 4</p>
                        <p><i class="icon-phone"></i> +7 (7272) 47-25-57</p>
                        <p><i class="icon-link"></i> <a href="http://www.mfa.gov.hu" target="_blank" rel="nofollow">www.mfa.gov.hu</a></p>
                    </div>
                </div>

                
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p>Прямые авиарейсы из Казахстана в Данию отсутствуют. Оптимальным вариантом является перелет из Астаны в Копенгаген с пересадкой в Москве или Киеве (авиакомпании Аэрофлот и UKRAINE IA).</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Дании - <a href="http://www.skm.dk/ministeriet/" target="_blank" rel="nofollow">skm.dk</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Гражданам Казахстана, достигшим 18-летнего возраста, разрешается беспошлинно ввозить до 200 сигарет и до одного литра крепких спиртных напитков (или 4 литра сухого вина).</p>

        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен (сумма свыше 10 тыс. USD подлежит обязательной декларации).</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Разрешен ввоз оружия для охоты и рыбалки и участия в соревнованиях (если срок пребывания в стране не превышает трех месяцев). При себе необходимо иметь национальное разрешение на оружие и заполненную анкету.</p>

        <h5>Художественные и культурно-исторические ценности</h5>
        <p>Из страны запрещен вывоз археологических находок.</p>

        <h5>Запрещены к ввозу:</h5>
        <ul>
            <li>наркотические средства и наркосодержащие лекарства;</li>
            <li>огнестрельное оружие, боеприпасы, взрывчатые вещества;</li>
            <li>мясные и молочные продукты (кроме детского питания и питания для людей с хроническими заболеваниями).</li>
        </ul>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система Дании</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Воздушное сообщение</h5>
                <p>На территории Дании находятся 12 аэропортов, самым крупным из которых является Каструл, расположенный в восьми километрах от Копенгагена. Он осуществляет как международные, так и внутренние рейсы.</p>

                <h5>Железная дорога</h5>
                <p>Общая протяженность железных дорог в стране около 2 800 км. Железнодорожная сеть связывает столицу и все крупные города, расположенные на разных островах: Эсбьерг, Хорсенс, Оденсе, Раннерс, Хернинг, Ольборг.</p>
                <p>Между островами Фюн и Зеландия переправа поезда производится на пароме.</p>
                <p>В стране действует система скидок для различных категорий населения — так, например, проезд бесплатный для детей до 4-х лет, а детям до 12-ти лет приобретается билет со скидкой 50%, существуют скидки для пенсионеров и для больших групп, перемещающихся вместе.</p>

                <h5>Автобусное сообщение</h5>
                <p>Наряду с железнодорожным транспортом популярно передвижение по стране на автобусах.</p>
                <p>Существуют дневные и ночные рейсы, а билеты являются едиными как для поездки на поезде, так и на автобусе.</p>
                

                <h5>Водный транспорт</h5>
                <p>В стране большую роль играет водный транспорт, а именно паромы, учитывая островное расположение государства. Они отличаются достаточно большим пассажиропотоком, поэтому рекомендуется приобретать билеты заранее. На ряд коротких рейсов оплата не требуется.</p>

                <h5>Велосипед</h5>
                <p>Дания — велосипедная страна. В городах для велосипедистов созданы все условия, поэтому почти половина жителей ездят на данном транспорте круглый год. Иностранные туристы также легко могут взять велосипед в аренду и последовать примеру датчан.</p>

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
                                <span>от 100 DKK</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>от 24,5 DKK</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 8 DKK за км</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Важная инфа для туристов! Общественный транспорт в Копенгагене. Дания" src="https://i.ytimg.com/vi/7mP5My0Bl7g/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/7mP5My0Bl7g?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Важная информация для туристов! Общественный транспорт в Копенгагене. Дания
                        <br>© SkyLine Z_Vester 2016</figcaption>
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
                <p>Общая протяженность автодорог в стране составляет более 73 тысяч км, из них около одной тыс. км — автомагистрали.</p>
                <p>Особенности дорожного движения в Бельгии:</p>
                <ul>
                    <li>движение является правосторонним;</li>
                    <li>высокое качество дорожного полотна;</li>
                    <li>ПДД не отличаются от правил других европейских стран;</li>
                    <li>все дороги являются бесплатными, исключение составляют мосты Эресуннский и Большой Бельт;</li>
                    <li>максимально допустимая скорость в черте города составляет 50 км/час, вне населенного пункта — 80 км/час, на автобане — 130 км/ч;</li>
                    <li>на автострадах повсеместно расположены камеры контроля скорости;</li>
                    <li> необходимо включать фары ближнего света вне зависимости от времени суток и погодных условий;</li>
                    <li>оплата штрафов производится на месте нарушения;</li>
                    <li>в городах большинство парковок платные в будние дни.</li>
                </ul>

                <h5>Аренда авто</h5>
                <p>В Дании действует большое количество фирм, предоставляющие услуги проката автомобиля.</p>
                <p>Для заключения договора аренды потребуются паспорт, водительские права международного образца, страховой полис и кредитная карта.</p>
                <p>Необходимо внимательно ознакомиться со всеми пунктами договора, а также осмотреть арендуемое транспортное средство на предмет царапин или иных повреждений и зафиксировать их документально.</p>
                <p>Минимальная стоимость проката автомобиля составляет 150 DKK в сутки.</p>
                    
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Республики Казахстан могут управлять транспортным средством на территории Дании при наличии водительского удостоверения международного образца.</p>
                        </div>
                    </div>
                </div>

                <div id="block-fuel"></div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Аренда авто в Дании. Как мы заправляли машину. Заправка самообслуживания" src="https://i.ytimg.com/vi/qo66y4_6B2U/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/qo66y4_6B2U?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Аренда авто в Дании. Как мы заправляли машину. Заправка самообслуживания<br>© Алексей Зимин 2017</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Дания характеризуется благополучной санитарно-эпидемиологической обстановкой и высоким уровнем развития системы здравоохранения.</p>
        <p>Все иностранные туристы имеют право на бесплатную экстренную медицинскую помощь при обострении хронической болезни или несчастном случае.</p>
        <p>Необходимо учитывать, что подавляющее большинство лекарственных препаратов в стране отпускается строго по рецепту врача. Аптеки работают в будние дни с 09:00 до 17:00, в субботу с 09:00 до 13:00.</p>
           

        <!-- <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a> -->
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь</h2>

                <p>Мобильная инфраструктура в стране находится на высоком уровне.</p>
                <p>Основными операторами сотовой связи являются:</p>
                <ul>
                    <li>Telenor - <a href="https://www.telenor.dk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Telia - <a href="https://www.teliacompany.com/en/about-the-company/markets-and-brands/denmark/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Lycamobile  - <a href="https://www.lycamobile.dk" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Lebara  - <a href="http://www.lebara.dk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Для гостей страны наиболее выгодными являются тарифы, основанные на предоплате (prepaid-tarif). Для таких тарифов не требуется заключение договора, а сим-карту можно приобрести по предъявлению паспорта в салонах связи и в сети маркетов «7-Eleven».</p>
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
                                <div>Единый экстренный номер</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span><nobr>114</nobr></span>
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