# Видео. Два в ряд
![video2col](images/video-2col.png)

 
1. Короткое видео о столице - vimeo, youtube
2. Длинное (историческое) о стране - youtube

[Генерируем код](https://account.travel/generate/video) и вставляем его в разметку, добавляя каждому figure класс `col-lg-6`


### Разметка

```
.row
	figure.col-lg-6
	figure.col-lg-6
```

Полный код блока на скриншоте:

```html
<div class="row">
    <figure class="figure d-block col-lg-6">
        <div class="video-cover box-shadow">
            <img alt="Лондон/London/Красивые города, красивая музыка" src="https://i.ytimg.com/vi/Z3kX4J_0XmE/maxresdefault.jpg" class="bg-image"/>
            <div class="video-play-icon">
                <i class="icon-controller-play"></i>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Z3kX4J_0XmE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
        <figcaption class="figure-caption text-right">Лондон/London/Красивые города, красивая музыка<br>© Веселый ветер 2017</figcaption>
    </figure>
    <figure class="figure d-block col-lg-6">
        <div class="video-cover box-shadow">
            <img alt="Королевские дворцы  Букингемский дворец   Buckingham Palace" src="https://i.ytimg.com/vi/4wDJIfXhWTM/maxresdefault.jpg" class="bg-image" />
            <div class="video-play-icon">
                <i class="icon-controller-play"></i>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/4wDJIfXhWTM?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
        <figcaption class="figure-caption text-right">Королевские дворцы Букингемский дворец Buckingham Palace<br>© Школа Этикета Юлианы Шевченко 2017</figcaption>
    </figure>
</div>
```