<?php

$arr = array('A'=> 'Apple', 'B'=> 'Orange', 'C'=> 'Melon');
echo $arr['B'];
$new_arr = array_pop($arr);
echo '<br>';
print_r($new_arr);
echo '<br>';
echo current($arr);
echo '<br>';
echo next($arr);
reset($arr);
echo '<br>';
echo current($arr);
echo '<br>';
echo end($arr);