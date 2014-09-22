<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/plugins/jquery.sha256.min.js" type="text/javascript"></script>
    <?php  include 'conf.php'; ?>
    <link href='http://fonts.googleapis.com/css?family=Special+Elite|Open+Sans' rel='stylesheet' type='text/css'>
    <?php foreach (glob('js/*.js') as $file)  {
        echo '<script src="' . $file . '" type="text/javascript"></script>';
    } ?>


</head>
<body>