<?php
$_json = array(
  "@context"=>"http://schema.org",
  "@type"=>"BreadcrumbList",
  "@id"=>DOMAIN_URL,
  "name"=>BUSINESS__NAME,
  "itemListElement"=>array(
    array(
      "@type"=>"ListItem",
      "position"=>1,
      "name"=>BUSINESS__NAME,
      "item"=>DOMAIN_URL
    ),
    array(
      "@type"=>"ListItem",
      "position"=>2,
      "name"=>$_page_attributes['title_seo'],
      "item"=>FLAT_URL
    )
  )
);
?>
<script type="application/ld+json">
  <?php echo (json_encode($_json, JSON_PRETTY_PRINT));?>
</script>