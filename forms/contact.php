<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer-master/src/SMTP.php';
require __DIR__ . '/../PHPMailer-master/src/Exception.php';

// Show PHP errors (for debugging)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Sanitize user inputs
$name    = htmlspecialchars($_POST['name']);
$email   = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

$mail = new PHPMailer(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Message Status</title>
  <link href="../img/dish-regular-24.png" rel="icon"> <!-- Corrected path -->
  <link rel="stylesheet" href="form.css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php
try {
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = function($str, $level) { /* do nothing */ };

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'imranasalis17@gmail.com';
    $mail->Password   = 'jqxlnnkxzkguxbap'; // Gmail App Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->setFrom($email, $name);
    $mail->addAddress('imranasalis17@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = "
        <strong>From:</strong> $name<br>
        <strong>Email:</strong> $email<br>
        <strong>Message:</strong> " . nl2br($message);
    $mail->AltBody = "From: $name\nEmail: $email\nMessage:\n$message";

    $mail->send();

    // Success message
    echo '<div class="success-message">';
    echo '<strong>From:</strong> ' . $name . '<br>';
    echo '<strong>Email:</strong> ' . $email . '<br>';
    echo '<strong>Subject:</strong> ' . $subject . '<br>';
    echo '<strong>Message:</strong> ' . nl2br($message) . '<br><br>';
    echo '<div class="echo">Your message is sent. Thank you! </div>';
    echo '</div>';
} catch (Exception $e) {
    echo '<div class="error-message">';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    echo '</div>';
}
?>

<div class="back-button">
    <button><a href="../index.php">Back to Home</a></button> <!-- Corrected path -->
</div>

</body>
</html>
