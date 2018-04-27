# Секции. Въезд в страну
![video2col](images/visa.png)

 
Состоит из описания и информационной колонки.

В описании указываем список документов на визу (если нужна) или порядок безвизового въезда, а также пишем, какие существуют авиарейсы из Казахстана в данную страну.

Справа идут блоки:

1. Нужна ли виза
	* «Шенгенская виза»
	* «Требуется виза» (если нужен не шенген)
	* «Безвизовый режим» - до N дней
2. ~~Регистрация обязательна~~ - указывается только для безвизовых стран и тех, где можно оформить визу по прибытию!
3. Посольство/консульство. Генеруруется с помощью [этого инструмента](https://account.travel/generate/place).
4. Блок прямых авиарейсов с кнопкой подбора. Если прямых нет - пишем об этом в левой колонке и там же указываем кнопку «Подобрать рейс с пересадкой»

### Разметка

```
.row
	.col-md-8.col-lg-7
	.col-md-4
```

Полный код секции на скриншоте:

```html
<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Гражданам Республики Казахстан для посещения Великобритании требуется национальная виза, оформить которую можно при обращении в посольство.</p>
                <p>Первым делом необходимо определиться с типом визы в зависимости от целей поездки.</p>
                <p>Типы виз:</p>
                <ul>
                    <li>рабочая</li>
                    <li>студенческая</li>
                    <li>туристическая</li>
                    <li>гостевая</li>
                    <li>деловая</li>
                    <li>транзитная</li>
                </ul>
                <P>Все документы, предоставляемые в визовый отдел, включая заполненные анкеты, выписки из банка, справки с места работы должны быть переведены на английский язык.</P>
                <P>Сроки получения визы индивидуальны, определяются консульством в каждом отдельном случае (в среднем от недели до месяца), поэтому документы необходимо подавать заблаговременно и подходить к их оформлению со всей ответственностью.</P>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Требуется виза</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+ул.+космонавтов,+62&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Великобритании</h5>
                        <p>Астана, Ул. Космонавтов, 62</p>
                        <p><i class="icon-phone"></i> +7 (7172) 55-62-00</p>
                        <p><i class="icon-link"></i> <a href="https://www.gov.uk/world/organisations/british-embassy-astana.ru" target="_blank">www.gov.uk</a>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Астана - Лондон</div>
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
```
