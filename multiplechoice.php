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
    <?php include 'header.php';?>

  <div class="card w-50">

    <div class="card-h4">
      <h4>Welche zusätzliche körperliche Aktivität
          betreibst du am meisten?
      </h4>
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

    <?php include 'footer.php';?>
</body>
</html>