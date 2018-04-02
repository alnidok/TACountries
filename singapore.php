<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Сингапур</h1>
                    <div class="lead">
                        <b>Столица</b>: Сингапур<br>
                        <b>Официальный язык</b>: английский, китайский, малайский, тамильский<br>
                        <b>Валюта</b>: SGD - сингапурский доллар<br>
                        <b>Территория</b>: 718 км²<br>
                        <b>Население</b>: 5.6 млн человек<br>
                        <b>Часовой пояс</b>: UTC +8. Разница с Астаной +2 часа
                    </div>
                </div>
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
                <p>Город-государство, расположенный на острове в Юго-Восточной Азии, отделённый от южной оконечности Малаккского полуострова узким Джохорским проливом. Граничит с султанатом Джохор, входящим в состав Малайзии и с островами Риау в составе Индонезии. Тропический, среднедневная температура может колебаться в пределах от +24 до +31 °С, влажность воздуха — 84,3 %, среднегодовой объем осадков 2400 мм.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Singapore'2012" src="https://i.vimeocdn.com/video/272961468_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/39557378?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Singapore'2012<br>© zweizwei |timelapse&hyperlapse| 2012</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="СИНГАПУР - город экономического чуда" src="https://i.ytimg.com/vi/mYmEtWTk_jo/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/mYmEtWTk_jo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">СИНГАПУР - город экономического чуда<br>© МАРИНА МУДРОВА 2014</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#culture">Культура и традиции</a></li>
            <li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#safety">Безопасность</a></li>
            <li class="nav-item"><a class="nav-link" href="#other">Прочее</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>
        <p>Сингапур считается одним из наиболее спокойных и чистых городов Азии во многом благодаря строгим законам и неусыпному контролю за их соблюдением.</p>
        <p>В Сингапуре установлены серьезные меры наказания за поведение, которое в других странах назвали бы просто «некультурным». Большие штрафы предусмотрены за переход улицы в неположенном месте, за продажу жевательных резинок, за употребление пищи/напитков в метро, за мусор в местах общего пользования и т.д.</p>

        <p>Сингапурцы крайне законопослушный народ, и того же ожидают от гостей своей страны.</p>

        <h5>Праздники и памятные даты</h5>

        <div class="card bg-secondary">
            <div class="card-body">
                <ul>
                    <li>1 января — Новый год; </li>
                    <li>2 дня в январе или феврале — Китайский Новый год;</li>
                    <li>апрель — Пасха;</li>
                    <li>апрель-май — Буддийский праздник Весак (День рождения Будды); </li>
                    <li>1 мая — День труда;</li>
                    <li>9 августа — Национальный день Сингапура; </li>
                    <li>мусульманские праздники Хари Рая Пуаса (окончание месяца Рамадан) и Хари Рая Хаджи (окончание Хаджа в Мекку);</li>
                    <li>октябрь – Дипавали (Дивали)</li>
                    <li>25 декабря — Рождество.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Для пребывания в Сингапуре гражданам Казахстана требуется виза. </p>
                <p>Основной список документов.</p>
                <ul>
                    <li>Паспорт: в паспорте должны быть свободные страницы для вклеивания визы , проверьте дату выдачи паспорта по окончанию визы паспорт должен действовать как минимум 6 месяцев.</li>
                    <li>Справка от работодателя</li>
                    <li>Фото на визу размер: 30 мм на 40 мм, количество: 1 фотография</li>
                    <li>Заявление </li>
                    <li>Документ подтверждающий места прописки (адресная справка).</li>
                    <li>Свидетельство о заключение брака (копия).</li>
                    <li>Свидетельство о рождении детей (копия).</li>
                    <li>Детям до 18 лет выезжающим в сопровождении одного опекуна разрешение на выезд от второго родителя заверенное нотариально.</li>
                    <li>Дополнительно: ваучер на отель.</li>
                </ul>
                <p><i>Данная информация является ознакомительной, и не является руководством к оформлению визы.</i></p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span class="h6"><b>Консульство Сингапура в Казахстане</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Алматы, пр. Абая, 52в, 3 этаж, 310 офис</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Телефон</div>
                                <span>+7 (+727) 222-36-87</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Сайт</div>
                                <span><a href="https://www1.mfa.gov.sg/">mfa.gov.sg</a></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Email</div>
                                <span><a href="mailto:kzsingapore@outlook.com">kzsingapore@outlook.com</a></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиасообщение</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Прямых авиарейсов в Сингапур нет
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс с пересадкой</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p></p>

        <h5>Спиртное и сигареты</h5>
        <p>Лицам старше 18 лет предоставляется право ввезти на территорию Сингапура для личного потребления без уплаты таможенных пошлин 1 литр крепких алкогольных напитков, 1 литр вина и 1 литр пива. Однако эта льгота не распространяется на лиц, въезжающих в Сингапур из Малайзии, а также на тех, кто провел за пределами Сингапура менее 48 часов — для этой категории лиц ввоз алкоголя запрещен.</p>

        <p>Табачные изделия, ввозимые в Сингапур в любом количестве, подлежат декларации и облагаются таможенными пошлинами.</p>

        <h5>Валюта.</h5>
        <p>Лица, въезжающие в Сингапур и выезжающие из Сингапура, имеющие при себе наличные средства или оборотные документы на предъявителя на общую сумму в 20 тыс. синг. долл. (или эквивалент в иностранной валюте) и более, при прохождении таможенного контроля обязаны подать соответствующую декларацию.</p>

