<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Андорра</h1>
                <div class="lead">
                    <b>Столица</b>: Андорра-ла-Велья
                    <br>
                    <b>Официальные языки:</b>: каталанский, испанский, французский
                    <br>
                    <b>Валюта</b>: EUR — евро
                    <br>
                    <b>Территория</b>: 468 км² 
                    <br>
                    <b>Население</b>: 77,3 тыс. человек 
                    <br>
                    <b>Часовой пояс</b>:  GMT +1. Разница во времени с Астаной -5 часов. Осуществляется переход на летнее/зимнее время
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Andorra" src="https://i.vimeocdn.com/video/140026144_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/21731434?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Jordi J. Recort, 2011</figcaption>
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
                <p>Княжество Андорра — государство в Западной Европе, относящееся к числу малых стран. Располагается между Испанией и Францией в восточных Пиренеях. Выход к морю отсутствует.</p>
    
                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Андорра славится качественными горнолыжными курортами, массой достопримечательностей и шоппингом по системе «tax-free».</p>
                <p>Столицей государства является Андорра-ла-Велья — уютный и компактный городок, расположенный в высокогорье. Здесь точно не заблудишься — в городе всего одна центральная улица, от которой ответвляются узкие улочки и кварталы. Зато при желании все красоты и достопримечательности столицы можно обойти пешком.</p>
                <p>Начать лучше со старого квартала, в котором располагаются резиденция правительства, единственное здание суда в стране и здание парламента. Неподалеку есть строение, напоминающее замок — дом Сет-Панис или «сундук на семи замках» — здесь некогда хранились важные документы, доступ к которым имели только представители всех семи округов Андорры.</p>
                <p>Кроме того, стоит посетить Музыкальную академию, Государственный театр, церкви св. Арменола, Санта-Коломна и Сантуарио-де-Меристель.</p>
                <p>В Андорре-ла-Велье можно не только отдохнуть, но и поправить свое здоровье — здесь находятся термальные источники, в составе которых содержатся минеральные соли, сера, планктон, благоприятно воздействующие на кожу.</p>
                <p>Для любителей горнолыжного спорта в Андорре целых два района для катания с ухоженными трассами и современными подъемниками — Валлнорд и Грандвалира. Эти места придутся по душе как опытным лыжникам, так и новичкам, также здесь обучают катанию детей уже с 4-летнего возраста.</p>

            </div>
        </div>

        <hr>

        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Parc Central (Andorra la Vella)" src="https://i.vimeocdn.com/video/525315538_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/132587991?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Parc Central (Andorra la Vella)<br>© AeroFilm Andorra 2015</figcaption>
            </figure>
                
                    
            <figure class="figure d-block col-lg-6">
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

        <p>В Андорре проживают следующие этнические группы: андорранцы (46%), испанцы (26%), португальцы (14%), французы (5%) и англичане (1%).</p>
        <p>Подавляющее большинство верующих жителей страны исповедуют католицизм (99%).</p>
        <p>Официальным языком государства является каталанский — им владеет треть населения. Однако фактически функции официальных языков выполняют также испанский и французский языки.</p>
        <p>В стране высокая средняя ожидаемая продолжительность жизни. На сегодняшний день ее показатель составляет 82 года: 84 года для женщин и 81 год для мужчин.</p>


        <?= $this->render('_population') ?>

    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h2>Культура и традиции</h2>

                <p>Ввиду географического положения Андорры, ее соседства с Испанией и Францией, культура крошечного государства формировалась под влиянием традиций стран-соседей. Однако, это не касается демократичности и раскованности Франции — традиции и обычаи Андорры сопряжены с высокими и даже строгими моральными нормами. Так, например, в стране отсутствуют стриптиз-клубы, а в ресторанах вы не найдете алкогольных напитков крепче, чем местное сухое вино. Туриста, чье поведение противоречит моральным нормам Андорры, запросто могут выдворить из страны и наложить многолетний запрет на посещение.</p>
                <p>Другой отличительной особенностью андорранцев является их необъятная любовь к музыке и танцам. Здесь ежегодно устраиваются международные музыкальные фестивали, посвященные джазовым и классическим произведениям. А во время праздников жители страны исполняют свои знаменитые народные танцы — марратху и контрапас.</p>
                <p>Что касается национальной кухни, то в Андорре к главным местным блюдам относятся форель с грибами и ягодами, а также тринчат — пюре из картофеля и капусты с грудинкой. Непременно стоит продегустировать и местное ароматное вино, изготовленное из горного винограда.</p>

            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>6 января — Богоявление</li>
                            <li>14 марта — День Конституции</li>
                            <li>24 июня — День св. Иоанна</li>
                            <li>8 сентября — День Богородицы Меритчельской</li>
                            <li>1 ноября — День Всех Святых</li>
                            <li>4 ноября — День св. Карла Борромейского</li>
                            <li>8 декабря — Праздник Непорочного зачатия</li>
                            <li>25 декабря — Рождество</li>
                        </ul>
                    </div>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ANDORRA SHOPPING FESTIVAL 2015" src="https://i.ytimg.com/vi/bbDP3NFmn38/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/bbDP3NFmn38?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ANDORRA SHOPPING FESTIVAL 2015<br>© AndorraWorld 2016</figcaption>
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

                <p>Климат Андорры является субтропическим, горным.</p>
                <p>Зима здесь снежная, средняя температура составляет от +2°С до -2°С. Лето сухое, с температурными показателями от +15°С до +20°С.</p>
                <p>Андорра считается самым солнечным горным регионом в Европе — здесь около 250 солнечных дней в году.</p>
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

                <p>Андорра не владеет собственным аэропортом — въезд в страну осуществляется через открытые границы со стороны Испании и Франции. Соответственно, для посещения Андорры необходимы действующие загранпаспорт и двукратная шенгенская виза, которая оформляется через посольства Испании или Франции.</p>
                <p>Перечень необходимых документов для получения визы*:</p>
                <ul>
                    <li>анкета - заявление на визу;</li>
                    <li>загранпаспорт, срок действия которого заканчивается не раньше, чем за полгода до окончания срока действия визы;</li>
                    <li>цветное фото 3,5*4,5 см (2 шт.);</li>
                    <li>копия страниц загранпаспорта и копия предыдущих шенген виз;</li>
                    <li>справка с места работы с указанием должности, стажа работы, оклада;</li>
                    <li>доказательства платежеспособности (выписка по банковскому счету);</li>
                    <li>медицинский страховой полис;</li>
                    <li>бронь авиабилетов;</li>
                    <li>свидетельства о браке, рождении детей.</li>
                </ul>
                <p>*Информация является ознакомительной, за точной информацией необходимо обращаться в консульство.</p>
                <a href="https://avia.account.travel" class="btn btn-outline-success">Подобрать рейс с пересадкой</a>
            </div>
            <div class="col-md-4">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i> Шенгенская виза
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+кенесары,+47&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Испании</h5>
                        <p>Астана, Кенесары, 47</p>
                        <p><i class="icon-phone"></i> +7 (7172) 20–15–36</p>
                        <p><i class="icon-link"></i> <a href="http://www.exteriores.gob.es/embajadas/astana/ru/Pages/inicio.aspx" target="_blank" rel="nofollow">exteriores.gob.es</a></p>
                    </div>
                </div>
                
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p>Вариантами перелета из Астаны в Барселону являются рейсы с пересадкой в Москве (авиакомпания Аэрофлот), Киеве (МАУ), Минске (Belavia).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Андорры - <a href="https://andorra.visahq.com/customs/" target="_blank" rel="nofollow">andorra.visahq.com</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Гражданам Казахстана, достигшим 18-летнего возраста, разрешается беспошлинно ввозить до 300 сигарет и до полутора литра крепких спиртных напитков (или 5 литров сухого вина).</p>

        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен (сумма свыше 10 тыс. USD подлежит обязательной декларации).</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Ввоз оружия возможен строго при наличии соответствующего разрешения от консульского загранучреждения.</p>

        <h5>Запрещены к ввозу/вывозу:</h5>
        <ul>
            <li>наркотические средства и наркосодержащие лекарства;</li>
            <li>мясные и молочные продукты (кроме детского питания и питания для людей с хроническими заболеваниями);</li>
            <li>огнестрельное оружие (кроме охотничьего), боеприпасы, взрывчатые вещества, фейерверки;</li>
            <li>редкие и исчезающие виды животных, растений и птиц;</li>
            <li>домашние животные без соответствующего ветеринарного сертификата;</li>
            <li>предметы искусства, обладающие исторической и/или художественной ценностью.</li>           
        </ul>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспортная система</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                
                <p>Андорра не располагает железными дорогами, портами или аэропортами. Однако, имеется несколько частных вертолетных площадок в Аринсале, Эскальдес-Энгордань и Ла-Массане.</p>
                <p>Ближайшие к государству аэропорты расположены в Перпиньяне, Барселоне, Тулузе, Жироне и Реусе.</p>
                <p>Внутри страны хорошо развито автобусное сообщение, связывающее столицу с основными населенными пунктами и горнолыжными курортами. Также функционируют международные маршруты из Андорры в Тулузу и Барселону.</p>                
                <h5>Городской транспорт</h5>
                <p>Территория столицы вполне позволяет обойтись без пассажирского транспорта, тем не менее в городе действуют автобусные маршруты. Имейте в виду, что в салон запрещено входить в горнолыжных и сноубордических ботинках — вся экипировка перевозится в багажнике.</p>
                <p>Можно воспользоваться услугами такси, курсирующими в пределах города и между подъемниками и курортами. Заказ такси производится заранее по телефону, с учетом того, что ожидание автомобиля может занять пару часов.</p>
                <p>Также в отелях предлагается прокат велосипеда — это отличный вариант для городских прогулок. Стоимость аренды составляет 10 EUR за час, но выгоднее брать велосипед на 2 дня, тогда плата составит всего 15 EUR.</p>
                
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
                                <div>Междугородний автобус</div>
                                <span>4 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Городской автобус</div>
                                <span>от 1,80 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 1,13 EUR за км</span>
                            </div>
                        </li>
                    </ul>
                </div>

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
                    <figcaption class="figure-caption text-right">From BARCELONA to ANDORRA on a bus, January 2014<br>© J. B. Bazuev Outdoor 2016</figcaption>
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
               
                <p>Протяженность дорог в Андорре составляет 280 км, четверть из них без твёрдого покрытия.</p>
                <p>Особенности дорожного движения:</p>
                <ul>
                    <li>максимальная скорость в городе — 40 км/час, за его пределами — до 90 км/час;</li>
                    <li>парковки платные, обозначаются синей (от 1 EUR в час) и зеленой (от 0,50 EUR в час) разметкой;</li>
                    <li>плата за проезд по дорогам не взимается, за исключением туннеля Envalira;</li>
                    <li>страхование автомобиля является обязательным;</li>
                    <li>использование шипованной резины запрещено;</li>
                    <li>для поездки в горы колеса автомобиля необходимо оснастить цепями противоскольжения;</li>
                    <li>довольно часто случаются заторы.</li>
                </ul>

                <h5>Аренда авто</h5>
                <p>Арендовать автомобиль можно в прокатных фирмах Андорры-ла-Вельи или же в Испании (выгодно по цене). Минимальный возраст водителя — 21 год, а для определенных моделей автомобилей — 25 лет</p>
                <p>Для заключения договора аренды потребуются паспорт, водительские права международного образца и кредитная карта.</p>
                <p>Необходимо внимательно ознакомиться со всеми пунктами договора, а также осмотреть арендуемое транспортное средство на предмет царапин или иных повреждений и зафиксировать их документально.</p>
                <p>Минимальная стоимость проката автомобиля составляет 70 EUR в сутки. За дополнительную плату можно приобрести автокресло, багажник и навигатор.</p>                            
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Республики Казахстан могут управлять транспортным средством на территории Андорры при наличии водительского удостоверения международного образца.</p>
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
                                <span>1,19 EUR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин 98</div>
                                <span>1,26 EUR за литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1 EUR за литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Андорра // Магазины // Парковки // Торговый центр" src="https://i.ytimg.com/vi/mjjDBOQNBWk/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/mjjDBOQNBWk?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Андорра: Магазины, Парковки, Торговый центр<br>© Moto42com 2016</figcaption>
                </figure>               
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
        <p>Андорра характеризуется благополучной санитарно-эпидемиологической обстановкой.</p>
        <p>Главный госпиталь Meritxell находится в г. Эскальдес. В стране также насчитываются 12 центров, оказывающих первую медицинскую помощь.</p>
        <p>Медицинское страхование в стране является обязательным, для работающих граждан ее оплачивает работодатель, покрывая, тем самым, большую часть расходов на стационарное лечение и медикаменты.</p>
        <p>Иностранному туристу при посещении Андорры необходимо оформление медицинского страхового полиса.</p>
        
        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h2>Мобильная связь и интернет</h2>
                <p>Единственным мобильным оператором в Андорре является Andorra Telecom - <a href="https://www.andorratelecom.ad/" target="_blank" rel="nofollow">перейти на сайт</a></p>
                <p>Сим-карту можно приобрести в столице в офисах продаж. Стоимость подключения обойдется в 15 EUR, на счет переходит вся сумма.</p>
                <p>Совершать международные звонки можно также с телефонов-автоматов, установленных как на городских улицах, так и горнолыжных зонах. Для этого необходимо воспользоваться магнитной картой номиналом от 3 до 6 EUR.</p>
                <p></p>
                <p>Wi-Fi-точки есть в отелях, ресторанах и кафе, в столице работают несколько интернет-кафе.</p>

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
                                <div>Полиция</div>
                                <span>110</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span><nobr>112</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span><nobr>118</nobr></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Тех. помощь на дороге</div>
                                <span><nobr>165</nobr></span>
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