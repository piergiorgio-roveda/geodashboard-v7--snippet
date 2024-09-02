<div class="wrapper">
  <div class="sidebar__header">
    <div style="
      width: 100%;
      text-align: center;
      ">
      <img style="max-width: 256px;width: 100%;" 
        src="<?php echo BUCKET;?>source/img/geodashboard_2024/logo-webapp-geodashboard-2024.png"
        alt="Logo" class="logo">
    </div>
    <div class="siderbar__close--box" style="padding: 1rem;">
      <button class="btn btn-light siderbar__close--btn">
        <i class="bi bi-chevron-right"></i></button>
    </div>
  </div>
  <div class="sidebar__body">
    <?php
      // Loop to create 10 elements
      for ($i = 1; $i <= 50; $i++) {
        echo '
          <div class="tocbox" 
            geodata_output__pid="lyr_'.$i.'"
              >
            <div class="tocbox__check" >
              <input type="checkbox" 
                class="form-check-input tocbox__check__input" 
                value="" 
                geodata_output__pid="lyr_'.$i.'" checked >
            </div>
            <div class="tocbox__label" >
              Layer '.$i.'
            </div>
            <div class="tocbox__expand"  
              geodata_output__pid="lyr_'.$i.'" >
              <i style="display:none;" class="bi bi-chevron-expand"></i>
            </div>
          </div>
        ';
      }
    ?>
  </div>
  <div class="sidebar__footer">
    <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
      <a 
        href="https://cityplanner.biz/" 
        class="btn btn-light"><i class="bi bi-house"></i></a>
      <a 
        href="<? echo $canonical;?>" 
        class="btn btn-light"><i class="bi bi-arrow-clockwise"></i></a>
      <button type="button" class="btn btn-light" disabled><i class="bi bi-info-circle"></i></button>
    </div>
  </div>
  <div class="mainmap">
    <div class="siderbar__open--box">
      <button class="btn btn-light siderbar__open--btn">
        <i class="bi bi-layout-sidebar-inset"></i></button>
    </div>
    <div id="mapid"></div>
  </div>
  <div class="wrapper__topright_space no-sidebar--container">
  </div>
  <div class="wrapper__bottomright_space no-sidebar--container">
  </div>
  <div class="wrapper__bottomright_widget no-sidebar--container">
  </div>
</div><!-- /.wrapper -->