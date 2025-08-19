<?php
for ($i = 0; $i < 4; $i++) {
  echo $i;
}
echo '<br />';


for ($a = 1; $a <= 5; $a++) {
  echo $a * 2 . '<br />';
}


$i = 0;
while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}


$count = 0;
while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}


$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
  }
  echo $i;
  $i++;
}
echo '<br />';


$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
  }
  echo $i;
  $i++;
}
echo '<br />';


$count = 0;
while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}


$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i < 5);


$num = 0;
do {
  echo 'num = ' . $num .'<br  />';
  $num++;
} while ($num < 3);


$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";
for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } elseif ($i % 3 == 0) {
    echo $Fizz;
  } elseif ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}
echo '<br />';


for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo '<br />';
}