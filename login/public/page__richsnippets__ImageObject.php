<?php
$_json = array(
  "@context"=>"http://schema.org",
  "@type"=>"ImageObject",
  "author"=>AUTHOR__NAME,
  "contentUrl"=>FLAT_URL__ASSETS.'images/thumb.png',
  "datePublished"=>$_page_attributes['update_at'],
  "name"=>$_page_attributes['title_seo'],
  "license"=>"https://creativecommons.org/licenses/by/4.0/legalcode",
  "acquireLicensePage"=>"https://creativecommons.org/licenses/by/4.0/"

);
?>
<script type="application/ld+json">
  <?php echo (json_encode($_json, JSON_PRETTY_PRINT));?>
</script>