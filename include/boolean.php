<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean | Question Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet"href="css/style.css">
</head>

<body>


<?php
    include 'include/header.php';
    include "include/array.php";#bei mir gibt es den als include/array.php im root orner des Projektes
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

<div class="container-fluid">
   
    <div class="row">

        <div class="col-md-3"></div>

    <div class="col-md-6">
        <form>
            <div class="grey-background">
            <h6>Frage <?php echo $questionIndex +1; ?></h6>
                <p><?php echo $data["questionText"]; ?></p>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input " id="radio1" name="optradio" value="option1" checked>
                <label class="form-check-label" for="radio1">Ja</label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                <label class="form-check-label" for="radio2">Nein</label>
            </div>
        </form>
        <div class="button">
            <button class="btn btn-primary" type="button">Nexte Frage</button>
        </div>
    </div>
    
    <div class="col-md-3"></div>
  </div>
</div>

<?php include 'include/footer.php'?>

</body>
</html>

