<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

            /* VÝPISY */
            $meno = "Peter";
            echo $meno;
            echo '<br>';
            //echo($meno);
            var_dump($meno);
            echo '<br>';

            /* POLIA*/
                            //0            1       2
            $farby = array("červená", "modrá", "zelena"); //INDEXOVANÉ POLIA 
            echo $farby[0]; // Vypíše: červená
            echo("<br>");

            /* CYKLUS NAD INDEXOVYNYM POLOM*/

            foreach($farby as $farba){
                echo "Farba: $farba <br>";
                //echo "Farba: ".$farba."<br>";
            }

            /*ASOCIATIVNE POLIA*/
            //python dictionary   kluc  :  hodnota
            $data = array("Peter" => 25, 
                        "Jana" => 30, 
                        "Marek" => 20
            );
            
            foreach($data as $name => $age){
                echo "$name má $age rokov <br>";
            }
        ?>
</body>
</html>