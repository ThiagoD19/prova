<?php

namespace Classes\Parking;

class ParkingSpace
{
    const CARGO_VEHICLES = 1;
    const RIDE_VEHICLES = 2;
    const MOTORCYCLE = 3;
    const NOT_BUSY = 1;
    const BUSY = 2;

    /**
     * @var int
     */
    private $status;

    /**
     * @var String
     */
    private $localization;

    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $type;

    /**
     * ParkingSpace constructor.
     * @param String $localization
     * @param int $number
     * @param int $type
     */
    public function __construct(String $localization, int $number, int $type)
    {
        $this->status = self::NOT_BUSY;
        $this->localization = $localization;
        $this->number = $number;
        $this->type = $type;
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
     * @return String
     */
    public function getLocalization(): String
    {
        return $this->localization;
    }

    /**
     * @param String $localization
     */
    public function setLocalization(String $localization): void
    {
        $this->localization = $localization;
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
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function isNotBusy(): bool
    {
        return $this->status === self::NOT_BUSY;
    }
}