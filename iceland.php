<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Исландия</h1>
                    <div class="lead">
                        <b>Столица</b>: Рейкьявик<br>
                        <b>Официальный язык</b>: исландский<br>
                        <b>Валюта</b>: ISK - исландская крона<br>
                        <b>Территория</b>: 103 125 км²<br>
                        <b>Население</b>: 321 857 человек<br>
                        <b>Часовой пояс</b>: GMT+0. Разница с Астаной -6 часов.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Amazing Iceland 4K drone footage" src="https://i.ytimg.com/vi/bYVebL_BYqo/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/bYVebL_BYqo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© IslandiaME, 2016</figcaption>
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
                <p>Исландия переводится как страна льдов. Она расположена на острове в северной части Атлантического океана ближе к Гренландии, чем к материковой Европе. Природа Исландии богата и разнообразна - это горы, вулканы, гейзеры, термальные источники и водопады. А фьордов тут не меньше чем в Норвегии, но до них сложно добраться, поэтому туристами тот край практически не исследован.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Исландия, хоть и называется ледяной страной, находится ниже северного полюса под влиянием теплого океанского течения, поэтому здесь нет вечной мерзлоты и арктического холода. Погода нестабильна и  меняется каждые полчаса. Может светить солнце, и тут же пойти дождь или снег с сильнейшим ветром. Путешественники приезжают сюда ради красот северной природы, часто похожей на инопланетные пейзажи. Не зря здесь снималось большинство фантастических фильмов, используя местные долины как декорации</p>
                <p>Главной туристической достопримечательностью Исландии считается Голубая долина с термальными источниками и долина гейзеров, где 2-3 раза в час бьют из-под земли фонтаны высотой до нескольких метров. Любое путешествие начинается со столицы Рейкьявик, самой чистой и самой маленькой в Европе, богатой историей и достопримечательностями. Понежиться в термальных источниках можно не выезжая из города. Кроме купален подземная горячая вода здесь используется для отопления домов, поэтому в помещениях всегда тепло, несмотря на плохую погоду.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Исландия (Iceland) - Грандиозные путешествия  (Ultimate Journeys, Невероятные путешествия)" src="https://i.ytimg.com/vi/68pCu9UghAQ/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/68pCu9UghAQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Исландия (Iceland) - Грандиозные путешествия  (Ultimate Journeys, Невероятные путешествия)<br>© Sergey ST 2014</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Рейкьявик - Прогулки по городу в Исландии" src="https://i.ytimg.com/vi/nIbK5UkFiIw/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/nIbK5UkFiIw?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Рейкьявик - Прогулки по городу в Исландии<br>© Tatiana Mozerova 2015</figcaption>
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
        <p>Исландия - уникальная страна, в сложных северных условиях население постоянно растет, а миграционного оттока практически нет. При этом национальный состав однороден, здесь живет 99,8% исландцев, некоторое количество датчан и норвежцев. Все население говорит на исландском языке, с 6 класса в школах начинают изучать датский, поэтому среди взрослого населения он считается вторым по распространенности.</p>
        <p>Религия исландцев - христианство, 72% принадлежат к лютеранской церкви, около 2.5% к католицизму, 8% к другим протестантским церквям, а 12.6% населения относят себя к язычникам, к вероучению «Асатру», уходящему корнями в древние скандинавские верования.</p>
        <p>Чистая природа, отсутствие  производств и натуральная пища позволяют исландцам жить долго без особых болезней. Средняя продолжительность жизни в стране - 82.8 года. У женщин она составляет 84 года, а мужчин 81 год.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Исландии сохранилась еще со времен викингов, язык практически не отличается от того, на котором разговаривали в средних веках. Основное литературное наследие - это исландские саги, древнескандинавские мифы, рунический алфавит. Самые известные саги были собраны в средние века Снорри Стурлусоном в старшую и младшую Эдду, которые переведены на множество мировых языков.</p>
                <p>Во время праздников в Исландии можно познакомиться с их культурой, традицией и обычаями. Самыми главными праздниками в году считаются зимние: Новый год, Рождество и Йоль, уходящий корнями  в языческие верования. В эту ночь жгут костры, наряжают елку, дарят подарки и надевают новую шерстяную одежду, а также защищают от йольского кота свой праздничный обед. В день святого Валентина исландцы, в отличие от всего мира, почитают не католического святого, а сына бога Одина, которого звали Вали. По мифологии он является покровителем растений, но праздник окрашен романтикой, и отмечается в основном влюбленными парами. Один из самых любимых праздников в Исландии как у местных жителей, так и у туристов - это день солнечного кофе 27 января, когда этот напиток обязательно варится на улице, чтобы поймать в процессе начинающие появляться после долгой темноты солнечные лучи. А еще есть день пива, отмечаемый 1 марта, в этот день в конце 19 века был принят закон о пиве, который отменил сухой закон в этой стране, действующий более 100 лет. Весной все христиане отмечают Пасху, главный торжество первой половины года. Как и у всех северных народов важным праздником считается день летнего солнцестояния, когда солнце всходит в 3 часа ночи, а заходит около полуночи. Это время  считается  лучшим периодом для посещения страны. Зима - это время Рождества, пропитанного традициями и сказочным настроением. Это самый семейный и самый вкусный праздник Исландии.</p>
                <p>Кухня Исландии посвящена рыбе. Здесь сельдь называют исландским золотом, и только попробовав ее, можно понять почему она получила столь громкое название. На столе исландцев всегда найдется лосось, форель, креветки, треска, селедка, гребешки и другие дары моря. Традиционные местные блюда - сурмьйоулк (местное кислое молоко); тресковые щёки; квашеные тюленьи плавники; жареное мясо тупиков и тухлое мясо акулы. Правда туристов, которые отважатся их попробовать, совсем немного.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздники и официально нерабочие даты:</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>26 января -  Торраблоут, начало месяца Торри</li>
                            <li>27 января- день солнечного кофе</li>
                            <li>понедельник в феврале — день пирожных, предшествует великому посту</li>
                            <li>вторник в  феврале — Марди Гра, следует за днем пирожных</li>
                            <li>14 февраля — День Святого Валентина</li>
                            <li>среда в феврале - Пепельная среда или начало великого поста, длящегося 45 дней</li>
                            <li>18 февраля — день женщин Исландии</li>
                            <li>1 марта — день пива Исландии</li>
                            <li>апрель — Пасха</li>
                            <li>19 апреля — первый день лета</li>
                            <li>3 июня — день моряков</li>
                            <li>17 июня — день провозглашения республики Исландия</li>
                            <li>21 июня — день середины лета</li>
                            <li>27 октября — день начала зимы</li>
                            <li>1 декабря — день независимости</li>
                            <li>6 декабря — день святого Николая</li>
                            <li>20 декабря — Йоль</li>
                            <li>25 декабря — Рождество</li>
                        </ul>
                    </div>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Исландия, исландцы гонят самогон из мха!" src="https://i.ytimg.com/vi/rTG4Ehl-zKo/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/rTG4Ehl-zKo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Исландия, исландцы гонят самогон из мха!<br>© greenman 2016</figcaption>
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
                <p>Климат Исландии субарктический, морской, на него влияют течения, проходящие в Атлантическом океане рядом с островом.</p>
                <p>Средняя температура летом около +10 градусов, в горах ниже. Зимой в долинах около 0, в горах до -10. Сложность климата для человека заключается в сильных сырых ветрах и продолжительном темном периоде. Световой день в декабре длится 5 часов, а в июне 21 час.</p>
                <p>В Исландии не редки северные сияния. Для путешествия в страну лучше выбрать время с середины июня до середины августа.</p>
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
                <p>Исландия входит в шенгенское соглашение, поэтому для ее посещения гражданам Казахстана потребуется <strong>шенгенская виза</strong>. Она выдается за 7 дней только при личном визите в посольство.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Посольства Исландии в Казахстане нет, для получения визы придется обратиться в посольство, расположенное в Москве.</p>
                    </div>
                </div>
                <p>Для получения визы необходим пакет документов, состоящий из анкеты, фотографии, билетов туда и обратно, туристического ваучера или брони отеля, медицинской страховки и денег на счету, также стоит приложить справку с работы. Более подробную информацию можно получить на сайте посольства.</p>

                <h5>Авиаперелет</h5>
                <p>Перелет в Исландию из Астаны не простой. 1 стыковка возможна во Франкфурте на Майне, откуда в Рейкьявик летает Icelandair. Больше рейсов можно найти с 2 стыковками. В Исландию можно попасть из любой скандинавской столицы или из Лондона. А до них удобно лететь с пересадкой в Москве или Европе.</p>
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i>Шенгенская виза</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=+хлебный+пер.,+28,+москва,+россия,+101000&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Исландии</h5>
                        <p>Россия, Москва, Хлебный пер, 28</p>
                        <p><i class="icon-phone"></i> +7 495 956-76-04</p>
                        <p><i class="icon-link"></i> <a href="https://www.iceland.is/" target="_blank" rel="nofollow">iceland.is</a></p>
                    </div>
                </div>
                <!--<div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы с одной пересадкой</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Рейкьявик - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>

                    </ul>
                    <div class="card-footer p-3">
                        <a href="https://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <h5>Валюта</h5>
        <p>Ввоз валюты на территорию Исландии не ограничен. Суммы, превышающие 10000 евро, необходимо декларировать. Ограничений на вывоз национальной валюты не установлено.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Алкоголь ограничен 1 л для крепости более 22 градусов и 2 л для слабоалкогольных напитков. Его можно провозить начиная с 20 лет. Сигареты разрешены с 18 лет, можно взять с собой 200 шт или 250 г табака.</p>

        <h5>Личные вещи</h5>
        <p>Ввоз личных вещей возможен на любую сумму. Для сильнодействующих лекарств потребуется рецепт и заключение врача. Полностью запрещено к провозу мясо мороженное, свежее и вяленое; рыба; колбасы; птица и другие виды продуктов питания. Оружие, наркотики и материалы, содержащие свинец, также под запретом. Вывозить нельзя природные и культурные ценности, в том числе кусочки лавы и необработанные камни, птичьи яйца и гнезда диких животных и птиц.</p>

        <h5>Tax Free</h5>
        <p>В Исландии высокий налог на добавленную стоимость - 24%. Tax Free поможет сэкономить на покупке личных вещей и сувениров. Чтобы оформить возврат части стоимости покупки, нужно приобрести товара на сумму свыше 6000 крон и получить Global Refund Cheque. Его предъявляете вместе с упакованным товаром на таможне, после чего в офисе по возврату Tax Free вам выдадут наличные или переведут деньги на банковскую карту.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Путешествовать внутри страны удобно на самолетах, автобусах или кораблях. В основном все крупные города расположены на берегу океана и их соединяет кольцевая дорога № 1, идущая вокруг острова по побережью. По ней ходят автобусы, доставляя пассажиров из столицы в другие города. Самолетом можно попасть в 99 населенных пунктов с аэродромами, но все кроме Рейкьявика могут принять только легкомоторные маленькие самолеты.</p>

                <h5>Городской транспорт</h5>
                <p>Городской транспорт здесь представлен автобусами, причем ходят они только в Рейкьявике и Акюрейри, остальные города настолько маленькие, что их легко обойти пешком. Обычно в них есть служба такси, если необходимо куда-то доехать.</p>

                <h5>Такси</h5>
                <p>Такси в Исландии - распространенное средство передвижения. На нем можно добраться в любую часть города или же перемещаться между городами. Чаще всего туристы пользуются службой такси по вызову в Рейкьявике, а для междугородних путешествий выбирают автобус.</p>

                <h5>Паром</h5>
                <p>Очень удобно путешествовать на кораблях. Порт есть в каждом прибрежном городе, сообщение налаженное, корабли принадлежат 3 разным компаниям: Кооперативная судоходная, Государственная судоходная и Исландская пароходная, и ходят не только по внутренним маршрутам, но еще в Данию, Канаду и США.</p>
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
                                <div>1 поездка на автобусе</div>
                                <span>350 крон</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной на 1 день</div>
                                <span>900 крон</span>
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
                <h5>Дорожное движение</h5>
                <p>Исландия - страна прекрасных дорог, но проложены они далеко не везде. Если планировать объехать остров по периметру, то для этого можно брать в аренду обычные автомобили. Для путешествия вглубь страны выбирайте полноприводный джип, который справится с бездорожьем. Если нет навыков вождения в сложных условиях, то с трассы лучше не съезжать. Передвигаться по дорогам в Исландии очень удобно, движение правостороннее, везде есть разметка, обочины, в городах нет пробок, и всегда найдется место для парковки.</p>

                <h5>Аренда авто</h5>
                <p>Арендовать машину можно в Рейкьявике или в аэропорту. Для этого подойдут национальные права, которые старше 1 года. Цены на аренду высокие, так же как и стоимость залога, поэтому путешествие по стране на автомобиле обойдется в существенную сумму.</p>
            </div>
            <div class="col-md-4">
                <div id="block-fuel"></div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Исландские дороги" src="https://i.ytimg.com/vi/X5oDaclP8nw/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/X5oDaclP8nw?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Исландские дороги<br>© TimurThoR 2013</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Исландии</h2>
        <p>Уровень медицины в Исландии достаточно высок. Несмотря на высокую стоимость услуг, сюда приезжают на лечение жители скандинавских стран и Великобритании. Квалификация врачей и качество оборудования, а также полезные для здоровья термальные источники, являются основой медицинского туризма. Для путешествия по стране никаких прививок или обследований делать не нужно, достаточно оформить медицинский полис страхования, чтобы чувствовать себя в безопасности. В случае возникновения проблем со здоровьем вам помогут в любом крупном городе. Медицинская экстренная помощь бесплатна, остальное лечение должно быть оплачено страховой компанией или из личных средств туриста.</p>

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
                    <li>Vodafone - <a href=" https://vodafone.is/english/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Síminn - <a href="https://www.siminn.is/prepaid" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Покупка сим-карты местных операторов в Исландии, пожалуй самая удобная в Европе. Приобрести ее можно уже на борту самолета Icelandair, паспорт или другие документы не потребуются. Подключиться к сети можно также в аэропорту, в любом магазине сети Ten-Eleven (10-11) или на заправочных станциях. Цены начинаются от 1000 крон, которые сразу окажутся на вашем счете. Звонки в страны СНГ стоят от 70 крон за минуту разговора. Для пополнения баланса используются специальные карты, продающиеся в любом магазине.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Исландии есть в любом крупном городе, в отелях, кафе, ресторанах, городских парках и площадях. Чаще всего подключение бесплатное, но есть и платные точки доступа. Также в городах действуют интернет-кафе, они помогут выйти в сеть тем, у кого нет собственных гаджетов. Стоимость услуг у них высокая, поэтому выгоднее пользоваться пакетами мобильного интернета с собственного телефона.</p>
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
                                    <nobr>220 В</nobr>, <nobr>50 Гц</nobr>. Используются разъемы <a href="/journal/electric-sockets.html#typeG">типа С</a> и <a href="/journal/electric-sockets.html#typeG">типа F</a>
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