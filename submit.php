<?php
include "connection.php";

    if ($query) {
        ?>
        <script>
            swal({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
        </script>
        <?php
    }
?>