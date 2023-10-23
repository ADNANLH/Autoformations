<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();
?>












<?php






//-----------#### abstract ####-----------



// Abstract class Person
abstract class Person {
  protected $name;
  protected $age;

  public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
  }

  abstract public function introduce();
}

// Concrete class Student, extending Person
class Student extends Person {
  private $school;

  public function __construct($name, $age, $school) {
      parent::__construct($name, $age);
      $this->school = $school;
  }

  public function introduce() {
      return "Hi, I'm {$this->name}, a student at {$this->school}, and I'm {$this->age} years old.";
  }
}




// Concrete class Teacher, extending Person
class Teacher extends Person {
  private $subject;

  public function __construct($name, $age, $subject) {
      parent::__construct($name, $age);
      $this->subject = $subject;
  }

  public function introduce() {
      return "Hello, I'm {$this->name}, a teacher of {$this->subject}, and I'm {$this->age} years old.";
  }
}

// Create objects of Student and Teacher
$student = new Student("Alice", 20, "ABC High School");
$teacher = new Teacher("Mr. Smith", 35, "Mathematics");

// Introduce themselves
echo $student->introduce() . "\n";
echo $teacher->introduce() . "\n";


?>
 
</body>
</html>