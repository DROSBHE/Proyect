<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Consumo de gasolina</title>
  <link rel="stylesheet" href="css/agregarauto.css">
  
</head>
<body>
  <center>
  <section class="agregarauto">
  <h4>Consumo de gasolina</h4>
  <form method="POST">
    <label>Litros de gasolina:</label>
    <input type="number"  class="controls" name="litros">
    <br>
    <label>Kilometros Recorridos:</label>
    <input type="number" class="controls" name="kilometros">
    <br>
    <input type="submit"  class="botons" name="calcular" value="Calcular">
    <a href="index.html" class="botons">Regresar</a>
  </form>
  
  <?php
  $consumoltr;
  $consumo;
  $consumolr;
      //Funcion para calcular los litros consumidos
      function calcularconsumo($litros, $kilometros){
        $consumo= ($kilometros / $litros);
        return $consumo; 
      }
      if(isset($_POST['calcular'])){
        $litros = $_POST['litros'];
        $kilometros = $_POST['kilometros'];
        $consumogas = calcularconsumo($litros, $kilometros);
        echo "El consumo es de: " . $consumogas." kilometros por litro \n";
      }
?>
</section>
</center>
</body>
</html>