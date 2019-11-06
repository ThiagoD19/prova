<?php

namespace Classes\Parking;

use DateTime;

class Ticket
{
    const OPEN = 1;
    const PAID = 2;
    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $status;

    /**
     * @var DateTime
     */
    private $exitDate;

    /**
     * @var DateTime
     */
    private $entryDate;

    /**
     * @var float
     */
    private $value;

    /**
     * @var int
     */
    private $vacancyNumber;

    /**
     * Ticket constructor.
     * @param int $number
     * @param int $status
     * @param DateTime $entryDate
     */
    public function __construct(int $number, int $status, DateTime $entryDate)
    {
        $this->number = $number;
        $this->status = $status;
        $this->entryDate = $entryDate;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return DateTime
     */
    public function getExitDate(): DateTime
    {
        return $this->exitDate;
    }

    /**
     * @param DateTime $exitDate
     */
    public function setExitDate(DateTime $exitDate): void
    {
        $this->exitDate = $exitDate;
    }

    /**
     * @return DateTime
     */
    public function getEntryDate(): DateTime
    {
        return $this->entryDate;
    }

    /**
     * @param DateTime $entryDate
     */
    public function setEntryDate(DateTime $entryDate): void
    {
        $this->entryDate = $entryDate;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getVacancyNumber(): int
    {
        return $this->vacancyNumber;
    }

    /**
     * @param int $vacancyNumber
     */
    public function setVacancyNumber(int $vacancyNumber): void
    {
        $this->vacancyNumber = $vacancyNumber;
    }

    /**
     * @return bool
     */
    public function isTicketOpen(): bool
    {
        return $this->status === self::OPEN;
    }
}