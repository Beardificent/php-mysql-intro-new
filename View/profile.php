<?php require 'includes/header.php' ?>


<?php

echo '<div class="card"> <div class="card-header"> ' . $student['first_name'] . ' ' . $student['last_name'] . '</div><div class="card-body"> <h4 class="card-title"></h4>  <p class="card-text">' . $student['email'] . '</p> </div> </div>';

echo '<form action="?Edit=' .  $student['id'] . '" method="post">
<input type="submit" name="action" value="Edit">
</form>';

echo '<form action="?page=overview" method="post">
        <input type="submit" value="Overview">';
?>


<?php require 'includes/footer.php' ?>
