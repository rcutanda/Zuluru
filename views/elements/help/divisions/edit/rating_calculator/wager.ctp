<p><?php __('The Wager ratings calculator is the current recommended choice.'); ?></p>
<p><?php __('This uses a wagering system, where the final score determines the total amount of the pot. It\'s based around a winning score of 15 points and tweaked to produce the same ratings change for similar point differentials for higher/lower final scores.'); ?></p>
<p><?php __('Each team contributes a percentage of the pot based on their expected chance to win. The losing team always takes away the same number of rating points as their game points, while the winning team takes away the remainder.'); ?></p>
<p><?php __('Thus, the point differential change amounts to:'); ?></p>
<pre><code>(<?php __('total_pot - loser_score - winner_wager'); ?>)</code></pre>
