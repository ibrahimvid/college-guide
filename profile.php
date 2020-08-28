<?php
    include 'header.php';
?>
    <main class="cg__profile ui middle aligned center grid segment">

        <div class="ui centered card">
            <div class="item">
                <div class="image">
                <img src="/https://fomantic-ui.com/images/wireframe/image.png">
            </div>
            <div class="content">
                <h2 class="ui header"><?php echo $_SESSION['userId'] ?></h2>
                <p></p>
                <div class="ui placeholder">
                    <div class="paragraph">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
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