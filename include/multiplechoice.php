<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"href="css/style.css">
</head>
    <title>Document</title>
</head>
<body>
    <?php include 'include/header.php';?>
    <?php include 'array.php';?>
    <?php include 'tools.php';?>
    <?php
    #(francisco) ich brauche noch eine Erklärung wofür dieses isset genau gedacht ist.
    if (isset($_POST["questionIndex"])) {
        $questionIndex = $_POST["questionIndex"];
    } else {
        //auf der index.php Seite gibt es noch keine $_POST werte
        $questionIndex = -1;
    }
    //um für den Test die questionIndex zu überschreiben
    $questionIndex = 2;

    $questionIndex++;
    $questionText = QUESTIONS[$questionIndex]["questionText"];

    prettyPrint($data)
    ?>
    <!--in diesem Dokument geht es darum, dass wir ein Template haben und in diser seite sollte ein Range slider verfügbar sein mit der abstufungen 0-5 un es sollten 
    dann noch beschriftungen oben dran sein und noch ein Weiter Knopf unten rechts und im Ideal fall eine Progress bar und alles mit bootstrap-->
    <div class="heightSpacerTop"></div>
  <div class="card w-50">

    <div class="card-h4">
      <p>Frage <?php echo $questionIndex +1;?></p>
      <h4><?php echo $data["questionText"];?></h4>
    </div>

  </div>


<div class="w-50 lable">
    <div class="input-group" action="#" method="post" onclick= return>
      <label class="container"> Gehen 
        <input type="checkbox" checked="checked">
      </label>

      <label class="container"> Wandern
        <input type="checkbox">
      </label>

      <label class="container"> Joggen
        <input type="checkbox">
      </label>

      <label class="container"> Rennen
        <input type="checkbox">
      </label>

      <label class="container"> Schwimmen 
        <input type="checkbox" checked="checked">
      </label>

      <label class="container"> Tanzen 
        <input type="checkbox">
      </label>

      <label class="container"> Aerobics
        <input type="checkbox">
      </label>

      <label class="container"> Pilates
        <input type="checkbox">
      </label>

      <label class="container"> Team Sport
        <input type="checkbox">
      </label>

      <label class="container"> Andere 
        <input type="checkbox">

      </label>
    </div>
  
  </div>

    <div class="form-button">
      <button class="btn btn-primary" type="submit">Weiter</button>
    </div>
    <br><br><br><br>

    <?php include 'include/footer.php';?>
</body>
</html>