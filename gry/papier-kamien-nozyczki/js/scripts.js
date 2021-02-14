
var newGameBtn = document.getElementById('js-newGameButton');
newGameBtn.addEventListener('click', newGame);

var pickRock = document.getElementById('js-playerPick_rock'),
    pickPaper = document.getElementById('js-playerPick_paper'),
    pickScissors = document.getElementById('js-playerPick_scissors');

pickRock.addEventListener('click', function () { playerPick('kamień') });
pickPaper.addEventListener('click', function () { playerPick('papier') });
pickScissors.addEventListener('click', function () { playerPick('nożyce') });

var gameState = 'notStarted',
    player = {
        name: '',
        score: 0
    },
    computer = {
        score: 0
    };

var newGameElem = document.getElementById('js-newGameElement'),
    pickElem = document.getElementById('js-playerPickElement'),
    resultsElem = document.getElementById('js-resultsTableElement');

var playerPointsElem = document.getElementById('js-playerPoints'),
    playerNameElem = document.getElementById('js-playerName'),
    computerPointsElem = document.getElementById('js-computerPoints');

var playerPickElem = document.getElementById('js-playerPick'),
    computerPickElem = document.getElementById('js-computerPick'),
    playerResultElem = document.getElementById('js-playerResult'),
    computerResultElem = document.getElementById('js-computerResult');

var maxPoints = 10;

function setGameElements() {
    switch (gameState) {
        case 'started':
            newGameElem.style.display = 'none';
            pickElem.style.display = 'flex';
            resultsElem.style.display = 'flex';
            break;
        case 'ended':
            newGameBtn.innerText = 'Jeszcze raz';
            playerPickElem.innerText = 'Ruch gracza';
            computerPickElem.innerText = 'Ruch komputera';
            playerResultElem.innerText = 'Wynik gracza';
            computerResultElem.innerText = 'Wynik komputera';

        case 'notStarted':
        default:
            newGameElem.style.display = 'block';
            pickElem.style.display = 'none';
            resultsElem.style.display = 'none';
    }
}

setGameElements();



function newGame() {
    player.name = prompt('Graczu, wpisz swoje imię', 'imię gracza');
    if (player.name) {
        player.score = computer.score = 0;
        gameState = 'started';
        setGameElements();

        playerNameElem.innerHTML = player.name;
        setGamePoints();
    }

}

function getComputerPick() {
    var possiblePicks = ['kamień', 'papier', 'nożyce'];
    return possiblePicks[Math.floor(Math.random() * 3)];
}



function checkRoundWinner(playerPick, computerPick) {
    playerResultElem.innerHTML = computerResultElem.innerHTML = '';

    var winnerIs = 'player';

    if (playerPick == computerPick) {
        winnerIs = 'noone';
    } else if (
        (computerPick == 'kamień' && playerPick == 'nożyce') ||
        (computerPick == 'nożyce' && playerPick == 'papier') ||
        (computerPick == 'papier' && playerPick == 'kamień')) {

        winnerIs = 'computer';
    }

    if (winnerIs == 'player') {
        playerResultElem.innerHTML = "Wygrana!";
        player.score++;
    } else if (winnerIs == 'computer') {
        computerResultElem.innerHTML = "Wygrana!";
        computer.score++;
    } else {
        playerResultElem.innerHTML = computerResultElem.innerHTML = "Remis!";
    }

    setGamePoints();
    endGame();
}

function playerPick(playerPick) {
    var computerPick = getComputerPick();

    playerPickElem.innerHTML = playerPick;
    computerPickElem.innerHTML = computerPick;

    checkRoundWinner(playerPick, computerPick);
}

function setGamePoints() {
    playerPointsElem.innerHTML = player.score;
    computerPointsElem.innerHTML = computer.score;
}

function endGame() {
    if (player.score == maxPoints) {
        alert('Zwycięstwo!');
        gameState = 'ended';
        setGameElements();
    }

    if (computer.score == maxPoints) {
        alert('Przegrana!');
        gameState = 'ended';
        setGameElements();
    }
}
