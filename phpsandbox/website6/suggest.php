<?php
    // People Array @TODO - Get from DB
    $people[] = "Abraham";
    $people[] = "Jong-Hae";
    $people[] = "Tommy";
    $people[] = "David";
    $people[] = "Sarah";
    $people[] = "Jason";
    $people[] = "Michael";
    $people[] = "James";
    $people[] = "Benjamin";
    $people[] = "Kailee";
    $people[] = "Jackie";
    $people[] = "Jennifer";

    // GET QUERY STRING
    $q = $_REQUEST['q']; // Use request for both get and post option

    $suggestion = "";

    // Get Suggestions
    if($q !== ""){
        $q = strtolower($q);
        $len = strlen($q);
        foreach($people as $person){
            if(stristr($q, substr($person, 0, $len))){
                if($suggestion === ""){
                    $suggestion = $person;
                }
                else{
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;