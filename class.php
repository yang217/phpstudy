<?php
class test{
    function po(){
      echo  __CLASS__;
      echo __FUNCTION__;
    }
}
$p=new test();
$p->po();

?>