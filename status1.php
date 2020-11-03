<?php
  session_start();
  require('sql.php');
  require('../function.php');  

  $id = $_POST['id'];
  $status = $_POST['status'];


  update_status($id, $status, $pdo);
  set_flash_message('success', 'Статус изменен!');
  redirect_to('../page_profile.php?id='.$id);