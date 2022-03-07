<?php

class Karel {

    public $x;
    public $y;
    public $direction;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->direction = "s";
    }

    public function step()

    {
        switch ($this->direction) {
            case'n':
                $this->y -=1;
                break;
            case'e':
                $this->x +=1;
                break;
            case's':
                $this->y +=1;
                break;      
            case'w':
                $this->y -=1;
                break;      
        }
    }

    public function turnLeft ($i = 1)

    {

        switch ($this->direction) {
            case 'n':
                $this->direction = 'w';
                break;
            case 'e':
                $this->direction = 'n';
                break;
            case 's':
                $this->direction = 'e';
                break;
            case 'w':
                $this->direction = 's';
                break;

        }
        if (--$i >0) {
            $this->turnLeft($i);
        }
    }

    public function toHTML ()
    {
        switch ($this->direction) {
            case 'n':
                return "&uarr;";
            case 'e':
                return "&rarr;";
            case 's':
                return "&darr;";
            case 'w':
                return "&larr;";
        }
    }   
}
?>