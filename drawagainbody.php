<?php
session_start();
require 'autoload.php';
foreach($card_array as $card) : ?>
       <img src="<?php echo $card['image'];?>">
   <?php endforeach; ?>

   <h1><?php echo "Your card total is $card_total"; ?></h1>

   <?php if($card_total > 21): ?>
       Sorry your total is above 21
       <a href="index.html">Play Again</a>
   <?php elseif($card_total == 21): ?>
       You win, take a trip to Vegas
       <a href="index.html">Play Again</a>
   <?php else: ?>
       <a href="drawagain.html">Draw again</a>
   <?php endif; ?>