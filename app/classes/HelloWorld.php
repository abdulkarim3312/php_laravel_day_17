<?php


namespace App\classes;
class HelloWorld
{
    public $message;
    public $x;
    public $y;
    public $z;
    public $check;
    public $data = [];

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
        $this->data = [
            0 => [
                'name'      => 'Polash',
                'email'     => 'plolash@gmail.com',
                'mobile'    => [

                     'person'   => '1111',
                     'gurdian'  => '2564',
                ]
            ],

            1 => [
                'name'      => 'karim',
                'email'     => 'karim@gmail.com',
                'mobile'    => [

                    'person'   => '3333',
                    'gurdian'  => '8954',
                ]
            ],

            2 => [
                'name'      => 'sahin',
                'email'     => 'karim@gmail.com',
                'mobile'    => [

                    'person' => '4444',
                    'gurdian' => '3256',
                ]
            ],

         ];

        foreach ($this->data as $item)
        {
//            echo $item['name'].$item['email'].$item['mobile'].'<br/>';
            foreach ($item as $value)
            {
                if (is_array($value))
                {
                    foreach ($value as $v_item)
                    {
                        echo $v_item;
                    }
                }
                else
                {
                    echo $value.' ';
                }
            }
            echo '<br/>';
        }
//        echo $this->data[1]['name'];






//        foreach ($this->data as $index => $item)
//        {
//            echo "index : ".$index. "value : ".$item.' ';
//        }
//        echo $this->data['name'];


//        $this->data = [100, 200, 300, "BITM", "SEIP", true, false, 50.20];
//
//         echo $this->data[1];
//
//        foreach ($this->data as $item)
//        {
//            echo $item.' ';
//        }










//        $this->x = 30;
//        $this->y = 200;
//        $this->z =$this->x + $this->y;
//
//        do
//        {
//            echo $this->x;
//            $this->x++;
//        }while($this->x > 50);
//
//        while ($this->x < 50)
//        {
//            echo $this->x.' ';
//            $this->x++;
//        }
//
//        for ($this->x; $this->x <= 100; $this->x++)
//        {
//            if ($this->x == 15)
//            {
//                break;
//            }
//            else{
//                continue;
//            }
//            echo $this->x.'<br/>';
//        }

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