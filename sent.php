<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <meta charset="utf-8">
    <title>Sent</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/output-style.min.css">
    <script src="js/form.js"></script>
  </head>
  <body>
    <?php
    $toEmail = 'acardosi@ccsuvt.org';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    #$message = wordwrap($message, 70, "\r\n");

    mail($toEmail, $subject, $message);

    echo "<h3>Email successfully sent to <strong>" . $toEmail . "</strong>!</h3>"
    ?>
    <a href="index.php" title="home">Go Back</a>
  </body>
</html>
