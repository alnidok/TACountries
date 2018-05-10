<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Словакия</h1>
                    <div class="lead">
                        <b>Столица</b>: Братислава<br>
                        <b>Официальный язык</b>: словацкий<br>
                        <b>Валюта</b>: EUR - евро<br>
                        <b>Территория</b>: 49 034 км²<br>
                        <b>Население</b>: 5.4 млн человек<br>
                        <b>Часовой пояс</b>: GMT+1. Разница с Астаной 5 часов
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Beautiful Slovakia - 4K - Drone Shots" src="https://i.ytimg.com/vi/egaq5iZZqNQ/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/egaq5iZZqNQ?autoplay=1&rel=0&showinfo=0&start=10" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© HolyCity Drones, 2016</figcaption>
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
                <p>Словакия - красивая страна в восточной Европе, она любима туристами за улочки средневековых городов, неприступные замки с собственными привидениями, гостеприимство местных жителей и вкусную словацкую кухню. Кроме экскурсионной программы в Словакии можно познакомиться с национальными парками, сплавиться по горным рекам и погулять по верхним и нижним Татрам.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Словакия расположена в самом центре Европы, ее окружают Австрия, Чехия, Польша, Венгрия и Украина. Столица Братислава находится на самом западе страны, недалеко от границы с Австрией. Ее построили на главной реке Европы - Дунае.</p>
                <p>Обычно именно с нее путешественники начинают знакомиться со Словакией. Здесь уживаются вместе разные стили и эпохи. На старом городе можно полюбоваться примерами дружной совместной жизни готики, барокко и классицизма. Главной достопримечательностью города безусловно является белый замок 11 века Тренчина, возвышающийся на холме. Нагулявшись по столице, можно ехать дальше изучать страну, стоит посмотреть Кошице, Прешов, заехать в замок Шаришский град, чтобы попробовать вкусного местного пива.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Что посмотреть в Братиславе за 2 дня. VLOG 1 | Дорога к Замку | Братиславский Град" src="https://i.ytimg.com/vi/rrfppsnbE0o/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/rrfppsnbE0o?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Что посмотреть в Братиславе за 2 дня. VLOG 1 | Дорога к Замку | Братиславский Град<br>© Dream Holiday 2017</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="10 Things to do in Bratislava, Slovakia Travel Guide" src="https://i.ytimg.com/vi/IPeQ477u-L0/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/IPeQ477u-L0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">10 Things to do in Bratislava, Slovakia Travel Guide<br>© Samuel and Audrey - Travel and Food Videos 2017</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#security">Безопасность</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#prices">Цены</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h3>Население</h3>
        <p>Население Словакии постепенно растет, что хорошо сказывается на ее экономике и развитии. Среди национальностей здесь встречаются словаки - 85.8%, венгры - почти 10%, русские - 0.6%, украинцы - 0.6%, чехи - 0.8%, а цыган здесь 1.7%, что относительно немного.</p>
        <p>По конфессиональной принадлежности население делится на католиков 70%, лютеран 7%, греко-католиков 4%, атеистов 13%, по данным последней переписи населения.</p>
        <p>Продолжительность жизни в Словакии находится на хорошем уровне, женщины доживают до 80 лет, а мужчины до 76 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-6">
                <p>Культура Словакии ярка и необычна. Некоторые национальные черты схожи с Чехией, но все же эти 2 страны очень разные. Словаки хранят свою культуру и уникальность, часто проводят фестивали народной песни, фольклорных ансамблей и рассказов словацких легенд и историй. Самые большие фестивали народной культуры проходят в Виходне, на Мияве и в Детве.</p>
                <p>Праздники в Словакии соотносятся с церковными событиями, самыми любимыми торжествами считаются Рождество, Новый год и Пасха. Год начинается сразу обширными празднествами, так как здесь 1 января отмечается день республики, в феврале весело и вкусно провожают зиму, в середине весны устраивают охоту на шоколадные яйца, а в середине лета проводят различные фестивали на открытом воздухе. Конец года перед Рождеством - это время чудес, и взрослые и дети в этот период искренне в них верят, отчего атмосфера в городах неуловимо, но заметно меняется. </p>
                <p>Кухня Словакии подвержена влиянию сильных соседей, здесь видны особенности чешской, австрийской и венгерской традиций, при этом сама Словакия может похвастаться наличием аутентичных блюд, которые можно попробовать во всех ресторанах страны. Настоящим шедевром можно считать овощные супы из местных продуктов, овечьи сыры, тушеное мясо, блюда из птицы и сегединский гуляш. Запивать все это великолепие нужно пивом местного производства или же более крепкой сливовицей.</p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год и день республики.</li>
                            <li>6 января - Богоявление</li>
                            <li>апрель - Страстная пятница</li>
                            <li>апрель – Пасха</li>
                            <li>апрель – Первый понедельник после Пасхи</li>
                            <li>1 мая – Праздник труда</li>
                            <li>8 мая — День освобождения от фашизма</li>
                            <li>5 июля — День Св. Кирилла и Св. Мефодия</li>
                            <li>29 августа — День Словацкого Национального Восстания</li>
                            <li>1 сентября — День Конституции </li>
                            <li>15 сентября — День Богоматери семи страданий </li>
                            <li>1 ноября — День Всех Святых </li>
                            <li>17 ноября — День борьбы за свободу и демократию </li>
                            <li>24 декабря — Сочельник  </li>
                            <li>25 декабря — Первый день Рождества </li>
                            <li>26 декабря — Второй день Рождества </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <h2>Климат</h2>
        <div class="row">
            <div class="col-lg-6">
                <p>Климат Словакии умеренный, традиционный для центральной Европы. В долинах теплое лето до +25 градусов и мягкая зима, когда термометр не опускается ниже 0, а в Татрах погода значительно холоднее, лето здесь прохладное около +12 градусов, а зимы снежные до -10 градусов. Благодаря этому горнолыжный сезон в стране довольно продолжительный. Начинают кататься здесь в ноябре, а заканчивают не раньше апреля. Снег на трассах отменного качества, благодаря чему местные курорты пользуются стабильной популярностью у горнолыжников Европы.
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
                <p>Гражданам Казахстана перед поездкой в Словакию придется оформить <strong>Шенгенскую визу</strong>. По ней можно объехать не только Словакию, но и познакомится со всеми ее соседями, которые также входят в шенгенскую зону. Границ между странами нет, поэтому за 1 день можно посетить несколько стран, не тратя время на формальности.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Посольство Словакии принимает документы на шенгенскую визу максимум за 3 месяца до поездки и минимум за 10 дней до вылета. Стоимость оформления визы 60 евро.</p>
                    </div>
                </div>
                <p>Чтобы получить визу, надо предоставить стандартный комплект документов, состоящий из анкеты, фотографии, медицинской страховки, авиабилетов, подтвержденной брони отеля и достаточное количество денежных средств. Обычно оно рассчитывается как 60 евро в день на человека. </p>

                <h5>Авиасообщение</h5>
                <p>Напрямую в Братиславу из Астаны попасть нельзя, удобнее всего лететь с пересадкой в ближайших городах Праге или Вене. Можно также долететь до этих городов, а дальше перемещаться на поездах, по Европе это один из самых быстрых и удобных вариантов. Тогда в столицу можно попасть на поезде Братислава-Прага, а в Прагу тем временем прилететь прямым рейсом Air Astana или Czech Airlines.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Шенгенская виза</div>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+ул+сарайшык,+6+с+11&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Словакии</h5>
                        <p>Астана, ул. Сарайшык, 6/11</p>
                        <p><i class="icon-phone"></i> +7 717 297 98 92</p>
                        <p><i class="icon-link"></i> <a href="https://www.mzv.sk/web/astana-ru" target="_blank" rel="nofollow">mzv.sk</a></p>
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
                                <div>Братислава - Астана</div>
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

