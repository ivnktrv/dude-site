<?php $allowed_routes = ['/'];
if (!in_array($_SERVER['REQUEST_URI'], $allowed_routes)) {
    include('notfound.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/favicon.ico">
        <title>ЧУВАААААААК</title>
    </head>
    <body>
        <br>
        <center>
            <video src="videos/1.mp4" controls="control autoplay"></video> 
        </center>

        <br><br><br><br>
        <div id="counter">
            <center>
                <?php include('counter.php'); ?>
            </center>
        </div>
    </body>
</html>