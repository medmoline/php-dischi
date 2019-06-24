<?php

include 'data.php';

  //applico il metodo usort con una funzione anonima dove comparo l'elemento anno_A con l'elemento anno_B
  usort($dischi, function($disco_a, $disco_b) {
    //ritorna vero o falso se se anno_A > disco_b o
    return $disco_a['anno'] > $disco_b['anno'] ? 1 : -1;
  });

  echo json_encode($dischi);
 ?>
