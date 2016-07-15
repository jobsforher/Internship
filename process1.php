<html>

<body>

 

 

<?php

$con = mysql_connect("localhost","root","tingtong");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("Details", $con);

 

$sql="INSERT INTO info (fname, lname, email)

VALUES

('$_POST[firstname]','$_POST[secondname]','$_POST[email]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }



 

mysql_close($con)

?>
 Click to download

 <a href="http://static1.1.sqspcdn.com/static/f/523476/26270959/1432918802567/to_kill_a_mockingbird_text.pdf?token=XYGJ3oeIP5u28ZgO3Z42F2v6aow%3D" download="proposed_file_name"><button>Download!</button></a>

</body>

</html>
