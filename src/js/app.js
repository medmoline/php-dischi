var $ = require('jquery');

$(document).ready(function() {

chiamata_get();

})

function chiamata_get(){
  // //chiamata ajax per portare i dati in get tra php e javascript
  $.ajax({
  'url': 'http://localhost:8888/playground/php-dischi/data.php',
  'method': 'GET',
  'success': function(data) {
      stampa_card(data);
      filtra_dati(data);


  },
  'error': function() {
    alert('si è verificato un errore');
  }
});
}

function stampa_card(array) {
  var source   = $("#entry-template").html();
  var template = Handlebars.compile(source);

  var todos = JSON.parse(array);
  for (var i = 0; i < todos.length; i++) {
    //struttura handlebars
    var context = {
      'copertina': todos[i].copertina,
      'album': todos[i].album,
      'artista':todos[i].artista,
      'anno':parseInt(todos[i].anno)

    };
    var html = template(context);
    //appendo al contenitore delle card la struttura di handlebars
    $('.card_container').append(html);
  }
}
