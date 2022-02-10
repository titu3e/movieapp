<?php
  $mysqli = new mysqli("ec2-54-87-112-29.compute-1.amazonaws.com","exgyzwldvsmlsd","ff712ac1d2213922f40be7a01167249fa7face3757ab2dcd095fbed0949ef00d","d8mad0m2evcfki");
 if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
