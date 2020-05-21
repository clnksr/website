<!DOCTYPE html>

<head>
    <!-- otherwise the ä ü é ... look weird -->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <!-- title -->
    <title><?php echo $title ?: 'Céline Kaiser' ?></title>

    <!-- styles -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Muli:wght@500&family=Noto+Serif:wght@700&family=Playfair+Display:wght@900&display=swap" rel="stylesheet">


    <!-- to define which stylessheets you want, use an "eckige-klamme" notation:
            $styles = ['hello.css', 'my-cv.css', 'another.css' ];
    -->
    <?php for($i = 0; $i < count($styles); ++$i) { ?>
    <link href="styles/<?php echo $styles[$i] ?>" rel="stylesheet">
    <link href="ideamenu/<?php echo $styles[$i] ?>" rel="stylesheet">
    <?php } ?>
</head>
