var $ = require('jquery');

$(document).ready(function() {
  alert('Ciao Mondo');
//   //dichiaro le variabili iniziai di handlebars
  var source   = $("#entry-template").html();
  var template = Handlebars.compile(source);
// //chiamata ajax per portare i dati in get tra php e javascript
  $.ajax({
  'url': 'http://localhost:8888/playground/php-dischi/data.php',
  'method': 'GET',
  'success': function(data) {
    // NB: devo usare JSON.parse perché il contenuto di data è una STRINGA (in formato json), NON è un oggetto json!!
    var todos = JSON.parse(data);
    for (var i = 0; i < todos.length; i++) {
      //struttura handlebars
      var context = {
        'copertina': todos[i].copertina,
        'album': todos[i].album,
        'artista':todos[i].artista,
        'anno':parseInt(todos[i].anno)

      };
      var html = template(context);
      $('.card_container').append(html);
    }

  },
  'error': function() {
    alert('si è verificato un errore');
  }
});

})
