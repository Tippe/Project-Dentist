<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Registreren</title>
</head>

<body>


<p> Registreer hier uw account. </p>

<?php
/** als session gelukt is gevuld echo session */
if(isset($_SESSION['gelukt'])) {

    ?>
    <p><?php echo $_SESSION['gelukt']; ?></p>
    <?php
}
?>
<?php
/** echo errors van validation in register controller */
echo validation_errors(); ?>

<?php echo form_open('auth/register'); ?>
<!-- Start van register form -->
<label for="username">gebruikersnaam:</label>
<input name="username" type="text"/><br />

<label for="password">wachtwoord:</label>
<input name="password" type="password"/><br />

<label for="password2">Herhaal wachtwoord:</label>
<input name="password2" type="password"/> <br />

<label for="email">Email adres</label>
<input name="email" type="text"/><br />

<label for="geslacht">uw geslacht</label>
<select id="geslacht" name="geslacht">
    <option value="man">Man</option>
    <option value="vrouw">Vrouw</option>
</select><br/>


<input type="submit" name="submit" value="Registreer" />

</form>
</body>
</html>