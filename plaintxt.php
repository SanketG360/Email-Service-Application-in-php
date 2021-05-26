<?php
$to = $_POST['name'];
$subj = $_POST['sub'];
$msg = $_POST['msg'];
$header= "From :cornerj127@gmail.com";
 $result = mail($to,$subj,$msg,$header);
 if($result ==  True)
  {
	echo "<center><font color=green  size='6pt'>Email Is Sent  Successfully..</font></center>"; 
  }
  else
  {
	echo "<center><font color=red  size='6pt'>Email Is Not Sent  Successfully..</font></center>";
  }

?>