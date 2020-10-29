<?php require 'includes/header.php' ?>


<?php

echo '<div class="card"> <div class="card-header"> ' . $student['first_name'] . ' ' . $student['last_name'] . '</div><div class="card-body"> <h4 class="card-title"></h4>  <p class="card-text">' . $student['email'] . '</p> </div> </div>';
echo '<input type="submit" value="Edit">'
?>


<?php require 'includes/footer.php' ?>
