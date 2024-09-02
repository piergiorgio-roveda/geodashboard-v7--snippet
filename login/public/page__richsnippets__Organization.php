<?php
$_json = array(
  "@context"=>"http://schema.org",
  "@type"=>"Organization",
  "image"=>DOMAIN_URL."source/img/business_2021/cityplanner-thumb-2024.jpg",
  "url"=>DOMAIN_URL,
  "sameAs"=>array(LINKEDIN__URL),
  "logo"=>DOMAIN_URL."source/img/business_2021/android-chrome-512x512.png",
  "name"=>BUSINESS__NAME,
  "description"=>BUSINESS__TAGLINE,
  "email"=>BUSINESS__EMAIL
);
?>
<script type="application/ld+json">
  <?php echo (json_encode($_json, JSON_PRETTY_PRINT));?>
</script>