<?php
function genereerFibonacciStream($n) {
  $a = 1;
  $b = 2;

  for ($i = 0; $i < $n; $i++) {
    // Shows the current number and pauses.
    yield $a;

    // Calculates the next number in the next round.
    $volgend = $a + $b;
    $a = $b;
    $b = $volgend;
  }
}

foreach (genereerFibonacciStream(6) as $getal) {
  echo $getal . PHP_EOL;
}
?>