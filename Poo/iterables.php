<!DOCTYPE html>
<html>
<body>

<?php
// Create an Iterator
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    // array_values() makes sure that the keys are numbers
    $this->items = array_values($items);
  }

  //current(): This method returns the current item in 
  // the iteration. It accesses the item from the 
  // $items array at the current $pointer position.

  public function current() {
    return $this->items[$this->pointer];
  }

  // key(): This method returns the key (position) of the
  // current item in the iteration, which is the same
  // as the $pointer value.
  public function key() {
    return $this->pointer;
  }

  // next(): This method advances the pointer to the next item 
  // in the iteration.

  public function next() {
    $this->pointer++;
  }

  // rewind(): This method resets the pointer to
  //  the beginning of the iteration

  public function rewind() {
    $this->pointer = 0;
  }

  // valid(): This method checks if the current pointer position is valid 
  // (i.e., within the range of items in the array).
  public function valid() {
    // count() indicates how many items are in the list
    return $this->pointer < count($this->items);
  }
}

// A function that uses iterables
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);
?>

</body>
</html>
