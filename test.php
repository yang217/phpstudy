<?php
 echo $_GET["name"] . 'and' .$_GET['age'];
 
 $arr = array(5,3,6,2,8,10);
 for($i = count($arr)-1;$i>=0;$i--){
     for($j = 0 ; $j < $i ; $j++){
         if($arr[$j+1] > $arr[$j] ){
             $aa = $arr[$j+1];
             $arr[$j+1] = $arr[$j];
             // $arr[$j+1] $arr[$j] 进行了交换
             $arr[$j] = $aa;
         }
     }
 }
 print_r($arr);
 
?>