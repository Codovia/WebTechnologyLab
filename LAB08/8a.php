<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiter Counter</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            text-align:center;
            margin-top: 50px;
        }
        h1{
            color:#333;
        }
        p{
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <?php
        $file="counter.txt";
        $count=file_exists($file) ? (int)file_get_contents($file) :0;
        file_put_contents($file, ++$count);
    ?>
    <h3>Nandan Naik - 4MW24CS402</h3>
    <h1>Welcome to Our Website!</h1>
    <p>You are visitor number: <strong><?php echo $count; ?></strong></p>
</body>
</html>