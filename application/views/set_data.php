<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set_datah</title>
</head>
<body>
    <h1>Set Session</h1>
    <form action="<?php echo base_url('/user/setsession') ?>" method="post">
        Name: <input type="text" name="username">
        <input type="submit" name="submit" value="ADD">
    </form>
    
</body>
</html>