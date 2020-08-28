<?php
    include 'header.php';
?>

    <main class="cg__admin ui middle aligned segment cg__section">

        <!-- Admin Area -->
        <div class="ui container">
            <div class="ui container">
                <!-- Admin Post Form -->
                <form class="ui form middle aligned column" action="includes/admin.inc.php" method="POST">
                    <h2 class="ui dividing header">Welcome Admin, Please enter below to update college database.</h2>
                    <div class="field">
                        <input type="text" name="college-name" placeholder="College Name" required>
                    </div>
                    <div class="field">
                        <input type="text" name="college-city" placeholder="City">
                    </div>
                    <div class="field">
                        <input type="text" name="college-degree" placeholder="Degree" required>
                    </div>
                    <div class="field">
                        <input type="text" name="college-course" placeholder="Course" required>
                    </div>
                    <div class="field">
                        <input type="text" name="college-tuition" placeholder="Tuition">
                    </div>
                    <div class="field">
                        <input type="text" name="college-phone" placeholder="Phone">
                    </div>
                    <div class="field">
                        <input type="text" name="college-email" placeholder="Email">
                    </div>
                    <div class="field">
                        <input type="text" name="college-address" placeholder="Address">
                    </div>
                    <div class="field">
                        <input type="text" name="college-url" placeholder="URL/Link">
                    </div>
                    <div class="field">
                        <textarea name="college-description" placeholder="Description" required></textarea>
                    </div>
                    <button class="ui primary button" type="submit" name="admin-post">Post</button>
                </form>
            </div>
        </div>
    </main>

        <!-- Footer Section -->
        <section class="ui vertical segment">
            <footer class="ui inverted center aligned segment">
                <div class="row">
                    <a class="ui black button">TERMS</a>
                    <a class="ui black button">PRIVACY</a>
                    <a class="ui black button">SITE MAP</a>
                </div>
                <div class="row">
                    <i class="circular big inverted twitter link icon"></i>
                    <i class="circular big inverted facebook square f link icon"></i>
                    <i class="circular big inverted linkedin link icon"></i>
                </div>
            </footer>
        </section>
    </main>

    <!-- JS Files -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/semantic.min.css">
    <script src="./js/semantic.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>