
    <form class="log_container" action="" method="POST">
        <h1>login</h1>

        <div class="ERROR_MSG"><?php echo validation_errors(); ?></div>
        <!--  controlleerd op session errors -->
        <?php
        if(isset($_SESSION['ERROR'])) {

            ?>
            <!-- als session error is gevuld weergeef error -->
            <p><?php echo $_SESSION['ERROR']; ?></p>
            <?php
        }
        ?><br/>
        <!-- login form-->
        <input class="form-control log_txt" name="username" type="text" placeholder="Gebruikersnaam"/><br />
        <input class="form-control log_txt" name="password" type="password" placeholder="wachtwoord"/><br />

        <input class="btn btn-default log_btn" type="submit" name="login" value="aanmelden" />

    </form>