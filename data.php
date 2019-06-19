<?php
//definisco array con gli artisti
$artisti = [
  [
  'copertina'=>'https://www.covercentury.com/covers/audio/q/Queen_-_Live_At_Wembley__86-front.jpg',
  'album'=>'Live At Wembley',
  'artista'=>'Queen',
  'anno'=>'1986'
  ],
  [
    'copertina'=>'https://www.covercentury.com/covers/audio/i/in-rainbows_radiohead_30292277.jpg',
    'album'=>'In Rainbows',
    'artista'=>'Radiohead',
    'anno'=>'2007'
  ],
  [
    'copertina'=>'https://www.covercentury.com/covers/audio/n/neffa-i-messag_neffa_31133709.jpg',
    'album'=>'Neffa e i messaggeri della dopa',
    'artista'=>'Neffa',
    'anno'=>'1995'
  ],
  [
    'copertina'=>'https://www.covercentury.com/covers/audio/p/Pink_Floyd_-_Dark_Side_Of_The_Moon-front.jpg',
    'album'=>'Dark side of the moon',
    'artista'=>'Pink Floyd',
    'anno'=>'1973'
  ],
  [
    'copertina'=>'https://www.covercentury.com/covers/audio/i/into-the-wild_eddie-vedder_240732.jpg',
    'album'=>'Into the Wild',
    'artista'=>'Eddie Vedder',
    'anno'=>'2007'
  ],
  [
    'copertina'=>'https://www.covercentury.com/covers/audio/l/Led_Zeppelin_-_Led_Zeppelin_4-front.jpg',
    'album'=>'Led Zeppelin 4',
    'artista'=>'Led Zeppelin',
    'anno'=>'1971'
  ],
  [
    'copertina'=>'https://www.covercentury.com/covers/audio/h/hail-to-the-thief-l_radiohead_1048065.jpg',
    'album'=>'Hail to the thief',
    'artista'=>'Radiohead',
    'anno'=>'2003'
  ],
  [
    'copertina'=>'https://www.covercentury.com/covers/audio/n/nevermind_nirvana_29608890.jpg',
    'album'=>'Nevermind',
    'artista'=>'Nirvana',
    'anno'=>'1991'
  ],
  [
    'copertina'=>'https://www.covercentury.com/covers/audio/l/london-calling_the-clash_29855046.jpg',
    'album'=>'London Calling',
    'artista'=>'The Clash',
    'anno'=>'1979'
  ],
  [
    'copertina'=>'https://www.covercentury.com/covers/audio/b/bob_marley_-_legend_a.jpg',
    'album'=>'Legend',
    'artista'=>'Bob Marley',
    'anno'=>'1984'
  ]
];


  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  // restituisco ad ajax in formato json l'array dei todo
    echo json_encode($artisti);
  }
 ?>
