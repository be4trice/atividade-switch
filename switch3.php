<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method="post">
<label for = "comida"> comida </label>
<input type="text" name="comida" id="comida">
<br>

<br>

<button type="submit">enviar</button>

</form>




	<?php 
  if ($_POST) {
    $comida = $_POST['comida'];

    switch ($comida) {
      case 'morango':
        echo "saborosa, aprovado";
        break;

      case 'melancia':
          echo "gostosa,aprovado ";
         break;
      case 'abacaxi':
        echo "um pouco azeda, não aceitavel";
        break;
      default:
        echo "VEJA OUTRAS OPÇÕES";
        break;
    }
  }


  ?>

</body>
</html>