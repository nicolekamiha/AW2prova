<?php
        $numb = $_GET['txtN'];
        $numero = $_GET['txtb'];

        if($numb%2==0){
            echo "<hr>";
echo "Numero1=Par";
echo "<hr>";
        }

        else{
            echo "<hr>";
            echo "Numero1=Impar";
            echo "<hr>";
        }

        if($numero%2==0){

echo "<hr>";
            echo "Numero2=Par";
            echo "<hr>";
                    }
            
                    else{

                    echo "<hr>";
                        echo "Numero2=Impar";
                        echo "<hr>";
                    }


        if($numb<0){
            echo "<hr>";
echo "Numero1=Negativo";
echo "<hr>";
        }

        else{
            echo "<hr>";
            echo "Numero1=Positvo";
            echo "<hr>";
        }

        if($numero<0){

echo "<hr>";
            echo "Numero2=Negativo";
            echo "<hr>";
                    }
            
                    else{

                    echo "<hr>";
                        echo "Numero2=Positvo";
                        echo "<hr>";
                    }
            

        ?>