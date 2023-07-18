<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"href="style.css">
</head>
    <title>Document</title>
</head>
<body>

<?php
include "array.php";#bei mir gibt es den als array.php im root orner des Projektes
include "tools.php"; #keine ahnung was das macht soweit

//hole die Laufnummer der letzten frage aus $_POST
// Benötiget <input type="hidden" name="questionIndex" value="0">
// im <form>Tag.
if (isset($_POST["questionIndex"])) {
    $questionIndex = $_POST["questionIndex"];
} else {
    //auf der index.php Seite gibt es noch keine $_POST werte
    $questionIndex = -1;
}

//setze die Laufnummer auf die nächsten frage:
$questionIndex++; 
$questionText = QUESTIONS[$questionIndex]["questionText"];#hier wird die frage aus dem array geholt

//hole die frage aus dem array
$data = QUESTIONS[$questionIndex];
prettyPrint($data);//pretty print muss noch vom anderen Projekt kopiert werden. 

?>


<h3>Frage <?php echo $questionIndex +1; ?></h3>
<p><?php echo $data["questionText"]; ?></p>

<form action="question-2.php" method="post" onsubmit="return validateRagnge('range-slider');">
<p  class="instruction">ganz links Wäre eher schlecht und Rechts sehr gut.</p>
<div class="row flex-nowrap" style="padding-left:16%">
    <div class="col">
        <p><?php echo $data["labels"][0];?></p>
    </div>
    <div class="col" style="text-align: center;">
        <p><?php echo $data["labels"][1];?></p>
    </div>
    <div class="col" style="text-align: right;">
        <p><?php echo $data["labels"][2];?></p>
    </div>
</div>

<input type="range" name="range-slider" id="ranges-slider" class="form-range"
min="<?php echo $data["min"];?>"
max="<?php echo $data["max"];?>"
step="1"
value="1"
>
<!--
<input type="hidden" name="questionIndex" value="<?php echo $data["questionIndex"]; ?>">
-->

</input>
<!--und so weiter es wird noch nicht erklärt wie es weiter geht-->
</form>
</body>
</html>