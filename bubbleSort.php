<?php
/*
冒泡排序
原理：一组数据，比较相邻数据的大小，将值小数据在前面，值大的数据放在后面
思路：不断遍历数组，每次取出最小的，直到取完整个数组
*/

function bubbleSort($arr){
    $sortArr = [];
    while ($arr){
        $key = 0;
        $tag = $arr[$key];
        foreach ($arr as $k=>$item){
            if($tag > $item){
                $tag = $item;
                $key = $k;
            }
        }
        $sortArr[] = $tag;
        array_splice($arr,$key,1);
    }
    return $sortArr;
}
$a = [4,2,7,3,6,8,11];
print_r(bubbleSort($a));