
<?php

$fragen=array(
    array(
        "questionText" => "Wie gesund bist du körperlich?",
        "type" => "rangeSlider",
        "labels" => array("ungesund", "semi gesund", "sehr gesund"),
        "min" => 0,
        "max" => 5
    ),
    array(
        "questionText" => "Nimmst du Nahrungsergänzungsmittel?",
        "type" => "boolean",
        "labels" => array("nein", "ja"),
    ),
    array(
        "questionText" => "Wie wichtig ist köperliche Aktivität für dich?",
        "type" => "rangeSlider",
        "labels" => array("ungesund", "s", ""),
        "min" => 0,
        "max" => 5
    ),
    array(
        "questionText" => "Welche zusätzliche körperliche Aktivität betreibst du am meisten?",
        "type" => "multiplechoice",
        "labels" => array("Gewichte heben", "gehen", "Joggen", "Radfahren", "Schwimmen", "Tanzen", "Pilates", "Aerobics"),
    ),
    array(
        "questionText" => "Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?",
        "type" => "rangeSlider",
        "labels" => array("ungesund", "s", ""),
        "min" => 0,
        "max" => 5
    ),
    array(
        "questionText" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Kohlenhydrate?",
        "type" => "eingabefeld Zahl",
    ),
    array(
        "questionText" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Proteine?",
        "type" => "eingabefeld Zahl",
    ),
    array(
        "questionText" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Gemüse?",
        "type" => "eingabefeld Zahl",
    ),
    array(
        "questionText" => "An einem typischen Tag: Wie viele deiner Malze",
        "type" => "eingabefeld Zahl",
    ));



define("QUESTIONS", $fragen);
?>