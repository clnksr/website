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
            <a class="top left menubox celine" href="a.html"></a>
            <a class="un middle left menubox" href="socialmedia.php">social media</a>
            <a class="un bottom left menubox" href="#">some things</a>
        </div>

        <div class="ideabox right">
            <a class="un top right menubox" href="cv.php"> CV</a>
            <a class="un middle right menubox" href="#">mood board</a>
            <a class="un bottom right menubox" href="#hello">
                <div class="ideamenu illustration"> </div>
                more this
            </a>

        </div>
    </div>


    <a id="switch">
        <img id="switchon" src="images/switchon.svg" height="40px" style="display: none;">
        <img id="switchoff" src="images/switchoff.svg" height="40px">

    </a>

    <?php include('footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
