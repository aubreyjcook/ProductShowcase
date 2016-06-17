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
            <p style="clear: both; text-align: center; padding: 10px;">
                Brackets supports the features that really make writing your code painless.
            </p>
            <p style="text-align: left; width: 45%; float: left;">
                Brackets supports syntax highlighting. This is extremely helpful in increasing the readability of your code. Syntax highlighting applies coloring to code based on applicable tags, which can help seperate the types of code inside a document.
                <br>
                <br> Brackets supports multiple viewing panels. Multiple panels in your workspace means you can open more than one document in your editor, this is exceptionally helpful when editing a HTML or PHP document and it's linked CSS or Javascript filed in the other panel. There is no need to change tabs or reopen another file since everything is right in your workspace.
                <br>
                <br> Brackets supports plugins. Plugins are addons that extend the functionality of Brackets in any way you might want, plugins are easy to install or toggle through Brackets' plugin options and are lightweight.
            </p>

            <div>
                <img id="large" src="images/brackets04.png" alt="" />
            </div>

            <div style="display: inline; float: right;">
                <div class="imgDisplayInline">
                    <a href="#large">
                        <img src="images/brackets04.png" alt="screenshot of brackets code" height="125" width="400" title="screenshot of brackets code" onclick="change04()" />
                    </a>
                </div>
                <div class="imgDisplayInline">
                    <a href="#large">
                        <img src="images/brackets05.png" alt="screenshot of brackets split view" height="125" width="400" title="screenshot of brackets split view" onclick="change05()" />
                    </a>
                </div>
                <div class="imgDisplayInline">
                    <a href="#large">
                        <img src="images/brackets06.png" alt="screenshot of brackets plugin window" height="125" width="400" title="screenshot of brackets plugin window" onclick="change06()" />
                    </a>
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