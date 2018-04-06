<?php
// from: http://php.thedemosite.co.uk/
// version 1.2
$dbc = dbc::instance();
$result = $dbc->prepare("SELECT * from members where id = '1' ");
$rows = $dbc->executeGetRows($result);
if(count($rows))
{    
 foreach ($rows[0] AS $key => $value) $$key = $value;
 echo "<b>The username:</b> $username<br>";
 echo "<b>The password:</b> $password<br>";
}
else echo "ERROR - unable to find current username and password!";