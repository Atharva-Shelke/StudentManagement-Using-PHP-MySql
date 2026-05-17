<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="table-container">

    <div class="table-card">

        <div class="header">
            <h1>Student Management System Using PHP</h1>
            <a href="add.php" class="action-btn primary-btn">+ Add Student</a>
        </div>

        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th colspan="2">Actions</th>
            </tr>

            <?php
            $query = "SELECT * FROM students";
            $data = mysqli_query($con, $query);

            $result = mysqli_num_rows($data);

            if ($result) {

                while ($row = mysqli_fetch_array($data)) {
            ?>

            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['age']; ?></td>

                <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>" class="action-btn edit-btn">
                        Edit
                    </a>
                </td>

                <td>
                    <a onclick="return confirm('Are you sure you want to Delete?')"
                       href="delete.php?id=<?php echo $row['id']; ?>"
                       class="action-btn delete-btn">
                        Delete
                    </a>
                </td>
            </tr>

            <?php
                }
            } else {
            ?>

            <tr>
                <td colspan="5" class="no-record">
                    No Records Found
                </td>
            </tr>

            <?php
            }
            ?>

        </table>

    </div>

</div>

</body>
</html>