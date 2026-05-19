<?php
include 'connection.php';

$id = $_GET['id'];

$select = "SELECT * FROM students WHERE id='$id'";
$data = mysqli_query($con, $select);

$row = mysqli_fetch_array($data);

if (isset($_POST['update_btn'])) {

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];

    $update = "UPDATE students 
               SET firstname='$fname',
                   lastname='$lname',
                   age='$age'
               WHERE id='$id'";

    $result = mysqli_query($con, $update);

    if ($result) {

        echo "
        <script>
            alert('Data Updated Successfully');
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="card">

        <h1 class="subtitle">
            Edit Student Information
        </h1>

        <form action="" method="POST">

            <div class="input-group">
                <input
                    type="text"
                    name="firstname"
                    value="<?php echo $row['firstname']; ?>"
                    placeholder="First Name"
                    required
                >
            </div>

            <div class="input-group">
                <input
                    type="text"
                    name="lastname"
                    value="<?php echo $row['lastname']; ?>"
                    placeholder="Last Name"
                    required
                >
            </div>

            <div class="input-group">
                <input
                    type="number"
                    name="age"
                    value="<?php echo $row['age']; ?>"
                    placeholder="Age"
                    min="1"
                    required
                >
            </div>

            <div class="button-group">

                <input
                    type="submit"
                    name="update_btn"
                    value="Update Student"
                    class="btn primary-btn"
                >

                <a href="index.php" class="btn secondary-btn">
                    Back
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>