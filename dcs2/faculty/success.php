<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Creation Success</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            text-align: center;
        }

        h1 {
            color: #28a745; /* Green color */
        }

        img {
            margin-top: 20px;
            width: 200px;
            height: 200px;
        }

        p {
            margin-top: 20px;
        }

        a {
            color: #007bff; /* Blue color */
            text-decoration: none;
        }

        .redirect-message {
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>

<body>

    <h1>Class Created Successfully!</h1>

    <?php
    // Retrieve the class ID from the query parameter
    $classId = $_GET['class_id'] ?? '';

    // Display success message with QR code and verification link
    echo "<p>QR Code generated:</p>";
    echo "<img src='qrcodes/class_$classId.png' alt='QR Code'>";

    echo "<p>To verify attendance, students can scan the QR code or click the link below:</p>";
    echo "<p><a href='verify-attendance.php?class_id=$classId' target='_blank'>Verify Attendance</a></p>";
    ?>

    <p class="redirect-message">Redirecting to class creation page in 5 seconds...</p>

    </body>

</html>
<?php
// Redirect to class creation page after 5 seconds
header("refresh:5;url=create-class-attendance.php");
?>
