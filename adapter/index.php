<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adapter</title>
</head>

<body>
<style>
.result 
{
    overflow: hidden;
  border-right: .10em solid orange; 
  white-space: nowrap; 
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .10em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}
}

</style>
<?php

include("poultry.php");
echo '<div class="result">';
function duck_interaction($duck) 
{
    $duck->quack();
    $duck->fly();
}

    $duck = new Duck;
    $turkey = new Turkey;
    $turkey_adapter = new TurkeyAdapter($turkey);
    echo "The Turkey says...\n";
    $turkey->gobble();
    $turkey->fly();
    echo "The Duck says...\n";
    duck_interaction($duck);
    echo "The TurkeyAdapter says...\n";
    duck_interaction($turkey_adapter);
    echo '</div>';
?>

</body>

</html>