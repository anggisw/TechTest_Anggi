<?php 

    $aplikasi[1] = 'gtAkademik';
    $aplikasi[2] = 'gtFinansi';
    $aplikasi[3] = 'gtPerizinan';
    $aplikasi[4] = 'eCampuz';
    $aplikasi[5] = 'eOviz';

    $jumlah = count($aplikasi);
    $i = 1;
    while ($i <= $jumlah) {
        echo $i.'. '.$aplikasi[$i].'<br>';
        $i++;
    }

 ?>