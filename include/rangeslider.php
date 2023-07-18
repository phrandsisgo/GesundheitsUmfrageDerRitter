
<?php
    include 'array.php';
    include 'tools.php';

    #(francisco) ich brauche noch eine Erklärung wofür dieses isset genau gedacht ist.
    if (isset($_POST["questionIndex"])) {
        $questionIndex = $_POST["questionIndex"];
    } else {
        //auf der index.php Seite gibt es noch keine $_POST werte
        $questionIndex = -1;
    }

    //setze die Laufnummer auf die nächsten frage:
    $questionIndex++;
    $data = QUESTIONS[$questionIndex];

    prettyPrint($data)
?>

<div class="grey-background">
    <h3><?php echo $data["questionText"]?></h3>
</div>
<form action="question.php" class="mx-auto col-10 col-md-8 col-lg-6">
    <label>Sehr Wenig TODO: Bitte noch fertig beschriften.</label>
    <br>
    <input type="range" class="form-range" 
           min="<?php echo $data["min"]?>" max="<?php echo $data["max"]?>" >
    <!--button muss noch zu einem Input type verändert werden.-->
    <button>weiter</button>
</form>
