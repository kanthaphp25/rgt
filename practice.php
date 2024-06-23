<?php
abstract class Apple {
  // Properties
   public $name;
  public $color;
  public function  __construct($name){
	  $this->$name = $name;
  }
  
  abstract function test();

  
}
class Fruit extends Apple{
 
  // Methodss
  public function test(){
  echo $this->name." - test writing - ";
  }
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}


$banana = new Fruit('benz');

echo $banana->set_name('red');
echo $banana->test('new task');
echo "<br>";
echo $banana->get_name();

?>