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

        <label for="username">Username:</label>
        <input name="username" type="text"/><br />

        <label for="password">Password:</label>
        <input name="password" type="password"/><br />

        <input type="Submit" name="loginSubmit" value="Login">

    </form>