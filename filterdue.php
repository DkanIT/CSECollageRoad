<?php

if(isset($_POST['month'])) {
  $month = date('Y-m',strtotime($_POST['month'].'-01'));
  header("Location:AdminDues.php?month=$month");
}
else{
  $month = date('Y-m');
  header("Location:AdminDues.php?month=$month");
}

 ?>
