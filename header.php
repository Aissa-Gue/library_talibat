<?php
//disable validation of form by the browser (header + print.php)
header('Cache-Control: no cache');
?>

<!doctype html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/logo_icon.png">
  <link rel="stylesheet" href="css/uikit-rtl.css" />
  <link rel="stylesheet" href="css/util.css" />
  <link rel="stylesheet" href="css/header_style.css?v=<?php echo time() ?>" />
  <link rel="stylesheet" href="fonts/googleFonts.css?v=<?php echo time() ?>">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet">
</head>

<style>
  /* arabic */
  @font-face {
    font-family: "Almarai";
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local("Almarai Bold"), local("Almarai-Bold"),
      url(./fonts/tssoApxBaigK_hnnS-agtnqWo572.woff) format("woff");
    unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41,
      U+FB50-FDFF, U+FE80-FEFC;
  }

  /* arabic */
  @font-face {
    font-family: "Cairo";
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local("Cairo Regular"), local("Cairo-Regular"),
      url(./fonts/SLXGc1nY6HkvalIkTpu0xg.woff) format("woff");
    unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41,
      U+FB50-FDFF, U+FE80-FEFC;
  }

  /* latin-ext */
  @font-face {
    font-family: "Cairo";
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local("Cairo Regular"), local("Cairo-Regular"),
      url(./fonts/SLXGc1nY6HkvalIvTpu0xg.woff) format("woff");
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
      U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  /* latin */
  @font-face {
    font-family: "Cairo";
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local("Cairo Regular"), local("Cairo-Regular"),
      url(./fonts/SLXGc1nY6HkvalIhTps.woff) format("woff");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215,
      U+FEFF, U+FFFD;
  }

  /* arabic */
  @font-face {
    font-family: "Reem Kufi";
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local("Reem Kufi Regular"), local("ReemKufi-Regular"),
      url(./fonts/2sDcZGJLip7W2J7v7wQzbWW5O7w.woff) format("woff");
    unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41,
      U+FB50-FDFF, U+FE80-FEFC;
  }

  /* latin */
  @font-face {
    font-family: "Reem Kufi";
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local("Reem Kufi Regular"), local("ReemKufi-Regular"),
      url(./fonts/2sDcZGJLip7W2J7v7wQzaGW5.woff) format("woff");
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
      U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215,
      U+FEFF, U+FFFD;
  }

  * {
    font-family: 'Tajawal', sans-serif;
  }

  h1,
  .uk-h1,
  h2,
  .uk-h2,
  h3,
  .uk-h3,
  h4,
  .uk-h4,
  h5,
  .uk-h5,
  h6,
  .uk-h6,
  .uk-heading-small,
  .uk-heading-medium,
  .uk-heading-large,
  .uk-heading-xlarge,
  .uk-heading-2xlarge {
    font-family: 'Tajawal', sans-serif;
  }
</style>

<body>
  <div class="uk-container-expand">
    <!-- head & logo -->
    <header class="uk-height-small">
      <a href="index.php"><img class="uk-height-small" src="./img/banner4.jpg" alt=""></a>
    </header>
    <!-- END head & logo -->
  </div>

</body>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script>
  // prevent browser from resubmit the form
  /* if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
  }*/
</script>

</html>