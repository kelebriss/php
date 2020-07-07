<?php
class A {
    const BAR = 1;
    public static $foo = 2;
    private $silly;

    public function __construct() {
         $this->silly = self::BAR;
    }
}

class B extends A {
    public function __construct() {
        parent::__construct();
    }

    public static function getStuff() {
         return 'this is tiring stuff.';
    }
}

echo A::BAR;
echo A::$foo;
echo B::getStuff();
?>
