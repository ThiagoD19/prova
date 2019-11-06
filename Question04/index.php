<?php

use Classes\AdditionalService;
use Classes\Checkout;
use Classes\Flight;

include('Classes/Flight.php');
include('Classes/AdditionalService.php');
include('Classes/Checkout.php');

function executeTest() {

    $outbound = new Flight(
        'AD-2040',
        'AZUL',
        'CNF',
        'CGH',
        new DateTime('22-11-2019 08:10:10'),
        new DateTime('22-11-2019 10:10:10'),
        350
    );

    $inbound = new Flight(
        'AD-2042',
        'AZUL',
        'CGH',
        'CNF',
        new DateTime('25-11-2019 12:10:10'),
        new DateTime('25-11-2019 15:10:10'),
        252
    );

    $outboundServices = [
        [
            'quantity' => 2,
            'unitPrice' => 30,
            'type' => AdditionalService::TYPE_BAG
        ],
        [
            'quantity' => 1,
            'unitPrice' => 100,
            'type' => AdditionalService::TYPE_PET
        ]
    ];
    $inboundServices = [
        [
            'quantity' => 1,
            'unitPrice' => 35,
            'type' => AdditionalService::TYPE_BAG
        ],
        [
            'quantity' => 2,
            'unitPrice' => 100,
            'type' => AdditionalService::TYPE_PET
        ]
    ];

    $outbound->initAdditionalServices($outboundServices)->updateValorTotal();
    $inbound->initAdditionalServices($inboundServices)->updateValorTotal();


    $checkout = new Checkout($outbound, $inbound);
    print_r($checkout->generateExtract());
}

executeTest();