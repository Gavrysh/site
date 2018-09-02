<?php

class ShopProduct
{
    private $title;
    private $pruduserMainName;
    private $producerFirstName;
    private $discont;
    protected $price;

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title             = $title;
        $this->producerFirstName = $firstName;
        $this->pruduserMainName  = $mainName;
        $this->price             = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getProducerMainName()
    {
        return $this->pruduserMainName;
    }

    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    public function getProducer()
    {
        return $this->producerFirstName.' '.$this->pruduserMainName;
    }

    public function getSummaryLine()
    {
        $base = $this->title.' (';
        $base .= $this->pruduserMainName.', ';
        $base .= $this->producerFirstName.')';
        return $base;
    }

    public function setDiscont($discont)
    {
        $this->discont = $discont;
    }

    public function getDiscont()
    {
        return $this->discont;
    }

    public function getPrice()
    {
        return ($this->price - $this->discont);
    }
}