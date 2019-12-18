<?php
class Obaasan
{
    private $private = "Private Obaasan";
    protected $protected = "Proteacted Obaasan";
    public $public = "Public Obaasan";

    public function Hello()
    {
        echo $this->private;
    }
}

class Okaasan extends Obaasan
{
    public function Hello()
    {
        echo "<br/>";
        echo "Watashi wa Okaasan ";
        parent::Hello();
    }
}

class Onisan extends Okaasan
{
    public function Hello()
    {
        echo "<br/>";
        echo "Watashi wa Onisan ";
        parent::Hello();
    }
}

$obaasan = new Obaasan();
$obaasan->Hello();
echo "<hr>";
$okaasan = new Okaasan();
$okaasan->Hello();
echo "<hr>";
$onisan = new Onisan();
$onisan->Hello();
