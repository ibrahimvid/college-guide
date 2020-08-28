<?php
    include 'header.php';
?>

<main class="cg__main segment">

        <!-- Hero Section -->
        <section class="ui text container center aligned cg__header-content">
            <h1 class="ui inverted header">College Guide</h1>
            <p class="ui inverted header">Your Journey Begins Here!</p>
            <br>
            <hr>
            <br>
            <form class="ui form container" action="results.php" method="POST">
                <p class="ui inverted header">I want to do my: </p>
                <br>
                <div class="inline fields">
                    <div class="ui selection dropdown">
                        <input type="hidden" name="degree" id="degree">
                        <i class="dropdown icon"></i>
                        <div class="default text">Degree</div>
                        <div class="menu">
                            <div class="item" value="Certificate">Certificate</div>
                            <div class="item" value="Bachelor of Science">Bachelor</div>
                            <div class="item" value="Master of Science">Master</div>
                        </div>
                    </div>
                    <input class="text container" type="text" placeholder="Search Courses..." name="course" id="course">
                    <button type="submit" class="ui large compact primary right labeled icon button cg__button" name="submit-search">Search<i
                            class="caret right icon"></i></button>

                </div>
            </form>
        </section>
    </main>

    <!-- Services Section -->
    <section id="services" class="ui vertical segment cg__section">
        <div class="ui center aligned stackable three column grid container">
            <div class="row">
                <div class="twelve wide tablet eight wide computer column">
                    <h2 class="ui header">SERVICES</h2>
                    <p>College Guide makes it easier for you to find the right education programs for your professional
                        journey. Explore the online and in-person courses from various institutions with one click.
                        Start planning your
                        path today!</p>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <h3 class="ui icon header">
                        <i class="circular inverted certificate icon"></i>
                        <div class="content">Certificate</div>
                    </h3>
                    <p>A certificate is the shortest course of study. It is also
                        the least expensive type of academic credential. Certificates consist of courses that help you
                        develop career competency in a single subject.</p>
                    <p>A certificate typically consists of from three to twelve courses, all commonly completed
                        within
                        a year or a year-and-a-half of study.</p>
                </div>
                <div class="column">
                    <h3 class="ui icon header">
                        <i class="circular inverted user graduate icon"></i>
                        <div class="content">Bachelors</div>
                    </h3>
                    <p>A bachelor degree is a four-year degree program where learners study a specific subject. These
                        degrees
                        equip students with the skills and knowledge needed to pursue various careers.</p>
                    <p>Depending on the specialty, a bachelor's degree can expand job prospects and qualify graduates
                        for in-demand careers. Graduates with a bachelor's degree can also pursue graduate study.</p>
                </div>
                <div class="column">
                    <h3 class="ui icon header">
                        <i class="circular inverted award icon"></i>
                        <div class="content">Masters</div>
                    </h3>
                    <p>A master degree is an academic degree awarded by universities or colleges upon completion of a
                        course of study demonstrating mastery or a high-order overview of a specific field of study or
                        area of professional practice</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="ui vertical segment cg__section">
        <div class="ui center aligned container">
            <div class="row">
                <div class="twelve wide tablet eight wide computer column">
                    <h2 class="ui header">ABOUT US</h2>
                    <p>Universities in the U.S. constantly dominate the top-ranking list, making them the most prestigious and
                        reputable schools in the world. There are plenty of options to choose from, all over the U.S., where you can
                        pursue a Bachelor&#39;s, Master&#39;s, or Certification at a top-ranked and globally recognized institution.</p>

                        <p>Academic Course is way different than a search engine. Where you are blindfolded with advertisements and
                        non-researched data and have to suffer a long way the moment you enter the university. This will not only
                        minimize the stress but give you the overview of the university. This will provide all the contact information
                        and in development will see honest reviews that are posted about the university. We are here to solve a basic
                        problem but a major one amongst parents and students. This will not only be a breakthrough but also provide
                        universities an opportunity to showcase honest and proper information to their students.</p>

                        <p>Making the decision to pursue Masters/Advanced degree is not one to be taken lightly. Not only is it a serious
                        financial investment, it&#39;s a choice that can affect your future career and pay grade as well. Although the best
                        graduate school for you may depend on a host of factors including your chosen area of study, it&#39;s a good idea
                        to be aware of the graduate schools that stand out as the most prestigious.</p>

                        <p>Although there are many ways to evaluate graduate schools, for our list of the best graduate schools from
                        reputed rating institutions, we decided to focus on a number of factors including class size, level of degree
                        awarded, prestige of the faculty, and program rankings. We present the schools here in according to the
                        number of points awarded.</p>
                </div>

            </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="ui vertical segment cg__section">
        <div class="ui center aligned two column stackable grid container">
            <div class="centered row">
                <div class="center aligned eight wide column">
                    <h2 class="ui header sc-h2">CONTACT US</h2>
                </div>
            </div>
            <div class="row">
                <div class="ten wide column">
                    <form class="ui form" action="includes/contact.inc.php" method="POST">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="envelope icon"></i>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="field">
                            <textarea placeholder="Message" name="message" rows="10"></textarea>
                        </div>
                        <button type="submit" class="ui primary button sc-button">SEND</button>
                    </form>
                </div>
                <div class="five wide column">
                    <div class="ui list">
                        <div class="item">
                            <i class="large home middle aligned icon"></i>
                            <div class="content">
                                <h3 class="header">Address</h3>
                                <div class="description">San Diego, CA / Irvine, CA</div>
                            </div>
                        </div>
                    </div>
                    <div class="ui hidden divider"></div>
                    <div class="ui list">
                        <div class="item">
                            <i class="large phone middle aligned icon"></i>
                            <div class="content">
                                <h3 class="header">Number</h3>
                                <div class="description">+1 858 123 4567</div>
                            </div>
                        </div>
                    </div>
                    <div class="ui hidden divider"></div>
                    <div class="ui list">
                        <div class="item">
                            <i class="large envelope middle aligned icon"></i>
                            <div class="content">
                                <h3 class="header">Email</h3>
                                <div class="description">info@mail.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="ui hidden divider"></div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- JS Files -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/semantic.min.css">
    <script src="./js/semantic.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>