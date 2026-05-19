<?php

include 'connection.php';

$id = $_GET['id'];

$query = "DELETE FROM students WHERE id='$id'";

$data = mysqli_query($con, $query);

if ($data) {

    echo "
    <script>
        alert('Data Deleted Successfully');
        window.location.href='index.php';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Please Try Again');
        window.location.href='index.php';
    </script>
    ";
}
?>