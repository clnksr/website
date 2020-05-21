<?php 

// $title="Céline Kaiser"; // by default is always this
$styles = [ "styles.css", "ideamenu.css" ]


?>




<?php include('head.php') ?>

<body>
    <?php include('header.php') ?>

    <!-- this is just a tag like a <div> (remember, everything is a div: <header>, <footer>, <div>, <span>, <article> ... -->
    <!-- but it's better for SEO (and for you) because it's easy to know what the content will be: Text-->
    <div class="overalldiv">
        <div class="ideabox left">
            <a class="top left menubox" href="a.html">pip</a>
            <a class="middle left menubox" href="socialmedia.php">social media</a>
            <a class="bottom left menubox" href="#">some things</a>
        </div>

        <div class="ideabox right">
            <a class="top right menubox" href="cv.php">CV</a>
            <a class="middle right menubox" href="#">mood board</a>
            <a class="bottom right menubox" href="#hello">
                <div class="ideamenu illustration"> </div>
                more this
            </a>

        </div>
    </div>


    </div>


    <?php include('footer.php') ?>
</body>

</html>
