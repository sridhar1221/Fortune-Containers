
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $phone   = $_POST["mobile"];
    $message = $_POST["message"];
    $to_email='sksridhar1210@gmail.com';

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sksridhar1210@gmail.com';  //gmail
        $mail->Password   = 'zbxd eiyr oeid hszv';     // Replace with your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender & Recipient
        $mail->setFrom($email,$name);
        $mail->addReplyTo($email, $name);
        $mail->addAddress($to_email,'Website Owner');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission";
        $mail->Body    = "<h2>Contact Details</h2>
                          <p><b>Name:</b> $name</p>
                          <p><b>Email:</b> $email</p>
                          <p><b>Phone:</b> $phone</p>
                          <p><b>Message:</b> $message</p>";

        // Send Email
        if ($mail->send()) {
            echo "Thank you! Your message has been sent successfully.";
        } else {
            echo "Error: Email not sent.";
        }
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "Invalid request.";
}
?>
