<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>view news items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php foreach ($news as $item) {
        echo '<h4>'.$item['title'].'</h4>';
        echo '<p>'.$item['text'].'</p>'.'<br><br>';
    } 
    echo $this->pagination->create_links().'<br>';
    ?>
</body>
</html>