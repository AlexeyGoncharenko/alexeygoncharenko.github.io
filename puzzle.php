<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Classwork 4</title>
		<link rel="stylesheet" type="text/css" href="styles_src/otherPagesStyle.css">
		<link rel="shortcut icon" href="https://geekbrains.ru/favicon-16x16.png">
	</head>
	<body>
		<div class="h1_main">
			<p><strong>Classwork 4</strong></p>
			<p>*Работа с серверным языком веб-программирования <em>PHP</em></p>
			<div class="h1_submain">
				<span>Student: Goncharenko Aleksey</span>
			</div>
		</div>
		<div class="style_nameExercise">
			<?php 
				$rightAnswer1 =  'ёлка';
				$rightAnswer2 = 'лампочка';
				$countRightUserAnswers = 0;
				if($rightAnswer1 == $_POST['userAnswer1']){
					echo "Первая загадка разгадана";
					$countRightUserAnswers += 1;
				}else{
					echo "Первая загадка не разгадана";
				}
				echo "<br>";
				if($rightAnswer2 == $_POST['userAnswer2']){
					echo "Вторая загадка разгадана";
					$countRightUserAnswers += 1;
				}else{
					echo "Вторая загадка не разгадана";
				}
				echo "<br>";
				echo "Количество разгаданных загадок: $countRightUserAnswers";
			?>
		</div>
		<div class="footer">
			<span><br>&copy Goncharenko Aleksey</span>
			<span><br>&copy GeekBrains</span>
		</div>
	</body>
</html>