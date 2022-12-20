<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1>Welcome to Productive!</h1>

<div>
  Time left: <span id="timer">10</span>
</div>

<div>
  Score: <span id="score">0</span>
</div>

<button id="reset-btn">
  Reset game
</button>

<div id="field" style="height: 400px; width: 400px; border: 1px solid red; position: absolute;">
  <!-- <div
    id="target"
    style="height: 20px; width: 20px; background-color: red; position: relative;"
  > -->
  <div
    id="target"
    style="height: 30px; width: 40px; background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIADEAOAMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQIFBgcEA//EADgQAAIBAwIEAwQFDQAAAAAAAAECAwAEEQUhBhIxUUFhgRMicaEUMkKRwQczNkNicnOxssLR0vD/xAAbAQADAAIDAAAAAAAAAAAAAAADBAUBAgAGB//EACwRAAIBAQUECwEAAAAAAAAAAAECAAMEERIxUQUTIXEVIiMyNEFCgZHB0RT/2gAMAwEAAhEDEQA/ANWqh8S6y1/cPBC5FlEcYX9aR4nuOw9e2JbiniE2ftLGzUGYqFklJ/N82wx54OfLbrVOZliTJ2UYAwKBa63oX3gKjeQjeaRt1QAfttinLdXVosjwPLAzLhmhcjI7HG/r4V62lhf6hb3FzDGIbO2jaSe4fIVFUZPhknHgB61GcOXFnrmpW1n9JubZbpxHb3DqpBcpzhWQkMNtuYZXPQnrSyUnzE0VGzE7BKhGVDnO+fZtv8qleG9WGnakgd2S2mPLNzKQo7NnoMbb9qdfcG63p08MEXs54535I2hJbBwTvzdNgfLbrvVU167bSNWudNZ/bXFoQLjlm9mq+4XPKXwrEKPq5BJ2GetbJTdXvEyEYGbXHIkqLJE6ujDKspyCPI0VT+H7PVNJitNQtXF9ol8kcpdNiiuPdcqTkHcZ67Zz0oqmj4hfDiV13eWR5JTzSOxdz3YnJpCARgjIopCQASTgDqTUMkkxSdVrqV7Z2lxZQtHJY3CMktrIDyMGGG6bjPliq9w1o+m8M6zHqsFpNPcxEm3W4lUrGx2zhcFj61J/SIu5x35Tj76WNomYmNkLHrgjNGWrUUXQvaIOIk4eMNba8W9knijCoVEQj90AkdR1HQeJqm8T6PpvEWtSaveSJDPLgzrA2EkIAGcEkjYeFTVIABnAA8Tisb99ZrvG1l10KDVLi1t0vZDa6dbqiQWUcYVXVRgZ8eUbbE747dUrw4I1JZYp9PaUM0OGiGckKeoHkD93NRVajcUBEOMpU+hIIIIJBB8COorxucleXoDvnw2PQ1AW9zLbnMbbdj/3+akI9WBHv8y/FOb5gj+VctWwLZZ26q4hqPzOJpVF94M6jBKTkgekzD8KY8Un2ldv3lVh8t6QapCftL68w/tpTqcAH1k+9v8AWkP4rUDdum+DHl2hVGZBjOVl7r8InH406OKSeQRoDK7dE9k7k+mafZanaS3yRXsjW9qR706KXIPw2289/hWoaLp+nWlus2ncsolUH6Rzc5cfHt5DAo3R1oS41VKg6wtO2luOESL4L0drK1e6vIGjunJVebYrHt9nwyQfPpRVloptFCLhEG7l2LGYCOlFFFejSJE8TSnpRRXDMxK1b8mn6KQ/x5v6zRRUbbvh15/RjFl755S00UUV1SUJ/9k='); background-size: cover; position: relative;"
  >
  </div>
</div>
<?php require "view/blocks/page_end.php"; ?>

<script>
const randomNumbers = []
for(let i = 0; i < 10000; i++) {
  randomNumbers.push(Math.random() * (400 - 50))
}


const decreaseTimer = function () {
  const timer = document.querySelector('#timer')
  const currentTime = parseInt(timer.innerText)
  const newTime = currentTime - 1;
  if (newTime <= 0) {
    alert('game finished. score is: ' + document.querySelector('#score').innerText)
    timer.innerText = 10;
  } else {
    timer.innerText = currentTime - 1;
  }
}

let randomNumberCounter = 0;

// const target = document.querySelector('#target')
const jumpTarget = function (target) {
  const newX = Math.floor(Math.random() * (400 - 50))
  const newY = Math.floor(Math.random() * (400 - 50))
  // const newX = randomNumbers[randomNumberCounter]
  // randomNumberCounter += 1;
  // const newY = randomNumbers[randomNumberCounter];
  // randomNumberCounter += 1;

  target.style.left = `${newX}px`
  target.style.top = `${newY}px`
}

let score = 0;

const increaseScore = function (scoreEl) {
  const oldScore = parseInt(scoreEl.innerText)
  scoreEl.innerText = oldScore + 1;
}

const target = document.querySelector('#target');
const scoreEl = document.querySelector('#score');

target.addEventListener('click', () => {
  increaseScore(scoreEl);
  jumpTarget(target);
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

// setInterval(() => {
//   document.querySelector('#target').click()
// }, 0.01);
</script>