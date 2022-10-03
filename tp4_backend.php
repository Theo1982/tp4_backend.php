<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de Control</title>
</head>
<body>
    <?php
        print "<h2>Ejercicio 1:</h2>\n";
        print "<h2>Almacenar en un array los 10 primeros numeros pares y mostrar en pantalla uno debajo del otro.</h2>\n";
        
        $numpar = [];

        for ($i=2; $i%2==0 && $i<=20 ; $i+=2) { 
                $numpar[] = $i;

            }
        foreach ($numpar as $i) {
            print "<p>$i</p>\n";
            
        }
    ?>

    <?php
        print "<h2>Ejercicio 2:</h2>\n";
        print "<h2>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
        matriz. Mostrar el esquema del array con print_r().</h2>\n";
        
        $nomnum = ["Pedro","Ana",34,1];
        print "<pre>\n";
        print_r($nomnum);
        
    ?>

    <?php
        print "<h2>Ejercicio 3:</h2>\n";
        print "<h2>Crear un array asociativo e introducir los siguientes valores:</h2>\n";

      
        $datos= [
            'nombre'=>"Pedro",
            'apellido'=>"Torres",
            'direccion'=>"Av. Mayor 3703",
            'telefono'=> 1122334455,
            ];

    ?>
    
    <?php
        print "<h2>Ejercicio 4:</h2>\n";
        print "<h2>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
        Chicago, sin asignar indices al array. A continuacion, muestra el contenido del array.
        Ejemplo: La ciudad con el indice 0 tiene el nombre Madrid.</h2>\n";

        $ciudades = [ "Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago" ];
        $totciudades = count($ciudades);

        for ($i = 0; $i < $totciudades; $i++) {
            print "<pre>\n";
            print "<p>La ciudad con el indice $i tiene el nombre de $ciudades[$i] </p>\n";
          
      }
    ?>
    
    <?php
        print "<h2>Ejercicio 5:</h2>\n";
        print "<h2>Repite el ejercicio anterior pero ahora se ha de crear indices, MD para Madrid, BCL para Barcelona,
        LD para Londres, NY para New York, LA para Los Angeles y CCG para Chicago.
        Ejemplo: El indice de Madrid es MD.</h2>\n";
        
        $ciudades = [
            'MD'=>"Madrid",
            'BCL'=>"Barcelona",
            'LD'=>"Londres",
            'NY'=>"New York",
            'LA'=>"Los Angeles",
            'CCG'=>"Chicago",
            ];
 foreach ($ciudades as $i => $valor) {
    print "<pre>\n";
    print "<p>El indice de $ciudades[$i] es $i </p>\n";
    
 }
    ?>   

</body>
</html>
