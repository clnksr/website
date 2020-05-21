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
        <div class="ideamenu left">
            <div class="ideamenu top left"><a class="menulink" href="a.html">pip</a></div>
            <div class="ideamenu middle left"><a class="menulink" href="socialmedia.php">social media</a></div>
            <div class="ideamenu bottom left"><a class="menulink" href="#">some things</a><div class="ideamenu illustration" > </div></div>
        </div>

        <div class="ideamenu right">
            <div class="ideamenu top right"><a class="menulink" href="cv.php">CV</a></div>
            <div class="ideamenu middle right"><a class="menulink" href="#">mood board</a></div>
            <div class="ideamenu bottom right"><a class="menulink" href="#hello">more things</a></div>
        </div>


    </div>


    <?php include('footer.php') ?>
</body>

</html>
