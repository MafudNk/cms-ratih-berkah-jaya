<?php
include __DIR__ . '/../config/config.php';

$favicon = "$app_url/img/core-img/logo-transparant.png";

$style = "$app_url/style.css";
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BC86KSW5T4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-BC86KSW5T4');
    </script>
    <!-- Title -->
    <title>Ratih Berkah Jaya</title>

    <!-- Favicon -->
    <link rel="icon" href=<?php echo "$favicon"; ?>>

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href=<?php echo "$style"; ?>>

</head>