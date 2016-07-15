<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Third task</title>
  </head>
  <body>
    <?php
        $unsorted = array(43,21,2,1,9,24,2,99,23,8,7,114,92,5);
        function quick_sort($array)
        {
        $length = count($array);
        if($length <= 1){
          return $array;
        }
        else{
          $pivot = $array[0];
          $left = $right = array();
          for($i = 1; $i < count($array); $i++) {
            if($array[$i] < $pivot){
              $left[] = $array[$i];
            } else{
              $right[] = $array[$i];
            }
          }
          return array_merge(quick_sort($left), array($pivot), quick_sort($right));
        }
        }

        $sorted = quick_sort($unsorted);
        print_r($sorted);
    ?>
  </body>
</html>
