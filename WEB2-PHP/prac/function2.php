<!DOCTYPE html>
<html lang="en" dir="ltr">
<html>
  <head>
    <title>WEB-html</title>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic(){
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
      }
      basic();
     ?>
     <h2>parameter &amp; argument</h2>
     <?php
     function sum($left, $right){
       print($left+$right);
     }
     sum(2,4);
     ?>

     <h2>return</h2>
     <?php
     function sum2($left,$right){
       return $left+$right;
     }
     print(sum2(2,4));
     file_put_content('result.txt', sum2(2,4));
      ?>
  </body>
</html>
