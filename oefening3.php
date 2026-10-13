<?php
//Oefeningen 3, werken met statussen. Een automaat moet actief zijn voordat die zichtbaar is.
//Er zijn 3 statussen "approved", "pending" en "rejected"
 $status = "";

 if ($status === "approved")
    {
        echo "De automaat werd goedgekeurd, je kan hem nu zien bij de actieve automaten.";
    }
    else if ($status === "rejected")
        {
            echo "De automaat werd afgekeurd, deze wordt na 72u verwijderd.";
        }
    
    else if ($status === "pending")
        {
            echo "De automaat moet nog goedgekeurd worden.";
        }

    else {
                echo "Er ging iets mis";
    }
