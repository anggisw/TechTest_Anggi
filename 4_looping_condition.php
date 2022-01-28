<?php

$x=50;
for ($i=1; $i <= $x  ; $i++) { 
    if($i % 5 == 0 && $i % 3 == 0)
    {
        $cetak='FooBar';
    } else 
    if($i % 5 == 0)
    {
        $cetak ='Bar';
    }else 
    if($i % 3 == 0)
    {
        $cetak ='Foo';
    }else{
        $cetak = $i;
    }
    echo $cetak.'<br>';
}


?>