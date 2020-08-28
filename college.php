<?php
    include 'header.php';
?>

    <main class="cg__college segment">

        <!-- College Detail Section -->
        <div class="ui container">
            <div class="ui container">
                <br><br>
            </div>

            <!-- College Information -->
            
                <?php

                    $id = mysqli_real_escape_string($conn, $_GET['id']);

                    $sql = "SELECT * FROM cg_college WHERE college_id='$id'"; 

                    $result = mysqli_query($conn, $sql);
                    $queryResult = mysqli_num_rows($result); 

                    if($queryResult > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                            <h2 class='ui dividing center huge aligned header'>".$row['college_name']."</h2>
                            <div class='ui vertical segment'>
                                <article class='ui segment'>
                                <h2 class'ui center aligned text'>".$row['college_degree']." in ".$row['college_course']."</h2>
                                    <div class='ui grid'>
                                    <div class='ten wide left floated column'>
                                        <span class='ui text'><i class='globe icon'></i> ".$row['college_address']."</span><br>
                                        <span class='ui text'><i class='dollar sign icon'></i> ".$row['college_tuition']."</span><br>
                                        <a class='ui text' href='".$row['college_url']."'><i class='linkify icon'></i> Program details</a><br>
                                    </div>
                                    <div class='six wide right floated column'>
                                        <span class='ui text'><i class='at icon'></i> ".$row['college_email']."</span><br>
                                        <span class='ui text'><i class='phone icon'></i> ".$row['college_phone']."</span><br>
                                    </div>
                                </div>
                                <div class='ui divider'></div>
                            <p>".$row['college_description']."</p>
                                </article>";
                        }
                    }
                ?>
                    
            </div>
        </div>


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