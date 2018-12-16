<?php
if($_POST["message"]) {
    mail("ddatta@indeed.com", "Form to email message", $_POST["Narwhal Name"], "From: our-narwhal@gmail.com");
}
?>