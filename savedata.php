<?php
// from: http://php.thedemosite.co.uk/
// version 1.2
include("clean_input.php"); 
if( ($username=="") OR ($password=="") )
{
 include("addauser.php");
 exit;
}
include("config.php"); 
include("dbc.php");
$qadd = "INSERT INTO members
                (id, password, username)
         VALUES ('1', 'test', 'test') ";
$qupdate = "UPDATE members
            SET password =:password,
                username =:username WHERE id = '1'";
$dbc = dbc::instance();
$result = $dbc->prepare("SELECT * from members where id = '1' ");
$rows = $dbc->executeGetRows($result);
if(count($rows))// check the single record exists
{    
 $result = $dbc->prepare($qupdate); // set to update original record
 $result->bindParam(':username', $username, PDO::PARAM_STR);
 $result->bindParam(':password', $password, PDO::PARAM_STR);
}
else $result = $dbc->prepare($qadd); // if not set to add an initial record
$result = $dbc->execute($result); 
include("addauser.php");
?>