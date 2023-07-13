<?php
$fragen = array(
    "Wie gesund bist du körperlich?"=>"5",
    "Nimmst du Nahrungsergänzungsmittel?"=>"nein",
    "Wie wichtig ist köperliche Aktivität für dich?"=>"5",
    "Welche zusätzliche körperliche Aktivität betreibst du am meisten?" =>"Joggen",
    "Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?"=>"genügend",#hier kommt noch dazu, dass es mehrere Optionen gibt aus der man auswählen muss.
);
//hilf mir aus den Fragen ein Multidimensionales Array zu machen.
//diese Arrays sind folgendermassen geordnet: Frage, Antwort, Typ, Optionen(falls nötig)
 $Fragen = array(
    /*
   //einschub von Chris
    array(
        "questionText" => "Wie gesund bist du körperlich?",
        "type" => "rangeSlider",
        "labels" => array("ungesund", "s", ""),
        "min" => 0,
        "max" => 5
    )
*/
    array("Wie gesund bist du körperlich?", 5,"rangeslider, 1-5"),
    array("Nimmst du Nahrungsergänzungsmittel?", "nein","boolean"),
    array("Wie wichtig ist köperliche Aktivität für dich?", "5","rangeslider, 1-5"),
    array("Welche zusätzliche körperliche Aktivität betreibst du am meisten?", "Joggen", "multiplechoice",
        array("Gewichte heben", "gehen", "Joggen", "Radfahren", "Schwimmen", "Tanzen", "Pilates", "Aerobics")),#auf dieser Zeile befindet sich ein Array in einem Array
    array("Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?", "genügend", "rangeslider, 1-5"),
    array("An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Kohlenhydrate?", 1, "eingabefeld Zahl"),
    array("An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Proteine?", 1, "eingabefeld Zahl"),
    array("An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Gemüse?", 1, "eingabefeld Zahl"),
    array("An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Früchte?", 1, "eingabefeld Zahl"),
    array(" An einem typischen Tag: Wie viele deiner Malzeiten kommen aus der Mikrowelle oder sind schon fertig zubereitet?", 1, "eingabefeld Zahl"),

 );
?>