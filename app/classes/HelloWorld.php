<?php


namespace App\classes;
class HelloWorld
{
    public $message;
    public $x;
    public $y;
    public $z;
    public $check;

    public function __construct()
    {
        $this->message = "Hello World";
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;
        $this->check= false;
    }

    public function index()
    {
        $this->x = 30;
        $this->y = 200;
        $this->z =$this->x + $this->y;

        do
        {
            echo $this->x;
            $this->x++;
        }while($this->x > 50);

        while ($this->x < 50)
        {
            echo $this->x.' ';
            $this->x++;
        }

        for ($this->x; $this->x <= 100; $this->x++)
        {
            if ($this->x == 15)
            {
                break;
            }
            else{
                continue;
            }
            echo $this->x.'<br/>';
        }

//        switch ($this->x)
//        {
//            case 10:
//                echo "Hello World";
//                break;
//            case 20:
//                echo "Hello Bangladesh";
//                break;
//            case 30:
//                echo "Hello Dhaka";
//                break;
//            default:
//                echo "Hello BITM";
//        }
    }

}