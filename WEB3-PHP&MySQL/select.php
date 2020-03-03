<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '0312456',
  'opentutorials');

  //행이 하나일 경우
$sql = "SELECT * FROM topic WHERE id =19";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];

// 행이 여러개일 경우
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
  echo '<h1>'.$row['title'].'</h1>';
  echo $row['description'];
}

?>
