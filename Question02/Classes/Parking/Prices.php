<?php

namespace Classes\Parking;

use Classes\Persons\Client;

class Prices
{
    private $monthlyValue;
    private $dailyValue;
    private $hourValue;

    /**
     * Prices constructor.
     * @param $monthlyValue
     * @param $dailyValue
     * @param $hourValue
     */
    public function __construct($monthlyValue, $dailyValue, $hourValue)
    {
        $this->monthlyValue = $monthlyValue;
        $this->dailyValue = $dailyValue;
        $this->hourValue = $hourValue;
    }

    /**
     * @return mixed
     */
    public function getMonthlyValue()
    {
        return $this->monthlyValue;
    }

    /**
     * @param mixed $monthlyValue
     */
    public function setMonthlyValue($monthlyValue): void
    {
        $this->monthlyValue = $monthlyValue;
    }

    /**
     * @return mixed
     */
    public function getDailyValue()
    {
        return $this->dailyValue;
    }

    /**
     * @param mixed $dailyValue
     */
    public function setDailyValue($dailyValue): void
    {
        $this->dailyValue = $dailyValue;
    }

    /**
     * @return mixed
     */
    public function getHourValue()
    {
        return $this->hourValue;
    }

    /**
     * @param mixed $hourValue
     */
    public function setHourValue($hourValue): void
    {
        $this->hourValue = $hourValue;
    }

    function getAmount($clientType)
    {
        switch ($clientType) {
            case Client::MONTHLY_TYPE:
                return $this->monthlyValue;
                break;

            case Client::DIARIST_TYPE:
                return $this->dailyValue;
                break;

            case Client::HOURLY_TYPE:
                return $this->hourValue;
                break;

            default:
                return $this->hourValue;
        }
    }
}