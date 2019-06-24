<?php
//come prima cosa includo il file data.php per avere i dati
include 'data.php';

//variabile per il file in GET
$artista_selezionato =$_GET['artista'];
//creo array vuoto dove andranno i dischi trovati dell'artista
$dischi_artista = [];
//foreach che cicla tutto l'array trovato
foreach ($dischi as $disco) {
  //se il dato passato in GET(artista_selezionato) è uguale all'elemento artista ciclato nell'array $dischi
  if($disco['artista'] == $artista_selezionato) {
    //aggiugi l'intero elemento all'interno dell'array
    $dischi_artista[] = $disco;
  }
}
echo json_encode($dischi_artista);
 ?>
