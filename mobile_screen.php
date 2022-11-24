<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Screen</title>
  </head>
  <body>

 <h1>This is a mobile screen </h1>

  </body>
  <script type="text/javascript">
   if (navigator.userAgent.match(/Android/i)
   || navigator.userAgent.match(/webOS/i)
   || navigator.userAgent.match(/iPhone/i)
   || navigator.userAgent.match(/iPad/i)
   || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {
      alert("You are on a Mobile version");
        true
   } else {
     alert("You are on a Desktop version");
     window.location = 'index.php';
   }
  </script>

</html>
