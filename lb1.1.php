<html>
	<head>
		<meta charset="utf8">
		<link href="styles/style1.css" rel="stylesheet">
		<title>1.1</title>
	</head>
	<body>
		<div class='navigation'>
			<a href='lb1.2.php'>Следующая ></a>
		</div>
		<form method = 'post'>
			<p>A: <input type="text" name="A"></input></p>
			<p>B: <input type="text" name="B"></input></p>
			<input type="submit" />
		<?php 
			$A = $_POST['A'];
			$B = $_POST['B'];
			if ($A != 0) {
				$x = -($B/$A);
				echo "<p>x = $x</p>";
			} elseif ($A == '' || $B == "") {
				echo "";
			} else {
				echo "<p>Ошибка! A = 0.</p>";
			}
		?>
		</form>
		<div class='navigation'>
			<a href='index.html'>На главную</a>
		</div>
	</body>
</html>

