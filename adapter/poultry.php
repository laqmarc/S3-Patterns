<?php

    class Duck 
    {
        public function quack() 
        {
            echo "Quack \n";
        }

        public function fly() 
        {
            echo "I'm flying \n";
        }
    }

    class Turkey 
    {
        public function gobble() 
        {
            echo "Gobble gobble \n";
        }

        public function fly() 
        {
        echo "I'm flying a short distance \n";
        }

    }

    class TurkeyAdapter extends Duck
    {

        public function quack() {
            echo "Gobble gobble <br>";
        }

        public function fly() 
        {
            for ($i = 0; $i < 5; $i++) 
            {
                echo "I'm flying a short distance \n";
            }
        }

    }

?>
