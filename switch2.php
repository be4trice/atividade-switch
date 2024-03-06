<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form method="post">
<label for = "anime"> anime </label>
<input type="text" name="anime" id="anime">
<br>

<br>

<button type="submit">enviar</button>

</form>




	<?php 
  if ($_POST) {
    $anime = $_POST['anime'];

    switch ($anime) {
      case 'kusuriya no hitorigoto':
        echo "ANIME EM ANDAMENTO E MARAVILHOSO";
        break;

      case 'doctor elise':
          echo "ANIME BOM ";
         break;
      case 'boruto':
        echo "ANIME RUIM";
        break;
      default:
        echo "VEJA OUTRAS OPÇÕES";
        break;
    }
  }


  ?>

</body>
</html>