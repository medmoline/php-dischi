<!--Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi:
1 - Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
2 - Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso handlebars.
Utilizzare: Html, Sass, JS, jQuery, handlebars, Php

I dati da visualizzare per ogni disco sono:
- immagine di copertina
- titolo album
- nome artista
- anno d'uscita
-->
<?php
include 'data.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="public/css/app.css" type="text/css">
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title></title>
  </head>
  <body>
    <div class="card_container">
    <?php
      foreach ($artisti as $key => $value) {?>
        <div class="card">
          <div class="img_container">
            <img src="<?php echo $value['copertina']; ?>" alt="">
          </div>
          <div class="content">
            <ul>
              <li><?php echo $value['album']; ?></li>
              <li><?php echo $value['artista']; ?></li>
              <li><?php echo $value['anno']; ?></li>
            </ul>
          </div>
        </div>
      <?php };

        ?>

    </div>
     <script src="src/js/app.js" charset="utf-8"></script>
  </body>
</html>
