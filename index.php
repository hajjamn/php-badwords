<?php

$name = 'Nicola';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <main>
    <section>
      <div class="container">
        <form action="server.php" method="GET">
          <div class="mb-3">
            <label for="main-text" class="form-label">Your text</label>
            <textarea class="form-control" id="main-text" placeholder="Insert text here"></textarea>
          </div>
          <div class="mb-3">
            <label for="bad-word" class="form-label">Word to censor</label>
            <input type="text" class="form-control" id="bad-word" rows="3" placeholder="This word will appear as '***' ">
          </div>
        </form>
      </div>
    </section>
  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
  