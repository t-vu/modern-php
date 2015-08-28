<?php
class RetailStore
{
    use Geocodable;

    private $color;
    public function __construct($color){
    	$this->color = $color;
    }
    // Class implementation goes here
}
