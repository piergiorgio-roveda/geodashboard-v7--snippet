<?php
require(FLAT_FOLDER__API."page/variables__get.php");
$_page_attributes = page_attributes__get(PAGE__SLUG);

// foreach ($_page_attributes as $key => $val) {
//   echo "<!--data-".$key.":".$val."-->\n";
// }
?>
<!doctype html>
<html lang="<?php echo $_page_attributes['page_lang'];?>">
  <head>
    <!-- META -->
    <?php require(FLAT_FOLDER__PUBLIC."page__meta.php"); ?>
    <!-- META SEO -->
    <?php require(FLAT_FOLDER__PUBLIC."page__meta_seo.php"); ?>

    <!-- FAVICONS -->
    <?php require(FLAT_FOLDER__PUBLIC."page__favicon.php"); ?>

    <!-- MANIFEST -->
    <?php
    $manifest = FLAT_URL.'manifest.json';
    ?>
    <link rel="manifest" 
      href="<?php echo $manifest;?>?ver=<?php echo APP_VERSION."-".$_page_attributes["page_version"];?>">

    <!-- CSS -->
    <?php include FLAT_FOLDER__PUBLIC."index_css.php"; ?>

    <!-- GOOGLE -->
    <?php require(FLAT_FOLDER__PUBLIC."page__google_analytics.php"); ?>

    <!-- BreadcrumbList -->
    <?php require(FLAT_FOLDER__PUBLIC."page__richsnippets__BreadcrumbList.php"); ?>
    <!-- ImageObject -->
    <?php require(FLAT_FOLDER__PUBLIC."page__richsnippets__ImageObject.php"); ?>
    <!-- Organization -->
    <?php require(FLAT_FOLDER__PUBLIC."page__richsnippets__Organization.php"); ?>

  </head>
  <body>

    <?php require(FLAT_FOLDER__PUBLIC."page__google_tagmanager.php"); ?>

    <?php include FLAT_FOLDER__PUBLIC."index_template.php"; ?>

    <?php include FLAT_FOLDER__PUBLIC."index_js_project.php"; ?>
    <?php include FLAT_FOLDER__PUBLIC."index_js_libraries.php"; ?>

    <script type="module" src="<?php echo FLAT_URL__PUBLIC;?>js/_script.js"></script>

  </body>
</html>