<section id="security">
    <div class="container">
        <h2>Безопасность</h2>
        <p>Словакия относится к странам восточной Европы с относительным уровнем безопасности, здесь нет особых проблем с преступностью. Нападения на туристов случаются крайне редко, но не стоит откровенно оставлять вещи без присмотра или на переднем сидении автомобиля, носить с собой большое количество денег и ценных вещей, а гаджеты класть на стол в уличных кафе. В Братиславе и Кошице встречаются карманники, особенно в туристических местах и в общественном транспорте. Иногда в центре можно увидеть гадалок, но приставать они не будут - вежливого, но твердого отказа им обычно хватает.</p>

        <h5>Безопасность на дорогах Словакии</h5>
        <p>Словаки по дорогам ездят аккуратно, все трассы высокого качества с разметкой и подсветкой, многие из них платные, для проезда по ним необходимо купить виньетку. Чаще всего трассы идут с двумя полосами, где приходится обгонять по встречной полосе, что может вызвать аварийную ситуацию. Штрафы довольно высоки, поэтому нарушать правила особых желающих нет, самый высокий из них за управление транспортным средством в нетрезвом виде, за это можно отдать до 700 евро. В среднем непристегнутый ремень и другие мелкие нарушения обойдутся до 50 евро.</p>
        <p>При попадании в аварию и при любых других проблемах на дороге нужно звонить по номеру 154.</p>

        <h5>Стихийные бедствия и природные опасности в Словакии</h5>
        <p>Стихийные бедствия случаются в горных районах страны, там надо опасаться схода снежных лавин, которые возможны в сезон. В летний период в горах скатываются на дорогу камни, а во время затяжных дождей могут сходить сели. В долинах намного спокойнее и обычно ничего не случается. При отдыхе нельзя забывать об опасности насекомых, особенно при прогулках по лесу или остановке на курортах с лесной территорией.</p>
    </div>
