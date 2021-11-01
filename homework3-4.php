<?php


 $i=1;//第一项
 $j=1;//第二项
 $sum=1;
 echo 1;
 echo PHP_EOL;//输出换行符

 for($p=0;$p<100;$p++)//循环执行一百次
 {
     echo $sum; 
     echo PHP_EOL;

     $i = $j ;  
     $j = $sum; 
     $sum = $i + $j;

 }