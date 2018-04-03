<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Латвия</h1>
                    <div class="lead">
                        <b>Столица</b>: Рига<br>
                        <b>Официальный язык</b>: латышский<br>
                        <b>Валюта</b>: EUR - евро<br>
                        <b>Территория</b>: 64 589 км²<br>
                        <b>Население</b>: 1.96 млн человек<br>
                        <b>Часовой пояс</b>: GMT +2. Разница во времени с Астаной 4 часов
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
            <div class="col-8 offset-2">
                <p> Латвия - самая гостеприимная страна Прибалтики. Здесь туристов ждут уютные улочки Риги, мягкий песок Юрмалы, леса, богатые животным миром и радушные хозяева, которые с удовольствием вам покажут свою страну. Чтобы посмотреть старый город Риги хватит и одного дня, но чтобы почувствовать и понять Латвию, стоит здесь остановится на пару недель как минимум.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>В первую очередь путешественников привлекает столица страны. В Риге самые интересные памятники расположены компактно в центре города. Старый город был сформирован в средние века, с тех пор особо не поменялся. Гуляя по главной площади, стоит зайти в Домский собор, построенный в 1211 г. Кроме удивительного фасада, считающегося визитной карточкой Риги он прославился 25 м органом, на котором играют лучшие органисты мира. Не менее знаменит и Дом Черноголовых, построенный в XIV в. и большая и малая гильдия, построенные в то же время. Остальной центр сформировался в XIX столетии, и стал ярким примером югендстиля - оригинального латвийского барокко.</p>
                <p>После Риги путешественники обычно отправляются на Балтийское море. В получасе езды от столицы расположен главный курорт страны - Юрмала. Ее знают все не только по лучшим дюнам и сосновым лесам, но и по проводимому здесь фестивалю. Кроме Юрмалы на побережье интересны Лиепая с россыпями янтаря и морской порт  Вентспилс. </p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ТОП-10 увлекательных мест в Риге" src="https://i.ytimg.com/vi/xgNAZgI9D0I/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/xgNAZgI9D0I?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ТОП-10 увлекательных мест в Риге<br>© 5 звезд - все о туризме 2016</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Латвия (Часть 1): Краткие факты" src="https://i.ytimg.com/vi/DLzUaalGKPc/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/DLzUaalGKPc?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Латвия (Часть 1): Краткие факты<br>© ThunderChannel 2016</figcaption>
                </figure>


                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Латвия (Часть 2): Топ продукты и места" src="https://i.ytimg.com/vi/A1aXVIYVyVQ/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/A1aXVIYVyVQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Латвия (Часть 2): Топ продукты и места<br>© ThunderChannel 2016</figcaption>
                </figure>


            </div>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#culture">Культура</a></li>
            <li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
            <li class="nav-item"><a class="nav-link" href="#security">Безопасность</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#prices">Цены</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>
        <p>Культурное наследие латышей можно увидеть по всей стране, старинные замки, красивые соборы и городские ратуши рассказывают об удивительной истории страны, находящейся в окружении Литвы, Эстонии, Белоруси и России. Страна впитала в себя некоторые черты соседей, и в то же время тщательно хранит свои культурные традиции и обычаи.</p>
        <p>Население Латвии многонационально, начиная с 1991 года постепенно уменьшается и стареет за счет естественного оттока молодых людей в страны западной Европы. Сегодня в стране живут около 60% латышей, 25% русских, и 15% других национальностей, это поляки, украинцы, белорусы, немцы, эстонцы и литовцы.</p>
        <?= $this->render('_population') ?>

        <p>Традиции латышей в основном связаны с их праздниками, которые корнями уходят в языческие верования. По латышскому календарю год делится на 4 равных сезона, в середине каждого из них есть свой праздник. Он совпадает с днями равноденствия и летнего и зимнего солнцестояния. Зимой праздную Рождество, весной Пасху, летом день Ивана Купалы, а осенью Альюмибас. И если в рождественские и пасхальные праздники страна придерживается католических традиций, то в день летнего солнцестояния латыши празднуют Лиго, а на следующий день Ивана Купалу. Все традиции этих праздников пришли из дохристианских времен. В эти дни принято прыгать через костер, искать в лесу зацветший папоротник и пускать по реке сплетенные из цветов венки. Все традиции перекликаются с русскими традициями этого праздника, так как имеют общие корни.</p>
        <p>Кухня Латвии - это много сытной и вкусной еды, которая согревает в местном промозглом климате. Из особенно удивительных блюд, которые точно стоит попробовать, можно выделить рижский хлебный суп. Как не странно - это вариант десерта, который делается из сладкого черного хлеба с добавлением корицы, гвоздики, взбитых сливок, орехов и сухофруктов.</p>

        <h5>Праздники и официально нерабочие даты</h5>

        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Нерабочие дни:</h6>
                <ul>
                    <li>1 января - Новый год.</li>
                    <li>Великая пятница перед Пасхой</li>
                    <li>1-30 апреля - Пасха. </li>
                    <li>Первый и второй день после Пасхи</li>
                    <li>1 мая - День труда. </li>
                    <li>4 мая — День восстановления независимости Латвийской Республики</li>
                    <li>Второе воскресенье мая — День матери</li>
                    <li>День Святой Троицы </li>
                    <li>23—24 июня — Лиго</li>
                    <li>18 ноября — День провозглашения Латвийской Республики </li>
                    <li>24—26 декабря — Рождество</li>
                    <li>31 декабря — проводы Старого года</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <h2>Климат</h2>
        <p>Климат Латвии не самый комфортный для жизни, в течение года преобладают пасмурные, дождливые, снежные или туманные дни. Солнца мало, максимум приходится на середину лета, а в августе уже начинается осень. Зима вступает в свои права уже в ноябре и может длиться до начала апреля. Средняя температура летом +17 градусов, но на солнце прогревается до комфортных +23. Зимой сильные морозы редкость, обычно температура держится около -10 градусов, но дискомфорт доставляют сильные ветра и высокая влажность.</p>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>В декабре 2007 г. Латвия присоединилась к шенгенскому соглашению и сегодня гражданам Казахстана для ее посещения необходимо оформить <strong>Шенгенскую визу </strong> категории С. Подавать документы можно от 3 месяцев до 10 дней до начала поездки. Стоимость визы 60 евро.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> По новым правилам выдачи шенгенских виз получить их можно только лично, сдав отпечатки пальцев. В базе они хранятся не менее 5 лет, поэтому повторные визы можно уже получать через посредников.</p>
                    </div>
                </div>
                <p>Список документов не отличается от других стран входящих в шенгенское соглашение. Необходимо предоставить в консульский отдел билеты туда и обратно, бронь отеля, денежные средства на счете из расчета 60 евро на человека в день и медицинскую страховку. Дополнительно могут потребоваться спонсорское письмо на детей, справки с места работы и другие документы. Полный перечень необходимо уточнить на сайте посольства.</p>

            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Шенгенская виза</div>
                                <span></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-news mr-1"></i> Регистрация</div>
                                <span>обязательна</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=проспект+кабанбай+батыра+6/1,+&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Латвии</h5>
                        <p>Проспект Кабанбай батыра 6/1, </p>
                        <p><i class="icon-phone"></i> (7) 7172 92 53 16</p>
                        <p><i class="icon-link"></i> <a href="http://www.mfa.gov.lv/kazakhstan" target="_blank">www.mfa.gov.lv</a></p>
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
                                <div>Рига - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="security">
    <div class="container">
        <h2>Безопасность</h2>
        <p>Латвия - это спокойная страна на северо-востоке Европы. Маленький размер и гостеприимные жители делают ее безопасной и комфортной для пребывания. Здесь нет районов, в которые нельзя заходить, но и расслабляться совсем не нужно. Элементарные правила безопасности соблюдать стоит везде.
        </p>
        <h5>Безопасность на дорогах в Латвии</h5>
        <p>Дороги Латвии постепенно приводят к европейскому уровню. Основные трассы комфортны, с хорошим покрытием и очищены от снега. к сожалению этого пока нельзя сказать о внутренних дорогах. В глубинке часто встречаются сложные грунтовые дороги, которые размывает весной и осенью, а зимой заносит снегом. Для путешествия по таким сложным условиям необходим большой опыт вождения. </p>
        <p>По количеству дорожных происшествий Латвия одна из самых благополучных стран Европы. Количество аварий здесь сокращается каждый год. За 2017 г на дорогах погибло 134 автомобилиста и 50 пешеходов, что значительно меньше, чем в предыдущие годы</p>
        <p>При попадании в аварию и при любых других проблемах на дороге нужно звонить по номеру 112.</p>
        <h5>Стихийные бедствия и природные опасности в Латвии</h5>
        <p>Латвия расположена на равнине, покрыта лесами и озерами. Стихийные бедствия здесь редки и опасаться их не стоит.</p>
    </div>
