<?php
interface AnimalInterface
{
    const ME = "Mắt";
}

class Animal implements AnimalInterface
{
    public $type = "Con cho";

    public function __set($key, $value)
    {
        if ($type == "type") {
            echo "Runing";
        }
    }

    public function getMe()
    {
        echo self::ME;
    }

    public static function getType()
    {
        echo $this->type = "Con ga";
    }
}

$animal = new Animal();
$animal->type;
