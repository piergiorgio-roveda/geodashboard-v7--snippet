<!doctype html>
<html lang="en-US">
<head>
  <title>W3.CSS Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <div class="a">A</div>
    <div class="b">B</div>
    <div class="c">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus a lacus et posuere. Morbi posuere nulla nunc, at faucibus massa fermentum et. Cras quis dolor at ante placerat dictum. Nulla ut tempus nulla, id scelerisque nisi. Nam bibendum tortor venenatis felis pretium facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras et finibus nisi. Nam quis ipsum maximus, ultricies est imperdiet, lacinia lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut sollicitudin fringilla dignissim. Vestibulum finibus urna id lectus lacinia, eget mattis lacus cursus. Ut a quam non augue viverra lacinia.

Mauris egestas volutpat nulla, ac tristique sem convallis ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque cursus eros eget nisi pharetra, a tincidunt justo congue. Donec eleifend quis justo non fringilla. Donec facilisis nisi in sem lobortis ultrices. Curabitur vitae euismod dolor. Suspendisse potenti. Pellentesque scelerisque faucibus sapien, id pretium ligula rhoncus eu.

Vestibulum turpis quam, dapibus sed dignissim eget, porttitor vitae ex. Curabitur venenatis ipsum mi, et luctus lacus aliquet at. Etiam imperdiet iaculis felis, a ultrices lorem. Sed accumsan leo eu dapibus eleifend. Quisque facilisis gravida pharetra. Donec sed nisi id odio congue scelerisque at nec dolor. Nullam fringilla rhoncus libero sed tincidunt. Donec cursus massa nec arcu aliquam iaculis. Etiam non varius dui. Proin in felis lectus.

Praesent quam eros, convallis sed enim a, sollicitudin accumsan diam. Phasellus libero metus, posuere sit amet augue et, ullamcorper condimentum metus. Etiam ut nibh iaculis, aliquam dolor ac, tempor dui. Integer ut auctor erat. Nullam iaculis odio vel velit commodo dictum. In libero justo, porttitor at ligula fringilla, viverra accumsan augue. Praesent et ultricies justo. Curabitur a justo ut massa venenatis lacinia. Nulla vitae nibh non nunc consequat blandit. Maecenas eleifend ut ligula sed ornare. Curabitur fermentum eu risus vitae cursus. Nam enim turpis, molestie at orci vel, varius facilisis diam. Vivamus sed augue diam. Donec rhoncus dui a tortor tincidunt, non lobortis ante venenatis. Integer malesuada, lorem pharetra sagittis semper, lacus ex sagittis sem, a rhoncus ante leo id nulla. Curabitur ultricies velit elit, id sodales dolor placerat at.

Mauris tempor ex nec faucibus hendrerit. Mauris aliquam urna at odio pretium pharetra. Mauris bibendum erat dictum tempor dignissim. Nullam congue ante sit amet tempus consectetur. Nullam malesuada, lorem non dapibus ullamcorper, nibh eros faucibus risus, quis volutpat nisi urna a purus. Mauris mollis libero sit amet tellus mattis, ut pharetra mauris facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper blandit diam non rutrum. Phasellus ac enim odio. Aenean pellentesque libero vitae elit feugiat euismod finibus vel libero. Maecenas feugiat dui eget leo egestas, et aliquet tortor luctus. Sed faucibus ut lorem eget iaculis. Etiam dictum laoreet tempus.
    </div>
    <div class="d">D</div>
    <div class="e">E</div>
    <div class="f">F</div>
  </div>
  <script>
    function adjustWrapperHeight() {
      const wrapper = document.querySelector('.wrapper');
      wrapper.style.height = `${window.innerHeight}px`;
    }

    window.addEventListener('resize', adjustWrapperHeight);
    window.addEventListener('orientationchange', adjustWrapperHeight);
    document.addEventListener('DOMContentLoaded', adjustWrapperHeight);
  </script>
</body>
</html>