</section>
<section id="custom" class="bg-white">
    <div class="container">
        <h2>Таможенный контроль</h2>
        <h5>Валюта</h5>
        <p>По таможенному законодательству Латвии в страну можно ввезти без декларирования 10000 евро, вывозить можно любую сумму. Деньги, находящиеся на банковских картах или в дорожных чеках декларированию не подлежат.
        </p>
        <h5>Спиртное и сигареты</h5>
        <p>Табачные изделия ограничены ка на ввоз, так и на вывоз. 1 человек старше 18 лет может ввезти 200 сигарет или 50 сигар или 100 сигарилл или 250 гр табака. Также ограничен и алкоголь. Для провоза в обе стороны разрешен 1 л крепких напитков и 2 литра слабых, меньше 22 градусов.</p>
        <h5>Чай, кофе, туалетная вода, ювелирные украшения</h5>
        <p>В Латвию можно ввезти  100 г чая,  500 г кофе, 50 мл духов или 250 мл туалетной воды. Золото и драгоценности не более чем на 500 г. Вывоз драгоценностей свыше 500 грамм декларируется, провоз необработанного янтаря запрещен. На все ценности старше 50 лет, отноящеся к антиквариату необходимо получить разрешение на вывоз</p>
        <h5>Tax Free</h5>
        Вернуть налог на товары 18%, купленные на территории Латвии, можно на территории аэропорта. Для этого потребуются заполненные квитанции из магазина на сумму больше 44 евро и паспорт.

    </div>
