<?php
// from: http://php.thedemosite.co.uk/
// version 1.2
$page_title="Login example page to test the PHP MySQL online system";
$page_keywords="login example, php login, mysql login example";
$page_desc="Free login example page";

include("header.inc");
include_once("config.php"); 
include_once("clean_input.php"); 
include_once("dbc.php");
include("validateform.inc"); 
?>
<p align="center"><big><strong>4. Login</strong></p></big>
<p align="center"><strong>The status was:</strong><big></p>
<blockquote>
  <blockquote>
<?php include("getresult.inc"); ?>
  </blockquote>
</blockquote>

<blockquote>
  </big><blockquote>
    <big><p align="center"></big>Enter your login details you added on the previous page and
    test the login.<br>
    The success or failure will be shown above.</p>
  </blockquote>
</blockquote>

<form ACTION="login.php" name="saveform" METHOD="POST" align="center">
  <div align="center"><center><table border="0" width="704" cellspacing="0" cellpadding="0">
    <tr>
      <td width="385" align="right"><table border="0" height="59" width="226"
      bgcolor="#FFFFFF" cellspacing="1" cellpadding="0">
        <tr>
          <td width="154" height="19" bgcolor="#000080" align="right"><p><font color="#FFFFFF"><small>Username:</small></font></td>
          <td width="133" height="19" bgcolor="#000080" align="left"><p><input NAME="username"
          VALUE SIZE="8" MAXLENGTH="16" tabindex="1"></td>
          <td width="64" height="19" bgcolor="#C0C0C0" align="center"><div align="center"><center><p><a
          href="javascript:alert('The username must be between 4 and 16 characters long.')"><small><small>Help</small></small></a></td>
        </tr>
        <tr align="center">
          <td width="154" height="17" bgcolor="#000080" align="right"><p><font color="#FFFFFF"><small>Password:</small></font></td>
          <td height="17" width="133" bgcolor="#000080" align="left"><p><input type="password"
          name="password" size="8" tabindex="2" maxlength="8"></td>
          <td height="17" bgcolor="#C0C0C0" align="center"><a
          href="javascript:alert('The password must be between 4 and 8 characters long.')"><small><small>Help</small></small></a></td>
        </tr>
        <tr align="center">
          <td width="154" height="1" bgcolor="#000080"></td>
          <td width="133" height="1" bgcolor="#000080" align="left"><p><input TYPE="button"
          NAME="FormsButton2" VALUE="Test Login" ONCLICK="validateForm()" tabindex="3"
          style="font-family: Verdana; font-size: 8pt"></td>
          <td width="64" height="1" bgcolor="#C0C0C0" align="center"><a
          href="javascript:alert('Click to save the details')"><small><small>Help</small></small></a></td>
        </tr>
      </table>
      </div></td>
      <td align="center" width="319"><small><strong><a href="getyourowndbonline.php">Now move on
      to the final section</a></strong></small></td>
    </tr>
  </table>
  </center></div>
</form>

<p align="center">&nbsp;</p>

<p align="center"><a href="logincode.php">Click here to view the PHP and JavaScript code</a>
used for this page, or <a href="demo-code.zip">download the free zip here</a></p>

<p align="center">&nbsp;</p>
<?php include("footer.inc"); ?>