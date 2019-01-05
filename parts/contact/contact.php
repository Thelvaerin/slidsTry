<?php

/**
 * @todo kontrolujeme existenci variables
 */
$answer = '';
if (isset($_GET['success']))
    $answer = 'E-mail byl úspěšně odeslán, děkuji za Vaši zprávu.';
if ($_POST){
    if (isset($_POST['name']) && $_POST['name'] &&
        isset($_POST['email']) && $_POST['email'] &&
        isset($_POST['contactForm']) && $_POST['contactForm'])
    {
        $head = 'From:' . $_POST['email'];
        $head .= "\nMINE-Version: 1.0\n";
        $head .= "Content-Type: text/html; charset=\"utf-8\"\n";
        $adress ='kuradiba@gmail.com';
        $subject = 'Nová zpráva z mailformu';
        $success = mb_send_mail($adress,$subject,$_POST['contactForm'],$head);
        if ($success)
        {
            $answer = 'E-mail byl úspěšně odeslán, děkuji za Vaši zprávu.';
            header('Location: mailform.php?success=yes');
            exit;
        }
        else
            $answer = 'Email se nepodařilo odeslat. Zkontrolujte zadanou adresu.';
    }
    else
        $answer = 'Formulář není správně vyplněný!';
};
    if ($answer)
        echo ('<p>' . htmlspecialchars($answer) . '</p>');
    $name = (isset($_POST['name'])) ? $_POST['name'] : '';
    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $contactForm = (isset($_POST['contactForm'])) ? $_POST['contactForm'] : '';

?>


<form method="POST" id="contact">
    <table>
        <tr>
            <td>Vaše jméno</td>
            <td><input name="jmeno" type="text" value="<?php htmlspecialchars($name); ?>"/></td>
        </tr>
        <tr>
            <td>Váš email</td>
            <td><input name="email" type="email" value="<?php htmlspecialchars($email); ?>"/></td>
        </tr>
    </table>
    <textarea name="zpráva", cols="40", rows="10" ><?php htmlspecialchars($contactForm); ?></textarea>
    <br />

    <input type="submit" value="Odeslat" />
</form>