</section>

<section id="transport">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Латыши передвигаются по стране автобусами и поездами. Оба вида транспорта одинаково распространены. Автобусы в основном представлены новыми комфортабельными машинами с удобными креслами. Поезда ходят двух видов: старые, времен СССР и новые с мягкими сидениями, розетками и WI-FI. Постепенно старые поезда заменяются на новые. Планируется в ближайшие годы полностью обновить составы.</p>

                <h5>Стоимость проезда</h5>
                <p>Билет из Риги в Даугавпилс стоит 7 евро, у кондуктора на 30% дороже, а для постоянных пассажиров предусмотрены проездные. За 32 евро можно неограниченное количество раз съездить в Даугавпилс в течение 3-х дней. На автобусе проделать этот же путь можно за 9 евро в одну сторону.</p>
                <p>Городские автобусы - это основной общественный транспорт, цена на билет 1.15 евро. Стоимость покупки у водителя 2 евро. Для частых поездок можно купить проездной на сутки за 5 евро, на 3 дня - 10 евро и на 5 дней - 15 евро. Автобусы ходят каждый день с 5.30 до 23.30. В Риге есть ночные маршруты, идущие с полуночи до 5 утра по основным маршрутам.</p>
                <h5>Такси </h5>
                <p>На улицах Риги множество стоянок такси. Свободную машину можно поймать и простым поднятием руки или же вызвать по телефону, что окажется несколько дешевле. Средний тариф — 0,70-0,90 EUR за посадку плюс 0,30-0,60 EUR за каждый км. Доехать из аэропорта до города можно за 15 евро.
                </p>

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
                                <div>Метро, автобус, трамвай, фуникулер</div>
                                <span>от 1.40 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Трамвай №28</div>
                                <span>2.85 евро</span>
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
                                    <nobr>230 Вт</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeF">разъем типа F</a>
                                </div>
                                <span class="text-right">
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

