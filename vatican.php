<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Ватикан</h1>
                <div class="lead">
                    <b>Столица</b>: Ватикан
                    <br>
                    <b>Официальный язык</b>: латинский, итальянский
                    <br>
                    <b>Валюта</b>: EUR — евро
                    <br>
                    <b>Территория</b>: 0,44 км²
                    <br>
                    <b>Население</b>: 1 тыс. человек
                    <br>
                    <b>Часовой пояс</b>: UTC+1. Разница с Астаной -5 часов зимой и -4 часа летом
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Ватикан, мужской хор !" src="https://i.ytimg.com/vi/o5UJAvaWoxo/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/o5UJAvaWoxo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Анатолий Боголюбов, 2016</figcaption>
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
                <p>Ватикан — карликовое государство, расположенное на территории Рима. Является резиденцией высшего духовного руководства римско-католической церкви.</p>
    
                <!--Карта-->
                <?= $this->render('_map', $country) ?>
            
                <p>Ватикан — самое маленькое государство в мире, хранящее в себе массу загадок и тайн. Необычное здесь всё, начиная от строгого дресс-кода и заканчивая древней латынью — официальным языком страны.</p>
                <p>Ватикан начал свое существование в 326 г. как священное место католического культа у захоронения Св. Петра. До 15 века здесь была скромная неприметная базилика, но в 1506 году по велению Папы на этом месте решено было воздвигнуть грандиозный собор, ставший центром католичества и символом власти понтифика. Интерьер и фасад величественного здания украшают статуи Христа и апостолов, надгробия и памятники государственным деятелям. Собор Св. Петра сегодня является главной достопримечательностью как самого Ватикана, так и окружающего его Рима.</p>
                <p>Еще один символ государства — древнейший замок Сант-Анджело, который изначально был основан как мавзолей императора Адриана. С течением времени к мавзолею добавлялись надстройки и пристройки, пока замок не обрел современный облик.</p>
                <p>Крошечное государство располагает одними из самых обширных и выдающихся музеев в мире, которые в первую очередь известны благодаря прекрасным залам с полотнами великого Рафаэля и Сикстинской капелле с фресками не менее великого Микеланджело.</p>
                <p>Почти половину территории Ватикана занимают живописные Сады с обширной коллекцией растений, птиц и животных. Примечательно, что каждый Папа привносил в развитие местных садов что-то особенное. Так, если в 13 веке здесь произрастали, в основном, лекарственные растения, то уже в 15 веке сады стали использовать исключительно как декоративные. В конце 16 столетия Папа Григорий XIII возвел в парках звездную обсерваторию, а в 19 веке Лев XIII основал здесь Ватиканский зоопарк.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Ciudad del Vaticano" src="https://i.vimeocdn.com/video/107510174_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/17329351?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Ciudad del Vaticano<br>© trotamundos 2010</figcaption>
            </figure>
        
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="ВАТИКАН. Самое маленькое государство в государстве" src="https://i.ytimg.com/vi/n1OSQtDOLpE/hqdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/n1OSQtDOLpE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">ВАТИКАН. Самое маленькое государство в государстве<br>© Terra Inkognito</figcaption>
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

        <p>По данным на 2016 год в Ватикане проживает около 1 тыс. человек.</p>
        <p>Основная этническая группа — итальянская.</p>
        <p>Почти всё население является служителями Католической Церкви. Гражданство в Ватикане не может быть унаследовано или приобретено при рождении в государстве — его получают исключительно на основе служения Святому Престолу. Гражданство прекращает свое действие по завершении трудовой деятельности в стране.</p>
        <p>Официальными языками исторически являются латинский и итальянский. В деловой переписке часто используют французский. Также широко распространены английский, немецкий и испанский языки.</p>
        <p>Постоянным населением в Ватикане являются преимущественно мужчины, также в государстве проживают два монашеских ордена.</p>
        
        
        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p>Культура Ватикана имеет огромное международное значение. Наиболее активно она развивалась в эпоху Возрождения под влиянием нового веяния того времени — гуманизма. В крошечной стране бережно хранятся величайшие и редкие произведения скульптуры и живописи. Помимо главных религиозных и культурных памятников, Собора Св. Петра и Сикстинской капеллы, здесь можно увидеть работы выдающихся мастеров — Микеланджело, Рафаэля, Боттичелли и Бернини. Кроме этого, Ватикан располагает громадной библиотекой с обширной коллекцией книг, представляющих культурную, историческую и научную ценность.</p>
                <p>Главными составляющими повседневной жизни государства являются паломничество и туризм. Тысячи верующих устремляются сюда ради публичных месс Папы Римского, которые проводятся на площади Св. Петра или в Базилике Св. Петра.</p>
                <p>Ватикан отличается огромным консерватизмом. Все местные традиции и обычаи очень символичны и пропитаны глубоким смыслом. К примеру, по сей день выборы нового Папы Римского происходят в совете кардиналов в запертой на ключ комнате, а об исходе голосования окружающих оповещают дымом — белый дым из трубы сигнализирует о том, что Папа избран.</p>
                <p>Неудивительно, что в стране действует строгий дресс-код, соответствующий католическим традициям. Так, при посещении собора Св. Петра запрещается надевать юбки выше колен, рубашки с коротким рукавом, блузки с глубоким вырезом, одежду с неуместными надписями. Мужчинам следует снимать головные уборы. В соборе также запрещается курить, фотографировать и пользоваться мобильными телефонами.</p>
                
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый Год</li>
                            <li>6 января — Богоявление</li>
                            <li>11 февраля — основание Ватикана</li>
                            <li>13 марта — День избрания Франциска Папой Римским</li>
                            <li>19 марта — День Св. Иосифа</li>
                            <li>март-апрель — Пасха</li>
                            <li>23 апреля — День Св. Георгия</li>
                            <li>29 июня — День Павла и Петра</li>
                            <li>15 августа — Успение</li>
                            <li>1 ноября — День Всех Святых</li>
                            <li>8 декабря — Непорочное Зачатие</li>
                            <li>25 декабря — Рождество</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Микеланджело, потолок Сикстинской капеллы" src="https://i.ytimg.com/vi/SSbyMI5eYYM/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/SSbyMI5eYYM?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Микеланджело, потолок Сикстинской капеллы<br>© KhanAcademyRussian 2014</figcaption>
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
                
                <p>На территории государства господствует средиземноморский климат. Для него характерны жаркое сухое лето (около +27 °С) и мягкая дождливая зима (от +8 до +11 °С). Часто бывает ветрено с преобладанием западных и северных ветров.</p>
                <p>Идеальное время для посещения страны — с мая по сентябрь.</p>
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
                <p>Ватикан расположен на территории Италии, соответственно, для въезда в государство необходимо оформить шенгенскую визу.</p>
                <p>Перечень необходимых документов для получения визы*:</p>
                <ul>
                    <li>анкета - заявление на визу;</li>
                    <li>загранпаспорт, срок действия которого заканчивается не раньше, чем через шесть месяцев с момента окончания срока действия визы;</li>
                    <li>цветное фото 3,5*4,5 см (2 шт.);</li>
                    <li>копия страниц загранпаспорта и копия предыдущих шенген виз;</li>
                    <li>справка с места работы с указанием должности, стажа работы, оклада;</li>
                    <li>доказательства платежеспособности (выписка по банковскому счету);</li>
                    <li>медицинский страховой полис;</li>
                    <li>бронь авиабилетов;</li>
                    <li>свидетельства о браке, рождении детей.</li>
                </ul>
                <p>*Информация является ознакомительной, за точной информацией необходимо обращаться в консульство.</p>
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
            </div>
            <div class="col-md-4">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i>Шенгенская виза
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+мкр-н+чубары,+ул.+космонавтов,+62&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Италии</h5>
                        <p>Астана, мкр-н Чубары, ул. Космонавтов, 62</p>
                        <p><i class="icon-phone"></i>  +7 (7172) 24-33-90</p>
                        <p><i class="icon-link"></i> <a href="https://ambastana.esteri.it/ambasciata_astana/ru/" target="_blank" rel="nofollow">ambastana.esteri.it</a></p>
                    </div>
                </div>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <p>Вариантом перелета из Астаны в Рим является рейс с пересадкой в Москве (авиакомпания Аэрофлот).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <h5>Спиртное и сигареты</h5>
        <p>Гражданам Казахстана, достигшим 18-летнего возраста, разрешается беспошлинно ввозить до 200 сигарет и до одного литра крепких спиртных напитков (или 2 литра сухого вина).</p>
            
        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен (сумма свыше 10 тыс. EUR подлежит обязательной декларации).</p>

        <h5>Животные</h5>
        <p>Все домашние животные должны быть привиты и иметь международный медицинский сертификат.</p>

        <h5>Запрещены к ввозу/вывозу:</h5>
        <ul>
            <li>наркотические средства;</li>
            <li>огнестрельное оружие, боеприпасы, взрывчатые вещества;</li>
            <li>радиоактивные и ядовитые вещества;</li>
            <li>поддельные денежные банкноты;</li>
            <li>предметы, имеющую историческую и/или культурную ценность (без соответствующего разрешения);</li>
            <li>материалы, противоречащие морально-этическим нормам и разжигающие политические, религиозные и/или иные конфликты;</li>
            <li>животные и растения редких видов;</li>
            <li>картофель, шоколад, мясные и молочные продукты (кроме детского питания и питания для людей с хроническими заболеваниями).</li>
        </ul>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                             
                <p>Ватикан связан с окружающим миром при помощи железнодорожного транспорта, представленного одной веткой и связанного с железнодорожной сетью Италии.</p>
                <p>Само государство очень компактное, которое запросто можно обойти пешком, поэтому не приходится говорить о крупной транспортной системе. Между тем, в Ватикане действуют автобусные и троллейбусные маршруты. Билеты приобретаются в киосках на остановках и компостируются при входе самостоятельно. Стоимость дневного проездного — около 3,5 EUR.</p>
                <p>Передвигаться можно и на такси. Стоимость поездки рассчитывается согласно счетчику (около 0,7 EUR за км). Необходимо учитывать, что в ночное время стоимость проезда увеличивается на 25%, а раннее бронирование, простой и провоз крупногабаритного багажа оплачиваются дополнительно.</p>
                
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
                                <div>Автобус</div>
                                <span>от 1,5 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 0,7 EUR за км</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Покупка билетов на поезда внутри Рима линия FL: едем до Ватикана на электричке" src="https://i.ytimg.com/vi/VpCq_ShWJ9o/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/VpCq_ShWJ9o?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Покупка билетов на поезда внутри Рима линия FL: едем до Ватикана на электричке<br>© Италия для меня 2017</figcaption>
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
                <p>Дорожное движение в Ватикане правостороннее, правила вождения общеевропейские, однако есть некоторые особенности:</p>
                <ul>
                    <li>предусмотрены очень высокие штрафы за нарушение ПДД;</li>
                    <li>все парковки платные в рабочее время (от 2,5 EUR в час);</li>
                    <li>запрещено использование звукового сигнала в местах, обозначенных знаком "zona di silenzio" (большая часть территории Ватикана);</li>
                    <li>на многих улицах проезд автомобилей ограничен;</li>
                    <li>заправочные станции работают до 19:00;</li>
                    <li>обязательно использование ремней безопасности водителю и всем пассажирам;</li>
                    <li>дети до 10 лет перевозятся только в специальных автокреслах;</li>
                    <li>автострахование обязательно.</li>
                </ul>

                <h5>Аренда авто</h5>
                <p>На территории Ватикана управлять автомобилем имеют право только граждане государства.</p>
                <p>В качестве альтернативы можно арендовать мотоцикл или велосипед, к тому же передвигаться по городу на них гораздо быстрее и удобнее, ведь пробки не обошли стороной и этот город. Однако стоит помнить, что специальные велодорожки здесь отсутствуют, придется ездить по брусчатке.</p>
                
            </div>
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6">
                            <b>Стоимость топлива</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span>1,65 EUR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1,53 EUR за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>


                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="STREET VIEW: The Swiss Guard at Vatican in Rome in ITALY" src="https://i.ytimg.com/vi/q7z4ZqJGa0E/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/q7z4ZqJGa0E?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">STREET VIEW: The Swiss Guard at Vatican in Rome in ITALY<br>© Manfred Auer 2015</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
       
        <p>Санитарно-эпидемиологическая обстановка в государстве благоприятная.</p>
        <p>Система здравоохранения Ватикана сопряжена с итальянской. Медицинские услуги для иностранцев платные, причем стоимость их довольно высокая. Оформление страхового полиса обеспечивает покрытие всех расходов на медицинскую помощь при несчастном случае или форс-мажоре.</p>
        <p>На территории Ватикана расположена одна аптека — аптека Святого престола, в которой ассортимент лекарственных препаратов полностью соответствует католическим правилам и нормам. Здесь можно приобрести даже самые редкие медикаменты, произведенные в любой стране мира. К тому же благодаря уникальной налоговой политике государства стоимость любых препаратов и косметических товаров на 15–25 % ниже, чем в других европейских странах. На сегодняшний день аптека Ватикана является самой посещаемой в мире.</p>
        
        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь и интернет</h2>
                
                <p>Ватикан располагает собственной радиостанцией, спутниковыми телеканалами и доменом, однако пользуется услугами мобильной связи итальянских операторов:</p>
                <ul>
                    <li>Vodafone - <a href="http://www.vodafone.it/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Wind - <a href="http://www.wind.it/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>TIM - <a href="https://www.tim.it/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Для туристов компании предлагают предоплаченные тарифы, которые не подразумевают заключения контракта. Приобрести местную SIM-карту можно в специализированных офисах продаж в Риме при предъявлении загранпаспорта.</p>
                <p>При подключении пакетов интернета будьте внимательны, не забудьте выключить их перед отъездом, чтобы у вас неожиданно не вырос долг перед итальянским оператором за неиспользуемые услуги.</p>

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
                              <div>Полиция</div>
                              <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                              <div>Скорая медицинская помощь</div>
                              <span>113</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>115</span>
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