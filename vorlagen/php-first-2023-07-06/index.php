<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- HEADER -->
<?php 
    include "./includes/tools.php";
    include "./includes/header.php"; 
    include "./includes/question-templates.php";
?>
<!-- END:HEADER -->

<div class="container my-4 text-left">

<p>
    <?php
        /*
          P01: Setze die Variable 'title' zu "Bitte fülle die Felder oder wähle aus."
          Gib den Wert von 'title' in die Seite aus (fett hervorgehoben).
        */
        $title = "Bitte fülle die Felder oder wähle aus.";
        echo "<strong>$title</strong>"; // the same: echo "<strong>" . $title . "</strong>";
    ?>
</p>

<!-- FORMULAR -->
<form action="result.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br>

    <?php  
      yesNoQuestion(
        "01", 
        "Ist die Schweiz in der EU?", 
        array("ja", "nein"), 
        1
      );
    ?>

    <p>&nbsp;</p><!-- Separator -->
    <p>Welche Farben hat die Schweizer Fahne?</p>
    <input type="checkbox" id="color1" name="color-red" value="rot">
    <label for="color1">Rot</label><br>
    <input type="checkbox" id="color2" name="color-yellow" value="gelb">
    <label for="color2">Gelb</label><br>
    <input type="checkbox" id="color3" name="color-blue" value="blau">
    <label for="color3">Blau</label><br>
    <input type="checkbox" id="color4" name="color-white" value="weiss">
    <label for="color4">Weiss</label><br><br>
    
    <p>&nbsp;</p><!-- Separator -->
    <p>Welches ist dein Lieblingstier?</p>
    <select class="form-select" id="inputGroupSelect01" name="mammal">
      <option selected>Auswählen...</option>

      <?php
        /*
          P02: Generiere die select-Optionen "Rind", "Pferd", "Ziege" und "Mensch" mit 
          einer while-Schlaufe. Verwende für die 'mammals' einen indexierten Array.

          Der Optionsname und der angezeigte Optionswert sind jeweils immer 
          genau gleich. Ich könnte pro Option folgendes verwenden ($m für 'mammal'):
          echo '<option value="' . $m . '">' . $m . '</option>';

          Es ist aber kürzer und einfacher im String Template Format
          mit Double-Quotes. Preis: Ich muss innerhalb der "" mit 
          Single-Quotes arbeiten.
        */
        $mammals = array("Rind", "Pferd", "Ziege", "Mensch", "R2D2");
        $i = 0;
        $length = count($mammals);

        while ($i < $length) {
          $mammal = $mammals[$i];
          echo "<option>$mammal</option>";

          // nächster Durchgang
          $i = $i + 1; // abgekürzt: $i++;
        }
      ?>
    </select>

    <br><br>

    <label for="name">Kommentar - bitte ohne Schimpfwörter, maximal 20 Buchstaben:</label>
    <input type="text" id="comment" name="comment"><br>

    <br><br>

    <input type="submit" value="Abschicken">
</form>
<!-- END:FORMULAR -->

</div>

<!-- FOOTER -->
<?php include "./includes/footer.php"; ?>
<!-- END:FOOTER -->

</body>

</html>