</section>

<section id="custom" class="bg-white">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <h5>Валюта</h5>
        <p>Количество провозимых денежных средств для беспрепятственного въезда не должно превышать 10 000 евро, любая сумма свыше должна быть задекларирована.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Сигареты в страну могут ввозить только люди, достигшие 16 лет, а алкоголь разрешен только тем, кто старше 18 лет. Общий объем на одного человека не должен превышать 200 сигарет или сигарилл, 50 сигар или 250г табака. Алкогольных напитков не должно быть больше 1л при крепости свыше 22 градусов, и 2 литров, если крепость меньше.</p>

        <h5>Чай, кофе, туалетная вода, ювелирные украшения</h5>
        <p>Ограничения на ввоз чая и кофе в Словакии нет, духи можно ввезти только для личного пользования в объеме 50 мл, туалетной воды 250 мл. Ввозить продукты питания не рекомендуется, а мясо-молочная продукция находится под полным запретом. Обратите внимание, это касается также продуктов содержащих мясо или молоко - не стоит провозить тушенку, паштеты, колбасы, сыры и даже шоколадные конфеты, которые содержат молоко. Личные вещи ограничены 430 евро, все что свыше подлежит декларированию.</p>

        <h5>Tax Free</h5>
        <p>Вернуть НДС в размере 20% от покупок получится только если вы купили товара на 175 евро одним чеком, на более мелкие покупки чек возврата не оформляется. Если же покупка состоялась, то нужно получить заполненные документы в магазине, на границе показать товар в не нарушенной упаковке и получить на чек печать. Деньги возвращают в офисах компании Global Blue уже на территории Казахстана.</p>
    </div>
</section>

<section id="transport">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Чаще всего словаки передвигаются по стране на поездах. Железнодорожные линии соединяют основные города и столицу, а также на них можно приехать в соседние страны. Билеты можно купить заранее на <a href="http://www.slovakrail.sk/en" target="_blank" rel="nofollow">официальном сайте</a> или непосредственно в кассе вокзала. Поездки быстры и комфортны, вагоны в основном новые, оснащенные кондиционерами, удобными сидениями и розетками для зарядки гаджетов.</p>
                <p>Кроме поездов по стране можно путешествовать на автобусе, маршруты проложены ко всем городам и курортам страны.</p>

                <h5>Стоимость проезда</h5>
                <p>Путешествие на поездах в Словакии стоит недорого, доехать из столицы до Тренчина стоит 8 евро, до Кошице 16 евро. На автобусах перемещаться еще дешевле. Доехать на экспрессе от аэропорта до центра Братиславы будет стоить 5 евро.</p>
                <p>По городам страны ездят автобусы, троллейбусы и трамваи, цена билета зависит от времени действия 15, 30 или 60 минут и колеблется от 0.35 до 0.9 евро за одну поездку. Для частых поездок выгоднее взять проездной, который стоит 8.6 евро за неделю. Покупают разовые талончики в билетных автоматах, расположенных на каждой остановке. Так как время действия ограничено, лучше не брать их заранее. После входа в салон билет обязательно надо прокомпостировать.</p>

                <h5>Такси</h5>
                <p>Такси в словацких городах - популярный и недорогой вид транспорта. Посадка обойдется в 1-2 евро в зависимости от города и каждый километр будет стоить 0.5-1 евро.</p>

                <h5>Водный транспорт</h5>
                <p>Речные трамвайчики очень популярны в столице, местные жители и туристы используют их больше как развлечение. Покататься по Дунаю в пределах Братиславы стоит 7 евро для взрослого и 4.5 евро для ребенка. Кроме небольших экскурсий на кораблях можно отправиться в круиз по Дунаю до соседних европейских столиц.</p>

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
                                <span>0.35 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной</div>
                                <span>от 8.6 евро</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Как покупать билеты на транспорт в Словакии и Чехии" src="https://i.ytimg.com/vi/jE7YK9PO6HM/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/jE7YK9PO6HM?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Как покупать билеты на транспорт в Словакии и Чехии<br>© Anton Karpenko 2017</figcaption>
                </figure>

            </div>
        </div>
    </div>
</section>

