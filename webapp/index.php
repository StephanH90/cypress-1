<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1>Welcome to Productive!</h1>
<?php require "view/blocks/page_end.php"; ?>

<script>
window.fizzbuzz = function (number) {
  let output = ''
  const errorMsg = 'Number must be divisible by 3 or 5'
  
  if (number % 3 === 0) {
    output += 'fizz'
  }
  if (number % 5 === 0) {
    output += 'buzz'
  }

  return output || errorMsg
}

window.add = function (numbersString) {
  // "1,2,3".split(',')
  // => ["1","2","3"]
}

// window.add("1,2")
// => 3


</script>