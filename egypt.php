<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Египет</h1>
                <div class="lead">
                    <b>Столица</b>: Каир<br>
                    <b>Официальный язык</b>: арабский<br>
                    <b>Валюта</b>: EGP, L.E. — египетский фунт (1 фунт = 100 пиастров)<br>
                    <b>Территория</b>: 1 001 450 км²<br>
                    <b>Население</b>: 95.7 млн человек<br>
                    <b>Часовой пояс</b>: UTC +2. Разница с Астаной -4 часа
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="7 Days in Egypt" src="https://i.vimeocdn.com/video/542971449_1280x544.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/144987979?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Kristian Hampton, 2015</figcaption>
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
                <p>Египет называют страной двух материков, т.к. располагается на севере Африки и азиатском Синайском полуострове.</p>
                <p>Страна соседствует с Ливией, Суданом, Израилем, Палестинской автономией, Иорданией и Саудовской Аравией.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Берега Египта омывают Красное (на востоке) и Средиземное (на севере) моря. Их соединяет Суэцкий канал — один из самых значимых искусственных судоходных каналов в мире. </p>
                <p>На территории государства также располагается одна из великих по протяженности рек земного шара — Нил.</p>
                <p>Крупные города Египта — Каир, Суэц, Гиза, Луксор, Александрия.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Подводный мир Макади, Красное море, Египет. Underwater World of Makadi, Egipt 2015. (4K)" src="https://i.ytimg.com/vi/5SUC96V8xwY/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/5SUC96V8xwY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Подводный мир Макади, Красное море, Египет. Underwater World of Makadi, Egipt 2015. (4K)<br>© Василий Степановский 2016</figcaption>
            </figure>

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Святыни древнего Египта" src="https://i.ytimg.com/vi/uWBzCbxqYLA/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/uWBzCbxqYLA?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Святыни древнего Египта<br>© Бармалей Фиолетовый 2017</figcaption>
            </figure>
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
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>
        <p>Египет является самой населенной страной арабского мира и третьей по населению в Африке. Господствующая религия — суннитский ислам, который исповедует 90% населения. Остальные 10% — христиане-копты.</p>
        <p>Мужчин и женщин примерно поровну. Средняя продолжительность жизни в Египте - 71 год. У женщин она составляет 73 года, а у мужчин 67 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2>Культура и традиции</h2>
                <p>Египет — уникальная страна, полная загадок для современников, имеющая продолжительную историю развития.</p>
                <p>Традиции, обычаи египтян уходят корнями в древние истоки. Свои отпечатки на современный уклад жизни, несомненно, накладывает вероисповедание — около 90% населения исповедуют ислам, около 10% христианство.</p>
                <p>Египтяне толерантно относятся к другим национальным конфессиям, не навязывая свои каноны — в отелях подаются блюда из свинины, на курортах продаются алкогольные напитки, иностранные туристы спокойно могут перемещаться по стране в европейской одежде. Однако во избежание неприятных инцидентов гостям страны все же необходимо уважительно относиться к местным нормам поведения и стараться их придерживаться: не появляться в нетрезвом виде в публичном месте, не производить фото и видеосъемку местных жителей без их согласия, не разжигать политические, религиозные или иные конфликты, придерживаться сдержанного стиля одежды вне территории отелей, особенно при посещении храмов или других религиозных мест.</p>

                <h5>Одежда</h5>
                <p>Что касается одежды, то местные жители чаще всего носят национальную одежду — мужчины надевают широкие белые или синие рубахи, а женщины хиджаб, расшитый драгоценностями, в зависимости от благосостояния семьи.</p>
                <p>Однако можно отметить, что традиции египтян начинают постепенно меняться в результате тесного взаимодействия с представителями других культур. Так, многие местные жители предпочитают носить европейскую одежду, женщины наряду с мужчинами  осваивают профессии врача, учителя, юриста.</p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Официальные праздники</h6>
                        <ul>
                            <li>7 января — Рождество</li>
                            <li>25 апреля — День освобождения Синая (в Октябрьской войне 1973 г.)</li>
                            <li>1 мая — Праздник труда</li>
                            <li>18 июня — День вывода войск (освобождение от британского владычества)</li>
                            <li>23 июля — День Революции (в 1952 г.)</li>
                            <li>6 октября — День вооруженных сил</li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Исламские праздники (дата исчисляется по лунному календарю)</h6>
                        <ul>
                            <li>Маулид ан-Наби (рождество Мухаммеда)</li>
                            <li>Священный месяц Рамадан</li>
                            <li>Ид аль-Фитр (окончание поста Рамадан — 3 дня)</li>
                            <li>Ид аль-Адха (день жертвоприношения — 4 дня)</li>
                            <li>Рас-ас-Сана (Новый год)</li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Памятные даты, рабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>1 марта — Праздник спортсменов</li>
                            <li>21 марта — День матери</li>
                            <li>18 июня — Ид аль-Галаа (отмечается вывод из Египта британской оккупации)</li>
                            <li>15 августа — Разлив Нила</li>
                            <li>21 октября — День ВМФ Египта</li>
                            <li>24 октября — Взятие египетской армией Суэца в 1973 г.</li>
                            <li>23 декабря — День Победы (1956 г.)</li>
                        </ul>
                    </div>
                </div>
                <!--<div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Сувенирная продукция</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Магнит</div>
                                <span>0,5 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Египетский чай</div>
                                <span>от 10 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полотенце</div>
                                <span>15 USD</span>
                            </div>
                        </li>
                       <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Комплект белья</div>
                                <span>50 USD</span>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Статуэтки</div>
                                <span>от 3 USD</span>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Папирус ручной работы</div>
                                <span>от 10 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Верблюжье одеяло</div>
                                <span>от 510 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Кальян</div>
                                <span>от 10 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Парфюмерное масло</div>
                                <span>от 5 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Халат</div>
                                <span>от 25 USD</span>
                            </div>
                        </li>
                    </ul>
                </div>-->
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Климат</h2>
                <p>Климат на основной части территории тропический, пустынный, на севере страны влажный, субтропический.</p>
                <p>С апреля по октябрь жарко, пик высоких температур приходится на июль-сентябрь. Среднесуточные температурные отметки достигают до +26 °С на севере и до +34 °С на юге.</p>
                <p>С ноября по март прохладнее — так, минимальные температуры января до +17 °С на севере и до +23 °С на юге государства.</p>
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
                <p>Въезд на территорию государства визовый. Туристическая виза оформляется гражданином Казахстана непосредственно в аэропорту Египта (срок действия до 30 дней), однако такой порядок распространяется только на туристов, прибывших чартерным рейсом с территории РК.</p>
                <p>Иным прибывшим иностранцам (не в составе тур. группы или вылетающим с территории другой страны) следует оформить визу в Посольстве заблаговременно.</p>
                <p>Посольство отказывается принимать вклейку в паспорте, т.е. ребенок должен получить свой личный загранпаспорт.</p>
                <p>Для получения визы в Египет необходимо собрать пакет документов*:</p>
                <ol>
                    <li>Паспорт + копия паспорта</li>
                    <li>Анкета с цветным фото (2 шт.) 4*6 на белом фоне (оформляется в Центре Визовой Поддержки)</li>
                    <li>Выкупленные туристический ваучер и билеты в оба конца</li>
                    <li>Консульский сбор</li>
                    <li>Страховой полис на все время пребывания (оформляется в Центре Визовой Поддержки)</li>
                    <li>Анкетные данные: домашний адрес, семейное положение, место работы и должность</li>
                    <li>Справка с места работы, в которой указываются должность, стаж работы, зарплата</li>
                </ol>
                <p>Срок оформления визы составляет 5 рабочих дней.</p>
                <p>Стоимость: 12100 тенге + 23 $ (Консульский сбор)* + 2600 тенге.</p>
                <p>*Представленные данные носят ознакомительный характер, за более точной информацией следует обращаться в визовый центр.</p>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Срок действия визы</div>
                                <span>до 30 дней</span>
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
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+ул.+сарайшык,+30&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Египта</h5>
                        <p>Астана, ул. Сарайшык, 30</p>
                        <p><i class="icon-phone"></i> +7 (7172) 28-60-67</p>
                        <p><i class="icon-mail"></i> <a href="mailto:embassy.astana@mfa.gov.eg" target="_blank">embassy.astana@mfa.gov.eg</a></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Аэрофлот</div>
                                <span>12 ч. 05 мин.</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Air Astana</div>
                                <span>11 ч. 0 мин.</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Etihad Airways</div>
                                <span>10 ч. 35 мин.</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Lufthansa</div>
                                <span>13 ч. 25 мин.</span>
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

        <h5>Спиртное и сигареты</h5>
        <p>Лица, достигшие возраста 20 лет, имеют право на ввоз до 1 литра спиртосодержащих напитков и до двух литров пива, достигшие возраста 15 лет — сигареты в количестве 200 штук или 50 сигар.</p>

        <h5>Ювелирные украшения и драгоценности</h5>
        <p>Драгоценности и ювелирная продукция, а также электронное оборудование подлежат обязательной декларации во избежание конфискации.</p>

        <h5>Валюта</h5>
        <p>Иностранным гражданам разрешен ввоз в страну и вывоз из страны суммы, не превышающей 10 тыс. USD.</p>

        <h5>Автомобили</h5>
        <p>Таможенная пошлина на ввоз авто очень высокая (стоимость зависит от объема двигателя и составляет от 100% стоимости автосредства).</p>

        <h5>Прочее</h5>
        <p>Предметы частного пользования не подлежат таможенной декларации.</p>

        <h3 class="mt-3">Запрещены к ввозу в Египет</h3>
        <ul>
            <li>информационные носители, печатная продукция с информацией, противоречащей цензуре и законам государства</li>
            <li>наркотические вещества и лекарственные средства, содержащие высокую дозу наркотиков</li>
            <li>все виды оружия</li>
        </ul>

        <h3 class="mt-3">Запрещены к вывозу из Египта</h3>
        <ul>
            <li>местная валюта</li>
            <li>кораллы и другие объекты морской фауны (штраф до 1000 USD)</li>
            <li>предметы, представляющие историческую ценность</li>
        </ul>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Регулярные рейсы из Казахстана в аэропорты Египта на сегодняшнее время отсутствуют. Туристы могут воспользоваться чартерным рейсом (авиакомпании Sunday Airlines) или осуществить перелет с пересадками.</p>
                <p>Самый доступный и сравнительно дешевый вид транспорта для туристов в Египте — это такси. Такси можно свободно поймать прямо на улицах городов или вызывать заранее по телефону на стойке ресепшена в отеле. Стоимость проезда необходимо заранее обговорить с водителем (средняя цена 10-50 египетских фунтов, часто принимают также доллары США и евро).</p>
                <p>Также для перемещения по территории страны можно воспользоваться услугами междугородних автобусных перевозок (например, цена на рейс Каир-Хургада составляет ок. 15 USD).</p>

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
                                <div>Автобус междугородний</div>
                                <span>3 - 14 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус городской</div>
                                <span>от 0,2 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>от 0,17 USD</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>1.5 USD</span>
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
                <p>Дороги в Египте соответствуют европейским стандартам с отличной авторазметкой и дорожными знаками. Часть дорог имеет ночное освещение.</p>
                <p>Однако настоятельно не рекомендуется брать авто в аренду для самостоятельного передвижения по причине существующего небезопасного стиля вождения местного населения. Для оформления договора нужен пакет документов: местная виза, международные или национальные водительские права и загранпаспорт.</p>
                <p>Пешеходам нужно быть особенно внимательными при переходе через дорогу, в том числе на регулируемых перекрестках.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Гражданин Казахстана может управлять авто на территории Египта, если ему исполнилось 25 лет и имеется водительский стаж свыше 1 года.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-92</div>
                                <span>3,5 EGP/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-95</div>
                                <span>6.25 EGP/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>2,35 EGP/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <p>Медицина в Египте, особенно за чертой мегаполисов, зачастую не соответствует европейским стандартам. В тяжелых случаях болезни помощь могут оказать лишь в столичных клиниках.</p>
                <p>Во избежание инфекционных заболеваний гостям страны рекомендуется обрабатывать овощи и фрукты антисептическими средствами, пить исключительно бутилированную воду, приобретать молоко, сок, мороженое, кондитерские изделия только в фабричной упаковке.</p>
                <p>Для части туристов характерны проблемы с ЖКТ из-за присутствия в местной воде и еде бактерий.</p>
                <p>Также людям с хроническими заболеваниями необходимо учитывать особенности жаркого сухого климата, преобладания очень высоких температур в летнее время.</p>
                <p>Необходимо заранее позаботиться о дорожной аптечке — приобрести средства для работы ЖКТ, препараты на случай отравления, медикаменты для лечения при ОРЗ и ОРВИ.</p>
                <p>Медицинская помощь в Египте платная, довольно дорогостоящая, вследствие чего целесообразно оформление медицинской страховки перед посещением страны.</p>

                <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Какие лекарства брать за границу: Египет, Турция и другие страны. (HD)" src="https://i.ytimg.com/vi/86oRyzkLjuQ/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/86oRyzkLjuQ?autoplay=1&rel=0&showinfo=0&start=6" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Какие лекарства брать за границу: Египет, Турция и другие страны. (HD)<br>© ChistoSok 9</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">

                <h5>Мобильная связь и интернет</h5>
                <p>В Египте три крупных оператора мобильной связи: "Оранж" (Orange), "Этисалат" (Etisalat) и  “Водафон” (Vodafone). Эти компании также предоставляют интернет-услуги, GPS навигации и пр. Сим-карту любого оператора можно приобрести в крупных городах повсеместно, при себе необходимо иметь загранпаспорт. В большинстве египетских городов можно обзавестись симкой любого из этих операторов.</p>

                <p>Операторы мобильной связи:</p>
                <ul>
                    <li>Orange - <a href="https://www.orange.eg/en/" target="_blank">перейти на сайт</a></li>
                    <li>Etisalat - <a href="http://www.etisalat.eg/etisalat/portal/home_en" target="_blank">перейти на сайт</a></li>
                    <li>Vodafone - <a href="http://www.vodafone.com.eg/" target="_blank">перейти на сайт</a></li>
                </ul>

                <p>В большинстве отелей и кафе есть платные или бесплатные wi-fi точки.</p>

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
                                <div>Пожарная служба</div>
                                <span>180</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>122</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>123</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Служба спасения</div>
                                <span>065, 354, 3365</span>
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
                                    <nobr>220 В</nobr>, <nobr>50 Гц</nobr>. Используются разъемы <a href="/journal/electric-sockets.html#typeС">типов C, F</a>
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
