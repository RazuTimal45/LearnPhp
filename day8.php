<?php
//sort,rsort,asort,ksort,arsort,krsort

    $names = ['Rabina','Raju','Bhawana'];

    arsort($names);

    for($i=0;$i<count($names);$i++){
        echo $names[$i]."<br>";
    }
    

?>