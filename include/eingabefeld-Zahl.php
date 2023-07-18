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

  <div class="card w-50">
    <div class="card-h4">
    <h6>Frage <?php echo $questionIndex +1; ?></h6>
      <p><?php echo $data["questionText"]; ?></p>
    </div>
    <div class="input-group" action="#" method="post" onclick= return>
        <input type="number" class="form-control">
        <button class="btn btn-primary" type="button">Nexte Frage</button>
      </div>
  </div>
    
  </div>
    <?php include 'include/footer.php';?>
</body>
</html>