<?php
    if (isset($_POST["submit"])) {
        if ($_POST['username'] === 'james') {
            echo "Bond, James Bond";
        }

        echo "Bonjour " . $_POST['username'];
    }

    ?>
