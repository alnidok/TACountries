<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Андорра</h1>
                    <div class="lead">
                        <b>Столица</b>: Андорра-ла-Велья<br>
                        <b>Официальный язык</b>: каталанский. Наравне с ним используются испанский и французский<br>
                        <b>Валюта</b>: Евро<br>
                        <b>Территория</b>: 468 км²<br>
                        <b>Население</b>: 77.3 тыс. человек<br>
                        <b>Часовой пояс</b>: UTC +1. Разница с Астаной -5 часов
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
                <p>Одно из карликовых государств Европы, не имеющее выхода к морю княжество, расположенное в восточных Пиренеях между Францией и Испанией.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Климат субтропический, горный, смягченный влиянием Средиземного моря.</p>
                <p>Средняя температура зимой колеблется от +2 до -2 °С, а летом — от +15 до +20 °С, причем июне-июле дневная температура может подниматься до отметки +27 °С. Также следует заметить, что на склонах даже зимой температура выше 0 °С. В год в среднем бывает до 250 солнечных дней, что делает страну самым солнечным горным районом Европы.</p>
                <p>Зимой часты обильные снегопады. Среднегодовой уровень осадков (выпадающих, как правило, ночью) — от 770 до 1100 мм, с октября по май выпадает наибольшее количество осадков.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Андорра. Карликовые государства Европы" src="https://i.ytimg.com/vi/26f_Mz-FtVk/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/26f_Mz-FtVk?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Андорра. Карликовые государства Европы<br>© CoolTimes 2018</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Андорра" src="https://i.vimeocdn.com/video/554096648_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/153699774?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Горнолыжный курорт, Андорра<br>© Igor Kozlov 2016</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Андорра часто считается одной из самых безопасных стран мира, а Андорра-ла-Велья-одним из самых безопасных европейских городов. В городе существует высокоэффективная полицейская сила. Число вооруженных ограблений в городе составило 1 в 2015.</p>

                <p>Цены в Андорре сопоставимы с европейскими, уровень цен на продукты питания средние.</p>
                <p>Для комфортного отдыха достаточно 50-70 € в день на человека, не считая расходов на ски-пасс. Для роскошного отдыха потребуется от 100 € на человека в день.</p>
                <p>Стоимость одежды и обуви в фирменных магазинах примерно на 25 % ниже. Цены на алкоголь и сигареты в Андорре соответствуют ценам дьюти фри.</p>

                <p>Стоит учесть, что андоррцы весьма консервативны: стрип-бары и нудизм под строгим табу, а появление в общественных местах «под градусом» чревато, как минимум, искренним недоумением со стороны местных, а в совокупности с буйным поведением и неуважением к полицейским — и вовсе депортацией из страны. К курению отношение более лояльное: несмотря на официальные запреты и угрозы штрафов от 30 EUR до 10 000 EUR, дымят здесь повсюду.</p>
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Банкоматы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            В княжестве вы сможете снять деньги в банкоматах при помощи основных банковских карт (кредитных и дебетовых), таких как Visa, Mastercard и American Express. Кроме того, вы можете расплатиться ими в любых заведениях: в магазинах, супермаркетах, ресторанах, развлекательных центрах и многих других.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <h5 class="mt-4">Праздники и памятные даты</h5>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <ul>
                            <li>6 января — Богоявление;</li>
                            <li>14 марта — День Конституции;</li>
                            <li>24 июня — День святого Иоанна, покровителя Андорры;</li>
                            <li>8 сентября — День Богородицы Меритчельской - покровительницы Андорры (главный государственный праздник);</li>
                            <li>1 ноября — День Всех Святых;</li>
                            <li>4 ноября — День святого Карла Борромейского;</li>
                            <li>8 декабря — Праздник Непорочного зачатия;</li>
                            <li>25 декабря — Рождество.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <p>Андорра не имеет своего аэропорта, поэтому гражданам Казахстана, путешествующим на самолете, необходимо сначала попасть в Испанию или Францию, из которых они беспрепятственно могут отправиться в Андорру, а для въезда в эти страны нужна шенгенская виза, которая в дальнейшем будет действовать и в самой Андорре. Именно это явилось основанием, что в 2015 году виза в Андорру оформляется в посольствах Франции и Испании, пакет документов ничем не отличается.</p>
        <p><i class="icon icon-warning"></i> Данная информация является ознакомительной, и не является руководством к оформлению визы.</p>

        <h5>Авиасообщение</h5>
        <p>Оптимальные стыковки на перелеты Астана/Алматы-Барселона и Астана/Алматы-Тулуза представлены через: Москву (Аэрофлот), Стамбул (Turkish Airlines), Минск (Belavia), Франкфурт (Lufthansa), Киев (МАУ), Лондон (British Airways).</p>
        <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <div class="row justify-content-between">
            <div class="col">
                <p>Стоимость некоторых товаров в Андорре ниже, чем в соседних Франции и Испании. Это объясняется особым налоговым законодательством, введенным в стране.</p>
                <p>Существуют таможенные ограничения нa ввоз\вывоз некоторых товаров.</p>

                <h5>Спиртное и сигареты:</h5>
                <ul>
                    <li>1,5 л алкогольных напитков крепостью более 22°;</li>
                    <li>5 л столовых и шипучих вин;</li>
                    <li>300 сигарет или 150 сигар (менее 3 г на единицу), или 75 сигар (более 3 г на единицу), или 400 г табака. </li>
                </ul>

                <h5>Продукты питания:</h5>
                <ul>
                    <li>2,5 кг молочного порошка, 3 кг сгущенного молока, 6 кг свежего молока;</li>
                    <li>1 кг масла;</li>
                    <li>4 кг сыра;</li>
                    <li>5 кг сахара и изделий из него;</li>
                    <li>5 кг мяса;</li>
                    <li>1 кг кофе или 400 г экстракта;</li>
                    <li>200 г чая или 80 г экстракта.</li>
                </ul>

                <p>Прочие продукты общей стоимостью до 175 евро, лицам моложе 15 лет — до 90 евро.</p>

                <h5>Промышленные товары: </h5>
                <ul>
                    <li>75 г духов,</li>
                    <li>375 мл одеколона.</li>
                </ul>

                <p>Другие товары общей стоимостью до 525 евро, для лиц моложе 15 лет — до 270 евро.</p>

                <p>Квота и стоимость разрешенных к вывозу товаров могут меняться в зависимости от возраста человека.</p>
            </div>
        </div>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p class="mb-12">Въезд в Андорру осуществляется с территории Испании или Франции. Самыми удобными пунктами отправления являются Барселона и Тулуза соответственно. Прямые перелеты в эти города из Казахстана не производятся, минимум 1&nbsp;стыковка.</p>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="From BARCELONA to ANDORRA on a bus, January 2014" src="https://i.ytimg.com/vi/Eh7xyB9o_50/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Eh7xyB9o_50?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Из Барселоны в Андорру на автобусе<br>© J. B. Bazuev Outdoor 2014</figcaption>
                </figure>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Передвижение по Андорре-ла-Велье обходится в среднем в 5 EUR, трансфер до станций подъемников — в 15-25 EUR, ночью тарифы выше.
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
                <p>В стране используется исключительно автомобильный транспорт. Общая протяженность дорог составляет 278,4 км. Основной вид транспорта в Андорре — автобусы, соединяющие все населенные пункты и горнолыжные курорты. Большинство следуют прямо до станций подъемников в интервале с 9:00 до 18:30. Есть в Андорре и такси, курсирующие как в пределах городов, так и между курортами и подъемниками. Вызывать их лучше по телефону, вот только ждать машину, скорее всего, придется около часа.</p>
                <p>По территории населенного пункта можно двигаться со скоростью 40 км/ч, а вне населенного пункта максимально допустимая скорость может составлять от 60 до 90 км/ч, в зависимости от типа дороги. Во время движения водителям необходимо внимательно следить за знаками, в особенности за теми, которые обозначают въезд в населенный пункт. Главные опасности подстерегают в горах: водителям придется крепко держаться за руль (не все дороги на склонах асфальтированные) и внимательно следить за знаками, предупреждающими о поворотах, сужении трасс или близости диких животных.</p>
            </div>

            <div class="col-12 col-md-4">
                <div id="block-fuel"></div>
            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Горнолыжникам лучше запастись солнцезащитными средствами, выбирать спуски в соответствии с уровнем своего мастерства и всегда иметь под рукой номера экстренных служб. Перед поездкой необходимо оформить медицинскую страховку, покрывающую форс-мажоры во время активного отдыха.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Единственный мобильный оператор в Андорре — Andorra Telecom. Сим-карты продаются в столичных фирменных офисах, стоимость подключения — от 15 EUR (вся сумма переходит на счет). </p>

                <h5>Телефоны:</h5>
                <ul>
                    <li class="mb-1">Полиция — 872-000.</li>
                    <li class="mb-1">Скорая помощь — 110, 118.</li>
                </ul>

                <p>Телефонный код Андорры — 376.</p>
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
                                <div>Посольство Республики Казахстан во Франции<br /> <small>г.Париж, ул. Pierre Charron 59, 75008</small></div>
                                <span>+33-1-45-61-52-00</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Посольство Республики Казахстан в Испании<br /> <small>г. Мадрид, ул. Avenida de los Madronos 43, 28043</small></div>
                                <span>Тел.: +34-91-721-62-90<br /> Факс: +34-91-721-93-74</span>
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