<html>
<style>
mark
{
	background-color:yellow;
	color:black;
	font-style:bold;
	
}

</style>
<?php

 $link = mysqli_connect("localhost", "root", "tingtong", "resume");
 
 
 
   
 
    if($link === false){
 
        die("ERROR: Could not connect. " . mysqli_connect_error());
 
    }
    
    if(isset($_REQUEST['searchbutton']))
   {
   
    $email = mysqli_real_escape_string($link, $_POST['email']);   
    $search = $_POST['search'];
    $result=mysqli_query($link,"SELECT path FROM resume_details WHERE email = '$email'");
    $row = $result->fetch_assoc();
    $path=$row['path'];
    echo $path;
   
    $html=$path."/html/Resume.html";

function highlight($text, $words) {
    preg_match_all('~\w+~', $words, $m);
    $str=str_replace("'","",$words);
    
    if(!$m)
        return $text;
     else if(preg_match("/^'/",$words,$m2))
     {
     if(preg_match("/".$str."/",$text,$m1))
     {
      return preg_replace("/($m1[0])/i","<mark>$0</mark>",$text);
     }
     else
      return $text;
     }
    else //if(preg_match("//",$words,$m2))
    {
    preg_match_all('~\w+~', $words, $m);
    $re = '~\\b(' . implode('|', $m[0]) . ')\\b~i';
    return preg_replace($re, '<mark>$0</mark>', $text);
    }
    
}


$text = file_get_contents($html);

$words = $search;
print highlight($text, $words);

}
?>
