<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Ирландия</h1>
                    <div class="lead">
                        <b>Столица</b>: Дублин<br>
                        <b>Официальный язык</b>: ирландский, английский<br>
                        <b>Валюта</b>: EUR - евро (100 центов)<br>
                        <b>Территория</b>: 70 273 км²<br>
                        <b>Население</b>: 4.5 млн. человек<br>
                        <b>Часовой пояс</b>: GMT+0. Разница с Астаной -6 часов.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="View from Above- Ireland" src="https://i.ytimg.com/vi/JqkdB6nQJqI/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/JqkdB6nQJqI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© View from Above, 2016</figcaption>
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
                <p>Ирландия - изумрудная страна, названа так из-за зеленых долин и холмов, покрывающих всю ее территорию. Расположена на острове с северо-запада от Великобритании. Омывается водами Ирландского и Кельтского морей с одной стороны и Атлантического океана с другой. На севере граничит с Северной Ирландией - территорией, принадлежащей Соединенному королевству. </p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Основные достопримечательности Ирландии - это ее природа. Нет ничего величественней, чем бурная Атлантика, дикая красота Коннемары, вересковые пустоши и невероятные изумрудные долины. Города стараются не уступать, предлагая туристам обширную экскурсионную программу,  очарование старинных улиц, красивые католические костелы, яркие фестивали и праздники.</p>
                <p>Дублин не стремится обрастать небоскребами из стекла и бетона, он ценит свою аутентичность и небольшой размер. Его богатство - это зеленые парки, уютные улочки и набережные, пришвартованные парусники, готические храмы и уютные пабы с вкусным <a title="Эль (англ. ale) — традиционный английский вид пива">элем</a> или традиционным Гиннессом. Помимо Дублина стоит побывать в южном Корке, в столице рок-фестивалей - Лимерике и в западном Голуэйе.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Ирландия. Интересные Факты об Ирландии!" src="https://i.ytimg.com/vi/gOdGotPPGYc/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/gOdGotPPGYc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Ирландия. Интересные Факты об Ирландии!<br>© CoolTimes 2017</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Всё об Ирландии - Сокровища кельтов - фильм 1" src="https://i.ytimg.com/vi/HfwPB7_PshY/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/HfwPB7_PshY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Всё об Ирландии - Сокровища кельтов - фильм 1<br>© Русскоязычная Ирландия 2012</figcaption>
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
        <p>Основная масса жителей Ирландии относится к титульной нации. Ирландцев в стране 84%, около 10% иммигрантов из разных стран восточной Европы, Востока, Азии и Африки; еще 4% британцев или переселенцев из стран Западной Европы.</p>
        <p>Основная религия Ирландии - католицизм, его исповедуют около 80% населения, в стране большое количество протестантов, относящихся к церкви Ирландии, их около 5% остальных религий не более 1%, встречается ислам, буддизм, индуизм, конфуцианство, даосизм, древние кельтские верования. </p>
        <p>Продолжительность жизни в Ирландии составляет 81.5 года, женщины живут до 83 лет, а мужчины до 79. Эти показатели совпадают региональными, и считается очень хорошими.</p>
        <?= $this->render('_population') ?>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Ирландии сформировалась еще в древние времена на основе традиций и верований кельтов. Постепенно развиваясь, она стала занимать одно из значимых мест в европейской культуре. Самым известным литератором Ирландии считается Джеймс Джойс, на основе его главной книги ирландцы и поклонники проводят день Улисса, читая его в разных пространствах в течение всего дня. Традиционные ирландские танцы под народную музыку также получили признание по всему свету, школы ирландских танцев можно найти в США, Канаде, России, Израиле и других странах мира.</p>
                <h5>Праздники</h5>
                <p>Из праздников Ирландии самым знаковым является день святого Патрика, который несмотря на местное значение, смог покорить весь мир. Он празднуется 17 марта с 1762 года и посвящен покровителю и крестителю Ирландии Святому Патрику. Удачливых туристов, приехавших в этот день в Ирландию, ждут парады, шествия и карнавалы в зеленых костюмах с трилистниками клевера, который считается символом страны. Пиво льется рекой, от традиционных угощений ломятся столы. Для ирландцев - это главный праздник в году, даже важнее Нового года и Рождества, хотя они тоже любимы местными жителями.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие дни</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>1 февраля -  День святой Бригитты</li>
                            <li>17 марта- День святого Патрика</li>
                            <li>март-апрель — Святая Пятница</li>
                            <li>март-апрель — понедельник после Пасхи</li>
                            <li>1 мая — Бельтайн </li>
                            <li>первый понедельник мая - Майский праздник</li>
                            <li>первый понедельник июня — Июньский праздник</li>
                            <li>первый понедельник августа — Августовский праздник</li>
                            <li>22 сентября— Мабон</li>
                            <li>последний понедельник октября - Октябрьский праздник</li>
                            <li>31 октября — Самайн</li>
                            <li>25  — Рождество</li>
                            <li>26 декабря — день Святого Стефана</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-7">
                <h5>Кухня</h5>
                <p>Традиционная ирландская кухня - это густые супы, тушеное мясо, овощные и мясные рагу. Вся пища очень простая и сытная, призванная согреть в промозглую погоду. Основные продукты - баранина, свинина, травы, картошка, капуста, зерно. Традиционные блюда: чэмп - картошка с луком, колкэннон - тушеное рагу из картофеля, сосисок и бекона, рыбный пирог и картофельные блины «боксти».</p>
                <p>Самый главный напиток Ирландии - темный Гиннесс, который любим во всем мире за превосходный вкус и тягучую консистенцию.</p>
            </div>
            <div class="col-lg-5">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ЕДА В ИРЛАНДИИ | ОБЗОР БЛЮД" src="https://i.ytimg.com/vi/woLzukgLlQ8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/woLzukgLlQ8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ЕДА В ИРЛАНДИИ | ОБЗОР БЛЮД<br>© Tatiana Celtic Wind 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <h2>Климат</h2>
        <div class="row">
            <div class="col-lg-6">
                <p>Ирландский климат умеренно-морской. Благодаря проходящему рядом с западным побережьем Гольфстриму в стране тепло и влажно, но океанические ветра способствуют частой смене погоды. Местные жители привыкли к ее капризам, и шутят, что если не нравится погода, то надо подождать 5 минут и она изменится. Высокий уровень осадков и часто затянутое облаками небо - самые распространенные жалобы на ирландский климат.</p>
                <p>Средняя летняя температура здесь +15 градусов, а морской воды <nobr>+12 ... +17</nobr>, желающих купаться не находится. Зимой здесь снег выпадает редко, а вот дожди идут еще чаще чем летом, хотя кажется, что это невозможно. Средняя температура зимой <nobr>+5 ... +7</nobr> градусов.</p>
                <p>Самые комфортные месяцы для путешествий - июль и август, но в августе сами ирландцы отправляются на каникулы и многие магазины и пабы могут быть закрыты.</p>
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
                <p>Ирландия, как и Великобритания, не входит в шенгенскую зону. Для путешествия по стране, а также для транзита через нее, необходимо оформить <strong>ирландскую визу</strong>. Тем, у кого есть действующая британская виза, разрешен безвизовый въезд.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Оформлением ирландских виз для граждан Казахстана с 26 мая 2016 года занимается посольство Ирландии в Москве, консульство в Алматы приостановило свою деятельность.</p>
                    </div>
                </div>
                <p>Для получения визы в Ирландию придется собрать большой пакет документов, заполнить анкету и лично явиться в посольство для сдачи паспортов и их получения. Обратите внимание, что сданные в посольство документы (кроме загранпаспортов) - не возвращаются, поэтому предоставляйте копии.</p>

                <h5>Авиасообщение</h5>
                <p>Главные воздушные ворота страны находятся в Дублине. Сюда прилетают рейсы со всей Европы, а также из Москвы, Стамбула, Минска и Киева, где можно сделать пересадку. Прямых рейсов из Казахстана в Ирландию нет.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i>Ирландская виза</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=+грохольский+пер.,+5,+москва,+россия,+129090&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Ирландии</h5>
                        <p>Россия, Москва, Грохольский пер, 5</p>
                        <p><i class="icon-phone"></i> +7 495 937-59-11</p>
                        <p><i class="icon-link"></i> <a href="https://www.dfa.ie/irish-embassy/russia/" target="_blank" rel="nofollow">www.dfa.ie</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы с одной пересадкой</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дублин - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дублин - Алматы</div>
                                <span>Каждый день</span>
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

        <h5>Валюта</h5>
        <p>Провоз на территорию Ирландии наличной валюты разрешен в любом объеме и подлежит декларации, вывезти можно такую же или меньшую сумму. Количество наличных проверяется на соответствие декларации.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Алкоголь разрешен для провоза людям старше 20 лет, а сигареты можно ввозить уже с 18. По количеству они ограничены 200 штук или 250 г табака. Напитки выше 22 градусов разрешены не более 1 л, меньше 22 градусов 2 л. </p>

        <h5>Личные вещи</h5>
        <p>Ограничений на ввоз личных вещей в Ирландии нет, но если есть масса однотипных вещей, у таможни могут возникнуть вопросы. К провозу полностью запрещены оружие, наркотики, видеозаписи и печатные материалы, содержащие ужасы или порнографию. Из продуктов с собой нельзя брать свежее мясо, птицу. Чтобы взять в отпуск домашних питомцев, нужно оформить сертификат международного образца и поставить прививки от бешенства не ранее, чем за 7 месяцев до поездки.</p>

        <h5>Tax Free</h5>
        <p>Система возврата налога на добавленную стоимость для туристов в Ирландии очень выгодна. Воспользовавшись ею, можно вернуть 23%, купив товары на сумму от 30 евро и выше. Оформить Tax Free очень просто, достаточно купить в подходящем магазине личные вещи, вместе с обычным чеком оформить специальный, предъявить его на таможне вместе с нераспечатанными вещами. В офисе возврата Tax Free в аэропорту вам вернут деньги на карту или наличными. Выгоднее выбрать карту, так вы избежите уплаты комиссии.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Самое комфортное путешествие между городами Ирландии предлагает национальная компания железных дорог. Поезда связывают Дублин со всеми, даже самыми отдаленными регионами страны. Вагоны современные, билет можно купить в разные классы: второй класс, стандарт, первый класс или супер-стандарт. Также популярен перевозчик Irish Bus, который предлагает путешествие с комфортом на одно- или двухэтажных автобусах.</p>

                <h5>Городской транспорт</h5>
                <p>Общественный транспорт Дублина - это двухэтажные автобусы, 2 линии трамвая и электрички DART, курсирующие по 26 станциям в столице и пригородах. Весь транспорт ходит по расписанию, ждать долго не придется. Билеты продаются у водителя автобуса и в кассах на станции электрички, самые удобные проездные на день за 7 евро, на неделю 27.5 евро. Купить билет на одну поездку можно от 2 до 3.5 евро, в зависимости от расстояния. Время работы с 6 утра до 23:30 ночи.</p>

                <h5>Такси</h5>
                <p>Такси в Ирландии - это знаменитые черные кэбы, которые можно поймать на улице или вызвать по телефону. Все машины снабжены счетчиками, современны и комфортны. Пассажиры ездят только на заднем сидении. Стоимость поездки не дешевая, 3.6 евро придется отдать за посадку и дальше по 1.1 евро за каждый километр.</p>

                <h5>Паром</h5>
                <p>Паромы популярны на западном побережье Ирландии, где недалеко от берега расположены множество островов. Паромные переправы отправляются из портов Россавила, Донегол и Голуэй.</p>
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
                                <div>Автобус, Трамвай, Поезд</div>
                                <span>2-3.5 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>1.1 евро / км<br>плюс 3.6 евро за посадку</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ТРАНСПОРТ В ИРЛАНДИИ | ПОЕЗД ДАРТ" src="https://i.ytimg.com/vi/pHGow_OP58Q/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/pHGow_OP58Q?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ТРАНСПОРТ В ИРЛАНДИИ | ПОЕЗД ДАРТ<br>© Tatiana Celtic Wind 2014</figcaption>
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
                <h5>«Сбавьте скорость, иначе собьете лепрекона!» или как путешествовать на автомобиле по Ирландии</h5>
                <p>Знаки про лепреконов действительно встречаются на дорогах страны, а передвигаться по ним придется с не самой высокой скоростью. Узкие однополосные трассы, частые ограничивающие скорость знаки и лежачие полицейские не позволят разогнаться. К тому же движение здесь левостороннее, как и в Великобритании. Сев за руль, необходимо первое время быть особенно аккуратным, чтобы не выехать на встречную полосу и не забыть, что обгон разрешен только справа.</p>

                <h5>Аренда авто</h5>
                <p>Арендовать машину не составит труда в любом городе страны или в аэропорту Дублина по прибытию. Все компании требуют международные права, возраст от 23 лет и залог в размере от 500 до 1000 евро. Машину перед подписанием надо тщательно осмотреть, зафиксировать имеющиеся повреждения и занести их в договор, чтобы вопросов при сдаче машины не возникало.</p>
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
                                <span>1.4 EUR за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Ирландия. По дороге в Дингл. Графство Керри. Ireland" src="https://i.ytimg.com/vi/F3XDpaqw5gU/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/F3XDpaqw5gU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Ирландия. По дороге в Дингл. Графство Керри. Ireland<br>© Tatiana Celtic Wind 2014</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Ирландии</h2>
        <p>Медицинское обслуживание для всех жителей страны предоставляется бесплатно в государственных больницах и поликлиниках. Оно отличается высоким качеством, больницы укомплектованы современной техникой и квалифицированными врачами. У государственной помощи только один минус - все происходит очень долго. Альтернативой является частная медицина - быстрая, но дорогая; почти у всего работающего населения есть медицинские страховки от компаний. Туристам для обращения за помощью потребуется страховка путешественника, иначе на врачебную помощь уйдет весь бюджет поездки.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь представлена 4 основными операторами:</p>
                <ul>
                    <li>Vodafone Ireland - <a href=" https://n.vodafone.ie/en.html" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Meteor - <a href=" https://www.eir.ie/mobile/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>3 - <a href=" http://www.three.ie" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Lycamobile - <a href="https://www.lycamobile.ie/en/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Для туристов ирландские операторы предлагают тариф предоплатный Pay as you Go. Для его оформления потребуется назвать только место вашего проживания, адрес отеля вполне подойдет. Стоимость сим-карты у самого популярного оператора Водафона 10 евро, а звонок в страны СНГ будет стоить 0.25 евро, внутри страны стоимость звонков составляет 0.09 евро. Для мобильного интернета можно подключить пакет с определенным количеством мегабайт, а если пополнить счет на 20 евро, то водафон предложит своим клиентам 250 Мб совершенно бесплатно. Остальные выгодные предложения нужно посмотреть на официальном сайте.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Ирландии популярен и бесплатен. Его всегда можно найти в аэропорту, отелях, ресторанах и пабах. Множество точек даже не защищены паролем, поэтому подключиться можно, находясь рядом с ними. В Дублине есть бесплатный Wi-Fi в центре города, в парках, на набережных и главных площадях.</p>
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
                                <div>Единый телефон экстренных служб</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дополнительный экстренный номер</div>
                                <span>999</span>
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
                                    <nobr>230 В</nobr>, <nobr>50 Гц</nobr>. Используются разъемы <a href="/journal/electric-sockets.html#typeG">типа G</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_g.svg" style="width:100px; max-width:100%;">
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
</section>