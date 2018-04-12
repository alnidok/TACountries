<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Узбекистан</h1>
                <div class="lead">
                    <b>Столица</b>: Ташкент<br>
                    <b>Официальный язык</b>: узбекский<br>
                    <b>Валюта</b>: UZS — узбекский сум<br>
                    <b>Территория</b>: 447 400 км²<br>
                    <b>Население</b>: 31,8 млн. человек<br>
                    <b>Часовой пояс</b>: UTC+5. Разница между Узбекистаном и Астаной +1 час
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Uzbekistan - Along the Silk Road" src="https://i.vimeocdn.com/video/527064525_1280x720.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/116112057?autoplay=1" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Markus Eichenberger Photo & Film, 2015</figcaption>
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
                <p>Республика Узбекистан — государство в Средней Азии, расположенное в центральной ее части. Граничит с Киргизией, Казахстаном, Туркменией, Афганистаном и Таджикистаном.</p>
                <p>Рельеф страны многообразен, но большие территории неблагоприятны для жизни: это горы, степи и пустыни. Исторически города в Узбекистане основывались в речных долинах.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Самый крупный город в Узбекистане — Ташкент (2,5 млн. человек), он входит в пятерку крупнейших городов по численности населения среди стран СНГ.</p>
                <p>В столице удивительным образом сочетаются древние постройки, европейская архитектура и современные высотки бизнес-центров.</p>
                <p>Одним из главных мест, с которого начинается знакомство туристов с Ташкентом, является площадь Хаст-Имам, расположенная в старом городе в окружении глинобитных домов. В этом религиозном центре находятся мечеть Тилла-Шейха, мавзолей св. Абу-Бакра Каффали Шаши, библиотека восточных рукописей, Исламский институт.</p>
                <p>Как и любой восточный город, Ташкент славится множеством городских рынков и базаров. Самые известные среди них — Чорсу и Эски-Жува. Здесь огромный выбор текстиля, посуды, ковров, сладостей, сухофруктов, меда и орехов, риса и много чего другого.</p>
                <p>Рестораны и гостиничные комплексы порадуют туристов европейским уровнем комфорта и качеством обслуживания.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Tashkent City" src="https://i.ytimg.com/vi/YfUh0M80TH0/maxresdefault.jpg" class="bg-image" />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/YfUh0M80TH0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                            mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Tashkent City
                    <br>© Aleksey Tudakov 2015</figcaption>
            </figure>

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Узбекистан, древняя культура, взгляд в будущее." src="https://i.ytimg.com/vi/I__Rpr-IuYQ/maxresdefault.jpg" class="bg-image"
                    />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/I__Rpr-IuYQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                            mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Узбекистан, древняя культура, взгляд в будущее.
                    <br>© greenman 2016</figcaption>
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
        <p>Узбекистан многонационален — здесь проживают узбеки (более 80%), таджики (5%), а также казахи, киргизы, туркмены, русские.</p>
        <p>Более 90% населения говорят на узбекском, помимо этого в городах около 5% жителей владеют русским языком.</p>
        <p>Более 95% жителей Узбекистана исповедует ислам, около 3% — христианство.</p>
        <p>Соотношение численности мужчин и женщин примерно равное. Средняя ожидаемая продолжительность жизни в стране составляет 72.5 года: 69.5 лет для мужчин и 75,7 лет для женщин.</p>
        
        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row justify-content-between">
            <div class="col-md-6">
                <p>
                    <i class="icon-link"></i> Министерство Культуры Республики Узбекистан -
                    <a href="http://www.madaniyat.uz/"
                        target="_blank" rel="nofollow">madaniyat.uz</a>
                </p>
                <p>Культурное наследие Узбекистана, отличающееся колоритностью и самобытностью, формировалось тысячелетиями под влиянием различных народностей, населявших данные территории.</p>
                <p>Основу всех узбекских традиций составляют ценность семьи, почитание старших, гостеприимство, содружество, бережное отношение к своей истории и религиозность.</p>
                <p>Особенно ярко культурные традиции и обычаи проявляются в народной музыке и танцах, живописи, ремеслах (ковроткачество, шитье, керамика, чеканка, резьба по дереву, лаковая роспись и пр.), особенностях национальной одежды и кухни.</p>
                <p>Женскую национальную одежду составляют прямое платье «куйлак» длиной по щиколотку с длинными рукавами и шаровары «лозим».</p>
                <p>Мужской комплект одежды — это хлопковая рубаха и широкие штаны «иштон», подвязываемые на поясе платком.</p>
                <p>Верхней одеждой как для мужчин, так и для женщин служил длинный и свободный халат «мурсак».</p>
                <p>Узбекистан славится традиционной национальной кухней — она считается самой разнообразной и вкусной в Азии, а многие блюда готовятся по старинным рецептам. Ее основу составляют пряные и сытные мясные блюда (шашлык, манты, кебаб, казан-кабоб и др.), наваристые супы (шурпа разных видов), обилие овощей и трав, восточные сладости и многообразная выпечка.</p>
                <p>Символ узбекской кухни — это, конечно же, плов. Ему посвящено несметное количество притч и легенд, а рецептов его приготовления насчитывают более тысячи.</p>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>14 января — День защитников Родины</li>
                            <li>8 марта — Международный женский день</li>
                            <li>21 марта — Праздник Наурыз</li>
                            <li>9 мая — День Победы</li>
                            <li>27 июня — День работников печати и СМИ</li>
                            <li>1 сентября — День Независимости</li>
                            <li>1 октября — День учителя</li>
                            <li>8 декабря — День конституции</li>
                            <li>Мусульманские праздники – Ураза Байрам, Курбан айт</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Узбекские фрукты и овощи. Базары Узбекистана. Дары Узбекистана." src="https://i.ytimg.com/vi/E8S_8-hegiw/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/E8S_8-hegiw?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Узбекские фрукты и овощи. Базары Узбекистана. Дары Узбекистана.
                        <br>© Central Asia Travel 2014</figcaption>
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
                <p>Климат в стране резко-континентальный — характеризуется большой амплитудой ночных и дневных, зимних и летних температур.</p>
                <p>Средняя температура в январе составляет от +3 °C на юге до −8 °C на севере (до -16°C в горах), в июле от +26°C на севере до +42°C на юге страны.</p>
                <p>Среднегодовое количество осадков не превышает 200-300 мм.</p>
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
                <p>Для граждан Республики Казахстан въезд на территорию Узбекистана является <strong>безвизовым</strong>, пребывание в стране сроком до 5 дней регистрации не требует, свыше 5 дней — необходима регистрация (временная прописка) по месту проживания.</p>
                <p>Длительность действия регистрации определяется целью пребывания в стране и составляет от 3 до 6 месяцев, по истечению этого времени гражданин Республики Казахстан должен покинуть территорию Узбекистана.</p>
                <p>Проживание иностранца в Узбекистане по поддельным документам и/или без регистрации, уклонение от выбытия из страны по окончания срока регистрации влечет применение крупных штрафных санкций или депортацию из Республики Узбекистан.</p>
                <p>Прямые рейсы Астана-Ташкент осуществляются авиакомпаниями Эйр Астана и Узбекистон хаво йуллари 4 раза в неделю.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i> Виза не требуется
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-news mr-1"></i> Регистрация<br><span class="small">если больше 5 дней</span></div>
                                <span>обязательна</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=алматы,+ул.+барибаева,++36&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Республики Узбекистан</h5>
                        <p>Алматы, ул. Барибаева,  36</p>
                        <p><i class="icon-phone"></i> +7 (7272) 91-17-44</p>
                        <p><i class="icon-link"></i> <a href="http://www.uzembassy.kz" target="_blank" rel="nofollow">www.uzembassy.kz</a></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6">
                            <b>Прямые авиарейсы</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Астана-Ташкент</div>
                                <span>4 раза/нед</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="https://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p>
            <i class="icon icon-link"></i> Сайт таможенной службы Республики Узбекистан -
            <a href="http://www.customs.uz/ru/"
                target="_blank" rel="nofollow">customs.uz</a>
        </p>

        <p>При въезде на территорию Узбекистана в пункте пропуска необходимо в обязательном порядке заполнить таможенную декларацию (в 2-х экземплярах, один из них следует сохранить до выбывания из страны).</p>
        <p>В декларации указываются ввозимые/вывозимые денежные средства и все ценные предметы.</p>
        <p>Правонарушитель, уклоняющийся от декларирования, привлекается к уголовной или административной ответственности согласно законодательству Республики Узбекистан.</p>
        <p>На вывозимые из Узбекистана ценные предметы и предметы культуры (например, антиквариат, иконы, ковры) необходимо иметь чеки и сертификат о том, что объекты не представляют исторической ценности.</p>

        <h5>Запрещены к ввозу на территорию Узбекистана:</h5>
        <ul>
            <li>аудио- и видеоносители, печатные произведения, рукописи, пропагандирующие насилие, терроризм, подрывающие государственный и общественный строй, разжигающие межнациональные, политические или иные конфликты</li>
            <li>материалы религиозного содержания (печатная продукция, аудио- и видеоносители), содержащие информацию об идеологии, истории, основах различных религий. Для собственных нужд допустимо ввозить не более 3-х экземпляров каждого наименования после проведения религиоведческой экспертизы (если они не входят в список запрещенной продукции)</li>
            <li>наркотики и психотропные вещества</li>
            <li>животные и растения, занесенные в Красную книгу (без особого разрешения)</li>
            <li>ювелирные изделия для коммерческих целей</li>
            <li>радиоэлектронные и высокочастотные устройства (без специального разрешения Министерства связи РУ)</li>
            <li>продукция растительного и животного происхождения (без разрешения санитарно-эпидемиологической службы)</li>
            <li>озоноразрушающие вещества (без разрешения Государственного комитета по охране природы РУ)</li>
        </ul>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система Узбекистана</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В Узбекистане хорошо развиты автомобильный, железнодорожный, речной и воздушный виды транспорта.</p>
                <h5>Железная дорога</h5>
                <p>Существуют поезда обычного вида и современные суперскоростные (например, «Шарк», «Насаф» и «Афросиаб»), отличающиеся повышенной комфортностью.</p>

                <h5>Воздушный транспорт</h5>
                <p>В Узбекистане 11 международных аэропортов, самый крупный из них расположен в Ташкенте. Перелеты совершают авиакомпании «Uzbekistan Airways» и «Samarkand Airways».</p>
                <h5>Метро</h5>
                <p>В Ташкенте функционирует метрополитен, включающий в себя три линии и 29 станций. Метро работает каждый день с 06:00 до 00:00. Билеты можно приобрести на любой станции.</p>
                <h5>Автобусы</h5>
                <p>Автотранспорт в стране представлен как междугородними, так и городскими автобусами. Проезд осуществляется по проездному билету, причем необходимо учесть, что помимо государственных маршрутов, существуют и частные, на которых проездные не действительны, а оплата производится непосредственно в автобусе.</p>
                <h5>Такси</h5>
                <p>Услуги такси довольно популярны среди туристов. Перед поездкой необходимо обязательно выяснить итоговую сумму оплаты.</p>
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
                                <div>1 поездка на автобусе</div>
                                <span>1 200 UZS</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной на месяц</div>
                                <span>120 000 UZS</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 2 000 UZS за км</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Метро в Ташкенте" src="https://i.ytimg.com/vi/Ozl3dVA1c8U/maxresdefault.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Ozl3dVA1c8U?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Метро в Ташкенте
                        <br>© настоящий узбекский 2018</figcaption>
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
                <p>Необходимо учитывать, что автомобили иностранных граждан, прибывших в Узбекистан на срок до полугода, подлежат постановке на учет в таможенных органах Республики Узбекистан.</p>
                <p>Правила вождения во многом сходны с казахстанскими.</p>
                <p>Из особенностей можно отметить следующие:</p>
                <ul>
                    <li>в населенных пунктах ограничение скорости составляет 70 км/час, вне населенных пунктов до 100 км/час</li>
                    <li>запрещена тонировка стекол автомобиля</li>
                    <li>стоянка и парковка разрешена везде, если нет запрещающего знака</li>
                    <li>услуги аренды автомобиля в Узбекистане пока не широко развиты, туристы чаще всего пользуются услугами такси и частных перевозчиков</li>
                    <li>автострахование является обязательным</li>
                    <li>при ДТП необходимо вызвать скорую помощь (при необходимости), дорожную полицию, а также страхового агента (телефон указан в страховом полисе)</li>
                </ul>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Республики Казахстан могут управлять автомобилем в Узбекистане при наличии международного водительского удостоверения. Национальные водительские права действительны, если соответствуют требованиям Конвенции о ДД, при наличии их перевода.</p>
                        </div>
                    </div>
                </div>

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
                                <div>АИ-95</div>
                                <span>7 200 UZS за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>9 000 UZS за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>8 500 UZS за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Таинственный Узбекистан.Дорога на Майданак.Лангар." src="https://i.ytimg.com/vi/rSXW_CZmMDE/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/rSXW_CZmMDE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Таинственный Узбекистан.Дорога на Майданак.Лангар.
                        <br>© Евгений Чубко 2015</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Граждане Республики Казахстан могут получить медицинские услуги на платной основе, экстренная мед. помощь оказывается бесплатно (в рамках соглашения стран СНГ).</p>
        <p>Иностранным гражданам во избежание проблем со здоровьем рекомендуется:</p>
        <ul>
            <li>учитывать климатические особенности в летний период, особенно лицам с хроническими заболеваниями</li>
            <li>соблюдать правила личной гигиены</li>
            <li>тщательно обрабатывать овощи и фрукты перед употреблением</li>
            <li>пить бутилированную воду</li>
            <li>пройти вакцинацию от гриппа в осенне-зимний период</li>
        </ul>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Связь</h2>
                
                <h5>Мобильная связь</h5>
                <p>Ключевые операторы сотовой связи в Узбекистане:</p>
                <ul>
                    <li>Билайн Узбекистан -
                        <a href="https://beeline.uz/tashkentskaya-obl/customers/mobile" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                    <li>Ucell -
                        <a href="https://ucell.uz/ru/subscribers" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                    <li>UMS Узбекистан -
                        <a href="http://www.ums.uz/ru/" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                    <li>UzMobile -
                        <a href="http://uzmobile.uz" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                    <li>Perfectum Mobile -
                        <a href="https://www.perfectum.uz/" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                </ul>
               
                <h5>Интернет</h5>
                <p>Довольно быстро в стране развивается интернет — в настоящее время крупным провайдером является Eastlink. Туристы в Ташкенте могут воспользоваться услугами интернет-кафе, также в крупных ресторанах и гостиничных комплексах обязательно имеются Wi-Fi точки.</p>
           
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
                                <div>Пожарная охрана</div>
                                <span>101</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Милиция</div>
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
                                <div>Аварийная газовая служба</div>
                                <span>104</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Служба спасения</div>
                                <span>105</span>
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
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <nobr>220 В</nobr>,
                                    <nobr>50 Гц</nobr>. Используются разъемы
                                    <a href="/journal/electric-sockets.html#typeC">типа C</a>,
                                    <a href="/journal/electric-sockets.html#typeF">типа F</a>,
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_c.svg" style="width:100px; max-width:100%;">
                                    <img src="/img/electric/type_f.svg" style="width:100px; max-width:100%;">
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