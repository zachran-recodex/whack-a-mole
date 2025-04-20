<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whack A Mole</title>
    <link rel="icon" href="images/hammer2.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" class="modal">
        <div class="title"><span>Welcome to</span><h1>Wack-A-Mole</h1></div>
        <div class="select">select difficulty:</div>
        <div class="buttons">
            <button class="e">Easy</button>
            <button class="m">Medium</button>
            <button class="h">Hard</button>
        </div>
    </form>

    <div class="container">
        <div class="view">

            <main>
                <div class="hole">
                    <img src="images/hole.png" alt="hole">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png" alt="hole">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png" alt="hole">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png" alt="hole">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png" alt="hole">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png" alt="hole">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png" alt="hole">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png" alt="hole">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png" alt="hole">
                    <div class="mole"></div>
                </div>

                <span class="side-controls">
                    <div class="side-controls--container">
                        <div class="velocity-level">
                            <img src="images/velocity-mole.svg" alt="velocity">
                            <span class="">2</span>
                        </div>
                        <div class="time-level">
                            <img src="images/timer.svg" alt="timer">
                            <span class="">10</span>
                        </div>
                        <div class="volume-level">
                            <img src="images/volume.svg" alt="volume">
                            <span class="hard"></span>
                        </div>
                    </div>
                </span>

            </main>

            <div class="controls">
                <div class="time">
                    <p>Time</p>
                    <span>-</span>
                </div>
                <div class="score">
                    <p>Score</p>
                    <span>-</span>
                </div>
                <div class="start">START</div>
            </div>

        </div>
    </div>

    <div class="enterName">
        <h2>GAME OVER</h2>
        <h3>Enter your name!</h3><br>
        <input type="text">
        <h3 class="retry">Retry?</h3><br>
    </div>

    <div class="scoreboard">
        <table class="scores"></table>
    </div>
    <table>
        <tbody>
        </tbody>
    </table>
    
    <script src="script.js"></script>
</body>
</html