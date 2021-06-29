<?php
        $N= $_POST['txt'];
        $k = $_POST['txtK'];
        $X= 1;
        $Z=2;
        $vetor= array();
       

for($X=0;$X<$k;$X++){

    $vetor[]=$Z*$N;
$Z=$Z+1;


}
print_r($vetor);
?>