<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fourth task</title>
  </head>
  <body>
    <?php
      $a = array(3, 7, 10, 45, 15, 22, 36);
      $b = array(45, 6, 8, 22, 85, 67, 34);
      $c = array(); $n = 0;
      for ($i=0; $i < count($a) ; $i++) {
        for ($j=0; $j < count($b) ; $j++) {
          if ($a[$i]==$b[$j]) {
            $c[$n] = $a[$i]; $n++;
          }
        }
      }
      print_r ($c);
    ?>
  </body>
</html>
