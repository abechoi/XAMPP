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
    if($q !== ""){ // $q = "Abr" 
        $q = strtolower($q); // $q = "abr"
        $len = strlen($q); // $len = 3
        foreach($people as $person){ 
            if(stristr($q, substr($person, 0, $len))){ // if(stristr("abr", "abr"))
                if($suggestion === ""){ // if $suggestion is empty
                    $suggestion = $person; // the current person of people will become the first suggestion
                }
                else{
                    $suggestion .= ", $person"; // as the foreach loop continues, append any other person of people to the suggestion string
                }
            }
        }
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;