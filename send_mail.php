<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
  

    // Validate form inputs
   if (empty($_POST['name']) ||empty($_POST['compname']) ||empty($_POST['service']) || empty($_POST['email']) || empty($_POST['phone'])|| empty($_POST['comment'])) {
        die("Error: All fields are required.");
    }

    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $compname = htmlspecialchars($_POST['compname']);
    $address = htmlspecialchars($_POST['service']);
    $phone = htmlspecialchars($_POST['phone']);
    $comment = htmlspecialchars($_POST['comment']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
   

    if (!$email) {
        die("Error: Invalid email format.");
    }

    // Email content
    $message = "Name: $name\r\nCompany name: $compname\r\nEmail: $email\r\nService: $service\r\nPhone: $phone\r\nComment: $comment\r\n";

       $subject = "New form submission";
    $fromname = "Vnet";
    $fromemail = "noreply@vneteducation.com";// Replace with your domain email
    $mailto = "muthubala894@gmail.com";  // Replace with recipient email

 
    $content = chunk_split(base64_encode($content));

    // Create email boundary
    $separator = md5(time());
    $eol = "\r\n";

    // Email headers
    $headers = "From: $fromname <$fromemail>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"$separator\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

 // Message body
$body = "--$separator" . $eol;
$body .= "Content-Type: text/plain; charset=\"UTF-8\"" . $eol;
$body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
$body .= $message . $eol . $eol;  // Ensure proper line breaks

    // Attachment
    $body .= "--$separator" . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"$filenameee\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment; filename=\"$filenameee\"" . $eol;
    $body .= $content . $eol;
    $body .= "--$separator--";

    // Send email
    if (mail($mailto, $subject, $body, $headers)) {
    echo "Mail sent successfully!";
} else {
    echo "Mail sending failed!";
    print_r(error_get_last());
}
}
?>