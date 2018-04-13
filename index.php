<?php
$this->title = 'Страны для посещения гражданам Казахстана';
$this->registerMetaTag(['name' => 'description', 'content' => 'Собранный здесь материал позволит погрузиться в культурные особенности и традиции стран, узнать интересные факты о достопримечательностях, а также всю необходимую для туриста информацию.']);
$this->registerJsFile('/js/country.js', ['depends' => 'app\assets\AppAsset']);
?>

<section>
    <div class="container">
        <p>Данный раздел представляет собой энциклопедию стран. Собранный здесь материал позволит погрузиться в культурные особенности и традиции стран, узнать интересные факты о достопримечательностях, а также необходимую для туриста информацию.</p>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#asia">Азия</a></li>
            <li class="nav-item"><a class="nav-link" href="#europe">Европа</a></li>
            <li class="nav-item"><a class="nav-link" href="#america">Америка</a></li>
            <li class="nav-item"><a class="nav-link" href="#africa">Африка</a></li>
        </ul>
    </div>
</nav>

<section id="asia">
    <div class="container">
        <h2>Азия</h2>
        <p>Самая большая часть света, омываемая тремя океанами и вмещающая 53 государства, Азия на карте мира — словно пестрый ковер культур, языков, народностей. Пожалуй, нет на Земле региона, более разнообразного и богатого на всевозможные диковинки.</p>

        <div class="row">
            <figure class="figure d-block col-lg-8 offset-lg-2">
                <div class="video-cover box-shadow">
                    <img alt="A Time-lapse journey through Southeast Asia" src="https://i.vimeocdn.com/video/666294286_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/242276430?transparent=0&autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">A Time-lapse journey through Southeast Asia<br>© Alberto Expósito 2017</figcaption>
            </figure>
        </div>

        <h5>Страны</h5>
        <ul style="column-count: 3;">
            <li>Абхазия</li>
            <li>Азербайджан</li>
            <li>Армения</li>
            <li><a href="/guide/bahrain">Бахрейн</a></li>
            <li>Бутан</li>
            <li><a href="/guide/vietnam">Вьетнам</a></li>
            <li>Грузия</li>
            <li>Израиль</li>
            <li><a href="/guide/india">Индия</a></li>
            <li><a href="/guide/indonesia">Индонезия</a></li>
            <li><a href="/guide/jordan">Иордания</a></li>
            <li>Иран</li>
            <li>Казахстан</li>
            <li><a href="/guide/cambodia">Камбоджа</a></li>
            <li>Катар</li>
            <li>Киргизия</li>
            <li>Китай</li>
            <li>Лаос</li>
            <li>Ливан</li>
            <li>Малайзия</li>
            <li>Мальдивские острова</li>
            <li>Монголия</li>
            <li>Мьянма</li>
            <li>Непал</li>
            <li><a href="/guide/uae">Объединенные Арабские Эмираты</a></li>
            <li>Оман</li>
            <li>Сингапур</li>
            <li>Сирия</li>
            <li>Таджикистан</li>
            <li>Таиланд</li>
            <li>Туркменистан</li>
            <li>Турция</li>
            <li><a href="/guide/uzbekistan">Узбекистан</a></li>
            <li>Филиппины</li>
            <li><a href="/guide/sri_lanka">Шри-Ланка</a></li>
            <li>Южная Корея</li>
            <li>Япония</li>
        </ul>
    </div>
</section>

