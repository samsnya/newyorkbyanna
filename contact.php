<?php

// Tworzymy zmienną dla imienia i nazwiska
$name = $_POST['name'];

// Tworzymy zmienną dla adresu email
$email = $_POST['email'];

// Tworzymy zmienną dla wiadomości
$message = $_POST['message'];

// Podajesz adres email z którego ma być wysłana wiadomość
$odkogo = "samsnya1@gmail.com";

// Podajesz adres email na który chcesz otrzymać wiadomość
$dokogo = "insanenya@gmail.com";

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "#";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "name: " . $name . "\n";
$wiadomosc .= "email: " . $email . "\n";
$wiadomosc .= "message: " . $message . "\n";

// Wysyłamy wiadomość
$sukces = mail($dokogo, $tytul, $wiadomosc, "From: <$odkogo>");

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>
