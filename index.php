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

    <div class="container">
        <div class="row">
            <div class="col-10 grey-background">
                <h1>Check-up:</h1>
                <h2>richtig eingesetzt sehr sinnvoll</h2>
                <p>Willkommen bei der Gesundheitsumfrage der tapferen Ritter. Bitte geloben sie nichts anderes als die Wahrheit anzugeben beim ausfüllen unseren Formulares. Danach geben sie eine feierlich anerkannte Rückmeldung und ein Angebot wie 
                sie Ihr Leben verbessern können.<br>

                Danke sagt: Binyam der Magier, Sir Louis, Francisco der Weiser.
                </p>
            </div>
        </div>

        <div class="fragen-container">
            <p>Wie gesund bist du körperlich?</p>
        </div>
        <form>
            <label  class="form-label">nicht good</label>
            <label  class="form-label">solala</label>
            <label  class="form-label">gut</label>
            <input type="range" class="form-range" min="0" max="5" id="customRange">
        </form>
    

    </div>

    
    <p>Willkommen bei der Gesundheitsumfrage der tapferen Ritter. Bitte geloben sie nichts anderes als die Wahrheit anzugeben beim ausfüllen unseren Formulares. Danach geben sie eine feierlich anerkannte Rückmeldung und ein Angebot wie 
sie Ihr Leben verbessern können.
<br><br><br>
Danke sagt: Binyam der Magier, Sir Louis, Francisco der Weiser.</p>

    <h3>Fragestellung</h3>
    <p>antwortFeld</p>
    
    <?php include 'footer.php';?>
</body>
</html>