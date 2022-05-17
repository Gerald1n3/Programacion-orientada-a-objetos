<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Salario</title>
  


</head>

<nav></nav>

<body class="col-auto  p-5 text-center" >
<div class="card" style="width: 25rem;">
    <div class="card-body">

<h1>Salario</h1>
    
       
<form action ="sumar.php" method="post">
        <div class="mb-3">
            <label for="nombre" class="from-label">Identificacion</label>
            <input type="number" class="from-control" id="identificacion" name="identificacion" aria-placeholder="Digite el nombre del estudiante" required>
        </div>
        <div class="mb-3">
        <label for="numero1" class="from-label">Nombre</label> 
            <input type="text" class="from-control"  id="nombre" name="nombre" required>
        
        </div>
        <div class="mb-3">
        <label for="numero1" class="from-label">Mes</label> 
            <input type="text" class="from-control"  id="mes" name="mes" required>
        
        </div>
        <div class="mb-3">
        <label for="numero1" class="from-label">Valor hora</label> 
            <input type="text" class="from-control"  id="valorhora" name="valorhora" required>
        
        </div>
        <div class="mb-3">
        <label for="numero1" class="from-label">Cantidad de horas laboradas</label> 
            <input type="number" class="from-control"  id="cantidadhora" name="cantidadhora" required>
        
        </div>
        <div class="mb-3">
        <label for="numero1" class="from-label">Porcentaje de descuento de salud</label> 
            <input type="text" class="from-control"  id="nombre" name="pdescuentosalud" required>
        
        </div>
        <div class="mb-3">
        <label for="numero1" class="from-label">Porcentaje de descuento de pension</label> 
            <input type="text" class="from-control"  id="nombre" name="pdescuentopension" required>
        
        </div>
        <input type="submit" class="btn btn-outline-info" class="button" class="btn btn-outline-info" value="Calcular">
       
        
        </form> 
    
    


    </div>
        </div>
    
      
   
    
    

  
    

    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>