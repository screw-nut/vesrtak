<?php
 require "/home/s/sekira/store-sites.ru/public_html/count.php";
?>
<!doctype html>
<html lang="ru">
  <head itemscope itemtype="http://schema.org/WPHeader">
    <!-- Required meta tags -->
    <meta charset="utf-8">
       <meta name="viewport" content="width=360, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
<?php
 require "/home/s/sekira/store-sites.ru/public_html/inhead.php";
?>
<link href="/fonts/stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="/css/lightbox.css">
<link rel="stylesheet" href="/css/hystmodal.min.css">
<link rel="stylesheet" href="/css/grid.css">
<link rel="stylesheet" href="/css/nav.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/media.css">
    <title itemprop="headline">Спасибо, за то что вы обратились к нам</title>
	 <meta  name="description" content="">
	 <meta  itemprop="description"  content="">
	
	<style>

	</style>

  </head>
  <body>
<?php
 require "/home/s/sekira/store-sites.ru/public_html/modal.php";
?>
<?php
 require "/home/s/sekira/store-sites.ru/public_html/header.php";
?>
<div class="container-fluid">
<div class="container">
<div class="row">
<div class="col">
<div class="text-center">
<h1   class="katalog-h1">
<?php
if (isset($identifik))
{
  $error['identifik'] = 'Вы опознаетесь как бот';
}
$name = urldecode($_POST['name']); 
		$kontakt = urldecode($_POST['phone']); 
		 $zakaz = urldecode($_POST['zakaz']);
		 $date = urldecode($_POST['date']);
		 $time = urldecode($_POST['time']);
		 $landing = ($_POST['landing']);
        $to = 'vishivk@gmail.com';
        $title ='С сайта магазин сайтов';
        $from=$email;  
        $message = "<b>Имя:</b> $name <br> 
                    <b>Контакт:</b> $kontakt <br>
					<b>Заказ:</b> $zakaz <br>
					<b>Интересует:</b> $landing <br>
					<b>Дата:</b> $date <br>
					<b>Время:</b> $time <br>
					<b>Все</b>";
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: " . $from . "\r\n";
if ( empty($error) )
{		
$send = mail ($to,$title,$message, $headers);
}
if (empty($error) && $send == 'true')
{
echo "Спасибо за отправку вашего сообщения.";

}
else
{
echo "Ошибка. Сообщение не отправлено!";
}
    ?></h1>


</div>
</div>
</div></div></div>


  

  





<div class="container about-text">

<div class="row">

<div class="col ">

</div>


</div>


</div>
<?php
 require "/home/s/sekira/store-sites.ru/public_html/footer.php";
?>