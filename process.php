<html>

<body>

<?php
if( $_POST )
{
$con = mysql_connect("localhost","root","tingtong");

if (mysql_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }

mysql_select_db("Details", $con);


$insert_query = "INSERT INTO info(
                fname,
                lname,
                email
                    ) VALUES (
            '".$_POST['firstname']."',
            '".$_POST['secondname']."',
            '".$_POST['email']."')";

mysql_query($insert_query);

echo "<h2>Thank you for your feedback!</h2>";

mysql_close($con);
}
?>

</body>

</html>
