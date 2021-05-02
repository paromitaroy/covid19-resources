<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kolkata Live Leads</title>

    <style>
      body {
      background-color: #ADD8E6;
      }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
    <button onclick="goBack()">Go Back</button>
    
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  
    <h1> &#8987; COVID-19 Kolkata Recent Leads</h1>

    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container" style="overflow-x: auto;">

    <?php
    error_reporting(0);
    $dir = "upload/uploadKolkata/";
    $file_display = array('jpg', 'jpeg', 'png', 'gif');
    

    if (file_exists($dir) == false) 
    {
        echo 'Directory "', $dir, '" not found!';
    } 
    else 
    {
      $dir_contents = scandir($dir);
      arsort($dir_contents);
      foreach ($dir_contents as $file) {
        $file_type_last_part=end(explode('.', $file));
        $file_type_first_part=reset(explode('.', $file));
        $timestampanddate=reset(explode('_', $file_type_first_part));
        $timestamp=reset(explode('-', $timestampanddate));
        $category=end(explode('-', $timestampanddate));
        $file_type = strtolower($file_type_last_part);


        if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
            echo 'Uploaded on ', date("d-m-y", $timestamp);
            echo "<br>";
            echo 'Category is ',$category;
            echo "<br>";

            echo '<img src="'. $dir. $file. '" alt="'. $file. '" /,width="380" height="350 /n">';
            echo "<br>";
            echo "<br>";
            echo "<br>";
            
        }
      }
    }
    
    ?>
      <br>
      <br>
    </div>
       

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
