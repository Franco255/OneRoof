
<?php
if(isset($_POST["submit"]))
{
    $fname=$_POST['firtName'];
    $lname = $_POST['LastName'];
    $emailFrom = $_POST['emailinfo'];
    $number = $_POST['phonenumber'];
    $message = $_POST['message'];
    $mailTo="david@oneroof.net";
    $headers="From: ". $emailFrom;
    $txt="A message From".$fname.".\n\n".$message;
    mail($mailTo, $txt, $headers);
    header("Location:index.php?mailsend");
}


?>