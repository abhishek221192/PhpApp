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
               

			   
	        <h1>Registration</h1>
			<br/>
			<div id="register">
             <form action="register.php" method="post">
              <fieldset>
                <div>
                    <input type="text" name="author" placeholder="Author"/>
                </div>
                <div>
                    <input type="text" name="other"/>
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email"/>
                </div>
                <div>
                    <textarea name="message" placeholder="Message"></textarea>
                </div>                 
                <div>
                    <input type="text" name="keywords" placeholder="Keywords"/>
                </div>				
                <input type="submit" name="submit" value="Send"/>
              </fieldset>    
             </form>
            </div>
      </div>
		</div>
		</div>
        <div style="clear:both"></div>
        <br/>
        <br/>
        <br/>
		
        <?php include 'footer.php'; ?> 
</body>
</html>