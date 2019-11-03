<!DOCTYPE html>
<?php

$arProfile = Array(

	"FOTO" => "1.jpg",

	"NAME" => "Лапенков Максим",
	
	"CITY" => "Самара",
	
	"JOB"  => "Студент",

	"CONTROL" =>Array(

		0 =>Array(

			"ACTIVE" => "Y",

			"NAME" => "МоиДрузья",

			"COUNT" => 42

		),
		1 =>Array(

			"ACTIVE" => "Y",

			"NAME" => "Сообщения",

			"COUNT" => 8

		),
		2 =>Array(

			"ACTIVE" => "Y",

			"NAME" => "МоиГруппы",

			"COUNT" => Null

		),
		3 =>Array(

			"ACTIVE" => "Y",

			"NAME" => "МоиНовости",

			"COUNT" => Null

		),


	),

	"INFO" =>Array(

		0 =>Array(

			"NAME" => "Родной город",

			"VALUE" => "Самара"

		),
		1 =>Array(

			"NAME" => "Образование",

			"VALUE" => "Среднее"

		),
		2 =>Array(

			"NAME" => "Языки",

			"VALUE" => "Русский, Английский",

		),
		3 =>Array(

			"NAME" => "Вуз",

			"VALUE" => "Пгути"

		),
		4 =>Array(

			"NAME" => "Факультет",

			"VALUE" => "ФИСТ"

		),
		5 =>Array(

			"NAME" => "Кафедра",

			"VALUE" => "ИСТ"

		),
		6 =>Array(

			"NAME" => "Форма обучения",

			"VALUE" => "Очная"

		),

		

	)

);

$count = count($arProfile["INFO"]);


?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Профиль</title>

	<link rel="stylesheet" href="bootstrap.css">

	<link rel="stylesheet" href="style.css">

	<script src="jquery-3.4.1.js"></script>

	<script src="bootstrap.js"></script>

</head>

<body>

	<div class="container">

	<div class="row">

	<!-- левая колонка -->

	<div class="col-md-2 col-md-offset-2">

		<a href="#" class="thumbnail">

		<img <img src=" <?=$arProfile["FOTO"]?>" width="155" height='auto' />

		</a>

	<ul class="nav nav­pills nav­stacked">

		<?foreach($arProfile["CONTROL"] as $key => $value):?>

			<li<?=($value["ACTIVE"] == "Y") ?'class="active"' : ''?>><a href=""><?=$value["NAME"]?></a></li>
			<li<?=(IntVal($value)["COUNT"] >= 0) ?'class="active"' : ''?>><a href=""><?=$value["COUNT"]?></a></li>

		<?endforeach;?>

	</ul>

	</div>

	<!-- правая колонка -->

	<div class="col-md-6">

		<h1 class="page-header"><?=$arProfile["NAME"]?><small><?=$arProfile["CITY"]?></small></h1>

		<blockquote><?=$arProfile["JOB"]?></blockquote>
		

		<table class="table table­striped">

<?


for($i = 0;  $i< $count; $i++){
	if ($t=$i%2){
		echo '<tr bgcolor="grey"><td><strong>' . $arProfile["INFO"][$i]["NAME"] . ':</strong></td><td>' . 
$arProfile["INFO"][$i]["VALUE"] . '</td></tr>' ;
		
	}
	else {
		echo '<tr bgcolor="white"><td><strong>' . $arProfile["INFO"][$i]["NAME"] . ':</strong></td><td>' . 
$arProfile["INFO"][$i]["VALUE"] . '</td></tr>' ;
	}

	

}



?>


</table>

</div>

</div>

</div>

</body>

</html>