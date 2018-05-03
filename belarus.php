<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Беларусь</h1>
                <div class="lead">
                    <b>Столица</b>: Минск
                    <br>
                    <b>Официальные языки:</b>: белорусский, русский
                    <br>
                    <b>Валюта</b>: BYN — белорусский рубль
                    <br>
                    <b>Территория</b>: 207 600 км²
                    <br>
                    <b>Население</b>: 9.5 млн человек 
                    <br>
                    <b>Часовой пояс</b>:  UTC+3 Разница во времени между Республикой Беларусь и Астаной -3 часа


                </div>
            </div>

            <div class="col-lg-6">
                    <figure class="figure d-block">
                        <div class="video-cover box-shadow mb-0">
                            <img alt="Презентационный ролик о Беларуси" src="https://i.ytimg.com/vi/oGWGiambBx8/maxresdefault.jpg" class="bg-image"/>
                            <div class="video-play-icon">
                                <i class="icon-controller-play"></i>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/oGWGiambBx8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <figcaption class="figure-caption text-light text-right">© ALUTECH Group of companies, 2012</figcaption>
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
                <p>Республика Беларусь — восточноевропейское государство. Граничит с Литвой, Латвией, Польшей, Россий и Украиной.</p>
    
                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Беларусь привлекает туристов своей живописной природой, насыщенной экскурсионной программой, огромными возможностями для отдыха и оздоровления в санаториях по приемлемым ценам.</p>
                <p>Столицей страны является Минск — крупнейший город в Беларуси с особой энергетикой, сочетающей в себе советское наследие и европейский уклад, и потому ежегодно посещаемый десятками тысяч туристов.</p>
                <p>Главными достопримечательностями столицы являются:</p>
                <ul>
                    <li>площадь Свободы в центре Верхнего города — здесь располагаются древние здания Минской Ратуши и интересный памятник «Коляска губернатора»;</li>
                    <li>площадь Независимости — одна из крупнейших в Европе.  На площади размещаются здания правительства, педагогического университета и красивейший храм из красного кирпича — костел Св. Симона и Св. Елены (Красный костел);</li>
                    <li>Минский театр оперы и балета;</li>
                    <li>военно-исторический комплекс «Линия Сталина», представляющий собой музей под открытым небом;</li>
                    <li>музей истории ВОВ в Минске;</li>
                    <li>мемориал «Остров Мужества и Скорби» (его также называют островом слез) — комплекс храмов и памятников, посвященный погибшим во время военных действий в Афганистане.</li>
                </ul>
                <p>Минск также славится огромным количеством парков, скверов и ботанических садов. Для семейного отдыха отличным вариантом является Центральный детский парк им. Горького, где с высоты Колеса обозрения можно полюбоваться прекрасным видом города.</p>
                <p>К тому же, в столице 6 аквапарков, зоопарк, дельфинарий и даже динопарк.</p>
                <p>И, конечно, буквально на каждом углу находятся рестораны и кафе, где гости города могут отведать вкуснейшие белорусские драники и другие национальные блюда.</p>

            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Minsk... city of Sun." src="https://i.vimeocdn.com/video/614074594_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/200496838?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Minsk... city of Sun.<br>© zweizwei |timelapse&hyperlapse| 2017</figcaption>
            </figure>
            
                
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Архітэктура і культура Беларусі" src="https://i.ytimg.com/vi/_OkytlhLMFI/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/_OkytlhLMFI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Архітэктура і культура Беларусі<br>© Nikoloz Shavishvili 2017</figcaption>
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

        <p>На территории Республики Беларусь проживают представители более 130 этнических групп, самыми многочисленными из которых являются белорусы (84%), русские (8%), поляки (3%) и украинцы (2%).</p>
        <p>В стране 70% верующих относятся к Русской православной церкви, около 14% — к Римской католической церкви.</p>
        <p>Доля городского населения значительно преобладает над сельским и составляет 77%, причем почти треть белорусов проживает в Минской агломерации.</p>
        <p>Средняя ожидаемая продолжительность жизни в стране 71 год: 77 лет для женщин и 66 лет для мужчин.</p>
        

        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>
                <p><i class="icon-link"></i> Министерство Культуры Республики Беларусь - <a href="http://www.kultura.by/by/" target="_blank" rel="nofollow">kultura.by</a></p>
                <p>Белорусские традиции и обряды имеют большое количество общих черт с традициями славянских соседей, причем среди них множество являются языческими, несмотря на длительное главенство христианства. Прежде всего эти ритуалы связаны с сельским хозяйством, заготовками леса, а также с рождением и смертью. Праздниками, берущими свое начало в язычестве, являются Масленица, Купалье (праздник Ивана Купалы), Гуканне вясны (переход от зимы к лету), Дожинки (окончание жатвы) и другие.</p>
                <p>Одним из наиболее почитаемых религиозных праздников является Пасха. К этому дню верующие пекут куличи и красят яйца, затем обязательно посещают всенощную службу.</p>
                <p>Главной ценностью белорусов и основой общества всегда являлась и является семья, где традиционно мужчине отводится роль защитника и добытчика, а женщине — роль матери, хозяйки, хранительницы очага.</p>
                <p>В обществе с большим уважением относятся к старшим, а в детях стараются воспитывать такие качества, как честность, открытость, взаимопомощь.</p>
                <p>Ярким проявлением местной культуры являются также белорусская народная музыка, особенности которой стараются сохранить некоторое современные эстрадные группы. В стране ежегодно проводятся фестивали, посвященные различным музыкальным и танцевальным направлениям: «Славянский базар» в Витебске, «Минская весна», «Белорусская музыкальная осень», «Музы Нясвіжа», «Золотой шлягер».</p>
                <p>Что касается национальной кухни Беларуси, то ее отличают преобладание блюд из муки, картофеля, овощей и круп: драники, клецки, затирка, блины, оладьи. К этим блюдам обычно подается сметана, шкварки или грибы. Мясо употреблялось редко — к праздникам хозяйки готовили жаркое, печисты (жареные тушки поросят или кроликов), студень.</p>
                <p>Традиционным напитком является квас — в Белоруссии можно насчитать сотни рецептов его приготовления на основе хлеба, ягод или муки.</p>
                

            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>7 января — Рождество Христово (православное)</li>
                            <li>23 февраля — День защитников Отечества</li>
                            <li>8 марта — День женщин</li>
                            <li>15 марта — День конституции</li>
                            <li>1 мая — Праздник труда</li>
                            <li>9 мая — День Победы</li>
                            <li>3 июля — День Независимости</li>
                            <li>7 ноября — День Октябрьской революции</li>
                            <li>25 декабря — Рождество Христово (католическое)</li>                            
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Национальная белорусская кухня для иностранных туристов" src="https://i.ytimg.com/vi/MoK2Ieos9tI/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/MoK2Ieos9tI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Национальная белорусская кухня для иностранных туристов<br>© Телеканал ОНТ 2017</figcaption>
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

                <p>Климат Беларуси умеренно-континентальный, большое влияние на него оказывают воздушные массы Атлантики.</p>
                <p>Средние летние температуры составляют от +17°С до +19°С, зимние — от -4°С до -8°С.</p>
                <p>На южных территориях страны в год выпадает около 500 мм осадков, а на северных — до 800 мм, причем максимум их достигает в осенне-зимний период.</p>
                
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

                <p>Посещение Республики Беларусь для граждан Казахстана является безвизовым на срок до 90 дней (в течение одного календарного года). При себе необходимо иметь паспорт гражданина РК.</p>
                <p>Кроме того, в соответствии с Соглашением между правительством Республики Казахстан и Республики Беларусь (от 03.10.2013 г.), граждане Казахстана освобождены от обязательной регистрации сроком до 30 календарных дней.</p>
                    
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
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
                    </ul>
                </div>

                
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+ул.+кенесары,+35&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Беларуси</h5>
                        <p>Астана, ул. Кенесары, 35</p>
                        <p><i class="icon-phone"></i> + 7 (7172) 32-48-29</p>
                        <p><i class="icon-link"></i> <a href="http://kazakhstan.mfa.gov.by" target="_blank" rel="nofollow">kazakhstan.mfa.gov.by</a></p>
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
                                <div>Алматы-Минск</div>
                                <span>3 раза/нед</span>
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

        <p><i class="icon icon-link"></i> Сайт таможенной службы Беларуси - <a href="http://www.customs.gov.by/" target="_blank" rel="nofollow">customs.gov.by</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Гражданам Казахстана, достигшим 18-летнего возраста, разрешается беспошлинно ввозить до 200 сигарет и до двух литров спиртных напитков.</p>

        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен (сумма свыше 10 тыс. USD подлежит обязательной декларации).</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Ввоз оружия (огнестрельного, спортивного, охотничьего) и боеприпасов к нему возможен строго при наличии соответствующего разрешения от МВД республики Беларусь.</p>

        <h5>Запрещены к ввозу:</h5>
        <ul>
            <li>наркотические средства и наркосодержащие лекарства;</li>
            <li>ядовитые вещества;</li>
            <li>взрывчатые вещества и взрывные устройства;</li>
            <li>пневматические резиновые шины, бывшие в употреблении (более 4-х штук);</li>
            <li>аудио-, видео- и печатные материалы, содержащие информацию, противоречащую морально-этическим нормам и/или разжигающие политические, национальные, религиозные и иные конфликты;</li>
            <li>патогенные (или условно-патогенные) генно-инженерные организмы.</li>
        </ul>

        <h5>Запрещены к вывозу:</h5>
        <ul>
            <li>объекты, представляющие культурную и/или историческую ценности (без соответствующего разрешения Министерства Культуры РБ)</li>
            <li>дикорастущие лекарственные растения;</li>
            <li>лом цветных, черных и драгоценных металлов (в т. ч. заготовки и полуфабрикаты).</li>
        </ul>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                
                <h5>Железнодорожный транспорт</h5>
                <p>В Беларуси посредством железной дороги обеспечивается половина всех пассажирских перевозок и 75% грузовых. Эксплуатационная длина путей составляет около 5,5 тыс. км.</p> 
                <p>Выделяют следующие виды сообщений:</p>   
                <ul>
                    <li>городские линии (электрички) — функционируют в пределах Минска и областных центров;</li>
                    <li>региональные линии — связывают столицу с Брестом, Барановичами, Осиповичами и Оршей;</li>
                    <li>межрегиональные линии — связывают Минск с областными центрами и областные центры друг с другом;</li>
                    <li>международные линии — связывают Беларусь с Берлином, Парижем, Варшавой, Веной, Прагой, а также столицами и административными центрами России, Казахстана, Украины, Латвии и Литвы.</li> 
                </ul>    
                 <p>Билеты можно приобрести в кассах вокзала, а также на сайте Белорусской железной дороги <a href="http://www.poezd.rw.by" target="_blank" rel="nofollow">poezd.rw.by</a>.</p>       
                
                 <h5>Воздушный транспорт</h5>
                 <p>В Беларуси насчитывается 6 международных аэропортов, расположенных в городах: Минск, Гомель, Брест, Витебск, Гродно и Могилев.</p>
                 <p>Основной авиакомпанией является Белавиа, осуществляющая собственные регулярные перелеты по 49 маршрутам 27 стран Европы, Азии и СНГ.</p>

                 <h5>Городской транспорт</h5>
                 <p>В столице и других городах Беларуси отлично развита система общественного транспорта, представленная автобусами, трамваями и маршрутным такси. Билеты на проезд приобретаются в специальных киосках или у кондуктора. На многих остановочных павильонах размещены схемы маршрутов.</p>
                 <p>В Минске есть также метрополитен, включающий в себя 2 линии с 30 станциями (в настоящее время продолжается строительство новых станций). Оплата производится с помощью одноразовых жетонов или проездных бесконтактных смарт-карт. При переходе на другую линию метро дополнительно оплачивать проезд не нужно.</p>
                 
                
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
                                <span>0,60 BYN</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Троллейбус</div>
                                <span>0,60 BYN</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>0,65 BYN</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 0,50 BYN за км</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Новые модели общественного транспорта появятся в Минске. ТВОЙ ГОРОД" src="https://i.ytimg.com/vi/K2an3c8poKU/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://youtube.com/embed/K2an3c8poKU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Новые модели общественного транспорта появятся в Минске. ТВОЙ ГОРОД<br>© АТН новости Беларуси и мира 2018</figcaption>
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
               
                <p>Протяженность дорог в Беларуси составляет более 83 тыс. км.</p>
                <p>Правила дорожного движения в целом аналогичны с казахстанскими, однако, можно выделить ряд особенностей:</p>
                <ul>
                    <li>максимальная скорость в городе — 60 км/час, за его пределами — до 90 км/час, на автомагистралях — до 110 км/час;</li>
                    <li>контроль скоростного режима осуществляется посредством радаров и камер;</li>
                    <li>проезд по всем дорогам для легковых автомобилей является бесплатным;</li>
                    <li>большинство парковочных мест являются платными — около 2,5 BYN в час или 8 BYN в сутки;</li>
                    <li>действует страховой полис Green Card, при его отсутствии транспортное средство можно застраховать в компании «Белгосстрах».</li>
                </ul>

                <h5>Аренда авто</h5>
                <p>Арендовать автомобиль можно в прокатных фирмах Минска или другого крупного города.</p>
                <p>Для заключения договора аренды потребуются паспорт, водительские права и кредитная карта.</p>
                <p>Необходимо внимательно ознакомиться со всеми пунктами договора, а также осмотреть арендуемое транспортное средство на предмет царапин или иных повреждений и зафиксировать их документально.</p>
                <p>Средняя стоимость проката автомобиля составляет 100-150 BYN в сутки. За дополнительную плату можно приобрести автокресло, багажник и навигатор.</p>
                           
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Республики Казахстан могут управлять транспортным средством на территории Беларуси при наличии национального водительского удостоверения.</p>
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
                                <div>Бензин 95</div>
                                <span>1,35 BYN за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин 98</div>
                                <span>1,46 BYN за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1,35 BYN за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="В Минске значительно усовершенствуют организацию дорожного движения. ТВОЙ ГОРОД" src="https://i.ytimg.com/vi/ceCToFuw94I/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://youtube.com/embed/ceCToFuw94I?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">В Минске значительно усовершенствуют организацию дорожного движения. ТВОЙ ГОРОД<br>© АТН новости Беларуси и мира 2018</figcaption>
                </figure>            
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
        <p>Республика Беларусь характеризуется стабильной санитарно-эпидемиологической обстановкой.</p>
        <p>Медицинские службы Беларуси обязуются оказывать экстренную (неотложную) мед. помощь гражданам Республики Казахстан без взимания оплаты (в соответствии со ст.3 Соглашения о сотрудничестве в области охраны здоровья населения). Плановые медицинские услуги могут быть оказаны на платной основе.</p>
        
        <!-- <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a> -->
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь и интернет</h2>
                <p>В Беларуси выделяются три крупных оператора сотовой связи:</p>
                <ul>
                    <li>МТС - <a href="https://www.mts.by/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Velcom - <a href="https://www.velcom.by/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Life - <a href="https://www.life.com.by/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Как правило, для иностранных туристов доступны гостевые тарифы, основанные на предоплате. Подробности можно узнать на сайте компаний.</p>
                <p>Что касается интернета, то Wi-Fi-точки есть в отелях, ресторанах и кафе, в Минске и крупных городах работают интернет-кафе.</p>

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
                                <div>МЧС</div>
                                <span>101</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Милиция</div>
                                <span><nobr>102</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span><nobr>103</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная служба Минска</div>
                                <span><nobr>109</nobr></span>
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