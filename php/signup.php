<?php
  //<!--Register-->
  require('../dbConnect.php');

  $name = ($_POST['registerName']);
  $pswd = ($_POST['registerPassword']);
  $email = ($_POST['registerMail']);

  $search_user = $database->prepare("SELECT ID FROM user WHERE user='$name '");
  $search_user->execute();
  $search_result = $search_user->get_result();

  if ($search_result->num_rows == 0) {
    $pswd = md5($pswd);
    $stmt = $database->prepare("INSERT INTO user(user, email, password) VALUES (?,?,?)");
    $stmt->bind_param("sss", $name, $email, $pswd);
    $stmt->execute();
    $stmt->close();
    echo json_encode("Dein Account wurde erfolgreich erstellt!");
  } else {
    echo json_encode("Der Benutzername ist leider schon vergeben!");
  }



 ?>