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
        
                    <p class="skills">"Technically a game."</p>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="content-wrapper">
	<section class="primary">
	    <div class="container btn-container">
            <div class="row">
                <div class="col-md-6">
                    <a href="join.php">
                        <img class="game-buttons img-responsive" src="assets/images/join.jpg">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="lobby.php">
                        <img class="game-buttons img-responsive" src="assets/images/create.jpg">
                    </a>
                </div>
			
            </div> <!-- row -->
        </div>
    </section>

    <section class="success">
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
                    <h2>FAQ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Question 1</p>
                    <p>Question 2</p>
                    <p>. . .</p>
                </div>
            </div>
        </div>
    </section>

<?php

include 'assets/includes/footer.inc.php';

?>