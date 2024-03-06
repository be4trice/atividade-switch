<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method="post">
<label for = "mangá"> mangá </label>
<input type="text" name="mangá" id="mangá">
<br>

<br>

<button type="submit">enviar</button>

</form>




	<?php 
  if ($_POST) {
    $mangá = $_POST['mangá'];

    switch ($mangá) {
      case 'marriage to the wolf':
        echo "MUITO BOM!";
        break;

      case 'operation name pure love':
          echo "MUITO FOFO!";
         break;
      case 'oshi no ko':
        echo "MAIS OMENOS";
        break;
      default:
        echo "VEJA OUTRAS OPÇÕES";
        break;
    }
  }


  ?>

</body>
</html>