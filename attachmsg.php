<?php
$statusMsg='';
if(isset($_FILES["file"]["name"])){
   $email = $_POST['name'];
    $to = $_POST['name'];
    $subject = $_POST['sub'];
    $message = $_POST['msg'];

$subject="Uploaded file attachment";
$email_message = '<h2>Contact Request Submitted</h2>
                    
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Subject:</b> '.$subject.'</p>
                    <p><b>Message:</b><br/>'.$message.'</p>';
$email_message.="Please find the attachment";
$semi_rand = md5(uniqid(time()));
$headers = "From :<enter-email-id>;
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
 
    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";
 
if($_FILES["file"]["name"]!= ""){  
	$strFilesName = $_FILES["file"]["name"];  
	$strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));  
	
	
    $email_message .= "This is a multi-part message in MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" .
    $email_message .= "\n\n";
 
 
    $email_message .= "--{$mime_boundary}\n" .
    "Content-Type: application/octet-stream;\n" .
    " name=\"{$strFilesName}\"\n" .
    //"Content-Disposition: attachment;\n" .
    //" filename=\"{$fileatt_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $strContent  .= "\n\n" .
    "--{$mime_boundary}--\n";
}
$toemail=$to;	
 
if(mail($toemail, $subject, $email_message, $headers)){
   $statusMsg= "Email send successfully with attachment";
   echo "<center><font color=green  size='6pt'>$statusMsg</font></center>";
}else{
   $statusMsg= "Email not send successfully with attachment";
  echo "<center><font color=green  size='6pt'>$statusMsg</font></center>";
}
}
   ?>
 
