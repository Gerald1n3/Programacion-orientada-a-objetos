<?php
require_once 'Salario.php';
$salario=new Salario();
$resultado1=intval($_POST['cantidadhora']);
$resultado2=intval($_POST['valorhora']);
$resultado3=intval($_POST['pdescuentosalud']);
$resultado4=intval($_POST['pdescuentopension']);
$salario->setidentificacion($_POST['identificacion']);
$salario->setnombre($_POST['nombre']);
$salario->setmes($_POST['mes']);
$salario->setValor($_POST['valorhora']);
$salario->setCantidad($_POST['cantidadhora']);
$salario->setDescuentoPension($_POST['pdescuentopension']);
$salario->setDescuentoSalud($_POST['pdescuentosalud']);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Salario</title>
</head>
<body>
        <h3>DATOS DEL USUARIO:</h3>
        <label class="card-text">Identificacion: <?php echo $salario->getidentificacion();?></label><br>
        <label class ="card-text">Nombre: <?php echo $salario->getnombre();?> </label><br>
        <label class ="card-text">Mes: <?php echo $salario->getmes();?> </label><br>
        <label class ="card-text">Valor hora: <?php echo $salario->getValor();?> </label><br>
        <label class ="card-text">Cantidad: <?php echo $salario->getCantidad();?> </label><br>
        <label class ="card-text">Porcentaje descuento salud: <?php echo $salario->getDescuentoSalud();?> </label><br>
        <label class ="card-text">Porcentaje descuento pension: <?php echo $salario->getDescuentoPension();?> </label><br><br>
        <h3>CÁLCULOS</h3>
        
   


    
</body>
</html>
<?php
$salario->totalsinD($resultado1,$resultado2);
$salario->totalconD($resultado1,$resultado2,$resultado3,$resultado4);
$salario->salud($resultado1,$resultado2,$resultado3);
$salario->pension($resultado1,$resultado2,$resultado4);
?>
<br><label href ="index.php"><input type="button" class="btn btn-outline-info" class="button" value="Volver"></label><br>
