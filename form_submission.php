
<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COVID-19 India - Helpful Resources</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .btn {
      background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 12px 16px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
    }
    </style>
    
    <style>
	    .img-container {
      text-align: center;
    	}
    </style>
    
  </head>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <p>Please select City and Category and upload- this will help crowd-source information<br>
  <p> Just click and upload- the website will display this information by category in the respective page! <br>
  <br>
  <br>
  <p>City?<br>
  <select name="City">
  <option value="Select the city">[Choose Option Below]</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Pune">Pune</option>
  <option value="Delhi">Delhi</option>
  </select><br><br>
  
  <p>Category?<br>
  <select name="Category">
  <option value="Select the category of information">[Choose Option Below]</option>
  <option value="Oxygen">Oxygen</option>
  <option value="Beds">Beds</option>
  <option value="ICU">ICU</option>
  </select><br>
  <br>
  <br>
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<!-- test  -->
