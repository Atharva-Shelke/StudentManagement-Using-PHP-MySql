<?php
include 'connection.php';

if (isset($_POST['save_btn'])) {

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];

    $query = "INSERT INTO students(firstname, lastname, age)
              VALUES('$fname', '$lname', '$age')";

    $data = mysqli_query($con, $query);

    if ($data) {
        echo "
        <script>
            alert('Data Saved Successfully');
            window.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Please Try Again');
        </script>
        ";
    }
}
?>