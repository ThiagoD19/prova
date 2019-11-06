<?php

namespace Classes\Persons;

abstract class Person
{
    /**
     * @var String
     */
    private $name;

    /**
     * @var int
     */
    private $cellphone;

    /**
     * @var String
     */
    private $document;

    /**
     * @var String
     */
    private $address;

    /**
     * Persons constructor.
     * @param String $name
     * @param String $cellphone
     * @param String $document
     * @param String $address
     */
    public function __construct(String $name, String $cellphone, String $document, String $address)
    {
        $this->name = $name;
        $this->cellphone = $cellphone;
        $this->document = $document;
        $this->address = $address;
    }

    /**
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

    /**
     * @return String
     */
    public function getCellphone(): String
    {
        return $this->cellphone;
    }

    /**
     * @return String
     */
    public function getDocument(): String
    {
        return $this->document;
    }

    /**
     * @return String
     */
    public function getAddress(): String
    {
        return $this->address;
    }

    /**
     * @param String $name
     */
    public function setName(String $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $cellphone
     */
    public function setCellphone(int $cellphone): void
    {
        $this->cellphone = $cellphone;
    }

    /**
     * @param String $document
     */
    public function setDocument(String $document): void
    {
        $this->document = $document;
    }

    /**
     * @param String $address
     */
    public function setAddress(String $address): void
    {
        $this->address = $address;
    }
}