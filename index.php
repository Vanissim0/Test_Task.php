<?php

class isCorrect
{
  public function __construct($string)
  {
    $this->new_string = $string;
    $parts = str_split($this->new_string);


    $counter = 0;

    $counts1 = array_count_values($parts);
    $count1 = $counts1["{"];

    $counts2 = array_count_values($parts);
    $count2 = $counts2["}"];


    $counter = $count1 - $count2;
    if ($counter !== 0) {
      $counter = "некорректнный";
    } else {
      $counter = "корректный";
    };

    echo ("Код $counter");
  }
}

$isCorrect2 = new isCorrect("{{lajkdhf{adfa}{}adfasdfadf{}}}");
