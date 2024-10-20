<?php
include "barber.php";
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "db_table";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $mobile = $_POST["mobile"];
    $time = $_POST["time"];
    $branches = $_POST["branches"];
    $date = $_POST["date"];
    $num_people = $_POST["num_people"];
    $barber = $_POST["barber"];

    // Insert data into the database
    $sql = "INSERT INTO barber_01 (full_name, mobile, time,branches,date,num_people,barber)
            VALUES ('$full_name', '$mobile', '$time', '$branches', '$date', '$num_people', '$barber')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
  swal({
    title: "Submit success!",
    text: "You clicked the button!",
    icon: "success",
  });
  </script>
  <?php
    } else {
        ?>
        <script>
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          </script>
          <?php
    }
        
    
}
// Close the database connection
$conn->close();
