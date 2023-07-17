<?php
    function yesNoQuestion($qid, $questionText, $answers, $correctAnswerIndex) {
        echo "<p>&nbsp;</p>
            <p>$questionText</p>
            <input type='radio' id='r-$qid-0' name='radio-$qid' value='$answers[0]'>
            <label for='r-$qid-0'>$answers[0]</label><br>
            <input type='radio' id='r-$qid-1' name='radio-$qid' value='$answers[1]'>
            <label for='r-$qid-1'>$answers[1]</label><br>";

            // Setze $correctAnswerIndex in 'hidden' Eingabefeld.
            echo "<input type='hidden' name='correctAnswerIndex' value='$correctAnswerIndex'>";
    }
?>