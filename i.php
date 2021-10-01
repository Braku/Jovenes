<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="main_place">
      main
    </div>

    <button onclick="show('operation1')">Replace to operation 1</button>
    <button onclick="show('operation2')">Replace to operation 2</button>
    <button onclick="show('operation3')">Replace to operation 3</button>


    <div id=operation1 style=“display:none”>
      Some textboxes and text
    </div>

    <div id=operation2 style=“display:none”>
      Again some textboxes and text
    </div>

    <div id=operation3 style=“display:none”>
      And again some textboxes and text
    </div>

    <script>
      function show(param_div_id) {
        document.getElementById('main_place').innerHTML = document.getElementById(param_div_id).innerHTML;
      }
    </script>
  </body>
</html>
