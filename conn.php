  <?php
 
   
 
    $link = mysqli_connect("localhost", "root", "tingtong", "resume");
 
 
 
   
 
    if($link === false){
 
        die("ERROR: Could not connect. " . mysqli_connect_error());
 
    }
    
 if(isset($_REQUEST['submit'])&&($_FILES['resume']['name']!=""))
   {
    $email = mysqli_real_escape_string($link, $_POST['email']);
    
    settype($version, "integer"); 
    $version = 0;
    
  
    $dir="/resume/".$email."/";
    if (!is_dir ($dir)) { 
	mkdir($dir,0777);
	exec("chmod -R 0777 $dir");
	
}
	$query=mysqli_query($link,"SELECT * FROM resume_details WHERE email = '$email'");
	if(mysqli_num_rows($query)>0)
	{
		$result=mysqli_query($link,"SELECT version FROM resume_details WHERE email = '$email'");
		$row = $result->fetch_assoc();
		$version=$row['version'];
		++$version;
		mysqli_query($link,"UPDATE resume_details SET version=$version WHERE email='$email'");
		$verdir=$dir."v".$version;
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
	$file = $_FILES['resume']['name'];
$path = pathinfo($file);

$filename = $path['filename'];
$filename = substr($filename, 0, strpos($filename, "Resume"));
$filename="Resume";
echo $filename;
$ext = $path['extension'];
$temp_name = $_FILES['resume']['tmp_name'];
$pathfilenameext= $verdir."/".$filename.".".$ext;
$fn=$filename.".pdf";

$htmldir=$verdir."/html";
mkdir($htmldir,0777);
chmod($htmldir,0777);

 
// Check if file already exists
if (file_exists($pathfilenameext)) {
 $uploadstatus = "Sorry, file already exists.";
 }
else
 {
 move_uploaded_file($temp_name,$pathfilenameext);
 chmod($pathfilenameext,0777);
 $uploadstatus = "File Uploaded Successfully.";
 echo $uploadstatus." Thank you for uploading your Resume.";

 if($ext==="docx"||$ext==="doc")
{
	exec('
  export HOME=/tmp 
  libreoffice --headless --invisible --norestore --convert-to pdf --outdir '.$htmldir.' '.$pathfilenameext);
  chmod($htmldir."/".$fn,0777);
  
  
}
$fn1=$filename.".html";     
 }
 if($ext==="docx"||$ext==="doc"){
 exec('pdf2htmlEX --dest-dir '.$htmldir.' '.$htmldir.'/'.$fn);
 chmod($htmldir."/".$fn1,0777);
 exec('mv '.$htmldir.'/'.$fn.' '.$verdir); 
 //exec('sensible-browser '.$htmldir.'/'.$fn1);
}
else {
 exec('pdf2htmlEX --dest-dir '.$htmldir.' '.$pathfilenameext);
 chmod($htmldir."/".$fn1,0777);
  //exec('sensible-browser '.$htmldir.'/'.$fn1);

}

$txt=$filename.".txt";
exec('touch '.$verdir.'/'.$txt);
chmod($verdir.'/'.$txt,0777);
echo file_get_contents($htmldir."/".$fn1);
exec('python /home/yarisha/pdftotxt.py '.$verdir.'/'.$fn.' >'.$verdir.'/'.$txt);
exec('python tokenize.py  '.$verdir.'/'.$txt.'>'.$verdir.'/tokenized.txt');
chmod($verdir.'/tokenized.txt',0777);


//$file = file_get_contents($verdir.'/tokenized.txt');
$file = file($verdir."/tokenized.txt");

$name=$email;
$name = substr($name, 0, strpos($name, '@'));
$name;
$create = "CREATE TABLE IF NOT EXISTS `$email` (id int)";
mysqli_query($link,$create);
mysqli_query($link,"INSERT INTO `$email` (id) values ('$version')");
$arr=array();
$arr1=array();
foreach($file as $line)
{
	if($line)
	{
        $parts = explode(' :: ',$line);
        $data[$parts[0]] = isset($parts[1]) ? $parts[1] : null;
    	//echo $parts[0];
    	//echo "<br>";
    	//echo $data[$parts[0]];
    	//echo "<br>";
    	$details=$data[$parts[0]];
    	$title= $parts[0];
    	echo $title;
    	//echo "<br>";
    	//echo $details;
    	//echo "<br>";
    	$arr[]=$title;
    	$arr1[]=$details;
    	//mysqli_query($link,"ALTER TABLE `$email` ADD COLUMN ".$parts[0]." VARCHAR(10000)");
	//mysqli_query($link,"INSERT INTO `$email` ($title) values ('$details')");    	
}
}
for($i=0;$i<count($arr);$i++)
{
if($arr[$i]!=" ")
{
	$a=$arr[$i];
	$b=$arr1[$i];
	mysqli_query($link,"ALTER TABLE `$email` ADD COLUMN ".$a." VARCHAR(10000)");
	//mysqli_query($link,"INSERT IF NOT EXISTS INTO `$email` ($a) values ('$b')");    
}
}
for($i=0;$i<count($arr);$i++)
{
if($arr[$i]!=" ")
{
	$c=$arr[$i];
	$d=$arr1[$i];
	//mysqli_query($link,"ALTER TABLE `$email` ADD COLUMN ".$a." VARCHAR(10000)");
	mysqli_query($link,"UPDATE `$email` SET ".$c."='$d' WHERE id='$version'");    
}
}
}
mysqli_close($link);
?>
