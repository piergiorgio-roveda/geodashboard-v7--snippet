<!doctype html>
<html lang="en-US">
  <head>

    <!-- META -->
    <?php require("./public/page__meta.php"); ?>
    <!-- META SEO -->
    <?php require("./public/page__meta_seo.php"); ?>
    <!-- FAVICONS -->
    <?php require("./public/page__favicon.php"); ?>

    <link rel="manifest" href="manifest.php">

    <!-- CSS -->
    <?php require("./public/index_css.php"); ?>

    <!-- GOOGLE -->
    <?php require("./public/page__google_analytics.php"); ?>

    <!-- BreadcrumbList -->
    <?php // require("./public/page__richsnippets__BreadcrumbList.php"); ?>
    <!-- ImageObject -->
    <?php // require("./public/page__richsnippets__ImageObject.php"); ?>
    <!-- Organization -->
    <?php // require("./public/page__richsnippets__Organization.php"); ?>
    <!-- Organization -->
    <?php // require("./public/page__richsnippets__Article.php"); ?>
    <!-- Dataset -->
    <?php // require("./public/page__richsnippets__dataset.php"); ?>

  </head>
  <body>

    <?php require("./public/page__google_tagmanager.php"); ?>

    <?php include "./public/index_template.php"; ?>

    <?php include "./public/index_js_project.php"; ?>
    <?php include "./public/index_js_libraries.php"; ?>

    <script src="public/js/template.js"></script>
    <script type="module" src="public/js/_script.js"></script>

  </body>
</html>