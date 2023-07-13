<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'header.php';?>
    <!--in diesem Dokument geht es darum, dass wir ein Template haben und in diser seite sollte ein Range slider verfügbar sein mit der abstufungen 0-5 un es sollten dann noch beschriftungen oben dran sein und noch ein Weiter Knopf unten rechts und im Ideal fall eine Progress bar und alles mit bootstrap-->
    <div class="heightSpacerTop"></div>



<div class="row">
<div class=col>
    <br>

</div>
<div class="col-6">
<h3>Hast du das Gefühl, zu wenig, genügend
oder viel zu viel zusätzliche körperliche
Aktivitäten zu betreiben? </h3>
<form action="Rangequestion" class="mx-auto col-10 col-md-8 col-lg-6">
    <label for=<?php $fRangeQuestion?>>Sehr Wenig</label>
    <br>
    <input type="range" class="form-range" min="0" max="5" style="background-color: blue; height: 4px;">
</form>
</div>
<div class="col">

</div>
</div>
    <?php include 'footer.php';?>

</body>
</html>