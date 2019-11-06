<?php

namespace Classes\Parking;

use Classes\Persons\Client;
use Classes\Persons\Employee;
use DateTime;

class Parking
{
    /**
     * @var array Employee
     */
    private $employees;

    /**
     * @var array ParkingSpace;
     */
    private $parkingSpaces;

    /**
     *@var array Client
     */
    private $clients;

    /**
     * @var DateTime
     */
    private $openingTime;

    /**
     * @var DateTime
     */
    private $closingTime;

    /**
     * @var Prices
     */
    private $prices;

    /**
     * Parking constructor.
     * @param array $employees
     * @param array $parkingSpaces
     * @param array $clients
     * @param DateTime $openingTime
     * @param DateTime $closingTime
     * @param Prices $prices
     */
    public function __construct(array $employees, array $parkingSpaces, array $clients, DateTime $openingTime, DateTime $closingTime, Prices $prices)
    {
        $this->employees = $employees;
        $this->parkingSpaces = $parkingSpaces;
        $this->clients = $clients;
        $this->openingTime = $openingTime;
        $this->closingTime = $closingTime;
    }

    /**
     * @return array
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    /**
     * @param array $employees
     */
    public function setEmployees(array $employees): void
    {
        $this->employees = $employees;
    }

    /**
     * @return array
     */
    public function getParkingSpaces(): array
    {
        return $this->parkingSpaces;
    }

    /**
     * @param array $parkingSpaces
     */
    public function setParkingSpaces(array $parkingSpaces): void
    {
        $this->parkingSpaces = $parkingSpaces;
    }

    /**
     * @return array
     */
    public function getClients(): array
    {
        return $this->clients;
    }

    /**
     * @param array $clients
     */
    public function setClients(array $clients): void
    {
        $this->clients = $clients;
    }

    /**
     * @return DateTime
     */
    public function getOpeningTime(): DateTime
    {
        return $this->openingTime;
    }

    /**
     * @param DateTime $openingTime
     */
    public function setOpeningTime(DateTime $openingTime): void
    {
        $this->openingTime = $openingTime;
    }

    /**
     * @return DateTime
     */
    public function getClosingTime(): DateTime
    {
        return $this->closingTime;
    }

    /**
     * @param DateTime $closingTime
     */
    public function setClosingTime(DateTime $closingTime): void
    {
        $this->closingTime = $closingTime;
    }

    /**
     * @return Prices
     */
    public function getPrices(): Prices
    {
        return $this->prices;
    }

    /**
     * @param Prices $prices
     */
    public function setPrices(Prices $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * @param Client $client
     */
    public function addNewClient(Client $client)
    {
        $this->clients[] = $client;
    }

    /**
     * @param Employee $employee
     */
    public function addNewEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    /**
     * @return array
     */
    public function getParkingSpaceNotBusy(): ?array
    {
        return array_filter(array_map(function (ParkingSpace $parkingSpace) {
            return $parkingSpace->isNotBusy() ? $parkingSpace : null;
        }, $this->parkingSpaces));
    }

    public function totalAmount(Client $client)
    {
        $tickets = $client->getTicketsOpen();
        $price = $this->prices->getAmount($client->getType());

        if ($client->getType() === client::DIARIST_TYPE) {
            return count($tickets) * $price;

        } elseif ($client->getType() === client::HOURLY_TYPE) {
            $time = 0;
            /** @var Ticket $ticket */
            foreach ($tickets as $ticket) {
                $dateDiff = date_diff($ticket->getEntryDate(), $ticket->getExitDate());
                $time += $dateDiff->h;
            }

            return $time * $price;
        }

        return $price;
    }
}