<?php

namespace Classes\Persons;

class Employee extends Person
{
    /**
     * @var int
     */
    private $record;

    /**
     * @var String
     */
    private $workShift;

    /**
     * @var String
     */
    private $role;

    /**
     * Employee constructor.
     * @param int $record
     * @param String $workShift
     * @param String $role
     * @param String $name
     * @param String $cellphone
     * @param String $document
     * @param String $address
     */
    public function __construct(
        String $name,
        String $cellphone,
        String $document,
        String $address,
        int $record,
        String $workShift,
        String $role
    )
    {
        parent::__construct($name, $cellphone, $document, $address);
        $this->record = $record;
        $this->workShift = $workShift;
        $this->role = $role;
    }

    /**
     * @return int
     */
    public function getRecord(): int
    {
        return $this->record;
    }

    /**
     * @return String
     */
    public function getWorkShift(): String
    {
        return $this->workShift;
    }

    /**
     * @return String
     */
    public function getRole(): String
    {
        return $this->role;
    }

    /**
     * @param int $record
     */
    public function setRecord(int $record): void
    {
        $this->record = $record;
    }

    /**
     * @param String $workShift
     */
    public function setWorkShift(String $workShift): void
    {
        $this->workShift = $workShift;
    }

    /**
     * @param String $role
     */
    public function setRole(String $role): void
    {
        $this->role = $role;
    }
}
