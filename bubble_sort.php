<?php
for($i = 1; $i<10; $i++)
{
  $numbers[]=rand(1,100);
}
var_dump($numbers);


function bubble_sort($numbers)
{

for ($counter = 0; $counter < count($numbers); $counter++)
  {
  for ($num = 0; $num < count($numbers)-1; $num++)
  {
    $length = $num + 1;
    $first = $numbers[$num];
    if($numbers[$length] < $first)
    {
        $temp = $first;
        $numbers[$num] = $numbers[$length];
        $numbers[$length] = $temp;
    }
  }
}
var_dump($numbers);
}
bubble_sort($numbers);

?>
