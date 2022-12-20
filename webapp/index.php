<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1>Welcome to Productive!</h1>

<div>
  Time left: <span id="timer">30</span>
</div>

<div>
  Score: <span id="score">0</span>
</div>

<button id="reset-btn">
  Reset game
</button>

<div id="field" style="height: 400px; width: 400px; border: 1px solid red; position: absolute;">
  <div
    id="target"
    style="height: 20px; width: 20px; background-color: red; position: relative;"
  >
  </div>
</div>
<?php require "view/blocks/page_end.php"; ?>

<script>
const decreaseTimer = function () {
  const timer = document.querySelector('#timer')
  const currentTime = parseInt(timer.innerText)
  const newTime = currentTime - 1;
  if (newTime <= 0) {
    alert('game finished. score is: ' + document.querySelector('#score').innerText)
    timer.innerText = 30;
  } else {
    timer.innerText = currentTime - 1;
  }
}

const jumpTarget = function () {
  const target = document.querySelector('#target')
  const newX = Math.floor(Math.random() * (400 - 50))
  const newY = Math.floor(Math.random() * (400 - 50))
  target.style.left = `${newX}px`
  target.style.top = `${newY}px`
}

const increaseScore = function (scoreEl) {
  const oldScore = parseInt(scoreEl.innerText)
  scoreEl.innerText = oldScore + 1;
}

const target = document.querySelector('#target');
const scoreEl = document.querySelector('#score');

target.addEventListener('click', () => {
  increaseScore(scoreEl);
  jumpTarget();
})

document.querySelector('#reset-btn').addEventListener('click', () => {
  document.querySelector('#score').innerText = 0;
  document.querySelector('#timer').innerText = 30;
})

setInterval(() => {
  decreaseTimer();
}, 1000);

setInterval(() => {
  jumpTarget();
}, 2000);
</script>