<?php
     

  foreach(range(1, 100) as $number) {
    if ($number % 3 != 0 && $number % 5 != 0) {
    echo $number . '<br>';
    continue;
   }
    if ($number % 3 == 0) echo 'Santosa';
    if ($number % 5 == 0) echo 'Bandung';
    echo '<br>';
  }

?>