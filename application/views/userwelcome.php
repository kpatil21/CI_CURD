<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set_datah</title>
</head>
<body>
    <h1>Welcome User: <?php echo $this->session->userdata('USER_NAME'); ?></h1>
    <a href="<?php echo base_url('user/setdata'); ?>">LogIn</a>
    <a href="<?php echo base_url('user/sessionout'); ?>">Logout</a>
     <a href="<?php echo base_url('user/killsession'); ?>">Session destroy</a>
</body>
</html>