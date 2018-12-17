<?php

/**
 * @todo kontrolujeme existenci variables
 */
if ($sentence) {
    echo('<p>' . htmlspecialchars($sentence) . '</p>');
}

$name = (isset($_POST['name'])) ? $_POST['name'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$ContactForm = (isset($_POST['ContactForm'])) ? $_POST['ContactForm'] : '';
?>

<form method="POST">
    <table>
        <tr>
            <td>Vaše jméno</td>
            <td><input name="jmeno" type="text" value="<?= htmlspecialchars($name); ?>"/></td>
        </tr>
        <tr>
            <td>Váš email</td>
            <td><input name="email" type="email" value="<?= htmlspecialchars($email); ?>"/></td>
        </tr>
    </table>
    <textarea name="zprava"><?= htmlspecialchars($ContactForm); ?></textarea>
    <br />

    <input type="submit" value="Odeslat" />
</form>