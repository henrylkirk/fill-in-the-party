<?php

include 'assets/includes/header.inc.php';
include 'assets/includes/login.inc.php';
include 'assets/includes/nav.inc.php';

?>

<header id="page-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="assets/images/game_logo.png" alt="Fill-in the Party Logo">
                <div class="intro-text">
                    <p class="skills">"A game, or whatever."</p>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="content-wrapper">
	<section class="primary">
	    <div class="container btn-container">
            <div class="row">
                <div class="col-md-6 hover">
                    <a href="join.php">
                        <img class="game-buttons img-responsive" src="assets/images/join.jpg">
                    </a>
                </div>
                <div class="col-md-6 hover">
                    <a href="lobby.php">
                        <img class="game-buttons img-responsive" src="assets/images/create.jpg">
                    </a>
                </div>
			
            </div> <!-- row -->
        </div>
    </section>

    <section class="success" style="padding-top: 60px;padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p>Fill in the Party is a multiplayer fill-in-the-blank game where players compete to come up with the funniest / best / most ridiculous words to fill in. One sentence is given at a time. Players use their phone or tablet to answer simple prompts. There are no rules or correct answers. </p>
                </div>
                <div class="col-lg-6">
                    <p>The responses will be pitted against each other in a head-to-head battle. Once all of the sentences have been voted on, the final story (a compilation of all the previous responses) is shown and the winner is announced. The winner is the player whose answers were liked the most.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Video</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <video width="100%" controls>
                        <source src="assets/video/fill-in-the-party-journey.mp4" />
                        Your browser unfortunately does not support HTML5 video.
                    </video>
                </div>
            </div>
        </div>
    </section>
    <section class="primary" style="padding-top: 60px;padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>FAQ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p class="question">What are the benefits of signing up?</p>
                    <p class="answer">You will be able to create your own prompt, and have access to our forums where you can view, vote, and save other users prompts for your own use.</p>
                    <br />
                    <p class="question">How do you play?</p>
                    <p class="answer">Get a group of friends together of three or more and set up the game on a laptop/computer. From there use the code given to you at the start screen and join the lobby. From there you will be given a prompt with blank spaces where you will come up with something creative to put in there.</p>
                    <br />
                    <p class="question">Is it free?</p>
                    <p class="answer">Completely, 100%, free. Just like Willy.</p>
                    <br />
                    <p class="question">How do I create an account?</p>
                    <p class="answer">Click the sign up button in the top right corner, enter a username email, and your own personal password.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="container" style="padding-bottom: 20px;">
        <img src="assets/images/company_logo.png" alt="Arm Pants Games" style="width: 200px;">
        <br /><br />
        <a href="" style="text-decoration: underline;color:white;">Contact Us</a>
    </footer>

<?php

include 'assets/includes/footer.inc.php';

?>