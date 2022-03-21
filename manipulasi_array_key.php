<?php

/* inisiasi array */
$list_array     = array();
$list_array2    = array();
$array_buah     = array('pisang', 'jeruk', 'apel');
$array_warna    = array('kuning','orange','merah'); 

/*mengisi $list_array dari satu variable array buah*/
foreach ($array_buah as $key => $value) {
    $list_array[$value] = $value;
}
echo "<pre>";print_r($list_array);die;
/*END mengisi $list_array dari satu variable array buah*/


?>