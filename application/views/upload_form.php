<html>
<head>
<title>upload form</title>
</head>

<body>
<?php echo $error;?>
<?php echo form_open_multipart('news/upload');?>
<input type="file" name="userfile" id="file_upload" size="20">
<br><br>
<input type="submit" value="upload file">
</form>
</body>
</html>