</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Общественный транспорт  Сингапура удобен, ходит по расписанию, на любой остановке автобуса и станции метро есть схемы маршрута движения.</p>
                <p>Для регулярных поездок на общественном транспорте можно приобрести электронный проездной билет (EazyLink). Билет очень удобен, так как позволяет передвигаться по городу как на метро, так и на автобусе.</p>
                <p>Автобус — самый недорогой вид общественного транспорта в Сингапурe. Плата за проезд составляет 1—2 синг. долл.</p>
                <p>В большинстве сингапурских автобусов можно расплатиться как наличными (однако сдачи там не дают), так и с помощью электронного проездного билета EazyLink.</p>
                <p>Сингапурское метро комфортабельно и ультрасовременно. Цена поездки зависит от расстояния (от 1 до 3 синг. долл.). Продажа билетов и их контроль полностью автоматизированы. Билет можно приобрести в специальном автомате или в кассе.</p>
                <p>В Сингапуре более 15 000 такси и проезд в них стоит недорого. </p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>1-3 синг. долл.</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>1-2 синг. долл.</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>~5+0,5 синг.долл/км</span>
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
            <div class="col-12 col-md-8 col-lg-7">
                <p>В стране левостороннее движение.</p>
                <p>В целом, участники дорожного движения достаточно дисциплинированы, что обусловлено высокими штрафами за нарушения правил дорожного движения и жестким контролем полиции на дорогах.</p>
                <p>Максимальная скорость для езды по городу — 50 км/ч​ (если не указана иная скорость). </p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span>~2.1 синг.долл/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="100 дорог СИНГАПУР 9" src="https://i.ytimg.com/vi/Ob4l0L-mIZA/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Ob4l0L-mIZA?autoplay=1&rel=0&showinfo=0&start=13" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">100 дорог СИНГАПУР 9<br>© TV1.KG 2016</figcaption>
                </figure>
            </div>
        </div>


    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Санитарно-эпидемиологическая обстановка в Республике Сингапур в целом благополучная, большинство инфекционных заболеваний, характерных для Юго-Восточной Азии (малярия, лихорадка Денге, холера, вирусный гепатит и т.д.) практически отсутствуют, либо находятся под контролем эпидемиологических служб. В то же время жаркий и влажный климат оказывает угнетающее влияние на самочувствие, а длительное пребывание на открытом воздухе под палящим солнцем может привести к тепловому удару, а также к солнечным ожогам.</p>
        <p>В связи с высокой стоимостью медицинских услуг в Сингапуре, перед поездкой в Сингапур настоятельно рекомендуется приобретать медицинскую страховку.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Международный код страны – 65. Подавляющее большинство номеров сотовых телефонов начинаются на 010 или 011. На приобретение сингапурской СИМ-карты никаких ограничений нет, достаточно предъявить свой загранпаспорт.</p>
                <p>Провайдерами мобильной связи в стране являются Singtel, MobileOnе и StartHub. Приобрести карту можно как в представительствах перечисленных фирм, так и в отделениях местной почты, торговых комплексах, магазинах электроники, а также в аэропорту. Начальная цена – 15 сингапурских долларов.</p>


                <h5>Интернет</h5>
                <p>Бесплатный интернет в Сингапуре – большая редкость. Лишь аэропорт Чанги и отдельные местные гостиницы и рестораны могут похвастаться бесплатным Wi-Fi. Те, для кого свободный доступ к Сети является принципиальным вопросом, могут купить карту Singtel, набрать номер *186 и получить SMS-сообщение с паролем и логином. После чего остается только подключиться к программе Wireless@SG, войти в Сеть и зарегистрироваться. С этого момента вы становитесь пользователем бесплатного Wi-Fi в Сингапуре.</p>
                <p>Для 3G-связи вам понадобятся карты одного из трех операторов, перечисленных в пункте «Мобильная связь». Стоимость карты 18-30 сингапурских долларов – в зависимости от объема трафика, причем купить Интернет-пакет можно при необходимости прямо в аэропорту. Начальная цена 3G за неделю – 15 местных долларов. Покупка модема обойдется вам как минимум в 40 синг. долларов, недельные тарифы те же, что и при использовании СИМ-карты.</p>
                <p>Те, кто планирует остаться в Сингапуре надолго, могут воспользоваться услугами компании StartHub и подключиться к Интернету через кабельный модем. Подсоединением к Сети через ADSL занимаются Singtel и Pacnet. Подключение может занять от 1 до 10 дней в зависимости от провайдера. Стоимость пакета сильно варьируется даже у одного и того же провайдера. Так, стоимость подключения у Singtel составляет около 55 синг. долларов, а разброс месячных цен за пакет достигает 100 синг. долларов! Услуги Pacnet обойдутся дешевле. Из обозначенного в контракте трафика лучше не выбиваться – это чревато дополнительными расходами.</p>
                <p>Что касается стационарного телефона, то единственная сингапурская компания, занимающаяся его подключением – Singtel. Всю необходимую для установки домашней телефонной линии аппаратуру можно приобрести в магазинах компании (SingTel retail stores или SingTel Mobile Authorized Dealers). Для утверждения вашей просьбы понадобятся следующие документы: загранпаспорт (оригинал), срок действия которого превышает 6 месяцев, рабочая, учебная или социальная виза и 300 долларов США в качестве минимального депозита за подключение телефонной линии.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Полезные телефоны</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба/полиция/скорая помощь</div>
                                <span>995</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция (горячая линия)</div>
                                <span>62-25-00-00</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Главный госпиталь Сингапура</div>
                                <span>(+65) 6222-3321, 6321-4311</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Детская больница</div>
                                <span>(+65) 6293-4044</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>65-52-22-22, 65-52-11-11.</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Информация о прибытии и отправлении рейсов из аэропорта «Чанги»</div>
                                <span>1-800-542-44-22</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="THE COLOURS OF SINGAPORE" src="https://i.vimeocdn.com/video/444154437_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/70779031?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">THE COLOURS OF SINGAPORE<br>© Espiritu Libre 2013</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="safety" class="bg-white">
    <div class="container">
        <h2>Безопасность</h2>
        <p>В настоящее время в Сингапуре не отмечена деятельность какой-либо организации, которую можно было бы причислить к экстремистским, сепаратистским или радикальным.</p>
        <p>Жесткое уголовное законодательство и эффективная деятельность правоохранительных органов позволяют сингапурским властям держать под строгим контролем криминогенную обстановку в стране и обеспечивать достаточно низкий уровень преступности.</p>
    </div>
</section>

<section id="other">
    <div class="container">
        <h2>Прочее</h2>
        <h5>Банкоматы</h5>
        <p>Широко распространены кредитные карты, которыми можно расплачиваться почти везде. </p>
        <p>Есть банкоматы HSBC, Citibank, UOB, OCBC, Standard Chatered. </p>
        <h5>Уровень цен</h5>
        <p>Сингапур входит в 10-ку самых дорогих городов Азии. </p>
        <p>Примерная стоимость бюджетного отдыха в Сингапуре:</p>
        <ul>
            <li>Такси из аэропорта до отеля – около 20 долларов.</li>
            <li>Недорогой отель (на двоих) - около 50-100 долларов за номер в сутки.</li>
            <li>Расходы на питание - около 20-30 долларов на человека в день.</li>
        </ul>
        <p>Таким образом, примерная стоимость одного дня в Сингапуре при бюджетном варианте отдыха составляет около 80-100 долларов с человека.</p>
    </div>
</section>

<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>