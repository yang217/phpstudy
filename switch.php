<?php
header("Content-Type: text/html;charset=utf-8"); 
 $color='red';
 switch($color){
  case 'red':
  echo '我爱你';
  break;
  case 'green';
  echo 'hahh';
  break;


 }

 $person=array('杨豪','26','计算机');
 sort($person);
print_r($person
);
 echo  '<br>';
 echo count($person);
 $fruit=array('apple'=>'green','banlna'=>'yello');
 echo '<br>';
 echo $fruit['apple'];
 foreach($fruit as $inex=>$vale){
     echo $inex . $vale.'<br>';
 }

?>