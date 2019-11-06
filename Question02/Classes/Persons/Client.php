<?php

namespace Classes\Persons;

use Classes\Parking\Ticket;
use Classes\Vehicles\Vehicle;

class Client extends Person
{
    const MONTHLY_TYPE = 1;
    const DIARIST_TYPE = 2;
    const HOURLY_TYPE  = 3;

    /**
     * @var array Ticket
     */
    private $tickets;

    /**
     * @var int
     */
    private $type;

    /**
     * @var array Vehicle
     */
    private $vehicles;

    /**
     * Client constructor.
     * @param String $name
     * @param String $cellphone
     * @param String $document
     * @param String $address
     * @param int $type
     * @param Vehicle $vehicle
     */
    public function __construct(
        String $name,
        String $cellphone,
        String $document,
        String $address,
        int $type,
        Vehicle $vehicle
    )
    {
        parent::__construct($name, $cellphone, $document, $address);
        $this->type = $type;
        $this->vehicles[] = $vehicle;
    }

    /**
     * @return array
     */
    public function getTickets(): array
    {
        return $this->tickets;
    }

    /**
     * @param array tickets
     */
    public function setTickets(array $tickets): void
    {
        $this->tickets = $tickets;
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
     * @return array
     */
    public function getVehicles(): array
    {
        return $this->vehicles;
    }

    /**
     * @param array $vehicles
     */
    public function setVehicles(array $vehicles): void
    {
        $this->vehicles = $vehicles;
    }

    /**
     * @return array
     */
    public function getTicketsOpen(): ?array
    {
        return array_filter(array_map(function (Ticket $ticket) {
            return $ticket->isTicketOpen() ? $ticket : null;
        }, $this->tickets));
    }

    /**
     * @param Vehicle $vehicle
     */
    public function addVehicles(Vehicle $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    /**
     * @param Ticket $ticket
     */
    public function addTickets(Ticket $ticket): void
    {
        $this->tickets[] = $ticket;
    }
}