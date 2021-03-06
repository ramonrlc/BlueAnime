<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/php/headerattribute.php';

class JSLocation extends HeaderAttribute 
{
private $location;

    public function __construct($name = '')
    {
        $this->location = '/framework/javascript/'.$name;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function setName($name)
    {
        $this->location = '/framework/javascript/'.$name;
    }
    public function setLocation($location)
    {
        $this->location = $location;
    }
    public function getHtmlTag()
    {
        return '<script src="'.$this->location.'" type="text/javascript"></script>';
    }
}

?>