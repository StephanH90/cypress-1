<?php $page_title = "Home ★ Productive"; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $page_title ?? "Untitled Page"; ?></title>

		<link rel="stylesheet" type="text/css" href="view/stylesheets/style.css">

		<script src="controller/requests.js"></script>

		<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <style>
      #board {
        width: 600px;
        height: 600px;
      }
      #board div {
        width: 190px;
        height: 190px;
        border: 1px solid black;
        display: inline-block;
        float: left;
        font-size: 180px;
        text-align: center;
      }
    </style>
	</head>
<body>
<div class="content-container">
<div class="content">
        
<h1>Welcome to tictactoe</h1>

<div id="board">
  <div id="r1-c1"></div>
  <div id="r1-c2"></div>
  <div id="r1-c3"></div>

  <div id="r2-c1"></div>
  <div id="r2-c2"></div>
  <div id="r2-c3"></div>
  
  <div id="r3-c1"></div>
  <div id="r3-c2"></div>
  <div id="r3-c3"></div>
</div>

<button id="restart">Restart game</button>

<script>
const onSquareClick = function (event) {
  const clickedSquare = event.target;
  
  if (alertIfNonEmptySquareIsClicked(clickedSquare)) {
    return
  }

  selectSquare(event.target);

  if (checkIfAPlayerHasWon()) {
    setWinnerText()
  }

  setNextPlayer()
}

const setWinnerText = () => {
  document.querySelector('h1').innerText = 'Player ' + currentPlayer + ' has won'
}

const alertIfNonEmptySquareIsClicked = (clickedSquare) => {
  if (clickedSquare.innerText !== '') {
    alert('You need to select an empty square')
    return true;
  }
}

const selectSquare = function (clickedSquare) {
  clickedSquare.innerText = currentPlayer === 'X' ? 'X' : 'O'
}

const checkIfAPlayerHasWon = function () {
  // Declare variables which hold different cells (row#coll#)
  const r1c1 = document.querySelector('#r1-c1')
  const r1c2 = document.querySelector('#r1-c2')
  const r1c3 = document.querySelector('#r1-c3')
  
  const r2c1 = document.querySelector('#r2-c1')
  const r2c2 = document.querySelector('#r2-c2')
  const r2c3 = document.querySelector('#r2-c3')
  
  const r3c1 = document.querySelector('#r3-c1')
  const r3c2 = document.querySelector('#r3-c2')
  const r3c3 = document.querySelector('#r3-c3')
  
  // check rows
  if (r1c1.innerText === currentPlayer && r1c2.innerText === currentPlayer && r1c3.innerText === currentPlayer) {
    return true
  }
  if (r2c1.innerText === currentPlayer && r2c2.innerText === currentPlayer && r2c3.innerText === currentPlayer) {
    return true
  }
  if (r3c1.innerText === currentPlayer && r3c2.innerText === currentPlayer && r3c3.innerText === currentPlayer) {
    return true
  }

  // check columns
  if (r1c1.innerText === currentPlayer && r2c1.innerText === currentPlayer && r3c1.innerText === currentPlayer) {
    return true
  }
  if (r1c2.innerText === currentPlayer && r2c2.innerText === currentPlayer && r3c2.innerText === currentPlayer) {
    return true
  }
  if (r1c3.innerText === currentPlayer && r2c3.innerText === currentPlayer && r3c3.innerText === currentPlayer) {
    return true
  }

  // check diagonals
  if (r1c1.innerText === currentPlayer && r2c2.innerText === currentPlayer && r3c3.innerText === currentPlayer) {
    return true
  }
  if (r3c1.innerText === currentPlayer && r2c2.innerText === currentPlayer && r1c3.innerText === currentPlayer) {
    return true
  }

  // nobody has won
  return false
}

const setNextPlayer = function () {
  currentPlayer = currentPlayer === 'X' ? 'O' : 'X'
}

const restartGame = function () {
  // Reset cell values
  document.querySelectorAll('#board div').forEach((element) => {
    element.innerText = '';
  })

  // Reset the header
  document.querySelector('h1').innerText = 'Welcome to TicTacToe'
  currentPlayer = 'X'
}

let currentPlayer = 'X'; // state which tracks whos turn it currently is

document.querySelectorAll('#board div').forEach((element) => {
  element.addEventListener('click', onSquareClick)
})

document.querySelector('#restart').addEventListener('click', restartGame)
</script>

