<?php
$conn = mysqli_connect('localhost', 'root', '0312456', 'opentutorials');

settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id']),
  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  'profile'=>mysqli_real_escape_string($conn, $_POST['profile'])
);

$sql = "
  UPDATE author
  SET
    name = '{$filtered['name']}',
    profile = '{$filtered['profile']}'
  WHERE
    id = {$filtered['id']}
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '에러 발생';
  error_log(mysqli_error($conn));
}else{
  header('Location: author.php?='.$filtered['id']);
}
?>
