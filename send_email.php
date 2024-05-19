  =>  Template Name    : KidKinder - Kindergarten Website Template

  =>  Template Link    : https://htmlcodex.com/kindergarten-website-template

  =>  Template License : https://htmlcodex.com/license (or read the LICENSE.txt file)

  =>  Template Author  : HTML Codex

  =>  Author Website   : https://htmlcodex.com

 =>  About HTML Codex : HTML Codex is one of the top creators and publishers of Free HTML templates, HTML landing pages, HTML email templates and HTML snippets in the world. Read more at ( https://htmlcodex.com/about-us )



 <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Настройки SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP сервер
        $mail->SMTPAuth = true;
        $mail->Username = 'elenadreganova1982@gmail.com'; // Ваш email
        $mail->Password = '357Elena159Elena'; // Ваш пароль
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 578;

        // От кого
        $mail->setFrom($email, $name);
        // Кому
        $mail->addAddress('elenadreganova1982@gmail.com'); // Получатель

        // Содержание
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = nl2br($message);
        $mail->AltBody = strip_tags($message);

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request method';
}
