<?php
session_start();
define('ROOT_DIR', __DIR__ );
echo ROOT_DIR;
$wd = dirname(__FILE__);
echo $wd;
echo __DIR__;
$d = dir(getcwd());
echo $d;

require ROOT_DIR . '/bin/starter.php';
//require ROOT_DIR . '/core/visitor_class.php';
//$user = new Visitor();
//$user->countIt();


?>
<!doctype html><html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="x-ua-compatible" content="IE=edge,chrome=1" http_equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="robots" content="index"/>
    <meta name="author" content="Yukai">

    <!-- Bootstrap CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Lucky DRESS clients</title>
</head>

<body>

<?=ROOT_DIR?>

<br>

hello

</body></html>
