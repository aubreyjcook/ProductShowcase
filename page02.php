<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Product Showcase</title>
    <meta name="description" content="Product Showcase by Aubrey J Cook">
    <meta name="author" content="Aubrey J Cook">

    <!-- Meta Data
  -------------------------------------------------- -->
    <meta property="og:title" content="Product Showcase by Aubrey J cook" />
    <meta property="og:description" content="Product Showcase Lab by Aubrey J Cook">

    <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='https://fonts.googleapis.com/css?family=Cousine|Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="JavaScript/javascript.js"></script>

    <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
        <header>
            <?php include 'header.php';?>
        </header>
        <nav>
            <?php include 'nav.php';?>
        </nav>
        <main>
            <p style="clear: both; text-align: center;">
                Plugins in Brackets provide additional functionality that otherwise would not be available in the default version of Brackets. Plugins allow you to customize Brackets to your liking, adding useful tools, or simply changing the appearance of the software workspace to suit you.
            </p>
            <p id="textBlock" style="text-align:center;">
                Hover over a plugin for some information about it.
            </p>
            <div>
                <div class="imgDisplayInline">
                    <img src="images/emmet.png" id="changesize1" alt="screenshot of emmet website" title="screenshot of emmet website" height="125" width="300" onmouseover="change07()" />
                </div>

                <div class="imgDisplayInline">
                    <img src="images/beautify.png" id="changesize2" alt="screenshot of beautified text in brackets" title="screenshot of beautified text in brackets" height="125" width="300" onmouseover="change08()" />
                </div>

                <div class="imgDisplayInline">
                    <img src="images/spellcheck.png" id="changesize3" alt="screenshot of brackets spellcheck feature" title="screenshot of brackets spellcheck feature" height="125" width="300" onmouseover="change09()" />
                </div>
            </div>
        </main>
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </div>

    <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>