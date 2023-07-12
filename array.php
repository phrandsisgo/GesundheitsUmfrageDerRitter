<?php
$fragen = array(
    "Wie gesund bist du körperlich?"=>"5",
    "Nimmst du Nahrungsergänzungsmittel?"=>"nein",
    "Wie wichtig ist köperliche Aktivität für dich?"=>"5",
    "Welche zusätzliche körperliche Aktivität betreibst du am meisten?" =>"Joggen",
    "Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?"=>"genügend",#hier kommt noch dazu, dass es mehrere Optionen gibt aus der man auswählen muss.
);
//hilf mir aus den Fragen ein Multidimensionales Array zu machen.
 $Fragen = array(
    array("Wie gesund bist du körperlich?", 5,"1-5"),
    array("Nimmst du Nahrungsergänzungsmittel?", "nein","boolean"),
    array("Wie wichtig ist köperliche Aktivität für dich?", "5","1-5"),
    array("Welche zusätzliche körperliche Aktivität betreibst du am meisten?", "Joggen", "multiplechoice",
        array("Gewichte heben", "gehen", "Joggen", "Radfahren", "Schwimmen", "Tanzen", "Pilates", "Aerobics")),
    array("Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?", "genügend"),
    array()
 );
?>