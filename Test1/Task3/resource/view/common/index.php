<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="../../resource/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/resource/dist/css/album.css" rel="stylesheet">
</head>
<body>
 <?php include __DIR__ . "/header.php"?>

 <main role="main">

     <?php
        if(!empty($result) && !empty($result['path'])){
            include $result['path'];
        }
     ?>
   
 </main>
 
 <?php include __DIR__ . "/footer.php"?>

</body>
</html>