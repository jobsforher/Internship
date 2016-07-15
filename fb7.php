<html>

  <?php
 
    /* Attempt MySQL server connection. Assuming you are running MySQL
 
    server with default setting (user 'root' with no password) */
 
    $link = mysqli_connect("localhost", "root", "tingtong", "Details");
 
 
 
    // Check connection
 
    if($link === false){
 
        die("ERROR: Could not connect. " . mysqli_connect_error());
 
    }
 
 
 
    // Escape user inputs for security
 
    $name = mysqli_real_escape_string($link, $_POST['name']);
 
    $email = mysqli_real_escape_string($link, $_POST['email']);
 
    $phone = mysqli_real_escape_string($link, $_POST['phone']);
 
 
 
    // attempt insert query execution
 
   if(isset($_REQUEST['submit']))
  {
 
    $sql = "INSERT INTO info (name, email, number) VALUES ('$name', '$email', '$phone')";
 
    if(mysqli_query($link, $sql)){
 
         echo "Records added";
 
    } else{
 
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 
    }
   header("location:http://www.jobsforher.com/uploads/ebook/restarter-journeys-vol-1.pdf");
   }
 
    // close connection
 
    mysqli_close($link);
 
    ?>

<style>

body {
    height: 100%;
    background-image:url("http://jfhphp.comuf.com/Top.jpg");
    background-position:center;
    background-repeat:no-repeat;
    overflow:hidden;
    font-family: Arial, sans-serif;
}
#mydiv {
    width: 100%;
    height: 100%;
    overflow: hidden;
   
    position: absolute;
    
    
}
#mydiv-container {
    margin-left: auto;
    margin-right: auto;
    
}
#mydiv-content {
    width: 70%;
    padding: 20px;
    background-color: white;
    border: 1px solid #6089F7;
    
}
a {
    color: #5874BF;
    text-decoration: none;
}
a:hover {
    color: #112763;
}
#img2
{
	position:absolute;
	left:0;
	
}

@font-face {
    font-family: Amaranth;
    src: url("http://jfhphp.comuf.com/Amaranth-Regular.otf") format("opentype");
}


.p2 {

 	font-family: Amaranth;
	height:40%;
	width:65%;
	position: absolute;
	color: black;
	text-align: center;
	font-size:17px;
	left:100px;
  	top:75px;
  	float:middle;
  	
}

form {
    position:relative;
    right:-40px;
    width:250px;
    height:100%;
    background-color:#EBDDE2;
    padding:10px;
    padding-right:45px;
    padding-top:150px;
    vertical-align:bottom;
    
}

label
{
	font-family: Amaranth;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
    font-family: Amaranth;
}
.b2
{
	
	margin: 0 auto;
	top:500px;
	margin-right:auto;
	float:right;
}
.btn-style{
	border : solid 0px #C6AEC7;
	border-radius : 15px;
	moz-border-radius : 15px;
	font-size : 15px;
	font-weight:bold;
	color : #050505;
	padding : 10px 20px;
	background : #C8A2C8;
	background : -webkit-gradient(linear, left top, left bottom, color-stop(0%,#C38EC7), color-stop(100%,#D2B9D3));
	background : -moz-linear-gradient(top, #C38EC7 0%, #D2B9D3 100%);
	background : -webkit-linear-gradient(top, #C38EC7 0%, #D2B9D3 100%);
	background : -o-linear-gradient(top, #C38EC7 0%, #D2B9D3 100%);
	background : -ms-linear-gradient(top, #C38EC7 0%, #D2B9D3 100%);
	background : linear-gradient(top, #C38EC7 0%, #D2B9D3 100%);
	filter : progid:DXImageTransform.Microsoft.gradient( startColorstr='#C38EC7', endColorstr='#D2B9D3',GradientType=0 );
	font-family: Amaranth;


}
.b1
{
 background-color:#C6AEC7;
    color: black;
    border: 2px solid #EBDDE2 ;
    top:500px;
    margin:0 auto;
}

.p1
{
	float:middle;
	left:-100px;
	font-family: Amaranth;
}

input[type=text] {
    border: 2px solid #E0B0FF;
    border-radius: 4px;
    padding: 5px 5px;
}
input[type=email] {
    border: 2px solid #E0B0FF;
    border-radius: 4px;
    padding: 5px 5px;
}

</style>

<script>


    function show(target) {
    document.getElementById(target).style.display = 'block';
    document.getElementById(target).style.visibilty = 'visible';
    
}

function hide(target) {
    document.getElementById(target).style.display = 'none';
    
}

function validateform()
{
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var text =  /^[A-Za-z]/;
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if(name==''||email=='')
	{
		alert('Fill the required fields');
		return false;
	}
	else if (!text.test(name))
	{
		alert('Please check the name you have entered');
		return false;
	}
	else if (!emailReg.test(email))
	{
		alert('Please enter a valid email id');
		return false;
	}
	else
	{
 
		return true;
	}
}
</script>

 
  
<body>
<img src="http://jfhphp.comuf.com/Logo.png" width="250" height="70" class="over"/> 

<a style="top:100px;" class="button b2" onclick="show('mydiv')">Click Here!</a>

<div id="mydiv" style="display:none; background-color:#EBDDE2;">
    
</body>     

 
<table align="left">
<td>
<img id ="img2" class="cover" src="http://jfhphp.comuf.com/Bottom.jpg" style="width:100%;height:100%; opacity: 0.1;padding=50px;" align="bottom"> 

<p id="p2" class="p2"> In the first year of JobsForHer's existence,we have managed to fill positions in companies across the country with women who have returned to work after a career break.Now,we're ready to upgrade our portal and escalate the way we work. And, we have women to thank for the journey this far.<br><br>

Women who took a chance with us and trusted us to help them return to work. Women who saw us, allied with us, and jumped the cliff's egde with us, into a whole new world and a whole new way of affirming their lives with second careers.<br><br>

We salute these women and we have been acknowledging their strengths along our journey together by penning their personal career-restart stories on our blog page, as and when place them, or hear of them.<br><br>
To read their stories of resilience, determination, and courage in the face of dwindling confidence, download:<br><br>

<b>		The Way Back to the Way Forward:Restarter Journeys </b><br><br>
To share YOUR Restarter Journey with us, email kaajal.ahuja@jobsforher.com. It could inspire so many more women to stand up and stand their ground for the careers they deserve to return to after their break.<br><br>

And if you're ready to GET BACK TO WORK, browse JobsForHer's multitude of full-time, part-time, work-from-home, freelance, volunteer and returnee.<br><br>

<a class="button b1" onclick="hide('mydiv')">Close!</a>

</p>
</td>
</table>
<table align="right" height="100%">
<td align="center" height="100%">

 <form name="myForm" method="post" align = "center" action="" onsubmit="return validateform()">
    	<p id="p1" class="p1"> Fill out the details and click on the button to download the ebook</p><br>
		<label>*First name:</label><br>
	<input id="name" align="left" type="text" name="name"><br><br>
	<label>*Email:</label><br>
	<input id="email" align="left" type="email" name="email"<br><br><br>
	
	<label>Mobile Number:</label><br>

        <input id="phone" align="left" type="text" name="phone"><br>
        
 <br><input name="submit" type="submit" class="btn-style" value="Submit & Download"><br>

	</form>
</td>
</table>


</div>
</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->

