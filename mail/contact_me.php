<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MC Design Port</title>
  <!-- TAGS -->
  <!-- Search Engine -->
  <meta name="description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta name="image" content="http://mcdesignport.cl/img/profile.png">
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="MC Design Port">
  <meta itemprop="description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta itemprop="image" content="http://mcdesignport.cl/img/profile.png">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="MC Design Port">
  <meta name="twitter:description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta name="twitter:image:src" content="http://mcdesignport.cl/img/profile.png">
  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <meta name="og:title" content="MC Design Port">
  <meta name="og:description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta name="og:image" content="http://mcdesignport.cl/img/profile.png">
  <meta name="og:url" content="www.mcdesignport.cl">
  <meta name="og:site_name" content="MC Design Port">
  <meta name="og:locale" content="en_US">
  <meta name="og:type" content="website">


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/fixes.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500,700|Roboto:300,400" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'adminmc@mcdesignport.cl'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@mcdesignport.cl\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
</body>
</html>
