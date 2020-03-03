<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
      $coworkers = array('A', 'B', 'C', "D");
      echo $coworkers[1].'<br>';
      var_dump(count($coworkers));
      array_push($coworkers, 'E');
      var_dump($coworkers);
     ?>
  </body>
</html>
