<?php
    include 'header.php';
?>

    <main class="cg__results segment">

        <!-- Results Section-->
        <div class="ui container">
            <div class="ui container">
                <!-- Search Form-->
                <br><br>
                <h2 class="ui center aligned header">Search for Courses</h2>
                <form class="ui form container" action="results.php" method="POST">
                    <div class="inline fields">
                    <select class="ui dropdown" name="degree">
                        <option value="">Degree</option>
                        <option value="Bachelor of Science">Bachelor</option>
                        <option value="Master of Science">Master</option>
                    </select>
                        <input class="text container" type="text" placeholder="Search Courses..." name="course"
                            id="course">
                        <button type="submit"
                            class="ui large compact primary right labeled icon button cg__button" name="submit-search">Search<i
                                class="caret right icon"></i></button>
                    </div>
                </form>
            </div>

            <!-- Search Results-->
            <h2 class="ui dividing header">Search Results</h2>
            <div class="ui vertical segment">
            <?php
                if(isset($_POST['submit-search'])) {
                    $degree = $_POST['degree'];

                    $search = mysqli_real_escape_string($conn, $_POST['course']); 

                    $sql = "SELECT * FROM cg_college WHERE college_name LIKE '%$search%' OR college_course LIKE '%$search%' AND college_degree LIKE '%$degree%'";

                    $result = mysqli_query($conn, $sql);
                    $queryResult = mysqli_num_rows($result);
                    
                    echo "<p class='ui text'>Your search returned ".$queryResult." results!</p>";
                    
                    if($queryResult > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<article class='ui segment'>
                                    <h3 class='ui large header'><a href='college.php?id=".$row['college_id']."'>".$row['college_name']."</a></h3>
                                    <h4 class='ui text'><i class='book open icon'></i>".$row['college_degree']." in ".$row['college_course']."</h4>
                                    <div class='ui grid'>
                                        <div class='ten wide left floated column'>
                                            <span class='ui text'><i class='globe icon'></i> ".$row['college_address']."</span><br>
                                            <span class='ui text'><i class='dollar sign icon'></i> ".$row['college_tuition']."</span><br>
                                        </div>
                                        <div class='six wide right floated column'>
                                            <span class='ui text'><i class='at icon'></i> ".$row['college_email']."</span><br>
                                            <span class='ui text'><i class='phone icon'></i> ".$row['college_phone']."</span><br>
                                        </div>
                                    </div>
                                    <div class='ui divider'></div>
                                    <p>".$row['college_description']."</p>
                                    <a href='college.php?id=".$row['college_id']."'>Read More</a>
                                </article>";
                        }
                    } else {
                        echo 'There are no results matching your search!';
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