<?php
/* Set e-mail recipient */
$myemail = "centro@startupweekend.org, ijony.droid@gmail.com";

/* Check all form inputs using check_input function */
$email = check_input($_POST['email'], "Your E-mail Address");
$message = check_input($_POST['message'], "Your Message");
$subject = "Tienes un mensaje nuevo de swcentro.com";

$message = "

Haz recibido un mensaje de tu sitio swcentro.com:

Correo: $email

Mensaje:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message, 'From:' . $email);

/* Redirect visitor to the thank you page */
header('Location: http://swcentro.com');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>
