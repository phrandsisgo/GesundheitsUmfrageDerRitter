<?php
include "questions.php";#bei mir gibt es den als array.php im root orner des Projektes
include "tools.php"; #keine ahnung was das macht soweit

//hole die Laufnummer der letzten frage aus $_POST
if (isset($_POST["questionIndex"])) {
    $questionIndex = $_POST["questionIndex"];
} else {
    //auf der index.php Seite gibt es noch keine $_POST werte
    $questionIndex = -1;
}

//setze die Laufnummer auf die nächsten frage:
$questionIndex++;

//hole die frage aus dem array
$data = $Questions[$questionIndex];
prettyPrint($data);//pretty print muss noch vom anderen Projekt kopiert werden. 

$data = $questions[$questionIndex];#question index ist hier noch nicht vorhanden aber wird über das include hinzugefügt
?>


<h3>Frage <?php echo $questionIndex +1; ?></h3>
<p><?php echo $questionText; ?></p>

<form action="question-2.php" method="post" onsubmit="return validateRagnge('range-slider');">
<p  class="instruction"><?php echo $data["instruction"]; ?></p>
<div class="row flex-nowrap" style="padding-left:16%">
    <div class="col">
        <p><?php echo $data["labls"][0];?></p>
    </div>
    <div class="col" style="text-align: center;">
        <p><?php echo $data["labls"][1];?></p>
    </div>
    <div class="col" style="text-align: right;">
        <p><?php echo $data["labls"][2];?></p>
    </div>
</div>

<input type="range" name="range-slider" id="ranges-slider" class="form-range"
min="<?php echo $data["min"];?>"
max="<?php echo $data["max"];?>"
step="<?php echo $data["step"];?>"
value="<?php echo $data["value"];?>"
>
<input type="hidden" name="questionIndex" value="<?php echo $data["questionIndex"]; ?>">


</input>
<!--und so weiter es wird noch nicht erklärt wie es weiter geht-->
</form>