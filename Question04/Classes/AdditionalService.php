<?php

namespace Classes;

class AdditionalService
{
    CONST TYPE_BAG = 1;
    CONST TYPE_PET = 2;

    private $quantity;
    private $unitPrice;
    private $type;

    public function __construct($quantity, $unitPrice, $type)
    {
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->type = $type;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function getType()
    {
        return $this->type;
    }

}