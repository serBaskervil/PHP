<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>First task</title>
  </head>
  <body>
    <?php
      $arr = array(5, 6, 70, 36, 75, 12);
      $Summ;
      for ($i=0; $i < count($arr); $i++) {
        $Summ += $arr[$i];
      }
      echo $Summ;
    ?>
  </body>
</html>
