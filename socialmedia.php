<?php 

// We define the variables that are in `head.php`.
$title="CV"; // by default is always "Celine Kaiser"
$styles=[ "styles.css", "social.css" ];

?>

<?php // if ($_GET['p'] !== '94693dccabc58fa3d18e1975aa30472766fa8b33') { die('wrong password'); } ?>


<!-- don't forget to include the head -->
<?php include('head.php') ?>

<body>
    <?php include('header.php') ?>


    <div class="socialmediabox">

        <a href="https://web.facebook.com/celinskyy" target="_blank" class="icon facebook">
            <span class="link">
                Facebook
            </span>
        </a>
        <a href="https://www.instagram.com/naanbrot/" target="_blank" class="icon instagram">
            <span class="link">
                @naanbrot
            </span>
        </a>
        <a href="https://www.pinterest.ch/clnksr/" target="_blank" class="icon pinterest">
            <span class="link">
                Pinterest
            </span>
        </a>
        <a href="https://www.linkedin.com/in/c%C3%A9line-kaiser-873a32140/" target="_blank" class="icon linkedin">
            <span class="link">
                LinkedIn
            </span>
        </a>


    </div>



    <!--    <a data-pin-do="embedUser" data-pin-lang="de" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/clnksr/"></a>-->
    <!--    <script async defer src="//assets.pinterest.com/js/pinit.js"></script>-->


</body>

</html>
