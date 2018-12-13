<html>
<head>
<title>upload success page</title>
</head>

<body>
    <h3>your file was successfully uploaded</h3>
    <ul>
    <?php foreach($upload_data as $item => $value):?>
    <li><?php echo $item ?>:<?php echo $value ?></li>
    <?php endforeach; ?>
    </ul>
    <p> <?php echo anchor('upload', 'Upload another file');?></p>
   
    <img src="<?php echo base_url().'upload/'.$upload_data['file_name'];?>" alt="" width="500" height="400">
</body>
</html>