<section id="auto" class="bg-white">
    <div class="container">
        <h2>Автомобиль</h2>
        <div class="card mb-4">
            <div class="bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Аренда автомобиля</h6>
                    <p>Прилетев в Ригу арендовать автомобиль можно прямо  в аэропорту. Он необходим для путешествия по стране, но если снимать апартаменты в старой Риге могут возникнуть сложности с парковкой. Для аренды потребуется паспорт путешественника и права международного образца. Цены начинаются от 20 евро за сутки в низкий сезон. Выбор машин огромен от эконом до представительского класса.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="health">
    <div class="container">
        <h2>Здравоохранение в Латвии</h2>
        <p>Латвия считается одним из лучших мест для медицинского туризма в Европе. Общий уровень медицины очень высок, современные клиники и проходящие европейские стажировки врачи могут решить любые проблемы со здоровьем. При этом стоимость обслуживания не высока.</p>
        <p>В Латвию часто приезжают в санатории или бальнелеологические курорты для оздоровления минеральными водами. Источники в основном расположены на побережье, лучшие курорты находятся в Юрмале. Летом здесь лечение сопровождается купанием в прохладном Балтийском море и прогулкой по сосновым лесам с целебным воздухом.</p>
        <p>Сюда приезжают похудеть, поправить органы дыхания и пищеварения, восстановить красоту и молодость кожи. Для этого проводят обертывания, грязевые ванны, прием вод с повышенным содержанием серы. 2 недели на курорте помогут внешне сбросить до 20 лет. </p>
        <p>По всей стране расположены 3000 высококлассных медицинских учреждения, не считая санаториев и курортов. Они предлагают услуги по стоматологии, репродуктивной медицине, пластической хирургии и другим направлениям по ценам значительно ниже, чем в Казахстане.</p>


        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>

        <!--<script src="//f.sravni.ru/f/apps/build/widgets/sravni-widgets.js"></script>
        <sravni-micro-widget type="mantravel" logo="false" partner="tonkosti.ru" theme="tonkosti.ru" data-countries="Азербайджан"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"><style>sravni-micro-widget{text-align: center;display: block;position:relative}a.sravni-dl{font: 300 14px 'Open Sans', sans-serif; max-width:100%px; display:inline-block; color: #a7a7a7; text-decoration: none;border-bottom:1px solid #a7a7a7;}</style></sravni-micro-widget>-->
    </div>
</section>

<section id="communication" class="bg-white">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь в стране представлена 3 сотовыми операторами. Это Теле2,  LMT и Bite. Сим-карты можно купить в фирменном офисе, предоставив паспорт. А карты пополнения продаются в любом киоске, на заправке и в супермаркете. Стоимость звонков за пределы Евросоюза будут стоить от 0.5 евро за 1 мин, звонки в Европу дешевле, выгоднее всего брать пакеты по 30 мин за 4 евро или 60 мин за 6 евро.
                </p>
                <h5>Интернет</h5>
                <p>Точки WI-FI распространены в Риге, Юрмале. Бесплатная городская сеть называется Lattelecom Wi-Fi. Чтобы подключиться нужно посмотреть рекламу, после чего соединение будет установлено на 30 мин. Через полчаса можно переподключиться заново. Скорость интернета достаточная для общения в мессенджерах и просмотра любых интернет-сайтов.</p>

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
                                <div>Экстренный телефонный номер</div>
                                <span>112</span>
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
                                <div>Пожарные</div>
                                <span>01</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>03</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="prices">
    <div class="container">
        <h2>Цены</h2>
        <p>Цены в Латвии средние по Европе. Здесь с легкостью можно найти и бюджетные отели от 20 евро за ночь и отели класса люкс известных международных сетей от 100 евро и выше. В центре Риги цены на жилье начинаются от 75 евро.</p>
        <p>Цены на еду в кафе и ресторанах начинаются от7 евро за недорогой обед. Поужинать в уютном ресторанчике старого города выйдет 35-50 евро с бокалом вина. А заглянуть на обед в макдональдс можно на 5 евро.</p>

        <figure class="figure d-block">
            <div class="video-cover box-shadow">
                <img alt="Поездка в Ригу. Цены в магазинах Риги, Латвия" src="https://i.ytimg.com/vi/nFaQtbvzOjY/maxresdefault.jpg" class="bg-image"/>
                <div class="video-play-icon">
                    <i class="icon-controller-play"></i>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/nFaQtbvzOjY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            <figcaption class="figure-caption text-right">Поездка в Ригу. Цены в магазинах Риги, Латвия<br>© ALEKSANDR YURKOV 2018</figcaption>
        </figure>
    </div>
</section>

<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>