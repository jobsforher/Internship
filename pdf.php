    
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My HTML5 enabled web page</title>
    </head>
    
    <body>

    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '505858809604549',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<html>



</html>
    
    <form method="post" action="process1.php">    	<!--<form method="get" action="file.doc">
	<button type="submit">Download!</button>
	</form-->
		First name:<br>
	<input align="middle" type="text" name="firstname"><br><br>
	Last name:<br>
	<input align="center" type="text" name="secondname"<br><br><br>
	<!--input type="radio" name="gender" value="male" checked> Male<br><br>
	<input type="radio" name="gender" value="female"> Female<br><br-->
	Email ID:<br>

        <input align="middle" type="text" name="email"><br>
	<br><input type="submit" value="Submit"><br>
	
	<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
	
	 <fieldset style="border: none;">
   
</fieldset>
       <!--a href="http://static1.1.sqspcdn.com/static/f/523476/26270959/1432918802567/to_kill_a_mockingbird_text.pdf?token=XYGJ3oeIP5u28ZgO3Z42F2v6aow%3D" download="proposed_file_name"><button>Download!</button></a-->
​	</form>
	
      
   </body>
   </html>

