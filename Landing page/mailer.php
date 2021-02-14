<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $surname = strip_tags(trim($_POST["surname"]));
    $surname = str_replace(array("\r","\n"),array(" "," "),$surname);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $www = trim($_POST["WWW"]);
    $tele = trim($_POST["tele"]);

    // Check the data.
    if (empty($name) OR empty($www) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://frontend-karol.frontend.wygladstrony.pl/kamila/index.php?success=-1#form");
        exit;
   }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "kamila.nawrocka@internet-plus.pl";

    // Set the email subject.
    $subject = "Nowa wiadomość od: $name";

    // Build the email content.
    
    $email_content = "Imię i Nazwisko: $name, $surname\n";
    $email_content .= "Email i telefon: $email\n\n, $tele";
    $email_content .= "Adres WWW:\n$www\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://frontend-karol.frontend.wygladstrony.pl/kamila/index.php?success=1#form");

?>