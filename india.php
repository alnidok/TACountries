<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Индия</h1>
                <div class="lead">
                    <b>Столица</b>: Нью-Дели<br>
                    <b>Официальный язык</b>: хинди, английский<br>
                    <b>Валюта</b>: INR — индийская рупия<br>
                    <b>Территория</b>: 3,29 млн. км²<br>
                    <b>Население</b>: 1 млрд. 290 млн. человек<br>
                    <b>Часовой пояс</b>: GMT+05:30. Разница с Астаной -30 мин.
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="MYSTERY OF INDIA" src="https://i.vimeocdn.com/video/605590939_1280x720.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/193785050?autoplay=1" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Oleg Zayanov, 2016</figcaption>
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
                <p>Республика Индия — крупнейшее государство, расположенное в Южной Азии. Индии принадлежит второе место в мире по численности населения и седьмое по площади территории.</p>
                <p>Государство граничит с Пакистаном, Китаем, Бутаном, Непалом, Мьянмой и Бангладеш, а также обладает морскими границами с Мальдивами, Индонезией и Шри-Ланкой.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Крупные города в стране — Мумбаи, Дели, Ченнаи, Бангалор.</p>
                <p>Дели удостаивается особого внимания как культурный и административный центр Индии. Здесь находятся: высочайший в мире минарет Кутуб-Минар, гробница Хумаюна, множество храмов. Туристам обязательно захочется посетить Музей Индиры Ганди, национальную галерею искусства, музей ремесел, зоопарк и многое другое.</p>
                <p>Любителям шоппинга непременно следует посетить Мумбаи с его знаменитыми городскими рынками — сюда туристы едут за шелком, золотом, серебром, посудой и предметами декора, индийской косметикой, специями.</p>
                <p>Тем, кто не представляет отдыха без клубной, ресторанной и барной жизни обязательно придется по душе город Бангалор — здесь светская жизнь бьет ключом! Также Бангалор является научным и индустриальным центром страны.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Золотой треугольник Индии" src="https://i.vimeocdn.com/video/491031332_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/107582838?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Золотой треугольник Индии<br>© Aleksey Kaznadey 2014</figcaption>
            </figure>
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Загадочная Индия  Mystic India    Интересный Документальный Фильм" src="https://i.ytimg.com/vi/qJl4VbnR238/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/qJl4VbnR238?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Загадочная Индия  Mystic India    Интересный Документальный Фильм<br>© Мачё мэн 2015</figcaption>
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
        <p>В Индии проживает 1,3 млрд человек (по состоянию на 2016 г.) — это одна шестая часть населения Земли. Можно выделить основные этнические группы: хиндустанцы, маратхи, телугу, джат, бенгальцы, каннара, тамилы и пенджабцы.</p>
        <p>Более 80% жителей исповедуют индуизм, около 14% ислам, 3% христианство, 2% сикхизм и 0,7% буддизм.</p>
        <p>Средняя продолжительность жизни в Индии составляет 65,8 лет.</p>
        
        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p><i class="icon-link"></i> Министерство Культуры Индии -
                    <a href="http://www.indiaculture.nic.in/" target="_blank" rel="nofollow">indiaculture.nic.in</a>
                </p>
                <p>В Индии издревле пересекалось множество крупных торговых маршрутов, страна подвергалась завоеваниям — всё это повлияло на многообразие и богатство индийской культуры.</p>
                <p>Наиболее ярко культурное наследие отображено в архитектуре (например, всемирно известный Тадж-Махал), музыке и танцах, кино и театре, литературе.</p>
                <p>Современная Индия сохранила свои удивительные традиции, проявляющиеся в быте, праздниках, одежде, национальной кухне.</p>
                <p>Традиционная одежда индийцев очень необычная и красивая: женщины часто носят яркие цветные сари — цельный отрез ткани из хлопка или шелка, оборачиваемый вокруг тела, с вышивкой, драгоценными камнями и другими украшениями. В некоторых регионах Индии более популярны Шальвар – это свободные женские брюки, которые плотно прилегают у лодыжек. С ними обычно носят разнообразные длинные туники.</p>
                <p>Индийская кухня в каждом штате имеет свои особенности — несомненно на нее очень влияют климат и религия. Индуисты не употребляют в пищу говядину, мусульмане — свинину, поэтому в Индии чаще всего подают блюда из птицы, баранины и козлятины. Основной рацион питания составляют овощи, рис, хлебные изделия, бобовые, молочные продукты, фрукты.</p>
                <p>Иностранным туристам из уважения к традиционному укладу индийцев следует соблюдать ряд правил поведения:</p>
                <ul>
                    <li>посещать храм или иные святые места только в закрытой одежде</li>
                    <li>снимать обувь перед входом в храм, а также в дом местных жителей</li>
                    <li>не следует прикасаться к одежде или телу индийцев</li>
                    <li>в Индии не принято слишком эмоциональное выражение чувств в людных местах (объятия, поцелуи и т.д.)</li>
                    <li>фотографировать местных жителей можно только с их разрешения</li>
                </ul>
                <p>Уровень преступности в стране довольно высокий, поэтому туристам необходимо знать и соблюдать меры предосторожности:</p>
                <ul>
                    <li>не носить при себе крупные денежные суммы и дорогие украшения</li>
                    <li>не оставлять без присмотра личные ценные вещи</li>
                    <li>избегать посещения районов с повышенной криминогенной обстановкой</li>
                    <li>по возможности воздержаться от прогулок по улицам в ночное время</li>
                    <li>женщинам следует избегать путешествия в Индию без сопровождения</li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>26 января — День Республики</li>
                            <li>8 марта — Международный женский день</li>
                            <li>1 мая — Праздник Труда</li>
                            <li>15 августа — День независимости</li>
                            <li>5 сентября — День учителя</li>
                            <li>2 октября — День рождения Махатмы Ганди</li>
                            <li>14 ноября — День детей</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ЗАГАДОЧНАЯ И МУДРАЯ Индия! | ЭТО НУЖНО ЗНАТЬ" src="https://i.ytimg.com/vi/1Wgc2i-Yngg/maxresdefault.jpg" class="bg-image"
                        />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/1Wgc2i-Yngg?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ЗАГАДОЧНАЯ И МУДРАЯ Индия! | ЭТО НУЖНО ЗНАТЬ
                        <br>© The Scale \\ Масштабы 2016</figcaption>
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
                <p>Климат Индии изменяется от юга к северу — от субэкваториального до умеренного соответственно. На климатические условия существенно влияют пустыня Тар (вызывает муссоны) и Гималаи (преграждают холодные ветра из Азии). На основной части территории страны можно выделить 3 сезона:</p>
                <ul>
                    <li>влажный и жаркий (с июня по октябрь) — выпадает около 80% годовых осадков</li>
                    <li>сухой и прохладный (с ноября по февраль)</li>
                    <li>сухой и очень жаркий (с марта по май)</li>
                </ul>
                <p>Средняя температура в январе в зависимости от приближенности к югу составляет от +15 до +28 °C, в мае в среднем до +35 °C, в некоторых районах до +48 °C. В сезон дождей средняя температура составляет +28 °C.</p>
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
                <p>Для въезда на территорию Индии гражданам Республики Казахстан необходима виза. Ее можно оформить самостоятельно в посольстве или через турагентство.</p>
                <p>Для оформления туристической визы требуется собрать пакет документов*:</p>
                <ul>
                    <li>загранпаспорт (должен быть действительным не менее 8 месяцев с момента окончания поездки) + копия</li>
                    <li>цветное фото 5*5 (2 шт.)</li>
                    <li>справка с места работы (с указанием должности и оклада) или выписка о состоянии банковского счета</li>
                    <li>копии билетов</li>
                    <li>заполненная анкета</li>
                    <li>свидетельство о браке</li>
                    <li>нотариально заверенное согласие родителей (или мужа) на въезд в Индию для женщин, не достигших 35-летнего возраста</li>
                </ul>
                <P>*Информация носит ознакомительный характер, за более подробной информацией следует заблаговременно обращаться в посольство.</P>
                <p>Ежедневно выполняется прямой рейс по направлению Алматы-Дели-Алматы, осуществляемый авиакомпанией Air Astana. Также авиакомпанией SCAT открываются чартерные рейсы в период туристического сезона по маршруту Алматы-Гоа-Алматы.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i> Требуется виза</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+проспект+кабанбай+батыра,+6/1&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Индии</h5>
                        <p>Астана, проспект Кабанбай батыра, 6/1</p>
                        <p><i class="icon-phone"></i> +7 (7172) 92-57-00</p>
                        <p><i class="icon-link"></i> <a href="http://www.indembastana.in/" target="_blank" rel="nofollow">www.indembastana.in</a></p>
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
                                <div>Алматы-Дели</div>
                                <span>7 раз/нед</span>
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
            <i class="icon icon-link"></i> Сайт таможенной службы Индии -
            <a href="http://www.cbec.gov.in"
                target="_blank" rel="nofollow">cbec.gov.in</a>
        </p>

        <h5>Разрешены к беспошлинному ввозу:</h5>
        <ul>
            <li>сигареты (до 200 шт.) или сигары (до 50 шт.) или табак (до 250 г)</li>
            <li>спиртные напитки (до 0,95 л)</li>
            <li>украшения</li>
            <li>продукты питания и личные вещи для собственного использования</li>
            <li>фото и кинокамера</li>
            <li>спортинвентарь — по одному предмету каждого вида</li>
            <li>сувениры на сумму не более 500 INR</li>
        </ul>

        <h5>Запрещены к ввозу:</h5>
        <ul>
            <li>наркотики</li>
            <li>золотые слитки</li>
            <li>золотые монеты (без соответствующего разрешения)</li>
        </ul>

        <h5>Запрещены к вывозу:</h5>
        <ul>
            <li>редкие животные</li>
            <li>шкура и кожа диких животных</li>
            <li>оперение птиц редких видов</li>
            <li>слоновая кость</li>
            <li>растения</li>
            <li>золото и серебро в слитках</li>
            <li>ювелирные изделия (на общую сумму свыше 2000 INR)</li>
        </ul>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система Индии</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Для перемещения по Индии на дальние расстояния туристам предпочтительнее выбирать ж/д транспорт как наиболее надежный. Речной транспорт также довольно развит, он отличается низкой стоимостью проезда, но менее комфортными условиями.</p>

                <h5>Автобусы</h5>
                <p>Из городского общественного транспорта на долю автобусов приходится 90% всех перевозок. Автопарк в столице и крупных городах отличается довольно современными и комфортными автобусами, чего не скажешь о провинции. Повсеместно наблюдается большая наполняемость автобусов в часы пик, поэтому особенно внимательно нужно следить за своими личными вещами во избежание краж.</p>

                <h5>Такси</h5>
                <p>Альтернативой автобусам выступают такси: автомобильные, моторикши и велорикши. Цены на них, как правило, невысокие, но туристам перед поездкой обязательно нужно договориться о стоимости со всеми нюансами (например, что цена будет окончательная за всех пассажиров, а не за одного, что оговариваемая сумма в местной валюте, а не в долларах и т.д.). Торг с таксистом уместен, зачастую изначально названную водителем сумму проезда можно снизить в 2-3 раза.</p>
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
                                <div>Автобус м/г</div>
                                <span>около 100 INR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус городской</div>
                                <span>от 5-15 INR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Паром</div>
                                <span>от 3-4 INR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 1,5-3 INR за км</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ИНДИЯ 16. Поезда Классы и цены билетов. Едем в Ченнаи. Транспорт в Индии." src="https://i.ytimg.com/vi/nL_iPGW_S2k/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/nL_iPGW_S2k?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ИНДИЯ 16. Поезда Классы и цены билетов. Едем в Ченнаи. Транспорт в Индии.
                        <br>© India Magic TV 2016</figcaption>
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
                <p>Дороги Индии не отличаются качественным покрытием, имеются ямы и выбоины, разметка и дорожные знаки зачастую отсутствуют. Движение транспорта очень хаотичное — местные водители зачастую пренебрегают ПДД. В связи с этими факторами, а также с учетом левостороннего движения, туристам самостоятельно управлять транспортным средством не рекомендуется — в Индии часто практикуется аренда автомобиля вместе с водителем.</p>
                

                <h5 class="mt-3">Аренда авто</h5>
                <p>Для аренды автомобиля в Индии необходимы следующие документы: загранпаспорт, водительские права, страховой полис, а также внесение залога.</p>
                <p>Стоимость аренды автомобиля определяется его маркой, уровнем комфорта (наличием кондиционера, к примеру) и расстоянием поездки. Средняя стоимость проката бюджетного авто составляет 650 - 1000 INR в день или 11 тыс. INR в месяц. Если транспорт арендуется вместе с водителем, то к общей сумме добавляется оплата его услуг (от 150 INR в день).</p>
                <p>Можно также взять на прокат скутер, для этого нужен паспорт и залог. Стоимость аренды скутера около 200 - 350 INR в день.</p>
                <p>Перед оформлением договора аренды автомобиля или другого транспортного средства обязательно проведите его тщательный осмотр на предмет повреждений и исправной работе всех систем.</p>

                <h5 class="mt-3">ДТП</h5>     
                <p>В случае ДТП необходимо обращаться к представителю консульства Казахстана, не рекомендуется подписывать никакие бумаги и протоколы без его присутствия.</p>  
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Гражданам Казахстана разрешено управление автомобилем при наличии национального водительского удостоверения, в том числе международного образца. Однако необходимо учитывать, что такие удостоверения не признаются страховой компанией в случае ДТП, поэтому рекомендуется оформить удостоверение индийского образца.</p>
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
                                <span>76 INR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>67 INR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Газ</div>
                                <span>40.22 INR за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Как арендовать байк или машину в Гоа" src="https://i.ytimg.com/vi/f2UPa6P7oG0/maxresdefault.jpg" class="bg-image"
                        />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/f2UPa6P7oG0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Как арендовать байк или машину в Гоа
                        <br>© Путешествия Черепановых 2015</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Санитарно-эпидемиологическая обстановка в Индии довольно напряженная. Столица и крупные города отличаются сильной загазованностью и загрязнением.</p>
        <p>Этот фактор, а также особенности климата, особенно должны учитывать лица с хроническими сердечно-сосудистыми заболеваниями и болезнями органов дыхания.</p>
        <p>В стране высокое распространение ВИЧ-инфекции и СПИДа, а также малярии, лихорадки денге, чикунгуньи.</p>
        <p>К рекомендуемым мероприятиям перед поездкой в Индию относится вакцинация против дифтерии, гепатита А и В, менингита, столбняка, брюшного тифа.</p>
        <p>С целью профилактики желудочно-кишечных заболеваний необходимо:</p>
        <ul>
            <li>пить только бутилированную воду</li>
            <li>часто и тщательно мыть руки </li>
            <li>овощи и фрукты обрабатывать антисептическим мылом, мыть только бутилированной водой</li>
            <li>употреблять только качественно приготовленную пищу</li>
        </ul>
        <p>Медицинские услуги для иностранных туристов на территории страны платные. Получить квалифицированную мед. помощь в крупных городах и туристических центрах проблемы не составляет, сложнее обстоит дело с удаленными территориями.</p>
        <p>При несчастном случае рекомендуется звонить в ближайшую крупную частную клинику — так вы получите более качественную и быструю медицинскую помощь (в отличии от государственных клиник). При наличии страхового полиса необходимо немедленно связаться со страховщиком (номер телефона указан в полисе).</p>


        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Cвязь</h2>
                
                <h5>Мобильная связь</h5>
                <p>Наиболее популярные мобильные операторы в Индии:</p>
                <ul>
                    <li>Airtel -
                        <a href="https://www.airtel.in/" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                    <li>Idea -
                        <a href="https://www.ideacellular.com/" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                    <li>Vodafone -
                        <a href="https://www.vodafone.in/" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                    <li>BSNL -
                        <a href="http://www.bsnl.co.in/" target="_blank" rel="nofollow">перейти на сайт</a>
                    </li>
                </ul>
                <p>Сим-карту можно приобрести повсеместно, даже в мелких лавках. Для ее получения необходимы ксерокопия паспорта и цветное фото (как на паспорт).</p>
               
                <h5>Интернет</h5>
                <p>Что касается интернета, то некоторые туристы предпочитают пользоваться услугами интернет-кафе, которые довольно распространены в больших городах и крупных туристических центрах. Во многих отелях и ресторанах имеются платные или бесплатные Wi-Fi точки.</p>
           
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
                                <span>100</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>101</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Круглосуточная горячая линия помощи туристу</div>
                                <span>1363</span>
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