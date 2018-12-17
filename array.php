<?php
/**
 * Created by PhpStorm.
 * User: poli
 * Date: 2018/12/18
 * Time: 1:56
 */

$a = [1, [2, [3, [4, [5]]]]];
$b = [1, 2, 3, 4, 5];
function f($a)
{
    $array = array();
    if (isset($a[1])) {
        $array[] = $a[0];
        return array_merge($array, f($a[1]));
    } else {
        return $a;
    }
}
$c = f($a);

if ($b === $c) {
    echo "OK";
} else {
    echo "NG";
}