<section id="auto" class="bg-white">
    <div class="container">
        <h2>Автомобиль</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Имея свободу передвижения, можно удобно посетить курорты в Татрах, побывать на минеральных источниках и посмотреть достопримечательности всех крупных городов страны.</p>

                <h5>Аренда авто</h5>
                <p>Аренда автомобиля в Словакии поможет посмотреть всю страну всего за несколько дней. Оформить аренду можно в аэропорту и в центре любого города. Компании есть на выбор международные и местные, все они представляют относительно равные условия. Стоимость аренды эконом-класса от 25 евро в день, среднего класса от 30 и представительского класса от 60 евро. Для оформления договора надо при себе иметь национальные права старше года, банковскую карту с 1000 евро на счету для блокировки залога и возраст старше 21 года.
            </div>
            <div class="col-md-4">
                <div id="block-fuel"></div>
            </div>
        </div>

    </div>
</section>

<section id="health">
    <div class="container">
        <h2>Здравоохранение в Словакии</h2>
        <p>Словакия не может похвастаться мировым уровнем медицины, но в любом городе страны есть местные больницы, в крупных представлены различные медицинские учреждения, как частные, так и государственные. Для туристов обращение за любой помощью будет платным, поэтому необходимо заранее приобрести медицинский полис.</p>
        <p>В основном туристы приезжают сюда не ради медицинских центров, а ради отдыха и лечения на курортах с минеральной водой. Страна может похвастаться самым большим количеством терм в Европе - 1200 источников, на которых построены курорты разного уровня сервиса. Словацкая минеральная вода популярна во многих странах, она может вылечить проблемы с желудочно-кишечным трактом, наладить работу гормональной системы, улучшить обмен веществ. Наибольшим спросом здесь пользуются омолаживающие процедуры с минеральными ваннами и грязевыми обертываниями, они помогают подтянуть тело и сбросить за отдых несколько килограммов.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication" class="bg-white">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>В Словакии 4 мобильных оператора:</p>
                <ul>
                    <li>Orange - <a href="https://www.orange.sk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>O<sub>2</sub> - <a href="https://www.o2.sk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Telekom - <a href="https://www.telekom.sk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Swan - <a href="https://www.swan.sk/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Из них Оранж самый популярный, за счет наибольшего покрытия и самого хорошего уровня связи, правда он самый дорогой из всей 4-ки. Подключить сим-карту можно в офисе любой компании, средняя стоимость услуги 6-10 евро. Пополнить счет можно в любом магазине или на заправке с помощью специальных скретч-карт, также есть возможность оплатить картой через интернет. Звонки за пределы страны будут стоить у Оранж 0.4 евро, а у Телекома 0.2 евро за минуту.</p>

                <h5>Интернет</h5>
                <p>Местные сим-карты туристы чаще всего регистрируют ради интернета, для того чтобы он заработал необходимо подключить пакет с некоторым количеством мегабайт на день или более продолжительный срок. Работает в городах мобильный интернет вполне стабильно, а вот в горах часто отключается и не может поймать сеть. Точки доступа Wi-Fi расположены в столице почти на всех центральных улицах, есть также такая услуга на улицах Кошице. Кроме городской сети везде есть множество частных в кафе, торговых центрах и других точках. Чтобы подключиться к оператору надо либо посмотреть рекламу в городском подключении или заказать что-то в кафе или макдональдсе. Если необходим быстрый и стабильный интернет, то лучше идти в интернет-кафе, которое стоит от 1.5 до 4 евро в час. </p>
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
                                <div>Единый экстренный телефонный номер</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>158</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая</div>
                                <span>155</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная</div>
                                <span>150</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Помощь на дорогах</div>
                                <span>154</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <?= $this->render('_electricity', $country) ?>
            </div>
        </div>
    </div>
</section>

<section id="prices">
    <div class="container">
        <h2>Цены</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Цены в Словакии не высоки, поселиться в хорошем отеле можно от 100 евро за двоих, в 5-ти звездах на горнолыжном курорте за 250 евро, а в самом простом можно найти за 40 евро, снять койку в хостеле от 17 евро. Эти цены выгодно отличаются от западной Европы, то же самое можно сказать и о кафе и ресторанах. Поесть в небольшом кафе в Братиславе можно сытно и недорого. Одно блюдо стоит от 5 евро, комплексный обед 7-8 евро, а ужин на двоих с напитками, основным блюдом, салатом или десертом обойдется в 40 евро. Перекусить на ходу можно в классических заведениях фастфуда. В стране есть макдональдс, бургер кинг и сабвей. Стандартный бигмак стоит 4.5 евро, а обед с ним 6 евро. </p>
            </div>
            <div class="col-md-4">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Где поесть в Братиславе" src="https://i.ytimg.com/vi/9yzixTT4Q9A/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/9yzixTT4Q9A?autoplay=1&rel=0&showinfo=0&start=8" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Где поесть в Братиславе<br>© 5 звезд - все о туризме 2016</figcaption>
                </figure>
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