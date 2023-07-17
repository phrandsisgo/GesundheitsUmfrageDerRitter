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
?>
<!-- END:HEADER -->

<div class="container my-4 text-start">
  <p class="mt-5">

      <?php 
        /*
          P03: Gib die ge-posteten Key-Value-Paare als Liste aus.
        */
        prettyPrint($_POST);
      ?>

      Willkommen <?php echo $_POST["name"]; ?>!<br>
      Deine Email-Adresse lautet <?php echo $_POST["email"]; ?>.<br>
      Ist die Schweiz in der EU: <?php echo $_POST["radio-01"]; ?>.<br>

      Du hast folgende Farben gewählt: 
      <?php 
      /*
        P04: Die ausgewählten Farbwerte herausfiltern und als einfache Liste 
        ausgeben. Es werden nur die Werte mit 'color-' im Schlüssel (Key) 
        erkannt. Die Liste wird durch Kommas getrennt.

        In der foreach-Schleife werden jeweils auch Farbwerte geprüft und
        die Variablen 'redSelected', 'whiteSelected', 'otherSelected' und
        'hasSelection' entsprechend auf true gesetzt. Ist die Auswahl falsch,
        dann wird ein kurzes Feedback ausgegeben.

        Für foreach siehe auch https://www.w3schools.com/php/php_looping_foreach.asp
        Wir verwenden die erweiterte Form von foreach ($_POST as $value) {},
        nämlich foreach ($_POST as $key => $value) {}.

        Für str_contains() siehe auch https://www.php.net/manual/en/function.str-contains.php
      */
      $colorCount = 0;
      $redSelected = false;
      $whiteSelected = false;
      $otherSelected = false;
      
      foreach ($_POST as $key => $value) {
        if (str_contains($key, 'color-')) {
          // Liste der gewählten Farben
          if ($colorCount > 0) echo ", ";
          echo "$value";
          $colorCount++;

          // Die gewählte Farbe erkennen
          if ($value == "rot") $redSelected = true;
          elseif ($value == "weiss") $whiteSelected = true;
          else $otherSelected = true;
        }
      }

      echo "<br>";

      // Ist die Auswahl falsch, dann wird ein kurzes Feedback ausgegeben.
      if ($redSelected == false || $whiteSelected == false || $otherSelected == true) {
        echo "<span style='color:red;'>Wo bist denn du in die Schule gegangen?</span>";
      }
      // correct: if ($redSelected == true && $whiteSelected == true && $otherSelected == false)

      // incorrect: if ( !($redSelected == true && $whiteSelected == true && $otherSelected == false) )

      // nach De Morgan:
      // incorrect: if ( $redSelected == false || $whiteSelected == false || $otherSelected == true )

      echo "<br><br>";

      /*
        P05: Zum gewählten Tier 'mammal' wird ein Feedback ausgegeben. Dazu verwenden wir
        switch() Verzweigungen.
      */
      $mammal = $_POST["mammal"];

      switch($mammal) {
        case "Rind":
           echo "<span style='color:green'>Jawohl, du Rindvieh!</span>";
           break;
        
        case "Pferd":
          echo "<span style='color:green'>Falsch gesattelt!</span>";
          break;

        case "Ziege":
          echo "<span style='color:blue'>Ziegenkäse ist fein!</span>";
          break;

        case "Mensch":
          echo "<span style='color:yellow'>Auch du bist ein Tier!</span>";
          break;

        default:
          echo "<span style='color:red'>Sicher NICHT!</span>";
      }
      

      echo "<br><br>";

      /*
        P06: Im "comment"-Feld prüfen wir, ob gewisse Schimpfwörter wie
        "fuck" oder "arschloch" verwendet wurden und überschreiben
        jedes dieser Schimpfwörter mit "#%$@". Der Kommentar darf nicht
        länger als 20 Buchstaben sein.

        Verwendete PHP Hilfsfunktionen: strlen(), strtolower(), str_ireplace()
      */
      $comment = $_POST["comment"];
      $blacklist = array("Fuck", "Arschloch", "Chupa", "HS");

      foreach ($blacklist as $swearWord) {
          // str_replace() ist "case sensitive"
          // str_ireplace() ist "case insensitive" mit "i" für "ignore case"
          $comment = str_ireplace($swearWord, "#%$@", $comment);
      }

      echo "<br><br>Dein Kommentar lautet: $comment";

      // case-insensitive




      
      ?><br>
      

  </p>
</div>

<!-- FOOTER -->
<?php include "./includes/footer.php"; ?>
<!-- END:FOOTER -->

</body>

</html>