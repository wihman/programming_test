<?php
    $no         = 0;
    $a          = array(4,5,10,11,6);
    $m          = -1;
    $eq         = 1;
    $arr_count  = count($a) - 1;

    foreach ($a as $aa) {

        if ($no >= $arr_count) {
            $eq = $no;
            $no = $no - $arr_count;

            for ($i=0; $i <= $arr_count; $i++) { 
                if (($a[$i] - $a[$eq]) == $m) {
                    echo $no."-".$eq.".";
                }else{
                    $no++;
                }
            }

            exit();
        }

        echo $no."-".$eq.",";

        if (($a[$no] - $a[$eq]) == $m) {
            $no += 2;
            $eq += 2;
        } else {
            $no += 1;
            $eq += 1;
        }
    }


?>

