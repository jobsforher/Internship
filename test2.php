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




function highlight($text, $words) {
    
    $str=str_replace("'","",$words);
    echo $str;
   
    //$str1;
    if(pregmatch("^'",$words)
    {
    if(preg_match("/".$str."/",$text,$m))
    {
    	
    	return preg_replace("/($m[0])/i","<mark>$0</mark>",$text);
    
    }
}

$words="'How you?'";
$text="Hi, How are you? I'm fine";

print highlight($text,$words);
?>
</html>
