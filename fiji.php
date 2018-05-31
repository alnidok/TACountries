<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Фиджи</h1>
                <div class="lead">
                    <b>Столица</b>: Сува
                    <br>
                    <b>Официальный язык</b>: английский и фиджийский
                    <br>
                    <b>Валюта</b>: FJD — фиджийский доллар
                    <br>
                    <b>Территория</b>: 18 274 км²
                    <br>
                    <b>Население</b>: 0,9 млн человек
                    <br>
                    <b>Часовой пояс</b>: UTC+12. Разница с Астаной +6 часов
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Fiji" src="https://i.vimeocdn.com/video/472201045_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/92466077?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Tom Pinsard, 2014</figcaption>
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
                <p>Фиджи — государство, расположенное на одноименном архипелаге, включающем в себя 332 острова, в юго-западной части Тихого океана.</p>
    
                <!--Карта-->
                <?= $this->render('_map', $country) ?>
            
                <p>Острова Фиджи — тихоокеанская жемчужина с великолепной природой, роскошными песчаными пляжами, отличными возможностями для дайвинга и серфинга и качественным сервисом. А еще это райское место привлекает влюбленных со всего света для проведения незабываемой свадебной церемонии.</p>
                <p>Столицей и главным портом страны является самобытный и колоритный город Сува, расположенный на острове Вити-Леву. Любителей истории и архитектуры обязательно заинтересуют местные достопримечательности: музей Фиджи, католический собор, церковь Сент-Фрэнсис-Хсавьер-Хай, церковь Сентенари-Методист-Черч и здание Университета. Столичная светская жизнь сосредоточена на улице Виктория-Парейд с множеством ночных клубов, ресторанов и отелей. Неподалеку находится главная торговая точка Сувы — Муниципальный рынок. В столице есть собственный пляж, а в 20 минутах езды от города расположен прекрасный залив пасифик-Харбор с отлично оборудованными пляжами, дайвинг-клубом и большим полем для гольфа.</p>
                <p>Вторым по величине островом архипелага является о. Вануа-Леву («Большая земля»), привлекающий туристов девственной дикой природой. Дайверы особенно облюбовали это место благодаря большому количеству прекрасных коралловых рифов.</p>
                <p>Самые крошечные острова архипелага Маманука расположены на западе Фиджи. На каждом острове здесь находится, как правило, только один фешенебельный отель — идеальный вариант для любителей безмятежного отдыха. На некоторых островках сохранился тропический лес в первозданном виде, и практически на всех встречаются охраняемые черепашьи пляжи и гнездовья птиц.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="A Portrait of Fiji | 4K" src="https://i.vimeocdn.com/video/550085223_1280x533.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/150546889?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">A Portrait of Fiji | 4K<br>© Matthew Putt 2016</figcaption>
            </figure>
    
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Республика Фиджи (Тихий Океан) (Часть 1 из 2) (1080p)" src="https://i.ytimg.com/vi/MLtrCIiLy18/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/MLtrCIiLy18?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Республика Фиджи (Тихий Океан) (Часть 1 из 2) (1080p)<br>© Алексей Ракаускас</figcaption>
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

        <p>Основные этнические группы в стране — фиджийцы (57%) и фиджи-индийцы (37%). К остальным народностям относятся ротума и выходцы из Китая, Европы и тихоокеанских островов.</p>
        <p>Официальными языками признаны английский и фиджийский, также часть населения, преимущественно индийцы, разговаривают на фиджийском хинди.</p>
        <p>Большинство верующих жителей исповедуют христианство (64%) и индуизм (27%), небольшая часть населения относится к мусульманской и другим религиозным конфессиям.</p>
        <p>Уровень урбанизации в стране средний — около 50% населения проживают в городах. Самые населенные города: Насину (76 тыс. человек), Сува (74 тыс. человек), Лаутока (43 тыс. человек).</p>
        <p>Средняя продолжительность жизни составляет 70,5 лет: 68 лет у мужчин и 73 года у женщин.</p>
                
        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p>Население Фиджи — это самобытные потомки смешения древних тихоокеанских культур. Они обладают радушным, приветливым, оптимистичным и часто беззаботным нравом. Островное расположение и климатические условия способствуют размеренному, неторопливому образу жизни.</p>
                <p>Традиционно местное общество складывалось на основе племени («явуса»), состоящего из нескольких кланов («матакали»), обычно связанных близкими родственными отношениями. Жизнь общины регулировал наследственный вождь «тураг-ни-коро». С древних времен и по сей день мужчине отводится роль защитника и добытчика, а женщине — роль матери, хозяйки, хранительницы очага.</p>
                <p>В стране с большим уважением относятся к старшим, а в детях стараются воспитывать такие качества, как умение вести себя в обществе, смирение и скромность.</p>
                <p>Одной из главных местных праздничных традиций является распитие напитка из корня янгоны — чащу из кокосового ореха передают по кругу всем участникам ритуала. После этой «официальной» части церемонии начинается неофициальная: пир, национальные танцы и тому подобное. Кстати, при посещении фиджийской деревни принято преподносить небольшой подарок вождю: вино, сигареты или пакет с тем же высушенным корнем янгона. Отказываться от ответного подарка не стоит, чтобы не оскорбить дарующего.</p>
                <p>Традиционно на обед и ужин члены большой семьи собираются за одним столом, точнее, за одной циновкой, на которую выставляются яства.</p>
                <p>Национальные блюда на Фиджи готовят из мяса, морепродуктов, риса, овощей и корнеплодов (маниока, колоказия, плоды хлебного дерева или ямса). Непременно стоит попробовать: «коконду» — маринованую в лаймовом соке рыбу, «роуроу» — салат из колоказии, «кассаву» — тапиоку с бананами и кокосовым молоком, «роти» — пшеничные блины на гриле, «вакалоло» — нежный пудинг из маниоки. Традиционными напитками, помимо вышеописанной кавы из корня янгоны, являются местные вина — Meridan Moselle и Suvanna Moselle, а также пиво — Carlton и Fiji Bitter.</p>

            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>март-апрель — Миляд ан-Наби</li>
                            <li>апрель-май — Страстная Пятница и Пасха</li>
                            <li>конец мая — День Рату Сукуна</li>
                            <li>5 июня — День рождения Королевы</li>
                            <li>10-13 октября — День Фиджи</li>
                            <li>октябрь-ноябрь — Фестиваль огней Дивали</li>
                            <li>1 ноября — День Всех Святых</li>
                            <li>11 ноября — День памяти</li>
                            <li>25-26 декабря — Рождество</li>
                        </ul>
                    </div>
                    
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Danse fidjienne" src="https://i.ytimg.com/vi/BvIdzWCKWp4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/BvIdzWCKWp4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Danse fidjienne<br>© Jean Claude GARIN</figcaption>
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

                <p>На территории островов господствует морской тропический климат. На протяжении всего года влажно и жарко. Выделяется 2 сезона: лето (с ноября по май) и зима (с июня по октябрь). Летом средние температуры воздуха достигают +28°C, и в это время выпадает наибольшее количество осадков. Зимой на несколько градусов прохладнее, а пассаты приносят сухую и солнечную погоду.</p>
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
                <p>Гражданам Республики Казахстан для въезда на территорию Фиджи требуется виза, срок действия которой 90 дней. На территории Казахстана посольство Фиджи отсутствует, ближайшее посольство находится в г. Брюссель (Бельгия).</p>
                <p>Официальный почтовый адрес посольства Фиджи: Square Plasky, 92 - 94, Bruxelles, Belgium, 1030. Контактные телефоны: (32-2) 736-90-50, (32-2) 736-14-58.</p>
                <p>Перечень необходимых документов*:</p>
                <ul>
                    <li>анкета - заявление на визу;</li>
                    <li>загранпаспорт (срок его действия должен быть не менее полугода с даты предполагаемого выбытия из страны);</li>
                    <li>цветное фото 3,5*4,5 см (2 шт.);</li>
                    <li>копия первой страницы загранпаспорта и копия предыдущих виз;</li>
                    <li>доказательства платежеспособности (выписка по банковскому счету);</li>
                    <li>бронь авиабилетов в оба конца;</li>
                    <li>свидетельства о браке, рождении детей.</li>
                </ul>
                <p>*Информация носит осведомительный характер.</p>
                
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
            </div>
            <div class="col-md-4">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i>Требуется виза
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <p>В Республике Казахстан нет посольства/консульства Фиджи</p>
                    </div>
                </div>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <p>Перелеты из Казахстана на Фиджи длительные, от 18 часов. Вариантом перелета из Алматы в Суве является рейс с пересадками в Нью-Дели и Сиднее.</p>
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
        <p>Гражданам Казахстана, достигшим 18-летнего возраста, разрешается беспошлинно ввозить до 500 сигарет и до двух литров спиртных напитков.</p>
            
        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен (сумма свыше 10 тыс. USD подлежит обязательной декларации). Вывоз национальной валюты ограничен — до 500 FJD.</p>

        <h5>Животные</h5>
        <p>Все домашние животные должны быть привиты и иметь международный медицинский сертификат.</p>

        <h5>Запрещены к ввозу:</h5>
        <ul>
            <li>наркотические средства;</li>
            <li>огнестрельное оружие, боеприпасы, взрывчатые вещества;</li>
            <li>радиоактивные и ядовитые вещества;</li>
            <li>поддельные денежные банкноты;</li>
            <li>материалы, противоречащие морально-этическим нормам и разжигающие политические, религиозные и/или иные конфликты.</li>
        </ul>

        <h5>Запрещены к вывозу (без соответствующих разрешающих документов):</h5>
        <ul>
            <li>предметы, имеющие историческую и/или культурную ценность;</li>
            <li>экзотические животные и птицы;</li>
            <li>объекты морской флоры и фауны;</li>
            <li>изделия из кожи и меха.</li>
        </ul>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">

                <p>На большинстве островов архипелага Фиджи отсутствуют как автомобили, так и собственно автодороги — все находится в шаговой доступности. Дороги есть только на двух крупных островах — Вануа-Леву и Вити-Леву, где курсируют миниавтобусы. Однако, зачастую они довольно старые и изношенные, а какой-либо график передвижения отсутствует. В связи с этим иностранцам рекомендуется пользоваться специальными рейсами от туристических фирм или отелей.</p>
                <p>Для переезда на другие острова можно нанять катер или паром, которыми владеет практически каждый отель.</p>
                                             
                <h5>Городской транспорт</h5>
                <p>Общественный транспорт в Суве и других крупных населенных пунктах страны представлен автобусами. Стоимость одной поездки около 0,9 FJD.</p>
                <p>Популярным средством передвижения среди туристов является такси. Автомобиль можно вызвать по телефону на ресепшене отеля или остановить на улице. Посадка стоит 3 FJD, и дополнительно оплачивается каждый километр согласно счетчику.</p>
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
                                <span>от 0,9 FJD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>1 FJD за км</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Nadi International Airport International Departure Hall" src="https://i.ytimg.com/vi/LV_8JbNx0v0/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/LV_8JbNx0v0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Nadi International Airport International Departure Hall<br>© FlightTravels</figcaption>
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
                <p>Дорожная система развита только на двух островах — Вануа-Леву и Вити-Леву. Общая протяженность дорог – всего 5 тыс. км, и только часть из них с твердым покрытием.</p>
                <p>Особенности дорожного движения:</p>
                <ul>
                    <li>движение левостороннее;</li>
                    <li>обгон совершается справа;</li>
                    <li>максимально допустимая скорость в черте города составляет 50 км/час, вне населенного пункта — 80 км/час;</li>
                    <li>обязательно использование ремней безопасности водителю и всем пассажирам;</li>
                    <li>дети перевозятся только в специальных автокреслах;</li>
                    <li>в отдаленных районах могут отсутствовать заправочные станции.</li>
                </ul>
                <p>Для иностранцев, особенно для новичков, управление автомобилем небезопасно в связи с тем, что местные жители зачастую пренебрегают правилами дорожного движения, поэтому рекомендуется быть предельно внимательным за рулем, особенно в ночное время.</p>

                <h5>Аренда авто</h5>
                <p>Арендовать автомобиль можно в прокатных фирмах в аэропорту или любом крупном отеле. Для заключения договора аренды потребуются паспорт, водительские права и кредитная карта.</p>
                <p>Необходимо внимательно ознакомиться со всеми пунктами договора, а также осмотреть арендуемое транспортное средство на предмет царапин или иных повреждений и зафиксировать их документально.</p>
                <p>Минимальная стоимость проката автомобиля составляет 100 FJD в сутки. За дополнительную плату можно приобрести автокресло, багажник и навигатор.</p>
                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Республики Казахстан могут управлять транспортным средством на территории Фиджи при наличии водительского удостоверения международного образца.</p>
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
                                <div>Бензин</div>
                                <span>2,06 FJD за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1,76 FJD за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="За городом Лаутока, Фиджи, 2012" src="https://i.ytimg.com/vi/nH8uqNC3hvo/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/nH8uqNC3hvo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">За городом Лаутока, Фиджи, 2012<br>© Andrey Tierov</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
       
        <p>Санитарно-эпидемиологическая обстановка на островах в целом благоприятная. Перед поездкой рекомендуется вакцинация от гепатита (А, В), столбняка, брюшного тифа и дифтерии.</p>
        <p>Во избежание проблем со здоровьем туристам рекомендуется:</p>
        <ul>
            <li>учитывать жаркие климатические условия, особенно лицам с хроническими заболеваниями, ограничивать пребывание на солнце, пользоваться солнцезащитным кремом;</li>
            <li>тщательно соблюдать личную гигиену, обрабатывать руки дезинфицирующим раствором;</li>
            <li>пить только бутилированную воду;</li>
            <li>местные фрукты и овощи перед употреблением мыть с антисептическим мылом;</li>
            <li>пользоваться специальными репеллентами от комаров и прочих насекомых.</li>
        </ul>
        <p>Медицинские услуги для иностранцев платные, а при наличии страховки все расходы берет на себя страховая компания.</p>
                
        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь и интернет</h2>
                <p>Связь на островах предоставляют три мобильных оператора:</p>
                <ul>
                    <li>Vodafone — <a href="https://www.vodafone.com.fj/" target="_blank">перейти на сайт</a></li>
                    <li>Digicel Group — <a href="https://www.digicelgroup.com/fj/en/" target="_blank">перейти на сайт</a></li>
                    <li>Inkk Mobile — <a href="http://inkkmobile.com.fj/" target="_blank">перейти на сайт</a></li>
                </ul>
                <p>Приобрести местную SIM-карту можно в специализированных офисах продаж при предъявлении загранпаспорта. Стоимость такой карты зависит от оператора и пакета услуг — в среднем 20 FJD, при этом часть суммы переводится на баланс.</p>
                <p>Что касается интернета, то платные и бесплатные wi-fi точки есть в отелях, ресторанах и кафе. В Суве работает несколько интернет-кафе, где час доступа к сети интернет обойдется примерно в 10 FJD.</p>
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
                                <span>911</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Криминальная полиция </div>
                                <span>919</span>
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