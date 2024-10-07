<!-- <?php
class Fruit{
    public $name;
    public $color;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}
$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?> -->

<!-- <?php
class Person{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function displayPersonInfo(){
        echo $this->name;
        echo "<br>";
        echo $this->age;
    }
}
$person1 = new Person("John",20);
$person1->displayPersonInfo();
echo "<br>";
$person2 = new Person("Jane",21);
$person2->displayPersonInfo();
?> -->

<!-- <?php
class Fruits{
    public $name;
    public $color;
    function __construct($name){
        echo "constructor body <br>";
        $this->name = $name;
    }
    public function hello(){
        echo "hello <br>";
        echo "hello <br>";
        echo "hello <br>";
        echo "hello <br>";
    }
    function __destruct(){
        echo "the fruit is {$this->name}<br>";
    }
}

$apple = new Fruits("Apple");
$apple->hello();
?> -->

<?php
class Animal{
    public $name;
    public $type;
    public function __construct($name,$type){
        $this->name = $name;
        $this->type = $type;
    }
    public function introduce()
}