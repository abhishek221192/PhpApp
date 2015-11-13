<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Conference</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <link rel="Stylesheet" href="css/combinedvtc.css" type="text/css" />
	  <link rel="stylesheet" type="text/css" href="css/layout6da2.css" />
	  <link rel="stylesheet" type="text/css" href="css/homepage9571.css" />
	  <link rel="stylesheet" type="text/css" href="css/sidemenu.css" />
	  <link rel="stylesheet" type="text/css" href="css/form.css"/>
	  <meta name="description" content="" />
	  <meta name="keywords" content="" />
   </head>
   <body>
      <div id="wrapper">
          <?php include 'header.php'; ?> 
          <hr />
          <div class="home"> 
	      <div id="sidenave" style="border-radius:10px;float:left;height:300px;">
	          <?php include 'menu.html'; ?>
	      </div>
              
              <div  id="content">

<?php
$allowedExts = array("doc","docx", "pdf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
	echo '<h2>Upload successfull</h2>';
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
	  else
	  {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
    }
    
    }
  }
else
  {
  echo "Invalid file";
  }
?>
	        
      </div>
		</div>
           <div style="clear:both;margin-bottom:10px;"></div>
	   </div>
        <br/>
        <br/>
        <br/>
        
		
        <?php include 'footer.php'; ?> 
</body>
</html>



