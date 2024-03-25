<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <form method="post" action="exemplo40.php">
      <label>Informe o início:</label>
      <input type="number" name="inicio"><br>
      <label>Informe o final:</label>
      <input type="number" name="fim"><br><br>
      <input type="submit" value="Mostrar">
    
    </form>
    <?php
      // se meus inputs não estiverem vazios, o for é executado
      if(!empty($_POST["inicio"])&& !empty($_POST["fim"])){
        echo "EXEMPLO DE INPUT E LAÇO NO PHP <br><br>";
        $iInicio = $_POST["inicio"];
        $ifim=$_POST["fim"];
        for($i = $iInicio; $i <= $ifim; $i++){
            echo "Valor de I = $i<br>";
        }  
      }
     
    ?>
    </div>
</body>
</html>