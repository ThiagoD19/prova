<?php

namespace Classes;

use DateTime;

class Flight
{
    private $flightNumber;
    private $cia;
    private $departureAirport;
    private $arrivalAirport;
    private $departureTime;
    private $arrivalTime;
    private $valorTotal;
    private $additionalServices;


    public function __construct(
        string $flightNumber,
        string $cia,
        string $departureAirport,
        string $arrivalAirport,
        DateTime $departureTime,
        DateTime $arrivalTime,
        float $valorTotal
    )
    {
        $this->flightNumber = $flightNumber;
        $this->cia = $cia;
        $this->departureAirport = $departureAirport;
        $this->arrivalAirport = $arrivalAirport;
        $this->departureTime = $departureTime;
        $this->arrivalTime = $arrivalTime;
        $this->valorTotal = $valorTotal;
    }

    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    public function getCia()
    {
        return $this->cia;
    }

    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function getAdditionalServices(): array
    {
        return $this->additionalServices;
    }

    public function setAdditionalServices(array $additionalServices): void
    {
        $this->additionalServices = $additionalServices;
    }

    public function initAdditionalServices($services)
    {
        $additionalServices = [];

        foreach ($services as $service) {
            $additionalServices[] = new AdditionalService($service['quantity'], $service['unitPrice'], $service['type']);
        }

        $this->setAdditionalServices($additionalServices);
        return $this;
    }

    public function updateValorTotal()
    {
        array_map(function (AdditionalService $additionalService) use (&$total) {
            $total += ($additionalService->getUnitPrice() * $additionalService->getQuantity());
        }, $this->additionalServices);

        $this->valorTotal += $total;
    }

    public function getAdditionalServicesByType($type):? array
    {
        if (!$this->additionalServices) {
            return null;
        }

        $servicesByType = array_filter(array_map(function (AdditionalService $additionalService) use ($type) {
             if ($additionalService->getType() === $type) {
                 return [
                     'quantity' => $additionalService->getQuantity(),
                     'unitPrice' => $additionalService->getUnitPrice()
                 ];
             }
             return null;
        },$this->additionalServices));

        if (!empty($servicesByType)) {
            return array_merge(...$servicesByType);
        }

        return null;
    }
}




