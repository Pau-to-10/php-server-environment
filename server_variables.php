<?php
echo '<pre>';
foreach($_SERVER as $k=> $v){
    echo $k . ' - ' . $v . '<br>';
}
echo '</pre>';

echo '<hr>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

?>