<?php

//oefening 4, functies, maak een functie isPublished die een status ontvangt en true teruggeeft als de status "approved is".

function isPublished (string $status) :bool
{
    return $status === "approved";
}


var_dump(isPublished("pending"));
var_dump(isPublished("rejected"));
var_dump(isPublished("approved"));



