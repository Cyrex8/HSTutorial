<?php
header('Content-Type: text/html; charset=utf-8');
    session_start();
    ?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Главная</title>
	<link rel="stylesheet" href="style/styles.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
<script type="text/javascript" src="jquery-3.1.1.js"></script>
    <script type="text/javascript" src="script.js"></script>    
</head>
<body>
	<div id="wrapper">
		<header><a href="index.php"><img src="images/logo.png" width="120" height="120" alt="logo"></a>
<form  name="search" action="#" method="get">
	<input type="text" name="q" placeholder="Поиск"><button type="submit">Поиск</button>
</form>
            <form class="form-1" method="post">
    <p class="field">
        <input name="login" type="text" size="15" maxlength="15" placeholder="Логин">
        <i class="icon-user icon-large"></i>
    </p>
        <p class="field">
            <input name="password" type="password" size="15" maxlength="15" placeholder="Пароль">
            <i class="icon-lock icon-large"></i>
    </p>
    <p class="submit">
        <button type="submit" formaction="testreg.php" name="submit" value='Выход'><i class="icon-arrow-right icon-large"></i></button>
    </p>
             <?php
    // Проверяем, пусты ли переменные логина и password пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость";
    }
    else
    {
    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br>";
    }
    ?>     
                <div class="exit1">
			<input type="submit" formaction="out.php" value='Выход'>
		</div>
</form>
            
<div id="button">
    <div id="s_panel">
        Задать вопрос
    </div>
</div>
            <script>
                $(document).ready(function(){
                     $('#button').hover(function(){
                            $("#s_panel, #button").animate({left: "+=100px"}, 1000 );
                        },function(){
                            $("#s_panel, #button").animate({left: "-=100px"}, 1000 );
                        });
                    
                });
               </script>
            
</header>
<div id="base">
		<nav><ul class="top-menu">
<li class="active">Главная</li>

<li><a href="learn.php">Обучение новичков</a></li>
<li><a href="Cards.php">Колоды</a></li>
<li><a href="Contacts.php">Контакты</a></li>
<li><a href="Registr.php">Регистрация</a></li>
	
		
		
	</ul>
</nav>
		

		<section>
<blockquote>
	<p>
		Наступает год мамонта!
	</p>
	<cite>Сменяется год, приходит новое дополнение.</cite>
	</blockquote>

<p>Здравствуйте, уважаемые читатели.</p>
<p>В 2017 году Hearthstone ждет много классных нововведений, таких как новые материалы, режимы совместной игры с друзьями, усовершенствования и не только!</p>
<figure>
	<img src="images/mamont.jpg" width="900" height="480" alt="">
</figure>
<h2 style="text-align: center;"> <strong> Планы на год Мамонта в Hearthstone</strong></h2>
<P>В 2017 году завершится год Кракена и начнется новый год по летосчислению Hearthstone — <strong>год Мамонта. </strong>
С началом каждого нового года в Hearthstone происходит <strong>обновление стандартного формата. </strong> Официально 
<strong>год Мамонта</strong>  начнется с выхода первого крупного дополнения 2017 года, в то время как карты 
<strong>дополнения «Большой турнир» и приключений «Черная гора» и «Лига исследователей»</strong> перейдут в <strong>вольный формат</strong>.
<div id="pic">
	<img src="images/1.png" align="center" alt="">
</div>
<h2 style="text-align: center;"><strong>Ротация наборов карт — скоро!</strong></h2>
<div id="video">
<video controls="controls">
 <source src="video/v1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
</video>
</div>
</section>
	</div>
	<footer>
<div id="footer">
		<div id="sitemap"></div>
		<div id="social"></div>
		<div id="footer-logo"></div>
<div id="info">
	<h3>Info</h3>
	<time datetime="2012-10-23"><a href="#">24 фев.</a></time>
<p>
	Сайт создан студентом Новочеркасского Политехнического Института-Ниценко Алексадром
</p>
</div>

<div id="social">
	<h3>Социальные сети</h3>
<a href="http://twitter.com/" class="social-icon twitter"></a>
	
	<a href="http://facebook.com/" class="social-icon facebook"></a>
	
	<a href="http://google-plus.com/" class="social-icon google"></a>
	
	
</div>
<div id="footer-logo">
	<a href="index.php"><img src="images/logo.png" width="50" height="50" alt="logo"></a>
	<p>Copyright © 2017 </p>
</div>
	
</div>
</footer>
</div>
</div>
</body>
 </html>  