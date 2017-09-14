<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Dentist register</title>
</head>

<body>


<p> Register your account</p>

<?php
/** gives message if  registration was succesfull  */
if(isset($_SESSION['succeed'])) {

    ?>
    <p><?php echo $_SESSION['succeed']; ?></p>
    <?php
}
?>
<?php
/** echo errors of form validation from controller */
echo validation_errors(); ?>

<?php echo form_open('auth/register'); ?>
<!-- Start register form -->
    <label for="username">Username:</label>
        <input name="username" type="text"/><br />

    <label for="password">Password:</label>
        <input name="password" type="password"/><br />

    <label for="password2">Confirm password:</label>
        <input name="password2" type="password"/> <br />

    <label for="name">Name:</label>
        <input name="firstname" type="text" placeholder="Firstname"/>
        <input name="prefix" type="text" placeholder="Prefix"/>
        <input name="lastname" type="text" placeholder="Lastname"/><br />

    <label for="adress">Adress:</label>
        <input name="adress" type="text"/><br />

    <label for="city">City:</label>
        <input name="city" type="text"/><br />

    <label for="postalcode">Postalcode:</label>
        <input name="postalcode" type="text"/><br />

    <label for="email">E-mail:</label>
        <input name="email" type="text"/><br />

    <label for="phone">Phone:</label>
        <input name="phone" type="text"/><br />

    <input type="submit" name="submit" value="Register" />

</form>
</body>
</html>