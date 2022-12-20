<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP test</title>
</head>
<body>
  <?php echo '<p>Hello World</p>' ?>
  <!-- <?php phpinfo() ?> -->
  <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
      echo 'You are using Chrome with browser';
    }
    // current: https://www.php.net/manual/en/tutorial.forms.php
  ?>
</body>
</html>