<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
       <h1 class="subtitle">Add Student Details</h1>

        <form action="insert.php" method="POST">
            <div class="input-group">
                <input type="text" name="firstname" placeholder="First Name" required>
            </div>

            <div class="input-group">
                <input type="text" name="lastname" placeholder="Last Name" required>
            </div>

            <div class="input-group">
                <input type="number" name="age" placeholder="Age" min="1" required>
            </div>

            <div class="button-group">
                <input type="submit" name="save_btn" value="Save Student" class="btn primary-btn">
                <a href="index.php" class="btn secondary-btn">View Records</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>