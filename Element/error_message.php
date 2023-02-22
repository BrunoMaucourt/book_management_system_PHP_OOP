<?php

    // Show error message if it exist
    if(isset($_SESSION['error'])){
        // Show error message
        echo '<div class="alert alert-danger container-fluid text-center" role="alert">';
        echo $_SESSION['error'];
        echo '</div>';
        unset($_SESSION['error']);
    }