<?php


namespace Classes\Vehicles;


class Vehicle
{
    const TYPE_CAR = 1;
    const TYPE_BUS = 2;
    const TYPE_TRUCK = 3;
    const TYPE_VAN = 4;
    const TYPE_MOTORCYCLE = 5;

    /**
     * @var String
     */
    private $licensePlate;

    /**
     * @var String
     */
    private $model;

    /**
     * @var String
     */
    private $maker;

    /**
     * @var String
     */
    private $type;

    /**
     * Vehicle constructor.
     * @param String $licensePlate
     * @param String $model
     * @param String $maker
     * @param String $type
     */
    public function __construct(String $licensePlate, String $model, String $maker, String $type)
    {
        $this->licensePlate = $licensePlate;
        $this->model = $model;
        $this->maker = $maker;
        $this->type = $type;
    }

    /**
     * @return String
     */
    public function getLicensePlate(): String
    {
        return $this->licensePlate;
    }

    /**
     * @param String $licensePlate
     */
    public function setLicensePlate(String $licensePlate): void
    {
        $this->licensePlate = $licensePlate;
    }

    /**
     * @return String
     */
    public function getModel(): String
    {
        return $this->model;
    }

    /**
     * @param String $model
     */
    public function setModel(String $model): void
    {
        $this->model = $model;
    }

    /**
     * @return String
     */
    public function getMaker(): String
    {
        return $this->maker;
    }

    /**
     * @param String $maker
     */
    public function setMaker(String $maker): void
    {
        $this->maker = $maker;
    }

    /**
     * @return String
     */
    public function getType(): String
    {
        return $this->type;
    }

    /**
     * @param String $type
     */
    public function setType(String $type): void
    {
        $this->type = $type;
    }

}