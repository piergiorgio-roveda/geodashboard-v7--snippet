<?php
  $_meta = array(
    array("name"=>"author", "content"=>AUTHOR__NAME),
    array("name"=>"generator", "content"=>WEBAPP__NAME),
    array("name"=>"description", "content"=>$_page_attributes['g_description_short']),
    array("name"=>"twitter:card", "content"=>"summary_large_image"),
    array("name"=>"twitter:site", "content"=>TWITTER__SITE),
    array("name"=>"twitter:creator", "content"=>TWITTER__CREATOR),
    array("name"=>"twitter:title", "content"=>$_page_attributes['title_seo']),
    array("name"=>"twitter:description", "content"=>$_page_attributes['g_description_short']),
    array("name"=>"twitter:image", "content"=>THUMB),
  );
  foreach ($_meta as $key => $value) {
    echo '<meta name="'.$value["name"].'" content="'.$value["content"].'">
    ';
  }
  unset($_meta, $key, $value);
  if(!empty($_GET["map"])){
    $canonical = FLAT_URL.G_SLUG.'.php?map='.$_GET["map"];
  }else{
    $canonical = FLAT_URL.G_SLUG.'.php';
  }
  $_meta = array(
    array("property"=>"article:publisher", "content"=>AUTHOR__NAME),
    array("property"=>"article:modified_time", "content"=>$_page_attributes['update_at']),
    array("property"=>"og:locale", "content"=>$_page_attributes['page_lang']),
    array("property"=>"og:locale:alternate", "content"=>"it_IT"),
    array("property"=>"og:type", "content"=>"website"),
    array("property"=>"og:title", "content"=>$_page_attributes['title_seo']),
    array("property"=>"og:description", "content"=>$_page_attributes['g_description_short']),
    array("property"=>"og:url", "content"=>$canonical),
    array("property"=>"og:site_name", "content"=>"[GEO]DASHBOARD"), // "content"=>BUSINESS__NAME),
    array("property"=>"og:image", "content"=>THUMB),
    array("property"=>"og:image:width", "content"=>"1180"),
    array("property"=>"og:image:height", "content"=>"820"),
    array("property"=>"og:image:alt", "content"=>"[GEO]DASHBOARD"),
  );
  foreach ($_meta as $key => $value) {
    echo '<meta property="'.$value["property"].'" content="'.$value["content"].'">
    ';
  }
  unset($_meta, $key, $value);

?>
<meta property="fb:app_id" content="861499572029013" />

<?php
$_json = array(
  "@context"=>"http://schema.org",
  "@type"=>"WebSite",
  "name"=>"[GEO]DASHBOARD",
  "alternateName"=>array("[GEO]", "cityplanner.biz", "CityPlanner","Piergiorgio Roveda"),
  "url"=>"https://cityplanner.biz/",
  "image"=>BUCKET."source/img/geodashboard_2024/apple-touch-icon.png",
  "logo"=>BUCKET."source/img/geodashboard_2024/apple-touch-icon.png",
);
?>
<script type="application/ld+json">
  <?php echo (json_encode($_json, JSON_PRETTY_PRINT));?>
</script>
