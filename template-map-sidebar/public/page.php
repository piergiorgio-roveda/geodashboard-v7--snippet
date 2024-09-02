<!doctype html>
<html lang="en-US">
<head>
  <title>Template Map Sidebar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/maplibre-gl@4.5.0/dist/maplibre-gl.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="public/css/template.css">
  <link rel="stylesheet" href="public/css/map.css">
  <link rel="manifest" href="manifest.json">
</head>
<body>
  <div class="wrapper">
    <div class="sidebar__header">
      <div style="
        width: 100%;
        text-align: center;
        ">
        <img style="max-width: 256px;width: 100%;" 
          src="https://geo-source.ams3.digitaloceanspaces.com/source/img/geodashboard_2024/logo-webapp-geodashboard-2024.png"
          alt="Logo" class="logo">
      </div>
      <div style="padding: 1rem;">
        <button class="btn btn-light siderbar__close--btn">
          <i class="bi bi-chevron-right"></i></button>
      </div>
    </div>
    <div class="sidebar__body">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus a lacus et posuere. Morbi posuere nulla nunc, at faucibus massa fermentum et. Cras quis dolor at ante placerat dictum. Nulla ut tempus nulla, id scelerisque nisi. Nam bibendum tortor venenatis felis pretium facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras et finibus nisi. Nam quis ipsum maximus, ultricies est imperdiet, lacinia lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut sollicitudin fringilla dignissim. Vestibulum finibus urna id lectus lacinia, eget mattis lacus cursus. Ut a quam non augue viverra lacinia.

      Mauris egestas volutpat nulla, ac tristique sem convallis ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque cursus eros eget nisi pharetra, a tincidunt justo congue. Donec eleifend quis justo non fringilla. Donec facilisis nisi in sem lobortis ultrices. Curabitur vitae euismod dolor. Suspendisse potenti. Pellentesque scelerisque faucibus sapien, id pretium ligula rhoncus eu.

      Vestibulum turpis quam, dapibus sed dignissim eget, porttitor vitae ex. Curabitur venenatis ipsum mi, et luctus lacus aliquet at. Etiam imperdiet iaculis felis, a ultrices lorem. Sed accumsan leo eu dapibus eleifend. Quisque facilisis gravida pharetra. Donec sed nisi id odio congue scelerisque at nec dolor. Nullam fringilla rhoncus libero sed tincidunt. Donec cursus massa nec arcu aliquam iaculis. Etiam non varius dui. Proin in felis lectus.

      Praesent quam eros, convallis sed enim a, sollicitudin accumsan diam. Phasellus libero metus, posuere sit amet augue et, ullamcorper condimentum metus. Etiam ut nibh iaculis, aliquam dolor ac, tempor dui. Integer ut auctor erat. Nullam iaculis odio vel velit commodo dictum. In libero justo, porttitor at ligula fringilla, viverra accumsan augue. Praesent et ultricies justo. Curabitur a justo ut massa venenatis lacinia. Nulla vitae nibh non nunc consequat blandit. Maecenas eleifend ut ligula sed ornare. Curabitur fermentum eu risus vitae cursus. Nam enim turpis, molestie at orci vel, varius facilisis diam. Vivamus sed augue diam. Donec rhoncus dui a tortor tincidunt, non lobortis ante venenatis. Integer malesuada, lorem pharetra sagittis semper, lacus ex sagittis sem, a rhoncus ante leo id nulla. Curabitur ultricies velit elit, id sodales dolor placerat at.

      Mauris tempor ex nec faucibus hendrerit. Mauris aliquam urna at odio pretium pharetra. Mauris bibendum erat dictum tempor dignissim. Nullam congue ante sit amet tempus consectetur. Nullam malesuada, lorem non dapibus ullamcorper, nibh eros faucibus risus, quis volutpat nisi urna a purus. Mauris mollis libero sit amet tellus mattis, ut pharetra mauris facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper blandit diam non rutrum. Phasellus ac enim odio. Aenean pellentesque libero vitae elit feugiat euismod finibus vel libero. Maecenas feugiat dui eget leo egestas, et aliquet tortor luctus. Sed faucibus ut lorem eget iaculis. Etiam dictum laoreet tempus.
    </div>
    <div class="sidebar__footer">
      <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
        <button type="button" class="btn btn-light">Left</button>
        <button type="button" class="btn btn-light">Middle</button>
        <button type="button" class="btn btn-light">Right</button>
      </div>
    </div>
    <div class="mainmap">
      <button class="btn btn-light siderbar__open--btn">
        <i class="bi bi-layout-sidebar-inset"></i></button>
      <div id="mapid"></div>
    </div>
  </div>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

  <script src='https://unpkg.com/maplibre-gl@4.5.0/dist/maplibre-gl.js'></script>
  <script src="public/js/template.js"></script>
  <script type="module" src="public/js/_script.js"></script>

</body>
</html>