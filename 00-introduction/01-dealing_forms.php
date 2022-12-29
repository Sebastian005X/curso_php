<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01 Manejando Formularios con php</title>
</head>
<body>
  <form action="01-dealing_forms.php" method="POST">
    <p>Your Name: <input type="text" name="name"></p>
    <p>Your Age: <input type="text" name="age"></p>
    <button type="submit">Submit</button>
  </form>
  <p>
    Hi <?php echo htmlspecialchars($_POST['name']) ?>.
    You are <?php echo (int)$_POST['age'] ?> years old.
    <?php echo $_REQUEST['name'] ?>
  </p>
  <!--current: https://www.php.net/manual/en/language.basic-syntax.phptags.php-->
</body>
</html>