<html>

  <?php
 
    /* Attempt MySQL server connection. Assuming you are running MySQL
 
    server with default setting (user 'root' with no password) */
 
    $link = mysqli_connect("localhost", "root", "tingtong", "resume");
 
 
 
    // Check connection
 
    if($link === false){
 
        die("ERROR: Could not connect. " . mysqli_connect_error());
 
    }
 
 
 
    // Escape user inputs for securit
    
   
 
 
    // attempt insert query execution
 
   if(isset($_REQUEST['submit'])&&($_FILES['resume']['name']!=""))
   {
	 $email = mysqli_real_escape_string($link, $_POST['email']);
    echo $email;
    $version = 0;
    $version = mysql_real_escape_string($version);
    $dir="/resume/".$email."/";
    if (!is_dir ($dir)) { 
	mkdir($dir,0777);
	exec("chmod -R 0777 $dir");
	
}
	$query=mysqli_query($link,"SELECT * FROM resume_details WHERE email = '$email'");
	if(mysqli_num_rows($query)>0)
	{
		$version=mysqli_query($link,"SELECT version FROM resume_details WHERE email = '$email'");
		$version=$version+1;
		mysqli_query($link,"UPDATE resume_details SET version='$version' WHERE email='$email'");
		$verdir=$dir."v".$version;
		echo $verdir;
		mkdir($verdir,0777);	
		exec("chmod -R 777 $verdir");
		mysqli_query($link,"UPDATE resume_details SET path='$verdir' WHERE email='$email'");	
	}
	else
	{
		$version = 1;
		$verdir=$dir."v".$version;
		mkdir($verdir,0777);
		exec("chmod -R 777 $verdir");
		mysqli_query($link,"INSERT INTO resume_details (email,version,path) VALUES ('$email','$version','$verdir')");
	}
			
	}	
 
    // close connection
 
    mysqli_close($link);
 
    ?>
<form action="" enctype="multipart/form-data" method="post">
<p>
Enter your email id:<br>
<input type="text" size="30" name="email">
</p>
<p>
Upload your resume:<br>
<input type="file" name="resume" size="40">
</p>
<div>
<input type="submit" value="Upload" name="submit">
</div>
</form>
</html>
