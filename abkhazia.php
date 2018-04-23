<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Абхазия</h1>
                    <div class="lead">
                        <b>Столица</b>: Сухум<br>
                        <b>Официальный язык</b>: абхазский, русский<br>
                        <b>Валюта</b>: RUB - российский рубль (100 копеек)<br>
                        <b>Территория</b>: 8665 км²<br>
                        <b>Население</b>: 243.5 тыс. человек<br>
                        <b>Часовой пояс</b>: GMT +3. Разница с Астаной -3 часа.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Mountains of Abkhazia. Nostalgia." src="https://i.vimeocdn.com/video/472183768_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/92438281?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Tengiz Tarba, 2014</figcaption>
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
                <p>Абхазия расположена в Закавказье, на побережье Черного моря. На севере граничит с Россией, с Краснодарским краем и Карачаево-Черкессией, на юге с Грузией, с районами Самегрело и Земо-Сванети. Туристам Абхазия предлагает 210 км черноморских пляжей и отроги главного кавказского хребта высотой до 3000 м. Горы занимают 75% территории всей страны.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>
                <p>Абхазия - традиционное туристическое направление с летним пляжным отдыхом и зимними горнолыжными курортами. Экскурсионная программа не менее насыщена, отдыхающих здесь ждут достопримечательности Сухума, изящная и цветущая Пицунда и горные пейзажи Гагр. </p>
                <p>Страна привлекает не только дешевым отдыхом, но и удивительной культурой, вкусной кухней и отменными винами. Отдыхая в Гаграх, обязательно стоит посетить виноградники, на которых расположены частные винодельни. Все экскурсии включают дегустацию местных сортов вина. Паломники ежегодно приезжают в Абхазию в Новый Афон, чтобы посетить его монастыри и пещеры, и гробницу Святого Иоанна Златоуста, расположенную в Сухумском районе.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Спящий край.Абхазия.Гагра.2017.РВ ТВ" src="https://i.ytimg.com/vi/wkyVuONLC9Q/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/wkyVuONLC9Q?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Спящий край.Абхазия.Гагра.2017.РВ ТВ<br>© Рязанские Ведомости 2017</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Видеофильм «Аҧсны. Абхазия - Страна Души» (2013)" src="https://i.ytimg.com/vi/4-55-pEGZ7U/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/4-55-pEGZ7U?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Видеофильм «Аҧсны. Абхазия - Страна Души» (2013)<br>© Данил Конищев 2013</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#auto">Автомобиль</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h3>Население</h3>
        <p>Абхазия многонациональна, к титульной нации относится 50% населения, а всего в стране насчитывается 67 наций и народностей. Кроме абхазов здесь живут русские 9%, грузины 20%, армяне 18%. По распространению языка лидирует абхазский, за ним следует русский, оба признаны официальным языком общения. В ходу также грузинский и армянский языки.</p>
        <p>Все абхазы исповедуют собственную древнюю религию - абхазский монотеизм. По исследованию ученых, она является древнейшей монотеистической религией, которая сохранилась до наших дней. При этом официально считается, что здесь распространено христианство 64%, ислам 14%, атеизм 8%, а 2% населения принадлежат к другим конфессиям.</p>
        <p>Абхазия считается страной долгожителей, здесь в селениях люди не редко живут и дольше 100 лет. Средняя же продолжительность жизни составляет 73 года: у мужчин 70, а у женщин 75 лет.</p>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Абхазии богата и разнообразна. Это древние храмы, многоголосые песнопения, традиционные игры и обряды, из которых вышел национальный театр. Не похожа на других и народная музыка, она использует такие оригинальные инструменты, как угловые арфы, цитры, двухсмычковые струнные апхерцы и оригинальную флейту ачарпын.</p>
                <p>Традиционные праздники Абхазии родились из древних магических ритуалов, до сих пор они отличаются театральностью и зрелищностью. Обязательным атрибутом каждого праздника будут национальные костюмы, музыка и танцы. Пышно празднуются как традиционно христианские, так и местные праздники. Одним из самых интересных считается местный новый год или день сотворения мира, отмечается 14 января. В этот день дома украшаются ветвями плюща и фундука, на стол подается мясо козла, вино льется рекой, а вокруг стола собирается вся семья, включая дальних родственников. Еще один интересный абхазский праздник Мшапы празднуется в середине весны, когда вокруг все цветет. Он особенно интересен в деревнях, где на площадях устраивают различные зрелищные мероприятия и развлечения для всех гостей. Тут же можно попробовать национальную кухню, особенно популярны в этот день абхазские пироги с мясом.</p>
                <p>Кухня Абхазии не оставит равнодушным ни одного гурмана. В ее основе мясо молодых животных, популярны ягнятина и телятина, которая готовится на огне или долго тушится, а также цыплята с аджикой и другими соусами. К мясу обязательно подают свежие или приготовленные овощи, без них не обходится ни одно застолье. На столе во время праздников, семейных обедов, да и в любом ресторане обязательно будет аджарский хачапур, а также местные сыры и вино.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 и 2 января - Новый год</li>
                            <li>7 января — Рождество Христово</li>
                            <li>14 января — Ажьырныхуа-Хечхуама (День сотворения мира, обновления)</li>
                            <li>8 марта — Международный женский день</li>
                            <li>1 мая — Праздник труда</li>
                            <li>9 мая — День Победы</li>
                            <li>30 сентября — День освобождения Республики Абхазия</li>
                            <li>26 ноября — День Конституции Республики Абхазия</li>
                            <li>август — Курбанныхуа (Курбан-Байрам)</li>
                        </ul>
                    </div>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Кухня Абхазии" src="https://i.ytimg.com/vi/smPFsFrxhRY/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/smPFsFrxhRY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Кухня Абхазии<br>© Alexander Rudenko 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <h2>Климат</h2>
        <p>Абхазия расположена в субтропиках. В приморской долине климат влажный, летом +25 ... +27 градусов, а зимой около +5. Температура воды колеблется от +12 до +25. Наиболее комфортное время для отпуска с июля по сентябрь, а сезон целиком длится с мая по октябрь.</p>
        <p>Если подниматься в горы, климат начинает меняться: влажность падает, а леса постепенно сменяются снежными шапками ледниками. На вершинах Кавказа снег не тает круглый год.</p>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Граждане Казахстана могут посещать Абхазию  <strong>без визы</strong> только с туристическими или деловыми целями на срок не более 14 дней. Для более продолжительного отдыха нужна будет виза.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно!</strong> Наземная граница с Россией проходится обязательно пешком. После паспортного и таможенного контроля можно продолжить путь на машине или автобусе.</p>
                    </div>
                </div>
                <p>На границе потребуется загранпаспорт и заполненная таможенная декларация. Граница обычно проходится быстро и не требует большого количества документов.</p>

                <h5>Въезд в страну</h5>
                <p>В Абхазии нет международного аэропорта, поэтому въезжать в страну удобнее всего со стороны Сочи, куда можно попасть любым транспортом. Прямых рейсов из Казахстана в Сочи нет, удобнее всего лететь из Алматы или Астаны через Москву. От Сочи и Адлера в Сухум, Гагры и Пицунду идут автобусы. Сообщение регулярное, в сезон количество рейсов значительно увеличивается.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> без визы</div>
                                <span>на 14 дней</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы с одной пересадкой</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Сочи - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Сочи - Алматы</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="https://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс с пересадкой</a>
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
        <p>Ввоз любой валюты на территорию страны декларируется при сумме свыше 10000 долларов. Вывоз не ограничен.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Алкоголь ограничен 2 л вина на человека и 1 л крепких алкогольных напитков. Можно провезти не больше 200 сигарет или 250 г табака.</p>

        <h5>Личные вещи</h5>
        <p>Количество личных вещей при ввозе и вывозе не ограничено, но есть список запрещенных продуктов. Кроме классических оружия и наркотиков он содержит продукты питания домашнего производства, поэтому купленные домашние вина и сыры на территории Абхазии необходимо съесть и выпить до выезда из страны. Заводские продукты, а также фрукты и овощи к провозу разрешены.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В стране есть единственный аэропорт в Сухуме, где базируются Абхазские авиалинии. Сложность только в том, что они совершают только внутренние рейсы, что выражается в воздушных экскурсиях для туристов. Передвигаться по стране можно автобусами и поездами. Железнодорожная ветка идет через всю страну от границы с Россией до границы с Грузией, но к сожалению ветку, идущую от Сухума в сторону Грузии, необходимо восстанавливать. Сейчас на поезде можно доехать от Сочи до Сухума. Удобнее всего пользоваться автобусом. Они идут во все курортные города и поселки не только на черноморском побережье, но и в горах. От Псоу до Сухума можно доехать всего за 200 рублей.</p>

                <h5>Городской транспорт</h5>
                <p>Практически во всех крупных городах страны развито внутреннее автобусное сообщение, в Сухуме есть еще и троллейбусы, также распространены маршрутные такси, которые ходят по маршрутам автобусов и троллейбусов. Стоимость проезда колеблется от 10 до 15 рублей. Метро в стране нет, но есть миниметро в Новом Афоне, которое возит туристов по знаменитым пещерам.</p>

                <h5>Такси</h5>
                <p>Такси распространено повсеместно, но счетчиков обычно нет, а если и есть - таксисты не любят их включать. Поэтому при посадке стоит оговорить цену заранее, рассчитывая от 20 рублей за км без оплаты посадки.</p>
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
                                <span>10-15 рублей</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>20 рублей за 1 км</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Общественный транспорт в Абхазии - Советы отдыхающим" src="https://i.ytimg.com/vi/VQ1vIUKjy5Y/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/VQ1vIUKjy5Y?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Общественный транспорт в Абхазии - Советы отдыхающим<br>© Вячеслав Трофимов 2016</figcaption>
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
                <h5>Дорожное движение</h5>
                <p>Путешествовать на автомобиле по Абхазии очень удобно, но лучше приезжать на своем авто или брать в аренду в России, так как здесь фирмы по прокату еще не представлены. Также можно договориться с местными водителями такси, чтобы они возили вас по достопримечательностям целый день или на какую-то определенную поездку, например в Новый Афон. При въезде в страну потребуется специальная страховка для автомобиля. Правила дорожного движения ничем не отличаются, и соблюдать их надо внимательно, так как штрафы очень высоки. На многих дорогах установлены камеры, а в местах с ограничением скорости часто можно встретить полицейскую засаду.</p>

                <h5>Аренда авто</h5>
                <p>Взять авто в аренду можно только в Сочи, и то не все компании предоставляют машины с международными страховками, на которых можно выезжать за пределы России. Для подписания договора потребуются национальные права старше года, возраст от 21 года и залог за машину наличными или на банковской карте. Сумма залога в каждой компании своя.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span>от 35 рублей за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Бензин и дороги в Абхазии. Цены на бензин и заправки Абхазии. Движение авто в Абхазии. Советы" src="https://i.ytimg.com/vi/dPmrb80Awh4/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/dPmrb80Awh4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Бензин и дороги в Абхазии. Цены на бензин и заправки Абхазии. Движение авто в Абхазии. Советы<br>© Детки в Чемоданах 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Омане</h2>
        <p>Абхазия относится к безопасным странам для путешествий по инфекционному уровню. Никакие прививки для ее посещения не нужны. Во время отдыха в горах или на море стоит соблюдать обычные меры предосторожности: это защита от солнечных лучей и перегрева и соблюдение техники безопасности в горах. Медицина находится на среднем уровне, больницы и поликлиники есть в любом крупном городе. Обслуживание для граждан бесплатное, но для туристов платное. Для посещения лучше оформить обычную страховку путешественника.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь представлена 2 основными операторами:</p>
                <ul>
                    <li>Аквафон - <a href="http://www.aquafon.com" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>А-Мобайл - <a href="http://www.a-mobile.biz" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Абхазия имеет отличную мобильную связь, которая покрывает всю страну, для выгодных звонков и мобильного интернета нужно купить сим-карту у любого из 2 операторов связи. Позвонить в Казахстан можно за 9 руб/мин, но выгоднее всего подключить пакет мобильного интернета на весь период отдыха.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Абхазии явление привычное, его можно встретить во многих отелях, кафе и ресторанах в столице и курортной зоне. В городских парках и скверах точек доступа пока нет.</p>
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
                                <span>01</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>02</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>03</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Служба спасения с мобильных телефонов</div>
                                <span>911</span>
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