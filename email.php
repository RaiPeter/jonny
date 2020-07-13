<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
if(empty($name) || empty($email) || empty($message)){
    echo "Please fill all the details.";
}
else{
mail("rai.peter2@gmail.com" ,"subject",$message."From : $name <$email>" );
echo "<script type='text/javascript'>alert('Your message has been sent succefully!');
window.history.log(-1);
</script>";

}


?>