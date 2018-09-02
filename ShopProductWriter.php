<?php

class ShopProductWriter
{
    private $products = [];

    public function addProducts(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        $str = '';
        foreach ($this->products as $shopProduct) {
            $str .= $shopProduct->getTitle().': ';
            $str .= $shopProduct->getProducer().' ';
            $str .= $shopProduct->getPrice().'<br>';
        }
        return $str;
    }
}