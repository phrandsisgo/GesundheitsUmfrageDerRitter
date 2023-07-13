<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean | Question Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet"href="style.css">
</head>

<body>

<?php include 'header.php'?>

<div class="container-fluid">
   
    <div class="row">

        <div class="col-md-4"></div>

    <div class="col-md-4">
        <form>
            <div class="question">
                <h3>Nimmst du Nahrungsergänzungsmittel?</h3>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                <label class="form-check-label" for="radio1">Ja</label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                <label class="form-check-label" for="radio2">Nein</label>
            </div>
        </form>
    </div>
    
    <div class="col-md-4"></div>
  </div>
</div>

</body>
</html>

