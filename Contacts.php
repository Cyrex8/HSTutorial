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
<form name="search" action="#" method="get">
	<input type="text" name="q" placeholder="Поиск"><button type="submit">Поиск</button>
</form>
<div id="button">
    <div id="s_panel">
        : )
    </div>
</div>
            <script>$('#button').hover(function(){
    $("#s_panel, #button").animate({left: "+=100px"}, 1000 );
},function(){
    $("#s_panel, #button").animate({left: "-=100px"}, 1000 );
});</script>
</header>
<div id="base">
		<nav><ul class="top-menu">

<li><a href="index.php">Главная</a></li>
<li><a href="learn.php">Обучение новичков</a></li>
<li><a href="Cards.php">Колоды</a></li>

            <li class="active">Контакты</li>
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
<?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "<br><a  href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
    }
    ?>
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
</body>

</html>