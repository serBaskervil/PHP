<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Second task</title>
  </head>
  <body>
    <?php
      $arr = array(30, 15, 95, 22, 45, 60, 7);
      $max_el = $arr[0]; $min_el = $arr[0];
      for ($i=0; $i < count($arr); $i++) {
        if ($arr[$i] > $max_el) {
          $max_el = $arr [$i];
        } elseif ($arr[$i] < $min_el) {
          $min_el = $arr [$i];
        }
      }
      echo "max element = ".$max_el."min element = "".$min_el;
    ?>
  </body>
</html>
