<!doctype html>
<html>

<head>
    <title>Whack-A-Mole</title>
    <link rel="icon" href="images/hammer2.png">
    <meta httpEquiv="Content-Type" content="text/html"/>
    <meta charSet="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        @font-face {font-family: "Titan One";src: url("font/TitanOne-Regular.ttf")}
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Titan One', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          font-family: 'Open Sans', sans-serif;
        }
        
        /* .ui {
          position: absolute;
          display: none;
        } */
        
        /*
        // Modal //
        */
        .modal {
          position: fixed;
          top: 0;
          left: 0;
          height: 100%;
          width: 100%;
          background-color: #000000dd;
          background-color: #fff;
          display: grid;
          align-content: center;
          justify-content: center;
          text-transform: uppercase;
          gap: 1.5rem;
          z-index: 2;
          /* display: none; */
        }
        .modal.hide {
          display: none;
        }
        .modal > div {
          cursor: default;
        }
        .modal .title {
          text-align: center;
          font-size: 1.5rem;
        }
        .modal .title h1 {
          margin-top: 1.5rem;
          color: #000;
          background-image: url('images/hammer.png');
          background-repeat: no-repeat;
          background-size: contain;
          background-position: center;
          padding: 3rem 0;
          font-family: 'Titan One', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          /* background-color: #00000030; */
        }
        .modal .title span {
          display: block;
          font-size: 1rem;
        }
        .modal .help {
          width: max-content;
          margin: auto;
          text-decoration: underline;
          cursor: pointer;
        }
        
        .modal .select {
          text-align: center
        }
        
        .modal .buttons {
          display: grid;
          gap: 0.5rem;
          width: max-content;
          margin: auto;
        }
        .modal .buttons button {
          width: 15rem;
          height: 4rem;
          font-size: 1.5rem;
          font-weight: lighter;
          color: #000;
          border: 0;
          border-radius: 50rem;
          letter-spacing: 1px;
          cursor: pointer;
          outline: none;
          box-shadow: none;
          text-transform: uppercase;
        }
        .modal .buttons button:nth-child(1) {background-color: #00a8ff; color: #fff;}
        .modal .buttons button:nth-child(2) {background-color: #4cd137; color: #fff;}
        .modal .buttons button:nth-child(3) {background-color: #e84118; color: #fff;}
        .modal .buttons button:nth-child(4) {background-color: #000; color: #fff;}
        .modal .buttons button:active {
          transform: scale(0.95);
        }
        
        /* Login Form Styles */
        .login-container {
          width: 100%;
          display: flex;
          justify-content: center;
          margin-bottom: 1rem;
        }
        
        .login-form {
          display: flex;
          flex-direction: column;
          gap: 0.5rem;
          width: 100%;
          max-width: 300px;
        }
        
        .login-form input {
          padding: 0.75rem;
          border-radius: 0.5rem;
          border: 1px solid #ccc;
          font-size: 1rem;
          outline: none;
        }
        
        .auth-buttons {
          display: flex;
          gap: 0.5rem;
          justify-content: center;
        }
        
        .auth-buttons button {
          padding: 0.5rem 1rem;
          border-radius: 0.5rem;
          border: none;
          background-color: #00a8ff;
          color: white;
          cursor: pointer;
          font-size: 1rem;
        }
        
        .auth-buttons button:hover {
          background-color: #0097e6;
        }
        
        #auth-message {
          text-align: center;
          color: #e84118;
          font-size: 0.9rem;
          min-height: 1.2rem;
        }
        
        .play-as-guest {
          text-align: center;
          font-size: 0.9rem;
          margin-top: 0.5rem;
        }
        
        #play-as-guest {
          color: #00a8ff;
          text-decoration: underline;
          cursor: pointer;
        }
        
        #play-as-guest:hover {
          color: #0097e6;
        }
        
        body {
          position: relative;
          background: url('images/background.jpg');
          min-height: 100vh;
          max-height: 100vh;
          display: grid;
          align-items: center;
          align-content: center;
          overflow: hidden;
        }
        .container  * {
          font-family: 'Titan One', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
          margin: auto;
          width: min-content;
          display: grid;
          /* gap: 2rem; */
          grid-template-columns: 1fr 1fr 1fr;
          align-items: center;
          /* border: 1px solid aqua; */
        }
        .side {
          padding: 1rem;
          display: block;
          /* border: 1px solid aqua; */
        }
        .retry {
          cursor: pointer;
        }
        .view * {
          user-select: none;
        }
        .view {
          display: grid;
          gap: 1rem;
          /* border: 1px solid red; */
          transform: translateX(-2.5rem);
        }
        .view main > div {
          cursor: url('images/hammer2.png'), auto;	
        }
        .view .controls {
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
          gap: 1rem;
        }
        .view .start {
          cursor: pointer;
        }
        .view .start:active {
          transform: scale(0.95);
        }
        .view .controls > div {
          color: #fff;
          text-shadow: 0px 0px 4px #000;
          font-size: 2rem;
          font-weight: 400;
          text-align: center;
          padding: 10px;
          border-radius: 5px;
          background-color: #00000055;
          border: 3px solid #111;
        }
        
        .view .controls .time, 
        .view .controls .score {
          position: relative;
        }
        .view .controls .time p, 
        .view .controls .score p {
          position: absolute;
          left: 50%;
          top: -30%;
          transform: translateX(-50%);
          font-size: 1.5rem;
        }
        
        main {
          position: relative;
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
          gap: 0.25rem;
        }
        main > div {
          width: 10rem;
          height: 10rem;
        }
        
        main .side-controls {
          position: absolute;
          right: 0;
          width: 0;
          transform: translateX(100%);
        }
        main .side-controls--container {
          margin-left: 1rem; 
          padding: .75rem;
          width: max-content;
          height: max-content;
          background-color: #00000055;
          border: 3px solid #111;
          display: grid;
          border-radius: 5px;
          gap: 1rem;
        }
        main .side-controls--container-2 {
          display: none;
        }
        main .side-controls--container div {position: relative;cursor: pointer;}
        main .side-controls--container .settings {
          height: 2.5rem;
          width: 2.5rem;
          -webkit-filter: drop-shadow(1px 1px 0px 1px #00000020);
          filter: drop-shadow(1px 1px 0px 1px #00000020);
          margin: auto;
        }
        main .side-controls--container .velocity-level {
          height: 2.5rem;
          width: 2.5rem;
          -webkit-filter: drop-shadow(1px 1px 0px 1px #00000020);
          filter: drop-shadow(1px 1px 0px 1px #00000020);
          margin: auto;
        }
        main .side-controls--container .time-level {
          height: 2.5rem;
          width: 2.5rem;
          -webkit-filter: drop-shadow(1px 1px 0px 1px #00000020);
          filter: drop-shadow(1px 1px 0px 1px #00000020);
          margin: auto;
        }
        main .side-controls--container .volume-level {
          height: 2.5rem;
          width: 2.5rem;
          -webkit-filter: drop-shadow(1px 1px 0px 1px #00000020);
          filter: drop-shadow(1px 1px 0px 1px #00000020);
          margin: auto;
        }
        main .side-controls--container img {
          display: block;
          width: inherit;
          height: inherit;
          user-select: none;
        }
        main .side-controls--container div:active {
          transform: scale(0.90);
        }
        main .side-controls--container span {
          color: #4cd137;
          position: absolute;
          text-shadow: 2px 2px 1px #000;
          right: 0;
          bottom: 0;
          z-index: 1;
          font-size: 1.25rem;
        }
        main .side-controls--container span.easy {color: #00a8ff;}
        main .side-controls--container span.normal {color: #4cd137;}
        main .side-controls--container span.hard {color: #e84118;}
        main .side-controls--container span.none {display: none;}
        
        .active {
          cursor: pointer;
        }
        .active:active {
          color: #bbb;
        }
        
        .hole {
          background: #00000055;
          border-radius: 5px;
          border: 3px solid #111;
          position: relative;
          overflow: hidden;
        }
        .mole {
          background-image: url('images/mole.png');
          position: relative;
          height: 100%;
          width: 100%;
          margin: auto;
          background-size: contain;
          background-repeat: no-repeat;
          background-position: center;
          transition: all 0.5s;
          transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
          top: 100%;
        }
        .up .mole {top: 10%;}
        
        .hole img {
          position: absolute;
          bottom: 0;
          left: 0;
          width: 100%;
          z-index: 1;
        }
        
        .hud {
          display: flex;
          width: 800px;
          margin: auto;
        }
        .counter,
        .timer {
          background: #00000055;
          border: 5px solid #00000088;
          padding: 0;
          width: 200px;
        }
        .timer {
          width: 400px;
        }
        
        .enterName {
          position: absolute;
          display: flex;
          gap: 0.5rem;
          justify-content: center;
          align-items: center;
          width: 100%;
          min-height: 100%;
          flex-direction: column;
          background: #000000cc;
          z-index: 99;
          display: none;
          opacity: 0;
        }
        .enterName * {
          font-family: 'Titan One', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .enterName h2 {
          font-weight: 100;
          font-size: 2rem;
          letter-spacing: 1px;
          color: #f33;
          padding: 0;
        }
        .enterName h3 {
          font-weight: 500;
          color: #fff;
          padding: 0;
        }
        .enterName input[type='text'] {
          text-align: center;
          font-size: 1.4em;
          font-weight: 400;
          color: #222;
          text-shadow: 1px 1px 0px #00000030;
          border: 2px solid #00000030;
          border-radius: 1em;
          padding: 0.5em 0em;
          outline: none;
        }
        .scoreboard {
          position: absolute;
          top: 0;
          min-height: 100vh;
          z-index: 99;
          background: #000000cc;
          color: #fff;
          padding: 5rem;
          transition: opacity 1s;
          transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
          display: none;
          width: 100%;
        }
        .scoreboard * {
          font-family: 'Titan One', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        tbody:first-of-type td:first-child {
          position: relative;
          color: #ffa500;
        }
        tbody:first-of-type td:first-child::before {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          height: 2rem;
          width: 2rem;
          background-color: #ffd90020;
          content: '';
          border-radius: 50%;
          border: 2px solid #ffa500;
        }
        tbody:nth-of-type(2) td:first-child {
          position: relative;
          color: #ccc;
        }
        tbody:nth-of-type(2) td:first-child::before {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          height: 2rem;
          width: 2rem;
          background-color: #cccccc20;
          content: '';
          border-radius: 50%;
          border: 2px solid #ccc;
          box-shadow: 1px 1px 0px 1px #00000020;
        }
        tbody:nth-of-type(3) td:first-child {
          position: relative;
          color: #a52a2a;
        }
        tbody:nth-of-type(3) td:first-child::before {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          height: 2rem;
          width: 2rem;
          background-color: #a52a2a20;
          content: '';
          border-radius: 50%;
          border: 2px solid #a52a2a;
          box-shadow: 1px 1px 0px 1px #00000020;
        }
        .score-button {
          color: #fff;
          border: 0;
          font-size: 1.25rem;
          font-weight: lighter;
          background-color: #f33;
          position: absolute;
          top: 0.2rem;
          right: 0;
          transform: translateX(110%);
          height: 3rem;
          width: 3rem;
          cursor: pointer;
          outline: none;
        }
        .score-button:active {
          background-color: #c21e1e;
        }
        .block {
          display: block;
        }
        .flex {
          display: flex;
        }
        .opacity {
          opacity: 1;
        }
        
        table {
          margin: auto;
          position: relative;
        }
        thead {
          background-color: #f33;
          font-size: 2rem;
        }
        tbody {
          text-align: center;
          color: #333;
          font-size: 2rem;
          background-color: rgb(255, 255, 255);
        }
        th {
          font-weight: 400;
          /* padding: 0.2rem 1em; */
          padding: 0.75rem 2rem;
        }
        td {
          font-size: 1.5rem;
          font-weight: 400;
          padding: 0.75rem;
          border: 1px solid #bbb;
        }
        
        
        /* Powered By */
        .powered-by img {
          display: block;
          height: 48px;
        }
        .powered-by p:first-of-type {
          display: inline;
          color:  #3328fe;
        }
        .powered-by p {
          display: inline;
          color:  #3328fe;
        }
        .powered-by {
          background-color: #fff;
          font-size: 16px;
          position: fixed;
          gap: 0.5rem;
          display: flex;
          align-items: center;
          justify-content: center;
          right: 0.5rem;
          padding: 0.5rem 1.5rem;
          border-top-left-radius: 0.5rem;
          border-top-right-radius: 0.5rem;
          box-shadow: 0px 2px 6px 3px #33333330;
          bottom: 0;
          z-index: 99;
          text-decoration: none;
        }
        
        @media (max-width: 800px) {
          .view {
            transform: translateX(0);
          }
          main .side-controls {
            position: relative;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 100%;
            transform: translateX(0%);
            /* grid-column: 1/span3; */
            grid-column: 1 / span 3;
            gap: 1rem;
          }
          main .side-controls--container {
            margin-left: 0;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 5rem;
            margin-top: 0.5rem;
            padding: .75rem 1rem;
          }
          main .side-controls--container-2 {
            margin-top: 0.5rem;
            /* padding: .75rem; */
            background-color: #00000055;
            background-color: #fff;
            box-shadow: 0px 2px 6px 3px #33333330;
            display: grid;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            color: #fff;
            text-decoration: none;
          }
          main .side-controls--container-2 p {
            color: #3328fe;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          }
          main .side-controls--container-2 img {
            height: 2.5rem;
          }
          .powered-by {
            display: none;
          }
        }
        @media (max-width: 600px) {
          :root {
            font-size: 14px
          }
        }
        @media (max-width: 500px) {
          :root {
            font-size: 12px
          }
        }
        @media (max-width: 400px) {
          :root {
            font-size: 10px
          }
        }
    </style>
</head>

<body>
    
    <form class="modal">
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
                    <img src="images/hole.png">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png">
                    <div class="mole"></div>
                </div>
                <div class="hole">
                    <img src="images/hole.png">
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
        
    <script>
        // Elements
        const start_sfx = new Audio('audio/start.mp3');
        const hit_sfx = new Audio('audio/hit.mp3');
        const hit2_sfx = new Audio('audio/hit2.mp3');
        const peep_sfx = new Audio('audio/peep.mp3');
        const ding_sfx = new Audio('audio/ding.mp3');
        const pam_sfx = new Audio('audio/pam.mp3');
        const pum_sfx = new Audio('audio/pum.mp3');
        const holes = document.querySelectorAll('.hole');
        const moles = document.querySelectorAll('.moles');
        const counter = document.querySelector('.score span');
        const start = document.querySelector('.start');
        const retry = document.querySelector('.retry');
        const timer = document.querySelector('.time span');
        const velocityLevelDOM = document.querySelector('.velocity-level');
        const timeLevelDOM = document.querySelector('.time-level');
        const volumeLevelDOM = document.querySelector('.volume-level');
        let velocity_level = 1;
        let time_level = 1;
        let volume_level = 1;
        let count = 0;
        let lastHole;
        let timeUp;
        let started = false;

        const scoreboard = document.querySelector('.scoreboard');
        const nameContainer = document.querySelector('.enterName');
        const nameInput = document.querySelector('input[type=text]');
        const table = document.querySelector('.scores');
        let scoreboardTable;
        if (localStorage.getItem('scoreboard')) {
        scoreboardTable = JSON.parse(localStorage.getItem('scoreboard'));
        } else {
        scoreboardTable = [];
        }
        let finalScore;
        let name;
        const n = 0;

        // Modal
        const modal = document.querySelector('.modal');

        modal.addEventListener('click', e => {
        e.preventDefault();
        const selection = e.target.className;
        switch (selection) {
            case 'e':
            changeVelocityLevel(null, 3)
            changeTimeLevel(null, '5')
            break;
            case 'm':
            changeVelocityLevel(null, 1)
            changeTimeLevel(null, '30')
            break;
            case 'h':
            changeVelocityLevel(null, 2)
            changeTimeLevel(null, '10')
            break;
        
            default:
            return
        }

        modal.classList.add('hide');
        start_sfx.currentTime = 0
        start_sfx.play()
        });

        // Event Listeners
        start.addEventListener('click', startTime)
        retry.addEventListener('click', goMenu)
        holes.forEach(hole => hole.addEventListener('mousedown', up));
        holes.forEach(hole => hole.addEventListener('touchstart', up));
        nameInput.addEventListener('keyup', enterName);
        velocityLevelDOM.addEventListener('click', changeVelocityLevel)
        timeLevelDOM.addEventListener('click', changeTimeLevel)
        volumeLevelDOM.addEventListener('click', changeVolumeLevel)

        // Functions
        function up(e) {
        e.preventDefault();
        if (this.classList.contains('up')) {
            this.classList.remove('up');

            if(volume_level) {
            const x = Math.round(Math.random() * (2 - 1) + 1);
            if(x === 1) {
                hit_sfx.currentTime = 0;
                hit_sfx.play();
            } else {
                hit2_sfx.currentTime = 0.1;
                hit2_sfx.play();
            }
            }
            count++;
            counter.textContent = `${count}`;
        }
        }
        function peep() {
        const randomTime = getRandomTime();
        const hole = randomHole(holes);
        hole.classList.add('up');
        if(volume_level) {
            peep_sfx.currentTime = 0;
            peep_sfx.play();
        }
        setTimeout(() => {
            if (!timeUp) peep();
            hole.classList.remove('up');
        }, randomTime);
        }

        function randomHole(holes) {
        // Get me a Random DOM elements
        const index = Math.floor(Math.random() * holes.length);
        const hole = holes[index];
        if (lastHole === hole) {
            return randomHole(holes);
        }
        lastHole = hole;
        return hole;
        }

        function startTime() {
        if (started === false) {
            if(volume_level) {
            start_sfx.currentTime = 0.125;
            start_sfx.play();
            }
            counter.textContent = '0';
            count = 0;
            timeUp = false;
            time = 0;
            started = true;
            timer.textContent = `${getTime()}`;
            peep();
            countdown = setInterval(() => {
            time++;
            timer.textContent = `${getTime() - time}`;
            (getTime() - time === 3 || getTime() - time === 1) ? timer.style.color = '#f33' : timer.style.color = 'inherit'

            if (time >= getTime()) {
                clearInterval(countdown);
                timeUp = true;
                started = false;
                if(volume_level) {
                ding_sfx.currentTime = 0
                ding_sfx.play()
                }
                setTimeout(() => {
                scoreboardUpdater();
                }, 1000);
            }
            }, 1000);
        }
        }
        // Extra Stuff

        // save score to the database with better error handling
        function saveScoreToDatabase(name, score, difficulty) {
        console.log("Saving score:", { name, score, difficulty });
        
        return fetch('php/save_score.php', {
            method: 'POST',
            headers: {
            'Content-Type': 'application/json',
            },
            body: JSON.stringify({
            name: name,
            score: score,
            difficulty: difficulty,
            }),
        })
        .then(response => {
            // Check if response is ok (status in the range 200-299)
            if (!response.ok) {
            throw new Error('Network response was not ok: ' + response.status);
            }
            
            // Check content type to ensure it's JSON
            const contentType = response.headers.get('content-type');
            if (!contentType || !contentType.includes('application/json')) {
            throw new TypeError("Response is not JSON. Received: " + contentType);
            }
            
            return response.json();
        })
        .catch(error => {
            console.error('Error saving score:', error);
            // Return a standardized error response
            return { success: false, message: 'Failed to save score: ' + error.message };
        });
        }

        // get scores from the database
        function getScoresFromDatabase() {
        return fetch('php/get_scores.php')
            .then(response => response.json())
            .then(data => data.scores)
            .catch(error => {
            console.error('Error fetching scores:', error);
            return [];
            });
        }

        function scoreboardUpdater() {
        finalScore = count;
        nameContainer.classList.add('flex');
        setTimeout(() => {
            nameContainer.classList.add('opacity');
        }, 100);
        }

        // handle name entry and score saving with better error handling
        function enterName(e) {
        if (e.keyCode === 13) {
            name = this.value;
            if (!name.trim()) {
            alert('Please enter a valid name!');
            return;
            }
            
            this.value = '';
            nameContainer.classList.remove('flex');
            nameContainer.classList.remove('opacity');
            
            // Save score to database
            saveScoreToDatabase(name, finalScore, velocity_level)
            .then(response => {
                console.log("Response from server:", response);
                
                if (response && response.success) {
                // Show scoreboard
                displayScoreboard();
                } else {
                const errorMsg = response ? response.message : 'Unknown error';
                alert('Error saving score: ' + errorMsg);
                goMenu();
                }
            })
            .catch(error => {
                console.error("Unhandled error:", error);
                alert('An unexpected error occurred. Please try again.');
                goMenu();
            });
        }
        }

        // display the scoreboard
        function displayScoreboard() {
        scoreboard.classList.add('block');
        scoreboard.classList.add('opacity');
        
        // Get scores from database
        getScoresFromDatabase().then(scores => {
            // Build scoreboard table
            table.innerHTML = `
            <button class="score-button">X</button>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Score</th>
                    <th>Difficulty</th>
                </tr>
            </thead>`;

            // Add each score to the table
            for (let i = 0; i < scores.length; i++) {
            // Convert difficulty number to text
            let diffText = '';
            switch(scores[i].difficulty) {
                case 0: diffText = 'Easy'; break;
                case 1: diffText = 'Medium'; break;
                case 2: diffText = 'Hard'; break;
                default: diffText = 'Unknown';
            }
            
            table.innerHTML += `
            <tr>
                <td>${i + 1}</td>
                <td>${scores[i].name}</td>
                <td>${scores[i].score}</td>
                <td>${diffText}</td>
            </tr>
            `;
            }
            
            // Add event listener to close button
            table.querySelector('.score-button').addEventListener('click', goMenu);
        });
        }

        function goMenu() {
        scoreboard.classList.remove('block');
        scoreboard.classList.remove('opacity');
        nameContainer.classList.remove('flex');
        nameContainer.classList.remove('opacity');
        }

        function getRandomTime() {
        switch (velocity_level) {
            case 0:
            return Math.round(Math.random() * (1500 - 600) + 600);
            case 1:
            return Math.round(Math.random() * (1500 - 400) + 400);
            case 2:
            return Math.round(Math.random() * (450 - 450) + 450);
            default:
            return Math.round(Math.random() * (1500 - 400) + 400);
        }
        }
        function getTime() {
        switch (time_level) {
            case 0:
            return 30
            case 1:
            return 10
            case 2:
            return 5
            default:
            return 10
        }
        }

        function changeVelocityLevel(e, n) {
        const element = velocityLevelDOM.children[1]
        const currentLevel = n || +element.textContent
        if(volume_level) {
            start_sfx.currentTime = 0.125;
            start_sfx.play();
        }
        switch (currentLevel) {
            case 1:
            element.classList.remove('easy')
            element.classList.add('normal')
            element.textContent = '2'
            velocity_level = 1
            break;
            case 2:
            element.classList.remove('normal')
            element.classList.add('hard')
            element.textContent = '3'
            velocity_level = 2
            break;
            case 3:
            element.classList.remove('hard')
            element.classList.add('easy')
            element.textContent = '1'
            velocity_level = 0
            break;
            default:
            element.textContent = '2'
            velocity_level = 1
            break;
        }
        }
        function changeTimeLevel(e, n) {
        const element = timeLevelDOM.children[1]
        const currentLevel = n || element.textContent
        if(volume_level) {
            start_sfx.currentTime = 0.125;
            start_sfx.play();
        }
        switch (currentLevel) {
            case '30':
            element.classList.remove('easy')
            element.classList.add('normal')
            element.textContent = '10'
            time_level = 1
            break;
            case '10':
            element.classList.remove('normal')
            element.classList.add('hard')
            element.textContent = '5'
            time_level = 2
            break;
            case '5':
            element.classList.remove('hard')
            element.classList.add('easy')
            element.textContent = '30'
            time_level = 0
            break;
            default:
            element.textContent = '10'
            time_level = 1
            break;
        }
        }
        function changeVolumeLevel() {
        const element = volumeLevelDOM.children[1]
        const currentLevel = element.textContent
        switch (currentLevel) {
            case 'X':
            element.textContent = ''
            volume_level = 1
            break;
            default:
            element.textContent = 'X'
            volume_level = 0
            break;
        }
        if(volume_level) {
            start_sfx.currentTime = 0.125;
            start_sfx.play();
        }
        }

        // get difficulty name
        function getDifficultyName() {
        switch(velocity_level) {
            case 0: return 'Easy';
            case 1: return 'Medium';
            case 2: return 'Hard';
            default: return 'Unknown';
        }
        }
    </script>
</body>

</html>