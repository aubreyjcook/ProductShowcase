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
  <meta property="og:title" content="Product Showcase by Aubrey J cook"/>
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
  <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
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
        <p style="clear: both; text-align: center; padding: 25px;">
            There comes a time in any web developer's life that they must set aside mediocre text editors like notepad and start using far more productive tools. Brackets is a free IDE that gives the user ultimate control over their HTML, CSS, and Javascript editting.
        </p>
        <p style="text-align: left; width: 35%; float: left;">
            You can rely on Brackets for all your front-end needs, it supports numerous features and extensions that make working on the web easier. Brackets can be further customized beyond it's default settings to support any features you may require. Brackets is open-source, meaning it is continually updated, and it's free as 'freedom' not as in free beer.
        <br><br>
            Brackets can be especially useful at the beginning of a workflow, converting wireframes and mock ups to actual documents in HTML and CSS before converting to PHP.
        </p>
        
        <div class="left">
           <a href="#large"><img src="images/brackets01.png" alt="" height="125" title="" onclick="change01()"/></a><br>
           <a href="#large"><img src="images/brackets02.png" alt="" height="125" title="" onclick="change02()"/></a><br>
           <a href="#large"><img src="images/brackets03.png" alt="" height="125" title="" onclick="change03()"/></a><br>
        </div>
        
        <div class="right" style="margin-top: 40px;">
           <img id="large" src="images/brackets01.png" alt=""/>
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
