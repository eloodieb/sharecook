<?php

include_once('database.php');

function getAdmin($username, $password)
{

  $db = dbConnect();
  $admin = $db->prepare('SELECT id FROM users WHERE username = :username AND password =  :password');
  $admin->execute(
    array(
      "username" => $username,
      "password" => $password,
    )
  );

  if ($admin->rowCount() == 1) {
    $row = $admin->fetch();
    return $row['id'];
  } else {
    return -1;
  }
}
