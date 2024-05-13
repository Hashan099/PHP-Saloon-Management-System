<?php
include 'includes/dbconnection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $service = mysqli_real_escape_string($con, $_POST['service']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $time = mysqli_real_escape_string($con, $_POST['time']);

    // Insert data into the tblappointment table
    $aptNumber = uniqid(); // generates a unique ID in PHP
    $sql = "INSERT INTO tblappointment (AptNumber, Name, Email, PhoneNumber, Services, AptDate, AptTime)
        VALUES ('$aptNumber', '$name', '$email', '$phone', '$service', '$date', '$time')";

    if ($con->query($sql) === TRUE) {
        // Insert data into the tblcustomers table
        $creationDate = date('Y-m-d H:i:s'); // current date and time
        $sql = "INSERT INTO tblcustomers (Name, Email, MobileNumber, CreationDate)
            VALUES ('$name', '$email', '$phone', '$creationDate')";

        if ($con->query($sql) === TRUE) {
            // Send confirmation email
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'salonliyasoba@gmail.com';
            $mail->Password = 'iakhnnijobrsfayv';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

       
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->setFrom('salonliyasoba@gmail.com');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Appointment Submission';
            $mail->Body = "Dear $name,<br><br>Your appointment has been submitted.<br><br>Details:<br>Service: $service<br>Date: $date<br>Time: $time<br>Phone: $phone<br><br>Thank you.";

            if(!$mail->send()) {
                echo 'Confirmation Email Sent.Please Check your Email.';
                echo 'Confirmation Email sending failed. Please try again: ' . $mail->ErrorInfo;
            } else {
                echo "<script>alert('Your Appointment request has been submitted.  Thank you'); window.location = 'index.php';</script>";
            }
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location = 'index.php';</script>";
        }
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location = 'index.php';</script>";
    }
}
?>
