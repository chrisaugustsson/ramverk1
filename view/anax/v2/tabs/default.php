<?php

namespace Anax\View;

/**
 * Render content within an article.
 */

// Show incoming variables and view helper functions
// echo showEnvironment(get_defined_vars(), get_defined_functions());
?>

<div class="tabs">
  <ul>
    <?php for ($i=1; $i < 7; $i++) : ?>
        <li class="<?= currentroute() == "redovisning/kmom0" . $i ? "is-active" : "" ?>"><a href="<?= url("redovisning/kmom0" . $i) ?>">Kmom0<?= $i ?></a></li>
    <?php endfor; ?>
    <li class="<?= currentroute() == "redovisning/kmom10" ? "is-active" : "" ?>"><a href="<?= url("redovisning/kmom10") ?>">Kmom10</a></li>
  </ul>
</div>