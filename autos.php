
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla.css">
    <title>Autos</title>
</head>
<body>
    <div id="main-container">
    <?php
    $conn = new PDO("mysql:host=localhost;dbname=allcar","root","");
    ?>
    <table class="table table-striped">
        <h1 class="h1" style=" font-family: cursive">Autos</h1>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Placas</th>
                <th>Modelo</th>
                <th>MMA</th>
                <th>Neumaticos</th>
                <th>Motor</th>
                <th>Tipo Motor</th>
                <th>Foto</th>
            </tr>
        </thead>
        <?php foreach($conn->query("SELECT marca, placas, modelo, mma, neumaticos, motor, tipomotor,foto from auto" )as $row){?>
            <tr>
                <td><?php echo $row["marca"]?></td>
                <td><?php echo $row["placas"]?></td>
                <td><?php echo $row["modelo"]?></td>
                <td><?php echo $row["mma"]?></td>
                <td><?php echo $row["neumaticos"]?></td>
                <td><?php echo $row["motor"]?></td>
                <td><?php echo $row["tipomotor"]?></td>
                <td><img width="100" src="data:;base64,<?php echo base64_encode($row["foto"]);?>"></td>
            </tr>        
        <?php    } ?>
    </table> 
</body>
<section class="agregarauto">   
    <a href="index.html" class="botons">Regresar</a>
    </section> 
</html>