<?php
error_reporting(E_ALL ^ E_ALL);
session_start();
include_once("config.php");
$rand = $_SESSION['linkid'];
$link = "http://localhost/Unknownscode/Link-Shortner/go.php?id=" . $rand; //replace localhost/Unknownscode/LinkShortner-main/ with your domain name or localhost if you are using localhost
session_unset();
session_destroy();
?>
<html>

<head>
  <title>Link Shortner</title>
  <link rel="icon" href="icon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<body>

</html>
<div class="kamado">
  <div class="b-neck"></div>
  <div class="neck"></div>
  <div class="ear-r"></div>
  <div class="earing-r"></div>
  <div class="ear-l"></div>
  <div class="earing-l"></div>
  <div class="hair"></div>
  <div class="face">
    <div></div>
  </div>
  <div class="eye-r"></div>
  <div class="eye-l"></div>
  <div class="u-eye-l"></div>
  <div class="u-eye-r"></div>
  <div class="mouth"></div>
  <div class="b-hair"></div>
  <div class="f1"></div>
  <div class="f2"></div>
  <div class="f3"></div>
  <div class="f4"></div>
  <div class="f5"></div>
  <div class="f6"></div>
  <div class="f7"></div>
  <div class="f8"></div>
</div>
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>LINK</span>
            <span>SHORTNER</span>
          </div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <h1 class="app-form-control">Your Link</h1>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" value="<?php echo $link; ?>" id="myInput" style='text-transform:none'>
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button" id="myInput" onclick="myFunctioncopy()">Copy Link</button>
              <button class="app-form-button" onclick="myFunctionopen()">Open Link</button>
              <script>
                function myFunctioncopy() {
                  var copyText = document.getElementById("myInput");
                  copyText.select();
                  //copyText.setSelectionRange(0, 99999); /* For mobile devices */
                  navigator.clipboard.writeText(copyText.value);
                  alert("Link Copied to Clipboard");
                }

                function myFunctionopen() {
                  window.open("<?php echo $link; ?>", '_blank');
                }
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="credits">
      MADE BY
      <a class="credits-link" href="https://titanslab.in" target="_blank">
        <svg class="dribbble" viewBox="0 0 200 200">
          <g stroke="#ffffff" fill="none">
            <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
            <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
            <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
            <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
          </g>
        </svg>
        TITANS LAB
      </a>
    </div>

  </div>
</div>
</body>

</html>