
<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!"; 
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$Obj = new Welcome();
$Obj->msg1();
echo "<br>";



$Obj2 = new Welcome2();
$Obj2->msg1();
$Obj2->msg2();
?>

