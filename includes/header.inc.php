<!doctype html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Metamorphous' rel='stylesheet' type='text/css'>
    <?php
    foreach (array_merge(glob('js/*.js'), glob('js/plugins/*.js')) as $file)
        echo '<script src="'.$file.'"></script>';
    foreach (glob('css/*.css') as $file)
        echo '<link rel="stylesheet" type="text/css" href="'.$file.'" />';
    ?>

</head>
<body id="wod">
