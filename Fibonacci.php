<?php
function genereerFibonacciStream($n) {
  $a = 1;
  $b = 2;

  for ($i = 0; $i < $n; $i++) {
    // Geeft het huidige getal aan en pauzeert het
    yield $a;

    // Berekent het volgende getal van de volgende ronde
    $volgend = $a + $b;
    $a = $b;
    $b = $volgend;
  }
}

foreach (genereerFibonacciStream(6) as $getal) {
  echo $getal . PHP_EOL;
}
?>