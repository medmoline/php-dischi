var $ = require('jquery');

$(document).ready(function() {
  //struttura per handlebars

  chiamata_get_init();

  //intercetto il cambio di valore della select con la funzione change
  $('.select').change(function() {
    //resetto l'html
    $('.card_container').html('');
    // recupero il valore selezionato
    var artista_selezionato = $(this).val();
    // console.log(artista_selezionato);
    //richiamo la funzione per filtrar
    chiamata_get_filtra();
  })

  //intecetto il click sul bottone
  $('.ordina').click(function() {
    //resetto l'html
    $('.card_container').html('');
    $.ajax({
      'url': 'ordina_dischi.php',
      'method': 'GET',
      'success': function(data) {
        var dischi_ordinati = JSON.parse(data);
        stampa_card(dischi_ordinati);
      },
      'error': function() {
        alert('si è verificato un errore');
      }
    });

  })

  function chiamata_get_init(){
    // //chiamata ajax per portare i dati in get tra php e javascript
      $.ajax({
      'url': 'tutti_dischi.php',
      'method': 'GET',
      'success': function(data) {
        //converto i dati presi da php
        var todos = JSON.parse(data);
        //ciclo l'array e stampo tutto a schermo
          stampa_card(todos);
          stampa_select(todos);
      },
      'error': function() {
        alert('si è verificato un errore');
      }
    });
  }

  function chiamata_get_filtra(){
    //effettuo chiamata ajax in get dove passerò in data il valore trovato nella select
    $.ajax({
      //passo l'url diverso dove ci sara il filtro per gli artisti
      'url': 'filtra_dischi.php',
      'method': 'GET',
      'data': {
        'artista':artista_selezionato
      },
      'success': function(data) {
        //applico l'object values in modo tale da ottenere solo i valori e non la chiave dell'array e converto i dati ricevuti da PHP con JSON
        var dischi_filtrati = Object.values(JSON.parse(data));
        stampa_card(dischi_filtrati);

      },
      'error': function() {
        alert('si è verificato un errore');
      }
    })
  }

  function  stampa_card(array)  {
    var source   = $("#entry-template").html();
    var template = Handlebars.compile(source);
    for (var i = 0; i < array.length; i++) {
      var disco = array[i];

      var context ={
        'copertina': disco['copertina'],
        'album':  disco['album'],
        'artista':  disco['artista'],
        'anno': disco['anno']
      }
      var html = template(context);
      $('.card_container').append(html);
    }
  }

  function stampa_select(array){
    var source_2 = $('#template_artista').html();
    var template_select = Handlebars.compile(source_2);
    //creo array vuoto che conterrà gli artisti senza doppioni
    var artisti = [];
    //ciclo per controllare se nell'array è già presente l'artista
    for (var i = 0; i < array.length; i++) {
      var disco = array[i];
      if(! artisti.includes(disco['artista'])){
        //se non è presente lo pushi nell'array
        artisti.push(disco['artista']);
      }
    }
    // console.log(artisti);
    //ciclo sull'array nuovo
    for (var i = 0; i < artisti.length; i++) {
      //creo struttura select con handlebars
      var context_2 = {
        'nome_artista' : artisti[i],
      }
      var html_select = template_select(context_2);
      //appendo tutto alla select
      $('.select').append(html_select);
    }
  }
})
