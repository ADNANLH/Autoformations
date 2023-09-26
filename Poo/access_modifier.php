<!DOCTYPE html>
<html>
<body>
<?php
    // class Fruit {
    //     public $name;
    //     protected $color ;
    //     private $weight;
    // }

    // $mango = new Fruit();
    // $mango->name = 'Mango';//ok
    // $mango->color = 'yellow';//error
    // $mango->weight = '300';//error


    class Fruit {
        public $name;
        public $color;
        public $weight;

        function set_name($n){ //public (default)
            $this->name = $n;
        }
        protected function set_color($n){
            $this->color = $n;

        }
        private function set_weight($n){
            $this->weight = $n;
        }
    }
    $mango = new Fruit();
    $mango->set_name('Mango'); //ok
    $mango->set_color('yellow'); //error
    $mango->set_weight('300'); //error




?>
</body>
</html>