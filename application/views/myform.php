<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My form</title>
  </head>
  <body>
    <br><br>
    <?php echo form_open('form'); ?>
      <h5>Username</h5>
      <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" >
      <?php echo form_error('username'); ?>
      <h5>Password</h5>
      <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50">
      <?php echo form_error('password'); ?>
      <h5>Password confirm</h5>
      <input type="password" name="confirm" value="<?php echo set_value('confirm'); ?>" size="50">
      <?php echo form_error('confirm'); ?>
      <h5>Email address</h5>
      <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50">
      <?php echo form_error('email'); ?>
      <br><br>
      <div class="">
      <input type="submit" name="submit" value="submit">
      </div>
  </form>
  </body>
</html>