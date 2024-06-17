<!DOCTYPE html>
<html>
    <head>
        <link href="/mfsl/style.css" type="text/css" rel="stylesheet">
        <title>Moscow Forestry Sciences Laboratory</title>
    </head>

    <body>
        <div class="content">
            <header>
                <a href="https://www.fs.fed.us/rmrs/" alt="Moscow Forestry Sciences Laboratory"><img src="/mfsl/images/logo_rmrs_tan_bkgd.gif" /></a>
                <div><h1>Moscow Forestry Sciences Laboratory</h1></div>
            </header>
            <?php include("content/navbar.php"); ?>
            <main class="banner">
                <div class="image-box">
                    <img class="slide" src="/mfsl/images/forest-1.jpg" />
                    <p class="slide-caption">This is the caption for the first image</p>
                    <img class="slide" src="/mfsl/images/forest-2.jpg" />
                    <p class="slide-caption">This is the caption for the second image</p>
                    <img class="slide" src="/mfsl/images/forest-3.jpg" />
                    <p class="slide-caption">This is the caption for the third image</p>
                    <img class="slide" src="/mfsl/images/forest-4.jpg" />
                    <p class="slide-caption">This is the caption for the fourth image</p>
                    <button class="button-left" onclick="prevSlide()">&#10094</button>
                    <button class="button-right" onclick="nextSlide()">&#10095</button>
                    <div class="nav-buttons">
                        <button class="slide-nav" onclick="goToSlide(0)"></button>
                        <button class="slide-nav" onclick="goToSlide(1)"></button>
                        <button class="slide-nav" onclick="goToSlide(2)"></button>
                        <button class="slide-nav" onclick="goToSlide(3)"></button>
                    </div>
                </div>
            </main>
            <footer>
                <?php include("content/footer.php"); ?>
            </footer>
        </div>

        <script src="/mfsl/scripts/slideshow.js"></script>
    </body>
</html>
