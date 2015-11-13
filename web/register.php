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
	      <div id="sidenave" style="border-radius:10px;float:left;">
	          <?php include 'menu.html'; ?>
	      </div>
              
              <div  id="content">
               <?php
                 
				 $to="abhishek221192@gmail.com";
				 
				 $subject="New Registration";
				 
				 $message = "<table><tr><td>Author</td><td>".$_REQUEST["author"]."</td></tr><tr><td>Other</td><td>".$_REQUEST["other"]."</td></tr>";
				 $message .= "<tr><td>Email</td><td>".$_REQUEST["email"]."</td></tr><tr><td>Message</td><td>".$_REQUEST["message"]."</td></tr><tr><td>KeyWords</td><td>".$_REQUEST["keywords"]."</td></tr></table>";
  
  
                   $header = "From:abc@somedomain.com \r\n";
                   $header = "Cc:afgh@somedomain.com \r\n";
                   $header .= "MIME-Version: 1.0\r\n";
                   $header .= "Content-type: text/html\r\n";
             
                   $retval = mail ($to,$subject,$message,$header);
  
  echo 'You have been successfully register';
  
 ?>
	        
      </div>
		</div>
           <div style="clear:both;margin-bottom:10px;"></div>
	   </div>
        <br/>
        <br/>
        <br/>
        <div id="footer"> 	
           <p style="margin:10;margin-left:40%;">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
       </div>
</body>
</html>


