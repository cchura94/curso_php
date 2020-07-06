<?php
        if($_POST){
            $b = $_POST["boton"];
            $n1 = $_POST["numero1"];
            $n2 = $_POST["numero2"];

            if($b == "+"){                
                echo $n1 + $n2;
            }elseif($b == "-"){
                echo $n1 - $n2;
            }elseif($b == "*"){
                echo $n1 * $n2;
            }else{
                echo $n1 / $n2;
            }
            
        }else{
            echo "INGRESE LOS DATOS";
        }

?>