<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method="post">
<label for = "jogo"> jogo </label>
<input type="text" name="jogo" id="jogo">
<br>

<br>

<button type="submit">enviar</button>

</form>
         
  <?php 
  if ($_POST) {
    $jogo = $_POST['jogo'];

    switch ($jogo) {
      case '0':
        echo "VOCÊ PERDEU";
        break;

      case '1':
          echo "AVANCE UMA CASA ";
         break;
      case '2':
        echo "VOCE GANHOU UM BONUS";
        break;
      default:
        echo "JOGUE NOVAMENTE";
        break;
    }
  }


  ?>








</body>
</html>