<?php
    echo "hello world";
    $a = array('Aryan',123,'a');
    for($i = 0; $i<count($a); $i++){
        echo "\n arraay is ".$a[$i];
    }
    echo " \n Associative arrays \n";
    $as = array('A'=>1, 'B'=>2,'C'=>3);
    foreach($as as $key => $value){
        echo "<br> key: ".$key." value: ".$value;
    }

    echo "<br> Multidimensional arrays";
    $ma = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    )
    
?>