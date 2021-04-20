<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главное Управление Здравоохранения</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!--popap-->
    <link rel="stylesheet" href="css/slick.css"> <!-- slider -->
    <link rel="stylesheet" href="css/jquery.formstyler.css">
    <link rel="stylesheet" href="css/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <!-- <li><a href="#">ВЫШЕСТОЯЩИЕ ОРГАНИЗАЦИИ</a></li>
         <li><a href="#">ОРГАНИЗАЦИИ ЗДРАВООХРАНЕНИЯ ОБЛАСТИ</a></li>
         <li><a href="#">РАЗНОЕ</a></li>
        <li><a href="#">ВОПРОС ОТВЕТ</a></li>

     -->
    <div class="preloader">
        <div class="preloader__row">
            <div class="preloader__item"></div>
            <div class="preloader__item"></div>
        </div>
    </div>
    <a href="#header" class="top__button">
        <img src="img/top.png" alt="">
    </a>
    <div class="progress"></div>
    <header id="header" class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__contacts">
                    <a class="header__phone" href="tel:50-32-04">Телефон горячей линии: 50-32-04</a>
                    <a class="header__email" href="#">rrssrssrrr1997@bk.ru</a>
                    <a class="header__btn" href="#form">Запись на прием по Email</a>
                </div>
            </div>
        </div>
        <div class="header__content">
            <div class="container">
                <div class="header__content-inner">
                    <div class="header__logo">
                        <a href="#">
                            <img width="50" height="50" src="img/logo.png" alt="Логотип"> </a>
                    </div>
                    <nav class="menu">
                        <div class="header__btn-menu">
                            <span class="icon-bars"></span>
                        </div>
                        <ul>
                            <li><a href="#">ГЛАВНАЯ</a></li>
                            <li><a href="#services__title">CОСТАВ</a></li>
                            <li><a href="#about">ПРЯМЫЕ ЛИНИИ</a></li>
                            <li><a href="#form">ЗАПИСЬ НА ПРИЕМ</a></li>
                            <li><a href="#organisation">ОРГАНИЗАЦИИ</a></li>
                            <li><a href="#news">ВОПРОС/ОТВЕТ</a></li>
                            <li><a href="#personal">ЛИЧНЫЙ КАБИНЕТ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="slider">
        <div class="container">
            <div class="slider__inner">
                <div class="slider__item">
                    <div class="slider__item-content">
                        <div class="slider__title">
                            ГОМЕЛЬСКИЙ ОБЛАСТНОЙ <br> ИСПОЛНИТЕЛЬНЫЙ КОМИТЕТ
                        </div>
                        <div class="slider__text">
                            ГЛАВНОЕ УПРАВЛЕНИЕ ЗДРАВООХРАНЕНИЯ
                        </div>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__item-content">
                        <div class="slider__title">
                            ВОПРОСЫ КВАЛИФИКАЦИОННЫХ ЭКЗАМЕНОВ
                        </div>
                        <div class="slider__text">
                            Список вопросов(врачи)
                        </div>
                        <a class="slider__btn default-btn" download href="download/практика.docx">
                            Скачать вопросы
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="personal" id="personal">
        <div class="container">
           <form class="personal__form wow rollIn" action="vendor/signin.php" method="POST">
           <label>Логин</label>
           <input class="personal__form-inp" name="login" type="text" placeholder="Введите логин">
           <label>Пароль</label>
           <input class="personal__form-inp" name="password" type="password" placeholder="Введите пароль">
           <button class="personal__btn" type="submit">Войти</button>
           <p class="personal__form-que">
            У вас нет аккаунта? - <a class="personal__form-link" href="registr.php">зарегистрируйтесь</a>!
           </p>
           <?php 
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>' ;
            }
             unset($_SESSION['message']);

            ?>
       </form> 
        </div>   
    </section>
    <section id="services__title" class="services">
        <div class="container">
            <div class="services__top">
                <div class="services__title-box">
                    <div class="services__title">
                        СОСТАВ ГЛАВНОГО УПРАВЛЕНИЯ
                    </div>
                    <div class="services__text">
                        Наши сотрудники
                    </div>
                </div>
            </div>
            <div class="wrapper wow fadeIn">
                <div class="services__items">
                    <div class="services__item">
                        <img src="img/about-1.png" alt="" width="130" height="150" class="services__item-img">
                        <div class="services__item-title">
                            Денисенко Артур Викторович
                        </div>
                        <div class="services__item-text">
                            Начальник главного управления<br>
                            Кабинет 401<br>
                            Телефон рабочий: 50-32-01
                        </div>
                    </div>
                </div>
                <div class="services__items">
                    <div class="services__item">
                        <img src="img/about-5.png" alt="" width="130" height="150" class="services__item-img">
                        <div class="services__item-title">
                            Смирнов Андрей Петрович
                        </div>
                        <div class="services__item-text">
                            Заместитель начальника<br>
                            главного управления<br>
                            Кабинет 404<br>
                            Телефон рабочий: 50-32-01
                        </div>
                    </div>
                </div>
                <div class="services__items">
                    <div class="services__item">
                        <img src="img/about-6.png" alt="" width="130" height="150" class="services__item-img">
                        <div class="services__item-title">
                            Кириленко Вера Григорьевна
                        </div>
                        <div class="services__item-text">
                            Заместитель начальника<br>
                            главного управления<br>
                            Кабинет 404<br>
                            Телефон рабочий: 50-32-01
                        </div>
                    </div>
                </div>
                <div class="services__items">
                    <div class="services__item">
                        <img src="img/about-7.png" alt="" width="130" height="150" class="services__item-img">
                        <div class="services__item-title">
                            Гришко Николай Сергеевич
                        </div>
                        <div class="services__item-text">
                            Начальник отдела организации<br>
                            медицинской помощи(ООМП)<br>
                            Кабинет 401<br>
                            Телефон рабочий: 50-32-01
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container wow fadeIn">
            <div class="about__title ">
                ГРАФИК <strong>"ПРЯМЫХ"</strong> ТЕЛЕФОННЫХ ЛИНИЙ
            </div>
            <div class="about__title-text">
                на январь 2021 года
            </div>
            <div class="about__line"></div>
            <table class="about__table">
                <tr>
                    <th>ФИО</th>
                    <th>Должность</th>
                    <th>Дата</th>
                </tr>
                <tr>
                    <td> Macтерскaя <br>Наталья Федоровна</td>
                    <td>Начальник отдела <br>организации медицинской помощи</td>
                    <td>02.01.2020</td>
                </tr>
                <tr>
                    <td>Бурлакова</span> <br>Ирина Алексеевна</td>
                    <td>Главный специалист отдела<br>организации медицинской помощи <br>(акушерство и гинекология)</td>
                    <td>09.01.2021</td>
                </tr>
                <tr>
                    <td> <span>Велиrанова</span> <br>Татьяна Николаевна</td>
                    <td>Главный специалист отдела<br>организации медицинской помощи <br>(педиатрия)</td>
                    <td>16.01.2021</td>
                </tr>
                <tr>
                    <td>ЗМУШКО<br>Михаил Николаевич</td>
                    <td>Заместитель начальника<br>главного управления</td>
                    <td>23.01.2021</td>
                </tr>
                <tr>
                    <td> Гридюшко<br>Михаил Антонович</td>
                    <td>Заместитель начальника<br>главного управления</td>
                    <td>30.01.2021</td>
                </tr>
            </table>
        </div>
    </section>
    <section id="form" class="form wow fadeInRight">
        <div class="container">
            <div class="form__inner">
                <div class="form__content">
                    <div class="form__title-box">
                        <div class="form__title">
                            ЗАПИСЬ НА ПРИЕМ
                        </div>
                        <div class="form__text">
                            Подача электронного обращения
                        </div>
                    </div>
                    <div class="form__box">
                        <form action="sandmail.php" method="POST">
                            <div class="form__box-inner">
                                <div class="form__box-left">
                                    <label>
                                        E-mail
                                        <input type="email" name="email" placeholder="Введите E-mail" maxlength="50" required>
                                    </label>
                                    <label>
                                        Контактный телефон
                                        <input type="text" name="user_phone" required placeholder="Введите телефон">
                                    </label>
                                    <label>
                                        ФИО
                                        <input type="text" name="user_name" required placeholder="Введите ФИО">
                                    </label>
                                    <label>
                                        Тема вопроса
                                        <select name="subject">
                                            <option disabled selected>Запись на прием</option>
                                            <option value="1">Обращения
                                                по вопросам
                                                доступности
                                                медицинских услуг</option>
                                            <option value="2">Обращения
                                                и жалобы
                                                по вопросам
                                                качества услуг</option>
                                            <option value="3">Обращения по вопросам расизма в системе здравоохранения</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="form__box-right">
                                    <label>
                                        Сообщение
                                        <textarea name="messagetext" required></textarea>
                                    </label>
                                    <button id="form__bottom-btn" class="default-btn" type="submit">Отправить обращение</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="organisation" class="organisation">
        <div class="container">
            <div class="organisation__title-main">ВЫШЕСТОЯЩИЕ ОРГАНИЗАЦИИ</div>
            <div class="organisation__line"></div>
            <div class="organisation__inner">
                <a href="#" class="organisation__item wow fadeInLeft">
                    <img class="organisation__item-img" src="img/gomel.png" alt="">
                    <div class="organisation__title">
                        Гомельский областной
                        исполнительный комитет
                    </div>
                </a>
                <a href="#" class="organisation__item wow fadeInRight">
                    <img class="organisation__item-img" src="img/item-med.png" alt="">
                    <div class="organisation__title">
                        Министерство здравоохранения Республики Беларусь
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="orghealth" class="orghealth">
        <div class="container wow fadeInDown">
            <div class="orghealth__title-main">ОРГАНИЗАЦИИ ЗДРАВООХРАНЕНИЯ <br>
                <span class="strong__title">ГОМЕЛЬСКОЙ ОБЛАСТИ</span></div>
            <div class="organisation__line"></div>
            <div class="orghealth__inner">
                <div class="spoiler-wrap disabled">
                    <div class="spoiler-head">Областные организациии</div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ <br>
                        КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">г. Гомель, ул. Братьев Лизюковых, 5
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        КЛИНИЧЕСКАЯ ПОЛИКЛИНИКА
                        <div class="text__body">г. Гомель, ул. Артема, 4 <br>
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        ДЕТСКАЯ КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">г. Гомель, ул. Жарковского, 7
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        ИНФЕКЦИОННАЯ КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">
                            г. Гомель, ул. Федюнинского, 18
                            <a href="#" class="org__btn">Посетить сайт</a>
                        </div>
                    </div>
                </div>
                <div class="spoiler-wrap disabled">
                    <div class="spoiler-head">Полклиники г. Гомель</div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ <br>
                        КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">г. Гомель, ул. Братьев Лизюковых, 5
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        КЛИНИЧЕСКАЯ ПОЛИКЛИНИКА
                        <div class="text__body">г. Гомель, ул. Артема, 4 <br>
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        ДЕТСКАЯ КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">г. Гомель, ул. Жарковского, 7
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        ИНФЕКЦИОННАЯ КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">
                            г. Гомель, ул. Федюнинского, 18
                            <a href="#" class="org__btn">Посетить сайт</a>
                        </div>
                    </div>
                </div>
                <div class="spoiler-wrap disabled">
                    <div class="spoiler-head">Организации здравоохранения</div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ <br>
                        КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">г. Гомель, ул. Братьев Лизюковых, 5
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        КЛИНИЧЕСКАЯ ПОЛИКЛИНИКА
                        <div class="text__body">г. Гомель, ул. Артема, 4 <br>
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        ДЕТСКАЯ КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">г. Гомель, ул. Жарковского, 7
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        ИНФЕКЦИОННАЯ КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">
                            г. Гомель, ул. Федюнинского, 18
                            <a href="#" class="org__btn">Посетить сайт</a>
                        </div>
                    </div>
                </div>
                <div class="spoiler-wrap disabled">
                    <div class="spoiler-head">Организации образования</div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ <br>
                        КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">г. Гомель, ул. Братьев Лизюковых, 5
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        КЛИНИЧЕСКАЯ ПОЛИКЛИНИКА
                        <div class="text__body">г. Гомель, ул. Артема, 4 <br>
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        ДЕТСКАЯ КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">г. Гомель, ул. Жарковского, 7
                            <a href="#" class="org__btn">Посетить сайт</a>
                            <a href="#" class="org__btn">Запись на прием</a>
                        </div>
                    </div>
                    <div class="spoiler-body">ГОМЕЛЬСКАЯ ОБЛАСТНАЯ
                        ИНФЕКЦИОННАЯ КЛИНИЧЕСКАЯ БОЛЬНИЦА
                        <div class="text__body">
                            г. Гомель, ул. Федюнинского, 18
                            <a href="#" class="org__btn">Посетить сайт</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news" class="news">
        <div class="container">
            <div class="news__top">
                <div class="news__title-box">
                    <div class="news__title">
                        РУБРИКА ВОПРОС-ОТВЕТ
                    </div>
                    <div class="news__text">
                    </div>
                </div>
                <div class="news__btn">
                    <a href="news.php" class="news__btn-link">Показать все</a>
                </div>
            </div>
            <div class="news__inner">
                <div class="news__slider wow fadeInLeftBig">
                    <div class="news__slider-inner">
                        <div class="news__slider-item">
                            <div class="news__slider-title">
                                Во сколько обходится выезд скорой помощи?
                            </div>
                            <div class="news__slider-text">
                                Стоимость выезда скорой медицинской помощи в среднем составляет около 90 руб. Допустимые пределы могут варьировать от 60 до 120 руб. расчет стоимости зависит от состава выезжающей бригады (фельдшерская, врачебная), объема оказанной медицинской помощи, расстояния до адреса вызова, На сегодняшний день, с учетом складывающейся эпидемической обстановки, в расчет также входит стоимость используемых средств индивидуальной защиты.
                            </div>
                            <div class="news__slider-author">
                                ГУЗО Гомель
                            </div>
                        </div>
                        <div class="news__slider-item">
                            <div class="news__slider-title">
                                Во сколько обходится выезд скорой помощи?
                            </div>
                            <div class="news__slider-text">
                                Стоимость выезда скорой медицинской помощи в среднем составляет около 90 руб. Допустимые пределы могут варьировать от 60 до 120 руб. расчет стоимости зависит от состава выезжающей бригады (фельдшерская, врачебная), объема оказанной медицинской помощи, расстояния до адреса вызова, На сегодняшний день, с учетом складывающейся эпидемической обстановки, в расчет также входит стоимость используемых средств индивидуальной защиты.
                            </div>
                            <div class="news__slider-author">
                                ГУЗО Гомель
                            </div>
                        </div>
                        <div class="news__slider-item">
                            <div class="news__slider-title">
                                Во сколько обходится выезд скорой помощи?
                            </div>
                            <div class="news__slider-text">
                                Стоимость выезда скорой медицинской помощи в среднем составляет около 90 руб. Допустимые пределы могут варьировать от 60 до 120 руб. расчет стоимости зависит от состава выезжающей бригады (фельдшерская, врачебная), объема оказанной медицинской помощи, расстояния до адреса вызова. На сегодняшний день с учетом складывающейся эпидемической обстановки в расчет также входит стоимость используемых средств индивидуальной защиты.
                            </div>
                            <div class="news__slider-author">
                                ГУЗО Гомель
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="news__blog wow flipInY">
                    <div class="news__images">
                        <img src="img/news-1.jpg" alt="" width="260">
                        <div class="news__date">24.01</div>
                    </div>
                    <div class="news__blog-title">
                        Как записаться к врачу?
                    </div>
                    <div class="news__blog-text">
                        Записаться на прием к врачу общей практики, врачу узкой специальности и помощнику врача пациенты могут по телефону...»
                    </div>
                </a>
                <a href="#" class="news__blog wow flipInY">
                    <div class="news__images">
                        <img src="img/news-2.jpg" alt="" width="260">
                        <div class="news__date">24.01</div>
                    </div>
                    <div class="news__blog-title">
                        Как пройти диспансеризацию?</div>
                    <div class="news__blog-text">Порядок проведения диспансерных мероприятий существенно не изменился. Каждый гражданин имеет возможность обратиться в...»
                    </div>
                </a>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__content">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__info">
                        <div class="footer__title">
                            О ГЛАВНОМ УПРАВЛЕНИИ ЗДРАВООХРАНЕНИЯ
                        </div>
                        <div class="footer__text">
                            УНП: 400067453 <br>
                            График работы: 8:30-13:00, 14:00-17:30
                        </div>
                        <a class="header__btn" href="#form">Запись на прием по Email</a>
                        <ul class="footer__list">
                            <li><a class="footer__phone" href="tel:503203">Телефон приемной: 50-32-03</a></li>
                            <li><a href="#">Почтовый адрес: 246050</a></li>
                            <li><a class="footer__adress" href="#">г.Гомель, пер. Спартака, 2а</a></li>
                        </ul>
                    </div>
                    <div class="footer__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2433.161786716614!2d31.008975315803784!3d52.42186617979566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d4684e188ea84f%3A0x4ee8ee8b8ee128a!2z0YPQuy4g0KHQv9Cw0YDRgtCw0LrQsCAyLCDQk9C-0LzQtdC70Yw!5e0!3m2!1sru!2sby!4v1612463050475!5m2!1sru!2sby" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <div class="container">
                <div class="copy__text">
                    © 2021 Template by Rodion Masterskoi. Все права защищены.
                </div>
            </div>
        </div>
    </footer>
    <!--Модальное окно попапа -->
    <div id="modal">
        <h2>Спасибо!</h2>
        <p>Сообщение отправлено!</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--для попап-->
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script> <!-- slider -->
    <script src="js/jquery.formstyler.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <script src="js/main.js"></script>
    <script>
window.replainSettings = { id: '5dd120c2-5034-44cf-a36f-a1d0a4b4b714' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
</body>

</html>