var $ = require('jquery');

$(document).ready(function() {
  //struttura per handlebars
  var source   = $("#entry-template").html();
  var template = Handlebars.compile(source);
  chiamata_get();

  //intercetto il click sul bottone
  $('.btn').click(function() {
    $('.card_container').html('');
    var testo = $('.search').val();
    search(testo);
  })


  function chiamata_get(){
    // //chiamata ajax per portare i dati in get tra php e javascript
      $.ajax({
      'url': 'http://localhost:8888/playground/php-dischi/data.php',
      'method': 'GET',
      'success': function(data) {
        //converto i dati presi da php
        var todos = JSON.parse(data);
        //ciclo l'array e stampo tutto a schermo 
        for (var i = 0; i < todos.length; i++) {
          var todo = todos[i];
          stampa_card(todo);
        }
      },
      'error': function() {
        alert('si è verificato un errore');
      }
    });
  }

  function stampa_card(array) {
    //struttura handlebars per card
    var context ={
      'copertina':array.copertina,
      'artista':array.artista,
      'album':array.album,
      'anno':array.anno
    }
    var html = template(context);
    $('.card_container').append(html);

  }
//funzione per cercare album e testi
  function search(testo){
      $.ajax({
      'url': 'http://localhost:8888/playground/php-dischi/data.php',
      'method': 'GET',
      'success': function(data) {
        //converto i dati presi da php
      var todos = JSON.parse(data);
      //ciclo tutto l'array
      for (var i = 0; i < todos.length; i++) {
        var todo = todos[i];
        //variabile per non convertire l'album in minuscolo
        var album_cors = todo.album.toLowerCase();
        //identica variabile per l'artista
        var artista_cors = todo.artista.toLowerCase();
        //se l'album è incluso
        if (album_cors.includes(testo)) {
          //stampi tutto
            stampa_card (todo);
          }
          else if (artista_cors.includes(testo)) {
            //altrimenti se è incluso negli artisti stampi tutto
            stampa_card (todo);
          }
        }
      },
      'error': function() {
        alert('si è verificato un errore');
      }
    });
  }

})
