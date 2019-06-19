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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js" charset="utf-8"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <title></title>
  </head>
  <body>
  <!-- MILESTONE A
    <div class="card_container">
    <-!?php
      // foreach ($artisti as $key => $value) {?>
        <div class="card">
          <div class="img_container">
            <img src="<-!?php echo $value['copertina']; ?>" alt="">
          </div>
          <div class="content">
            <ul>
              <li><-!?php echo $value['album']; ?></li>
              <li><-!?php echo $value['artista']; ?></li>
              <li><-!?php echo $value['anno']; ?></li>
            </ul>
          </div>
        </div>
      <-!?php };

        ?>

    </div>
    -->
    <!--MILESTONE B-->
    <header>
      <div class="header_container">
        <div class="container">
          <div class="logo">
            <img src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="">
          </div>
        </div>
        </div>

    </header>
    <section class="grey">
      <div class="card_container">
        <!--Struttura Handlebars-->
      </div>
    </section>
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="card">
        <div class="img_container">
          <img src="{{copertina}}" alt="">
        </div>
        <div class="content">
          <ul>
            <li>Album: <span>{{album}}</span></li>
            <li>Artista: <span>{{artista}}</span></li>
            <li>Anno: <span>{{anno}}</span></li>

          </ul>
        </div>
      </div>
    </script>
     <script src="public/js/app.js" charset="utf-8"></script>
  </body>
</html>
