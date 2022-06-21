<?php

class Tiger

{

    private static $instance;
    private $counter;

    private function __construct()

    {
        echo 'Building character...'.PHP_EOL;
    }

    public function roar() 

    {
        echo "Grrr!" . PHP_EOL;
        ++$this->counter;
    }

    public static function getInstance()

    {
        if (!self::$instance instanceof self) 
        
        {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getCounter()

    {
        return $this->counter;
    }

}

?>