<?php

$mainText = $_POST["main-text"];
$badWord = explode(",", ($_POST["bad-word"]));
$newText = str_replace($badWord, '***', $mainText, $count );

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Server</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <main>
    <section class="pt-5">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header"><strong>Il testo originale</strong></div>
              <div class="card-body">
                <p>
                  <?php echo $mainText ?>
                </p>
                <em>Il tuo testo contiene <?php echo strlen($mainText) ?> caratteri.</em>
              </div>
              </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header"><strong>Il nuovo testo</strong></div>
              <div class="card-body">
                <p>
                <?php echo $newText ?>
                </p>
                <em>Il tuo nuovo testo contiene <?php echo strlen($newText) ?> caratteri dopo aver effettuato <?php echo $count ?> sostituzioni.</em>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>