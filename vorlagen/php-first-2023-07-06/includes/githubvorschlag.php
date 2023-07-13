<?php
    // Definiere ein Array mit Fragen und Antworten
    $questions = array(
        array(
            "question" => "Wie heißt die Hauptstadt von Deutschland?",
            "answers" => array("Berlin", "München", "Hamburg", "Frankfurt"),
            "correctAnswerIndex" => 0
        ),
        array(
            "question" => "Wie viele Planeten hat unser Sonnensystem?",
            "answers" => array("7", "8", "9", "10"),
            "correctAnswerIndex" => 1
        ),
        array(
            "question" => "Wer hat die Relativitätstheorie entwickelt?",
            "answers" => array("Isaac Newton", "Albert Einstein", "Galileo Galilei", "Johannes Kepler"),
            "correctAnswerIndex" => 1
        )
    );

    // Iteriere über das Array und gib jede Frage aus
    foreach ($questions as $question) {
        echo "<p>" . $question["question"] . "</p>";
        foreach ($question["answers"] as $index => $answer) {
            echo "<input type='radio' id='r-$index' name='radio-" . $question["question"] . "' value='$answer'>
            <label for='r-$index'>$answer</label><br>";
        }
        // Setze den Index der korrekten Antwort in ein 'hidden' Eingabefeld
        echo "<input type='hidden' name='correctAnswerIndex' value='" . $question["correctAnswerIndex"] . "'>";
    }
?>