<section id="europe" class="bg-white">
    <div class="container">
        <h2>Европа</h2>
        <p>Европа — синоним цивилизации, просвещённости, культуры, науки и искусства. Это восточная часть материка Евразия, омываемая водами Атлантики и Северного Ледовитого океана. На 10,5 миллионах кв. км расположились 43 государства, в которых проживают в общей сложности 830 миллионов человек — почти 1/8 населения земного шара.</p>

        <div class="row">
            <figure class="figure d-block col-lg-8 offset-lg-2">
                <div class="video-cover box-shadow">
                    <img alt="Magical Europe Volume Two" src="https://i.vimeocdn.com/video/637103937_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/219367805?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Magical Europe Volume Two<br>© StanChang 2017</figcaption>
            </figure>
        </div>

        <h5>Страны</h5>
        <ul style="column-count: 3;">
            <li>Австрия</li>
            <li>Албания</li>
            <li>Андорра</li>
            <li>Беларусь</li>
            <li>Бельгия</li>
            <li><a href="/guide/bulgaria">Болгария</a></li>
            <li>Босния и Герцеговина</li>
            <li>Ватикан</li>
            <li><a href="/guide/united_kindom">Великобритания</a></li>
            <li><a href="/guide/hungary">Венгрия</a></li>
            <li><a href="/guide/germany">Германия</a></li>
            <li><a href="/guide/greece">Греция</a></li>
            <li>Дания</li>
            <li>Ирландия</li>
            <li>Исландия</li>
            <li><a href="/guide/spain">Испания</a></li>
            <li><a href="/guide/italy">Италия</a></li>
            <li>Кипр</li>
            <li><a href="/guide/latvia">Латвия</a></li>
            <li><a href="/guide/lithuania">Литва</a></li>
            <li>Лихтенштейн</li>
            <li>Люксембург</li>
            <li>Македония</li>
            <li>Мальта</li>
            <li>Молдавия</li>
            <li>Монако</li>
            <li>Нидерланды</li>
            <li>Норвегия</li>
            <li>Польша</li>
            <li>Португалия</li>
            <li><a href="/guide/russia">Россия</a></li>
            <li>Румыния</li>
            <li>Сан-Марино</li>
            <li>Северный Кипр</li>
            <li>Сербия</li>
            <li><a href="/guide/slovakia">Словакия</a></li>
            <li><a href="/guide/slovenia">Словения</a></li>
            <li>Украина</li>
            <li>Финляндия</li>
            <li><a href="/guide/france">Франция</a></li>
            <li>Хорватия</li>
            <li>Черногория</li>
            <li>Чехия</li>
            <li><a href="/guide/switzerland">Швейцария</a></li>
            <li>Швеция</li>
            <li><a href="/guide/estonia">Эстония</a></li>
        </ul>
    </div>
</section>

<section id="america">
    <div class="container">
        <h2>Америка</h2>
        <p>Америка — обширный регион между двумя океанами, включающий два материка, Северную и Южную Америку, и массу разновеликих островов, от гигантской Гренландии до крошечной Мартиники.</p>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Into The West - North America" src="https://i.vimeocdn.com/video/549938847_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/145019415?transparent=0&autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Into The West - North America<br>© Mike Bishop 2015</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Into The West - North America" src="https://i.vimeocdn.com/video/370864726_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/53673455?transparent=0&autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">In South America<br>© Vincent Urban 2012</figcaption>
                </figure>
            </div>
        </div>


        <h5>Страны</h5>
        <ul style="column-count: 3;">
            <li>Антигуа и Барбуда</li>
            <li>Аргентина</li>
            <li>Аруба</li>
            <li>Барбадос</li>
            <li>Боливия</li>
            <li>Бонайре</li>
            <li><a href="/guide/brazil">Бразилия</a></li>
            <li>Венесуэла</li>
            <li>Гватемала</li>
            <li>Гренада</li>
            <li>Гренландия</li>
            <li>Доминиканская Республика</li>
            <li>Канада</li>
            <li>Колумбия</li>
            <li><a href="/guide/costa-rica">Коста-Рика</a></li>
            <li>Куба</li>
            <li>Кюрасао</li>
            <li>Мексика</li>
            <li>Никарагуа</li>
            <li>Парагвай</li>
            <li>Перу</li>
            <li>Сен-Бартелеми</li>
            <li><a href="/guide/usa">Соединенные Штаты Америки</a></li>
            <li>Тринидад и Тобаго</li>
            <li>Чили</li>
            <li>Эквадор</li>
            <li>Ямайка</li>
        </ul>
    </div>
</section>

<section id="africa" class="bg-white">
    <div class="container">
        <h2>Африка</h2>
        <p>Африка - колыбель человечества. И пусть с тех пор минул не один миллион лет, лоно Африки сегодня столь же жаркое, не менее дикое и лишь на толику более изученное.</p>

        <div class="row">
            <figure class="figure d-block col-lg-8 offset-lg-2">
                <div class="video-cover box-shadow">
                    <img alt="Heart of Africa" src="https://i.vimeocdn.com/video/462402180_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/85004906?transparent=0&autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Heart of Africa<br>© Michael Sugrue 2014</figcaption>
            </figure>
        </div>

        <h5>Страны</h5>
        <ul style="column-count: 3;">
            <li>Алжир</li>
            <li>Ботсвана</li>
            <li>Гамбия</li>
            <li><a href="/guide/egypt">Египет</a></li>
            <li>Замбия</li>
            <li>Зимбабве</li>
            <li>Кабо-Верде</li>
            <li>Кения</li>
            <li><a href="/guide/mauritius">Маврикий</a></li>
            <li>Мадагаскар</li>
            <li>Марокко</li>
            <li>Мозамбик</li>
            <li>Намибия</li>
            <li>Реюньон</li>
            <li>Руанда</li>
            <li>Сан-Томе и Принсипи</li>
            <li>Сейшельские острова</li>
            <li>Сенегал</li>
            <li>Танзания</li>
            <li>Тунис</li>
            <li>Уганда</li>
            <li>Эфиопия</li>
            <li>ЮАР</li>
        </ul>
    </div>
</section>