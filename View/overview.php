<?php require 'includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->


<?php foreach($students as $student){
    echo '<div class="card">
            <div class="card-header">
                '. $student['first_name'] . ' ' . $student['last_name'] . '
    </div>
            <div class="card-body">
                <h4 class="card-title"><a href="/?user=' . $student['id'] . '">Profile</a></h4>
           <p class="card-text">' . $student['email'] . '</p>
            </div>
            </div>';
} ?>

<?php require 'includes/footer.php' ?>


