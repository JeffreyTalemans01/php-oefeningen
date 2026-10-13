<?php
//gegevens opslaan in een associatieve array zoals in een databank

$vendingMachines = [
    [
        "id" => 1,
        "name" => "Den Troon",
        "streetName" => "Bouwelse steenweg",
        "houseNumber" => 15,
        "city" => "Grobbendonk",
        "status" => "approved"
    ],

     [
        "id" => 2,
        "name" => "Verheyden",
        "streetName" => "Kerkplein",
        "houseNumber" => 15,
        "city" => "Turnhout",
        "status" => "rejected"
    ],

     [
        "id" => 3,
        "name" => "Pain perdu",
        "streetName" => "Sint damiaanstraat",
        "houseNumber" => 2,
        "city" => "Wommelgem",
        "status" => "pending"
    ]
];

function getApprovedMachines(array $vendingMachines):array
{
//loop door de machines die enkel "approved" zijn


$approvedMachines = [];

foreach ($vendingMachines as $vending) {
    if ($vending["status"] === "approved")
        {
            $approvedMachines[] = $vending;
            
        
            
        }
}

return $approvedMachines;



}

$approved = getApprovedMachines($vendingMachines);
var_dump($approved);