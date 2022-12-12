<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escapando del html</title>
</head>
<body>
  <p>Line created by tag html</p>
  <?php echo 'Line created by php'; ?>
  <p>another line created by tag html</p>
  <?php if (false): ?>
    <h1>TRUE</h1>
  <?php else: ?>
    <h1>FALSE</h1>
  <?php endif; ?>
</body>
</html>