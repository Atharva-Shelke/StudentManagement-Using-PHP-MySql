<?php

include 'connection.php';
include 'SqlLoader.php';

$id = $_GET['id'];

$query = str_replace(
    ['{{id}}'],
    [$id],
    getQuery("delete_student")
);

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