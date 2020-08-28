<?php
    include 'header.php';
?>

    <main class="cg__portal ui middle aligned center grid segment">

        <!-- Login and Register Area -->
        <div class="ui container">
            <div class="ui two column grid fluid container cg__sign-up">
                <!-- Login Form -->
                <form class="ui form middle aligned column" action="includes/login.inc.php" method="POST">
                    <h2 class="ui dividing header">Welcome Back!</h2>
                    <div class="field">
                        <input id="username" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <input id="password" type="password" name="password" placeholder="Password" required>
                    </div>
                    <button class="ui primary button" type="submit" name="login-submit">Login</button>
                </form>
                <!-- Register Form -->
                <form class="ui form column" action="includes/register.inc.php" method="POST">
                    <h2 class="ui dividing header">Create Account</h2>
                    <div class="field">
                        <input type="text" name="first-name" placeholder="First Name">
                    </div>
                    <div class="field">
                        <input type="text" name="last-name" placeholder="Last Name">
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" name="repeat-password" placeholder="Repeat Password" required>
                    </div>
                    <button class="ui primary button" type="submit" name="register-submit">Register</button>
                </form>
            </div>
        </div>
    </main>

    <!-- JS Files -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/semantic.min.css">
    <script src="./js/semantic.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>