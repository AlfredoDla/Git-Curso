<?php

    $array1=["Amarrillo","Verde","Rojo"];
    echo "los datos del arry1: <br/>";
    foreach ($array1 as $value) {
        echo "$value <br />";
    }
    
    echo "los datos del arry2: <br/>";
    $array2 = array("Rosaa","Camila","Ingacio");
    foreach ($array2 as $value) {
        echo "$value <br />";
    }

    $array3[0]="Mango";
    $array3[1]="Grape";
    $array3[2]="Banana";
    $array3[3]="Guanavana";
    $array3[4]="Orange";
    echo "los datos del arry3: <br/>";
    foreach ($array3 as $value) {
        echo "$value <br />";
    }

    echo "hola Mundo";

    $array4_asoci = array("primero"=>"texto primero", "segundo"=>2, "tercero"=>3);
    echo "<pre>";
    print_r($array1[2]);
    echo "<br>";
    $array4_asoci["primero"] = "Valor Actualizado";
    print_r($array4_asoci["primero"]);
    echo "<pre>";
    

?>