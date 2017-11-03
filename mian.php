<?php
class people{
 var $name;
 var $age;
  function setname($usename){

    $this->name=$usename;
  }
 function getname(){
     echo $this->name;
 }
  
}
$per1=new people();
$per1->setname('luhuihui');
$per1->getname();
class MyClass
{
    const constant = 'clz';

    function showConstant() {
        echo  self::constant . PHP_EOL;
    }
}

echo MyClass::constant . PHP_EOL;
?>