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
  console.log("🦠 event:", event)
  console.log("clicked target is:", event.target)
  // call the selectSquare function here
}

const selectSquare = function (clickedSquare) {
  // write the logic to:
  // 1. mark a square as clicked (if its not selected yet!)
  // 2. display a character inside (X or O depending on whos turn it is)
  // 3. detect if somebody has won or if the game is over with no winner
}

const restartGame = function () {
  // write logic to reset the state so a new game can be played
}

let currentPlayer = 'X'; // state which tracks whos turn it currently is

const board = {
  "r1-c1": null,
  "r1-c2": null,
  "r1-c3": null,
  "r2-c1": null,
  "r2-c2": null,
  "r2-c3": null,
  "r3-c1": null,
  "r3-c2": null,
  "r3-c3": null,
}

document.querySelectorAll('#board div').forEach((element) => {
  element.addEventListener('click', onSquareClick)
})

document.querySelector('#restart').addEventListener('click', restartGame)
</script>

