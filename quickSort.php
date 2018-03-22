<?php
/*
快速排序
原理：将一组数据分成两部分，其中一部分均小于另一部分，之后对这两组数据进行排序，整个排序可以递归进行。
思路：先选取数组的第一个值作为标的，之后分两组，递归排序
*/

function quickSort($arr){
    if(!isset($arr[1])){
        return $arr;
    }
    $baseNum = $arr[0];
    $leftArr = [];
    $rightArr = [];
    $middleArr = [];

    foreach ($arr as $item){
        if($item < $baseNum){
            $leftArr[] = $item;
        }elseif($item == $baseNum){
            $middleArr[] = $item;
        }else{
            $rightArr[] = $item;
        }
    }
    $leftArr = quickSort($leftArr);
    $rightArr = quickSort($rightArr);
    return array_merge($leftArr,$middleArr,$rightArr);
}
$a = [4,2,7,7,3,6,8,8,8,11,0,-100];
print_r(quickSort($a));