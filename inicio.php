<html>
    <head>
    <script type="text/javascript" src="vis/dist/vis.js"></script>  
    <link href="vis/dist/vis.css" rel="stylesheet" type ="text/css">
    
    <style type="text/css">
        #grafo1{
            width: 600px;
            height: 400px;
            border: 1px solid lightgray;
        }
    </style>
    </head>
    <body>  
        
        <div id="grafo1">
        </div>
        <script type="text/javascript">
            var nodos = new vis.DataSet([
                <?php
                for ($i=1; $i<= 20; $i++){
                    if ($i == 20) {
                        echo "{id:$i, label:'$i'}";
                    }else{
                        echo "{id:$i, label:'$i'},";
                    }
                };
                ?>
            ]);
            var aristas = new vis.DataSet([
                <?php
                for ($i=1; $i<= 20; $i++){
                    $num1=rand(1,20);
                    $num2=rand(1,20);
                    if ($i == 20) {
                        echo "{from: $num1, to:$num2}";
                    }else{
                        echo "{from: $num1, to:$num2},";
                    }
                };
                ?>
            ]);
            var contenedor = document.getElementById("grafo1");
            var datos = {
                nodes: nodos, 
                edges: aristas
            };
            var opciones = {
                edges:{
                    arrows:{
                        to:{
                            enabled: true
                        }
                    }
                },
                configure:{
                    enabled:true,
                    container:undefined,
                    showButton:true
                }
            };
            var grafo = new vis.Network(
                contenedor, datos, opciones);
        </script>    
    </body>
</html>