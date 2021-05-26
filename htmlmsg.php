<?php
$to = $_POST['name'];
$subj = $_POST['sub'];
$msg = $_POST['msg'];
$header = "From :cornerj127@gmail.com";
$header = "MIME-Version:1.0\r\n";
$header = "Content-Type:text/html;charset =ISO-8859-1\r\n";
$body_msg = "<html>
	          <body>
			<h1 style=\"background-color:red;font-size:30px;\">$msg</h1>
                        <p style=\"color:red;\">$msg</p>
                        <h2 style=\"color:blue;\">$msg</h2>
                        <p><i>$msg</i></p>
		  </body>
	     </html>";

 $result = mail($to,$subj,$body_msg,$header);
 if($result ==  True)
  {
	echo "<center><font color=green  size='6pt'>Email Is Sent  Successfully..</font></center>"; 
  }
  else
  {
	echo "<center><font color=red  size='6pt'>Email Is Not Sent  Successfully..</font></center>";
  }

?>