<?php
/*
快速排序
原理：将一组数据分成两部分，其中一部分均小于另一部分，之后对这两组数据进行排序，整个排序可以递归进行。
思路：先选取数组的第一个值作为标的，之后分两组，递归排序
*/

function fibonacci($num){
    if($num < 0 ){
        return false;
    }elseif($num <= 1 ){
        return $num;
    }else{
        return fibonacci($num - 1) + fibonacci( $num - 2);
    }
}
print_r(fibonacci(10));