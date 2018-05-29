<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Украина</h1>
                    <div class="lead">
                        <b>Столица</b>: Киев<br>
                        <b>Официальный язык</b>: украинский<br>
                        <b>Валюта</b>: UAH - гривна (100 копеек)<br>
                        <b>Территория</b>: 603 549 км²<br>
                        <b>Население</b>: 42.2 млн. человек<br>
                        <b>Часовой пояс</b>: GMT+2. Разница во времени с Астаной 4 часа. Есть переход на летнее время.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="I love travel UKRAINE" src="https://i.vimeocdn.com/video/411040488_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/59156427?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Andrii Sirenko, 2013</figcaption>
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
                <p>Украина - государство, расположенное в Восточной Европе на побережье Черного моря. Граничит с Россией, Беларусью, Польшей, Словакией, Венгрией, Румынией и Молдовой. Привлекает туристов морским побережьем, горнолыжными курортами Карпат, красивой долиной Днепра и лечебными санаториями центра страны. В экскурсионном плане интересны города Киев, Львов, Ужгород, Ивано-Франковск и другие.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Главные курорты Украины лежат на побережье Черного моря. Самый популярный - это Одесса, ее называют черноморской жемчужиной. Она обладает собственным обаянием, удивительным юмором местных жителей, ни на что не похожим языком и традициями. Здесь проводят кинофестивали, снимают кино и отдыхают. Большинство пляжей Черного моря галечные, но есть и песок, традиционно более любимый туристами.</p>
                <p>Столица страны, Киев - современный, активно развивающийся мегаполис, в котором комфортно жить и путешествовать. Основные его достопримечательности - это Крещатик, Андреевский спуск, Софийский и Михайловский собор, исторический центр города, широкий Днепр с мостами и набережными, находящаяся неподалеку Киево-Печерская лавра. Чтобы познакомиться с городом, придется потратить не меньше недели.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Сто самых красивых мест Украины." src="https://i.ytimg.com/vi/twpD8yD1AX0/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/twpD8yD1AX0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Сто самых красивых мест Украины.<br>© Витя Глоба 2014</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Путешествие по Украине (Travel To Ukraine) - Харьков, Киев, Львов, Одесса." src="https://i.ytimg.com/vi/yQcZ8bsKfKI/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/yQcZ8bsKfKI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Путешествие по Украине (Travel To Ukraine) - Харьков, Киев, Львов, Одесса.<br>© Crazy Team 2016</figcaption>
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
        <p>Население Украины представлено в основном титульной нацией - украинцев в стране не менее 78%, кроме них здесь живут русские 17%, белорусы, евреи, молдаване, крымские татары, болгары, венгры, румыны и другие, каждого этноса не более 0.5%.</p>
        <p>Население практически полностью принадлежит к христианской вере, только крымские татары исповедуют ислам и евреи иудаизм. Основная масса украинцев - православные, католиков около 5 млн человек (в основном из западной Украины), протестантов меньше всех, не более 1% от всех жителей.</p>
        <p>Продолжительность жизни в Украине по последним данным составляет 71 год, для женщин эта цифра чуть выше - 75 лет, а у мужчин совсем низкая, в среднем они доживают до 67 лет.</p>
        <?= $this->render('_population') ?>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>
        <div class="row">
            <div class="col-lg-7">
                <p>Культура Украины богата народными преданиями, из которых вышла классическая литература и современная авторская проза. В этой стране всегда жило множество талантливых людей, создававших шедевры в разные исторические периоды и в разных видах искусства. Самые знаменитые украинцы - Н.В. Гоголь и Тарас Шевченко. Кроме литературы здесь всегда любили театр и кино. Сегодня в различных городах проводят театральные фестивали, приглашают мировые труппы и привозят интересные киноленты на знаменитый одесский кинофестиваль.</p>
                <p>Свои традиционные праздники украинцы отмечают с удовольствием и размахом. В них смешались языческие, православные и светские традиции последнего столетия. Люди с удовольствием празднуют языческую масленицу, провожая зиму и сжигая ее чучело, 8 марта поздравляют с праздником женщин, обязательно с цветами и подарками, а в апреле встречают православную Пасху крашенными яйцами и куличами. В городах уже почти забыли, а в деревнях и селах помнят и любят ночь на Ивана Купалу или ночь костров, что пришло с языческих времен. Девушки и юноши прыгают через костры, плетут венки и ищут суженых. Из-за разницы календарей Рождество и Новый год здесь празднуют дважды по григорианскому календарю и по юлианскому, который отстает на 2 недели.</p>
                <p>Украинская кухня самобытная и очень вкусная, она существенно отличается от соседей и опирается на местные продукты и многовековые рецепты. В ее основе злаки, картофель, мясо, овощи. Обязательно стоит попробовать украинский борщ с пампушками, сало с черным хлебом, вареники с разными начинками и традиционный киевский торт. Из крепких алкогольных напитков здесь пьют горилку - водку, настоянную на остром перце.</p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официально нерабочие даты</h6>
                        <ul>
                            <li>1 января - Новый год</li>
                            <li>7 января — Рождество Христoво</li>
                            <li>8 марта — Международный женский день</li>
                            <li>апрель — Пасха</li>
                            <li>март-апрель — понедельник после Пасхи</li>
                            <li>1 мая - День труда</li>
                            <li>9 мая — День победы</li>
                            <li>июнь — Троица</li>
                            <li>28 июня — День Конституции Украины </li>
                            <li>24 августа — День Независимости Украины</li>
                            <li>14 октября — День защитника Украины</li>
                            <li>25 декабря — Рождество</li>
                        </ul>
                    </div>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Национальная кухня Украины" src="https://i.ytimg.com/vi/uG4uaBozU-M/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/uG4uaBozU-M?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Национальная кухня Украины<br>© kisakris89 2010</figcaption>
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
                <p>Климат Украины умеренно-континентальный, на юге на него оказывает влияние Черное море, а на западе карпатский хребет.</p>
                <p>Зимы без сильных морозов, снежные, с небольшими отрицательными температурами, в среднем до -6 градусов. Лето теплое, комфортное, до +25 градусов. Вода на курортах Черного моря прогревается к маю-июню до +21, в июле она обычно около +25, бархатный сезон длится до середины октября. С ноября по февраль продолжается сезон на горнолыжных курортах в Карпатских горах, где ложится мягкий снег и держится комфортный для катания небольшой минус.</p>
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
                <p>Для въезда в Украину гражданам Казахстана  <strong>виза не нужна</strong>. Въезд разрешен с туристическими целями на срок до 90 дней.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Срок действия паспорта не может быть меньше, чем еще 6 месяцев с даты выезда из Украины.</p>
                    </div>
                </div>
                <p>Обычно на границе дополнительные документы не требуются, но пограничники могут спросить адрес вашего отеля, наличие денежных средств и обратный билет на любой вид транспорта. Медицинская страховка не считается обязательной.</p>

                <h5>Въезд в страну</h5>
                <p>Прямые рейсы в Украину из Астаны и Алматы совершают Украинские и Казахские авиалинии, время в пути составляет около 5 с половиной часов. До Киева можно добраться без проблем в любой день недели, меняется только время вылета.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Безвизовый режим</div>
                                <span>до 90 дней</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые виарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Киев - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Киев - Алматы</div>
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
        <p>При въезде в Украину заполняется таможенная декларация, где указывается любая сумма провозимых с собой наличных денег. До 10000 долларов - этот пункт считается необязательным. На суммы свыше 10000 требуется предоставить документ, подтверждающий легальность получения денег. Вся дорогая электроника, а также украшения с драгоценными камнями и золотом, обязательно подлежат декларированию.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Разрешен ввоз 200 сигарет, 200 г табака или 50 сигар. Алкоголь разрешен к провозу в одну и другую сторону с ограничением в 2 бутылки, независимо от крепости.</p>

        <h5>Личные вещи</h5>
        <p>Личные вещи не ограничены, а общая стоимость продуктов должна быть не более 50 долларов. Все лекарства должны сопровождаться рецептами от врача. Полностью запрещены к провозу в Украину наркотические вещества, оружие, боеприпасы, свежие продукты из мяса и молока, дикие животные и растения, занесенные в красную книгу.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В Украине транспортное сообщение развито отлично, в крупных городах есть аэропорты, полеты между ними осуществляет национальная авиакомпания. В воздухе придется провести не больше часа, а отдать за перелет нужно от 1000 гривен. Более дешевый способ путешествий по стране, и пожалуй, самый популярный - это поезда. Есть скоростные, которые идут в 1.5-2 раза быстрее, и есть обычные. В Львов из столицы можно попасть всего за 6 часов и 400 гривен скоростным поездом или обычным за 8 часов и за 100-200 гривен. Стандартные поезда делятся на плацкарт, купе и СВ, все типы вагонов есть в одном составе, от выбора зависит цена и удобства в пути. Кроме поездов по стране курсируют автобусы, это довольно распространенный и недорогой способ добраться до нужного места. Автобусы соблюдают расписание, отходят от автовокзалов вовремя, особых удобств не имеют, но довозят до пункта назначения без проблем.</p>

                <h5>Городской транспорт</h5>
                <p>Во всех городах Украины отлично развит городской транспорт. Самый распространенный вид - это автобус, часто встречаются троллейбусы и трамваи, а в 3 городах страны (Киеве, Днепре и Харькове) работает метро. Для проезда необходимо купить билет, можно в отдельных киосках или у водителя. Билеты на метро продаются в кассе, которая расположена рядом со станцией. Жители столицы, постоянно пользующиеся метрополитеном и наземным транспортом, предпочитают покупать проездной на месяц, туристу может быть выгодно купить билет на несколько поездок.</p>

                <h5>Такси</h5>
                <p>Такси распространены в любом городе, чаще всего это желтые машины с опознавательным знаком. Есть как официально зарегистрированные фирмы, так и частные лица, занимающиеся извозом. У частников нет счетчиков, но с ними легко договориться на определенную сумму перед посадкой. Вызвать такси могут в отеле на ресепшен или его можно поймать на улице, просто подняв руку.</p>
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
                                <span>3-6 гривен</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>4 гривны</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span> 30-70 гривен за поездку</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Первый рейс. Малая Южная железная дорога - Children's Railway. Kharkiv" src="https://i.ytimg.com/vi/ZDp6sOd0nOA/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/ZDp6sOd0nOA&list=PLLcKkILnTzjg1W1L1oWqisjLWGnTSMwaz&index=25?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Первый рейс. Малая Южная железная дорога - Children's Railway. Kharkiv<br>© metro275 2015</figcaption>
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
                <p>В Украине действуют привычные правила дорожного движения, все знаки понятны, поэтому брать машину напрокат и знакомиться со страной можно без опасений. Дороги могут быть непредсказуемыми, часть из них отличного качества, часть давно нуждается в ремонте. На трассах разрешенная скорость 110 км/ч, в городе не более 60 км/ч, а если дороги плохие, то скорость падает до 30 км/ч. В сельской местности распространены грунтовые дороги, которые периодически размывает водой, особенно в сезон паводков.</p>

                <h5>Аренда авто</h5>
                <p>Фирмы, предлагающие прокат автомобилей, есть в любом городе Украины. Некоторые из них относятся к мировым лидерам, таким как Sixt, а некоторые компании местные. У каждой компании есть большой парк машин, а у крупных еще и возможность подобрать и зарезервировать автомобиль на сайте до приезда. Сдавать авто не обязательно там же, где его взяли. Например, можно взять машину в аэропорту Киева, а сдать в Одессе и улететь оттуда. Основные правила для аренды: быть старше 19 лет и иметь национальные права не менее 1 года.</p>
            </div>
            <div class="col-md-4">
                <div id="block-fuel"></div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ДОРОГА КИЕВ ХАРЬКОВ состояние в 2017 году. Трасса М03" src="https://i.ytimg.com/vi/7lNW293wrD8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/7lNW293wrD8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ДОРОГА КИЕВ ХАРЬКОВ состояние в 2017 году. Трасса М03<br>© Авто Видео Тема 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение в Украине</h2>
        <p>Медицину в Украине можно разделить на городскую и сельскую. Если в первом случае есть клиники частные и государственные, есть скорые помощи, больницы, большой выбор аптек, то во втором случае получить помощь будет сложно. Обычно в сельской Украине расположена поликлиника, обслуживающая большой округ, а при любом чуть более сложном случае врачи отправляют пациента в город на обследование и лечение. Оборудование и квалификация врачей встречается только в городских клиниках, и то не во всех. Для граждан Украины лечение в государственных учреждениях бесплатное, а иностранцам придется заплатить из собственного кармана или воспользоваться туристической страховкой.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь представлена 3 основными операторами:</p>
                <ul>
                    <li>Киевстар - <a href="https://kyivstar.ua/ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Vodafone (Украина) - <a href="https://www.vodafone.ua/ru/my-vodafone" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Lifecell - <a href="https://www.lifecell.ua/ru/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>Мобильная связь в Украине работает отлично, у всех операторов нет проблем с покрытием, вы не останетесь без подключения даже в дальних деревнях или на склонах Карпат. Для подключения местной сим-карты достаточно предъявить паспорт и оформить контракт на предоплатный тариф. Выбор очень большой: есть варианты, которые подходят только местным жителям, есть удобные для туристов. Если планируете пользоваться мобильным интернетом, то необходимо подключить для него специальный пакет, который включает в себя определенное количество мегабайт на день, неделю или месяц. Пользоваться мобильным интернетом намного выгоднее, чем звонить на мобильный телефон.</p>

                <h5>Интернет</h5>
                <p>Wi-Fi в Украине вещь уже привычная, подключиться к сети можно в отелях, ресторанах, кафе, в метро, парках или скверах. Для использования городских точек доступа потребуется местный телефон, на него придет пароль для подтверждения входа. Гостиницы дадут пароль при заселении, а рестораны при заказе хотя бы одного блюда или напитка.</p>
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
                                <div>Пожарная служба</div>
                                <span>01</span>
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