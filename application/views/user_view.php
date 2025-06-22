<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <?php print_r($user_info); ?>
    <ul>
    <?php foreach($list as $val) {?>
      <li><?php echo $val; ?></li>
        <?php }?>
        </ul>
</body>
</html>