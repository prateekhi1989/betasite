<noscript>
<p><strong><font color="#FF0000"><big>Warning: </big>Your Internet Browser has JavaScript
switched off or is an older browser.&nbsp; You will not be able to complete this
form.&nbsp; Please switch on JavaScript or return with a newer browser. </font></strong></p>
</noscript>
<script LANGUAGE="javaScript">
<!--
function validateForm()
{
 with (document.saveform)
 {
  var saveit = true;
  if (username.value.length < 4)
  {
   alert ("Username too short.  The username must be at least 4 characters in length.");
   username.focus();
   username.select();
   saveit = false;
  }
  if ((password.value.length < 4) && saveit)
  {
   alert ("Password too short.  The password must be at least 4 characters in length.");
   password.focus();
   password.select();
   saveit = false;
  }
  if ((fswords(username.value)) && saveit)
  {
   alert ("The username contains swear words.  Please change it you silly person!");
   username.focus();
   username.select();
   saveit = false;
  }
  if ((fswords(password.value)) && saveit)
  {
   alert ("The password contains swear words.  Please change it you silly person!");
   password.focus();
   password.select();
   saveit = false;
  }
  else if (saveit) submit();
 }
}
swords = new Array()
swords [0] = "fuck"
swords [1] = "shit"
swords [2] = "bastard"
swords [3] = "wank"
swords [4] = "arse"
swords [5] = "bitch"
swords [6] = "cunt"
function fswords(theword)
{
 thereturn=false;
 theword = theword.toLowerCase();
 for (i=0; i < swords.length; i++) 
 {   
  testit=theword.indexOf(swords[i],0);
  //alert(swords[i]+ " testit ="+testit)
  if (testit > -1) thereturn=true;
 }
 return thereturn
}
//-->
</script>
