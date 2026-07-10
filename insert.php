<?php
include 'connection.php';
include 'SqlLoader.php';

if (isset($_POST['save_btn'])) {

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];

    $query = str_replace(
        ['{{firstname}}', '{{lastname}}', '{{age}}'],
        [$fname, $lname, $age],
        getQuery('insert_student')
    );

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