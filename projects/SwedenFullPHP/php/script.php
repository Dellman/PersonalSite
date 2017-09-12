<?php
  function tester($var){
    $scriptStart = "<script type='text/javascript'>";
    $scriptEnd = "</script>";
    echo $scriptStart . "console.log(" . $var . ".toString());" . $scriptEnd;
  }
  function loadImages($place){
    $scriptStart = "<script type='text/javascript'> \n";
    $scriptEnd = "</script> \n";
    $directory = "images/" . $place . "/" . $place;
    $images = glob($directory . "*.jpg");
    $imagesCount = count($images);
    for ($i=0; $i < $imagesCount; $i++) {
      $image = $directory . $i . ".jpg";
      $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      $fullImagePath = $url. $image;
      $headers = get_headers($fullImagePath, 1);
      // Only load the image if there is a file there
      if ($headers[0] == 'HTTP/1.1 200 OK') {
        // echo "<img data-count=" . $i . " onload='addClick(this, " . $imagesCount . ");' src='" . $image . "'/>";
        // append images via javascript to place them in the proper spot
        $script = "var placeDiv = document.getElementById('" . $place . "');" .
        "var img = document.createElement('img');" .
        "img.dataset.count =" .  $i . ";" .
        "img.src='" . $image . "';" .
        "img.onload = addClick(img, " . $imagesCount . ");" .
        "placeDiv.append(img); \n";
        echo $scriptStart .  $script  . $scriptEnd;
      }
    }
  }
  loadImages("uppsala");
  loadImages("stockholm");
  loadImages("abisko");
  loadImages("gotland");
?>